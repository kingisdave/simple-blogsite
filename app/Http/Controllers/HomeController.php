<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function update(Request $request)
    {
         
        $myUser = auth()->user()->id;

        if($request->hasFile('profileImage')){
            $fileName = $request->file('profileImage')->getClientOriginalName();
            $ext = $request->file('profileImage')->getClientOriginalExtension();
            $fName = pathinfo($fileName, PATHINFO_FILENAME);
            $nameToSave = $fName.time().".".$ext;
            $checkStored = $request->file('profileImage')->storeAs('public/profilepics', $nameToSave);
            if($myUser->profileImage != 'avatar.png'){
                Storage::delete('public/profilepics/'.$myUser->profileImage);
            }
            if($checkStored){
                $myUser->profilepics = $nameToSave;
            }
        } 
        $myUser->name = $request->name;
    
    }
}
