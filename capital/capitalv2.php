<?php
        $tabPays = ["France" => "Paris", 
        "Allemagne" => "Berlin",
         "Italie" => "Rome", 
         "Maroc" => "Rabat",
          "Espagne" => "Madrid",
           "Portugal" => "Lisbonne",
            "Angleterre" => "Londres",
            "Finlande"=>"Helsinki"
        ];


     function trouveCapital(string $_monpays, Array $tab): string
     { //$verif=false;


        foreach ($tab as $key => $value) {
        if($key==$_monpays)
        {
            return $value;
        }
      
     }
return "Inconnu";
     }


 if ( !empty($_GET["pays"])) {
    echo "<h2> la capital du  pays ".$_GET["pays"]." est :".trouveCapital($_GET["pays"], $tabPays)."</h2>";
    
 }    


?>
<form method="GET" action="capitalv2.php" enctype="text/plain" >
<input type="text" placeholder="saisir le Pays"   name="pays" id="pays"> 
<input type="submit" value="trouver capitale" id="btnpays" name="btnpays" />
</form>