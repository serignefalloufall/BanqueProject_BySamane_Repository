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

class ClientController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function add()
	{

		$clientdb = new ClientRepository(); // l'objet $clientdb c pour acceder au methode qui se trouve class TestDB

		$data['listeTypeClient'] = $clientdb->getListTypeClient();
		$data['listeEmployeur'] = $clientdb->getListEmployeur();
        $data['clients'] = $clientdb->findAll();

		$data['ok'] = 0;

		// foreach($listes as $r){
		// 	    echo $r->getId()." "."<br/>";
		// 		echo $r->getLibelle()." "."<br/>";
		// }
		// die;

		// $data['tclient'] = $clientdb->getTypeClientById(2);

		// $tclient = $data['tclient'];
		// echo $tclient->getId()." "."<br/>";
		// echo $tclient->getLibelle()." "."<br/>";
		//     echo $r->getNom_employeur()." "."<br/>";
		// foreach( $listes as $r){
		//     echo $r->getId()." "."<br/>";
		//     echo $r->getNom_employeur()." "."<br/>";

		// }
		// var_dump($data['tclient']);
		// die;
		if (isset($_POST['btnAjouter'])) {
			extract($_POST);
			$employeurObject = new Employeur(); //ici on cree un objet 

			$clientObject = new Client(); //ici on cree un objet 

			if ($_POST['type_client_id'] == '3') {
				//8 represente typeclient entreprise au niveau de la base

				$employeurObject->setNumIdentification($numIdentification);

				$employeurObject->setRaisonSocial($raisonSocial);

				$employeurObject->setNom_employeur($nom_employeur);

				$employeurObject->setAdresse_employeur($adresse_employeur);

				$resultat = $clientdb->addEmployeur($employeurObject);

				$data['ok'] = $resultat;

				return $this->view->load("client/liste", $data);
			} else if ($_POST['type_client_id'] == '1') {
				//6 represente typeclient salarie au niveau de la base

				$clientObject->setNom($nom);

				$clientObject->setPrenom($prenom);

				$clientObject->setAdresse($adresse);

				$clientObject->setTel($tel);

				$clientObject->setEmail($email);

				$clientObject->setSalaire($salaire);

				$clientObject->setProfession($profession);
				//ici je recupere l objet type client
				$typeclient = $clientdb->getTypeClientById($type_client_id);

				$clientObject->setType_client_id($typeclient);

				//ici je recupere l objet employeur
				$employeur = $clientdb->getTypeEmployeurById($employeur_id);

				$clientObject->setEmployeur_id($employeur);

				$resultat = $clientdb->addClientSalarie($clientObject);

				$data['ok'] = $resultat;

				return $this->view->load("client/liste", $data);
			} else if ($_POST['type_client_id'] == '2') {
				//7 represente typeclient non salarie au niveau de la base

				$clientObject->setNom($nom);

				$clientObject->setPrenom($prenom);

				$clientObject->setAdresse($adresse);

				$clientObject->setTel($tel);

				$clientObject->setEmail($email);

				$resultat = $clientdb->addClientNonSalarie($clientObject);

				$data['ok'] = $resultat;

				return $this->view->load("client/liste", $data);
			}
		} else {

			return $this->view->load("client/add", $data);
		}
	}


	public function liste()
    {
        $cdb = new ClientRepository();

        $data['clients'] = $cdb->findAll();
        return $this->view->load("client/liste", $data);
    }

	public function delete($id)
    {

        $clientdb = new ClientRepository();
        $clientdb->deleteClient($id);
        return $this->liste();
	}
	
	public function edit($id)
    {

        $clientdb = new ClientRepository();

        $data['client'] = $clientdb->getClient($id);
        //var_dump($tdb->getTest($id));
        return $this->view->load("client/edit", $data);
	}
	
	public function update()
    {
		$clientdb = new ClientRepository();
		
        if (isset($_POST['modifier'])) {
			extract($_POST);
			//var_dump($_POST);
			if (!empty($id)) {

				$clientObject = new Client();

				$clientObject->setNom($nom);

				$clientObject->setPrenom($prenom);

				$clientObject->setAdresse($adresse);

				$clientObject->setTel($tel);

				$clientObject->setEmail($email);

				$ok = $clientdb->updateClient($clientObject);
				
            }
            
        }

        return $this->liste();
    }
	


}
