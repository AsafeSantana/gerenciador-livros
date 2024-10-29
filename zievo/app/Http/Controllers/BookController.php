<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //LISTAR TODOS OS LIVROS
    public function index()
    {
        return Book::paginate(10);
    }

    //BUSCAR UM LIVRO PELO TÍTULO
    public function searchByTitle(Request $request)
    {
        $titulo = $request->query('titulo');

        // VERIFICAÇÃO SE O TÍTULO ESTA PASSADO
        if (!$titulo) {
            return response()->json(['error' => 'Parâmetro "titulo" é obrigatório'], 400);
        }

        $books = Book::where('titulo', 'like', '%' . $titulo . '%')->get();

        if ($books->isEmpty()) {
            return response()->json(['message' => 'Nenhum livro encontrado com esse título'], 404);
        }

        return response()->json($books);
    }


    //CRIAR LIVRO
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'descricao' => 'required',
            'publicado' => 'required|integer',
        ]);

        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    //BUSCAR UM LIVRO PELO ID
    public function show($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['error' => 'Livro não encontrado'], 404);
        }

        return $book;
    }

    //ATUALIZAR LIVRO
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['error' => 'Livro não encontrado'], 404);
        }

        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'descricao' => 'required',
            'publicado' => 'required|integer',
        ]);

        $book->update($request->all());

        return response()->json($book, 200);
    }

    //DELETAR LIVRO
    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['error' => 'Livro não encontrado'], 404);
        }

        $book->delete();

        return response()->json(['message' => 'Livro deletado com sucesso'], 200);
    }
}
