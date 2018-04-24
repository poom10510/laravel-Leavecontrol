<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsetinfoRequest;

use App\Userstnfo;

use Illuminate\Support\Facades\Input;

class User_info_Controller extends Controller
{
    //
    public function index()
    {
        //$users = DB::select('select * from persons');
        $person = new Userstnfo();
        $users = $person -> getdata();
        //compact('users') ['users' => $users]
        return view('users.index', compact('users') );
    }
    public function insert_view(){
        return view('users.person_create');
    }
    public function insert(UsetinfoRequest $request)
    {
        // var_dump($request);
        $person = new Userstnfo();
        $name = $request->input('p_name');
        $surename = $request->input('p_surename');
        $address = $request->input('p_address');
        $email = $request->input('p_email');
        $data = array('name' => $name,
                'surename' => $surename,
                'address' => $address,
                'email' => $email );
        # code...
         
        $person -> insertdata($data);
        $users = $person -> getdata();
        //return view('person.index', ['users' => $users]);
        return redirect('userinfos');
    }
    public function destroy($id)
    {
        # code...
        $person = new Userstnfo();
        $person -> deletedata($id);
        return redirect('userinfos');
    }

    public function edit(Request $request,$id) {
        $person = new Userstnfo();
        $name = $request->input('p_name');
        $surename = $request->input('p_surename');
        $address = $request->input('p_address');
        $email = $request->input('p_email');
        $data = array('name' => $name,
                'surename' => $surename,
                'address' => $address,
                'email' => $email, 
        'id' => $id );
        $person -> updatedata($data);
        return redirect('userinfos');
     }
     
     public function update_view($id){
        $person = new Userstnfo();
        //$id = Input::get('id') ;
        //var_dump($id);
        $users = $person -> finddata($id);
        //var_dump($users[0]);
        return view('users.person_edit', ['article' => $users[0]]);
    }

    public function testlastindex()
    {
        # code...
        $person = new Userstnfo();
        $users = $person -> getlastindex();
        return 'Welcome to Page ' . $users->id;
    }
}
