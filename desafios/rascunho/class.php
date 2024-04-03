<?php 
class Acount{
public $numAcount ;
protected $type ;
private $owner ;
private $balance ;
private $status ;

public function __construct($numAcount,$type, $owner,$balance,$status){
    $this -> numAcount = $numAcount ;
    $this -> type = $type ;
    $this -> owner = $owner ;
    $this -> balance = $balance ;
    $this -> status = $status ;

}

public function getType(){
    return $this -> type ;
}
public function getOwner(){
    return $this -> owner ;
}
public function getBalance(){
    return $this -> balance ;
}
public function getStatus(){
    return $this -> status ;
}

}


?>