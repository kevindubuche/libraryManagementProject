
@extends('main')

@section('categories') 
       
        <!-- section -->
		<div class="section layout_padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="full">
							<div class="heading_main text_align_left">
							   <div class="left">
								 <p class="section_count"></p>
							   </div>
							   <div class="right">
								<p class="small_tag">Nos Catégories</p>
								<h2><span class="theme_color">Des milliers</span> de livres sont a votre disposition</h2>
								<p class="large">Régalez-vous !</p>
							  </div>	
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

        <div class="row ">
           @foreach ($liste_des_livres_goupes_par_categorie as $livre)
                <div class="col-sm-6 col-md-4">
                    <div class="service_blog">
                    <div class="service_icons">
                        <img width="75" height="75" src="img/icon-6.png" alt="#">
                    </div>
                    <div class="full">
                    <h4>
                      <a class="nav-link" href="{{route('categorie',[$livre->categorie])}}">{{$livre->categorie}}</a>
                    </h4>
                    </div>
                    </div>
                </div>
           @endforeach
      
        </div>
        <div class="row " style="margin-top: 50px">
            {{ $liste_des_livres_goupes_par_categorie->links() }}
        </div>
    </div>
</div>
<!-- end section -->
    
@endsection