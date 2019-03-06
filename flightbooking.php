<?php  $page='services'; include ("header.php"); ?>
<div class="page-head_agile_info_w3l" style="background-image: url(images/boeing_747_8_intercontinental-wallpaper-1366x768.jpg)">
                
                <div class="container">
                    <div style="background-color: black; height: 60px">
                        <h3>Flight<span> Booking </span></h3>

                    </div>
                    <!--/w3_short-->
                    <div class="services-breadcrumb">
                        <div class="agile_inner_breadcrumb">
                        </div>
                    </div>
                    <div style="margin-left: 400px; margin-bottom: 900px; margin-top: 100px">
                        <div class="col-md-6 contact-form" style="background-color: black">
                            <h4 class="white-w3ls">Booking <span>Form</span></h4>
                           <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="Name" required="">
                                <label>Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="phonenumber" required="">
                                <label>Phone number</label>
                                <span></span>
                            </div>
							<div class="styled-input">
                                <input type="text" name="flightname" required="">
                                <label>Name Of Flight</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="noofseats" required="">
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
							<br />
						<input type="submit" name="submit" value="Submit">  
                            </form>
                                
                        </div>
                    </div>
                </div>

            </div>


<?php  include ("fotter.php"); ?>