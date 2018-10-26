<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('../sendgrid-php/sendgrid-php.php');
define("SENDGRIP_API_KEY", "");

use SendGrid\Mail\Content;
use SendGrid\Mail\From;
use SendGrid\Mail\To;

// Retorno
try {
    $responseArray = [
        'type' => 'success',
        'message' => 'Sua mensagem foi enviada com sucesso!'
    ];

    //Dados do formulario
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['phone'];
    $mensagem = $_POST['message'];

    // Template
    $template = file_get_contents('tpl_contato.htm');

    // Replaces
    $template = str_replace("#NOME#", $nome, $template);
    $template = str_replace("#EMAIL#", $email, $template);
    $template = str_replace("#TELEFONE#", $telefone, $template);
    $template = str_replace("#MSG#", $mensagem, $template);

    $mail = new \SendGrid\Mail\Mail();

    $mail->setFrom(new From($email, $nome));
    $mail->setSubject("[Biologika] Contato");
    $mail->addTo(new To('contato@biologikaodontologia.com.br', 'Vanessa Chazan'));
    $mail->addContent(new Content("text/plain", "Contato"));
    $mail->addContent(new Content('text/html', $template));

    $sendgrid = new SendGrid(SENDGRIP_API_KEY);

    $response = $sendgrid->send($mail);

    if ($response->statusCode() == 400) {
        throw new Exception();
    }

} catch (Exception $ex) {
    $responseArray['message'] = 'Foi encontrado um erro ao enviar a mensagem, por favor, tente novamente';
    $responseArray['type'] = 'danger';
} finally {
    header('Content-Type: application/json');
    echo json_encode($responseArray);
}

