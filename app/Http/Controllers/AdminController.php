<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Profile;
use App\Models\Rendez;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $rds = Rendez::all();
        $events = Event::all();
        return view('admin.event.dashboard.index',['rds'=>$rds,'events'=>$events]);
    }
    
    public function index_stock(){
        return view('admin.event.dashboard.s');
    }

    public function index_profiles(){
        $users = User::all();
        return view('admin.event.dashboard.profiles',['users'=>$users]);
    }
    public function index_users(){
        $users = User::all();
        return view('admin.event.dashboard.users',['users'=>$users]);
    }
    public function profil_form(){
        return view('profileDonneur.informationPersonnel.create');
    }
    public function profil_store(Request $request)
    {
        $request->validate([ 'nom'=>'required  ']);
        $request->validate([ 'prenom'=>'required  ']);
        $request->validate(['cin'=>'required ']);
        $request->validate([ 'dtn'=>'required ']);
       $request->validate([ 'user_id'=>'required ']);
        $request->validate([ 'tel'=>'required ']);
        $request->validate([ 'ville'=>'required ']);
        $request->validate([ 'type_sang'=>'required ']);

        $profile = new Profile();

        $profile->nom = $request->input('nom');
        $profile->prenom = $request->input('prenom');
        $profile->cin = $request->input('cin');
        $profile->dtn = $request->input('dtn');
        $profile->tel = $request->input('tel');
        $profile->ville = $request->input('ville');
        $profile->type_sang = $request->input('type_sang');
        $profile->user_id = $request->input('user_id');;

        $profile->save();
        $request->session()->flash('status','le profil est bien enregistrer');
        return redirect('/admin/users');
        


    }
}
