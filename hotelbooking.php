<?php  $page='services'; include ("header.php"); ?>
<div class="page-head_agile_info_w3l" style="background-image: url(images/hotel1.jpg)">
               
                <div class="container">
                    <div style="background-color: black; height: 60px">
                        <h3>Hotel<span> Booking </span></h3>

                    </div>
                    <!--/w3_short-->
                    <div class="services-breadcrumb">
                        <div class="agile_inner_breadcrumb">
                        </div>
                    </div>
                    <div style="margin-left: 300px; margin-bottom: 900px; margin-top: 100px;width:1000px">
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
                                <input type="text" name="placename" required="">
                                <label>Name Of place</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="numberofrooms" required="">
                                <label>Number of Rooms</label>
                                <span></span>
                            </div>
							<div class="styled-input">
                                <input type="text" name="numberofrooms" required="">
                                <label>Number Of Persons</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="arrivel" required="">
                                <label>Arrival</label>
                                <span></span>
                            </div>
							<div class="styled-input">
                                <input type="text" name="depacuter" required="">
                                <label>Depacuter</label>
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