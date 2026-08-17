<?php

class Utilisateurs
{


        private ?int $id;
        private string $nom;
        private string $prenom;
        private string $email;
        private int $mot_de_passe;
       
    public function __construct(
      
            ?int $id,
            string $nom,
            string $prenom,
            string $email,
            int $mot_de_passe
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mot_de_passe = $mot_de_passe;
       
    }
     


}