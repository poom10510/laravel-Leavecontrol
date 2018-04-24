<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Userstnfo;
use App\Task;
use App\Roletype;
use App\Leavetype;
use App\Leavehistory;
use App\Loginlist;

use Illuminate\Support\Facades\Input;

class Admincontroller extends Controller
{
    //
    public function index()
    {
        //$users = DB::select('select * from persons');
        $person = new Userstnfo();
        $users = $person -> getdata();

        $task = new Task();
        $tasks = $task -> getdata();

        $role = new Roletype();
        $roles = $role -> getdata();

        $leave = new Leavetype();
        $leaves = $leave -> getdata();

        $leavehistory = new Leavehistory();
        $leavehistories = $leavehistory -> getdata();

        $login = new Loginlist();
        $logins = $login -> getdata();



        //compact('users') ['users' => $users]
        return view('admin.index', ['users' => $users, 'tasks' => $tasks, 'roles' => $roles, 'leaves' => $leaves, 'logins' => $logins, 'leavehistories' => $leavehistories ]);
    }
}
