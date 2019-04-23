<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function sitemap(){

         return response()->view('trangchu.menu.sitemap', [

      ])->header('Content-Type', 'text/xml');
    }
}
