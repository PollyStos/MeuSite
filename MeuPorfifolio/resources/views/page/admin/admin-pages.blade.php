@extends('templates.layout')

@section('content')
@include('components.admin.admin-menu')

<div class="container">
    <div class="row ">

        <div class="flex-md-8 flex-lg-12 printable p-5">

            <div class="single-full-text ">
                <!-- See _singles.scss for styling -->

                <div class="text-block mar-b-sm-4 div-blog-text">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Page</th>
                                <th scope="col">Data de Criação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                            <tr>
                                <th scope="row">{{ $page->id }}</th>
                                <td>{{ $page->Page }}</td>
                                <td>{{ $page->created_at }}</td>
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