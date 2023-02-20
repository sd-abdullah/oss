<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomizeController extends Controller
{
    public function localDeterminition($locale){
        if(isset($locale) && in_array($locale,config('app.available_locales'))){
            app()->setLocale($locale);
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
