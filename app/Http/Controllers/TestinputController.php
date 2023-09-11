<?php

namespace App\Http\Controllers;
use App\Models\item;
use Illuminate\Http\Request;

class TestinputController extends Controller
{
    function index(){
        Item::create([
            'name'=> 'Arduino uno',
            'type'=> 'habis pakai',
            'condition'=> 'bagus',
            'quantity'=>100
        ]);
    }

    function test_input(Request$request){
        Item ::create([
            'name'=>$request->input('name'),
            'type'=>$request->input('type'),
            'condition'=>$request->input('condition'),
            'quantity'=>$request->input('quantity'),
        ]);
        echo 'sukses';
    }

    function form(){
        return view('test_form');
    }

    function table(){
        $data = Item::all();
        // $data = Item::where('condition','bagus')->where('quantity','<>',50)->orderby('name')->get();
        // dd($data);
        return view('testing_table',compact('data'));
    }
}
