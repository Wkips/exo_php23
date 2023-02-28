<?php
include("./models/connection.php");

class Guide {

public PDO $maConnexion;
public string $mytable;
public string $rq;
public PDOStatement $myStatement;

public int $nbcol; 


    
    
  public function __construct( string $_table)
    {
        $requete = "SELECT * FROM restaurants ";
    $this->maConnexion = Connection::getInstance();

    $this->mytable = $_table;
    $sql=  "SELECT * FROM ". $this->mytable;
    $this->myStatement = $this->maConnexion->prepare($sql);
        $this->myStatement->execute();
        $this->nbcol=$this->myStatement->columnCount();        

    }

 private function sendFieldName():array
 {
$tabname = array();

for ($i=0; $i < $this->nbcol ; $i++) { 
 $tabInfoCol = $this->myStatement->getColumnMeta($i);

 array_push($tabname,$tabInfoCol["name"]);
}

return $tabname;
 }   

public function readTable():string
{
    $chaine = "<table class='table table-striped'> <thead>"; 
   $nameCols = $this->sendFieldName(); 
    for ($i=0; $i < $this->nbcol ; $i++) { 

        $chaine.="<th>".$nameCols[$i]."</th>";
        }
    
    $chaine.="</thead> <tbody>";
   while ($row = $this->myStatement->fetch()){
    $chaine.="<tr>";
for ($i=0; $i < count($row); $i++) { 
    
    $chaine.="<td>".$row[$i]."</td>";
}


    $chaine.="</tr>";

   };
$chaine.="</tbody> </table>";
    return $chaine;

    
}

}