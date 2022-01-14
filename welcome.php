<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<style>
  div.right{
    float:right;
    width:50%;
  }
  .left{
    float:left;
    width:50%;
  }
  header{
    height:252px;
    background-image:url(kai.png);
  }
  h1{
    text-indent: -999999;
    width:1912px;
    height:239px;
    margin:0px;
  }
  a.a1{
    color:#E85F00;
    font-size:25px;
  }

  footer{
    position: relative;
    top: 32px;
    padding:7px 0px 0px 20px;
    clear:both;
    color: #E4CF35;
    background-color: #A2694C;
    height: 22px;
  }
  nav{
    clear:both;
    color: #E4CF35;
    background-color: #A2694C;
    height: 22px;
  }
  nav li{
    display:inline;
    margin-left:230px;
  }
  nav li a{
    color: #FBB31A;
  }
  nav li a:hover{
    color: yellow;
  }
  aside{
    width:740px;
    float:left;
    padding:0px 0px 0px 20px;
    font-size:20px;
    color:red;
    padding-left:200px;
  }
  aside section a{
    display: block;
    padding:10px;
  }
  aside section a:hover{
    color:#790000;
    background-color:#efefef;
  }
  hgroup{
    padding-top: 13px;
    color:#E85F00;

  }
  figcpation{
    color:#E85F00;
    font-size:25px;
    text-align:left;
  }
  article{
    clear:both;
    overflow:auto;
    width:100%;

  }
  section.z{
    float:left;
    width:955px;
  }
  body {background-image: url(wback.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        }

</style>
<header>
  <center>
    <?php echo "<font color=#F5E32F size=7>Hello,welcome to KAIRauN.com, " . $_SESSION['username'] . "</font>"; ?>
    <br></br><br></br><br></br><br></br><br></br>
    <a href="logout.php">Logout</a>
  </center>
  <nav>
    <ul>
      <li><a href="https://www.facebook.com/profile.php?id=100003609783047">My facebook</a></li>
      <li><a href="https://www.instagram.com/">My instegrame</a></li>
      <li><a href="https://twitter.com/kai_raun">My twitter</a></li>
      <li><a href="https://www.youtube.com/channel/UCl49Tsn_mLCycHRMOFWB-_Q/featured">My youtube</a></li>
      <li><a href="https://dashboard.twitch.tv/u/kairaun/home">My twitch</a></li>
    </ul>
  </nav>
</header>
<body>
</body>
<br></br>
<div class="main-content">
<div class="left">
  <section class="z">
    <article>
      <img src="999.PNG" alt="Me & Meme" height="200" width="350" style="float:left;margin:15px">
      <hgroup>
        <font color=#F5F10F size="7">Hello!</font>
        <br></br>
        <font size="5">My name is Wu Kai Yin,from Changhua,</br>studing at NTUT of CSIE,my hobby is</br> playing video games and watching anime,</br>hope everyone can get good grades in this class.</font>
      </hgroup>
      <br></br>
      <figcpation>Me & Meme</figcpation>
    </article>
    <br></br>
    <br></br>

    <font color=#FF0000 size="6">Wer mit Ungeheuern kämpft, mag zusehn, dass er nicht dabei zum Ungeheuer wird. Und wenn du lange in einen Abgrund blickst, </br>blickt der Abgrund auch in dich hinein. </br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;--- "Jenseits von Gut und Böse"</font>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
  </section>
</div>
<div class="right">
<aside>
  <section class="My favorite">
    <font color=#F5F10F size="7">My favorite</font>
    <br></br>
    <a class="a1" href="http://www.saliya.com.tw/"><b>Restaurant</b></a>
    <a class="a1" href="https://www.ea.com/zh-tw/games/apex-legends/about"><b>Game</b></a>
    <a class="a1" href="https://www.youtube.com/watch?v=PcA3BIzKxiw"><b>Music</b></a>
  </section>
  <br></br>
  <br></br>
  <font color=#F5F10F size="7">About</font>
  <br></br>
  <section class="about">
    <a class="a1" href="mailto:aaa30985162@gmail.com">aaa30985162@gmail.com</a>
    <a class="a1" href="tel:+886900245775">0900245775</a>
  </section>
</aside>
</div>
</div>
<footer>
  Copyright © 2021 KAIRauN
</footer>
</html>
