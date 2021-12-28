<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\VarDumper\Cloner\Data;

class unsplashController extends Controller
{
    public function images(){

        //access key ooLFilCgZkEudk9UkkUrX2fFCqNEJqwF4px59Prw3Zg
        //secret key UYBfLLZ8Yhk9Hl8mDvSZting-83PEcbXflksKehlNpE
        $reponse = Http::get("https://api.unsplash.com/photos?per_page=33&client_id=ooLFilCgZkEudk9UkkUrX2fFCqNEJqwF4px59Prw3Zg");
        $te=json_decode($reponse->getBody(), true);
        return View('landing',compact('te'));

    }
}
