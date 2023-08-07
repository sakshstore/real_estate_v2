@extends('layouts.home')

@section('template_title')
    {{ $property->name ?? "{{ __('Show') Property" }}
@endsection

@section('content')

 <style>
     
     h1{
         font-size:30px;
     }
     
   .table  table{
         
         width:100%;
     }
 </style>
   
    
    
		<div class="container">
			<div class="row mt-5 ">
				<div class="col-md-8"> 
									
									
									
					<div class="slider mb-2 ">
			 
		 
 

<?php


 $gallery_items =json_decode($property->gallery_url);
 
 if(!is_array($gallery_items))
 {
     $gallery_items =array("https://dummyimage.com/900x600" ); 
 }
 
 
 ?>
  


   
   
   
	<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
   
  

     @foreach($gallery_items as  $index => $image)
   
  
   
   @if($index == 0)
     
    
         <div class="carousel-item active  ">
      <img src="{{asset($image)}}" class="d-block w-100 img-fluid"  >
    </div>
    
       @else
       
         <div class="carousel-item    ">
      <img src="{{asset($image)}}"  class="d-block w-100 img-fluid"  >
    </div>
       
    @endif
    
    
    @endforeach 
    
     
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
  
  
</div>


 
			 	
					</div>
	<div class="card mt-2">
								    
								      	<div class="card-body">
				 
 
  <div class="row">

										<div class="col-md-6">
										   
						 <h1 class="saksh_property_name"  > {{ $property->project_name }}</h1>
                                           
	 <i class="fa-solid fa-location-dot"></i> {{ $property->location }} 
											</div>
                                        

										<div class="col-md-6 text-end" >
											<span>Starting Price</span>
											<h6> 
											
										{{	get_price($property)  }}
 											
										 
											</h6>
										</div>
									</div>
				
		 	</div>
									</div>
		
	 
							 	<div class="card  mt-2">
                       	<div class="card-body">     
                                          
                                          
                                          
                                          	 {!! $property->project_details !!}
                                          
                                         
                                    </div>
								</div>
						 
					    
					     
								<div class="card mt-2">
								    
								      	<div class="card-body">
									    
									     <h5 class="text-heading mb-4">Additional Details</h5>
									     
				 		     
									      
									     
									     
								 <table class="table">
								     
								     
                       	     
								     <tr>
								         <td>Tenure  </td>
								          <td>  {{ $property->tenure }}</td>
								          
								          
								          
								           <td> Completion </td>
								            <td>{{ $property->completion }}  </td>
								            
								            
								            
								     </tr>
								     
								      <tr>
								         <td>Property type  </td>
								          <td>  {{ $property->property_type }}</td>
								          
								          
								          
								           <td> Interiors </td>
								            <td> {{ $property->interiors }}  </td>
								            
								            
								            
								     </tr>   
								     
								     
								      <tr>
								         <td>Unit type  </td>
								          <td>  {{ $property->unit_details }}</td>
								          
								          
								          
								           <td> Payment plan </td>
								            <td> {{ $property->payment_plan_short }} </td>
								            
								            
								            
								     </tr>
								     
								     
								      <tr>
								         <td>Size from  </td>
								          <td>  {{ $property->size_from }}</td>
								          
								          
								          
								           <td>  Down payment</td>
								            <td>  {{ $property->down_payment }}</td>
								            
								            
								            
								     </tr>
								     
								     
								      
								     
								     
								     
								 </table>
									    
									    </div>
								 
									   	</div>
									  
        				 

 
 
								<div class="card mt-2">
								    
								      	<div class="card-body">
									    
									     <h5 class="text-heading mb-4">Additional Details</h5>
									     
									     
			 	     
									     <?php
									     
									     
				  $data= json_decode( $property->overview_custom_fields );
			//	  print_r($data);
				  foreach($data as  $x => $val)
				  {
				      echo "<hr />";
				      
				     echo $x;
				//  var_dump($x);
				  
				  if(is_string($val)) echo $val;
			
			var_dump($val);
				      
				  }
		 
				  
				  ?>
				  
				   	      
							    
									    </div>
								 
									   	</div>
									  			     
									     
									     
									     
									     


                                    <div class="card  mt-2 ">
                                       	<div class="card-body">   
                                        <div class="row"> 
                                        
                                        <h5 class="text-heading mb-4">Connectivites</h5>  
                                    
                                        <div class=" p-3"> 
                                 
                                        
                                         
                                     
                                         
                                    @php
                                         
                                         $connectivities= json_decode($property->connectivities);
                                         
                                         
                                         if(is_array($connectivities) )
                                         {
                                         echo "    <table  class='table   '>";
                                         
                                         foreach( $connectivities   as $connectivity) 
            
            {
            
            @endphp
            
            
               
          <tr> 
          
          <td> {{ $connectivity->name}}  </td>    
          <td> {{ $connectivity->distance}}  </td> 
          </tr>
              
              
    @php
    }
    
    
    
                            echo        "</table>";
                                        
    
    }
    
