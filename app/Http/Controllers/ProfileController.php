<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     


    public function index()
    {
        return view('profileDonneur.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profileDonneur.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([ 'nom'=>'required ']);
        $request->validate([ 'prenom'=>'required']);
        $request->validate(['cin'=>'required']);
        $request->validate([ 'ddn'=>'required']);
        $request->validate(['tel'=>'required']);
        $request->validate([ 'ville'=>'required']);
       

        $profile = new Profile();

        $profile->nom = $request->input('nom');
        $profile->prenom = $request->input('prenom');
        $profile->cin = $request->input('cin');
        $profile->ddn = $request->input('ddn');
        $profile->tel = $request->input('tel');
        $profile->ville = $request->input('ville');

        $profile->save();
        
       
        return redirect('/profileDonneur');
        


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
