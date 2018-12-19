<?php

namespace App\Http\Controllers;

use App\Facility_A;
use App\Facility_B;
use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function get_total_a(){
        return Facility_A::all()->count();
    }

    public function get_num_a(Facility_A $facility_A){

    }

    public function del_a(Facility_A $facility_A){

    }

    public function send_a(Facility_A $facility_A){

    }



    public function get_total_b(){
        return Facility_B::all()->count();
    }

    public function get_num_b(Facility_B $facility_B){

    }

    public function del_b(Facility_B $facility_B){

    }

    public function send_b(Facility_B $facility_B){

    }

}
