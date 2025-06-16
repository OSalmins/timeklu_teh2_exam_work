<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


abstract class Controller
{
    public function __construct(Request $request){
        $locale = Session::get('locale');
        if(!$locale){

            $available_locales = ['en','lv'];
            $accepted_lang = $request->getLanguages();
            $locale = 'en';
            foreach($accepted_lang as $lang){
                $short_lang = substr($lang,0,2);
                if(in_array($lang, $available_locales)){
                    $locale = $lang;
                    break;
                }
            }
            
            
            Session::put('locale', $locale);


        }
        
        App::setLocale($locale);

    }
}    
