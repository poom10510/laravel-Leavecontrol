<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Roletype;

use Illuminate\Support\Facades\Input;

class RoletypeController extends Controller
{
    //
    public function index()
    {
        $database = new Roletype();
        $roles = $database -> getdata();
        //compact('users') ['users' => $users]
        return view('roletype.index', ['roles' => $roles]);
    }
    public function insert_view(){
        return view('roletype.person_create');
    }
    public function insert(Request $request)
    {
        // var_dump($request);
        $database = new Roletype();
        $data = array('name' => $request->input('p_name'),
                 );
        # code...
         
        $database -> insertdata($data);
        $users = $database -> getdata();
        //return view('person.index', ['users' => $users]);
        return redirect('roletype');
    }
    public function destroy($id)
    {
        # code...
        $database = new Roletype();
        $database -> deletedata($id);
        return redirect('roletype');
    }

    public function edit(Request $request,$id) {
        $database = new Roletype();
        $data = array('name' => $request->input('p_name'),
                'id' => $id );
        $database -> updatedata($data);
        return redirect('roletype');
     }
     
     public function update_view($id){
        $database = new Roletype();
        //$id = Input::get('id') ;
        //var_dump($id);
        $roles = $database -> finddata($id);
        //var_dump($users[0]);
        return view('roletype.person_edit', ['article' => $roles[0]]);
    }
}
