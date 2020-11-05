<?php
    class User{

      public $name;
      public $username;
      public $email;

      function addFriend($name){
        echo "$name" . "added a friend. <br>";
      }
      function postStatus($name){
        echo "$name" . "posted a status. <br>";
      }
    }
      $new = new User()
      echo $new->addFriend('Mary Grace Ragpala');
      echo "<br>";
      echo $new->postStatus('Mary Grace Ragpala');

 ?>
