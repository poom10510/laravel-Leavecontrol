<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Leavetype;

use Illuminate\Support\Facades\Input;

class LeavetypeController extends Controller
{
    //
    public function index()
    {
        $database = new Leavetype();
        $leaves = $database -> getdata();
        //compact('users') ['users' => $users]
        return view('leavetype.index', ['leaves' => $leaves]);
    }
    public function insert_view(){
        return view('leavetype.person_create');
    }
    public function insert(Request $request)
    {
        // var_dump($request);
        $database = new Leavetype();
        $data = array('name' => $request->input('p_name'),
                 );
        # code...
         
        $database -> insertdata($data);
        $users = $database -> getdata();
        //return view('person.index', ['users' => $users]);
        return redirect('leavetype');
    }
    public function destroy($id)
    {
        # code...
        $database = new Leavetype();
        $database -> deletedata($id);
        return redirect('leavetype');
    }

    public function edit(Request $request,$id) {
        $database = new Leavetype();
        $data = array('name' => $request->input('p_name'),
                'id' => $id );
        $database -> updatedata($data);
        return redirect('leavetype');
     }
     
     public function update_view($id){
        $database = new Leavetype();
        //$id = Input::get('id') ;
        //var_dump($id);
        $leaves = $database -> finddata($id);
        //var_dump($users[0]);
        return view('leavetype.person_edit', ['article' => $leaves[0]]);
    }
}
