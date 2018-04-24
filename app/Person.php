<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;


class Person //extends Model
{
    protected $fillable = ['name','address', 'created_at']; 
    
    public function get(){
        $users = DB::select('select * from persons');
        return $users;
    }
    public function insert($data)
    {
        $name = $data['name'];
        $address = $data['address'];
        $time = Carbon::now();
        # code...
        DB::insert('insert into persons ( name, address, created_at) values (?, ?, ?)', [$name, $address, $time]);
    }
    public function delete($id){
        DB::delete('delete from persons where id = ?',[$id]);
    }
    public function update($data){
        $id = $data['id'];
        $name = $data['name'];
        $address = $data['address'];
        $time = Carbon::now();
        DB::update('update persons set name = ?, address = ?, updated_at = ?   where id = ?',[$name,$address,$time,$id]);
    }

    public function find($id){
        $users = DB::select('select * from persons where id = ?', [$id]);
        return $users;
    }


}
?>