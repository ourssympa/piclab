<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Symfony\Component\VarDumper\Cloner\Data;

class unsplashController extends Controller
{
    public function images(){

        //access key ooLFilCgZkEudk9UkkUrX2fFCqNEJqwF4px59Prw3Zg
        //secret key UYBfLLZ8Yhk9Hl8mDvSZting-83PEcbXflksKehlNpE
        Session::put('lien',url()->current());
        $reponse = Http::get("https://api.unsplash.com/photos?per_page=30&client_id=ooLFilCgZkEudk9UkkUrX2fFCqNEJqwF4px59Prw3Zg");
        $te=json_decode($reponse->getBody(), true);
        $title="ACCUEIL";
        return View('landing',compact('te','title'));

    }

    public function recherche(Request $request){

        $reponse = Http::get("https://api.unsplash.com/search/photos?per_page=33&query=.$request->recherche.&client_id=ooLFilCgZkEudk9UkkUrX2fFCqNEJqwF4px59Prw3Zg");
        $te=json_decode($reponse->getBody(), true);
        $recherche=$request->recherche;
        return View('recherchepage',compact('te','recherche'));

    }
    public function menu($cat){
        $reponse = Http::get("https://api.unsplash.com/search/photos?per_page=33&query=.$cat.&client_id=ooLFilCgZkEudk9UkkUrX2fFCqNEJqwF4px59Prw3Zg");
        $te=json_decode($reponse->getBody(), true);
        $recherche=$cat;
        return View('recherchepage',compact('te','recherche'));
    }

  public function image($id){
      Session::put('lien',url()->current());
    $reponse = Http::get("https://api.unsplash.com/photos/$id?client_id=ooLFilCgZkEudk9UkkUrX2fFCqNEJqwF4px59Prw3Zg");
    $te=json_decode($reponse->getBody(), true);
    $ref=$te['urls'];
    $search= $te['related_collections']['results'];
    $tags=$search[1]['title'];
    $datas= Http::get("https://api.unsplash.com/search/photos?per_page=33&query=.$tags.&client_id=ooLFilCgZkEudk9UkkUrX2fFCqNEJqwF4px59Prw3Zg");
    $te1=json_decode($datas->getBody(), true);
    return View('image',compact('ref','te1','id'));


  }

  public function telechargement($id){
    $reponse = Http::get("https://api.unsplash.com/photos/$id?client_id=ooLFilCgZkEudk9UkkUrX2fFCqNEJqwF4px59Prw3Zg");
    $te=json_decode($reponse->getBody(), true);
    $link=$te['links']['download'];
    $filename = 'temp-image.jpg';
$tempImage = tempnam(sys_get_temp_dir(), $filename);
copy($link, $tempImage);

return response()->download($tempImage, $filename);

  }
}
