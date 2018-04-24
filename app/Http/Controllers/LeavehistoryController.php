<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LeaveRequest;

use App\Leavehistory;

use Illuminate\Support\Facades\Input;

class LeavehistoryController extends Controller
{
    //
    public function index()
    {
        $database = new Leavehistory();
        $leavehistories = $database -> getdata();
        //compact('users') ['users' => $users]
        return view('leavehistory.index', ['leavehistories' => $leavehistories]);
    }
    public function insert_view(){
        return view('leavehistory.person_create');
    }
    public function insert(LeaveRequest $request)
    {
        // var_dump($request);
        $database = new Leavehistory();
        $data = array('taskid' => $request->input('p_taskid'),
                'status' => $request->input('p_status'),
                'typeid' => $request->input('p_typeid'),
                'userid' => $request->input('p_userid') );
        # code...
         
        $database -> insertdata($data);
        $users = $database -> getdata();
        //return view('person.index', ['users' => $users]);
        return redirect('leavehistory');
    }
    public function destroy($id)
    {
        # code...
        $database = new Leavehistory();
        $database -> deletedata($id);
        return redirect('leavehistory');
    }

    public function edit(LeaveRequest $request,$id) {
        $database = new Leavehistory();
        $data = array('taskid' => $request->input('p_taskid'),
        'status' => $request->input('p_status'),
        'typeid' => $request->input('p_typeid'),
        'userid' => $request->input('p_userid'),
                'id' => $id );
        $database -> updatedata($data);
        return redirect('leavehistory');
     }
     
     public function update_view($id){
        $database = new Leavehistory();
        //$id = Input::get('id') ;
        //var_dump($id);
        $histories = $database -> finddata($id);
        //var_dump($users[0]);
        return view('leavehistory.person_edit', ['article' => $histories[0]]);
    }
}
