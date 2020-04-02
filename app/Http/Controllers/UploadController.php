<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\storage;
use App\model\admin\Product;
use Illuminate\Http\Reprot;
use App\model\admin\Productsimage;
class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload_form');
    }

    public function uploadSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->hasfile('image'))
        {

        foreach($request->file('image') as $image)
        {
        $name=$image->getClientOriginalName();
        $image->move(public_path().'/img/', $name);
        $data[] = $name;
        }
        }

        $form= new Productsimage();
        $form->insert([
            'product_id' => $request->input('name'),
        ]);
        $form->image=json_encode($data);
        $form->save();

    return back()->with('success', 'Your images has been successfully');
}
}

