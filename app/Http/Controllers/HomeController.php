<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\DestinationCategory;
use App\Models\DestinationDetailsInsert;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Duration;
use App\Models\GalleryCategory;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Info;
use App\Models\Seo;
use App\Models\Testimonials;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
     public function __construct()
     {
        $headerdestination = DestinationCategory::latest()->limit(5)->get();
        $info =   Info::first();
        View::share('headerdestination', $headerdestination);
        View::share('info', $info);
     }


    public function index()
    {
        $homepage = Seo::latest()->first();

        $seo_data['seo_title'] = $homepage->seo_home_title;
        $seo_data['seo_description'] = $homepage->seo_home_des;
        $seo_data['keywords'] = $homepage->seo_home_key;
        $seo_data['seo_image'] = 'images/desert_holidays.png';
         $canocial = 'http://127.0.0.1:8000';

        $destinationCategories = Destination::latest()->limit(20)->get();
        $destination = Destination::latest()->get();
        $destinationCategoriess = DestinationCategory::latest()->get();
        $category = DestinationCategory::latest()->get();
        $allblog = Blog::latest()->with('category')->limit(10)->get();
        $galleryCagerory = GalleryCategory::latest()->limit(8)->get();
        $gallary = Gallery::latest()->with('category')->limit(8)->get();
        $testimonials = Testimonials::latest()->get();


        return view('index', compact('destinationCategories', 'destination', 'destinationCategoriess', 'category', 'allblog', 'galleryCagerory', 'gallary', 'seo_data', 'canocial','testimonials'));
    }

    public function about()
    {
         $homepage = Seo::first();

        $seo_data['seo_title'] = $homepage->seo_about_title;
        $seo_data['seo_description'] = $homepage->seo_about_des;
        $seo_data['keywords'] = $homepage->seo_about_key;
        $seo_data['seo_image'] = 'images/desert_holidays.png';
         $canocial = 'http://127.0.0.1:8000/about-us';
        return view('about', compact('seo_data', 'canocial'));
    }

    public function contact()
    {
              $homepage = Seo::first();

        $seo_data['seo_title'] = $homepage->seo_contact_title;
        $seo_data['seo_description'] = $homepage->seo_contact_des;
        $seo_data['keywords'] = $homepage->seo_contact_key;
        $seo_data['seo_image'] = 'images/desert_holidays.png';
         $canocial = 'http://127.0.0.1:8000/contact';
        $destinationCategories = Destination::latest()->get();
        return view('contact', compact('destinationCategories', 'seo_data', 'canocial'));
    }

    public function contactForm(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|ends_with:gmail.com',
            'phone' => 'required|string|max:255',
            'travel_date' => 'required|date',
            'group_size' => 'required|string',
            'interested_destination' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'name.required' => 'Please enter your Full Name.',
            'name.string' => 'Please enter a valid name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.ends_with' => 'Email must be a Gmail address (ending with @gmail.com).',
            'phone.required' => 'Please enter your phone number.',
            'travel_date.required' => 'Please select your travel date.',
            'group_size.required' => 'Please select your group size.',
            'interested_destination.required' => 'Please enter your interested destination.',
            'subject.required' => 'Please enter the subject.',
            'subject.max' => 'Subject should not exceed 255 characters.',
            'message.max' => 'Message should not exceed 255 characters.',
            'message.string' => 'Please enter a valid message.',
            'message.required' => 'Please enter your message.',
        ]);

        // Create a new contact record
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'travel_date' => $request->input('travel_date'),
            'group_size' => $request->input('group_size'),
            'interested_destination' => $request->input('interested_destination'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);



        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function destination($slug = null)
    {
        $homepage = Seo::select('seo_destination_title', 'seo_destination_des', 'seo_destination_key')->first();
        if ($slug != null) {
            $destinationCategory = DestinationCategory::where('slug', $slug)->first();
            $destinationList = Destination::latest()->with('category')->where('category_id', $destinationCategory->id)->paginate(4);
                $seo_data['seo_title'] =$destinationCategory->seo_title;
                $seo_data['seo_description'] =$destinationCategory->seo_des;
               $seo_data['keywords'] =$destinationCategory->seo_key;
                  $seo_data['seo_image'] = $destinationCategory->image;
            $canocial = 'https://www.tajindiatrails.com/destination/' . $slug;
        } else {
            $destinationList = Destination::latest()->with('category')->paginate(4);
            $seo_data['seo_title'] =$homepage->seo_destination_title;
            $seo_data['seo_description'] =$homepage->seo_destination_des;
            $seo_data['keywords'] =$homepage->seo_destination_key;
                $seo_data['seo_image'] = 'images/desert_holidays.png';
            $canocial = 'https://www.tajindiatrails.com/destination';
        }
        $alldestinations = DestinationCategory::inRandomOrder()->get();
        $destinationCategories = DestinationCategory::latest()->get();
        $duration = Duration::latest()->get();

        return view('tour', compact('destinationCategories', 'duration', 'destinationList', 'canocial', 'alldestinations', 'seo_data'));
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
        $seo_data['seo_image'] = $destinationsData->thumb_image;
        $canocial = 'http://127.0.0.1:8000/destination/' . $destinationsData->slug;

        $destinationsdetails = DestinationDetailsInsert::where('package_id', $destinationsData->id)
            ->orderByRaw('CAST(order_num AS UNSIGNED) ASC')
            ->get();


        return view('tour-detail', compact('destinationsData', 'destinationsdetails', 'seo_data', 'canocial', 'alldestinations'));
    }


    public function tourEnquiry(Request $request)
    {
        // Validate the request data
        $request->validate([
            'package_id' => 'required|string|max:255',
            'people' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|ends_with:gmail.com',
            'phone' => 'required|string|max:255',
            'date_of_travel' => 'required|date',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',

            'message' => 'required|string',
        ], [
            'people.required' => 'Please enter your Full Name.',
            'people.string' => 'Please enter a valid name.',
            'name.required' => 'Please enter your Full Name.',
            'name.string' => 'Please enter a valid name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.ends_with' => 'Email must be a Gmail address (ending with @gmail.com).',
            'phone.required' => 'Please enter your phone number.',
            'date_of_travel.required' => 'Please select your travel date.',
            'country.required' => 'Please enter your country.',
            'city.required' => 'Please enter your city.',
            'message.max' => 'Message should not exceed 255 characters.',
            'message.string' => 'Please enter a valid message.',
            'message.required' => 'Please enter your message.',
        ]);

        // Create a new enquiry record
        Enquiry::create([
            'package_id' => $request->input('package_id'),
            'people' => $request->input('people'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'date_of_travel' => $request->input('date_of_travel'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'message' => $request->input('message'),
        ]);




        return redirect()->back()->with('success', 'Your tour enquiry has been submitted successfully!');
    }

    public function blog($slug = null)
    {
        $homepage = Seo::first();
        if ($slug != null) {
            $blogcategory = BlogCategory::where('slug', $slug)->first();
            $blogList = Blog::with('category')->where('blog_category_id',$blogcategory->id)->paginate(4);
            $seo_data['seo_title'] = $blogcategory->seo_title;
            $seo_data['seo_description'] = $blogcategory->seo_des;
            $seo_data['keywords'] = $blogcategory->seo_key;
            $seo_data['seo_image'] = $blogcategory->image;
            $canocial = 'https://www.tajindiatrails.com/blog/' . $slug;
        } else {
            $blogList = Blog::with('category')->paginate(4);
            $seo_data['seo_title'] =$homepage->seo_blog_title;
            $seo_data['seo_description'] =$homepage->seo_blog_des;
            $seo_data['keywords'] =$homepage->seo_blog_key;
                $seo_data['seo_image'] = 'images/desert_holidays.png';
            $canocial = 'https://www.tajindiatrails.com/blog';
        }
        $newblog = Blog::where('is_active', 1)
            ->with('category')
            ->latest()
            ->firstOrFail();

        $blogrendom = Blog::inRandomOrder()->limit(2)->get();



        return view('blog', compact('blogList', 'newblog', 'blogrendom', 'canocial', 'seo_data'));
    }

    public function blogDetail($slug = null)
    {

        $blogrendom = Blog::inRandomOrder()->with('category')->limit(5)->get();
        $blogDetail = Blog::with('category')->where('slug', $slug)->first();
        $seo_data['seo_title'] = $blogDetail->seo_title;
        $seo_data['seo_description'] = $blogDetail->seo_des;
        $seo_data['keywords'] = $blogDetail->seo_key;
        $seo_data['seo_image'] = $blogDetail->image;
        $canocial = 'http://127.0.0.1:8000/blog/' . $blogDetail->slug;
        return view('blog-detail', compact('blogDetail', 'blogrendom', 'seo_data', 'canocial'));
    }
}
