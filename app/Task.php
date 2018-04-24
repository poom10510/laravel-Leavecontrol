<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Task extends Model
{
    protected $tablename = 'tasks';
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
        $responsibility = $data['responsibility'];
        $substitute = $data['substituteid'];
        $period = $data['period'];
        $userid = $data['userid'];
        $time = Carbon::now();
        # code...
        DB::insert("insert into $table (responsibility, period, substitute_id, user_id, created_at) values (?, ?, ?, ?, ?)", [ $responsibility, $period, $substitute, $userid, $time]);
    }
    public function deletedata($id){
        $table = $this->tablename;
        DB::delete("delete from $table where id = ?",[$id]);
    }
    public function updatedata($data){
        $table = $this->tablename;
        $id = $data['id'];
        //
        $responsibility = $data['responsibility'];
        $substitute = $data['substituteid'];
        $period = $data['period'];
        $userid = $data['userid'];
        $time = Carbon::now();
        DB::update("update $table set responsibility = ?, period = ?, substitute_id = ?, user_id = ?, updated_at = ?   where id = ?",[ $responsibility, $period, $substitute, $userid, $time, $id]);
    }
    public function finddata($id){
        $table = $this->tablename;
        $users = DB::select("select * from $table where id = ?", [$id]);
        return $users;
    }
}
