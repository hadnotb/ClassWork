<?php


echo 'PAGE Article';
if (!array_key_exists('id', $_GET) || !$_GET['id'] || !ctype_digit($_GET['id']) ) {
   include CONTROLLER_DIR . '/404.php';
   exit;
}

$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8';

$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$idArt = $_GET['idArt'];

$sql = 'call Sp_modelArticleLire(:idArt)';

$pdoStatement = $pdo->prepare($sql);
$pdoStatement->execute(array('idArt' => $idArt));
$articles = $pdoStatement->fetchAll();

dump($articles);

include TEMPLATE_DIR . '/home.phtml';

