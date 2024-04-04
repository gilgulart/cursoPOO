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



     public function activateAccount(){
        
         
         if ($this-> type === "Corrente") {
             $this -> balance += 50 ;
             echo "Sua Conta Corrente rendeu R\$50 como incentivo\n" ;
            } else {
                $this -> balance += 150 ;
                echo "Sua Conta Poupança rendeu R\$150 como incentivo" ;
            }
            $this->status = true ;
        }
     public function closeAccount(){
         $this->status = false ;
        
     }
     public function deposit($amount) {
        if ($amount > 0) {
            if ($this->type === "Corrente"){
                $this->balance += $amount + 50 ;
            }else {
                $this->balance += $amount + 150 ;
            }
            echo "Depósito de R\$ {$amount} realizado com sucesso. Seu novo saldo é: R\$ {$this->balance}\n";
        } else {
            echo "Valor de depósito inválido.\n";
        }
     }
}