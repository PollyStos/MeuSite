@extends('layouts.main')

@section('title', 'Início')

@section('content')
<main class="d-flex flex-row ">
    <div >
        <img class="img-banner img-fluid" src="/img/BG/bannerPrinc.png" alt="banner">
    </div>
</main>
<section class="d-flex align-items-center flex-column">

   <div class="box p-4"><x-principalBox/></div>
    <section class="d-flex flex-row justify-content-between">
        <img src="/img/983717626056.jpg" alt="" class="img-thumbnail border-1 m-2" style="max-width: 200px">
        <img src="/img/983717626056.jpg" alt="" class="img-thumbnail border-1 m-2" style="max-width: 200px">
        <img src="/img/983717626056.jpg" alt="" class="img-thumbnail border-1 m-2" style="max-width: 200px">
        <img src="/img/983717626056.jpg" alt="" class="img-thumbnail border-1 m-2" style="max-width: 200px">
        <img src="/img/983717626056.jpg" alt="" class="img-thumbnail border-1 m-2" style="max-width: 200px">
    </section>
</section>

@endsection