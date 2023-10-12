@extends('templates.admin-layout')

@section('content')
@include('components.admin.admin-menu')

<div class="container">
    <div class="row mb-5">
        <div class="flex-md-8 flex-lg-12 printable p-5">
            <div class="single-full-text ">
                    <div class="d-flex justify-content-start mb-3 border-bottom border-dark">
                        <a class="pr-2 button-table-action" href="/admin-pages"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                        <label class="" for="">Inserir Página</label>
                </div>
                <!-- See _singles.scss for styling -->
                <form action="{{route('page_update',['id' => $page->id])}}" method="post" >
                   @csrf 
                    <div class="row m-3">
                        <div class="col-8 ">
                            <div class="d-flex flex-column">
                                <label for="">Pagina*</label>
                                <input type="text" name="page" id="page" value="{{$page->Page}}">
                            </div>
                        </div>
                        <div class="col-4 ">
                            <div class="d-flex flex-column">
                                <label for="">Flg*</label>
                                <input type="text" name="flg" id="flg"value="{{$page->Flg}}">
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-5">
                            <div class="d-flex flex-column">
                                <label for="">URL*</label>
                                <input type="text" name="url" id="url" value="{{$page->URL}}">
                            </div>
                        </div>

                        <div class="col-7">
                            <div class="d-flex flex-row p-0">
                                <div class="d-flex flex-column">
                                    <label for="">Mostrar no Menu*</label>
                                    <input class="form-control" type="checkbox" name="checkMenu" id="checkMenu" {{ $page->CheckMenu == 1 ? 'checked' : '' }}>
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="">Abrir em outra Aba*</label>
                                    <input class="form-control" type="checkbox" name="checkAba" id="checkAba"{{ $page->CheckAba == 1 ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                       <button class="button" >Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('components.footer')
@endsection