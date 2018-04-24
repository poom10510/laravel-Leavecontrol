<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Person;

use Illuminate\Support\Facades\Input;

class Person_controller extends Controller
{
    //
    public function index()
    {
        //$users = DB::select('select * from persons');
        $person = new Person();
        $users = $person -> get();

        return view('person.index', ['users' => $users]);
    }
    public function insert_view(){
        return view('person.person_create');
    }
    public function insert(Request $request)
    {
        // var_dump($request);
        $person = new Person();
        $name = $request->input('p_name');
        $address = $request->input('p_address');
        $data = array('name' => $name,'address' => $address );
        # code...
         
        $person -> insert($data);
        $users = $person -> get();
        //return view('person.index', ['users' => $users]);
        return redirect('user');
    }
    public function destroy($id)
    {
        # code...
        $person = new Person();
        $person -> delete($id);
        return redirect('user');
    }

    public function edit(Request $request,$id) {
        $person = new Person();
        $name = $request->input('p_name');
        $address = $request->input('p_address');
        $data = array('name' => $name,'address' => $address, 'id' => $id );
        $person -> update($data);
        return redirect('user');
     }
     
     public function update_view($id){
        $person = new Person();
        //$id = Input::get('id') ;
        //var_dump($id);
        $users = $person -> find($id);
        //var_dump($users[0]);
        return view('person.person_edit', ['article' => $users[0]]);
    }
    

}
