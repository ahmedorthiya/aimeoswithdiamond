<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    //

    public function updateAddress(Request $request){
//        return sizeof();
        $user = Auth::user();
        $endLimit = sizeof($request->addresses) > 3 ? 3 : sizeof($request->addresses);

     //   $addresses = [];

        for($i = 0; $i < $endLimit; $i++ ){
             $object = $request->addresses[$i];
             $user['address'.($i+1)] =  'Username : '. $object['username'.$object['id']]. ', Street : ' . $object['street'.$object['id']].', house no : ' . $object['houseno'.$object['id']] .', City : ' . $object['city'.$object['id']];
        }
        $user->company = $request->permanentAddress['companyName'];
        $user->state = $request->permanentAddress['state'];
        $user->postal = $request->permanentAddress['zip'];
        $user->countryid = $request->permanentAddress['country'];
        $user->save();
        return $user;
    }
}
