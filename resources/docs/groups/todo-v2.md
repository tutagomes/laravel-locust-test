# Todo V2

APIs para controlar tarefas - versão 2

## Mostra todas as tarefas




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v2/todo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v2/todo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 143,
        "created_at": "2020-10-07T18:55:09.000000Z",
        "updated_at": "2020-10-07T18:55:09.000000Z",
        "title": "Lorem Ipsum",
        "description": "Dolor sit amet",
        "notes": "Consectetur adipiscing elit",
        "done": 0
    }
]
```

### Request
<small class="badge badge-green">GET</small>
 **`api/v2/todo`**



## Cria uma nova tarefa




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v2/todo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Lorem Ipsum","description":"Dolor Sit Amet","notes":"Consectetur Adipiscing","done":true}'

```

```javascript
const url = new URL(
    "http://localhost/api/v2/todo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Lorem Ipsum",
    "description": "Dolor Sit Amet",
    "notes": "Consectetur Adipiscing",
    "done": true
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/v2/todo`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>title</b></code>&nbsp; <small>string</small>     <br>
    Titulo da Tarefa.

<code><b>description</b></code>&nbsp; <small>string</small>     <br>
    Descrição da Tarefa.

<code><b>notes</b></code>&nbsp; <small>string</small>     <br>
    Notas relacionadas à Tarefa.

<code><b>done</b></code>&nbsp; <small>boolean</small>     <br>
    Indicativo de que tarefa foi concluída.



## Mostra uma tarefa




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v2/todo/{todo}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v2/todo/{todo}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 143,
    "created_at": "2020-10-07T18:55:09.000000Z",
    "updated_at": "2020-10-07T18:55:09.000000Z",
    "title": "Lorem Ipsum",
    "description": "Dolor sit amet",
    "notes": "Consectetur adipiscing elit",
    "done": 0
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/v2/todo/{todo}`**



## Atualiza uma tarefa




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v2/todo/{todo}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Lorem Ipsum","description":"Dolor Sit Amet","notes":"Consectetur Adipiscing","done":true}'

```

```javascript
const url = new URL(
    "http://localhost/api/v2/todo/{todo}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Lorem Ipsum",
    "description": "Dolor Sit Amet",
    "notes": "Consectetur Adipiscing",
    "done": true
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-darkblue">PUT</small>
 **`api/v2/todo/{todo}`**

<small class="badge badge-purple">PATCH</small>
 **`api/v2/todo/{todo}`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>title</b></code>&nbsp; <small>string</small>     <br>
    Titulo da Tarefa.

<code><b>description</b></code>&nbsp; <small>string</small>     <br>
    Descrição da Tarefa.

<code><b>notes</b></code>&nbsp; <small>string</small>     <br>
    Notas relacionadas à Tarefa.

<code><b>done</b></code>&nbsp; <small>boolean</small>     <br>
    Indicativo de que tarefa foi concluída.



## Deleta uma tarefa




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v2/todo/{todo}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v2/todo/{todo}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-red">DELETE</small>
 **`api/v2/todo/{todo}`**




