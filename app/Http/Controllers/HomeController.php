<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\DestinationCategory;
use App\Models\DestinationDetailsInsert;

use App\Models\Duration;

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

    public function destination($slug = null)
    {
   if($slug!=null){
            $destinationCategory = DestinationCategory::where('slug',$slug)->first();
            $destinationList = Destination::latest()->with('category')->where('category_id',$destinationCategory->id)->paginate(4);
        //     $seo_data['seo_title'] =$destinationList->seo_title;
        //     $seo_data['seo_description'] =$destinationList->seo_description;
        //    $seo_data['keywords'] =$destinationList->seo_keyword;
        //       $seo_data['seo_image'] = $destinationList->image;
           $canocial ='https://www.tajindiatrails.com/blog/'.$slug;



        }else{
            $destinationList = Destination::latest()->with('category')->paginate(4);
            // $seo_data['seo_title'] =$homepage->seo_title_blog;
            // $seo_data['seo_description'] =$homepage->seo_des_blog;
            // $seo_data['keywords'] =$homepage->seo_key_blog;
            //     $seo_data['seo_image'] = $homepage->seo_image_blog;
            $canocial ='https://www.tajindiatrails.com/blogs';

         }
        $destinationCategories = DestinationCategory::latest()->get();
        $duration = Duration::latest()->get();

        return view('tour',compact('destinationCategories','duration','destinationList','canocial'));
    }

    public function destinationDetail($slug = null)
    {
           $destinationsData = Destination::with('destinationCategorys')->where('slug', $slug)->first();
              $seo_data['seo_title'] =$destinationsData->seo_title;
          $seo_data['seo_description'] =$destinationsData->seo_description;
          $seo_data['keywords'] =$destinationsData->seo_keyword;
          $seo_data['seo_image'] =$destinationsData->thumnail_image;
         $canocial ='http://127.0.0.1:8000/destination/'.$destinationsData->slug;

          $destinationsdetails = DestinationDetailsInsert::orderBy('order_num', 'asc')->where('package_id', $destinationsData->id)->get();

        return view('tour-detail', compact('destinationsData','destinationsdetails','seo_data','canocial'));
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
