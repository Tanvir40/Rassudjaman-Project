<?php

namespace App\Http\Controllers;

use App\freemaskdistribution;
use App\photogellary;
use App\pureweek;
use App\scientificseminaratfeni;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{
    //add scientificseminaratfeni
    function scientificseminaratfeni(){
        $scientificseminaratfeni = scientificseminaratfeni::get();
        return view('backend.photos.scientificseminaratfeni',[
            'scientificseminaratfeni'=>$scientificseminaratfeni,
        ]);
    }
    // save banner
    public function scientificseminaratfeni_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $scientificseminaratfeni_id = scientificseminaratfeni::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $scientificseminaratfeni_id.'.'.$extension;

       Image::make($uploaded_file)->resize(635,370)->save(public_path('frontend/images/photogellary/scientificseminaratfeni/'.$file_name));

       scientificseminaratfeni::find($scientificseminaratfeni_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'scientificseminaratfeni Added Successfully!');
   }
    //delete scientificseminaratfeni
    function scientificseminaratfeni_delete($scientificseminaratfeni_id){
        $scientificseminaratfeni_images = freemaskdistribution::find($scientificseminaratfeni_id);
        $scientificseminaratfeni_images->photo;
        $delete_from = public_path('frontend/images/photogellary/scientificseminaratfeni/'.$scientificseminaratfeni_images->photo);
        unlink($delete_from);


        scientificseminaratfeni::find($scientificseminaratfeni_id)->delete();
        return back()->with('delete', 'scientificseminaratfeni Image Deleted Successfully!');
        }





    //add pureweek
    function pureweek(){
        $pureweek = pureweek::get();
        return view('backend.photos.pureweek',[
            'pureweek'=>$pureweek,
        ]);
    }
    // save pureweek
    public function pureweek_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pureweek_id = pureweek::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $pureweek_id.'.'.$extension;

       Image::make($uploaded_file)->resize(635,370)->save(public_path('frontend/images/photogellary/pureweek/'.$file_name));

       pureweek::find($pureweek_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'pureweek Added Successfully!');
   }
    //delete pureweek
    function pureweek_delete($pureweek_id){
        $pureweek_images = pureweek::find($pureweek_id);
        $pureweek_images->photo;
        $delete_from = public_path('frontend/images/photogellary/pureweek/'.$pureweek_images->photo);
        unlink($delete_from);


        pureweek::find($pureweek_id)->delete();
        return back()->with('delete', 'pureweek Image Deleted Successfully!');
        }

    //add freemaskdistribution
    function freemaskdistribution(){
        $maskdistrubation = freemaskdistribution::get();
        return view('backend.photos.freemaskdistribution',[
            'maskdistrubation'=>$maskdistrubation,
        ]);
    }

    // save freemaskdistribution
   public function freemaskdistribution_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $freemaskdistribution_id = freemaskdistribution::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $freemaskdistribution_id.'.'.$extension;

       Image::make($uploaded_file)->resize(635,370)->save(public_path('frontend/images/photogellary/freemaskdistribution/'.$file_name));

       freemaskdistribution::find($freemaskdistribution_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'freemaskdistribution Added Successfully!');
   }

   //delete freemaskdistribution
   function freemaskdistribution_delete($freemaskdistribution_id){
    $freemaskdistribution_images = freemaskdistribution::find($freemaskdistribution_id);
    $freemaskdistribution_images->photo;
    $delete_from = public_path('frontend/images/photogellary/freemaskdistribution/'.$freemaskdistribution_images->photo);
    unlink($delete_from);


    freemaskdistribution::find($freemaskdistribution_id)->delete();
    return back()->with('delete', 'freemaskdistribution Image Deleted Successfully!');
    }




    //add photogellary
    function photogellary(){
        $photogellary = photogellary::get();
        return view('backend.photos.photogellary',[
            'photogellary'=>$photogellary,
        ]);
    }

      // save photogellary
   public function photogellary_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photogellary_id = photogellary::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $photogellary_id.'.'.$extension;

       Image::make($uploaded_file)->resize(635,370)->save(public_path('frontend/images/photogellary/photogellary/'.$file_name));

       photogellary::find($photogellary_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'photogellary Added Successfully!');
   }
    //delete photogellary
    function photogellary_delete($photogellary_id){
        $photogellary_images = photogellary::find($photogellary_id);
        $photogellary_images->photo;
        $delete_from = public_path('frontend/images/photogellary/photogellary/'.$photogellary_images->photo);
        unlink($delete_from);


        photogellary::find($photogellary_id)->delete();
        return back()->with('delete', 'photogellary Image Deleted Successfully!');
        }

}
