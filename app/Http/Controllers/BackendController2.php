<?php

namespace App\Http\Controllers;

use App\article;
use App\BetterLiving;
use App\booklist;
use App\Charity;
use App\OngoingResearch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BackendController2 extends Controller
{
     // add_ongoing_research
     function add_ongoing_research(){
        $OngoingResearch = OngoingResearch::get();
        return view('backend.OngoingResearch',[
            'OngoingResearch'=>$OngoingResearch,
        ]);
    }
 // save save_ongoing_research
 public function save_ongoing_research(Request $request){
    $request->validate([
        'research_title' => 'required',
        'research_desp' => 'required',
        ]);

        OngoingResearch::insert([
            'research_title'=>$request->research_title,
            'research_desp'=>$request->research_desp,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success', 'OngoingResearch Added Successfully');
   }

   //delete save_ongoing_research
    function ongoing_research_delete($research_id){
        OngoingResearch::find($research_id)->delete();
        return back()->with('delete', 'OngoingResearch Deleted Successfully!');
    }


     // add add_booklist
     function add_booklist(){
        $booklist = booklist::get();
        return view('backend.booklist',[
            'booklist'=>$booklist,
        ]);
    }
    // save save_booklist
    public function save_booklist(Request $request){
        $request->validate([
            'title' => 'required',
            'book_name' => 'required',
            'book_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $booklist_id = booklist::insertGetId([
                'title'=>$request->title,
                'book_name'=>$request->book_name,
                'created_at'=>Carbon::now(),
        ]);
        $uploaded_file = $request->book_image;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = $booklist_id.'.'.$extension;

        Image::make($uploaded_file)->resize(300,300)->save(public_path('frontend/books/'.$file_name));

        booklist::find($booklist_id)->update([
            'book_image'=>$file_name,
        ]);
        return back()->with('success', 'BookList Member Added Successfully!');
    }

    //delete save_booklist
    function booklist_delete($booklist_id){
        $booklist_images = booklist::find($booklist_id);
        $booklist_images->book_image;
        $delete_from = public_path('frontend/books/'.$booklist_images->book_image);
        unlink($delete_from);


        booklist::find($booklist_id)->delete();
        return back()->with('delete', 'BookList Deleted Successfully!');
        }


     // add add_article
     function add_article(){
        $articles = article::get();
        return view('backend.article',[
            'articles'=>$articles,
        ]);
    }

    public function save_article(Request $request){
        $request->validate([
            'article' => 'required',
            'pdf' => 'required|file|mimes:pdf,PDF|max:30720',
            ]);

            $article_id = article::insertGetId([
                'article'=>$request->article,
                'created_at'=>Carbon::now(),
        ]);
        $uploaded_file = $request->pdf;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = $article_id.'.'.$extension;

        $request->pdf->move('frontend/pdf/' ,$file_name);

        article::find($article_id)->update([
            'pdf'=>$file_name,
        ]);
        return back()->with('success', 'Article Added Successfully!');
    }

    function article_delete($article_id){
        $article_file = article::find($article_id);
        $article_file->pdf;
        $delete_from = public_path('frontend/pdf/'.$article_file->pdf);
        unlink($delete_from);

        article::find($article_id)->delete();
        return back()->with('delete', 'Article Deleted Successfully!');
        }


        // add Charity
     function add_charity(){
        $charities = Charity::get();
        return view('backend.charity',[
            'charities'=>$charities,
        ]);
    }

    // save Charity
    public function save_charity(Request $request){
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'desp' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $charity_id = Charity::insertGetId([
                'title'=>$request->title,
                'link'=>$request->link,
                'desp'=>$request->desp,
                'created_at'=>Carbon::now(),
        ]);
        $uploaded_file = $request->photo;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = $charity_id.'.'.$extension;

        Image::make($uploaded_file)->resize(200,100)->save(public_path('frontend/charity/'.$file_name));

        Charity::find($charity_id)->update([
            'photo'=>$file_name,
        ]);
        return back()->with('success', 'Charity Added Successfully!');
    }

    //delete Charity
    function charity_delete($charity_id){
        $charity_images = Charity::find($charity_id);
        $charity_images->photo;
        $delete_from = public_path('frontend/charity/'.$charity_images->photo);
        unlink($delete_from);

        Charity::find($charity_id)->delete();
        return back()->with('delete', 'Charity Deleted Successfully!');
        }


        // add add_betterliving
     function add_betterliving(){
        $betterliving = BetterLiving::get();
        return view('backend.betterliving',[
            'betterliving'=>$betterliving,
        ]);
    }

    public function save_betterliving(Request $request){
        $request->validate([
            'title' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $betterliving_id = BetterLiving::insertGetId([
                'title'=>$request->title,
                'created_at'=>Carbon::now(),
        ]);
        $uploaded_file = $request->photo;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = $betterliving_id.'.'.$extension;

        Image::make($uploaded_file)->resize(700,500)->save(public_path('frontend/betterliving/'.$file_name));

        BetterLiving::find($betterliving_id)->update([
            'photo'=>$file_name,
        ]);
        return back()->with('success', 'Charity Added Successfully!');
    }
     //delete betterliving
     function betterliving_delete($betterliving_id){
        $betterliving_images = BetterLiving::find($betterliving_id);
        $betterliving_images->photo;
        $delete_from = public_path('frontend/betterliving/'.$betterliving_images->photo);
        unlink($delete_from);

        BetterLiving::find($betterliving_id)->delete();
        return back()->with('delete', 'betterliving Deleted Successfully!');
        }

}
