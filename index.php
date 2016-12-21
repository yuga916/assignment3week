<?php
$time = date('H');

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cafe Diary</title>
  <link rel="stylesheet" href="webroot/css/style.css">
  <!-- fontawesome -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- w3.css -->
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue-grey.css">
</head>
<body>
  <div class="header">
    <div class="header-left"><i class="fa fa-coffee" aria-hidden="true"></i>&nbsp;Cafe Diary</div>
    <div class="header-right">
        
          <p>coffee calendar</p>
        
    </div>
  </div>

  <div class="main">
    <div class="sidebar">
    <?php  if (6 <= $time && $time <= 11) : // 6時～11時の時間帯のとき ?>
     <p class="ana">おはようございます
     <?php  elseif (12 <= $time && $time <= 18) : // 12時〜20時の時間帯のとき ?>
     <p class="ana">こんにちは
     <?php  else : // それ以外の時間帯のとき ?>
     <p class="ana">こんばんは
     <?php endif; ?>
      、ゲストさん</p>
      <br>
      <div class="w3-card-2 w3-round w3-white" style="box-sizing: none;">
              <div class="w3-container">
               <h4 class="w3-center">My Profile</h4>
               <p class="w3-center"><img src="images/profile.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
               <hr>
               <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>YUGA</p>
               <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>TOKYO, JAPAN</p>
              </div>
        </div>
       
      <h2>過去の投稿</h2>

      <ul>
        <li><?php echo date("Y年m月"); ?>の投稿</li>
        <li><?php echo date( "Y年m月" , strtotime('-1 month' , time()) ) ;?>の投稿</li>
        <li><?php echo date( "Y年m月" , strtotime('-2 month' , time()) ) ;?>の投稿</li>
      </ul>
      
    </div>
    
    <div class="contents">
      <div class="contents-item">
        <h1>Spanish Chorizo, Egg and Fotina Cheese on Croissant Bun</h1>
        <img src="webroot/icon/coffee.png"><h2>starbucks</h2>
        <p>2016年12月20日</p>
      </div>
      
      <div class="contents-item">
        <h1>こんにちは</h1>
        <p>2016年12月20日</p>
      </div>

      <div class="contents-item">
        <h1>こんにちは</h1>
        <p>2016年12月20日</p>
      </div>

      <div class="contents-item">
        <h1>こんにちは</h1>
        <p>2016年12月20日</p>
      </div>

      <div class="contents-item">
        <h1>こんにちは</h1>
        <p>2016年12月20日</p>
      </div>
    </div>

  <div class="footer">
    <div class="footer-top">
      <ul>
        <li>cafestudyとは</li>
        <li>calendar</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    
  </div>
</body>
</html>