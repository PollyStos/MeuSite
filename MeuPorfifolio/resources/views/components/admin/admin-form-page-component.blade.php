<div class="row m-3">
    <div class="col-6 ">
        <div class="d-flex flex-column">
            <label for="">Pagina*</label>
            <input type="text" name="page" id="page" value="{{$page->Page}}">
        </div>
    </div>
    <div class="col-6">
        <div class="d-flex flex-column">
            <label for="">URL</label>
            <input type="text" name="url" id="url" value="{{$page->URL}}">
        </div>
    </div>
</div>

<div class="row m-3">
    <div class="col-2">
        <div class="d-flex flex-row p-0">
            <div class="d-flex flex-column">
                <label for="">Mostrar no Menu</label>
                <input class="form-control" type="checkbox" name="checkMenu" id="checkMenu">
            </div>
        </div>
    </div>
</div>