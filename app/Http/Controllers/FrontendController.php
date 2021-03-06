<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainMenu;
use App\SubMenu;


class FrontendController extends Controller
{
    public function index(){
      
// can use take(5) to select only top 5 menus 
        return view('index')
                            ->with('title',"NepathyaCms")
                            ->with('mainmenus',MainMenu::where('status','=',1)->get())
                            ->with('submenus',SubMenu::where('status','=',1)->get());
    }
}
