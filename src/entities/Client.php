<?php


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

    /**
    * @Entity
    * @Table(name="client")
    */

    class Client
    {
        /** 
         * @Id
         * @Column(type="integer")
         * @GeneratedValue
        */
        private $id;

         /** 
         * @Column(type="string",nullable=true) 
        */
        private $nom;

         /** 
         * @Column(type="string",nullable=true) 
        */
        private $prenom;

         /** 
         * @Column(type="string",nullable=true) 
        */
        private $adresse;

         /** 
         * @Column(type="string",nullable=true) 
        */
        private $tel;

         /** 
         * @Column(type="string",nullable=true) 
        */
        private $email;

         /** 
         * @Column(type="string",nullable=true) 
        */
        private $profession;

        /** 
         * @Column(type="decimal",nullable=true) 
        */
        private $salaire;
        
         /** 
         * @Column(type="string",nullable=true) 
        */
        private $password;

        /**
         * One client has many comptes. This is the inverse side.
         * @OneToMany(targetEntity="Compte", mappedBy="client_id")
         */
        private $comptes;

        /**
         * Many client have one typeclient. This is the owning side.
         * @ManyToOne(targetEntity="Typeclient", inversedBy="clients")
         * @JoinColumn(name="type_client_id", referencedColumnName="id")
         */
        private $type_client_id;

           /**
         * Many client have one employeur. This is the owning side.
         * @ManyToOne(targetEntity="Employeur", inversedBy="clients")
         * @JoinColumn(name="employeur_id", referencedColumnName="id")
         */
        private $employeur_id;
      

         /** 
         * @Column(type="string",nullable=true,unique=true) 
        */
        private $cni;

         //Definition des constructeur
        public function __construct()
        {
                $this->comptes = new ArrayCollection();
        }

        
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         * @return  self
         */ 
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of tel
         */ 
        public function getTel()
        {
                return $this->tel;
        }

        /**
         * Set the value of tel
         *
         * @return  self
         */ 
        public function setTel($tel)
        {
                $this->tel = $tel;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of profession
         */ 
        public function getProfession()
        {
                return $this->profession;
        }

        /**
         * Set the value of profession
         *
         * @return  self
         */ 
        public function setProfession($profession)
        {
                $this->profession = $profession;

                return $this;
        }

        /**
         * Get the value of salaire
         */ 
        public function getSalaire()
        {
                return $this->salaire;
        }

        /**
         * Set the value of salaire
         *
         * @return  self
         */ 
        public function setSalaire($salaire)
        {
                $this->salaire = $salaire;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of type_client_id
         */ 
        public function getType_client_id()
        {
                return $this->type_client_id;
        }

        /**
         * Set the value of type_client_id
         *
         * @return  self
         */ 
        public function setType_client_id($type_client_id)
        {
                $this->type_client_id = $type_client_id;

                return $this;
        }

        /**
         * Get the value of employeur_id
         */ 
        public function getEmployeur_id()
        {
                return $this->employeur_id;
        }

        /**
         * Set the value of employeur_id
         *
         * @return  self
         */ 
        public function setEmployeur_id($employeur_id)
        {
                $this->employeur_id = $employeur_id;

                return $this;
        }

        /**
         * Get one client has many comptes. This is the inverse side.
         */ 
        public function getComptes()
        {
                return $this->comptes;
        }

        /**
         * Set one client has many comptes. This is the inverse side.
         *
         * @return  self
         */ 
        public function setComptes($comptes)
        {
                $this->comptes = $comptes;

                return $this;
        }

        /**
         * Get the value of cni
         */ 
        public function getCni()
        {
                return $this->cni;
        }

        /**
         * Set the value of cni
         *
         * @return  self
         */ 
        public function setCni($cni)
        {
                $this->cni = $cni;

                return $this;
        }
    }

?>