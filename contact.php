<?php include 'assets/contact-submit.php'; ?>

<?php
$titl = "Contact Me";
$desc = "Contact Alex Brenon";
include 'header.php'; ?>

<h2> Contact Me </h2>
<div aria-live="polite" role="alert">
<?php if(isset($_POST['email']) && isset($_POST['url'])) { echo(form_reply()); } ?></div>
<div id="contact" role="form">
<form name="contact" method="post" action="" autocomplete="on">
<label> Name <br/>
  <input  type="text" name="name" autocomplete="name" maxlength="50" style="width:100%;">
</label><br/>
 <label>Email Address (required) <br/>
<input  type="text" name="email" autocomplete="email" maxlength="80" style="width:100%;" required>
</label><br/>
<label> Subject <br/>
  <input  type="text" name="subject" maxlength="80" style="width:100%; ">
</label><br/>
<label>Body <br/>
<textarea  name="comments" maxlength="1000" style="width:100%; " rows="7"></textarea>
</label><br/>
<p class="anti"><label>Leave this empty: <input type="text" name="url" /></label></p>
<input type="submit" value="Submit">
</form>
</div>
<?php include 'footer.php'; ?>