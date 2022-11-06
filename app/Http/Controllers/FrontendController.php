<?php

namespace App\Http\Controllers;

use App\About;
use App\Banner;
use App\CustomerForm;
use App\MassageProf;
use App\NewQuotes;
use App\News;
use App\Profile;
use App\COPD;
use App\Covid;
use App\OzoneTherapy;
use App\PaPrp;
use App\Pr;
use App\article;
use App\BetterLiving;
use App\booklist;
use App\Charity;
use App\OngoingResearch;
use App\freemaskdistribution;
use App\photogellary;
use App\pureweek;
use App\scientificseminaratfeni;
use App\covidmanagement;
use App\pureweekvideo;
use App\ramadanlifestyle;
use App\takecare;
use Illuminate\Http\Request;
use App\Contacts;
use App\lecture;

class FrontendController extends Controller
{

   public function index()

   {
      $banners = Banner::all();
      $massages = MassageProf::all();
      $quotes = NewQuotes::all();
      return view('frontend.index',[
        'banners'=>$banners,
        'massages'=>$massages,
        'quotes'=>$quotes,
      ]);
   }

   public function about()
   {
    $abouts = About::all();
    return view('frontend.about',[
        'abouts'=>$abouts,
    ]);
   }

   public function paparp()
   {
    $paparps = PaPrp::get();
      return view('frontend.paparp',[
        'paparps'=>$paparps,
      ]);
   }

   public function copd()
   {
    $copds = COPD::get();
      return view('frontend.copd',[
        'copds'=>$copds,
      ]);
   }

   public function covid()
   {
    $covids = Covid::get();
       return view('frontend.covid',[
        'covids'=>$covids,
       ]);
   }

    public function pr()
   {
    $prs = Pr::get();
       return view('frontend.pr',[
        'prs'=>$prs,
       ]);
   }

   public function ozonetherapy()

   {
    $ozonetherapy = OzoneTherapy::get();
       return view('frontend.ozonetherapy',[
        'ozonetherapy'=>$ozonetherapy,
       ]);
   }

   public function educationscholarship()
   {
      return view('frontend.educationscholarship');
   }

   public function contactus()
   {
      return view('frontend.contactus');
   }

   public function achievements()
   {
      return view('frontend.achievements');
   }

   public function rashidulhassanprofile()
   {
    $massages = Profile::all();
      return view('frontend.rashidulhassanprofile',[
        'massages'=>$massages,
      ]);
   }

   public function reliefandcharity()

   {
    $charities = Charity::get();
      return view('frontend.reliefandcharity',[
        'charities'=>$charities,
      ]);
   }

   public function betterliving()

   {
    $betterliving = BetterLiving::get();
      return view('frontend.betterliving',[
        'betterliving'=>$betterliving,
      ]);
   }

   public function medicalprograms()

   {
      return view('frontend.medicalprograms');
   }

   public function booklist()

   {
    $booklist = booklist::get();
      return view('frontend.booklist',[
        'booklist'=>$booklist,
      ]);
   }

   public function article()
   {
    $articles = article::get();
      return view('frontend.articles',[
        'articles'=>$articles,
      ]);
   }
   public function guidelines()

   {
      return view('frontend.guidelines');
   }

     public function videogellaryfolder()

    {
        return view('frontend.videogellaryfolder');
    }

    public function takecare()
    {
        $takecare = takecare::get();
        return view("frontend.takecare",[
            'takecare'=>$takecare,
        ]);
    }

    public function covidmanagement()
    {
        $covidmanagement = covidmanagement::get();
        return view('frontend.covidmanagement',[
            'covidmanagement'=>$covidmanagement,
        ]);
    }

    public function ramadanlifestyle()
    {
        $ramadanlifestyle = ramadanlifestyle::get();
        return view('frontend.ramadanlifestyle',[
            'ramadanlifestyle'=>$ramadanlifestyle,
        ]);
    }


    public function pureweekvideo()
    {
        $pureweekvideo = pureweekvideo::get();
        return view('frontend.pureweekvideo',[
            'pureweekvideo'=>$pureweekvideo,
        ]);
    }
    public function photogellaryfolder()
    {
        $scientificseminaratfeni = scientificseminaratfeni::get();
        $photogellary = photogellary::get();
        $maskdistrubation = freemaskdistribution::get();
        $pureweek = pureweek::get();
      return view('frontend.photogellaryfolder',[
        'scientificseminaratfeni'=>$scientificseminaratfeni,
        'photogellary'=>$photogellary,
        'maskdistrubation'=>$maskdistrubation,
        'pureweek'=>$pureweek,
      ]);
    }

    public function photogellary()

    {
        $photogellary = photogellary::get();
      return view('frontend.photogellary',[
        'photogellary'=>$photogellary,
      ]);
    }

    public function freemaskdistribution()

    {
        $maskdistrubation = freemaskdistribution::get();
        return view('frontend.freemaskdistribution',[
            'maskdistrubation'=>$maskdistrubation,
        ]);
    }

    public function pureweek()
    {
        $pureweek = pureweek::get();
        return view('frontend.pureweek',[
            'pureweek'=>$pureweek,
        ]);
    }


    public function scientificseminaratfeni()
    {
        $scientificseminaratfeni = scientificseminaratfeni::get();
        return view('frontend.scientificseminaratfeni',[
            'scientificseminaratfeni'=>$scientificseminaratfeni,
        ]);
    }

    public function news()

    {
        $news = News::get();
        return view('frontend.news',[
            'news'=>$news,
        ]);
    }

    public function ongoingproject()
    {
        $OngoingResearch = OngoingResearch::get();
      return view('frontend.ongoingproject',[
        'OngoingResearch'=>$OngoingResearch,
      ]);
    }

    public function affiliations()
    {
      return view('frontend.affiliations');
    }

    public function socialworks()
    {
      return view('frontend.socialworks');
    }


   public function usermessageinfo()

   {
      $contactinfo =Contacts::latest()->get();
        return view('backend.dashboard.usermessageinfo', ['contactinfo' => $contactinfo]);
   }


   public function store(Request $request)
   {
      $this->validate($request,[
       'fullname'=>'required',
       'telephone'=>'required',
       'email'=>'required',
       'message'=>'required',

      ]);

      $contactstores=Contacts::create([

         'fullname'=>$request->fullname,
         'telephone'=>$request->telephone,
         'email'=>$request->email,
         'message'=>$request->message,

      ]);
      return "HI";

   }

    public function switch(Request $request, $locale)
    {

        session (['APP_LOCALE'=>$locale]);


        return redirect()->back();
    }
}
