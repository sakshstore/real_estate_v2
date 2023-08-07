@extends('layouts.app-master')

@section('content')


  @php
 
$tag_array=array();
foreach($user->tags as $tag)
{
 

array_push($tag_array , $tag->name ) ;

}


$tag_str=implode(",",$tag_array);
@endphp

 

        <h1>{{ $user->email }}</h1>
      
</div>

  
 
         
             
             @if( $user->status <> 'Banned')
   <a href="{{ route('susend_user', [ $user->id , 'Banned' ] ) }}" class="btn btn-info">Suspend User</a>
    
  @else

   <a href="{{ route('susend_user', [$user->id , 'Active']) }}" class="btn btn-info">Unsuspend User</a>

@endif

  
  
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profile</button>
  </li>
  
   
  
  
  
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Notification</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Login History</button>
  </li>
   
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"> <div class="mt-4">
            <div>
                Name: {{ $user->name }} <br /> Status {{ $user->status }} 
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>
        </div></div>
      
        
        
        
        
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">   <table class="table table-striped">
            
            <tbody>
                @foreach( $user->notifications  as $notification)
                    <tr>
                        <th > @if(isset($notification->data['message']))         {{  $notification->data['message'] }}
                        @endif</th>
                         
                          <th >  {{ $notification->created_at    }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table></div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">   <table class="table table-striped">
            
            <tbody>
                @foreach( $login_history  as $row)
                    <tr>
                        <th >     {{  $row->ip }} </th>
                         
                          <th >  {{ $row->created_at    }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table></div>
  
</div>



        
    <div class="mt-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection


 
