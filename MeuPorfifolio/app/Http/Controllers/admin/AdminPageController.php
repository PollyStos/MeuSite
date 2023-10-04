<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminPageModel;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function showAdminPage()
    {
        $pages = AdminPageModel::all(); 

        return view('admin-pages', compact($pages));
    }

    
}
