<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client; 

use Spatie\SimpleExcel\SimpleExcelWriter; 
use Spatie\SimpleExcel\SimpleExcelReader; 

class SimpleExcelController extends Controller
{
    
    public function importation(){

        $clients = Client::all();
        return view('excel', compact('clients')); 
    }

    
    public function import(Request $request){
         
        // $clients = Client::all();

        // dd($clients); 

        //Validation du fichier uploadé; extension ".xlsx" autorisée 
        $request->validate([
            'fichier' => 'bail|required|file|mimes:xlsx'
        ]); 

        //dd($request); 

               
        //on déplace le fichier uploadé vers le dossier "public" pour le lire 
         $fichier = $request->fichier->move(public_path(), $request->fichier->hashName()); 

        //dd($fichier);

        $reader = SimpleExcelReader::create($fichier);
        
        $rows = $reader->getRows(); 

        $status = Client::insert($rows->toArray()); 

        if($status){
            $reader->close(); 
            unlink($fichier); 
            //return back()->withMsg("Importation réussie"); 
            return redirect()->route('importation')->withMsg('Importation réussie');
        }else{
            abort(500); 
        }
    }

    public function export(Request $request){
 

    	// 1. Validation des informations du formulaire
    	$this->validate($request, [ 
    		'name' => 'bail|required|string',
    		'extension' => 'bail|required|string|in:xlsx,csv'
    	]);

    	// 2. Le nom du fichier avec l'extension : .xlsx ou .csv
    	$file_name = $request->name.".".$request->extension;

    	// 3. On récupère données de la table "clients"
    	$clients = Client::select("name", "email", "phone", "adress")->get();

    	// 4. $writer : Objet Spatie\SimpleExcel\SimpleExcelWriter
    	$writer = SimpleExcelWriter::streamDownload($file_name);

 		// 5. On insère toutes les lignes au fichier Excel $file_name
    	$writer->addRows($clients->toArray());

        // 6. Lancer le téléchargement du fichier
        $writer->toBrowser();
        


    }
}
