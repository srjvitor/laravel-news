@extends('home.template')

@section('title', 'Nova notícia')

@section('content')
  <div class="new-container">
    <form action="">  
      <div class="title-container">        
        <label for="title">Título da postagem:</label>
        <input name="title" type="text">
      </div>
      <textarea name="" id="" cols="30" rows="10">
      </textarea>
      <div class="send-container">        
        <button disabled>Publicar</button>
        <button>Cancelar</button>
        <select>
          <option value="" disabled selected>Visibilidade</option>
          <option value="">Pública</option>
          <option value="">Privada</option>
        </select>
         <select>
          <option value="" disabled selected>Categoria</option>
          <option value="">Tecnologia</option>
          <option value="">Saúde</option>
        </select>
      </div>
    </form>
  </div>
@endsection