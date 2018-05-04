<?php
  include_once 'gpConfig.php';
  include_once 'USER.php';


  if(isset($_GET['code']))
  {
    $gclient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('location : '.filter_var($redirectURL, FILTER_SANITILE_URL));
  }

  if(isset($_SESSION['token']))
  {
    $gClient->setAccessToken($_SESSION['token']);
  }

  if ($gClient->$getAccessToken())
  {
    //get user profile data from google
    $gpUserProfile = $google_oauthv2->userinfo->get();
    //initialize user class
    $user = new user();
    //insert or update userdata to the database
    $gpUserData = array(
        'oauth_provider'=>'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);

    //Storing user data into session
    $_SESSION['userData'] = $userData;

    //Render facebook profile data
    if(!empty($userData))
    {
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>';
    }
    else
    {
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
  }
else
{
    $authUrl = $gClient->createAuthUrl();
    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt=""/></a>';
}
?>
    );
  }
?>
