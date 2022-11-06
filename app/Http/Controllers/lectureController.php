<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\lecture;

class lectureController extends Controller
{


      public function index()
    {

        $lecture =lecture::latest()->get();
        return view('backend.dashboard.lecture', ['lecture' => $lecture]);
    }

      public function store(Request $request)
    {
        $this->validate($request,[
              'lecture_key'=>'required',
              'lecture_title_en'=>'required',
              'lecture_title_bn'=>'required',
              'lecture_details_part_en'=>'required',
              'lecture_details_part_bn'=>'required',
              

        ]);
        $lecture=lecture::create([

          'lecture_key'=>$request->lecture_key,
          'lecture_title_en'=>$request->lecture_title_en,
          'lecture_title_bn'=>$request->lecture_title_bn,
          'lecture_details_part_en'=>$request->lecture_details_part_en,
          'lecture_details_part_bn'=>$request->lecture_details_part_en,
        ]);

        return back()->withInput();

    }

    public function editdata($id)

    {
        $lecturedit =lecture::where($id)->get();
        return view('backend.dashboard.lecture', ['lecturedit' => $lecturedit]);

    }

    public function deletedata($id)
    {

        $deletedata=lecture::where('id',$id)->delete();

        return back()->withInput();

    }
    
}
