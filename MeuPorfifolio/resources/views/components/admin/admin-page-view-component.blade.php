<form id="page-form" method="get" action="">
@include('components.admin.admin-form-page-component')
    <div class="d-flex justify-content-end">
        <a class="button" href="/admin/pages/update/{{$page->id}}">Editar</a>
    </div>
</form>