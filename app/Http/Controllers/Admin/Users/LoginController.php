<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\c;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function demo(){
         return view('demo');
     }
     public function blog(){
         return view('GioiThieu');
     }
     public function about(){
        return view('BatDau');
    }
    public function help(){
        return view('TroGiup');
    }
    public function index()
    {
        return view('DangNhap', [
            'title'=> "Đăng Nhập"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
        $this->validate($request, [
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);
        $credentials=['email' => $request->input('email'),'password'=>$request->input('password')];
        if (Auth::attempt($credentials)) {
            // $request->session()->flash('success','Ban da dang nhap thanh cong');
            $sql = DB::table('users')->where('email',$request->input('email'))->get();
            session(['users'=>$sql[0]]);
            return redirect()-> route('main');
        }
        // session()->flash('error', 'email hoac mat khau khong dung');
        // $request->session()->flash('error', 'Email hoac mat khau khong dung!');
        $request->Session()->flash('err', 'Email hoặc Password bạn nhập chưa đúng');
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function signup( Request $request){
        return view('DangKy');
    }
    public function processSignup(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);
        $check = DB::table('users')->where("email",$request->input("email"))->get();
        // echo count($check);
        // dd($check);
        if(count($check)!=0){
            $request->Session()->flash('err','Email đã tồn tại');
            return redirect()->back();

        }
        $process=['name'=>$request->input("name"),'email'=>$request->input("email"),'password'=> bcrypt($request->input("password"))];
        $sql=DB::table('users')->insert($process);
        // dd($sql);
        if($sql){
            return redirect()->route('DangNhap');
        }else
            return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
