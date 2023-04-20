<?php

//class de le titulaire
class Titulaire
    {
        //attibuts privées: nom, prenom, date de naissance, ville de residence et comptes associés
        private string $_nom;
        private string $_prenom;
        private DateTime $_date_naissance;
        private string $_ville;
        private array $_comptes;

        //setter pour chaque attribut
        public function setNom($nom)
            {
                $this->_nom =  $nom;
            }
        
        public function setPrenom($prenom)
            {
                $this->_prenom =  $prenom;
            }

        public function setDateNaissance($date_naissance)
            {
                $this->_date_naissance =  $date_naissance;
            }

        public function setVille($ville)
            {
                $this->_ville =  $ville;
            }
    

        //getter pour chaque attribut
        public function getNom()
            {
                return $this->_nom;
            }
        
        public function getPrenom()
            {
                return $this->_prenom;
            }

        public function getDateNaissance()
            {
                return $this->_date_naissance;
            }

        public function getVille()
            {
                return $this->_ville;
            }


        //constructor de le titulaire
        public function __construct(string $nom, string $prenom, string $date_naissance, string $ville)
            {
                //definition de la liste de le contructor
                $this->_nom = $nom;
                $this->_prenom = $prenom;
                $this->_date_naissance = new DateTime($date_naissance);
                $this->_ville = $ville;
                $this->_comptes = [];

                echo "Je suis le titulaire! <br>";

            }
        
        //methode pour ajouter un compte à une titulaire 
        public function ajoutCompte(Compte $new_compte)
            {
                array_push($this->_comptes, $new_compte);
            }

    }










?>