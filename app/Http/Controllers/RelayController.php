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

   public function showRelay(Relay $relay){
      return response()->json([
          'message' => 'Relay fetched successfully',
          'data' => $relay,
      ], 200);
   }

   public function createRelay(Request $request){
      
         $relay = Relay::create([]);
      
         return response()->json([
         'messsage' => 'Relay created successfully',
         'data' => $relay,
         ], 200);
   }


   public function deleteRelay(Relay $relay){
         $relay -> delete();
         
         return response()->json([
            'messsage' => 'Relay deleted successfully',
         ], 200);
   }

}
