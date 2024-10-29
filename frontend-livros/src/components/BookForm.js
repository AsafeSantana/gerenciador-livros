import React, { useState, useEffect } from 'react';
import '../scss/BookForm.scss';
import addIcon from '../assets/save_icon.png';
import cancelIcon from '../assets/cancel.png';
import api from '../api';

const BookForm = ({ bookId, onSave, onSearch = () => { } }) => {
  const initialFormData = {
    titulo: '',
    autor: '',
    descricao: '',
    publicado: ''
  };

  const [formData, setFormData] = useState(initialFormData);

  useEffect(() => {
    if (bookId) {
      fetchBook(bookId);
    } else {
      setFormData(initialFormData);
    }
  }, [bookId]);

  //TRAZ OS DADOS DO LIVRO COM BASE NO ID PARA EDIÇÃO
  const fetchBook = async (id) => {
    try {
      const response = await api.get(`/books/${id}`);
      setFormData(response.data);
    } catch (error) {
      console.error('Erro ao buscar o livro:', error);
    }
  };

  //ATUALIZA O FORM
  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData((prevData) => ({ ...prevData, [name]: value }));
  };

  //ENVIA OS DADOS DO FORM PARA A API
  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      if (bookId) {
        await api.put(`/books/${bookId}`, formData);
      } else {
        await api.post('/books', formData);
      }
      onSave();  
      setFormData(initialFormData); 
    } catch (error) {
      console.error('Erro ao salvar o livro:', error);
    }
  };

  //RESETA O FORM E CHAMA A FUNÇÃO onSave
  const handleCancel = () => {
    setFormData(initialFormData); 
    onSave(); 
  };

  // INPUTS | BOTÕES DO FORM
  return (
    <div className="book-form-container">
      <form onSubmit={handleSubmit} className="book-form">
        <h2>{bookId ? 'Editar Livro' : 'Adicionar Livro'}</h2>
        <input
          type="text"
          name="titulo"
          value={formData.titulo}
          onChange={handleChange}
          placeholder="Título"
          required
        />
        <input
          type="text"
          name="autor"
          value={formData.autor}
          onChange={handleChange}
          placeholder="Autor"
          required
        />
        <textarea
          name="descricao"
          value={formData.descricao}
          onChange={handleChange}
          placeholder="Descrição"
        />
        <input
          type="number"
          name="publicado"
          value={formData.publicado}
          onChange={handleChange}
          placeholder="Ano de Publicação"
          required
        />
        <div className="buttons">
          <button type="submit">
            {bookId ? (
              <>
                <img src={addIcon} alt="Salvar" className="icon" /> Salvar Alterações
              </>
            ) : (
              <>
                <img src={addIcon} alt="Adicionar" className="icon" /> Adicionar
              </>
            )}
          </button>
          {bookId && (
            <button type="button" onClick={handleCancel} className="cancel-button">
              <img src={cancelIcon} alt="Cancelar" className="icon" /> Cancelar
            </button>
          )}
        </div>
      </form>
    </div>
  );
};

export default BookForm;
