<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class CompteRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	function addCompteEpargne($compte)
    {//on donne a notre fonction comme prametre un objet


        $this->db->persist($compte);
        $this->db->flush();
        return $compte->getId();
        
        
    }

    function addCompteCourant($compte)
    {//on donne a notre fonction comme prametre un objet
        
        $this->db->persist($compte);
        $this->db->flush();
        return $compte->getId();
       
    }

    function addCompteBloque($compte)
    {//on donne a notre fonction comme prametre un objet


        
        $this->db->persist($compte);
        $this->db->flush();
        return $compte->getId();
    }
 
    function getListAgence()
    {
    
        return $this->db
        ->createQuery("SELECT a FROM Agence a")
        ->getResult();  
    }

    public function getAgenceById($id){
		if($this->db != null)
		{
			$agence = $this->db->find('Agence', $id);
			if($agence != null)
			{
                return $agence;
			}else {
				die("Objet agence".$id." does not existe!");
			}
		}
    }
    
    function getListTypeComte()
    {
        return $this->db
        ->createQuery("SELECT tc FROM Typecompte tc")
        ->getResult();    
    }

    public function getTypeCompteById($id){
		if($this->db != null)
		{
			$tcompte = $this->db->find('Typecompte', $id);
			if($tcompte != null)
			{
                return $tcompte;
			}else {
				die("Objet compte ".$id." does not existe!");
			}
		}
    }
    
    public function getClientById($id)
    {
		if($this->db != null)
		{
			$cli = $this->db->find('Client', $id);
			if($cli != null)
			{
                return $cli;
			}else {
				die("Objet client".$id." does not existe!");
			}
		}
    }
	
	
}