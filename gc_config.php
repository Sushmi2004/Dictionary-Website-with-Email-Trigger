<?php 
  require "google-api-php-client/vendor/autoload.php";
  
  $clientId="1000627861462-mpahm93fluegtfbf84e8nmchud81tqet.apps.googleusercontent.com";
  $clientSecret="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";
  $redirectURI="http://localhost/bit/login.php";
  
  $client=new Google_Client();
  $client->setClientId($clientId);
  $client->setClientSecret($clientSecret);
  $client->setRedirectURI($redirectURI);
  $client->addScope("email");
  $client->addScope("profile");
?>