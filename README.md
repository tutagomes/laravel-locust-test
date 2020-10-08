# Teste de Carga, Performance e Regressão
Este repositório hospeda um código Laravel utilizado para execução de laboratórios de teste de carga e performance assim como o monitoramento da aplicação.

Para subir o ambiente, basta executar:
```
docker-compose --compatibility up -d

# lembre-se de entrar no contêiner do laravel e executar os comandos:
docker exec -ti laravel-locust-test_laravel_1 /bin/bash

php artisan migrate
php artisan key:generate
php artisan config:cache
php artisan storage:link
```

Para executar os testes diretamente:

```
pip3 install locustio

locust -f locust/teste<number>.py –H http://127.0.0.1:8080

```

Ou se preferir com Docker

```
 docker run -p 8089:8089 -v $PWD/locust:/mnt/locust --network=network-todo locustio/locust -f /mnt/locust/teste_exemplo.py -H http://laravel-locust-test_laravel_1:80
```

