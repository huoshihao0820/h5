<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonModel;
class TestController extends Controller
{
    public function register(Request $request){
        if ($request->isMethod('post')){
            $data=$_POST;
            $url='http://passport.com/test/register';
            $response=CommonModel::curl2($url,$data);
            dd(1);
            $response=json_decode($request)->toArray();
             if ($request['code']==200){
                 return view('/login');
             }
        }
        return view('/register');
    }
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $data=$_POST;
            $url='http://passport.com/test/login';
            $response=CommonModel::curl2($url,$data);
            return $response;
        }
            return view('/login');
    }
    public function login2(){
        return view('/login2');
    }
    public function login3(){
        return view('/login3');
    }

}
