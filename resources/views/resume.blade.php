
@extends('main')

@section('resume') 
       
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
								<p class="small_tag"></p>
                               <h2><span class="theme_color">{{$livre->titre}}</span> </h2>
								<p class="large">{{$livre->auteur}}</p>
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
                <div class="col-sm-12 col-md-12">
                    <div class="service_blog">
                    <div class="service_icons">
                        <img width="75" height="75" src="{{asset('img/icon-6.png')}}" alt="#">
                    </div>
                    <div class="full">
                    <h4>{{$livre->titre}}
                    </h4>
                    </div>
                    <div class="full">
                        <p>{{$livre->resume}}</p>
                      </div>
                    </div>
                </div>
      
        </div>
    </div>
</div>
<!-- end section -->
    
@endsection