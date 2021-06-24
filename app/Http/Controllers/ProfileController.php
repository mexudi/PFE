<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        $user = Auth::user();
        $check = Profile::where('user_id',$user->id)->get('nom');
        //$ddn = $user->profile->ddn;

        if($check->isEmpty()){
            
            return view('home.error');
        }
        else{
            return view('profileDonneur.index',['user'=>$user]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profileDonneur.informationPersonnel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 'nom'=>'required  ']);
        $request->validate([ 'prenom'=>'required  ']);
        $request->validate(['cin'=>'required ']);
        $request->validate([ 'dtn'=>'required ']);
       // $request->validate([ 'dtn'=>'required ']);
        $request->validate([ 'tel'=>'required ']);
        $request->validate([ 'ville'=>'required ']);

        $profile = new Profile();

        $profile->nom = $request->input('nom');
        $profile->prenom = $request->input('prenom');
        $profile->cin = $request->input('cin');
        $profile->dtn = $request->input('dtn');
        $profile->tel = $request->input('tel');
        $profile->ville = $request->input('ville');
        $profile->type_sang = 'A';
        $profile->user_id = Auth::user()->id;

        $profile->save();

        return redirect('/profile');
        


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
        //
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
