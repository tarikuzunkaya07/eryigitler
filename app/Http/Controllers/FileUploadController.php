<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use App\Picture;
use App\Product;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('backend.urunler');
    }

    public function store(Request $request)		
    {
    	$picture = new Picture();
    	$product = new Product();
    	try{
	    	if ($request->hasFile('img'))
	    	{ 
	    		$fileName = $request->name . "-" . Str::random(6) . "." . $request->file('img')->getClientOriginalExtension();
	    		$picture->url = $fileName;
	    		if($picture->save())
	    		{
	    			$request->file('img')->move('img/products', $fileName);
	    		}
	    		$product->name = $request->name;
	    		$product->description = $request->description;
	    		$product->pic_id = Picture::whereUrl($fileName)->first()->id;
	    		if ($product->save()) {
					return redirect()->back()->with('success', 'Kayıt Eklendi');
	    		}
	    	} 
			return redirect()->back();
    	}
    	catch(\Exception $e){
    	    return redirect()->back()->with('msg', ' Sorry something went worng. Please try again.');
    	}
    	

    }
}
