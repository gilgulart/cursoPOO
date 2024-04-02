<?php 
class mouse{
var $color ;
var $button ;
var $sense ;



function open() {
if ($this -> button == true) {

    echo "<p>Parabéns você abriu</p>" ;
} else {
    echo "Clique para abrir" ;
}
} 
function click() {
    $this-> button = true ;

  }
  
  function notclick() {
    $this-> button = false ;
  }

}

?>