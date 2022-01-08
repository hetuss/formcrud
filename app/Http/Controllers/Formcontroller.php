<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class Formcontroller extends Controller
{
    public function views()
    {
        return view('form');
    }
     public function inserts(Request $request)
   {
         $ins = new Form();

         $ins->username=$request->input('name'); 
         $ins->password=$request->input('password');
         $ins->address=$request->input('address');
         $ins->gender=$request->input('rbt1');
         // $ins->hobby=impload(',',$_POST['hby']);
         // $ins->hobby=$request->input('hby');
         $arrayTostring =  implode(",", $request->input('hby'));
         $ins['hobby'] = $arrayTostring;

         $ins->city=$request->input('citynm');
       // ..............for image................
       if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $ins->image = $imageName;
        }
        else
        {
            return $request;
            $product->image = '';
        }
        //............. image over..............
        $ins->save();

        return redirect()->route("admin.product");
         
         // $ins->save();
       
         return view('form');
   }
    public function show()
    {
        $product= Form::all();
        return view('show',compact('product'));
    }

    public function editproducts(Request $request ,$id)
    {
        
        $products=Form::where('id',$id)->first();
        return view('editform',compact('products'));
    }
    
    public function update(Request $request)
    { 
        
         $product =Form::find($request->id);
         $product->username =$request->input('name');
         $product->password =$request->input('password');
         $product->address =$request->input('address');
         $product->gender =$request->input('rbt1');
         $product->hobby =$request->input('hby');
         $product->city=$request->input('citynm');

        
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $product->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'username'=>$request->name,
           'password'=>$request->password,
           'address'=>$request->address,
           'gender'=>$request->gender,
           'hobby'=>$request->hobby,
           'city'=>$request->citynm,
           'image'=>$request->image,
           
     ];
    
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

       Form::where('id', $id)->update($update);
        return redirect()->route('admin.product');


            return $request;
            $product->image = '';
        }
        $product->save();
        return redirect()->route('admin.product');

    }
     public function delete_product($id)
    {
        Form::where('id',$id)->delete();
        return redirect()->route('admin.product');
    }

} 
?>
