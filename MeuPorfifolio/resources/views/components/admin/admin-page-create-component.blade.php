<form id="page-form" method="post" action="{{route('page_register')}}">
    @csrf
    @include('components.admin.admin-form-page-component')
    <div class="d-flex justify-content-end">
        <button class="button">Salvar</button>
    </div>
</form>