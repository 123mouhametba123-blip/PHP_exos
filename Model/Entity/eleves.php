<?php
require_once dirname(__DIR__)."/Entity/responsable.php";
require_once dirname(__DIR__)."/Entity/status.php";
class Eleve
{
    private string $ref;
    private string $prenom;
    private string $nom;
    private string $numero;
    private ?string $adresse;

    private ?Responsable $responsable;
    private ?Statut $statut;
}