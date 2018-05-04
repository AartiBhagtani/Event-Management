<?php
  include_once 'gpconfig.php';

  //unset token and userdata from Session
  unset($_SESSION['token']);
  unset($_SESSION['userData']);

  //reset oauth access token
  $gClient->revokeToken();

    //destroy entire session
    session_destroy();

    //redirect to homepage
    header("Location:index.php");

?>
