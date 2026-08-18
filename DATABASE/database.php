<?php 

class DATABASE{
      private static ?PDO $connexion = null;
      public static function getConnexion(){
         if ($connexion === null) {
            ("pgsql:host=localhost;port=5432;dbname=gestvca",
                    "postgres",
            "mouha2007b")
         }
      }


}


