@extends('vehicles.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Add Vehicle</h3>
            </div>
        </div>
    </div>
    
<div align="right">
 <a href="{{ route('vehicles.index') }}" class="btn btn-default">Back</a>
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
                <div class="form-group">
                    <strong>Vehicle Name:</strong>
                    <input type="text" name="vname" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number of Wheels:</strong>
                    <input type="text" name="vwheel" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vehicle Color:</strong>
                    <input type="text" name="vcolor" class="form-control">
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
@endsection