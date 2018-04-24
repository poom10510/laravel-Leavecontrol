<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Roletype extends Model
{
    protected $tablename = 'roles_type';
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
        $name = $data['name'];
        $time = Carbon::now();
        # code...
        DB::insert("insert into $table ( name, created_at) values (?, ?)", [ $name, $time]);
    }
    public function deletedata($id){
        $table = $this->tablename;
        DB::delete("delete from $table where id = ?",[$id]);
    }
    public function finddata($id){
        $table = $this->tablename;
        $users = DB::select("select * from $table where id = ?", [$id]);
        return $users;
    }
    public function updatedata($data){
        $table = $this->tablename;
        $id = $data['id'];
        //
        $name = $data['name'];

        $time = Carbon::now();
        DB::update("update $table set name = ?,  updated_at = ?   where id = ?",[ $name, $time, $id]);
    }
}
