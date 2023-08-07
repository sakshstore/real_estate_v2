@extends('layouts.app-master')


@section('title')
    Update Team
@endsection

@section('content')
 





             
             
                        <span class="header">Update Team</span>
                
                
            <form action="{{ route('update_avatar',$team->id ) }}"
      class="dropzone"
      id="avatar">
    
        @csrf
      
      
      
</form>
 
 
 
 <hr />
                        <form method="POST" action="{{ route('teams.update', $team->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('team.form')

                        </form>
                        
                        
  
@endsection



  @section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
                         
 
        
@endsection
@section('scripts')
 
 
 
 
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

 <script>
 var options={
     
       
      acceptedFiles: ".jpeg,.jpg,.png"
     
 };
 
 
 let myavatar=new Dropzone("#avatar" ,options  );


  mockFile = { name: '{{$team->avatar}}'  };
  
  
 myavatar.displayExistingFile(mockFile, '{{asset($team->avatar)}}');
 
 
 
  
  </script>
        
@endsection

