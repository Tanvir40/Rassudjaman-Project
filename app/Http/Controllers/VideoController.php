<?php

namespace App\Http\Controllers;

use App\covidmanagement;
use App\pureweekvideo;
use App\ramadanlifestyle;
use App\takecare;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //add takecare
    function takecare(){
        $takecare = takecare::get();
        return view('backend.videos.takecare',[
            'takecare'=>$takecare,
        ]);
    }
    //save takecare
    function takecare_save(Request $request){
        takecare::insert([
            'link'=>$request->link,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success', 'TakeCare Video Added Successfully!');
    }
    //delete takecare
    function takecare_delete($takecare_id){
        takecare::find($takecare_id)->delete();
        return back()->with('delete', 'takecare Deleted Successfully!');
        }

    //add pureweekvideo
    function pureweekvideo(){
        $pureweekvideo = pureweekvideo::get();
        return view('backend.videos.pureweekvideo',[
            'pureweekvideo'=>$pureweekvideo,
        ]);
    }

    //save pureweekvideo
    function pureweekvideo_save(Request $request){
        pureweekvideo::insert([
            'link'=>$request->link,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success', 'pureweekvideo Video Added Successfully!');
    }
    //delete pureweekvideo
    function pureweekvideo_delete($pureweekvideo_id){
        pureweekvideo::find($pureweekvideo_id)->delete();
        return back()->with('delete', 'pureweekvideo Deleted Successfully!');
        }

    //add covidmanagement
    function covidmanagement(){
        $covidmanagement = covidmanagement::get();
        return view('backend.videos.covidmanagement',[
            'covidmanagement'=>$covidmanagement,
        ]);
    }
    //save covidmanagement
    function covidmanagement_save(Request $request){
        covidmanagement::insert([
            'link'=>$request->link,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success', 'covidmanagement Video Added Successfully!');
    }
    //delete covidmanagement
    function covidmanagement_delete($covidmanagement_id){
        covidmanagement::find($covidmanagement_id)->delete();
        return back()->with('delete', 'covidmanagement Deleted Successfully!');
        }

    //add ramadanlifestyle
    function ramadanlifestyle(){
        $ramadanlifestyle = ramadanlifestyle::get();
        return view('backend.videos.ramadanlifestyle',[
            'ramadanlifestyle'=>$ramadanlifestyle,
        ]);
    }
     //save ramadanlifestyle
     function ramadanlifestyle_save(Request $request){
        ramadanlifestyle::insert([
            'link'=>$request->link,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success', 'ramadanlifestyle Video Added Successfully!');
    }
    //delete ramadanlifestyle
    function ramadanlifestyle_delete($ramadanlifestyle_id){
        ramadanlifestyle::find($ramadanlifestyle_id)->delete();
        return back()->with('delete', 'ramadanlifestyle Deleted Successfully!');
        }
}
