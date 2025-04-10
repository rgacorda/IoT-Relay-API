<?php

namespace App\Http\Controllers;

use App\Models\Wifi;
use Illuminate\Http\Request;

class WifiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Wifi::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    // public function show(Wifi $wifi)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wifi $wifi)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        $wifi->name = $request->name;
        $wifi->password = $request->password;
        $wifi->save();

        return $wifi;
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Wifi $wifi)
    // {
    //     //
    // }
}
