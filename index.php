<?php

//include ('conect.php');

require_once ('conect.php');
$conex = new Conexion();
$getConection = $conex->Conectar();

$sql = "select*from REGIONS";
$stmt = $getConection->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  //  echo $row["REGION_NAME"]."br";
  foreach($row as $key=> $value){
    echo $key." __ ".$value."<br>";
  }

  echo '=========================================='."<br>";
}

/////////////////////////INSERT OR CREATE///////////////////////////////////
try{
    $sql = "insert into REGIONS(REGION_ID, REGION_NAME) values (5, 'OCEANIA')";
$stmt = $getConection->prepare($sql);
$stmt->execute();
} catch (PDOException $e){
    echo"<br> NO SE INSERTO EL DATO POR EL ERROR: <br>".$e->getMessage();
}



?>