<?php

// namespace src\entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="typeclient")
 */

class Typeclient
{
        /** 
         * @Id
         * @Column(type="integer")
         * @GeneratedValue
         */
        private $id;
        /** 
         * @Column(type="string") 
         */
        private $libelle;

        /**
         * One type_client has many clients. This is the inverse side.
         * @OneToMany(targetEntity="Client", mappedBy="type_client_id")
         */
        private $clients;


        //Definition des constructeur
        public function __construct()
        {
            $this->clients = new ArrayCollection();
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
         * Get the value of libelle
         */
        public function getLibelle()
        {
                return $this->libelle;
        }

        /**
         * Set the value of libelle
         *
         * @return  self
         */
        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;

                return $this;
        }
}
