<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
}
