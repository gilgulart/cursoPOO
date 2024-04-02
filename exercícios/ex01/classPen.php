<?php 
class Pen{
  var $model  ;
  var $color ;
  var $tip ;
  var $charge ;
  var $covered ;
  function scratch(){
    if ($this->covered == true) {
      echo "<p>ERRO! Não posso rabiscar!</p>" ;
      
    } else  {
      echo "<p>Estou rabiscando</p>";
    }
    
  }
  function cover() {
    $this-> covered = true ;

  }
  
  function discover() {
    $this-> covered = false ;
  }
 
}
?>