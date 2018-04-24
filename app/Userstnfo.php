<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Userstnfo extends Model
{
    protected $tablename = 'users_info';
    //
    public function getdata(){
        $table = $this->tablename;
        $users = DB::select("select * from $table");
        return $users;
    }

    public function insertdata($data)
    {
        $table = $this->tablename;
        $name = $data['name'];
        $surename = $data['surename'];
        $picture = null;
        $address = $data['address'];
        $email = $data['email'];
        
        $time = Carbon::now();
        # code...
        DB::insert("insert into $table ( role_id, name, surename, picture, address, email,contact, created_at) values (?, ?, ?, ?, ?, ?, ?, ?)", [1, $name, $surename, $picture, $address, $email, $email, $time]);
    }
    public function deletedata($id){
        $table = $this->tablename;
        DB::delete("delete from $table where id = ?",[$id]);
    }
    public function updatedata($data){
        $table = $this->tablename;
        $id = $data['id'];
        $name = $data['name'];
        $surename = $data['surename'];
        $picture = null;
        $address = $data['address'];
        $email = $data['email'];
        $time = Carbon::now();
        DB::update("update $table set name = ?, surename = ?, address = ?, email = ?, updated_at = ?   where id = ?",[$name,$surename,$address,$email,$time,$id]);
    }

    public function finddata($id){
        $table = $this->tablename;
        $users = DB::select("select * from $table where id = ?", [$id]);
        return $users;
    }

    public function getlastindex(){
        $table = $this->tablename;
        return DB::table($table)->orderBy('id', 'desc')->first();
    }
}
