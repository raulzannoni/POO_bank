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
            }

        //methode pour afficher les info du compte et du titulaire
        public function infoCompte()
            {
                echo "<br><br>*******************<br><br>";
                echo "Compte : ".$this->_libelle." ;<br>";
                echo "Solde courant : ".$this->_solde." ;<br>";
                echo "Proprietaire : ".$this->_titulaire->getNom()." ".$this->_titulaire->getPrenom()." ;<br>";
                echo "<br>*******************<br><br>";
            }

        //methode pour crediter un compte
        public function creditCompte($credit)
            {
                $this->_solde += $credit;
                echo "<br><br> Vous avez crediter le compte ".$this->_libelle." de ".$credit." ".self::$_devise_monetaire."! <br><br>";
            }

        //methode pour debiter un compte
        public function debitCompte($debit)
            {
                if($this->_solde - $debit < 0)
                    {
                        echo "Le montant actuelle de le compte ".$this->_libelle." est de ".$this->_solde." ".self::$_devise_monetaire." <br>";
                        echo "Vous ne pouvez pas prélever ".$debit." ".self::$_devise_monetaire." depuis ce compte! <br>";
                    }
                else
                    {
                        $this->_solde -= $debit;
                        echo "<br><br> Vous avez debiter le compte ".$this->_libelle." de ".$debit." ".self::$_devise_monetaire."! <br><br>";
                    }
            }
        
        //methode pour gerer un virement
        //compte: compte à crediter
        //virement
        public function virementCompte(Compte $compte, $virement)
            {

                if($this->_solde - $virement < 0)
                    {
                        echo "Le montant actuelle de le compte ".$this->_libelle." est de ".$this->_solde." ".self::$_devise_monetaire." <br>";
                        echo "Vous ne pouvez pas virer ".$virement." ".self::$_devise_monetaire." depuis ce compte! <br>";
                    }
                else
                    {
                        $this->_solde -= $virement;
                        $compte->_solde += $virement;
                        echo "<br><br> Vous avez gerer un virement depuis le compte ".$this->_libelle." au bénéfice de ".$compte->_libelle." de ".$virement." ".self::$_devise_monetaire."! <br><br>";
                    }

            }

    }










?>