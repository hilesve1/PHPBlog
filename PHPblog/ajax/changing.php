<?php
$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$intro = trim(filter_var($_POST['intro'], FILTER_SANITIZE_STRING));
$text = trim(filter_var($_POST['text'], FILTER_SANITIZE_STRING));


$error = '';

if(strlen($title) <= 3)
    $error = 'Введите название длинее 3 символов';
else if(strlen($intro) <= 3)
    $error = 'Введите интро длинее 3 символов'; 
else if(strlen($text) <= 3)
    $error = 'Введите текст длинее 3 символов';    
 
if($error != ''){
    echo $error;
    exit();
}    

require_once '../mysql_connect.php';

/*$sql = 'DELETE * FROM articles WHERE id="9"';
$query = $pdo->prepare($sql);
$query->execute([$title, $intro, $text, time(), $_COOKIE['log']]); */

//$sql = 'INSERT INTO articles(title, intro, text, date, author) VALUES(?, ?, ?, ?, ?)';
//$sql = 'UPDATE articles SET title = '$title', intro = '$intro', text = '$text' WHERE id = 9';
//$query = $pdo->prepare("UPDATE articles SET title = '$title', intro = '$intro', text = '$text' WHERE id = ? ");
//$query->execute([$title, $intro, $text, $id]);
/*$query = $pdo->prepare($sql);
$query->execute([$title, $intro, $text, time(), $_COOKIE['log']]); */

$t = 'SELECT * FROM `articles` WHERE `id` =:id';
$t = $pdo->prepare($t);
$t->execute(['id' => $_GET['id']]);

$article = $t->fetch(PDO::FETCH_OBJ);

$sql = "UPDATE articles SET title = '$title', intro = '$intro', text = '$text' WHERE id = '$article->id' ";
$query = $pdo->prepare($sql);
$query->execute([$id]);

echo 'OK';