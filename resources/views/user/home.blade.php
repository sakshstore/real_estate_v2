@extends('layouts.app-master')

@section('content')
    
    
 
 
 <div class="row">
     <div class="col-3">
                                
                                <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Total Listing</h5>
                                                <h3 class="my-2 py-1">{{ count($properties) }}   </h3>
                                                 
                                                </p>
                                            </div>
                                       
                                   
                                </div>
                                </div > 
     
     
     
     
     <div class="col-3">
         
         
         
    
 <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Last Login</h5>
                                                <h3 class="my-2 py-1">{{ $user->last_login_at }}   </h3>
                                               
                                            </div>
                                       
                                   
                                </div> 
                                
                                </div >   <div class="col-3"> <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Last Login  from IP</h5>
                                                <h3 class="my-2 py-1">{{ $user->last_login_ip }}   </h3>
                                                 
                                            </div>
                                       
                                   
                                </div> 
                                </div> 
                                
                                                            
                         @role('admin')     
                                <div class="col-3"> <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >  Last time Cron Run </h5>
                                                <h3 class="my-2 py-1">   {{ $last_cron_run_time}}  </h3>
                                                 
                                            </div>
                                       
                                   
                                </div> 
                                </div> 
                                @endrole
                                
                                         
                       
                                
                                
                                <div class="col-3">   <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >available_listing</h5>
                                                <h3 class="my-2 py-1">{{ $available_listing }}   </h3>
                                                
                                            </div>
                                       
                                   
                                </div></div>
                                
                                <div class="col-3">   <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >System Time</h5>
                                                <h3 class="my-2 py-1">{{ current_time() }}   </h3>
                                                
                                            </div>
                                       
                                   
                                </div></div>
                                
                                
                                
                                
                                      </div>
        
 
 
 <div class="row">
     <div class="col-6">
                           

    <canvas id="myChart" height="100px"></canvas>
  </div>    
  
  
  
                         @hasanyrole ('Executive|admin')     
                                
  <div class="col-6">
      
    property_submission  {{$subscription->property_submission}}
      
   
 
                             </div>
                             
                             
                                
                                @endhasanyrole
                                
                                
                             </div>
                        
    
    
@endsection






@section('scripts')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  

<script type="text/javascript">

  

      var labels =  {{ Js::from($labels) }};

      var users =  {{ Js::from($data) }};

  

      const data = {

        labels: labels,

        datasets: [{

          label: 'New System Users',

          backgroundColor: 'rgb(255, 99, 132)',

          borderColor: 'rgb(255, 99, 132)',

          data: users,

        }]

      };

  

 

  const config = {
  type: 'bar',
  data: data,
  options: {
      
       
    animations: {
      tension: {
        duration: 2000,
        easing: 'linear',
        from: 1,
        to: 0,
        loop: true
      }
    },
    scales: {
      y: { // defining min and max so hiding the dataset does not change scale range
        min: 0,
        max: 100
      }
    }
  }
};

      const myChart = new Chart(

        document.getElementById('myChart'),

        config

      );

  

</script>
 
@endsection
