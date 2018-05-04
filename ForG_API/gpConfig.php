<?php
  session_start();
  //include google client library
  include_once 'src/Google_Client.php';
  include_once 'src/contrib/Google_Oauth2Service.php';

  $clientId ='38888359010-kfj00qj82lvk6rnvi2q7mol51s5dn49f.apps.googleusercontent.com';
  $clientSecret ='D9mFWDXQmTsag5Oq0CuoZAcY';
  $redirectURL ='http://localhost:8080/MyPhpprograms/eventManager/home.php';

  //call google API
  $gClient =  new Google_Client();
  $gClient->setApplicationName('Login to E-met');
  $gClient->setClientId($clientId);
  $gClient->setClientSecret($clientSecret);
  $gClient->setRedirectUri($redirectURL);

  $google_oauthV2 = new Google_Oauth2Service($gClient);
?>
