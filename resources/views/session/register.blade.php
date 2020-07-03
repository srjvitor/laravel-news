@extends('session.template')

@section('title', 'Registre-se')

@section('content')
  <section id="register-section">
    <form id="register" method="POST" action="api/newuser">
      @csrf

      <h3>Cadastro</h3>
      <div>                                                            
          <label for="name">Nome completo</label>
          <input id="name" name="name" type="text">    
      </div>
      <div>                                                            
          <label for="email">Email</label>
          <input id="email" name="email" type="text">    
      </div>
      <div>                                                            
          <label for="password">Senha</label>
          <input id="password" name="password" type="text">    
      </div>
      <div>                                                            
          <label for="repeat-password">Repita a senha</label>
          <input id="repeat-password" name="repeat-password" type="text">    
      </div>
      <button type="submit">Registrar</button>
      <span>Possui uma conta?<a href="{{ route('login') }}">Logue-se</a></span> 
    </form>
  </section> 
@endsection