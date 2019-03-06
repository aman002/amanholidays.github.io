<?php  $page='services'; include ("header.php"); ?>
<div class="page-head_agile_info_w3l" style="background-image: url(images/red_london_bus-wallpaper-1366x768.jpg)">
               
                <div class="container">
                    <div style="background-color: black; height: 60px">
                        <h3>Bus<span> Booking </span></h3>

                    </div>
                    <!--/w3_short-->
                    <div class="services-breadcrumb">
                        <div class="agile_inner_breadcrumb">
                        </div>
                    </div>
                    <div style="margin-left: 400px; margin-bottom: 900px; margin-top: 100px">
                        <div class="col-md-6 contact-form" style="background-color: black">
                            <h4 class="white-w3ls">Booking <span>Form</span></h4>
							<?php $nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                            <div class="styled-input agile-styled-input-top">
							<input type="text" name="Name" required="">
                                <label>Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="Phonenumber" required="">
                                <label>Phone number</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="numberofseats" required="">
                                <label>Number of Seats</label>
                                <span></span>
                            </div>

                            
                            <div class="styled-input">
                                 <input type="text" name="from" required="">
                                <label>From</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="to" required="">
                                <label>To</label>
                                <span></span>
                            </div>
								<div style="color: #2fdab8">
                               <input type="radio" name="acnonac" required=""
							<?php if (isset($acnonac) && $acnonac=="AC") echo "checked";?>value="AC">AC
                                <input type="radio" name="acnonac"required=""
							<?php if (isset($acnonac) && $acnonac=="NON AC") echo "checked";?>value="NON AC">NON AC
                            </div>
                            <br />
                            <input type="submit" name="submit" value="Submit">  
                        </div>
                    </div>
                </div>
</form>
            </div>
<?php include ("fotter.php"); ?>