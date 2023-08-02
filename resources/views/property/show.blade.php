@extends('layouts.app')

@section('template_title')
    {{ $property->name ?? "{{ __('Show') Property" }}
@endsection

@section('content')



   <a  href="{{ route('set_property_image',$property->id) }}">{{ __('Gallery Images') }}</a>
   
   
   
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Property</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('properties.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Bedrooms:</strong>
                            {{ $property->bedrooms }}
                        </div>
                        <div class="form-group">
                            <strong>Starting Price:</strong>
                            {{ $property->starting_price }}
                        </div>
                        <div class="form-group">
                            <strong>Tenure:</strong>
                            {{ $property->tenure }}
                        </div>
                        <div class="form-group">
                            <strong>Property Type:</strong>
                            {{ $property->property_type }}
                        </div>
                        <div class="form-group">
                            <strong>Size From:</strong>
                            {{ $property->size_from }}
                        </div>
                        <div class="form-group">
                            <strong>Completion:</strong>
                            {{ $property->completion }}
                        </div>
                        <div class="form-group">
                            <strong>Interiors:</strong>
                            {{ $property->interiors }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Plan Short:</strong>
                            {{ $property->payment_plan_short }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Plan Details:</strong>
                            {{ $property->payment_plan_details }}
                        </div>
                        <div class="form-group">
                            <strong>Down Payment:</strong>
                            {{ $property->down_payment }}
                        </div>
                        <div class="form-group">
                            <strong>Connectivity:</strong>
                            {{ $property->connectivity }}
                        </div>
                        <div class="form-group">
                            <strong>Unit Details:</strong>
                            {{ $property->unit_details }}
                        </div>
                        <div class="form-group">
                            <strong>Floor Details:</strong>
                            {{ $property->floor_details }}
                        </div>
                        <div class="form-group">
                            <strong>Amenities:</strong>
                            {{ $property->amenities }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $property->location }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $property->address }}
                        </div>
                        <div class="form-group">
                            <strong>Location Gps:</strong>
                            {{ $property->location_gps }}
                        </div>
                        <div class="form-group">
                            <strong>Gallery:</strong>
                            {{ $property->gallery }}
                        </div>
                        <div class="form-group">
                            <strong>Broucher:</strong>
                            {{ $property->broucher }}
                        </div>
                        <div class="form-group">
                            <strong>Broker:</strong>
                            {{ $property->broker }}
                        </div>
                        <div class="form-group">
                            <strong>Developer:</strong>
                            {{ $property->developer }}
                        </div>
                        <div class="form-group">
                            <strong>Tags:</strong>
                            {{ $property->tags }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
