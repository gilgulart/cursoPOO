<?php 
class lesson{
    var $teacher ;
    var $student ;
    function teacherPresent() {
        if ($this -> teacher == true) {
            
            echo "<p>A aula foi mantida já que o professor estava presente</p>" ;
        } else {
            echo "<p>O professor meteu um atestado e a aula foi cancelada</p>" ;
        }
    }
    
    function studentPresent() {
        if ($this -> student == true) {
            echo "<p>A aula foi mantida já que o aluno estava presente</p>" ;
        } else {
            echo "<p>A aula foi mantida e o aluno ganhou falta na chamada</p>" ;
        }
    }
    function studentSkip() {
        if ($this -> student < 1) {
            echo "<p>Os alunos mataram aula, a aula foi cancelada mas todos ganharam falta</p>" ;
        } else {
            echo "<p>A aula foi mantida mesmo com poucos alunos</p>" ;
        }
    }

}

?>