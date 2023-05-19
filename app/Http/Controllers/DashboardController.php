<?php

namespace App\Http\Controllers;

use App\Models\Requestes;
use App\Models\RequestVerif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        if(auth()->user()->name != "iniadmingantengsekali270703"){
            return redirect('/');
        }
        $data = RequestVerif::all();
        // dd($data);
        $title = 'Dashboard';
        return view('dashboard.dashboard', compact('data','title'));
    }

    public function accept( RequestVerif $requestverif){
        $requestverif->status = 'accepted';
        $requestverif->save();
        return redirect('/dashboard');
    }
    public function reject(RequestVerif $requestverif){
        $requestverif->status = 'rejected';
        $requestverif->save();
         return redirect('/dashboard');
        
    }
}
