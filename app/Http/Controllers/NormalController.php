<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NormalController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('ppl')) return $next($request);
            abort(403,'anda admin');
        });
    } 
    
    public function index()
    {
        $title="Normies";
        $barang=Barang::paginate(5);
        return view('Layout.ppl',compact('title','normies'));

        //

    }
}
