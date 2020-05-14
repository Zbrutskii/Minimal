<?php

    $message = array(
        'Name: ' . (string) filter_var( $_POST['your_name'], FILTER_SANITIZE_STRING ),
        'E-mail: ' . (string) filter_var( $_POST['your_email'], FILTER_SANITIZE_EMAIL ),
        'Message: ' . (string) filter_var( $_POST['your_message'], FILTER_SANITIZE_STRING )
    );
    $to = 'art.october@gmail.com';
    $subject = '[Minimal Form] New message from the website';
    $message = implode( "\r\n", $message );
    $headers = 'From: sales@min.studio' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail( $to, $subject, $message, $headers );
   // setcookie( "mail_sent", "1", time() + 30, "/", "min.studio" );
  //  header( "Location: https://min.studio" );
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- THIRD PARTIES -->    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158920153-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158920153-1');
</script>

<!-- Full Story -->
<script>
    window['_fs_debug'] = false;
    window['_fs_host'] = 'fullstory.com';
    window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
    window['_fs_org'] = 'V341V';
    window['_fs_namespace'] = 'FS';
    (function(m,n,e,t,l,o,g,y){
        if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
        g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
        o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;
        y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
        g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
        g.anonymize=function(){g.identify(!!0)};
        g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
        g.log = function(a,b){g("log",[a,b])};
        g.consent=function(a){g("consent",!arguments.length||a)};
        g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
        g.clearUserCookie=function(){};
        g._w={};y='XMLHttpRequest';g._w[y]=m[y];y='fetch';g._w[y]=m[y];
        if(m[y])m[y]=function(){return g._w[y].apply(this,arguments)};
        g._v="1.2.0";
    })(window,document,window['_fs_namespace'],'script','user');
    </script>
<!-- END THIRD PARTIES -->    


    <title>Thank you. The Minimal. Complex things made simple – UI/UX, Product &amp; Web Design</title>  
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" viewport-fit=cover>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="supported-color-schemes" content="dark light">
    <meta name="color-scheme" content="dark light">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">

    <meta property="og:image:width" content="279">
    <meta property="og:image:height" content="279">
    <meta property="og:description" content="Complex things made simple. UI/UX, Product &amp; Web Design">
    <meta property="og:title" content="The Minimal">
    <meta property="og:url" content="https://min.studio">
    <meta property="og:image" content="https://min.studio/assets/images/og-image.jpg">

    <link rel="apple-touch-icon" sizes="180x180" href="https://min.studio/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://min.studio/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://min.studio/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://min.studio/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="https://min.studio/assets/favicon/safari-pinned-tab.svg" color="#595959">
    <link rel="shortcut icon" href="https://min.studio/assets/favicon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="The Minimal">
    <meta name="application-name" content="The Minimal">
    <meta name="msapplication-TileColor" content="#000007">
    <meta name="msapplication-config" content="https://min.studio/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="The Minimal Studio — is a design studio based in Kiev, Ukraine.">

    <link href="../css/main.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/dark-mode-toggle.js" type="module"></script>
    <script src="js/script.js" type="module"></script>

</head>
<body>

<!-- ----------------------------------------------------------------------
     Main content
     ---------------------------------------------------------------------- -->

    <div class="main-content">
        <div class="grid-container">


<!-- Title box
     ---------------------------------------------------------------------- -->

            <div class="title-box" style="padding-top: 20% ;">
               <h1>Thank you!</h1>
               <p>We'll message you back ASAP. You will be redirected <a href="/contact">back</a> in 9 seconds.</p>
            </div>

<!--Redirect-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="/contact");}
window.setTimeout("changeurl();",9000);
</script>

</body>
</html>