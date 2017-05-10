<?php
 require("besttutorindex.php");
 ?>
 <?php
$nameerr = $phonenumbererr = $addresserr = $commentserr = $emailerr = $ageerr = $subjectserr = $numbererr = "";
$name = $phonenumber = $address = $comments = $email = $age = $subjects = $number = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
	$nameerr = "name is required";
	}
	else
	{
	$name = testinput($_POST["name"]);
	}
	
	if(empty($_POST["phonenumber"]))
	{
	$phonenumbererr = "phonenumber is required";
	}
	else
	{
	$phonenumber = testinput($_POST["phonenumber"]);
	}
	
	if(empty($_POST["address"]))
	{
	$addresserr = "address is required";
	}
	else
	{
	$address = testinput($_POST["address"]);
	}
	
	if(empty($_POST["comments"]))
	{
	$commentserr = "please describe your service";
	}
	else
	{
	$comments = testinput($_POST["comments"]);
	}
	
	if(empty($_POST["email"]))
	{
	$emailerr = "email is required";
	}
	else
	{
	$email = testinput($_POST["email"]);
	}
	if(empty($_POST["number"]))
	{
	$numbererr = "number of student is required";
	}
	else
	{
	$number = testinput($_POST["number"]);
	}
	if(empty($_POST["age"]))
	{
	$ageerr = "age is required";
	}
	else
	{
	$age = testinput($_POST["age"]);
	}
	if(empty($_POST["subjects"]))
	{
	$subjectserr = "subjects is required";
	}
	else
	{
	$subjects = testinput($_POST["subjects"]);
	}
	


function testinput($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	$to = 'ealeakhue@gmail.com';
	$subject = 'cooking help';
	$body = $comments + $age + $number + $subjects;
	$body = wordwrap($body,70);
	$header = "from: $email";
    mail($to, $subject, $body, $header);
	

}
 
     ?>
<hr class="hr"></hr>
<div class="container">
<div class="form-holder col-md-10 col-md-push-1 text-center">
<h2>Get a Tutor Today</h2>
<h3>you" ll be glad you did</h3>
<div class="row">
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal id="booking-form">
<div class="form-group">
<label for="name" class="control-label col-sm-2" >NAME:</label>
<div class="col-sm-6">
<input class="form-control" placeholder="enter your fullname" type="text" name="name" />
<span class="error" style="color:red">*<?php echo $nameerr;?></span>
</br>
</div>
</div>
<div class="form-group">
<label for="inputnumber" class="control-label col-sm-2">phone Number:</label>
<div class="col-sm-6">
<input class="form-control" placeholder="enter phone number" type="text" name="phonenumber"/>
<span class="error" style="color:red">*<?php echo $phonenumbererr;?></span>
</br>
</div>
</div>
<div class="form-group">
<label for="inputaddress" class="control-label col-sm-2">Address:</label>
<div class="col-sm-6">
<input class="form-control" placeholder="enter address" type="text" name="address"/>
<span class="error" style="color:red">*<?php echo $addresserr;?></span>
</br>
</div>
</div>
<div class="form-group">
<label for="inputsubjects" class="control-label col-sm-2">subjects:</label>
<div class="col-sm-6">
<input class="form-control" placeholder="enter subjects" type="text" name="subjects"/>
<span class="error" style="color:red">*<?php echo $subjectserr;?></span>
</br>
</div>
</div>
<div class="form-group">
<label for="inputage" class="control-label col-sm-2">age:</label>
<div class="col-sm-6">
<input class="form-control" placeholder="age of student" type="number" name="age"/>
<span class="error" style="color:red">*<?php echo $ageerr;?></span>
</br>
</div>
</div>
<div class="form-group">
<label for="inputnumber" class="control-label col-sm-2">number of students:</label>
<div class="col-sm-6">
<input class="form-control" placeholder="enter subjects" type="number" name="number"/>
<span class="error" style="color:red">*<?php echo $numbererr;?></span>
</br>
</div>
</div>
<div class="form-group">
<label for="inputemail" class="control-label col-sm-2">Email:</label>
<div class="col-md-6">
<input class="form-control" placeholder="enter email" type="text" name="email"/>
<span class="error" style="color:red">*<?php echo $emailerr;?></div>
</br>
</div>
</div>
<div class="form-group">
<label for="comments" class="control-label col-sm-2">Comments:</label>
<div class="col-sm-6">
<textarea class="form-control" placeholder="additional information about the students" rows="3" name="comments"></textarea>
<span class="error" style="color:red">*<?php echo $commentserr;?></span>
</br>
</div>
</div>
<div class="form-group">
<div class="col-sm-6 col-sm-offset-2">
<button class=" btn btn-success" name="submit">submit</button>
</div>
</div>
</form>
</div>
</div>
</div>