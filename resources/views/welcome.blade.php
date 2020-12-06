<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Biblio-Tech</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="logo.jpg" alt="image" width="70" height="70"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.html">Accueil</a></li>
                        <li><a class="nav-link" href="about.html">A propos</a></li>
                        <li><a class="nav-link" href="services.html">Services</a></li>
                        <li><a class="nav-link" href="#">Blog</a></li>
                        <li><a class="nav-link" href="contact.html">Contact</a></li>
                        @if (Route::has('login'))
                       @auth
                             <li><a class="nav-link active" style="background:#f2184f;color:#fff;" href="{{ route('home') }}">Dashboard</a></li>
                            @else
                            <li><a class="nav-link active" style="background:#f2184f;color:#fff;" href="{{ route('login') }}">Login</a></li>
                            @endauth
                       @endif
                   </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="images/search_icon.png" alt="#" />
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(img/banner-img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>Biblio-Tech</h3>
                                        <br>
                                        <h4><span class="theme_color">Savourez la lecture chez nous !</span></h4>
                                        <br>
                                        <p>La meilleure biblioque virtuelle de la Caraïbes !</p>
                                        <a class="contact_bt" href="about.html">A propos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(https://source.unsplash.com/random);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>Trusted and<br>Professional Advisers</h3>
                                        <br>
                                        <h4><span class="theme_color">For your Business</span></h4>
                                        <br>
                                        <p>Showcase your Profile to the world using online CV builder and Get Hired Faster</p>
                                        <a class="contact_bt" href="about.html">About us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">01</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">A propos</p>
                            <h2><span class="theme_color">Le rôle</span> de la bibliothèque "Bilio-Tech"</h2>
                            <p class="large">Accompagner et de soutenir</p>
						  </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->

    <!-- section -->
    <div class="section dark_bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 text_align_center padding_0">
                    <div class="full">
                        <img class="img-responsive" src="img/img-2png.png" alt="#" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 white_fonts layout_padding padding_left_right">
                    <h3 class="small_heading">TOUS LES LIVRES<br>A VOTRE DISPOSITION</h3>
                    <p>Le rôle premier des bibliothèques est d'accompagner et de soutenir les activités d'enseignement et de recherche.

                        Plus importantes que jamais dans ce monde de l'information numérique, elles identifient, acquièrent et rendent accessibles les ressources documentaires indispensables aux étudiants et aux chercheurs.
                        
                        Elles ont également pour mission de former à l'utilisation des ressources documentaires. Gardiennes de la mémoire et du patrimoine documentaire de l'établissement, elles occupent une place centrale dans la vie sociale et culturelle d'une université : la B.U. est non seulement un lieu de travail, d'étude et de recherche, mais aussi de convivialité.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
	
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">02</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">SERVICES</p>
                            <h2><span class="theme_color">How to provide</span> tools that help anyone give a voice to their ideas</h2>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
			
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="img/icon-1.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="img/icon-2.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="img/icon-3.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="img/icon-4.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="img/icon-5.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="img/icon-6.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   
			</div>
        </div>
    </div>
	<!-- end section -->
	
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">03</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Portfolio</p>
                            <h2><span class="theme_color">CHOOSE A</span> PROFESSIONAL DESIGN</h2>
							<p class="large">Websites</p>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            @foreach ($livres as $key =>  $livre)
                            @if($key % 4 == 0)
                                <div class="carousel-item  @if($loop->index == 0) active @endif">
                                <div class="row ">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="images/img1.png" alt="#" />
                                            <div class="carousel-caption">
                                                <div  style="background-color: rgb(255, 0, 128,0.6); color:white;">
                                                <h2>{{$livres[$key]->titre}}</h2>
                                                <p>{{$livres[$key]->auteur}}</p>
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </div>
                                               
                                              </div>
                                        </div>
                                        @isset($livres[$key+1])
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <img class="img-responsive" src="images/img2.png" alt="#" />
                                                <div class="carousel-caption">
                                                <div  style="background-color: rgb(255, 0, 128,0.6); color:white;">
                                                    <h2>{{$livres[$key+1]->titre}}</h2>
                                                    <p>{{$livres[$key+1]->auteur}}</p>
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </div>
                                                </div>
                                            </div>
                                        @endisset
                                        @isset($livres[$key+2])
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="images/img3.png" alt="#" />
                                            <div class="carousel-caption">
                                            <div  style="background-color: rgb(255, 0, 128,0.6); color:white;">
                                                <h2>{{$livres[$key+2]->titre}}</h2>
                                                <p>{{$livres[$key+2]->auteur}}</p>
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </div>
                                            </div>
                                        </div>
                                      @endisset
                                      @isset($livres[$key+3])
                                      <div class="col-lg-3 col-md-6 col-sm-12">
                                          <img class="img-responsive" src="images/img4.png" alt="#" />
                                          <div class="carousel-caption">
                                          <div  style="background-color: rgb(255, 0, 128,0.6); color:white;">
                                              <h2>{{$livres[$key+3]->titre}}</h2>
                                              <p>{{$livres[$key+3]->auteur}}</p>
                                              <i class="fa fa-info-circle" aria-hidden="true"></i>
                                          </div>
                                          </div>
                                      </div>
                                    @endisset
                                        
                                       
                                    </div>
                                </div>
                             @endif
                            @endforeach

                           
                  
                            </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

                <div class="col-lg-12">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their</p>
                </div>

                <div class="col-lg-12">
                    <div class="full center">
                        <a href="about.html" class="hvr-radial-out button-theme">See More ></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<!-- end section -->
	
	<!-- section -->
    <div class="section layout_padding dark_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left white_fonts">
						   <div class="left">
						     <p class="section_count">04</p>
						   </div>
						   <div class="right">
						    <h2>Create <span class="theme_color">PERSONALISED Business</h2>
							<p class="large">What we done</p>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30 white_fonts">
                    <p>ss normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in theirss normal distribution of letters, as opposed to using 'Content here, content here', making it look like re ed r</p>
                </div>
                <div class="col-lg-12">
                    <div class="full">
                        <a href="about.html" class="contact_bt">Read More ></a>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30 counter_section">
			   <div class="col-sm-12 col-md-4">
	        <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="23" data-speed="1500"></h2>
       <p class="count-text">NOMINATIONS</p>
    </div>
	        </div>
              <div class="col-sm-12 col-md-4">
               <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="7" data-speed="1500"></h2>
      <p class="count-text">AWARDS</p>
    </div>
              </div>
              <div class="col-sm-12 col-md-4">
                  <div class="counter margin-top_30">
     
      <h2 class="timer count-title count-number" data-to="31" data-speed="1500"></h2>
      <p class="count-text">AGENCIES</p>
    </div></div>
			</div>
		
        </div>
    </div>
	<!-- end section -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">05</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Our Team</p>
                            <h2><span class="theme_color">We Have a Professional</span> Team of Business Analysts.</h2>
							</div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30">
                    <div id="team_slider" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
								
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="img/img-7.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="img/img-8.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="img/img-9.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
								
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="img/img-7.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="img/img-8.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="img/img-9.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                </div
                            </div>
                        </div>

                        <div class="bullets">
						  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#team_slider" data-slide-to="0" class="active"></li>
    <li data-target="#team_slider" data-slide-to="1"></li>
  </ul>
						</div>

                    </div>
                </div>

            </div>
        </div>
    </div>
	</div>
	<!-- end section -->

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 margin-bottom_30">
				   <img src="img/f_logo.png" alt="#" />
				</div>
               <div class="col-xl-6 white_fonts">
                    <div class="row">
					<div class="col-md-12 white_fonts margin-bottom_30">
					   <h3>Contact Us</h3>
					</div>
                        <div class="col-md-4">
                            <div class="full icon">
                                <img src="images/social1.png">
                            </div>
                            <div class="full white_fonts">
                                <p>London 145
                                    <br>United Kingdom</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="full icon">
                                <img src="images/social2.png">
                            </div>
                            <div class="full white_fonts">
                                <p>consultation@gmail.com
                                    <br>consultation@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="full icon">
                                <img src="images/social3.png">
                            </div>
                            <div class="full white_fonts">
                                <p>+7586656566
                                    <br>+7586656566</p>
                            </div>
                        </div>
						<div class="col-md-12">
						   <ul class="full social_icon margin-top_20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
						</div>
                    </div>
                </div>
				
				 <div class="col-xl-6 white_fonts">
				    <div class="row">
					   <div class="col-md-6">
					     <div class="footer_blog footer_menu">
						    <h3>Menus</h3>
						    <ul> 
							  <li><a href="index.html">Home</a></li>
							  <li><a href="about.html">About Us</a></li>
							  <li><a href="services.html">Services</a></li>
							  <li><a href="#">Blog</a></li>
							  <li><a href="contact.html">Contact us</a></li>
							</ul>
						 </div>
						 <div class="footer_blog recent_post_footer">
						   <h3>Recent Post</h3>
						   <p>Participate in staff meetings manage dedicated to marketing November 25, 2019</p>
						 </div>
					   </div>
					   <div class="col-md-6">
					     <div class="footer_blog full">
						     <h3>Newsletter</h3>
							 <div class="newsletter_form">
							    <form action="index.html">
								   <input type="email" placeholder="Your Email" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
					   </div>
					</div>
				 </div>

            </div>
            
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© 2019 Business . All Rights Reserved.</p>
                    <ul class="bottom_menu">
                        <li><a href="#">Term of Service</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>