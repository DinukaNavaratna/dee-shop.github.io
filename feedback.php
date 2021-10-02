<?php
    include_once 'php/sessions.php';
    include_once 'php/home.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Dee Store | FeedBack</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="bot/css/chat.css">

</head>
<body>
      <?php include_once 'php/header.php'; ?><br><br/>

      <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div><br>
              <h1>Feedback Area</h>
            </div>
          </div>
          <br><br><br>
          <div class="col-md-6">
           
                    <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

              <img src="img/bg-img/bg-7.jpg" frameborder="0" style="border:0" allowfullscreen >
            
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="php/feedbackPHP.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="feed_fname" type="text" class="form-control" id="feed_fname" placeholder="Your First Name..." required=""><br>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="feed_lname" type="text" class="form-control" id="feed_lname" placeholder="Your Last Name..." required=""><br>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="feed_email" type="text" class="form-control" id="feed_email" placeholder="Your Email" required=""><br>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="feed_msg" rows="6" class="form-control" id="feed_msg" placeholder="Your Feedback...." required=""></textarea><br>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                        <style>
                        .button {
                            background-color: #fec2b0;
                                                    border: none;
                            color: white;
                            padding: 15px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            margin: 4px 2px;
                            cursor: pointer;
                                }
                                </style>

                      <fieldset>
                        <button type="submit" name="submit" id="submit" class="button">Send Feedback</button><br>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <div class="share">
                      
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>

<?php
 include_once 'php/footer.php';
?>
</body>
</html>