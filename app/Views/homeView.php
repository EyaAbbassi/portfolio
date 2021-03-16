<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My WebSite</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo(base_url('home/assets/img/favicon.ico'))?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="<?php echo(base_url('https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css'))?>" />
        <link href="<?php echo(base_url('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet'))?>" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo(base_url('css/styles.css'))?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container" >
                <a class="navbar-brand js-scroll-trigger" href="#page-top">take a look..</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                         <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo(base_url('/Admin'))?>">LogIn</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column" 
                    style="background-image: url('<?php echo(base_url('home/assets/img/portfolio/bureau.jpg'))?>') ;   
                            background-repeat: no-repeat;
                            background-attachment: fixed;
                           background-size: 100% 100%;" >
               
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">You're welcome</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0" style="color: gold" >Aya ABBASSI </br>software engineer</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <i class="fas fa-plus fa-3x"></i>Study Course</div>
                            </div>
                            <img class="img-fluid" src="<?php echo(base_url('home/assets/img/portfolio/pc2.jpg'))?>" alt="" style="width:400px;height:190px;" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <i class="fas fa-plus fa-3x"></i>certificates</div>
                            </div>
                            <img class="img-fluid" src="<?php echo(base_url('home/assets/img/portfolio/certification.jpg'))?>" alt=""  style="width:400px;height:190px;" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i>skills</div>
                            </div>
                            <img class="img-fluid" src="<?php echo(base_url('home/assets/img/portfolio/competence.jpg'))?>" alt="" style="width:400px;height:190px;"/>
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-12 mb-5 ">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i>Projects</div>
                            </div>
                            <img class="img-fluid" src="<?php echo(base_url('home/assets/img/portfolio/projet.png'))?>" alt="" style="width:400px;height:190px;" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i>interests</div>
                            </div>
                            <img class="img-fluid" src="<?php echo(base_url('home/assets/img/portfolio/code.jpg'))?>" alt="" style="width:400px;height:190px;" />
                        </div>
                    </div>
               
                
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
               <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-6 ml-auto"><img src="<?php echo base_url("upload/".$about[0]['photo']) ?>"></div></br>
                    <div class="col-lg-4 mr-auto">
                    <p class="lead">
                        <?php echo $about[0]['prenom']; ?></br>
                        <?php echo $about[0]['nom']; ?></br>
                        <?php echo $about[0]['adresse']; ?></br>
                        <?php echo $about[0]['email']; ?></br>
                        <?php echo $about[0]['linkedin']; ?></br>
                        <?php echo $about[0]['more']; ?></br>
                    </p></div>
                </div>
               
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container"  style="background-image: url('<?php echo(base_url('home/assets/img/portfolio/bureau2.jpg'))?>') ;   
                            background-repeat: no-repeat;
                            background-attachment: fixed;
                           background-size: 100% 100%;">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" style="color: DodgerBlue">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate" action="<?php echo base_url('Contact/save');?>">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." name="name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." name="email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." name="phone" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message." name="message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" >Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                           Monastir,Tunisia
                            <br />
                           Les palmiers
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/ayette.h" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                       
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/eya-abbassi/" target="_blank" ><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="http://localhost/portfolio11/public/"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About me</h4>
                        <p class="lead mb-0">
                            “Curieuse, motivée, ouverte d’esprit et polyvalente"
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © AYA's Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Study Course</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"><table class="table">
                                  
                                          <thead>
                                               
                                          <tr>
                                              <th scope="col">Niveau</th>
                                              <th scope="col">Ecole</th>
                                              <th scope="col">Date</th>
                                              <th scope="col">Lieux</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                         
                                                <?php if ($formation) :
                                                                        foreach ($formation as $forma) :
                                                                      ?>
                                            
                                                <tr>
                                                    <td><?php echo $forma['niveau']; ?></td>
                                                    <td><?php echo $forma['ecole']; ?></td>
                                                    <td><?php echo $forma['date']; ?></td>
                                                    <td><?php echo $forma['lieux']; ?></td>
                                                    
                                                </tr>
                                                       
                                                       <?php   endforeach ;
                                                                 endif ;      ?>
                                              </tbody>
                                         </table> </p>
                                            
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">certificates</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    
                                    <!-- Portfolio Modal - Text-->
                                            <p class="mb-5">
                                             <table class="table">
                                                         
                                                          <thead>
        
                                                          <tr>
                                                              <th scope="col">Specialité</th>
                                                              <th scope="col">Ecole</th>
                                                              <th scope="col">Date</th>
                                                              <th scope="col">Lieux</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                         
                                                                <?php if ($certification) :
                                                                    foreach ($certification as $certif) :
                                                                                      ?>
                                                            
                                                                <tr>
                                                                    <td><?php echo $certif['specialite']; ?></td>
                                                                    <td><?php echo $certif['ecole']; ?></td>
                                                                    <td><?php echo $certif['date']; ?></td>
                                                                    <td><?php echo $certif['lieux']; ?></td>
                                                                    
                                                                </tr>
                                                                       
                                                                       <?php   endforeach ;
                                                                                 endif ;      ?>
                                                              </tbody>
                                                         </table>
                                            </p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Skills</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->

                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"> <table class="table">
                                                 <table class="table">
                                                   <thead>
                                                        
                                                  <tr>
                                                      <th scope="col">NOM</th>
                                                      <th scope="col">NIVEAU</th>
                                                      
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                 
                                                        <?php if ($competence) :
                                                                                foreach ($competence as $compt) :
                                                                              ?>
                                                    
                                                        <tr>
                                                            <td><?php echo $compt['nom']; ?></td>
                                                            <td><?php echo $compt['niveau']; ?></td>
                                                        
                                                        </tr>
                                                               
                                                               <?php   endforeach ;
                                                                         endif ;      ?>
                                                      </tbody>
                                                 </table>.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Projects</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"><table class="table">
 
                                                  <thead>
                                                       
                                                  <tr>
                                                      <th scope="col">Title</th>
                                                      <th scope="col">Objective</th>
                                                      <th scope="col">More About</th>
                                                     
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                 
                                                        <?php if ($projet) :
                                                                                foreach ($projet as $pro) :
                                                                              ?>
                                                    
                                                        <tr>
                                                            <td><?php echo $pro['titre']; ?></td>
                                                            <td><?php echo $pro['objectif']; ?></td>
                                                            <td><?php echo $pro['plus_info']; ?></td>
                                                            
                                                           
                                                        </tr>
                                                               
                                                               <?php   endforeach ;
                                                                         endif ;      ?>
                                                      </tbody>
                                                 </table></p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Interests</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"> <table class="table">
 
                                                      <thead>
                                                            
                                                      <tr>
                                                          <th scope="col">NOM</th>
                                                          <th scope="col">More About..</th>
                                                          
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                     
                                                            <?php if ($interet) :
                                                                                    foreach ($interet as $inter) :
                                                                                  ?>
                                                        
                                                            <tr>
                                                                <td><?php echo $inter['nom']; ?></td>
                                                                <td><?php echo $inter['about']; ?></td>
                                                                
                                                            </tr>
                                                                   
                                                                   <?php   endforeach ;
                                                                             endif ;      ?>
                                                          </tbody>
                                                     </table></p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        <!-- Bootstrap core JS-->
        <script src="<?php echo(base_url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'))?>"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="<?php echo(base_url('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'))?>"></script>
        <!-- Contact form JS-->
        <script src="<?php echo(base_url('assets/mail/jqBootstrapValidation.js'))?>"></script>
        <script src="<?php echo(base_url('assets/mail/contact_me.js'))?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo(base_url('js/scripts.js'))?>"></script>
    </body>
</html>
