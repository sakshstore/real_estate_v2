 
            <form action="{{ route('settings_logo' ) }}"
      class="dropzone"
      id="logo_dropzone">
    
        @csrf
      
      
      
</form>
 
 
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
 
 
 let myDropzone =new Dropzone("#logo_dropzone" ,options  );


  mockFile = { name: '{{$settings->app_logo}}'  };
  
    
    
  
  
  
  
  
 myDropzone.displayExistingFile(mockFile, '{{asset($settings->app_logo)}}');
 
 
 
  
  </script>
        
@endsection

