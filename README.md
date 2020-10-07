# Teste de Carga, Performance e Regressão
Este repositório hospeda um código Laravel utilizado para execução de laboratórios de teste de carga e performance assim como o monitoramento da aplicação.

Para subir o ambiente, basta executar:
```
docker-compose --compatibility up -d

# lembre-se de entrar no contêiner do laravel e executar os comandos:

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