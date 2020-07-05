<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
    	$artikels = ItemModel::get_all();
    	return view('artikel.index', compact('artikels'));
    }

    public function create(){
    	return view('artikel.form');
    }

    public function store(Request $request){
    	// return view('item.form');

    	$new_item = ItemModel::save($request->all());
    	return redirect('/artikel');
    }
}
