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
            }
        
        //methode pour ajouter un compte à une titulaire 
        public function ajoutCompte(Compte $new_compte)
            {
                array_push($this->_comptes, $new_compte);
            }

        //methode pou calculer l'age de le titulaire
        public function ageTitulaire()
            {
                //Calcul age de la personne
                $today = new DateTime('now');
                $interval = $today->diff($this->_date_naissance);
                return $interval->y;
            }

        //methode pour afficher les infos du titulaire et le comptes detenus
        public function infoTitulaire()
            {
                echo "<br><br>*******************<br><br>";
                echo "Nom : ".$this->_nom." ;<br>";
                echo "Prenom: ".$this->_prenom." ;<br>";
                echo "Ville: ".$this->_ville." ;<br>";
                echo "Age : ".$this->ageTitulaire()." ans ;<br>";
                echo "Comptes detenus : ".count($this->_comptes)." <br>";
                echo "------------------<br>";
                foreach($this->_comptes as $key=>$compte)
                    {
                        $numero = $key + 1; 
                        echo "Compte numero $numero : ".$compte->getLibelle()." ;<br>";
                    }
                echo "<br>*******************<br><br>";
            }
        

    }










?>