<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
    <link rel="shortcut icon" href="image/masqueico.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Aula e Presença</h1>
    <h2>Aula normal: o professor e os alunos estavam presentes</h2>
    <?php 
    require_once "lesson.php" ;
    //aula normal
    $lesson = new lesson ;
    $lesson -> teacher = true ;
    $lesson -> student = true ;
    $lesson -> teacherPresent() ;
    $lesson -> studentPresent() ;

    ?>
    <h2>O professor precisou descansar</h2>
    <?php 
  $noLesson = new lesson ;
  $noLesson -> teacher = false ;
  $noLesson -> teacherPresent() ;
 ?>
    <h2>O aluno faltou</h2>
    <?php 
 $ausent = new lesson ;
 $ausent -> student = false ;
 $ausent -> studentPresent() ;
 ?>
    <h2>Os alunos mataram aula</h2>
    <?php 
 $skipLesson = new lesson ;
 $skipLesson -> student < 1 ;
 $skipLesson -> studentSkip() ;
 ?>
</body>

</html>