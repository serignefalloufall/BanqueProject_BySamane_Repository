<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/ 
use libs\system\Controller;
use src\model\ClientRepository;
use src\model\CompteRepository;

class CompteController extends Controller{
    public function __construct(){
        parent::__construct();
    }
      
	public function add()
	{
		$comptedb = new CompteRepository();// l'objet $comptedb c pour acceder au methode qui se trouve class TestDB
		$clientdb = new ClientRepository();
		$data['listeClient'] = $clientdb->findAll();
		$data['listeTypeCompte'] = $comptedb->getListTypeComte();
		$data['listeAgence'] = $comptedb->getListAgence();

		//parametrage
		$data['today'] = date("d/m/y"); 
		$data['numcompte'] = 'Cmpt-'.$data['today']; 
		$data['cleRip'] = 'Cle-rip-'.$data['today']; 

		if(isset($_POST['btnAjouter']))
		{
		 
			extract($_POST);
			// var_dump($_POST);
			// die;
		   
			$compteObject = new Compte();//ici on cree un objet 

			if($_POST['type_compte_id'] == '1')
			{
			  //1 represente typecompte epargne au niveau de la base
			  $compteObject->setNum_compte($num_compte);

			  $agence = $comptedb->getAgenceById($agence_id);

			  $compteObject->setAgence_id($agence);
  
			  $compteObject->setCle_rip($cle_rip);
  
			  $compteObject->setFrais_ouverture($frais_ouverture);
  
			  $compteObject->setDate_ouverture($date_ouverture);

			   //ici je recupere l objet type compte
			  $typecompte = $comptedb->getTypeCompteById($type_compte_id);

			  $compteObject->setType_compte_id($typecompte);
  
			   //ici je recupere l objet client
			  $client = $comptedb->getClientById($client_id);

			  $compteObject->setClient_id($client);
		  
			  $resultat = $comptedb->addCompteEpargne($compteObject);

			  $data['ok'] = $resultat;

			  return $this->view->load("compte/add", $data);

			}else if($_POST['type_compte_id'] == '2')
			{
			  //2 represente typecompte courant au niveau de la base
	
			  $compteObject->setNum_compte($num_compte);

			  $agence = $comptedb->getAgenceById($agence_id);

			  $compteObject->setAgence_id($agence);

			  $compteObject->setCle_rip($cle_rip);

			  $compteObject->setAgio($agio);

			  $compteObject->setDate_ouverture($date_ouverture);

			  //ici je recupere l objet type compte
			  $typecompte = $comptedb->getTypeCompteById($type_compte_id);

			  $compteObject->setType_compte_id($typecompte);

			  //ici je recupere l objet client
			  $client = $comptedb->getClientById($client_id);

			  $compteObject->setClient_id($client);
		
			  $resultat = $comptedb->addCompteCourant($compteObject);

			  $data['ok'] = $resultat;

			  return $this->view->load("compte/add", $data);

			}else if($_POST['type_compte_id'] == '3')
			{
			  //3 represente typecompte bloque au niveau de la base
	  
			  $compteObject->setNum_compte($num_compte);

			  $agence = $comptedb->getAgenceById($agence_id);

			  $compteObject->setAgence_id($agence);

			  $compteObject->setCle_rip($cle_rip);

			  $compteObject->setFrais_ouverture($frais_ouverture);

			  $compteObject->setDate_ouverture($date_ouverture);

			   //ici je recupere l objet type compte
			   $typecompte = $comptedb->getTypeCompteById($type_compte_id);

			   $compteObject->setType_compte_id($typecompte);

			   //ici je recupere l objet client
			  $client = $comptedb->getClientById($client_id);  
			  $compteObject->setClient_id($client);
	  
			  $resultat = $comptedb->addCompteBloque($compteObject);

			  $data['ok'] = $resultat;

			  return $this->view->load("compte/add", $data);
			}
		  
		}else{

			  return $this->view->load("compte/add", $data);

		}
	   
	}  

	public function rechercher($cni)
	{
		$cdb = new CompteRepository();
		$client = $cdb->rechercher($cni);
		$clt['success']=true;
		$clt['data']=$client[0];
		var_dump($clt);
		echo json_decode($clt);
		//var_dump($clt);
		//echo json_decode($client[0]);
		//json_decode($clt);

		//$tabclient = (array) $cdb->rechercher($cni);
		
		//echo json_decode($tabclient);
	}

}
?>