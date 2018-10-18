# Biologika

## Desenvolvimento

Utilizar o docker para desenvolvimento através do Docker Compose

```shell
docker-compose up -d
```
Onde a aplicação irá rodar no `http://localhost:8000`

## Banco para desenvolvimento

O banco é rodado através do docker na porta 4200 no host e 3306 no container. 
Para conectar ao banco e visualizá-lo você pode fazer através do console:

```shell
docker exec -it biologika_db_1 /bin/bash
```
 
 E:
 
 ```shell
 mysql -h localhost -u user -ppassword biologika
 ```
  
Ou através do seu gerenciador de DB.

## Exportação do DB
 ```shell
 db.sh export 
 ```
 
 ## Restaurar o DB
  ```shell
  db.sh restore 
  ```
  
## Admin
Usuário: admin
Senha: &!sI44I9J$zQ68cw^8