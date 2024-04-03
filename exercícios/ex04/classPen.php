<?php 
class Pen{
  public $model  ;
  private $tip ;
  private $color ;
  private $covered ;
  public function Pen($m, $c, $t){
    $this-> model = $m ;
    $this-> color = $c ;
    $this-> tip = $t ;
    $this-> cover() ;
  }
//   public function __construct() {
//  $this ->color = "Azul" ;
//  $this-> cover();
//  }
  public function cover(){
    $this -> covered = true ; 
  }

  public function getModel() {
    return $this -> model ;
  }
  public function setModel($m){
    $this->model = ($m) ;
  }

   public function getTip(){
    return $this -> tip ;
   }
   public function setTip($p){
    $this -> tip = $p ;
   }
}

?>