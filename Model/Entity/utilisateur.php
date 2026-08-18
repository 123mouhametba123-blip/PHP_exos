<?php

class Utilisateur
{
    private string $prenom;
    private string $nom;
    private string $login;
    private string $password;

    private ?Role $role;
}