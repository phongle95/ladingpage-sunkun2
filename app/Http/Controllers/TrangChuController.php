<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Mail;
use Illuminate\Support\Facades\Session;

class TrangChuController extends Controller
{

    public function trangchu(){
        return view('trangchu.menu.master');
    }



     //trang chủ gởi email
     public function goiEmail(Request $request){

        $input = $request->all();
        Mail::send('mailfb',array('name'=>$input["name"],'sdt'=>$input["sdt"],'noiDung'=>$input["noiDung"]),function($message){
            $message->to('anthapkhop@gmail.com','Visitor')->subject('Sunkun2 - Khách Hàng Liên Hệ!');
        });
        return redirect()->route('trangchu.menu.master')->with('alert', 'Đặt Hàng Thành Công!');
    }


}
