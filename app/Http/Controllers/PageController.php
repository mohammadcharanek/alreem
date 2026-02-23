<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    private function setLocale($locale)
    {
        if (!in_array($locale, ['en', 'ar'])) {
            abort(404);
        }
        App::setLocale($locale);
    }

    public function home($locale)
    {
        $this->setLocale($locale);
        return view('pages.home');
    }

    public function about($locale)
    {
        $this->setLocale($locale);
        return view('pages.about');
    }

    public function branches($locale)
    {
        $this->setLocale($locale);
        return view('pages.branches');
    }

    public function contact($locale)
    {
        $this->setLocale($locale);
        return view('pages.contact');
    }
}