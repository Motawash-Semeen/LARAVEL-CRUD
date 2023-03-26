<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }
    public function profile(){
        return view('backend.profile');
    }

    public function item(){
        return view('backend.pages.item.add');
    }

    public function Cate(){
        return view('backend.pages.category.add');
    }
    

    public function Sub_Cate(){
        return view('backend.pages.sub_cate.add');
    }
    
}
