<?php 
class Account{
public $numberAccount ;
protected $type ;
private $owner ;
private $balance ;
private $status ;

//criando objeto comum: conta
public function __construct($numberAccount,$type, $owner,$balance,$status){
    $this -> numberAccount = $numberAccount ;
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
public function setBalance($newBalance){
    $this-> balance = $newBalance;
}



public function openAccount(){
    if ($this-> type === "CC") {
        $this -> balance += 50 ;
        echo "Sua Conta Corrente rendeu R\$50 como incentivo\n" ;
    } else {
        $this -> balance += 150 ;
        echo "Sua Conta Poupança rendeu R\$150 como incentivo" ;
    }
}


}