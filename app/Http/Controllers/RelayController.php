<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relay;

class RelayController extends Controller
{
   public function index(){
    return Relay::all();
   }

   public function toggleRelay(Relay $relay){
    $relay->relay_status = !$relay->relay_status;
    $relay->save();
    return $relay;
   }

   public function offRelay(Relay $relay){
    $relay->relay_status = false;
    $relay->save();
    return $relay;
   }

   public function onRelay(Relay $relay){
    $relay->relay_status = true;
    $relay->save();
    return $relay;
   }

}
