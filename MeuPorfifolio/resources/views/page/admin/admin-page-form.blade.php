@extends('templates.admin-layout')

@section('content')
@include('components.admin.admin-menu')
<div class="container heigth-content">
    <div class="row mb-5 heigth-content">
        <div class="flex-md-8 flex-lg-12 printable p-5 heigth-content">
            <div class="single-full-text ">
                <div class="d-flex justify-content-start mb-3 border-bottom border-dark">
                    <a class="pr-2 button-table-action" href="/admin-pages"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                    <label id="page-label" class="" for=""></label>
                </div>
                @include($viewComponent)
                

            </div>
        </div>
    </div>
</div>
@include('components.footer')
@endsection

