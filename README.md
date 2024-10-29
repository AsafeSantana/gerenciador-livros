# Gerenciador de Livros

## Tecnologias usadas no Backend:
- PHP
- Laravel
- MySQL

## Tecnologias usadas no Frontend:
- React
- SASS

## Clonando o Repositório
Para clonar este repositório, utilize o seguinte comando no terminal:

```bash
git clone https://github.com/AsafeSantana/gerenciador-livros.git
cd gerenciador-livros
  ```
## Depois de ter clonado o repositório, acesse o backend:

```bash
cd zievo
  ```

**Configure o Banco de Dados:**
    - Edite o arquivo `.env` com as credenciais do seu banco de dados MySQL.

## Instalação
Criar o Banco de Dados Execute o comando abaixo para criar a tabela necessária no banco de dados:

```bash
php artisan migrate
```

## Popular o Banco de Dados Em seguida, execute o comando para inserir alguns exemplos de "Books":

```bash
php artisan db:seed --class=BooksSeeder
 ```
## Acessando a Aplicação
Depois de configurar o banco de dados, inicie o servidor local:

```bash
php artisan serve
```

## Funcionalidades
Na aplicação, você poderá:

- Criar, alterar, listar e excluir Livros.
- Filtrar Livros com base no título do livro.

## Rotas da API
### Com o POSTMAN você poderá efetuar os testes dessas rotas:
- POST | CADASTRAR LIVROS: http://127.0.0.1:8000/api/books
- GET | LISTAR LIVROS: http://127.0.0.1:8000/api/books
- GET | BUSCAR LIVRO POR TÍTULO: http://127.0.0.1:8000/api/books/search?titulo={titulo}
- PUT | EDITAR LIVRO: http://127.0.0.1:8000/api/books/{id}
- DELETE | DELETAR LIVRO: http://127.0.0.1:8000/api/books/{id}


## Com seu Backend rodando, acesse o FRONTEND em:

```bash
cd frontend-livros
  ```
## Caso não tenha o node instalado, será necessário instalar. Caso já tenha rode o seguinte comando no terminal: 

```bash
npm start
  ```

## Depois abra o navegador na URL:
`http://localhost:3000/`
