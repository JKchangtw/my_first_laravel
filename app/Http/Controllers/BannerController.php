<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    //

    public function banner_index(){
        return view('banner.index');
    }


    public function banner_create(){
        return view('banner.create') ;
    }
    public function banner_store(){
        return redirect('banner.index');
    }
    public function banner_edit(){
        return ;
    }
    public function banner_update(){
        return ;
    }
    public function banner_delete(){
        return ;
    }
 }

