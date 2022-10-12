<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    // public function test(){
    //     // echo"salam";
    //     $_POST{'in1'}
    //     if(isset()){

    //     }
        
    // }

    public function tt(){
        $a = a();
    }

    public function Habib(){
        // $b = conn();
        $b= connect();
        
        // mysqli_query($b, "INSERT INTO `g19`(`name`, `lastname`, `age`, `pasword`) VALUES ('aaa','bbb','111','ccc')");
    }

    // public function sabtnam(){
    //     $res = "";

    //     if(isset($_POST['subbb'])){
    //         // echo "aaadad404 !";
    //         // $b= connect();
            
    //         // mysqli_query($b, "INSERT INTO `g19`(`name`, `lastname`, `age`, `pasword`) VALUES ('aaa','bbb','111','ccc')");
           
    //         $user_data=[
    //             "name"=>$_POST['in1'],
    //             "pass"=>$_POST['in4']
    //         ];

    //         $user_object=new Users();
    //         $res= $user_object->add_users($user_data);



    //     }
    //     return view('sabtfile', [
    //         'res' => $res
    //     ]);
    // }


    public function sabtnam(Request $request){
        $ret=0;
        if($request->get('subbb')!=null){
            $nam=$request->get('namm');
            $pass=$request->get('pass');

            $user_object=new Users();
            $ret=$user_object->login_user($nam,$pass);

        }

        if($ret==1){
            return redirect('welcome');
        }

        return view('sabtfile');


    }

    public function wel(){
        $user_object=new Users();
        $users=$user_object->user();
        return view('welcome',['users'=>$users]);
    }


    public function testdb(){
        return view("sabtfile");
    }


    public function index(){
        return view("index");
    }

    
    public function contact(){
        return view("contact");
    }



}
