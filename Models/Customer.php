<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    public function index(){
        //lay du lieu
        $Customers =DB::table('customers')->get();
        //trar ve du lieu
        return $Customers;
    }
    public function store(){
        DB::table('customers')
            ->insert([
                'name'=>$this->name,
                'password'=>$this->password,
                'email'=>$this->email,
                'phone'=>$this->phone
            ]);
    }
    public function eidt(){
        $Customer =DB::table('customers')->where('id', $this->id)
            ->get();
        //tra ve du lieu
        return $Customer;
    }
    public function updateCustomer(){
        //query update
        DB::table('customers')
            ->where('id',$this->id)
            ->update([
                'name'=>$this->name,
                'password'=>$this->password,
                'email'=>$this->email,
                'phone'=>$this->phone

            ]);
    }
    public function destroyCustomer(){
        DB::table('customers')
            ->where('id', $this->id)
            ->delete();
    }
}
