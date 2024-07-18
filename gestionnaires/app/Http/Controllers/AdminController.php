<?php

namespace App\Http\Controllers;
use App\Models\Gestionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allGest()
    {
        $gestionnaires = Gestionnaire::paginate(6); // 10 items per page

        return view('admin.index-admin', ['gestionnaires' => $gestionnaires]); 
    }
}
