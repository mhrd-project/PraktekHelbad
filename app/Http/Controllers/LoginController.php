<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $model = User::where('username', $username);

        if($model->first()){
            $model = $model->where('password', $password)->first();

            if($model){
                echo "berhasil login";
            }
            else{
                echo "password salah";
            }
        }else{
            echo "username salah";
        }
    }
}