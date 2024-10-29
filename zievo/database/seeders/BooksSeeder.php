<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // LIVROS PARA POPULAR BANCO DE DADOS
        Book::create([
            'titulo' => 'O Senhor dos Anéis',
            'autor' => 'J.R.R. Tolkien',
            'descricao' => 'Uma história épica de fantasia.',
            'publicado' => 1989,
        ]);

        Book::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'descricao' => 'Uma distopia sobre vigilância e controle.',
            'publicado' => 1984,
        ]);

        Book::create([
            'titulo' => 'Dom Casmurro',
            'autor' => 'Machado de Assis',
            'descricao' => 'Um romance psicológico sobre ciúmes e traição.',
            'publicado' => 1890,
        ]);
        
        Book::create([
            'titulo' => 'Discipulado',
            'autor' => 'Vanjo',
            'descricao' => 'Livro que vai te prender do início ao fim',
            'publicado' => 2011,
        ]);

        Book::create([
            'titulo' => 'Felicidade',
            'autor' => 'Roger Souza',
            'descricao' => 'Um drama familiar vivido por casais.',
            'publicado' => 2000,
        ]);

        Book::create([
            'titulo' => 'Cem Anos de Solidão',
            'autor' => 'Gabriel García Márquez',
            'descricao' => 'Um saga familiar mágica que se passa na cidade fictícia de Macondo.',
            'publicado' => 1987,
        ]);

        Book::create([
            'titulo' => 'Orgulho e Preconceito',
            'autor' => 'Jane Austen',
            'descricao' => 'Uma crítica social sobre o casamento, a classe e a moralidade.',
            'publicado' => 1985,
        ]);

        Book::create([
            'titulo' => 'Moby Dick',
            'autor' => 'Herman Melville',
            'descricao' => 'A obsessão de um capitão pela captura de uma baleia branca.',
            'publicado' => 2000,
        ]);

        Book::create([
            'titulo' => 'A Metamorfose',
            'autor' => 'Franz Kafka',
            'descricao' => 'A transformação de um homem em inseto e as implicações disso na sociedade.',
            'publicado' => 2000,
        ]);

        Book::create([
            'titulo' => 'O Pequeno Príncipe',
            'autor' => 'Antoine de Saint-Exupéry',
            'descricao' => 'Uma fábula poética sobre amor, amizade e solidão.',
            'publicado' => 1999,
        ]);

        Book::create([
            'titulo' => 'O Grande Gatsby',
            'autor' => 'F. Scott Fitzgerald',
            'descricao' => 'Um retrato da era do jazz e da busca do sonho americano.',
            'publicado' => 1850,
        ]);

        Book::create([
            'titulo' => 'A Revolução dos Bichos',
            'autor' => 'George Orwell',
            'descricao' => 'Uma fábula alegórica sobre a Revolução Russa.',
            'publicado' => 1965,
        ]);

        Book::create([
            'titulo' => 'O Morro dos Ventos Uivantes',
            'autor' => 'Emily Brontë',
            'descricao' => 'Uma história de amor e vingança em um cenário gótico.',
            'publicado' => 1856,
        ]);

        Book::create([
            'titulo' => 'Os Miseráveis',
            'autor' => 'Victor Hugo',
            'descricao' => 'Um épico que explora a justiça social e a redenção.',
            'publicado' => 2000,
        ]);

        Book::create([
            'titulo' => 'A Arte da Guerra',
            'autor' => 'Sun Tzu',
            'descricao' => 'Um tratado militar que é aplicado em diversos campos, incluindo negócios e gestão.',
            'publicado' => 1954,
        ]);

        Book::create([
            'titulo' => 'Fahrenheit 451',
            'autor' => 'Ray Bradbury',
            'descricao' => 'Uma distopia onde livros são queimados para evitar o pensamento crítico.',
            'publicado' => 1895,
        ]);

        Book::create([
            'titulo' => 'O Nome da Rosa',
            'autor' => 'Umberto Eco',
            'descricao' => 'Um romance histórico que combina mistério e filosofia.',
            'publicado' => 1965,
        ]);

        Book::create([
            'titulo' => 'A Menina que Roubava Livros',
            'autor' => 'Markus Zusak',
            'descricao' => 'Uma narrativa comovente ambientada na Alemanha nazista.',
            'publicado' => 1896,
        ]);

        Book::create([
            'titulo' => 'Harry Potter e a Pedra Filosofal',
            'autor' => 'J.K. Rowling',
            'descricao' => 'O primeiro livro da famosa série que narra as aventuras de um jovem bruxo.',
            'publicado' => 1980,
        ]);
    }
}
