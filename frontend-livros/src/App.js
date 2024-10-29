import React, { useState } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import BookList from './components/BookList';
import BookForm from './components/BookForm';
import bookIcon from './assets/icon_book.png';
import './scss/App.scss'; 

const App = () => {
  const [editingBookId, setEditingBookId] = useState(null);
  const [reloadList, setReloadList] = useState(false);

  const handleEdit = (bookId) => {
    setEditingBookId(bookId);
  };

  const handleSave = () => {
    setReloadList(!reloadList);
    setEditingBookId(null);
  };

  return (
    <div className="app">
      <div className="header d-flex align-items-center justify-content-center">
        <img 
          src={bookIcon} 
          alt="Book Icon" 
          className="book-icon" 
        />
        <h1>Gerenciador de Livros</h1>
      </div>
      <div className="container">
        <BookForm bookId={editingBookId} onSave={handleSave} />
        <BookList onEdit={handleEdit} reload={reloadList} />
      </div>
    </div>
  );
};

export default App;
