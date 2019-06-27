@extends('vehicles.layout')

@section('content')

    <div class="container">    
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1>Vehicles</h1>
                </div>
                <div align="right">
                    <a class="btn btn-success" href="{{ route('vehicles.create') }}">Add Vehicle</a>
                </div>
            </div>
        </div>
    </div>   

    @if ($message = Session::get('success'))
        <div class="container">
            <div class="alert alert-success alert-dismissable fade show flash">
                <p>{{ $message }}</p>
            </div>
        </div>
    @endif

   <div class="container">    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Vehicle Name</th>
                    <th class="text-center">Number of Wheels</th>
                    <th class="text-center">Vehicle Color</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            @foreach ($vehicles as $vehicle)
                <tbody>
                    <tr>
                        <td style="width:10%" class="text-center">{{ $vehicle->id }}</td>
                        <td style="width:20%" class="text-center">{{ $vehicle->vname }}</td>
                        <td style="width:20%" class="text-center">{{ $vehicle->vwheel }}</td>
                        <td style="width:25%" class="text-center">{{ $vehicle->vcolor }}</td>   
                        <td>
                            <form action="{{ route('vehicles.destroy',$vehicle->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('vehicles.show',$vehicle->id) }}">Show</a>  
                                <a class="btn btn-primary" href="{{ route('vehicles.edit',$vehicle->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>         
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
{!! $vehicles->links() !!}
@endsection