<?php

include_once('functions.inc.php');

?>
<?php 
$errmsg=$name=$success=NULL; $errcode=211; 
if( isset($_POST['fname'])  &&  isset($_POST['email'])  && isset($_POST['company'])  && isset($_POST['lname'])){
	

	 if (empty($_POST["email"])) {
			$errmsg = " Valid Email Required <br />";
			$errcode=112;
			
		  }
	
	
		  if ((!empty($_POST["email"])) && !filter_var(test_input($_POST['email']), FILTER_VALIDATE_EMAIL)) {
  $errmsg = $errmsg." Invalid Email Format<br />"; 
  $errcode=112;
}

if (empty($_POST["fname"])) {
			$errmsg = " We just need to know what to call you. <br />";
			$errcode=112;
			
		  }
		  
		  if (empty($_POST["lname"])) {
			$errmsg = " You gave us a good first name, do the same :) <br />";
			$errcode=112;
			
		  }
		  
		   if (empty($_POST["company"])) {
			$errmsg = " Valid organization required <br />";
			$errcode=112;
			
		  }

		 

if($errcode!=112){	

$email=test_input($_POST['email']);

$insertSQL = sprintf("INSERT INTO form1 (`firstname`, `lastname`,`email`, `company`) VALUES (%s, %s, %s, %s)",
                       
					   GetSQLValueString(test_input($_POST['fname']), "text"),
					   GetSQLValueString(test_input($_POST['lname']), "text"),
					    
						 GetSQLValueString($email, "text"),
						  GetSQLValueString(test_input($_POST['company']), "text"));


mysqli_select_db($dbsmart, $database_dbsmart);
$Result1 = mysqli_query($dbsmart, $insertSQL) or die(mysqli_error($dbsmart));

	


require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

    $mail->isSMTP();
	$mail->SMTPDebug = false;
	$mail->Host = "omega.relianx.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465;
	$mail->Username = 'avi@bflexd.com';
	$mail->Password = 'amo3622014';
	$mail->From = 'avi@bflexd.com';

$mail->FromName = 'FlexBot';

$mail->addAddress('info@bflexd.com','User Registration');
//$mail->addCC('support@beastexchange.com','Beast Exchange Support');

$mail->IsHTML(true);
$mail->WordWrap = 50;
	$body="<div style=\"padding:10px;background-color:#f5f5f5;border:1px solid #ccc;min-height:300px;\"><table style='width:100%'><tr><td style='height:150px; text-align:center'></td></tr>
	";
	 $body.="<tr><td><p>User Registration</p>
		<h3>First Name: ".strtoupper(test_input($_POST['fname'])).", </h3>
		<h3>Last Name: ".strtoupper(test_input($_POST['lname'])).", </h3>
		<h3>Email: ".strtoupper(test_input($_POST['email'])).", </h3>
		<h3>Company: ".strtoupper(test_input($_POST['company'])).", </h3>
	 
	 <br/><br/>-Administrator</td></tr></table></div>";




$mail->Subject = 'Registration Email';
$mail->Body    = $body;




 $mail->isHTML(true);


if(!$mail->send()) {


   $msgid=33;
}else{
//echo 'Message has been sent';
$msgid=22;


}
  $name=$lname=$email=$phone=NULL;
$cc=NULL;


$success=  $success."Registration Successful";
    
  //$succode=211; $sucmsg="New User ".strtoupper(test_input($_POST['fname']))." ".strtoupper(test_input($_POST['lname']))." created";

  $_POST=array();
 
 
}
}

?>


<html>
<head>
<title>Sign Up</title>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<style>

* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

p {
    color: grey
}

#heading {
    text-transform: uppercase;
    color: #2443AC;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #673AB7;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #1360EF;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #311B92
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2443AC;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #673AB7;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: gray;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #2443AC
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f030"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #2443AC
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #2443AC
}

.fit-image {
    width: 100%;
    object-fit: cover
}

</style>
</head>
<body>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Get Access to FlexBot</h2>
                <p>Four Simple Steps Until #digitalRobots</p>
				
				  <?php if(isset($success)){ ?>
						
						<div class="alert alert-success" role="alert" style="font-size:15px;">
                    <i class="fa fa-check"></i>
                     <?php echo $success; ?>
                  </div>
					   
					   <?php } ?>
					   
					    <?php if($errcode==112){ ?>
						
						<div class="alert alert-warning" role="alert" style="font-size:15px;">
                    <i class="fa fa-times"></i>
                     <?php echo $errmsg; ?>
                  </div>
					   
					   <?php } ?>
                <form id="msform" action="" method="POST">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>First Name</strong></li>
                        <li id="personal"><strong>Last Name</strong></li>
                        <li id="payment"><strong>Email Address</strong></li>
                        
						 <li id="confirm"><strong>Company</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Account Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">1 of 4</h2>
                                </div>
                            </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" /> 
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">2 of 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" /> 
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
					<fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">3 of 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Email: *</label> <input type="text" name="email" placeholder="Email Address" /> 
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Company:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">4 of 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Company Name: *</label> <input type="text" name="company" placeholder="Company Name" /> 
                        </div> <input type="submit" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
					
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Completed</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>Sign Up Successful!</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script>

$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});

</script>