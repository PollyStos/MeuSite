<form id="page-form" method="post" action="{{route('pageSection_register')}}">
    @csrf
    @include('components.admin.admin-form-page-section-component')
    
    <div class="d-flex justify-content-end">
        <button class="button">Salvar</button>
    </div>
</form>