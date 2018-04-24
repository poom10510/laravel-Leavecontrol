<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

use App\Loginlist;
use App\Userstnfo;

use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    //
    public function index()
    {
        $database = new Loginlist();
        $logins = $database -> getdata();
        //compact('users') ['users' => $users]
        return view('login.index', ['logins' => $logins]);
    }
    public function insert_view(){
        $value = session('loginkey');
        session(['loginkey' => null]);
        return view('login.person_create', ['texterror' => $value]);
    }
    public function insert(LoginRequest $request)
    {
        // var_dump($request);
        $database = new Loginlist();
        $user = new Userstnfo();

        $username = $request->input('p_username');
        $password = $request->input('p_password');
        $conpassword = $request->input('p_conpassword');
        $userid = $request->input('p_userid'); 

        $usname = $database -> findusernamedata($username);
        if(!empty($usname)){
            // $errorlog = array('error'=> 'error user username is used.');
            // return view('login.person_create', ['texterror' => $errorlog]);
            session(['loginkey' => array('error'=> 'error username '.$username.' is used.')]);
            return redirect('/userslogin/insert');
        }
        $users = $database -> finduserdata($userid);
        if(!empty($users)){
            // $errorlog = array('error'=> 'error user id is used.');
            // return view('login.person_create', ['texterror' => $errorlog]);
            session(['loginkey' => array('error'=> 'error user id is used.')]);
            return redirect('/userslogin/insert');
        }
        $user = $database -> finddata($userid);
        if(empty($users)){
            // $errorlog = array('error'=> 'error user id is not exist.');
            // return view('login.person_create', ['texterror' => $errorlog]);
            session(['loginkey' => array('error'=> 'error user id is not exist.')]);
            return redirect('/userslogin/insert');
        }

        if($password != $conpassword){
            // $errorlog = array('error'=> 'error password not match.');
            // return view('login.person_create', ['texterror' => $errorlog]);
            session(['loginkey' => array('error'=> 'error password not match.')]);
            return redirect('/userslogin/insert');
        }
        
        $data = array('username' => $request->input('p_username'),
                'password' => $password,
                'userid' => $userid);
        # code...
         
        $database -> insertdata($data);
        $users = $database -> getdata();
        //return view('person.index', ['users' => $users]);
        return redirect('userslogin');
    }
    public function destroy($id)
    {
        # code...
        $database = new Loginlist();
        $database -> deletedata($id);
        return redirect('userslogin');
    }

    public function edit(Request $request,$id) {
        $database = new Loginlist();

        $password = $request->input('p_password');
        $conpassword = $request->input('p_conpassword');
        $userid = $request->input('p_userid'); 

        $users = $database -> finduserdata($userid);

        if($password != $conpassword){
            $errorlog = array('error'=> 'error password not match.');
            return view('login.person_create', ['texterror' => $errorlog]);
        }
        
        $data = array('username' => $request->input('p_username'),
        'password' => $request->input('p_password'),
        'userid' => $request->input('p_userid'),
                'id' => $id );
        $database -> updatedata($data);
        return redirect('userslogin');
     }
     
     public function update_view($id){
        $database = new Loginlist();
        //$id = Input::get('id') ;
        //var_dump($id);
        $logins = $database -> finddata($id);
        //var_dump($users[0]);
        return view('login.person_edit', ['article' => $logins[0]]);
    }
}
