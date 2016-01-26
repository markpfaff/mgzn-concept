<?php $page = basename($_SERVER['SCRIPT_NAME']);
$title = 'MGZN | Contact';
include("includes/header.php"); 

?>
    
      <section class="contact">
      <h1 class="no-display">Contact</h1>
        <form action="formhandler.php" method="post" id="form">
        <fieldset>
        
        <legend>Contact</legend>
        <label>Your Name</label>
        <input type="text" name="name" id="name">
        <label>Email</label>
        <input type="email" name="email" id="email">
        <label>How did you hear out about MGZN?</label>
        <input type="text" name="text" id="text">
        <label class="comments">Your Message</label>
        <textarea name="comments" id="comments" rows="10"></textarea>
        
        <input type="submit" id="submit" value="Send">
        </fieldset>
        </form>
      </section>

       
    <?php include("includes/footer.php"); ?>

  </body>
</html>
