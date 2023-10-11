@extends('templates.admin-layout')

@section('content')
@include('components.admin.admin-menu')

<div class="container">
    <div class="row ">

        <div class="flex-md-8 flex-lg-12 printable p-5">

            <div class="single-full-text ">
                <div class="d-flex justify-content-end mb-3">
                    <input type="search" name="" id="" placeholder="search">
                    <a href="admin/pages/create" class="button-table"><i class="fa fa-plus-circle" aria-hidden="true" title="Novo"></i></a>
                </div>
                <!-- See _singles.scss for styling -->
                <div class="text-block mar-b-sm-4 div-blog-text">
                    <table class="table">
                        <thead class="thead-dark ">
                            <tr role="row">
                                <th style="width: 14px;">ID</th>
                                <th style="width: 600px;">Pages</th>
                                <th style="width: 101px;">Url</th>
                                <th style="width: 67px; text-align:center;">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allPages as $page)
                            <tr>
                                <td>{{$page->id}}</td>
                                <td>{{$page->Page}}</td>
                                <td style="text-align:center;">{{$page->URL}}</td>
                                <td>
                                    <div class="d-flex flex-row justify-content-end">
                                        <a class="button-table-action" href="admin/pages/view/{{$page->id}}"><i class="fa fa-eye" aria-hidden="true" title="Visualizar"></i></a>
                                        <a class="button-table-action" href="admin/pages/update/{{$page->id}}"><i class="fa fa-pencil" aria-hidden="true" title="Editar"></i></a>
                                        <form action="{{ route('page_delete', ['id' => $page->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="button-table-action" onclick="return confirm('Tem certeza que deseja excluir esta página?')">
                                                <i class="fa fa-times-circle-o" aria-hidden="true" title="Excluir"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@include('components.footer')
@endsection