# Gerenciador de Livros

## Tecnologias
- PHP
- Laravel
- MySQL

## Clonando o Repositório
Para clonar este repositório, utilize o seguinte comando no terminal:

```bash
git clone https://github.com/AsafeSantana/gerenciador-livros.git
cd gerenciador-livros
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
