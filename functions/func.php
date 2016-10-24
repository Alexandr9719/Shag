<?php
    function Insert()
    {
      if(isset($_POST['submit'])){
        $current_date = date('Y-m-d H:i:s');
        $stmt = DB()->prepare("INSERT INTO news.news (title, description, text, href, created_at, updated_at, img, author)
        VALUES (:Title, :Description, :Article, :Link, :Created, :Updated, :LinkIMG, :Author)");
        $stmt->bindParam(':Title', $_POST['title']);
        $stmt->bindParam(':Description', $_POST['description']);
        $stmt->bindParam(':Article', $_POST['text']);
        $stmt->bindParam(':Link', $_POST['href_news']);
        $stmt->bindParam(':Created', $current_date);
        $stmt->bindParam(':Updated', $current_date);
        $stmt->bindParam(':LinkIMG', $_POST['href_img']);
        $stmt->bindParam(':Author', $_POST['author']);
        $stmt->execute();
        return true;
      }
    }
    function Insert_Update($id)
    {
      if (isset($_POST['update'])) {
        $update_time = date('Y-m-d H:i:s');
        $stmt=DB()->prepare("UPDATE news.news SET title = :Title, description = :Description, text = :Article,
          href = :Link, updated_at = :Updated, img = :LinkIMG, author = :Author WHERE id = ".$id);
        $stmt->bindParam(':Title', $_POST['title']);
        $stmt->bindParam(':Description', $_POST['description']);
        $stmt->bindParam(':Article', $_POST['text']);
        $stmt->bindParam(':Link', $_POST['href_news']);
        $stmt->bindParam(':Updated', $update_time);
        $stmt->bindParam(':LinkIMG', $_POST['href_img']);
        $stmt->bindParam(':Author', $_POST['author']);
        $stmt->execute();
        header("Location: /admin/index");
        return true;
      }
    }
    function Get()
    {
      $stmt = DB()->prepare("SELECT * FROM news.news");
      $stmt->execute();
      $db = $stmt->FetchAll(PDO::FETCH_ASSOC);
      return $db;
    }
    function GetElementById($id)
    {
      /*$url = parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH);
      $tr = explode("=", $url);
      $id = $tr[1];*/
      $stmt=DB()->prepare("SELECT * FROM news.news WHERE id = ".$id." LIMIT 1");
      $stmt->execute();
      $db=$stmt->FetchAll(PDO::FETCH_ASSOC);
      return $db;
    }
    function DeleteElementById($id) {
      $stmt=DB()->prepare("DELETE FROM news.news WHERE id = ".$id);
      $stmt->execute();
      header("Location: /admin/index");
      return true;
    }
    function Twitter1()
    {
      $settings = array('oauth_access_token' => "1471746978-lIl6pRmOUGZnSQDJ9nBKm6JdFVqqIgGRn0g5APj",
        'oauth_access_token_secret' => "NbhD9Iu70yoefzQTr8uokzYhvOsGKTedSaDHpBX1aENJ1",
        'consumer_key' => "CKVNkysyJIscL86unWFol5AMN",
        'consumer_secret' => "019LCACyDVeZx4kpXBEEkAAgqj2H5nDOYr1YaU05xdoarM96DA");
      $url = 'https://api.twitter.com/1.1/followers/ids.json';
      $getfield = '?screen_name=_Alexxxandr';
      $requestMethod = 'GET';
      $twitter = new TwitterAPIExchange($settings);
      $r = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();
      return $r;
    }
    function Twitter2()
    {
      $twitter_customer_key           = 'CKVNkysyJIscL86unWFol5AMN';
      $twitter_customer_secret        = '019LCACyDVeZx4kpXBEEkAAgqj2H5nDOYr1YaU05xdoarM96DA';
      $twitter_access_token           = '1471746978-lIl6pRmOUGZnSQDJ9nBKm6JdFVqqIgGRn0g5APj';
      $twitter_access_token_secret    = 'NbhD9Iu70yoefzQTr8uokzYhvOsGKTedSaDHpBX1aENJ1';

      $connection = new TwitterOAuth($twitter_customer_key, $twitter_customer_secret, $twitter_access_token, $twitter_access_token_secret);

      $my_tweets = $connection->get('statuses/user_timeline', array('screen_name' => 'toptweets', 'count' => 10));

      /*echo '<div class="sidebar-module">';
      if(isset($my_tweets->errors))
      {
          echo 'Error :'. $my_tweets->errors[0]->code. ' - '. $my_tweets->errors[0]->message;
      }else{
          echo makeClickableLinks($my_tweets[0]->text);
      }
      echo '</div>';*/
        foreach ($my_tweets as $tweet) {
           echo '<div class="sidebar-module">';
           echo makeClickableLinks($tweet->text);
           echo '<br>';
           echo '</div>';
        }

    }
    function makeClickableLinks($s) {
  return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a target="blank" rel="nofollow" href="$1" target="_blank">$1</a>', $s);
}
