<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('editUser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $myUser = auth()->user();
        
        if($request->hasFile('profileImage')){
            $fileName = $request->file('profileImage')->getClientOriginalName();
            $ext = $request->file('profileImage')->getClientOriginalExtension();
            $fName = pathinfo($fileName, PATHINFO_FILENAME);
            $nameToSave = $fName.time().".".$ext;
            $checkStored = $request->file('profileImage')->storeAs('public/profileImages', $nameToSave);
            if($myUser->profileImage != 'avatar.png'){
                Storage::delete('public/profileImages/'.$myUser->profileImage);
            }
            if($checkStored){
                $myUser->profileImage = $nameToSave;
            }
        }
        $myUser->name = $request->name;
        $myUser->save();
        // if ($myUser->save()) {
        //     return redirect("/users")->with("successMessage", "Profile updated successfully ");
        // } else {
        //     return redirect()->back()->with("errorMessage", "Profile not yet updated");
        // }
        
        
        // if($request->hasFile('profileImage')){
        //     $fileName = $request->file('profileImage')->getClientOriginalName();
        //     $ext = $request->file('profileImage')->getClientOriginalExtension();
        //     $fName = pathinfo($fileName, PATHINFO_FILENAME);
        //     $nameToSave = $fName.time().".".$ext;
        //     $checkStored = $request->file('profileImage')->storeAs('public/profilepics', $nameToSave);
        //     // if($myUser->profileImage != 'avatar.png'){
        //     //     Storage::delete('public/profilepics/'.$myUser->profileImage);
        //     // }
        // //     if($checkStored){
        // //         $myUser->profilepics = $nameToSave;
        // //     }
        // $myUser->profileImage = $nameToSave;
        // } 
        // // $b = $myUser->update(['name'=> $request->name, 'image'=> $nameToSave]);
        // // if ($b) {
        //     return redirect("/users")->with("successMessage", "Profile updated successfully ");
        // //     }
        // //     return redirect()->back()->with("errorMessage", "Profile not yet updated");
        // $myUser->name = $request->name;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
