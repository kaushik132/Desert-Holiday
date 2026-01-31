<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\DestinationCategory;
use App\Models\DestinationDetailsInsert;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Duration;

class HomeController extends Controller
{
    public function index()
    {
        $destinationCategories = Destination::latest()->limit(20)->get();
        $destination = Destination::latest()->get();
        $destinationCategoriess = DestinationCategory::latest()->get();
        $category = DestinationCategory::latest()->get();
        $allblog = Blog::latest()->with('category')->limit(10)->get();
        return view('index', compact('destinationCategories', 'destination', 'destinationCategoriess', 'category', 'allblog'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function destination($slug = null)
    {
        if ($slug != null) {
            $destinationCategory = DestinationCategory::where('slug', $slug)->first();
            $destinationList = Destination::latest()->with('category')->where('category_id', $destinationCategory->id)->paginate(4);
            //     $seo_data['seo_title'] =$destinationList->seo_title;
            //     $seo_data['seo_description'] =$destinationList->seo_description;
            //    $seo_data['keywords'] =$destinationList->seo_keyword;
            //       $seo_data['seo_image'] = $destinationList->image;
            $canocial = 'https://www.tajindiatrails.com/destination/' . $slug;
        } else {
            $destinationList = Destination::latest()->with('category')->paginate(4);
            // $seo_data['seo_title'] =$homepage->seo_title_blog;
            // $seo_data['seo_description'] =$homepage->seo_des_blog;
            // $seo_data['keywords'] =$homepage->seo_key_blog;
            //     $seo_data['seo_image'] = $homepage->seo_image_blog;
            $canocial = 'https://www.tajindiatrails.com/destination';
        }
        $alldestinations = DestinationCategory::inRandomOrder()->get();
        $destinationCategories = DestinationCategory::latest()->get();
        $duration = Duration::latest()->get();

        return view('tour', compact('destinationCategories', 'duration', 'destinationList', 'canocial', 'alldestinations'));
    }

    public function destinationDetail($slug = null)
    {

        $alldestinations = Destination::with('category')
            ->inRandomOrder()
            ->get();

        $destinationsData = Destination::with('category')->where('slug', $slug)->first();
        $seo_data['seo_title'] = $destinationsData->seo_title;
        $seo_data['seo_description'] = $destinationsData->seo_description;
        $seo_data['keywords'] = $destinationsData->seo_keyword;
        $seo_data['seo_image'] = $destinationsData->thumnail_image;
        $canocial = 'http://127.0.0.1:8000/destination/' . $destinationsData->slug;

        $destinationsdetails = DestinationDetailsInsert::where('package_id', $destinationsData->id)
            ->orderByRaw('CAST(order_num AS UNSIGNED) ASC')
            ->get();


        return view('tour-detail', compact('destinationsData', 'destinationsdetails', 'seo_data', 'canocial', 'alldestinations'));
    }

    public function blog($slug = null)
    {
        if ($slug != null) {
            $blogcategory = BlogCategory::where('slug', $slug)->first();
            $blogList = Blog::with('category')->where('category_id, $blogcategory->id')->paginate(4);
            // $seo_data['seo_title'] = $blog->seo_title;
            // $seo_data['seo_description'] = $blog->seo_description;
            // $seo_data['keywords'] = $blog->seo_keyword;
            // $seo_data['seo_image'] = $blog->image;
            $canocial = 'https://www.tajindiatrails.com/blog/' . $slug;
        } else {
            $blogList = Blog::with('category')->paginate(4);
            // $seo_data['seo_title'] =$homepage->seo_title_blog;
            // $seo_data['seo_description'] =$homepage->seo_des_blog;
            // $seo_data['keywords'] =$homepage->seo_key_blog;
            //     $seo_data['seo_image'] = $homepage->seo_image_blog;
            $canocial = 'https://www.tajindiatrails.com/blog';
        }
        $newblog = Blog::where('is_active', 1)
            ->with('category')
            ->latest()
            ->firstOrFail();

        $blogrendom = Blog::inRandomOrder()->limit(2)->get();



        return view('blog', compact('blogList', 'newblog', 'blogrendom', 'canocial'));
    }

    public function blogDetail($slug = null)
    {

        $blogrendom = Blog::inRandomOrder()->with('category')->limit(5)->get();
        $blogDetail = Blog::with('category')->where('slug', $slug)->first();
        // $seo_data['seo_title'] = $blogDetail->seo_title;
        // $seo_data['seo_description'] = $blogDetail->seo_description;
        // $seo_data['keywords'] = $blogDetail->seo_keyword;
        // $seo_data['seo_image'] = $blogDetail->image;
        // $canocial = 'http://127.0.0.1:8000/blog/' . $blogDetail->slug;
        return view('blog-detail', compact('blogDetail', 'blogrendom'));
    }
}
