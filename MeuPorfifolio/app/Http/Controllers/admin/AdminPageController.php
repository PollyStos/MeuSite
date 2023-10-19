<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\adminPage;
use App\Models\admin\adminPageSection;

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
        dd($request);
        adminPage::create([
            'Page' => $request->page,
            'URL' => $request->url,
            'CheckMenu'=>$request->CheckMenu,
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
        return view('page.admin.admin-page-form', ['page' => $page, 'viewComponent' => $viewComponent]);
    }
    public function update(Request $request, $id)
    {
        $page = adminPage::findOrFail($id);

        // Verifique se o valor do checkbox "CheckMenu" é "on" e atribua 1 se for, senão atribua 0
        $checkMenu = $request->checkMenu === 'on' ? 1 : 0;

        $page->update([
            'Page' => $request->page,
            'Flg' => $request->flg,
            'URL' => $request->url
        ]);
        return redirect('/admin-pages');
    }

    public function delete($id)
    {
        $page = adminPage::findOrFail($id);
        $page->delete();

        return redirect('/admin-pages')->with('success', 'Página excluída com sucesso.');
    }

    public function getPageComponent()
    {
        // Obtém a URL da requisição atual
        $currentUrl = request()->url();
        $viewComponent = ''; // Inicializa a variável $viewComponent com uma string vazia

        switch (true) {
            case strpos($currentUrl, 'admin/pages/create') !== false:
                $viewComponent = 'components.admin.admin-page-create-component';
                break;
            case strpos($currentUrl, 'admin/pages/update') !== false:
                $viewComponent = 'components.admin.admin-page-update-component';
                break;
            case strpos($currentUrl, 'admin/pages/view') !== false:
                $viewComponent = 'components.admin.admin-page-view-component';
                break;
            case strpos($currentUrl, 'admin/pages/update') !== false:
                $viewComponent = 'components.admin.admin-page-update-component';
                break;
            case strpos($currentUrl, 'admin/pages/view') !== false:
                $viewComponent = 'components.admin.admin-page-view-component';
                break;
            case strpos($currentUrl, 'admin/pages-section/create') !== false:
                $viewComponent = 'components.admin.admin-page-section-create-component';
                break;
            default:
        }

        return $viewComponent;
        // Retorna a view 'page.admin.admin-pages' com a variável $viewComponent
    }

    public function showSection()
    {
        $allPagesSection = adminPageSection::all();
        return view('page.admin.admin-pages-section', ['allPages' => $allPagesSection]);
    }

    public function createSection()
    {
        $viewComponent = $this->getPageComponent(); // Obtém o componente de visualização com base na URL
        $allPages = adminPage::all();
        return view('page.admin.admin-page-form', ['allPages' => $allPages, 'viewComponent' => $viewComponent]);
    }


    public function storeSection(Request $request)
    {
        // Verifique se o valor do checkbox "CheckMenu" é "on" e atribua 1 se for, senão atribua 0
        $checkMenu = $request->checkMenu === 'on' ? 1 : 0;
        adminPageSection::create([
            'page_id' => $request->page_id,
            'section_name' => $request->section_name,
            'URL' => $request->url,
            'CheckMenu' => $checkMenu

        ]);

        return redirect('/admin-pages-section');
    }

    public function viewSection($id)
    {
        $viewComponent = $this->getPageComponent(); // Obtém o componente de visualização com base na URL
        $page = adminPage::findOrFail($id);
        return view('page.admin.admin-page-form', ['page' => $page, 'viewComponent' => $viewComponent]);
    }
    public function editSection($id)
    {
        $viewComponent = $this->getPageComponent(); // Obtém o componente de visualização com base na URL
        $page = adminPage::findOrFail($id);
        return view('page.admin.admin-page-form', ['page' => $page, 'viewComponent' => $viewComponent]);
    }
    public function updateSection(Request $request, $id)
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

    public function deleteSection($id)
    {
        $page = adminPage::findOrFail($id);
        $page->delete();

        return redirect('/admin-pages')->with('success', 'Página excluída com sucesso.');
    }
}
