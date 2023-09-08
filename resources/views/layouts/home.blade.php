<!doctype html>
<html lang="en"   >
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
     


  {!! SEO::generate() !!}
 

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"  > 
 
     
         <script src="https://kit.fontawesome.com/57a36569a8.js" crossorigin="anonymous"></script>
         
         
            @yield('style')
            
              <style>
 
  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Roboto+Condensed&display=swap');
 
 
            .ck-editor__editable[role="textbox"] {
                 
                min-height: 200px;
            }
            
            
            body{
                
                font-family: 'Nunito', sans-serif;
font-family: 'Roboto Condensed', sans-serif;
            }
            
            
            .social_media_links{
                text-align:right;
            }
            
            .saksh_justify{
                
          
             text-align: justify;
  text-justify: inter-word;
  
            }
            
        </style>
     
       
                 
                    <meta name="csrf-token" content="{{ csrf_token() }}" />        @livewireStyles 
</head>
<body>
 
 
 
    @include('layouts.partials.navbar') 
                                                                                                       
                                                 
                                                                                                            
    
    <main  class="saksh_contents">
 
    @include('layouts.partials.messages')
        @yield('content')
  
 
    </main  >
 

      <div class="footer_section">
 
  
  
    @include('layouts.partials.model')
  
    @include('layouts.partials.footer')
  
</div> 


<script src="https://code.jquery.com/jquery-3.6.3.js" ></script>  
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>

 


 
     @yield("scripts") 
          <script> 
     
 

/*
    var url = '//sakshamapp.com/js/wati.js';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                "enabled":true,
                "chatButtonSetting":{
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "marginLeft": "0",
                    "marginRight": "20",
                    "marginBottom": "20",
                    "ctaIconWATI":false,
                    "position":"right"
                },
                "brandSetting":{
                    "brandName":"Wati",
                    "brandSubTitle":"undefined",
                    "brandImg":"https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
                    "welcomeText":"Hi there!\nHow can I help you?",
                    "messageText":"Hello, %0A I have a question ",
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "autoShow":false,
                    "phoneNumber":"+918840574997"
                }
                };
                s.onload = function() {
                    CreateWhatsappChatWidget(options);
                };
               // var x = document.getElementsByTagName('script')[0];
               // x.parentNode.insertBefore(s, x);
                
                */
                </script>  
  
      
      
  
                   
               <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
 

   
<script src="https://unpkg.com/@yaireo/tagify"></script>
  <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
 
       <script> 
       
       
       
       
    //   tagify location
      var location_input = document.querySelector('.locations');
  
 
     var location_input_values = ["kanpur", "mumbai","delhi" ];
 
  
   make_tagify(location_input,location_input_values);
  
    
    
     
        
  
   make_tagify(document.querySelector('.rent_sell'),["rent", "sell","both" ]);
   
   
   make_tagify(document.querySelector('.bedrooms'),["studio", "1","2","3","4","5" ]);
   make_tagify(document.querySelector('.bathrooms'),["1", "1.5","2","3","4","5" ]);
   
   
   
  var home_type_values=["Houses","Townhomes","Multi-family","Condos/Co-ops ","Lots/Land ","Apartments","Manufactured"]
   
   make_tagify(document.querySelector('.home_type'),home_type_values);
   
   
   
    function make_tagify(selector,values)
    {

     
    tagify = new Tagify(selector, {
      whitelist: values,
      
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    }
    
    
    
    
    
    
    
    
     
$(document).ready(function(){



 

    function filter_data()
    {   
        
        
       var data_obj=  $("#search_form").serializeArray();


 
    
            
    
   $.ajaxSetup(
   {
      headers:
      {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });
   
   
   
        $.ajax({
            url: "{{route('search_property')}}",
            method:"POST",
            data: data_obj,
            success:function(data){
                
                console.log(data);
             table=   arrayToTable(data);
                $('.filter_data').html(table);
            }
        });
       
        
    }

   
    

    $('.common_selector').click(function(event){
        
  event.preventDefault();
 




      filter_data();
    });
    
     



});
 function arrayToTable(tableData) {
    var table = $('<table></table>');
    
    
    
    
    $(tableData).each(function (i, rowData) {
        
        
        
        var row = $('<tr></tr>');
        
        
        $(rowData).each(function (j, cellData) {
            
            
            row.append($('<td>'+cellData.id+'</td>'));
            
            row.append($('<td>'+cellData.project_name+'</td>'));
            
            row.append($('<td>'+cellData.property_type+'</td>'));
            
            row.append($('<td>'+cellData.address+'</td>'));
            
            row.append($('<td>'+cellData.unit_details+'</td>'));
            
            row.append($('<td>'+cellData.property_thumbnail_url+'</td>'));
            
            
        });
        
        
        
        
        table.append(row);
    });
    return table;
}


 
          </script>      @livewireScripts
  </body>
</html>
