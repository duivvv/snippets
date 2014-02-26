<?php

$sql = "INSERT INTO `products` (`ok`,`test`,`ok`)
		VALUES (:ok,:test,:ok)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":ok",$ok);
$stmt->bindValue(":test",$test);
if($stmt->execute()){
	
}

?>