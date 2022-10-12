<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    
    public $table= 'G19';

    public function add_users($users){
        // $b= connect();
        // if(strlen($users["name"])<4 ){
        //     $res="etelaat kamtar az 4 karakter ast ..!!";
        //     return $res;
        // }

        // $res="etelaat ba movafaghiat tamam shod .";
        
        // $a=$users['name'];
        // $aa=$users['pass'];
        // mysqli_query($b, "INSERT INTO `g19`(`name`, `pasword`) VALUES ('$a','$aa')");

        // return $res;







    }


    public function user(){
        $selDB=DB::table('G19')->whereRaw("`id`='2' OR`id`='4'")->get();
        return $selDB;
    }



    public function login_user($nam,$pas){
        setcookie('name',$nam);
        setcookie('password',$pas);
        return 1;
    }

}
