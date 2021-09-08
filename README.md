# sistema de produtos

CRUD de produtos feito em laravel com API

## API

### auth

crie um usuário em http://34.201.51.133/ para criar um token JWT na api com a requisição `POST` para:

    http://34.201.51.133/api/auth/login

com o `body`

    {"email": "email_cadastrado","password": "senha_cadastrada"}

Se a senha e o email estiverem certos ele retornara um json nesse formato

    {"access_token": "123abc","token_type": "bearer","expires_in": 3600}

Onde vem o token de acesso,o tipo de token e o tempo de duração do token.

### Listar

Liste os produtos com a requisição `GET`

    http://34.201.51.133/api/produtos/

para pegar um produto especifico coloque o id do produto na frente da url

    http://34.201.51.133/api/produtos/{id}

### salvar

Salve um novo produto com o metodo `post`

    http://34.201.51.133/api/produtos

onde o corpo vai as informações do produto como no exemplo:

    {"nome": "teste23","preco": "12","quantidade": "12"}

### editar

edite um produto com o metodo `PUT` com o id do produto editado na frente:

    http://34.201.51.133/api/produtos/{id}

com o corpo da requisição :

    {"nome": "produto_teste","preco": "1","quantidade": "1"}

### apagar

Apague um produto com a requisição `DELETE` com o id do produto na URL:

    http://34.201.51.133/api/produtos/{id}

### API usada

a API usada foi a https://kanye.rest/ usada para mostrar frases aleatorias das musicas do Kayne West
