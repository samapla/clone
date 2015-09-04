<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>The Homestead/Clone</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel ="stylesheet" type="text/css" href="css/custom.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body class="body"> 
        <header class="mainHeader">
            <div class='logo'>
                <div class="social">
                    <p class="follow"><b>Follow Us</b></p>
                    <a href="https://twitter.com/@homesteadpsc"><img src='images/icons/twitter.png'/></a>
                    <a href="https://www.facebook.com/TheHomesteadProjectStreetChildren?fref=ts"><img src='images/icons/facebook_2.png'/></a>
                    <br/><br/>
                    <p id="login"><a href="Login.php">Login</a> |
                        <a href="Register.php">Register</a> </p>  
                    <div class="clear"></div>
                </div>
                <img src="images/logo3.png" class="logo-1"/>
            </div>
            <div class= "navbar navbar-default">
                <div class= "container">
                    <div class ="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class ="icon-bar"></span>
                            <span class ="icon-bar"></span>
                            <span class ="icon-bar"></span>
                            <span class ="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav  navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    About <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="Legal.php">Legal, NPO, PBO Status</a></li>
                                   <li><a href="http://issuu.com/paulvernonhooper/docs/the_homestead__projects_for_street_/1" target="_blank">Audited Financials  2014  </a></li>
                                    <li><a href="http://issuu.com/paulvernonhooper/docs/homestead_2014_final_low_res/1" target="_blank">Annual Report 2014</a></li>
                                    <li class="active"><a href="Business.php">Business Canvas</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">

                                    Gallery <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="Photo.php">Photos</a></li>
                                    <li><a href="Video.php">Videos</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">

                                    Donate <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="MySchool.php">My School</a></li>
                                    <li><a href="YouDonate.php">You Donate</a></li>
                                </ul>
                            </li>
                            <li><a href="Volunteering.php">Volunteering</a></li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">

                                    Our Projects <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="intake.php">Intake Shelter</a></li>
                                    <li><a href="children.php">Children Home</a></li>
                                    <li><a href="outreach.php">Outreach Work</a></li>
                                    <li><a href="prevention.php">Prevention and Early Intervention</a></li>

                                </ul>
                            </li>

                            <li><a href="Contact.php">Contact</a></li>
                        </ul> 

                    </div>

                </div>
                <div class='c'></div>
            </div>

        </header>
        <div class='c'></div>
        <div class="wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class='col-md-7'>

                        <div class="box-1">
                            <div></div>
                            <div></div>
                            <div class=''>
                                <h1 id="h">Business Canvas</h1>
                            </div>
                            <div class='paragraph'>
                                <p>
                                    <img src="images/The-Homestead-Business-Canvas-final.jpg" class="business"/></p>
                            </div>
                            <br/><br/>
                        </div>
                    </div>


                    <div class='col-md-5'>
                        <div class="box-2">
                            <div></div>
                            <div></div>
                            <div class='our'>
                                <h1>Our Programmes</h1>
                             </div>
                            <br/><br/>
                            <p> <a href="outreach.php">STREET OUTREACH</a><br/><br/>
                                <a href="intake.php">THE HOMESTEAD INTAKE SHELTER</a><br/><br/>
                                <a href="prevention.php">PREVENTION</a> <br/><br/>
                                <a href="children.php">THE HOMESTEAD CHILDREN'S HOME</a><br/><br/>
                                <a href="http://www.ubunyebeadworks.co.za/" target="_blank">JOB CREATION</a></p>
                            <div class='payfast'>
                                <p>Payfast Donations verified as paid to the <br/>
                                    Homestead via EFT,Debit or Credit Card</p>
                            </div>
                            <br/>
                            <a href="https://www.payfast.co.za/donate/go/thehomestead" target="_blank" class="done"><img src="images/donate.png"/></a>
                            <br/><br/>
                        </div>
                    </div>
                </div>
            </div>
            <br/> <br/>


            <footer class="mainFooter">
                <h2>Our Sponsors</h2>
                <p>Copyright by <a href="#">The Homestead Projects For Street Children</a> &COPY;2015.All rights reserved.</p>
            </footer>

        </div>
    </body>
</html>