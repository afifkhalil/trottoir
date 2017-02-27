<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
class Reclamation extends Model
{
    //
    protected $fillable = [
        'gouvernorat', 'delegation', 'localite','geolocalisation','categorie','image','commentaire','etat','user_id',
    ];

    public function user(){
    	 return $this->belongsTo('App\User');
    }



    public function getReclamation(){
    	dd($_GET);
    	$req=self::where('etat',2);

    	if(isset($_GET['gouvernorat'])){    		
    		$req=$req->where('gouvernorat',$_GET['gouvernorat']);
    	}
    	if(isset($_GET['delegation'])){
    		$req=$req->where('delegation',$_GET['delegation']);
    	}
    	if(isset($_GET['localite'])){
    		$req=$req->where('localite',$_GET['localite']);
    	}
    	if(isset($_GET['geolocalisation'])){
    		$req=$req->where('geolocalisation',$_GET['geolocalisation']);
    	}
    	if(isset($_GET['categorie'])){
    		$req=$req->where('categorie',$_GET['categorie']);
    	}
    	if(isset($_GET['commentaire'])){
    		$req=$req->where('commentaire',$_GET['commentaire']);
    	}
    	
    	if(isset($_GET['user_id'])){
    		$req=$req->where('user_id',$_GET['user_id']);
    	}
    	
        $reclamation = $req->get();
        if(is_null($reclamation)){
            return false;
        }
        return $reclamation;
    }

  public function saveReclamation(){
        
        $input = Input::all();
        if(Input::file()){
            $image = Input::file('image');
            $image = Controller::uploadImage($image);
        }
        
        $reclamation = new reclamation();       
        if(	isset($input['gouvernorat']) && isset($input['delegation']) && isset($input['localite'])&& isset($image) &&
            isset($input['geolocalisation'])&& isset($input['categorie']) && isset($input['commentaire'])&& isset($input['etat']) &&
            isset($input['user_id'])){

            
                $reclamation->gouvernorat=$input['gouvernorat'];
                $reclamation->delegation=$input['delegation'];
                $reclamation->localite=$input['localite'];
                $reclamation->image=$image;
                $reclamation->geolocalisation=$input['geolocalisation'];
                $reclamation->categorie= $input['categorie'];
                $reclamation->commentaire=$input['commentaire'];
                $reclamation->etat=$input['etat'];
                $reclamation->user_id=$input['user_id'];
                $reclamation->save();
                return $reclamation;	
                }
           
        

            return false;
        
        
    }

    public function updateReclamation($id)
    {
        $input = Input::all();
       dd($input);
        $reclamation= self::where('id',$id)->first();
        if(Input::hasFile('image')){
            $image = Input::file('image');
            $image = Controller::uploadImage($image);
            $reclamation->image=$image;
        }

        if($reclamation){
            if(	isset($input['gouvernorat']) && isset($input['delegation']) && isset($input['localite'])&& isset($image) &&
            	isset($input['geolocalisation'])&& isset($input['categorie']) && isset($input['commentaire'])&& isset($input['etat']) &&
            	isset($input['user_id'])){

            
                $reclamation->gouvernorat=$input['gouvernorat'];
                $reclamation->delegation=$input['delegation'];
                $reclamation->localite=$input['localite'];
                $reclamation->image=$image;
                $reclamation->geolocalisation=$input['geolocalisation'];
                $reclamation->categorie= $input['categorie'];
                $reclamation->commentaire=$input['commentaire'];
                $reclamation->etat=$input['etat'];
                $reclamation->user_id=$input['user_id'];
                $reclamation->save();

                return $reclamation;
           
            }
        }
        
        return false;
        
    }

    public function getnewReclamation(){

        $newReclamations=self::where('etat',0)->get();
        return $newReclamations;

    }




}
