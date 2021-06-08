<?php
use App\Framework\FlashBag;
use App\Model\UserModel;
use App\Framework\UserSession;




if ($_POST){
    $userModel = new UserModel();
    $email = trim($_POST['email']);
    $password = $_POST['password'];
   
    $hash = password_hash($password,PASSWORD_DEFAULT);
    $user = $userModel -> checkCredentials($email,$password);
    UserSession::register($user['idUser'],$user['firstname'],$user['lastname'],$user['email']);

    if($user == false){

         FlashBag::addFlash('Identifiant incorrect', 'error');
    }
    else{
        FlashBag::addFlash('Connexion réussi');
        header('Location: ' . buildUrl('homepage'));
        exit;
    }

    
   $id = UserSession::getId();
    dump($id);
}







return render('login',[
    'email' => $email??'',
    'pageTitle' => 'Connect'
    



]);