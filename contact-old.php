<?php include 'assets/contact-submit.php'; ?>
<!DOCTYPE html>

<html lang="en-US">

<head>
	<title> Contact Me </title>
	<meta name="description" content="Contact Alex Brenon" />
<?php include 'header.php'; ?>

<div class="totable" id="contacttable">
<div class="torow">
<div class="contact" ><h2 id="cm"> Contact Me </h2><div aria-live="polite" role="alert"> 
<?php if(isset($_POST['email']) && isset($_POST['url'])) { echo(form_reply()); } ?></div>
</div>
<div class="contact" id="contact">
	<form name="contact" method="post" action="" autocomplete="on">
	<label> Name <br/>
	  <input  type="text" name="name" autocomplete="name" maxlength="50" style="width:100%;">
	</label><br/>
	 <label>Email Address (required) <br/>
	<input  type="text" name="email" autocomplete="email" maxlength="80" style="width:100%;" required>
	</label><br/>
	<label> Subject <br/>
	  <input  type="text" name="subject" maxlength="80" style="width:100%;">
	</label><br/>
	<label>Body <br/>
	<textarea  name="comments" maxlength="1000" style="width:100%;" rows="10"></textarea>
	</label><br/>
	<p class="anti"><label>Leave this empty: <input type="text" name="url" /></label></p>
	<input type="submit" value="Submit">
	</form>
</div>
</div></div>
<div><p style="text-align:right;"><a href="#name"><i class="fas fa-angle-double-up"></i> Back to Top </a>
<br/> &copy; Alex Brenon, 2018 </p></div>
</body>

</html>