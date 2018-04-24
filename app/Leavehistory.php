<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Leavehistory extends Model
{
    protected $tablename = 'leave_history';
    //
    public function getdata(){
        $table = $this->tablename;
        $users = DB::select("select * from $table");
        return $users;
    }

    public function insertdata($data)
    {
        $table = $this->tablename;
        //
        $taskid = $data['taskid'];
        $status = $data['status'];
        $typeid = $data['typeid'];
        $userid = $data['userid'];
        $time = Carbon::now();
        # code...
        DB::insert("insert into $table (task_id, user_id, status, type_id, created_at) values (?, ?, ?, ?, ?)", [ $taskid, $userid, $status, $typeid, $time]);
    }
    public function deletedata($id){
        $table = $this->tablename;
        DB::delete("delete from $table where id = ?",[$id]);
    }
    public function updatedata($data){
        $table = $this->tablename;

        $id = $data['id'];
        //
        $taskid = $data['taskid'];
        $status = $data['status'];
        $typeid = $data['typeid'];
        $userid = $data['userid'];

        $time = Carbon::now();
        DB::update("update $table set task_id = ?, user_id = ?, status = ?, type_id = ?, updated_at = ?   where id = ?",[$taskid, $userid, $status, $typeid, $time, $id]);
    }

    public function approvedata($data){
        $table = $this->tablename;

        $id = $data['id'];
        //
        $approver_id = $data['approverid'];
        $status = $data['status'];
        $time = Carbon::now();
        DB::update("update $table set status = ?, approver_id = ?, updated_at = ?   where id = ?",[$status,$approver_id,$time,$id]);
    }

    public function finddata($id){
        $table = $this->tablename;
        $users = DB::select("select * from $table where id = ?", [$id]);
        return $users;
    }
}
