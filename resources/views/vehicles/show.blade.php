@extends('vehicles.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-9">
            <div class="card">
                <div class="card-body">

                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h3>Show Vehicle</h3>
                            </div>
                        </div>
                    </div>
                
                    <div align="right">
                     <a href="{{ route('vehicles.index') }}" class="btn btn-primary">Back</a>
                    </div>
                
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Vehicle Name:  </strong>
                                {{ $vehicle->vname }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Number of Wheels:  </strong>
                                {{ $vehicle->vwheel }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Vehicle Color:  </strong>
                                {{ $vehicle->vcolor }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<?php $dollars ?>