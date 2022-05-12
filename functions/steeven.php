<?php

namespace steeven;

function checkPassword($password) {
    echo '<h1 class="text-center">Steeven</h1>';
    echo 'Mot de passe : ' . $password;<br>
    $completion=0;
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 12) {
    echo '<li class="list-group-item active">Le mot de pase doit contenir au moins:</li>';
    
    if(!$uppercase){
       echo '<li class="list-group-item">1 majuscule</li>';
    }else{
            $completion++;
        }

    if(!$lowercase){
         echo '<li class="list-group-item">1 minuscule</li>';
    }else{
            $completion++;
        }   

    if(!$number){
            echo '<li class="list-group-item">1 chiffre</li>';
        
    }else{
            $completion++;
    }
    if(!$specialChars){
            echo '<li class="list-group-item">1 caractère spécial</li>';
       
    }else{
            $completion++;
        }
    if (strlen($password) < 12) {
        echo '<li class="list-group-item">12 caractères</li>';
        
    }else{
            $completion++;
        }
    if($completion==1){
        $couleur='danger';
        
    }elseif($completion==2){
        $couleur='warning';
        
    }elseif($completion==3){
        $couleur='info';
       
    }elseif($completion==4){
        $couleur='';
    }
    echo '<br>
    <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-' . $couleur . '" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: '. $completion*20 .'%"></div>
  ';
}else{
    echo '
    <br><div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
    </div> <br>';
  echo '<div class="row mx-auto mt-4" style="width: 50px"><a href="http://localhost/index.php" type="button" class="btn btn-success">OK</a></div>';


 }
    
    }

