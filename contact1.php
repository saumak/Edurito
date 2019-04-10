<?php
include('connections.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Order</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src='js/device.min.js'></script>
	<style>
label {
  color: black;
  font-size: 20px;
  font-family: georgia;
  background-color: inherit;

    /* padding-bottom: 10px;
    padding-top: 20px;
    margin-bottom: 10px; */

}
main,body{
   font-family: "georgia", sans-serif;
   background-color: #FFFFFF;
   background: url(https://petecanalichio.com/wp-content/uploads/parallax-61.jpg) no-repeat center  fixed;
   background-size: cover;
   z-index: -1;
 }
 /*h2 em,h2{
   padding:10px 5px 15px 20px;
   text-align: center;
   font-size: 60px;
   line-height: 30px;
   color: #FDFEFE;
 }*/
</style>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div class="stuck_container">
                <div class="toggle-menu-container">
    <nav class="nav">
      <div class="nav_title"></div>
      <a class="sf-menu-toggle fa fa-bars"></a>
      <ul class="sf-menu">
        <li class="active">
          <a href="index.php">Home</a>
        </li>
        <li> 
          <a href="coursecat.html">Course Catalogue</a>
        </li>
        <li>
          <a href="surprise.php">Surprise Me</a>
        </li>
        <li>
          <a href="login.html">Log in</a>
        </li>
        <li>
          <a href="sign_up.php">Sign up</a>
        </li>
        <li>
          <a href="contact.php">Contact Us</a>
        </li>
        <li>
          <a href="javascript:void(0)" onclick="w3_close()">Close</a>
        </li>
     </ul>
    </nav>
  </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>Contact Us</em></h2>
                <div class="row box-3">
                    <div class="grid_5">
                        <h2>Contact Form</h2>
                        <form id="contact-form" class='contact-form'>
                            <div class="contact-form-loader"></div>
                            <fieldset>
                                <label class="name">
                                    Your Name:
                                    <input type="text" name="name" placeholder="" value=""
                                           data-constraints="@Required @JustLetters"/>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid name.</span>
                                </label>
                
                                <label class="email">
                                    Your E-mail:
                                    <input type="text" name="email" placeholder="ex) one.inc@eruditolearn.com" value=""
                                           data-constraints="@Required @Email"/>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid email.</span>
                                </label>
                
                                <label class="Subject">
                                    Phone number:
                                    <input type="text" name="phone" placeholder="ex) 000-000-0000" value=""
                                           data-constraints="@Required"/>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid phone.</span>
                                </label>
                        
                                <label class="message">
                                    Message:
                                    <textarea name="message" placeholder="Please provide your message here."
                                              data-constraints='@Required @Length(min=1,max=999999)'></textarea>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*The message is empty.</span>
                                </label>
                
                                <div class="btn-wr">
                                    <a class="" href="order.html">Clear</a>
                                    <a class="" href="#" data-type="submit">Submit</a>
                                </div>
                            </fieldset>
                            <div class="modal fade response-message">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">
                                                &times;
                                            </button>
                                            <h4 class="modal-title">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            You message has been sent! We will be in touch soon.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>    
                    <div class="preffix_1 grid_6">
                        <h2>Contacts Information</h2>
                        <p>Once the course has been chosen, the lessons completed will be tracked along with the remaining time they have to complete the course. This site will also create a success rate, which will tell the user, about their progress report.</p>
                        <p>When the subjects of school/university exceed the level of knowledge a student has, they mostly turn to an online site to learn about the topic. But, with the time and money constraint, most aren’t in the position to dedicate their time to online learning. So, we have come up with an idea of creating a site, which will take their time constraint into consideration and suggests a course based on it.</p>
                        <address class="address-2">
                            <div class="address_container"><p>Erudito Inc. 107 S Indiana Ave, Bloomington, IN 47405</p></div>
                            <dl>
                                <dt>Telphone:</dt> <dd>+1 (812) 878-3333</dd><br>
                                <dt>E-mail:</dt> <dd><a href="mailto:prkumoda@iu.edu">one.inc@eruditolearn.com</a></dd>
                            </dl>                        
                        </address>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="container">
            <ul class="socials">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-tumblr"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Erudito Inc. Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

</script>
<script src="js/script.js"></script>
</body>
</html>