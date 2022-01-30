<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserMenu;
use App\Model\UserScreen;


class LayoutController extends Controller
{
    public function menus(){
        $menus = UserMenu::all()->sortBy('menu_order');

        return $menus;
    }

    public function screens(){
        $screens = UserScreen::all()->sortBy('screen_order');

        return $screens;
    }


}
