import React, { useState, useEffect } from 'react';
import '../scss/BookList.scss';
import api from '../api';
import deleteIcon from '../assets/delete.png'; 
import editIcon from '../assets/edit.png';


const BookList = ({ onEdit, reload }) => {
  const [books, setBooks] = useState([]);
  const [page, setPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  const [searchTerm, setSearchTerm] = useState('');

  useEffect(() => {
    fetchBooks(page, searchTerm);
  }, [page, reload, searchTerm]);


  //FUNÇÃO QUE CHAMA A API PARA BUSCAR LIVROS E PESQUISA PELO TÍTULO.
  const fetchBooks = async (page, search = '') => {
    try {
      const response = search
        ? await api.get(`/books/search?titulo=${search}`)
        : await api.get(`/books?page=${page}`);

      if (!search) {
        setBooks(response.data.data);
        setTotalPages(response.data.last_page);
      } else {
        setBooks(response.data);
        setTotalPages(1);
      }
    } catch (error) {
      console.error('Erro ao buscar os livros:', error);
    }
  };


  //FUNÇÃO QUE DELETA O LIVRO COM BASE NO ID | E ATUALIZA LISTA
  const handleDelete = async (id) => {
    try {
      await api.delete(`/books/${id}`);
      fetchBooks(page, searchTerm);
    } catch (error) {
      console.error('Erro ao deletar o livro:', error);
    }
  };

  //ATUALIZA A PESQUISA E RESETA
  const handleSearchChange = (e) => {
    setSearchTerm(e.target.value);
    setPage(1);
  };

  //INPUTS E TABELA DA LISTA DE EXIBIÇÃO
  return (
    <div className="book-list container mt-4">
      <h2>Lista de Livros</h2>

      <div className="mb-3">
        <input
          type="text"
          className="form-control"
          placeholder="Pesquisar livros por título..."
          value={searchTerm}
          onChange={handleSearchChange}
        />
      </div>

      <table className="table table-striped">
        <thead>
          <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          {books.map((book) => (
            <tr key={book.id}>
              <td><strong>{book.titulo}</strong></td>
              <td>{book.autor}</td>
              <td>
                <button className="btn btn-primary me-2" onClick={() => onEdit(book.id)}>
                  <img src={editIcon} alt="Editar" style={{ width: '16px', marginRight: '5px' }} />
                  Editar
                </button>
                <button className="btn btn-danger" onClick={() => handleDelete(book.id)}>
                  <img src={deleteIcon} alt="Deletar" style={{ width: '16px', marginRight: '5px' }} />
                  Deletar
                </button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>

      <div className="d-flex justify-content-between align-items-center mt-3">
        <button
          className="btn btn-secondary"
          onClick={() => setPage(page - 1)}
          disabled={page === 1}
        >
          Anterior
        </button>
        <span>Página {page} de {totalPages}</span>
        <button
          className="btn btn-secondary"
          onClick={() => setPage(page + 1)}
          disabled={page === totalPages}
        >
          Próxima
        </button>
      </div>
    </div>
  );
};

export default BookList;
