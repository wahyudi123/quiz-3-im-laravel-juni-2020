<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
    	$artikels = ArtikelModel::get_all();
    	return view('artikel.data');
    	// , compact('artikels')
    }

    public function create(){
    	return view('artikel.form');
    }

    public function store(Request $request){
    	// return view('item.form');

    	$new_item = ArtikelModel::save($request->all());
    	return redirect('/artikel');
    }
}
