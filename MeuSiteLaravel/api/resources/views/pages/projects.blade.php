@extends('layouts.main')

@section('title', 'Início')

@section('content')
<section class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/projects/create">Criar</a>
     
    
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>
</section>

<section class="d-flex align-items-center flex-column">
        <h1>Projetos</h1>
        <div class="box p-4"><x-principalBox/></div>
        <div class="box p-4"><x-principalBox/></div>
        <div class="box p-4"><x-principalBox/></div>
    </section>
@endsection