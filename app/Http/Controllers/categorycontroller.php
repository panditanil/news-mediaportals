<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categorycontroller extends Controller
{
    public function categorydata(Request $request){
        $data = [
            'name' =>$request->catename,
            'status' => $request->status,
       ];
       
       category::insert($data);
    }

    public function displayData(){
        $data= category::all();
         return view('backend.category.display',compact('data'));
     }

     public function edit($id)
       {
        if(!$id){
            return redirect()->back();
        }
        $cat_data= category::find($id);
       if($cat_data){
        return view('backend.category.edit',compact('cat_data'));
       }
       return redirect()->back();
       }


       public function update(Request $request,$id)
       {
        if(!$id){
            return redirect()->back();
        }
        $cat_data= category::find($id);
       if($cat_data){
        $data=[
            'name' =>$request->catename,
            'status' => $request->status,
        ];
       $cat_data->update($data);
      return redirect()->route('admin.display');
        
       }
       return redirect()->back();
       

    }

}
