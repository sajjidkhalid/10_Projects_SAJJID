<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class quran extends Controller
{
    //



    function getcontents() {


          $mydata= Http::get("https://api.alquran.cloud/v1/meta");


         return view("surah",["alldata"=> $mydata["data"]["surahs"]["references"]]);

        
    }




    function getcontentsDetails($snum) {


        $mydata= Http::get("https://api.alquran.cloud/v1/surah/$snum");


       return view("read",["alldatas"=> $mydata["data"]["ayahs"]]);

      
  }







}

