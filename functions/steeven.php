<?php

//namespace steeven;

function checkPassword($password) {

    echo '<h1 class="text-center">Steeven</h1>';
    echo 'Mot de passe : ' . $password;
    echo '<div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  ';
    $completion=0;
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
    if(!$uppercase){
       
    }else{
            $completion++;
        }

    if(!$lowercase){
        
    }else{
            $completion++;
        }   

    if(!$number){
        
    }else{
            $completion++;
    }
    if(!$specialChars){
       
    }else{
            $completion++;
        }
    if (strlen($password) < 12) {
        
    }else{
            $completion++;
        }
        echo '<div class=row>
    <ul class="list-group">
  <li class="list-group-item active">Le mot de pase doit contenir au moins:</li>
  <li class="list-group-item">1 chiffre</li>
  <li class="list-group-item">1 minuscule</li>
  <li class="list-group-item">1 majuscule</li>
  <li class="list-group-item">1 caractère spécial</li>
  <li class="list-group-item">12 caractères</li>
    </ul>
    </div>';
    }

