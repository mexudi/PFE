<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rendez;
class RendezController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([ 'nom'=>'required  ']);
        $request->validate([ 'prenom'=>'required  ']);
        $request->validate(['cin'=>'required ']);
        $request->validate([ 'tel'=>'required ']);
        $request->validate([ 'date'=>'required ']);


        $rendez = new Rendez();

        $rendez->nom = $request->input('nom');
        $rendez->prenom = $request->input('prenom');
        $rendez->cin = $request->input('cin');
        $rendez->tel = $request->input('tel');
        $rendez->date = $request->input('date');

        $rendez->save();
        $request->session()->flash('status', 'Votre rendez vous est bien enregistré ');
        return redirect('/');
       
    

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
