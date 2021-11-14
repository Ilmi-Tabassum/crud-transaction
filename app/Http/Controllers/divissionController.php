<?php

namespace App\Http\Controllers;

use App\Models\divission;
use App\Models\upazila;
use App\Models\thana;
use App\Models\name;
use Illuminate\Http\Request;
use DB;
class DivissionController extends Controller
{


    public function indexing()
    {
        $divission = \DB::table('divission')->get();

        return view('helper', compact('divission'));
    }

    public function get_thana($id)
    {

        $thana = \DB::table('thana')->where('country_id', $id)->get();
        /*  print_r(thana);
          exit();*/
        return $thana;

    }

    public function get_upazila($id)
    {

        $upazila = \DB::table('upazila')->where('thana_id', $id)->get();
     /*  print_r(upazila);
         exit();*/

        return $upazila;

    }

    public function get_name($id)
    {

        $name = \DB::table('name')->where('name_id', $id)->get();
        /*  print_r(upazila);
            exit();*/

        return $name;

    }
}

