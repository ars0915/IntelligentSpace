<?php

namespace App\Http\Controllers;

use App\UserandShopStatus;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function ModifyStatus($username, $shopid, $status){
        if($status){
            UserandShopStatus::create(['UserID' => $username, 'ShopID' => $shopid,]);
            return response()->json(null, 200);
        }
        else{
            $user = UserandShopStatus::where('UserID', '=', $username)->where('ShopID', '=', $shopid);
            $user->delete();
            return response()->json(null, 204);
        }
        return response()->json(null, 404);
    }

    public function SearchShop($username){
        $Shop = UserandShopStatus::where('userid', '=', $username)->pluck('shopid');
        if($Shop){
            return $Shop;
        }
    }

    /**
     * @param Request $request
     * @throws \LINE\LINEBot\Exception\CurlExecutionException
     * @return mixed
     */
    public function webhook(Request $request){
        $events = $request->get('events', []);
        $userId = array_get($events, "0.source.userId");
        UserandShopStatus::create([
            'UserID' => $userId,
            'ShopID' => "test",
        ]);
        return response()->json(null, 200);
    }
}
