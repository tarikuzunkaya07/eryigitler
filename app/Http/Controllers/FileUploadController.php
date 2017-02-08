<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
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
    	if ($request->hasFile('img'))
    	{
    		$fileName = "denemem" . "." . $request->file('img')->getClientOriginalExtension();; 
    		$request->file('img')->move('img/products', $fileName);
    	}
    }
}
