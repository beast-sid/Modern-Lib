<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Modern Lib</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body class="page">
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <a href="index.php" class="navbar-brand">Modern Lib</a>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
       <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        
                        <a href="adminSignUpFront.php" class="nav-item nav-link">Admin-Signup</a>
                        
                        <a href="adminLoginFront.php" class="nav-item nav-link">Admin-login</a>
                        
                        <a href="addStudentFront.php" class="nav-item nav-link">Add Student</a>
                        
                        <a href="issueBookFront.php" class="nav-item nav-link">Issue book</a>
                        
                        <a href="addBookFront.php" class="nav-item nav-link">Add Book</a>
                        
                        <a href="returnBookFront.php" class="nav-item nav-link">Return BooK</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Contact Start -->
        <div class="contact mt-125">
            <div class="container">
                <div class="section-header">
                    <h2>Admin-Signup</h2>
                </div>
               
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                             <form  action="adminSignUpBack.php" method="post">
                                 
                                 <input 
                                 type="text" 
                                 class="form-control" 
                                 id="name"
                                 required="required" 
                                 placeholder="Employee Id"
                                 name="adminId">
                              
                                 <br>
                                 <input
                                 type="text" 
                                 class="form-control" 
                                 id="subject"
                                 required="required" 
                                 placeholder="Admin Name"        
                                 name="adminName">
                                 <br>
                                 <input 
                                 type="password" 
                                 class="form-control" 
                                 id="subject"
                                 placeholder="Set Password"        
                                 required="required"
                                 name="password">
                                 <br>
                                 <button class="btn" type="submit" id="sendMessageButton" name="submit">Sign-Up</button>
                                 
                               
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
       


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Head Office</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Plot no.-808 rawatpur, Kanpur, Uttar Pradesh</p>
                                    <p><i class="fa fa-phone-alt"></i>+91 6306570767</p>
                                    <p><i class="fa fa-envelope"></i>saxenasiddharth2002@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="https://leetcode.com/beast_sid/">Leetcode</a>
                                    <a href="https://www.codechef.com/users/sid_tyu_123">Codechef</a>
                                    <a href="https://codeforces.com/profile/beast_sid">Codeforces</a>
                                    <a href="https://auth.geeksforgeeks.org/user/saxenasiddharth2002/profile">GeeksforGeeks</a>
<!--                                    <a href="">FQAs</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#"></a></p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://www.linkedin.com/in/siddharth-saxena-2295281b0/">Siddharth Saxena</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
