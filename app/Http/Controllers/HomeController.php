<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DestinationCategory;

class HomeController extends Controller
{
    public function index()
    {
        $destinationCategories = DestinationCategory::latest()->limit(2)->get();
        $destinationCategoriess = DestinationCategory::latest()->get();
        return view('index', compact('destinationCategories', 'destinationCategoriess'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function destination()
    {
        return view('tour');
    }

    public function destinationDetail()
    {
        return view('tour-detail');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogDetail()
    {
        return view('blog-detail');
    }
}
