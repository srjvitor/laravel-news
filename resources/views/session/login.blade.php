@extends('session.template')

@section('title', 'Realize o login')

@section('content')
  <section>
    <form id="login" method="POST" action="api/login">
			@csrf
			{{ print_r(session('user_id')) }}
      <h3>Login</h3>
      <div>                                                            
          <label for="email">Email</label>
          <input id="email" name="email" type="text">    
      </div>
      <div>                                                            
          <label for="password">Senha</label>
          <input id="password" name="password" type="password">    
      </div>
      <button type="submit">Entrar</button>
    </form>
    <span>Não tem conta?<a href="{{ route('register') }}">Cadastre-se</a></span>         
    <div>
      <span>
        @isset ($register_success)
          @if($register_success == true)
            Cadastro efetuado com sucesso! Efetue o login
          @endif
        @endisset
      </span>
    </div>
  </section>
@endsection