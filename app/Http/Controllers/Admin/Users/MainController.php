<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        return view('TrangChu',[
            'title'=>'HappyImage'
        ]);
    }
    public function users(){
        return view('BangTinCaNhan');
    }
    public function GhimAnh(){
        return view('GhimAnh');
    }
    public function GhimAnh1(){
        return view('GhimAnh1');
    }
    public function ImgDetail($id){
        $sql = DB::table('image')->where("id", $id)->get();
        // dd($sql);
        return view('GhimAnh1')->with("image",$sql[0]);

    }
}
