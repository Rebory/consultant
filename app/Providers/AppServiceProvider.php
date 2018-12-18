<?php

namespace App\Providers;
use View;
use App\Category;
use App\Slider;
use App\Logo;
use App\User;
use App\City;
use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
    
        $navs = Category::all();
        $sliders = Slider::all();
        $logos = Logo::all();
        $usertags = User::all();
        $usercount = User::where(['active' => 'Y'])->count();//count active user 
     
        View::share('sitename', 'http://site1.hsingh.xyz/'); //print sitename staticly
        View::share('navs', $navs);
        View::share('sliders', $sliders);
        View::share('logos', $logos);
        View::share('usertags', $usertags);
        View::share('usercount', $usercount);//display active users
       
        
    }



    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
