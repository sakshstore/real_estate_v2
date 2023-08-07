@extends('layouts.app-master')


@section('title')
    Create Team
@endsection

@section('content')
  
  
                        <span class="header">Create Team</span>
                  
                  
                        <form method="POST" action="{{ route('teams.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('team.form')

                        </form>
                        
    </section>
@endsection
