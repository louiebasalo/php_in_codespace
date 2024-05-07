<?php



$data = array_map("htmlspecialchars",$_POST);


foreach($data as $data){
    echo "{$data}<br>";
}
echo htmlspecialchars($_POST["email"]);
var_dump($_POST);


?>