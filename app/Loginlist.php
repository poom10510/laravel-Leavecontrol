<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Loginlist extends Model
{
    protected $tablename = 'user_login';
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
        $username = $data['username'];
        $password = $data['password'];
        $userid = $data['userid'];
        $time = Carbon::now();
        # code...
        DB::insert("insert into $table ( username, password, user_id, created_at) values (?, ?, ?, ?)", [ $username, $password, $userid, $time]);
    }
    public function deletedata($id){
        $table = $this->tablename;
        DB::delete("delete from $table where id = ?",[$id]);
    }
    public function updatedata($data){
        $table = $this->tablename;
        $id = $data['id'];
        //
        $username = $data['username'];
        $password = $data['password'];
        $userid = $data['userid'];
        $time = Carbon::now();
        DB::update("update $table set username = ?, password = ?, user_id = ?, updated_at = ?   where id = ?",[$username,$password,$userid,$time,$id]);
    }
    

    public function finddata($id){
        $table = $this->tablename;
        $users = DB::select("select * from $table where id = ?", [$id]);
        return $users;
    }

    public function checkdata($data){
        $table = $this->tablename;
        //
        $username = $data['username'];
        $password = $data['password'];
        $users = DB::select("select * from $table where username = ?, password = ?", [$username, $password]);
        return $users;
    }
    public function finduserdata($id){
        $table = $this->tablename;
        $users = DB::select("select * from $table where user_id = ?", [$id]);
        return $users;
    }
    public function findusernamedata($id){
        $table = $this->tablename;
        $users = DB::select("select * from $table where username = ?", [$id]);
        return $users;
    }
}
