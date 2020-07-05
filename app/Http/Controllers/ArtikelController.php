<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
    	$artikels = ArtikelModel::get_all();
    	return view('artikel.data', compact('artikels'));
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

    public function show($id){
    	$show_item = ArtikelModel::find_by_id($id);
    	return view('artikel.show', compact('show_item'));
    }

    public function edit($id){
    	$show_item = ArtikelModel::find_by_id($id);
    	return view('artikel.edit', compact('show_item'));
    }

    public function update($id, Request $request){
    	$deleted = ArtikelModel::update($id, $request->all());
    	return redirect('/artikel');
    }

    public function destroy($id){
    	$deleted = ArtikelModel::destroy($id);
    	return redirect('/artikel');
    }

}
