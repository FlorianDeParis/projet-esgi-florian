<?php session_start(); ?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        

        <?php
            require "facebook-php-sdk-v4-4.0-dev\autoload.php";

            const APPID =   "1408688702781754";
            const APPSECRET = "9ddbf0a6c8e30b49e741cac62c082a4d";
            use Facebook\FacebookSession;
            use Facebook\FacebookRedirectLoginHelper;
            FacebookSession::setDefaultApplication(APPID,APPSECRET);
            
        ?>
    </head>
    <body>
      <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1408688702781754',
          xfbml      : true,
          version    : 'v2.3'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/fr_FR/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <header><p>TEST FBPROJECT</p></header>
    <div
        class="fb-like"
        data-share="true"
        data-width="450"
        data-show-faces="true">
    </div>
    <?php 
        $helper = new FacebookRedirectLoginHelper('http://localhost/');
        $loginUrl = $helper->getLoginUrl();
    ?>
    <a href="<?php echo $loginUrl;?>">Se connecter</a>
    </body>
</html>