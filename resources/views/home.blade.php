@extends('layouts.app-master')


@section('title')

Welcome, {{ auth()->user()->email }}

@endsection

@section('content')
  
            
   <?php          foreach ( \Auth()->user()->notifications as $notification) {
   
    
   
   if(isset($notification->data['message']))
   {
    echo   $notification->data['message']  ;
  
  
    echo "<hr>";
    
   }
    
 
}

?>
        </div>
    </div>
@endsection
