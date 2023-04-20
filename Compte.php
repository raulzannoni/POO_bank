<?php

//class de le compte
class Compte
    {
        //attibuts privées: libelle , solde initiale et titulaire
        private string $_libelle;
        private float $_solde;
        private Titulaire $_titulaire;
        

        private static string $_devise_monetaire = "euro";

        //setter pour chaque attribut
        public function setLibelle($libelle)
            {
                $this->_libelle =  $libelle;
            }
        

        public function setTitulaire($titulaire)
            {
                $this->_titulaire =  $titulaire;
            }

        //getter pour chaque attribut
        public function getLibelle()
            {
                return $this->_libelle;
            }
        

        public function getTitulaire()
            {
                return $this->_titulaire;
            }

        //constructor de le compte
        public function __construct(string $libelle, float $solde, Titulaire $titulaire)
            {
                //definition de la liste de le contructor
                $this->_libelle = $libelle;
                $this->_solde = $solde;
                $this->_titulaire = $titulaire;
                $this->_titulaire->ajoutCompte($this);

                echo "Je suis le compte! <br>";

            }

        public function info_compte()
            {
                echo "<br><br>*******************<br><br>";
                echo "Compte : ".$this->_libelle." ;<br>";
                echo "Solde courant : ".$this->_solde." ;<br>";
                echo "Proprietaire : ".$this->_titulaire->getNom()." ".$this->_titulaire->getPrenom()." ;<br>";
                echo "<br><br>*******************<br><br>";
            }

    }










?>