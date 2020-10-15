<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use \App\Models\Produk;
use Illuminate\Http\Request;
// use Datatables;
use Yajra\DataTables\DataTables;

class ColController extends Controller{
    public function index(){
        return view('index');
    }
    public function profile(){
        
        return view('other.profile');
        
    }

    public function api(){
          $produks = Produk::orderBy('updated_at','desc');
        return DataTables::of($produks)
        ->editColumn('nama',function($produks){
            return $produks->nama;
        })
        ->rawColumns(['nama'])
        ->addIndexColumn()
            ->toJson();
    } 

    public function about(){
        return view('other.about');
    }
}