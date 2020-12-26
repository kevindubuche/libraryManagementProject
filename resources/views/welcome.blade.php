@extends('main')

@section('welcome') 
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
                                            <p>La meilleure bibliothèque virtuelle de la Caraïbes !</p>
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
                                            <h3>Biblio-Tech<br></h3>
                                            <br>
                                            <h4><span class="theme_color">Savourez la lecture chez nous !</span></h4>
                                            <br>
                                            <p>La meilleure bibliothèque virtuelle de la Caraïbes !</p>
                                            <a class="contact_bt" href="about.html">A propos</a>
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
						    <p class="small_tag" href="about.html">A propos</p>
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
						     <p class="section_count">03</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Catalogue</p>
                            <h2><span class="theme_color">Selectionnez</span> vos meilleurs livres ici</h2>
							<p class="large">Tous nos livres</p>
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
                    <p>Il y a les albums à écouter au moins une fois dans sa vie, les films à voir absolument, les châteaux à visiter impérativement aux quatre coins du monde, les criques paradisiaques où se baigner... et les livres qu'il faut avoir lu absolument. Ce sont des classiques, des incontournables, des chefs-oeuvres. Des livres qui pourraient changer votre vie, ou vous (re)donner goût à la lecture.</p>

                    <p>Ils parlent d’amour ou d’amitié, de construction de soi, de rencontre avec autrui, évoquent la société sous un prisme différent, appellent à la réflexion, divertissent intelligemment mais surtout, surtout : ces livres sont signés de plumes fortes et belles qui marquent les esprits.</p>
                        
                    <p>De la saga "Harry Potter", par J.K. Rowling, à "L'Etranger" d'Albert Camus, d' "Orgueil et Préjugés" de Jane Austen à "L'Ecume des jours" de Boris Vian, tous ces livres sont cultes et incontournables. Oscar Wilde, William Shakespeare, John Steinbeck, Ernest Hemingway… Voilà vingt-et-un livres que nous devrions tous avoir lu au moins une fois dans notre vie. </p>
                </div>

                <div class="col-lg-12">
                    <div class="full center">
                        <a href="{{url('categories')}}" class="hvr-radial-out button-theme">Voir les Catégories</a>
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
						    <h2>Biblio-tech <span class="theme_color">a les meilleurs chiffres</h2>
							<p class="large">Les chiffres parlent</p>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30 white_fonts">
                    <p>Les chiffres, on leur fait dire ce que l’on veut. A tel point que parfois, ils finissent par parler d’eux-mêmes. Non pas qu’ils s’accaparent la parole ou les lumières médiatiques, mais certains d’entre eux peuvent se passer de commentaires. Pourtant, les journalistes et autres chroniqueurs ne peuvent s’empêcher de poursuivre leur propos, agrémentant « les chiffres parlent d’eux-mêmes » par un « jugez plutôt » adapté s’il n’était suivi d’une tirade servant d’analyse peu convaincante.</p>
                </div>
                <div class="col-lg-12">
                    <div class="full">
                 
                    </div>
                </div>
            </div>
			<div class="row margin-top_30 counter_section">
			   <div class="col-sm-12 col-md-4">
	        <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="{{$total_abonnes}}" data-speed="1500"></h2>
       <p class="count-text">Abonnés</p>
    </div>
	        </div>
              <div class="col-sm-12 col-md-4">
               <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="{{$total_livres}}" data-speed="1500"></h2>
      <p class="count-text">Livres</p>
    </div>
              </div>
              <div class="col-sm-12 col-md-4">
                  <div class="counter margin-top_30">
     
      <h2 class="timer count-title count-number" data-to="{{$total_transactions}}" data-speed="1500"></h2>
      <p class="count-text">Transactions</p>
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
						    <p class="small_tag">Top</p>
                            <h2><span class="theme_color">Les plus populaires</span> </h2>
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
                                           </div>
                                           @isset($top_3_livres_les_plus_pupulaires[0])
										   <div class="full text_align_center">
										     <h3>
                                              {{  $top_3_livres_les_plus_pupulaires[0]->idLivre->titre}}
                                             </h3>
										   </div>
										   <div class="full text_align_center">
										     <p> {{  $top_3_livres_les_plus_pupulaires[0]->idLivre->auteur}}</p>
                                           </div>
                                           @endisset
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="img/img-8.png" alt="#" />										 
                                           </div>
                                           @isset($top_3_livres_les_plus_pupulaires[1])
										   <div class="full text_align_center">
										     <h3>
                                                
                                                {{  $top_3_livres_les_plus_pupulaires[1]->idLivre->titre}}
                                               
                                            </h3>
										   </div>
										   <div class="full text_align_center">
                                            <p> {{  $top_3_livres_les_plus_pupulaires[1]->idLivre->auteur}}</p>
                                         </div>
                                         @endisset
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="img/img-9.png" alt="#" />										 
                                           </div>
                                           @isset($top_3_livres_les_plus_pupulaires[2]->idLivre)
										   <div class="full text_align_center">
										     <h3>  
                                                {{  $top_3_livres_les_plus_pupulaires[2]->idLivre->titre}}
                                              </h3>
										   </div>
										   <div class="full text_align_center">
                                            <p> {{  $top_3_livres_les_plus_pupulaires[2]->idLivre->auteur}}</p>
                                         </div>
                                         @endisset
										</div>
                                    </div>
									
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

    
@endsection