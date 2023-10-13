<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\adminPage;

class AdminPageController extends Controller
{

    // Função para mostrar todos os registros em admin-pages
    public function show()
    {
        $allPages = adminPage::all();
        return view('page.admin.admin-pages', ['allPages' => $allPages]);
    }

    public function create()
    {
        $page = new adminPage(); // Crie uma instância vazia do modelo
        $viewComponent = $this->getPageComponent(); // Obtém o componente de visualização com base na URL
    
        return view('page.admin.admin-page-form', ['page' => $page, 'viewComponent' => $viewComponent]);
    }
    

    public function store(Request $request)
    {
        // Verifique se o valor do checkbox "CheckMenu" é "on" e atribua 1 se for, senão atribua 0
        $checkMenu = $request->checkMenu === 'on' ? 1 : 0;
        adminPage::create([
            'Page' => $request->page,
            'Flg' => $request->flg,
            'URL' => $request->url,
            'CheckMenu' => $checkMenu
        ]);

        return redirect('/admin-pages');
    }

    public function view($id)
    {
        $viewComponent = $this->getPageComponent(); // Obtém o componente de visualização com base na URL
        $page = adminPage::findOrFail($id);
        return view('page.admin.admin-page-form', ['page' => $page, 'viewComponent' => $viewComponent]);
    }
    public function edit($id)
    {
        $viewComponent = $this->getPageComponent(); // Obtém o componente de visualização com base na URL
        $page = adminPage::findOrFail($id);
        return view('page.admin.admin-page-form', ['page' => $page,'viewComponent' => $viewComponent]);
    }
    public function update(Request $request, $id)
    {
        $page = adminPage::findOrFail($id);

        // Verifique se o valor do checkbox "CheckMenu" é "on" e atribua 1 se for, senão atribua 0
        $checkMenu = $request->checkMenu === 'on' ? 1 : 0;

        $page->update([
            'Page' => $request->page,
            'Flg' => $request->flg,
            'URL' => $request->url,
            'CheckMenu' => $checkMenu
        ]);
        return redirect('/admin-pages');
    }

    public function delete($id)
    {
        $page = adminPage::findOrFail($id);
        $page->delete();

        return redirect('/admin-pages')->with('success', 'Página excluída com sucesso.');
    }

    public function getPageComponent(){
    // Obtém a URL da requisição atual
    $currentUrl = request()->url();
    $viewComponent = ''; // Inicializa a variável $viewComponent com uma string vazia

    // Verifica se a URL contém a string 'admin/pages/create'
    if (strpos($currentUrl, 'admin/pages/create') !== false) {
        $viewComponent = 'components.admin.admin-page-create-component';
    } 
    // Verifica se a URL contém a string 'admin/pages/update'
    elseif (strpos($currentUrl, 'admin/pages/update') !== false) {
        $viewComponent = 'components.admin.admin-page-update-component';
    } 
    // Verifica se a URL contém a string 'admin/pages/view'
    elseif (strpos($currentUrl, 'admin/pages/view') !== false) {
        $viewComponent = 'components.admin.admin-page-view-component';
    }

    // Retorna a view 'page.admin.admin-pages' com a variável $viewComponent
    return $viewComponent;
}

}
