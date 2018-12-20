<?php

namespace App\Http\Controllers;

use App\Facility_A;
use App\Facility_B;
use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;

class FacilityController extends Controller
{

    public function create_a($username){
        Facility_A::create(['queuer' => $username]);
        return response()->json(null, 200);
    }

    public function get_total_a(){
        return Facility_A::all()->count();
    }

    public function get_num_a($username){

        $user = Facility_A::where('queuer', '=', $username)->first();

        if($user){
            $id = $user->id;
            return Facility_A::where('id', '<', $id)->count();
        }
        else{
            return 'Can\'t find user';
        }
    }

    public function del_a($username){

        $user = Facility_A::where('queuer', '=', $username)->first();

        if($user){
            $user->delete();
            return response()->json(null, 204);
        }
        return 'Can\'t find the user';

    }

    public function send_a($username){

    }



    public function create_b($username){
        Facility_B::create(['queuer' => $username]);
        return response()->json(null, 200);
    }

    public function get_total_b(){
        return Facility_B::all()->count();
    }

    public function get_num_b($username){

        $user = Facility_B::where('queuer', '=', $username)->first();
        if($user){
            $id = $user->id;
            return Facility_B::where('id', '<', $id)->count();
        }
        else{
            return 'Can\'t find user';
        }
    }

    public function del_b($username){

        $user = Facility_B::where('queuer', '=', $username)->first();

        if($user){
            $user->delete();
            return response()->json(null, 204);
        }
        return 'Can\'t find the user';

    }

    public function send_b($username){

    }

}
