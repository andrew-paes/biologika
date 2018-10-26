"use strict";
$(function () {
    var contactForm = $('#contact-form');

    if (contactForm.length) {
        contactForm.validator();

        contactForm.on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                e.preventDefault();

                var btn = contactForm.find('.btn');

                var url = "/email/form_contato.php";

                btn.val('Enviando');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(this).serialize(),
                    success: function (data) {
                        var messageAlert = 'alert-' + data.type;
                        var messageText = data.message;

                        var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                        btn.val('Enviar');

                        if (messageAlert && messageText) {
                            contactForm.find('.messages').html(alertBox);
                            contactForm[0].reset();
                        }
                    }
                });
            }
            return false;
        })
    }
});