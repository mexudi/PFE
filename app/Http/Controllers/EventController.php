<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  



    public function home(){

        $event = Event::all()->last();
        return view('Home.home',['event'=>$event]);
    }

    
    public function index()
    {
        
        $events = Event ::all();
        return view('admin.event.index',['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 'name'=>'required |min:4 ']);
        $request->validate([ 'place'=>'required |min:4 ']);
        $request->validate(['date'=>'required ']);
        $request->validate([ 'description'=>'required ']);

        $event = new Event();

        $event->name = $request->input('name');
        $event->place = $request->input('place');
        $event->date = $request->input('date');
        $event->description= $request->input('description');
        

        $event->save();

        $request->session()->flash('status','Evenement est bien ajouté ! ');
        return redirect('/admin/event');
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
        $event = Event :: findOrFail($id);
        
        return view('admin.event.edit',['event'=>$event]);
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
        $request->validate([ 'name'=>'required |min:4 ']);
        $request->validate([ 'place'=>'required |min:4 ']);
        $request->validate(['date'=>'required ']);
        $request->validate([ 'description'=>'required ']);

        $event = Event::findOrFail($id);


        $event->name = $request->input('name');
        $event->place = $request->input('place');
        $event->date = $request->input('date');
        $event->description= $request->input('description');
        

        $event->update();

        $request->session()->flash('status','Evenement est bien modifié ! ');
        return redirect('/admin/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $event->delete();
        
        return redirect('/admin/event');
    }

    





   

}
