<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\UserMenu;
use App\Model\UserScreen;

class DashBoardProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $menus = UserMenu::all()->sortBy('menu_order');
        $screens = UserScreen::all()->sortBy('screen_order');
        
        view()->share(['menus' => $menus ,'screens' => $screens]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
