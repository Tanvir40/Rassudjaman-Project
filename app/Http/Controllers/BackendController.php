<?php

namespace App\Http\Controllers;

use App\About;
use App\Banner;
use App\CustomerForm;
use App\MassageProf;
use App\NewQuotes;
use App\News;
use App\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BackendController extends Controller
{
    //add banner
    function add_banner(){
        $banners = Banner::all();
        return view('backend.banner',[
            'banners'=>$banners,
        ]);
    }
        // save banner
   public function save_banner(Request $request){
    $request->validate([
        'bannername' => 'required',
        'bannerimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $banner_id = Banner::insertGetId([
            'bannername'=>$request->bannername,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->bannerimage;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $banner_id.'.'.$extension;

       Image::make($uploaded_file)->resize(1400,850)->save(public_path('frontend/images/Banners/'.$file_name));

       Banner::find($banner_id)->update([
        'bannerimage'=>$file_name,
       ]);
       return back()->with('success', 'Banner Added Successfully!');
   }

   //delete banner
   function banner_delete($banner_id){
    $banner_images = Banner::find($banner_id);
    $banner_images->bannerimage;
    $delete_from = public_path('frontend/images/Banners/'.$banner_images->bannerimage);
    unlink($delete_from);


    Banner::find($banner_id)->delete();
    return back()->with('delete', 'Banner Image Deleted Successfully!');
    }

    //active carousel_image
    function banner_active($banner_id){
        Banner::find($banner_id)->update([
        'status'=>1,
        ]);
    return back()->with('active', 'Banner Image Activated Successfully!');
    }

    //De-active carousel_image
    function banner_deactive($banner_id){
        Banner::find($banner_id)->update([
        'status'=>2,
        ]);
    return back()->with('deactive', '
    Banner Image De-activated Successfully!');
    }


    //Massage From Prof.
    function prof_massage(){
        $massages = MassageProf::all();
        return view('backend.Message_from_Prof',[
            'massages'=>$massages,
        ]);
    }
     //save Massage From Prof.
    public function prof_massage_save(Request $request){
        $request->validate([
            'massage' => 'required',
            ]);

            MassageProf::find($request->id)->update([
                'massage'=>$request->massage,
            ]);
            return back()->with('success', 'Massage Updated Successfully');
        }

    //add QUOTES
    function add_quotes(){
        $quotes = NewQuotes::all();
        return view('backend.quotes',[
            'quotes'=>$quotes,
        ]);
    }
     //quotes_save
     public function quotes_save(Request $request){
        $request->validate([
            'quotes_one' => 'required',
            'quotes_two' => 'required',
            ]);

            NewQuotes::find($request->id)->update([
                'quotes_one'=>$request->quotes_one,
                'quotes_two'=>$request->quotes_two,
            ]);
            return back()->with('success', 'Quotes Updated Successfully');
        }


    //about
    function add_about(){
        $abouts = About::all();
        return view('backend.about' ,[
            'abouts'=>$abouts,
        ]);
    }
    public function save_about(Request $request){
        $request->validate([
            'about' => 'required',
            ]);

            About::find($request->id)->update([
                'about'=>$request->about,
            ]);
            return back()->with('success', 'About Updated Successfully');
        }

    //profile
    function add_profile(){
        $massages = Profile::all();
        return view('backend.profile',[
            'massages'=>$massages,
        ]);
    }
    public function save_profile(Request $request){
        $request->validate([
            'massage' => 'required',
            ]);

            Profile::find($request->id)->update([
                'massage'=>$request->massage,
            ]);
            return back()->with('success', 'Profile Massage Updated Successfully');
        }

        // customer form
        function show_customer_massage(){
            $customers = CustomerForm::get();
            return view('backend.customer_form',[
                'customers'=>$customers,
            ]);
        }

        //customer form save
        function customer_form_save(Request $request){
            $request->validate([
                'name'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'message'=>'required',
            ],[
                'name.required'=>'Please Enter Your Name!',
                'phone.required'=>'Telephone Number Is Required!',
                'email.required'=>'Please Enter a Email!',
                'message.required'=>'Tell Us your Opinion!',
            ]);

            CustomerForm::insert([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'message'=>$request->message,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('form_success' , 'Your Queries has been Submitted');
        }

         //delete customer_form_delete
         function customer_form_delete($customer_id){
            CustomerForm::find($customer_id)->delete();
            return back()->with('delete', 'Customer Form Deleted Successfully!');
        }

         // add news
         function add_news(){
            $news = News::get();
            return view('backend.add_news',[
                'news'=>$news,
            ]);
        }

               // save news
   public function save_news(Request $request){
    $request->validate([
        'title' => 'required',
        'image_link' => 'required',
        'news_desp' => 'required',
        'news_link' => 'required',
        ]);

        News::insert([
            'title'=>$request->title,
            'image_link'=>$request->image_link,
            'news_desp'=>$request->news_desp,
            'news_link'=>$request->news_link,
            'created_at'=>Carbon::now(),
       ]);

       return back()->with('success', 'News Added Successfully!');
   }

   //delete news
   function news_delete($news_delete){
    News::find($news_delete)->delete();
    return back()->with('delete', 'News Deleted Successfully!');
    }
}
