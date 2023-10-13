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
            <input type="text" name="flg" id="flg" value="{{$page->Flg}}">
        </div>
    </div>
</div>

<div class="row m-3">
    <div class="col-10">
        <div class="d-flex flex-column">
            <label for="">URL*</label>
            <input type="text" name="url" id="url" value="{{$page->URL}}">
        </div>
    </div>

    <div class="col-2">
        <div class="d-flex flex-row p-0">
            <div class="d-flex flex-column">
                <label for="">Mostrar no Menu*</label>
                <input class="form-control" type="checkbox" name="checkMenu" id="checkMenu" {{ $page->CheckMenu == 1 ? 'checked' : '' }}>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-end">
    <a id="form-btn" class="button" href="/admin/pages/update/{{$page->id}}" style="display: none;">Editar </a>
</div>