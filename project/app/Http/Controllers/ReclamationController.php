<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
use Illuminate\Support\Facades\Input;
use Image;
use App\Reclamation;
class ReclamationController extends Controller
{
    //
    public function __construct(Reclamation $reclamation){
        
        header('Access-Control-Allow-Origin: *'); 
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin');
        $this->reclamation = $reclamation;
    }

	public function saveReclamation(){

		  $reclamation = $this->reclamation->saveReclamation();    
        if(!$reclamation){
            return Response::json(['response'=>"erreur dans l'insertion!"], 400);
        }
        return Response::json($reclamation,200);

    }

    public function getReclamation(){
    	
    	 $reclamation = $this->reclamation->getReclamation();
        if(!$reclamation){
            return Response::json(['response'=>"erreur get reclamation !"], 400);
        }
        return Response::json($reclamation,200);

    }

    public function updateReclamation($id){
    	$reclamation = $this->reclamation->updateReclamation($id);
        if(!$reclamation){
            return Response::json(['response'=>"erreur dans la modification!"], 400);
        }
        return Response::json($reclamation,200);

    }
    public function getnewReclamation(){

        $reclamations=$this->reclamation->getnewReclamation();
        $title='les nouvelles réclamations';
        return view('back.reclamations', compact('reclamations','title'));
        
    }




}
