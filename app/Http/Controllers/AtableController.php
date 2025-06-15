<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atable;
use App\Models\Table_kind;

class AtableController extends Controller
{
    public function index(){
        $atable = Atable::orderBy('created_at', 'desc')->paginate(20);
        
        return view('marketplaces.marketplace',["table"=> $atable]);
    }
    public function create(){
        $kinds = Table_kind::all();
        return view('marketplaces.create',['kinds'=> $kinds]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'seller_id'=> 'required',
            'table_kind_id'=> 'required|exists:table_kinds,id', 
            'name'=> 'required',
            'price'=> 'numeric|min:0',
            'description'=> 'max:500',
                
        ]);

        Atable::create($validated);
        return redirect('/marketplace');

    }
    public function show($id){
        $atable = Atable::findOrFail($id);
        return view('marketplaces.product',["table"=> $atable]);
    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }
    public function destroy($id){
        $table = Atable::findOrFail($id);
        $table->delete();
        return redirect("/marketplace");
    }


}
