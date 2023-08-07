@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-success" role="alert">
                <i class="fa fa-check"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-success" role="alert">
            <i class="fa fa-check"></i>
            {{ $data }}
        </div>
    @endif
@endif

 
                        
 @if (session('flash_message'))
            <div class="alert alert-success" role="alert">
                {{ session('flash_message') }}
            </div>
        @endif
           
           
                        
 @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        
        
         
          @if (session('error'))
        
    
            <div class="alert alert-warning" role="alert">
                {{ session('error') }}
            </div>
        @endif

            
            
            