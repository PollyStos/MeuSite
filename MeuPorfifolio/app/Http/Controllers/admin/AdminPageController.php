<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\adminPage;

class AdminPageController extends Controller
{
    public function show()
    {
        $allPages = adminPage::all();
        return view('page.admin.admin-pages', ['allPages' => $allPages]);
    }

    public function create()
    {

        return view('page.admin.admin-create-page');
    }

    public function store(Request $request)
    {
        // Verifique se o valor do checkbox "CheckMenu" é "on" e atribua 1 se for, senão atribua 0
        $checkMenu = $request->checkMenu === 'on' ? 1 : 0;

        // Verifique se o valor do checkbox "CheckAba" é "on" e atribua 1 se for, senão atribua 0
        $checkAba = $request->checkAba === 'on' ? 1 : 0;
        adminPage::create([
            'Page' => $request->page,
            'Flg' => $request->flg,
            'URL' => $request->url,
            'CheckMenu' => $checkMenu,
            'CheckAba' => $checkAba,
        ]);

        return redirect('/admin-pages');
    }

    public function view($id){
        $page = adminPage:: findOrFail($id);
        return view('page.admin.admin-view-page', ['page' => $page]);
    }
    public function edit($id){
        $page = adminPage:: findOrFail($id);
        return view('page.admin.admin-update-page', ['page' => $page]);
    }
    public function update(Request $request, $id){
        $page = adminPage:: findOrFail($id);
        
        // Verifique se o valor do checkbox "CheckMenu" é "on" e atribua 1 se for, senão atribua 0
        $checkMenu = $request->checkMenu === 'on' ? 1 : 0;
        
        // Verifique se o valor do checkbox "CheckAba" é "on" e atribua 1 se for, senão atribua 0
        $checkAba = $request->checkAba === 'on' ? 1 : 0;
        
        $page->update([
            'Page' => $request->page,
            'Flg' => $request->flg,
            'URL' => $request->url,
            'CheckMenu' => $checkMenu,
            'CheckAba' => $checkAba,
        ]);
        return redirect('/admin-pages');
    }

    public function delete($id) {
        $page = adminPage::findOrFail($id);
        $page->delete();
    
        return redirect('/admin-pages')->with('success', 'Página excluída com sucesso.');
    }
}
