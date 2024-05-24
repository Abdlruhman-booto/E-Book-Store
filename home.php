

<?php
session_start();
if(isset($_POST["logout"])){

  session_destroy();
  setcookie(session_name(), "", time()-3600, "/");
  header('Location:login.php');
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Book Store</title>
    <link rel="stylesheet" href="css/book_style.css"/>
    
</head>
<body>

<header>
        <h1  class="welcome" id="welcome"> 
        Welcome, <span class="name"><?php 
        if (isset($_SESSION['vaild'])) echo $_SESSION["vaild"];
        else {
          header("Location: login.php");
          exit();
        }

        ?></span>
        </h1>

       
    <form method='post' action="/proj/home.php">
    <h1><span class="store" id="store">E-Book Store</span></h1>
    <div class="logout_container">
      <h2 class="name"><?php echo $_SESSION["vaild"]?></h2>
      <button type="submit" class ="logout" name="logout">Logout</button>
    </div>
    
            </form>
           

          
    <ul class="nav">
      <li><a href="about.html">About Our E-Book Store</a></li>
      <li><a href="benefits.html">E-Books Benefits</a></li>
      <li><a href="help.html">Help Servies</a></li>
      
    </ul>
    </header>
    

    <hr>
    <section class="slide">
      <section class="imgs1" style="padding-left: 13%;">
        <img src="images/Box_-_Gift_Cards_Mail_Gray_BG.png" alt="page1"/>
        <img src="images/Box_-_Goods_and_Gifts_2021.png" alt="page2"/>
      </section>
      <!-- <hr> -->
      <section class="imgs2">
        <img src="images/Box_-_Hours_of_Operation.png" alt="page3"/>
        <img src="images/Box_-_SFEC_BW_bold.png" alt="page4"/>
      </section> 
      <section class="imgs3">
        <img src="images/Box_Ticketed.png" alt="page5"/>
        <img src="images/Box-NewsletterArchive.png" alt="page6"/>
      </section> 
      <section class="imgs4">
        <img src="images/Box_-_SFEC_BW_bold.png" alt="page7"/>
        <img src="images/Box_-_Gift_Cards_Mail_Gray_BG.png" alt="page8"/>
      </section> 
    </section>
    <hr>
   
    
    <div>
        <div>

          <article>
              <h2>Adventure Books</h2>
              <br>
              <a href="Books pages/adventure/Adventures.HTML"> <img src="images/images (1).jpg" alt="ad"></a>
          </article>
          <br>
          <article>
              <h2>Sports Books</h2>
              <br>
              <a href="Books pages/sports/Sports.HTML"> <img src="images/download.jpg" alt="sp"></a>
          </article>
          <br>
          <article>
              <h2>Chess Books</h2>
              <br>
              <a href="Books pages/chess/Page.HTML"> <img src="images/download (1).jpg" alt="ck"></a>
          </article>
          <br>
          <article>
              <h2>Cooking Books</h2>
              <br>
              <a href="Books pages/cook/Page.HTML"> <img src="images/cooking.jpg" alt="ad" ></a>
          </article>
          <br>
          <article>
              <h2>Scientific Fiction Books</h2>
              <br>
              <a href="Books pages/Science Fiction/Science Fiction.HTML"> <img src="images/sciencefiction.png" alt="sc" ></a>
          </article>
          <br>
          <article>
              <h2>Kids Books</h2>
              <br>
              <a href="Books pages/Kids/Kids.HTML"> <img src="images/kids.jpg" alt="ki"></a>
          </article>
          <br>
          <article>
              <h2>History Books</h2>
              <br>
              <a href="Books pages/History/History.HTML"> <img src="images/download (2).jpg" alt="hi"></a>
          </article>
          <br>
          <article>
              <h2>Geography Books</h2>
              <br>
              <a href="Books pages/geography/Page.HTML"> <img src="images/download (3).jpg" alt="ge"></a>
              <br>
          </article>

        </div>
        <br><br><br>





    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>About Us</h4>
            <ul>
              <li><a href="about.html">Tap here</a></li>

            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="help.html">Tap here</a></li>
              
            </ul>
          </div>
          <div class="footer-col">
            <h4>E-Book benefits</h4>
            <ul>
              <li><a href="benefits.html">Tap here</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
              <a href="https://facebook.com" target="_blank"><img src="images/2021_Facebook_icon.svg.png"></a>
              <a href="https://instgram.com" target="_blank"><img src="images/3955024.png"></a>
              <a href="https://telegram.com" target="_blank"><img src="images/4254867.png"></a>
              <a href="https://linkedin.com" target="_blank"><img src="images/702300.png"></a>
            
          </div>
        </div>
      </div>
      <p>Copyright © Abdelrahman El-Kassas and his team 2024</p>
   </footer>
    </div>
   <script src="JS/homee.js"></script>

   



    
</body>
    
    
</html>