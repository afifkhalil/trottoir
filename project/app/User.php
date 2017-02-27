<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','facebook_id','image','device_id','gouvernorat','delegation','localite','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reclamations(){
        return $this->hasMany('App\Reclamation');
    }
     public function allUsers(){
        return self::all();
    }

    public function getUser($id){
        $user = self::find($id);
        if(is_null($user)){
            return false;
        }
        return $user;
    }

  public function saveUser(){
        
        $input = Input::all();
        if(Input::file()){
            $image = Input::file('image');
            $image = Controller::uploadImage($image);
        }

        $user = new User();       
        if(isset($input['name']) && isset($input['email']) && isset($input['password'])&& isset($image) && isset($input['device_id'])){

            if(!($this->isUserExisted($input['email']))){
                $user->name=$input['name'];
                $user->email=$input['email'];
                $user->password=md5($input['password']);
                $user->image=$image;
                $user->facebook_id=$input['facebook_id'];
                $user->device_id= $input['device_id'];
                $user->gouvernorat=$input['gouvernorat'];
                $user->delegation=$input['delegation'];
                $user->localite=$input['localite'];
                $user->role='utilisateur';
                $user->save();

                return $user;
            }else{

                return false;                
            }
        }else{

            return false;
        }
        
    }

    public function updateUser($id)
    {
       
        $input = Input::all();
        
        $user= self::where('id',$id)->first();
        if(Input::hasFile('image')){
            $image = Input::file('image');
            $image = Controller::uploadImage($image);
            $user->image=$image;
        }
        if($user){
            if(isset($input['name']) && isset($input['email']) && isset($input['password'])&& isset($image) && isset($input['device_id'])){
                $oldUser=$this->isUserExisted($input['email']);
                if(($oldUser) && $oldUser->id != $user->id){
                    return false;        
                }else{
                    $user->name=$input['name'];
                    $user->email=$input['email'];
                    $user->password=md5($input['password']);
                    $user->facebook_id=$input['facebook_id'];
                    $user->device_id= $input['device_id'];
                    $user->gouvernorat=$input['gouvernorat'];
                    $user->delegation=$input['delegation'];
                    $user->localite=$input['localite'];
                    $user->update();
                    return $user;
                }   
            }
        }
        
        return false;
        
    }

    public function deleteUser($id)
    {
        $user = self::find($id);
        if(is_null($user)){
            return false;
        }
        return $user->delete();
    }
    
    public  function loginUser()
    {          
        $input = Input::all();  
        if(isset($input['email']) && isset($input['password'])){
            $user=self::where('email',$input['email'])->where('password',md5($input['password']))->first();
            return $user;    
        }
        if(isset($input['facebook_id'])){ 
            $user=self::where('facebook_id',$input['facebook_id'])->first();
            return $user;
        }
        return false;
    }
    

     public function isUserExisted($email){

        $user=self::where('email',$email)->first();
        return $user;
    }

    public function allUser(){
            $users= self::all();
            $title="Tous les utilisateurs";
            return view('allusers', compact('newReclamations','title'));

    }


}
