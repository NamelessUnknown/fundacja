<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;

class MainController extends Controller
{
    public function home() {
        $latestArticles = Article::latest()->take(5)->get();
        return view('home', compact('latestArticles'));
    }
    public function transfer() {
        return view('transfer');
    }
    public function inkubacja() {
        return view('inkubacja');
    }
    public function akceleracja() {
        return view('akceleracja');
    }
    public function zywnosc() {
        return view('zywnosc');
    }
    public function zespol() {
        return view('zespol');
    }
    public function misja() {
        return view('misja');
    }

    
    //KULTURA I POCHODNE
    public function kultura() {
        $articles = Article::latest()->paginate(6);
        return view('kultura', compact('articles'));
    }
    public function opinie()
    {
        $articles = Article::latest()->where('type','opinie')->paginate(8);
        return view('opinie', compact('articles'));
    }
    public function sylwetki()
    {
        $articles = Article::latest()->where('type','sylwetki')->paginate(8);
        return view('sylwetki', compact('articles'));
    }
    public function rozmowy()
    {
        $articles = Article::latest()->where('type','rozmowy')->paginate(8);
        return view('rozmowy', compact('articles'));
    }
    public function pliki()
    {
        $articles = Article::latest()->where('type','pliki')->paginate(8);
        return view('pliki', compact('articles'));
    }


    //OSOBNE ARTYKUŁY

    public function osobnyWpis($id){
        $article = Article::where('id',$id)->firstOrFail();
        return view('artykul', compact('article'));
    }

    // ENGLISH
    public function en() {
        return view('/en/home');
    }
    public function mission() {
        return view('/en/mission');
    }
    public function team() {
        return view('/en/team');
    }
    public function incubation() {
        return view('/en/incubation');
    }
    public function culture() {
        $articles = Article::latest()->paginate(6);

        return view('/en/culture', compact('articles'));
    }
    public function transferen() {
        return view('/en/transfer');
    }
    public function acceleration() {
        return view('/en/acceleration');
    }
    public function foodcare() {
        return view('/en/international-food-trade');
    }
    // public function article($id){
    //     return view('/kultura/artykuly/{$id}');
    // }
}
