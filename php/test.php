<?php

public function getProduct($id){
    $sql = "SELECT * FROM `product` 
    		WHERE `id` = :id";
    $stmt = ->pdo->prepare();
    $stmt->bindValue(":id",$id);		
    if($stmt->execute()){
        $product = ->fetch(PDO::FETCH_ASSOC);
        if(!empty($product)){
            return $product;
        }
    }
    return array();
}

?>