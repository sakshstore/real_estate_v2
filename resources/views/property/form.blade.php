
           
  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
					<div class="col-md-8">
					
					
					
						<ul class="nav nav-tabs d-flex text-center justify-content-between" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="false" tabindex="-1">
                                     
									Overview
								</button>
							</li>

                            <li class="nav-item" role="presentation">
								<button class="nav-link" id="floorplan-tab" data-bs-toggle="tab" data-bs-target="#floorplan" type="button" role="tab" aria-controls="floorplan" aria-selected="false" tabindex="-1">
                                   
                                        Project Details
                                </button>
							</li>


                            
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="amenities-tab" data-bs-toggle="tab" data-bs-target="#amenities" type="button" role="tab" aria-controls="amenities" aria-selected="false" tabindex="-1">
                                   Amenities
                                </button>

							</li>


                            <li class="nav-item" role="presentation">
								<button class="nav-link" id="masterplan-tab" data-bs-toggle="tab" data-bs-target="#masterplan" type="button" role="tab" aria-controls="masterplan" aria-selected="false" tabindex="-1">
                                Floor Plan
                                </button>
							</li>


							<li class="nav-item" role="presentation">
								<button class="nav-link" id="paymentplan-tab" data-bs-toggle="tab" data-bs-target="#paymentplan" type="button" role="tab" aria-controls="paymentplan" aria-selected="false" tabindex="-1">
                                 Payment plan 
                                </button>
							</li>

							
                             
						</ul>


						<div class="tab-content" id="myTabContent">

							<div class="tab-pane active fade show" id="overview" role="tabpanel" aria-labelledby="overview-tab">
								<div class="pro-discraption-section-1">
								    
								    
 

									 

									<div class="property-table">
									  
									  
									   <div class="mb-3">
  <label for="project_name" class="form-label">Project Name</label>
  <input type="text" class="form-control" id="project_name" value="{{ $property->project_name }}" name="project_name"  >
</div>
 
									   <div class="mb-3">
  <label for="starting_price" class="form-label">starting_price</label>
  <input type="text" class="form-control" id="starting_price"  value="{{ $property->starting_price }}" name="starting_price"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="tenure" class="form-label">Tenure</label>
  <input type="text" class="form-control" id="tenure" name="tenure"   value="{{ $property->tenure }}" >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="completion" class="form-label">completion</label>
  <input type="text" class="form-control" id="completion" name="completion"   value="{{ $property->completion }}"   >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="property_type" class="form-label">property_type</label>
  <input type="text" class="form-control" id="property_type" name="property_type"   value="{{ $property->property_type }}"  >
</div>
 
									  
									   <div class="mb-3">
  <label for="garage" class="form-label">Garage</label>
  <input type="text" class="form-control" id="garage" name="garage"   value="{{ $property->garage }}"  >
</div>
 
								
									  
									   <div class="mb-3">
  <label for="bathrooms" class="form-label">Bathrooms</label>
  <input type="text" class="form-control" id="bathrooms" name="bathrooms"   value="{{ $property->bathrooms }}"  >
</div>
									    
							 
									  
									   <div class="mb-3">
  <label for="interiors" class="form-label">interiors</label>
  <input type="text" class="form-control" id="interiors" name="interiors"   value="{{ $property->interiors }}"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="unit_details" class="form-label">unit_details</label>
  <input type="text" class="form-control" id="unit_details" name="unit_details"   value="{{ $property->unit_details }}"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="payment_plan_short" class="form-label">payment_plan_short</label>
  <input type="text" class="form-control" id="payment_plan_short" name="payment_plan_short"   value="{{ $property->payment_plan_short }}"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="size_from" class="form-label">size_from</label>
  <input type="text" class="form-control" id="size_from" name="size_from"  value="{{ $property->size_from }}"   >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="latitude" class="form-label">latitude</label>
  <input type="text" class="form-control" id="latitude" name="latitude"  value="{{ $property->latitude }}"   >
</div>
 
								 
									   <div class="mb-3">
  <label for="longitude" class="form-label">longitude</label>
  <input type="text" class="form-control" id="longitude" name="longitude"  value="{{ $property->longitude }}"   >
</div>
  
									    
							 
							  <div class="mb-3">
  <label for="developer" class="form-label">developer</label>
 
    <input type="text" class="form-control" id="size_from" name="developer_id"  value="{{ $property->developer_id }}"   >
 
 
 
</div>   
                                        
                                    
                                    
                                    
                                    
                                         <div class="mb-3">
  <label for="broker" class="form-label">Broker</label>
  
   <input type="text" class="form-control" id="size_from" name="broker_id"  value="{{ $property->broker_id }}"   >
 
</div>   
                                        		   
  
									    </div>
								 
									
									
									    
									
									
									
									
                                </div>
        					</div>


							<div class="tab-pane fade" id="paymentplan" role="tabpanel" aria-labelledby="paymentplan-tab">
								<div class="pro-discraption-section-1 pro-discraption-overview">
                                     
									<div class="mb-3">
  <label for="payment_plan_details" class="form-label">payment_plan_details</label>
  <textarea class="form-control  editor" id="payment_plan_details" name="payment_plan_details"  rows="9">  {{ $property->payment_plan_details }} </textarea>
</div>   
									   
						
									    
 
								</div>
							</div>



							<div class="tab-pane fade" id="floorplan" role="tabpanel" aria-labelledby="floorplan-tab">
								<div class="pro-discraption-section-1 pro-discraption-overview">
                                  

                                      <div class="property-table">
                                          
                                          		<div class="mb-3">
  <label for="project_details" class="form-label">project_details ..</label>
  <textarea class="form-control  editor" id="project_details" name="project_details"  rows="9"> {{ $property->project_details }}</textarea>
</div>   
							
                                          
                                          
                                          
                                          
                                         
                                    </div>
								</div>
							</div>






							<div class="tab-pane fade" id="masterplan" role="tabpanel" aria-labelledby="masterplan-tab">
								<div class="pro-discraption-section-1 pro-discraption-overview">

                                   
				   
								    <div class="mb-3">
  <label for="floor_details" class="form-label">floor_details</label>
  <textarea class="form-control  editor" id="floor_details" name="floor_details"  rows="9"> {{ $property->floor_details }}</textarea>
</div>   
							
							 
								</div>
							</div>



							<div class="tab-pane fade" id="amenities" role="tabpanel" aria-labelledby="amenities-tab">
							   <div class="pro-discraption-section-1 pro-discraption-overview">
							 

                                    <div class="property-table">
                                        
                                         <div class="mb-3">
  <label for="aminities" class="form-label">Aminities</label>
  
  
   <input type="text" class="form-control tags" id="aminities" name="aminities"  value="{{ $property->aminities }}"   >
   
 

 
</div>   
                                        
                                         	 
                                         	 
                                         
                                    </div>



								</div>
							</div>

          
						</div>
					</div>

                      
                        
                        
                            