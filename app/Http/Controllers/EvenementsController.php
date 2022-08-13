<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenements;
class EvenementsController extends Controller
{
    public function index(){
        $evenements=Evenements::all();
       // dd($produit);
        return view("evenements.index",["evenements"=>$evenements]);
    }
    public function create(){
        return view("evenements.create");
    }
    public function store(Request $request){
       $evenements=new Evenements();
       $evenements->nom=$request->input("nom");
       $evenements->date_demarrage=$request->input("dated");
       $evenements->date_fin=$request->input("datef");
       $evenements->description=$request->input("desc");
       $evenements->save();
       return redirect()->route("evenements.index");
    }
   
}
