<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Users;

class testdb
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user_id=$request->get("User_id");
        // echo $user_id;
        
        $user_object1=new Users();

        $uss=$user_object1->get()->where('id',$user_id);


        if(!isset($uss[1])||$uss[1]->name!="ali"){
            return abort(403);
        }





        // if(true){
        //     return abort(403);
        // }
        return $next($request);
    }
}
