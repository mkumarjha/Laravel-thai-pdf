<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Session;
use App;
use Lang;


use Illuminate\Routing\Redirector;

use Illuminate\Foundation\Application;
use Illuminate\Contracts\Routing\Middleware;

class LanguageController extends Controller
{
    //
	public function __construct(Application $app, Redirector $redirector, Request $request) {
        $this->app = $app;
        $this->redirector = $redirector;
        $this->request = $request;
    }

    public function changeLanguage(Request $request){
    	if($request->ajax()){
    		$request->session()->put('locale',$request->locale);
    		$request->session()->flash('alert-success',('app.Locale_Change_Success'));
    	}

    }
}
