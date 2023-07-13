<?php

namespace App\Http\Controllers;

use App\Traits\Base;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class AuthController extends Controller
{
    use Base;

    //
    public function getUser(){
        try {
            $user = [
                'name'=> 'karima',
                'email'=> 'karima@gmail.com'
            ];
            return Base::success('User Details', $user);

        }
        catch (Exception $e) {
            return Base::exception('An error occured');

        }
    }



    //login
    public function login(Request $request){
        try {
            $data = $request->all();
            return Base::success('User Details', $data);

        }
        catch (Exception $e) {
            return Base::exception('An error occured');

        }

    }


}
