<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoryStoreController extends Controller
{
    /**
     * Show the category creation form.
     */
    public function index()
    {
        $data = categories::all();
        // echo"<pre>";
        // print_r($data);
        // foreach ($data as $value) {
        //     print_r($value->category_code);
        //     echo "<br>";
        // }
        return view('category', compact('data'));
    }

    /**
     * Store a new category in the database.
     */
    public function store(Request $req)
    {
        $request = $req->all();
        $categories = new categories();
        $categories->create($request);
    }

    function delete(Request $req ){
        $id = $req->id;
        $data = categories::where('id',$id)->first();
        $data->isShow ? $data->isShow = 0 : $data->isShow = 1;
        $data->save();
    }
}

