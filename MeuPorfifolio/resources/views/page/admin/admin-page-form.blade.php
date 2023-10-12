@extends('templates.admin-layout')

@section('content')
@include('components.admin.admin-menu')

<div class="container">
    <div class="row mb-5">
        <div class="flex-md-8 flex-lg-12 printable p-5">
            <div class="single-full-text ">
                <div class="d-flex justify-content-start mb-3 border-bottom border-dark">
                    <a class="pr-2 button-table-action" href="/admin-pages"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                    <label id="page-label" class="" for="">-URL- Página</label>
                </div>
                <!-- See _singles.scss for styling -->
                <form method="get" action=""><!-- colocar consição em action  view = "" update = "{{route('page_update',['id' => $page->id])}}" method="post" create="{{route('page_register')}}"-->
<!-- @csrf(condicional para update e create?) -->

                    <div class="row m-3">
                        <div class="col-8 ">
                            <div class="d-flex flex-column">
                                <label for="">Pagina*</label>
                                <input type="text" name="page" id="page" value="{{$page->Page}}" ><!-- disabled caso seja somente view e {{$page->Page}} caso não seja create-->
                            </div>
                        </div>
                        <div class="col-4 ">
                            <div class="d-flex flex-column">
                                <label for="">Flg*</label>
                                <input type="text" name="flg" id="flg" value="{{$page->Flg}}" disabled><!-- disabled caso seja somente view e {{$page->Flg}} caso não seja create-->
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-5">
                            <div class="d-flex flex-column">
                                <label for="">URL*</label>
                                <input type="text" name="url" id="url" value="{{$page->URL}}" disabled><!-- disabled caso seja somente view e {{$page->URL}} caso não seja create-->
                            </div>
                        </div>

                        <div class="col-7">
                            <div class="d-flex flex-row p-0">
                                <div class="d-flex flex-column">
                                    <label for="">Mostrar no Menu*</label>
                                    <input class="form-control" type="checkbox" name="checkMenu" id="checkMenu" disabled {{ $page->CheckMenu == 1 ? 'checked' : '' }} disabled><!-- disabled caso seja somente view e {{$page->CheckMenu}} caso não seja create-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="button" href="/admin/pages/update/{{$page->id}}">Editar</a>
                        <!-- ou <button class="button">Salvar</button> para update ou create-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
@endsection