<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class Localization extends Controller
{
    public function set_lang($locale) {
        if (in_array($locale, Config::get('app.locales'))) {

            App::setLocale($locale);
//            dd(App::getLocale());
            Session::put('locale', $locale);
        }


        return redirect()->back();
    }
}
