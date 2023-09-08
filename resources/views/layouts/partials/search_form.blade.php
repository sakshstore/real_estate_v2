
 <form id="search_form" >
     
     
     <div class="container">




<div class="row">
 
     
     
    <div class="col-2">
       
 <label for="locations" class="  col-form-label">Location</label> 

        <input id="locations" name="locations" placeholder="Type Address" type="text" class="form-control locations" required="required">
      </div>
    <div class="col-2">
        
        
 <label for="type" class="  col-form-label">Type</label> 

        
        <input id="rent_sell" name="rent_sell" placeholder="rent/sell" type="text" class="form-control rent_sell" required="required">
        
         
    </div>



    <div class="col-2">
        
         




        
  
 <label for="price" class="  col-form-label">Price</label> 

<br />
    <label class="  col-form-label" for="minimum_price">Minimum Price</label> 
    
    
            <input type="range" name="minimum_price" id="minimum_price" value="200" min="100000" max="1000000">



  <label class=" col-form-label" for="maximum_price">Maximum Price</label> 
      
     
       <input type="range" name="maximum_price" id="maximum_price" value="200" min="1000000" max="10000000">





    </div>
   
    <div class="col-2">
    <label for="bedrooms" class="  col-form-label">Number of Bedrooms</label> 
    
    
        <input id="bedrooms" name="bedrooms"  type="text" class="form-control bedrooms" required="required">
        
        
   
     <label for="select1" class=" col-form-label">Number of Bathrooms</label>
    
    
    
        <input id="bathrooms" name="bathrooms"   type="text" class="form-control bathrooms" required="required">
        
        
        
     
    </div>
  
    <div class="col-2"> <label for="select1" class=" col-form-label">Home Type</label>
    
        
    
        <input id="home_type" name="home_type"   type="text" class="form-control home_type" required="required">
        
 
    </div>
   
      
      
    <div class=" col-2">
         
   
   
   
      <button name="submit" type="submit" class="btn btn-primary common_selector m-5 w-100">  Search now </button>
    </div>
  
 
 
<div class="filter_data">  </div>

</div>



</div>

</div>

 </form>
    