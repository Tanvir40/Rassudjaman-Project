<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\achievement;

class achievementsController extends Controller
{
   public function achievementsadd()
   {

    $allachievement=achievement::latest()->get();

    return view('backend.dashboard.achievements', ['allachievement' => $allachievement]);
   } 

   public function achievementsEdit()

   {
      return view('backend.dashboard.achievementsedit');
   }



}