@endphp

 </div>
 </div>
 
 
 
                                         
                                    
                                    </div>
                                    </div>


						  
									
                               


                                    <div class="card  mt-2">
                                       	<div class="card-body">   
                                        <div class="row"> 
                                        
                                        <h5 class="text-heading mb-4">Amenities</h5>
                                        
                                   
                                    @php
                                         
                                         
                                         $ar=explode(",", $property-> aminities); 
                                         
                                         
                                      
                                         
                                         
                                         if(is_array($ar) )
                                         {
                                         foreach( $ar   as $aminity) 
            
            {
            
            @endphp
            
           <div class="col-md-3">
               
              <i class="fa  fa-check  "></i> {{ $aminity}}
               
           </div> 
          
    
    
    
    @php
    }
    
    }
    
@endphp

 </div>
 
 
 
                                         
                                    
                                    </div>
                                    </div>


 
								<div class="card  mt-2">
                       	<div class="card-body">         
                       	
                       	
                       	     <h5 class="text-heading mb-4">Payment plan</h5>
                       	     
                       	     
                       	     
							 {!! $property->payment_plan_details !!}

 
								</div>
							</div>
 
								<div class="card  mt-2 mb-5  ">
                       	<div class="card-body">         
                       	
                       	
                       	     <h5 class="text-heading mb-4">map</h5>
                       	     
                       	     
                       	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28881.42151956457!2d55.25914763476562!3d25.19722950000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682829c85c07%3A0xa5eda9fb3c93b69d!2sDubai%20Mall!5e0!3m2!1sen!2sin!4v1689413677078!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       	      
 
								</div>
							</div>
							
							
							
					 
							



			
                                    </div>			 

            
                
                
			
                
               



<div class="col-md-4  "> 
				
				    
				 
 @include('property.lead_form')
				 
			
				</div>
				
				
				</div>
</div>
				
				
				</section>

@endsection

  
@section('scripts')
  
 <?php
 
 /*
 
 
  /%
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgIiu1r-o40DDHF1RCfP4OUrAqoynXf4s&callback=initMap&v=weekly&language=en&region=JP&channel=2" async></script>
<script type="text/javascript">
    // This example displays a map with the language and region set
    // to Japan. These settings are specified in the HTML script element
    // when loading the Google Maps JavaScript API.
    // Setting the language shows the map in the language of your choice.
    // Setting the region biases the geocoding results to that region.
    /*
    let map;
    
    function initMap() {
        var latv = '25.0999584';
        var lngv = '55.1155389';
    
      const mapOptions = {
        zoom: 15,
        center: { lat:25.0999584 , lng:55.1155389 },
      };
    
      map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
    
      const marker = new google.maps.Marker({
        // The below line is equivalent to writing:
        // position: new google.maps.LatLng(-34.397, 150.644)
        position: { lat: 25.0999584, lng:55.1155389 },
        map: map,
      });
      // You can use a LatLng literal in place of a google.maps.LatLng object when
      // creating the Marker object. Once the Marker object is instantiated, its
      // position will be available as a google.maps.LatLng object. In this case,
      // we retrieve the marker's position using the
      // google.maps.LatLng.getPosition() method.
      const infowindow = new google.maps.InfoWindow({
        content: "<p>Marker Location:" + marker.getPosition() + "</p>",
      });
    
      google.maps.event.addListener(marker, "click", () => {
        infowindow.open(map, marker);
      });
    }
    
    *
</script>

*/
?>
 

@endsection

 