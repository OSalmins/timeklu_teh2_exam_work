<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atable;
use App\Models\User;
use App\Models\Table_kind;
use Illuminate\Support\Facades\Auth;

class AtableController extends Controller
{
    public function index(){
        $atable = Atable::orderBy('created_at', 'desc')->paginate(20);
        
        return view('marketplaces.marketplace',["table"=> $atable]);
    }
    public function mylistings(){
        $user = Auth::user();
        $mylistings = Atable::where('seller_id', $user->id)->get();
        return view('marketplaces.mylistings', ['mylistings'=>$mylistings]);
    }
    public function mylisting($id){

        $atable = Atable::FindOrFail($id);
        $user = Auth::user();
        if($user->id==$atable->seller_id){
            
            return view('marketplaces.mylisting', ['atable'=>$atable]);
        }
        else{
            return redirect('/');
        }
        
    }

    
    public function create(){
        $user_id = Auth::user()->id;
        $kinds = Table_kind::all();
        return view('marketplaces.create',['kinds'=> $kinds,'seller_id'=> $user_id]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'seller_id'=> 'required',
            'table_kind_id'=> 'required|exists:table_kinds,id', 
            'name'=> 'required',
            'price'=> 'numeric|min:0',
            'description'=> 'required|max:500',
            'image'=> 'nullable|image|mimes:jpg,jpeg,png,gif',
                
        ]);
        $image_path = null;
        if($request->hasFile('image')){
            $image_path = $request->file('image')->store('images', 'public');
        }


        Atable::create([
            'seller_id'=> $validated['seller_id'],
            'table_kind_id'=> $validated['table_kind_id'],
            'name'=> $validated ['name'],
            'price'=> $validated ['price'],
            'description'=> $validated ['description'],
            'image_path' =>$image_path,
        ]);
        
        return redirect('/marketplace');

    }
    public function show($id){
        $atable = Atable::findOrFail($id);
        $seller = User::find($atable->seller_id);
        return view('marketplaces.product',["table"=> $atable, "seller"=> $seller]);   
    }

    public function edit($atable){
        
        $user_id = Auth::user()->id;
        $kinds = Table_kind::all();
        $table = Atable::find($atable);
        if($user_id==$table->seller_id){    
            return view('marketplaces.update',[
            'kinds'=> $kinds,
            'seller_id'=> $user_id,
            'table'=> $table
        ]);
        }
        else{
            return redirect('/')->with('error','Access denied');
        }       
    }
    
    
    public function update(Request $request,Atable $atable){
        
        $validated = $request->validate([
            'seller_id'=> 'required',
            'table_kind_id'=> 'required|exists:table_kinds,id', 
            'name'=> 'required',
            'price'=> 'numeric|min:0',
            'description'=> 'required|max:500',      
        ]);
        $atable->update($validated);
        return redirect()->route('marketplace.mylistings');
    }
    
    
    public function destroy($id){
        $table = Atable::findOrFail($id);
        $table->delete();
        return redirect("/marketplace");
    }


}
