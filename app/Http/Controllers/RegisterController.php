<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

use App\Loginlist;
use App\Userstnfo;

use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    //
    public function index()
    {
        //$users = DB::select('select * from persons');
        //compact('users') ['users' => $users]
        $value = session('regiskey');
        session(['regiskey' => null]);
        return view('register.index', ['texterror' => $value]);
    }

    public function insert(RegisterRequest $request)
    {
        session(['regiskey' => null]);
        // var_dump($request);
        $database = new Loginlist();
        $user = new Userstnfo();

        $username = $request->input('p_username');
        $password = $request->input('p_password');
        $conpassword = $request->input('p_conpassword');
        //$userid = $request->input('p_userid'); 

        $usname = $database -> findusernamedata($username);
        if(!empty($usname)){
            // $errorlog = array('error'=> 'error user username is used.');
            // return view('register.index', ['texterror' => $errorlog]);
            session(['regiskey' => array('error'=> 'error username '.$username.' is used.')]);
            return redirect('register');

        }
        // $users = $database -> finduserdata($userid);
        // if(!empty($users)){
        //     // $errorlog = array('error'=> 'error user id is used.');
        //     // return view('register.index', ['texterror' => $errorlog]);
        //     session(['regiskey' => array('error'=> 'error user id is used.')]);
        //     return redirect('register');
        // }
        // $users = $user -> finddata($userid);
        // if(empty($users)){
        //     $errorlog = array('error'=> 'error user id is not exist.');
        //     return view('register.index', ['texterror' => $errorlog]);
        // }
            //
            $name = $request->input('p_name');
            $surename = $request->input('p_surename');
            $address = $request->input('p_address');
            $email = $request->input('p_email');
            $data = array('name' => $name,
                    'surename' => $surename,
                    'address' => $address,
                    'email' => $email );
            # code...
             
            $user -> insertdata($data);
            $userid = $user -> getlastindex();

        //
        if($password != $conpassword){
            $errorlog = array('error'=> 'error password not match.');
            return view('register.index', ['texterror' => $errorlog]);
        }
        
        $data = array('username' => $request->input('p_username'),
                'password' => $password,
                'userid' => $userid->id);
        # code...
         
        $database -> insertdata($data);
        $users = $database -> getdata();
        //return view('person.index', ['users' => $users]);
        return redirect('userslogin');
    }
}
