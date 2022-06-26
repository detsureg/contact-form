<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="reference templates by Orson.io team" name="author">
  <meta content="Develope by detsu reg team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="shortcut icon" href="images/myicon.png">
  <title>Contact</title>  
  
  <!-- this is for offline framework bootstrap version 3.3 (xampp) -->
  <link href="./css/main.82cfd66e.css" rel="stylesheet">
  
  <!-- this is for online framework bootstrap version 5.5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
</head>

<body>
<!-- Add your content of header -->
<header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="./index.php" class="navbar-brand">Detsu Reg</a>
  </div>

  <nav class="sidebar">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./index.php" title="">
            <img class="img-responsive site-logo" alt="" src="./images/detsu-logo.svg">
            Detsu Reg
          </a>
        <p>Ide sederhana itu awal dari kreatifitas tanpa batas, maka mulailah dari ide sederhana itu.</p>
      </div>
      <ul class="nav">
        <li><a href="./index.php" title="">Home</a></li>
        <li><a href="./about.php" title="">About</a></li>
        <li><a href="./services.php" title="">Services</a></li>
        <li><a href="./contact.php" title="">Contact</a></li>
        <!-- <li><a href="./components.html" title="">Components</a></li> -->
      </ul>

      <nav class="nav-footer">
        <p class="nav-footer-social-buttons">
          <a class="fa-icon" hhref="https://www.instagram.com/" title="">
            <i class="fab fa-instagram"></i>
          </a>
          <!--
          <a class="fa-icon" hhref="https://dribbble.com/" title="">
            <i class="fa fa-dribbble"></i> 
          </a> 
          <a class="fa-icon" hhref="https://twitter.com/" title="">
            <i class="fa fa-twitter"></i> -->
          <a class="fa-icon" hhref="https://youtube.com/" title="">
            <i class="fab fa-youtube"></i>
          </a>
          <a class="fa-icon" hhref="https://eye.com/" title="">
            <i class="fa fa-eye"> </i></a>
          <a>
          <?php  
        include("database/db_conection.php");  
        $tampil_pesan_query="select * from counter";//select query for viewing counter.  
        $run=mysqli_query($dbcon,$tampil_pesan_query);//here run the sql query.
        while($row = mysqli_fetch_assoc($run))
        {
        $current_count = $row['counts'];
        $new_count = $current_count + 1;
        $update_count = mysqli_query($dbcon, "UPDATE counter SET counts = '".$new_count."'");
        echo "".$new_count;
        }
           ?></a>
        </p>
        <p>© 2017 | Created by detsu <!--<a href="http://www.mashup-template.com/" title="Create website with free html template">Detsu Reg</a>--> <!-- /<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a> --> </p>
      </nav>  
    </div> 
  </nav>
</header>
  
<main class="" id="main-collapse">
<div class="row">
  <div class="col-xs-12">
    <div class="section-container-spacer">
      <h1>Contact</h1>
      <p>Untuk teman-teman yang ingin memberi masukan, saran ataupun kritik silahkan langsung saja isi ya form di bawah ini <br>
          atau bisa langsung menghubungi contact person saya.</p>
    </div>
    <div class="section-container-spacer">
       <form role="form" method="post" action="contact.php">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" name="pesan" placeholder="Enter your message"></textarea>
              </div>
              <input class="btn btn-primary btn-md" type="submit" value="Kirim" name="register">
            </div>
            <div class="col-md-6">
              <ul class="list-unstyled address-container">
                <li>
                   <a class="fa-icon" href="https://www.youtube.com/channel/UCBT5u8Lm2lEkS9CdAAzTS7A?sub=confirmation=1" >
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                  </a>
                  Detsu Reg
                </li>
                <li>
                 <a class="fa-icon" href="https://www.instagram.com/detsuboy" title="">
                    <i  class="fab fa-instagram" aria-hidden="true"></i>
                  </a>
                  detsuboy
                </li>
                <li>
                  <a class="fa-icon" href="https://www.tiktok.com/@detsu_game">
                    <i class="fab fa-tiktok" aria-hidden="true"></i>
                  </a>
                  detsu_game
                </li>
              </ul>
              <h3>Follow me on social networks</h3>
              <a href="https://www.linkedin.com/in/detsu-reg-22a081116" title="" class="fa-icon">
                <i class="fab fa-linkedin"></i>
              </a>
               <a href="https://twitter.com/DetsuBoy" title="" class="fa-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://dribbble.com/DetsuReg" title="" class="fa-icon">
                <i class="fab fa-dribbble"></i>
              </a>
              <a href="https://behance.net/detsureg" title="" class="fa-icon">
                <i class="fab fa-behance"></i>
              </a>
              <a href="https://id.pinterest.com/detsureg" title="" class="fa-icon">
                <i class="fab fa-pinterest-p"></i>
              </a>
              <a href="https://github.com/detsureg" title="" class="fa-icon">
                <i class="fab fa-github"></i>
              </a>
              <a href="https://stackoverflow.com/users/14031800/detsu-reg" title="" class="fa-icon">
                <i class="fab fa-stack-overflow"></i>
              </a>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>
</main>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 
<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script> -->
  
<script type="text/javascript" src="js/main.85741bff.js"></script></body>

</html>

<?php    
include("./database/db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $tamu_email=$_POST['email'];//here getting result from the post array after submitting the form.  
    $tamu_subject=$_POST['subject'];//same  
    $tamu_pesan=$_POST['pesan'];//same  
  
    if($tamu_email=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the email')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($tamu_subject=='')  
    {  
        echo"<script>alert('Please enter the subject')</script>";  
exit();  
    }  
  
    if($tamu_pesan=='')  
    {  
        echo"<script>alert('Please enter the message')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    /*$check_email_query="select * from tamu WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    } */ 
//insert the user into the database.  
    $insert_tamu="insert into tamu (email,subject,pesan) VALUE ('$tamu_email','$tamu_subject','$tamu_pesan')";  
    if(mysqli_query($dbcon,$insert_tamu))  
    {  
        echo"<script>alert('Thank you ! your message has been sent')</script>";  
    }
}  
  
?>  
