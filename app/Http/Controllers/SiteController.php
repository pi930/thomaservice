<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function home() {
        return view('home');
    }

    public function services() {
        return view('services');
    }

    public function methode() {
        return view('methode');
    }

    public function blog() {
        return view('blog');
    }

    public function contact() {
        return view('contact');
    }
    public function parcours() {
    return view('parcours');
}
public function tarifs()
{
    return view('tarifs');
}


}

