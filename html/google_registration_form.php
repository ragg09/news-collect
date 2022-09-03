<!DOCTYPE html>
<html>
<head>
	<title>News Collect | Registration</title>
	
	<link rel="stylesheet" type="text/css" href="../css/general.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

  	<style type="text/css">
  		.nav #getNews{
  			visibility: hidden;
  		}

  		.nav #search{
  			visibility: hidden;
  		}
  		#Myselect{
  			visibility: hidden;
  		}
  	</style>
</head>

<body style="background-color: #141515;">
	<?php
		include("nav.php");
	?>

	<div class="registration_div">
		<center><h2>Welcome Journalist!</h2><h3>Please register your account first.</h3></center>

		<div class="registration_div_img">
			<center><img src="<?php echo $_SESSION['picture']; ?>"></center>
			
		</div>

		<form action='google_registration.php' method='post'>
			<table>
				<tr>
					<td id="tdleft"><p>Email: </p></td>
					<td id="tdright"><input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" disabled></td>
				</tr>

				<tr>
					<td id="tdleft"><p>First Name:</p></td>
					<td id="tdright"><input type="text" name="fname" value="<?php echo $_SESSION['given_name']; ?>" disabled></td>
				</tr>

				<tr>
					<td id="tdleft"><p>Last Name:</p></td>
					<td id="tdright"><input type="text" name="lname" value="<?php echo $_SESSION['family_name']; ?>" disabled></td>
				</tr>

				<tr>
					<td id="tdleft"><p>Phone:</p></td>
					<td id="tdright"><input type="text" name="phone" pattern="[0-9]+" title="enter you phone number" maxlength="11" minlength="11" required></td>
				</tr>

			</table>

			<input type="checkbox" id="agree">
				<label>I hereby accept the following terms and conditions:<br> Any information from this account will hold accountable for publishing report if the report is misleading and/or fake.</label>

				<input type="submit" name="submit" id="mybutton" disabled="" style="color: black;">
		</form>
	</div>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#agree').click(function () {
	        //check if checkbox is checked
	        if ($(this).is(':checked')) {

	            $('#mybutton').removeAttr('disabled'); //enable input

	        } else {
	            $('#mybutton').attr('disabled', true); //disable input
	        }
    	});
	});
</script>
</html>