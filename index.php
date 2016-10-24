  <?php
    include 'core/base.php';
    include 'core/route.php';
    include 'functions/func.php';
    include_once('twitteroauth/twitteroauth.php');
    require_once ('public/view/'.$module.'/'.$action.'.php');
