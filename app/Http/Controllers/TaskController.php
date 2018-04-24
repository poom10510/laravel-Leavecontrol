<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

use App\Task;

use Illuminate\Support\Facades\Input;

class TaskController extends Controller
{
    //
    public function index()
    {

       
        $task = new Task();
        $tasks = $task -> getdata();
        //compact('users') ['users' => $users]
        return view('task.index', ['tasks' => $tasks]);
    }
    public function insert_view(){
        return view('task.person_create');
    }
    public function insert(TaskRequest $request)
    {
        // var_dump($request);
        $task = new Task();
        $data = array('responsibility' => $request->input('p_responsibility'),
                'substituteid' => $request->input('p_substituteid'),
                'period' => $request->input('p_period'),
                'userid' => $request->input('p_userid') );
        # code...
         
        $task -> insertdata($data);
        $users = $task -> getdata();
        //return view('person.index', ['users' => $users]);
        return redirect('tasks');
    }
    public function destroy($id)
    {
        # code...
        $task = new Task();
        $task -> deletedata($id);
        return redirect('tasks');
    }

    public function edit(TaskRequest $request,$id) {
        $task = new Task();
        $data = array('responsibility' => $request->input('p_responsibility'),
                'substituteid' => $request->input('p_substituteid'),
                'period' => $request->input('p_period'),
                'userid' => $request->input('p_userid'),
                'id' => $id );
        $task -> updatedata($data);
        return redirect('tasks');
     }
     
     public function update_view($id){
        $task = new Task();
        //$id = Input::get('id') ;
        //var_dump($id);
        $tasks = $task -> finddata($id);
        //var_dump($users[0]);
        return view('task.person_edit', ['article' => $tasks[0]]);
    }
}
