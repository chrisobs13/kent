<?php include ("head.php"); ?> 

<?php include ("masthead.php"); ?> 

        
        <div id="content">
        
        <h1 class="center tagline" >Contact Us</h1>
        <form id="contact" method="post"action="mailer.php">
        <label>Name*</label><br/>
        <p/>
        <input class="required" type="text" size="30" name="name"/>
        <p/>
        <label>Email*</label><br/>
        <input class="required email email" type="text" size="30" name="email"/>
        <p/>
        <label>Phone</label><br/>
        <input type="text" size="30" name="phone"/>
        
        <p/>
        <p/>
        <input id="subject" type="text" size="30" name="subject" autocomplete="off"/>
        
        <p/>
        
        
        
        <label>Message*</label><br/>
        <textarea class="required" name="message" rows="4" cols="30" ></textarea>
        <p/>
        <input id="send" name="submit" type="submit" value="Send"/>
        
        </form>

        
  <?php include ("footer.php"); ?> 
      
