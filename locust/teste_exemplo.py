import time

from locust import HttpUser, task, between, SequentialTaskSet
from locust.contrib.fasthttp import FastHttpUser
from locust.exception import StopUser

apiURL = '/api/v1/todo'
tarefa = { 'title': 'Lorem Ipsum', 'description': 'Dolor sit amet', 'notes': 'Consectetur adipiscing elit', 'done': 0 }
novaTarefa = { 'title': 'Sed ut perspiciatis', 'description': 'Architecto beatae', 'notes': 'Nemo enim ipsam voluptatem quia voluptas', 'done': 1 }

class TestaComportamento(SequentialTaskSet):
    @task
    def login(self):
        self.client.post('/api/login', {'email': 'qualquer_email', 
                                    'password': 'qualquer_senha'})
        pass

    @task
    def view_all(self):
        self.client.get(apiURL)
        pass

    @task
    def tarefaHandler(self):
        with self.client.post(apiURL, tarefa) as response:
            print(response.status_code)
            if response.status_code == 200 or response.status_code == 201:
                tarefaId = response.json().get('id')
                print(tarefaId)


    @task
    def stop(self):
        self.interrupt(False)
        raise StopUser()

class InicioTeste(FastHttpUser):
    wait_time = between(1, 5)
    tasks = [TestaComportamento]



