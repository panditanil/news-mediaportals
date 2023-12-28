<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\system;

class systemcontroller extends Controller
{
    public function systemdata (Request $request){
   
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'address' => 'required',
        //     'slogan' => 'required',
        //     'logo' => 'required'
        // ]);
            
        try{

        
        $logo = '';
       
        if($request->has('logo') &&  $request->file('logo')){
            $setting  = system::find(1);
            if($setting && $setting->logo){
               
                 if(file_exists(public_path("/uploads/$setting->logo"))){
                    unlink(public_path("uploads/$setting->logo"));
                 }
            }
 
         $file  = $request->file('logo');
         $newName = time().'-'. rand(10,9999999999999).'-'.$file->getClientOriginalName();
         $newPath = public_path()."/uploads/";
         $file->move($newPath, $newName);
         $logo = $newName;
        }


        $data=[
            'name'=>$request->systemname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'slogan'=>$request->slogan,
            'logo'=>$request->logo,
        ];
       
        $status  = system::updateOrCreate(['id' => 1], $data);

        if($status){
         return redirect()->back()->with(['system' => $status]);
        }
      }catch(\Exception $e) {
        dd($e);
        return redirect()->back()->withInput();
      }

       }
}
