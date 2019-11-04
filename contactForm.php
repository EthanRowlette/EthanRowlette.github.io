<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connect Now</title>
    <link rel="stylesheet" href="css/master.css">
    <?php include('php/master.php') ?>
  </head>
  <body class="darkMode">
    <div class="">
    <h1 class="banner">Have a Question?
        <br>Send me an E-mail directly
    </h1>
      <form class="contactForm" action="contactForm.php" method="post">
        <input type="text" name="name" placeholder="Full name.">
        <input type="text" name="mail" placeholder="E-mail address.">
        <input type="text" name="subject" placeholder="Subject.">
        <textarea name="message" rows="8" cols="80" placeholder="Your message goes here."></textarea>
        <button type="submit" name="submit">Send</button>


      </form>

    </div>

  </body>
</html>
