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
                                <h3>Add Vehicle</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div align="right">
                     <a href="{{ route('vehicles.index') }}" class="btn btn-primary">Back</a>
                    </div>
                
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <form action="{{ route('vehicles.store') }}" method="POST">
                        @csrf
                
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label font-weight-bold">Vehicle Name: </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="vname" class="form-control">
                                        </div>
                                </div>
                            </div>
                
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row">
                                     <label class="col-sm-3 col-form-label font-weight-bold">Number of Wheels: </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="vwheel" class="form-control">
                                        </div>
                                </div>
                            </div>
                
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label font-weight-bold">Vehicle Color: </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="vcolor" class="form-control">
                                        </div>
                                </div>
                                <!-- </div> -->
                            </div>
                
                            <div class="form-group">
                               <div class="col-md-6 col-md-offset-4">
                                     <button type="submit" class="btn btn-primary">
                                           Create
                                    </button>
                                </div>
                            </div>
                            <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center"> 
                                <button type="submit" class="btn btn-success">Add Vehicle</button>
                            </div>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection