<?php
function fromGet($param){
    if (isset($_GET[$param])){
        return $_GET[$param];
    }
}

function fromPost($param){
    if (isset($_POST[$param])){
        return $_POST[$param];
    }
}

  function toSession($key, $value){
    session_start();
    $_SESSION[$key] = $value;
  }

  function fromSession($param){
    $value = "";
    session_start();
    if (isset($_SESSION) && isset($_SESSION[$param])){
      $value = $_SESSION[$param];
      unset($_SESSION[$param]);
    }
    return $value;
  }
