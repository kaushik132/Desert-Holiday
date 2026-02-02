<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DestinationCategory;
use App\Models\Destination;
use App\Models\Blog;
use App\Models\BlogCategory;


class SitemapController extends Controller
{
       public function index(){
           $tourCategory = DestinationCategory::all();
           $tour = Destination::all();
           $blog = Blog::all();
           $blogCategory = BlogCategory::all();

        return response()->view('sitemap',[
            'tour'=> $tour,
        'tourCategory'=>$tourCategory,
        'blog'=> $blog,
        'blogCategory'=> $blogCategory
        ])->header('Content-Type','text/xml');
    }
}
