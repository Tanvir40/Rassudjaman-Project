<?php

namespace App\Http\Controllers;

use App\COPD;
use App\Covid;
use App\OzoneTherapy;
use App\PaPrp;
use App\Pr;
use Illuminate\Http\Request;

class HealthCareController extends Controller
{
    // add add_copd
    function add_copd(){
        $copds = COPD::get();
        return view('backend.healthcare.copd',[
            'copds'=>$copds,
        ]);
    }
        //save add_copd
        public function copd_save(Request $request){
            $request->validate([
                'text' => 'required',
                ]);
                COPD::find($request->id)->update([
                    'text'=>$request->text,
                ]);
                return back()->with('success', 'COPD Massage Updated Successfully');
            }


    // add add_covid
    function add_covid(){
        $covids = Covid::get();
        return view('backend.healthcare.covid',[
            'covids'=>$covids,
        ]);
    }
    //save add_copd
    public function covid_save(Request $request){
        $request->validate([
            'text' => 'required',
            ]);
            Covid::find($request->id)->update([
                'text'=>$request->text,
            ]);
            return back()->with('success', 'Covid Massage Updated Successfully');
        }


    // add add_pr
    function add_pr(){
        $prs = Pr::get();
        return view('backend.healthcare.pr',[
            'prs'=>$prs,
        ]);
    }

    //save pr
    public function pr_save(Request $request){
        $request->validate([
            'text' => 'required',
            'text2' => 'required',
            ]);
            Pr::find($request->id)->update([
                'text'=>$request->text,
                'text2'=>$request->text2,
            ]);
            return back()->with('success', 'PR Massage Updated Successfully');
        }


    // add add_paparp
    function add_paparp(){
        $paparps = PaPrp::get();
        return view('backend.healthcare.paparp',[
            'paparps'=>$paparps,
        ]);
    }

     //save add_paparp
     public function paparp_save(Request $request){
        $request->validate([
            'text' => 'required',
            ]);
            PaPrp::find($request->id)->update([
                'text'=>$request->text,
            ]);
            return back()->with('success', 'PaPrp Massage Updated Successfully');
        }



    // add add_ozonetherapy
    function add_ozonetherapy(){
        $ozonetherapy = OzoneTherapy::get();
        return view('backend.healthcare.ozonetherapy',[
            'ozonetherapy'=>$ozonetherapy,
        ]);
    }
    //save add_ozonetherapy
    public function ozonetherapy_save(Request $request){
        $request->validate([
            'text' => 'required',
            ]);
            OzoneTherapy::find($request->id)->update([
                'text'=>$request->text,
            ]);
            return back()->with('success', 'Ozone Therapy Massage Updated Successfully');
        }

}
