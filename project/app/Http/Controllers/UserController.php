<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
use Illuminate\Support\Facades\Input;
use Image;
class UserController extends Controller
{
    //
    public function __construct(User $user){
        header('Access-Control-Allow-Origin: *'); 
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin');
        $this->user = $user;
    }

    public function allUsers()
    {
        return Response::json($this->user->allUsers(),200);
    }

    public function getUser($id)
    {
        $user = $this->user->getUser($id);
        if(!$user){
            return Response::json(['response'=>"utilisateur n'exite pas!"], 400);
        }
        return Response::json($user,200);
    }

  
    public function saveUser()
    {   dd('tt');
        $user = $this->user->saveUser();    
        if(!$user){
            return Response::json(['response'=>"utilisateur exite déjà!"], 400);
        }
        return Response::json($user,200);
    }

    public function updateUser($id)
    {
        $user = $this->user->updateUser($id);
        if(!$user){
            return Response::json(['response'=>"email exite déjà!"], 400);
        }
        return Response::json($user,200);
    }

    

    public  function loginUser()
    {
        $user=$this->user->loginUser();
        if(!$user){
    		return Response::json(['response'=>"password incorrect!"],400);
        }
            return Response::json($user,200);
    }

    public function allUser(){

        $users=$this->user->allUsers();
        $title='Tous les utilisateurs';

        return view('back.users',compact('users','title'));

    }

}
