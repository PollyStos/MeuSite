<div class="row m-3">
<div class="col-6">
    <label for="pagSelect">Página*</label>
    <select class="custom-select" id="pagSelect" name="page_id"> 
        <option selected>Escolher...</option>
        @foreach ($allPages as $page)
            <option value="{{ $page->id }}">{{ $page->Page }}</option>
        @endforeach
    </select>
</div>

    <div class="col-6 ">
        <div class="d-flex flex-column">
            <label for="" >Nome da Seção*</label>
            <input type="text" name="section_name" id="section_name" value="">
        </div>
    </div>
</div>
</div>

<div class="row m-3">
    <div class="col-10">
        <div class="d-flex flex-column">
            <label for="">URL*</label>
            <input type="text" name="url" id="url" value="">
        </div>
    </div>

    <div class="col-2">
        <div class="d-flex flex-row p-0">
            <div class="d-flex flex-column">
                <label for="">Mostrar no Menu*</label>
                <input class="form-control" type="checkbox" name="checkMenu" id="checkMenu">
            </div>
        </div>
    </div>
</div>
