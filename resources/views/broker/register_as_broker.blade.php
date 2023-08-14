@extends('layouts.app-master')

@section('title')
    Create Broker
@endsection

@section('content')
  
        
                   <h2> Register as a broker </h2>
                  
                   <div class="row">
                   
                
                   
               <div class="col-md-6">
                  
  <form method="POST" target="_blank" action="{{ route('register_as_broker_post') }}"   enctype="multipart/form-data">
                            @csrf
 
        

 
                <div id="validation_results">validation_results</div>

<div id="render-container"></div>
           

  
        <button type="submit" class="btn btn-primary w-100 mt-5 mb-5">Submit</button>
 
        
        
        
                        </form>
                        
</div></div>


@endsection



  

@section('style')        
                 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />        
                 
                 
                 
                    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection


@section('scripts')
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
  
  
  <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/rxjs/2.5.3/rx.lite.js"></script>
  <script>
  jQuery(function($) {
 

   var formData= <?php echo $customform->form_json; ?>;
    
     
 var formRenderInstance = $('#render-container').formRender({ formData });
 
  });







$(function () {


var $input = $("[name='email']");

 
 
        $results = $('#validation_results');

    //Rx.Observable.getJSON()

    /* Only get the value from each key up */
    Rx.Observable.fromEvent($input, 'keyup')
        .map(function (events) {
            return events.target.value;
        })
        .debounce(50 /*ms*/)
        .distinctUntilChanged()
        .filter(function (text) {
            
            return text.length > 2;
        
            
        })
        
        .flatMapLatest(function (query) {
            
            return searchWikipedia(query)
        
            
        })
        
        
        .subscribe(function (data) {
             
             
             console.log(data.message );
             
               $($results).text(data.message);
         //   $( "sddsfsd"+ data.message  ).text($results);
            
        //    $( "sddsfsd"+ data.message  ).text($results);
            
            
        });

});

function searchWikipedia(email) {
    
    
   $.ajaxSetup(
   {
      headers:
      {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });
   
   
    return  $.ajax({
        url: '{{route("validate_broker_registeration")}}',
 
 
            method: 'post',
        data: {
           
            email: email
        }
    }).promise();
     
    
    
}





  </script>

@endsection
  