@extends('student.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

            <h2>Welcome to Laravel 5.8 CRUD</h2>

        </div>
        <div class="pull-right">

           <a class="btn btn-success" href="{{ route('student.create') }}"> Create</a>

        </div>
    </div>
</div>  

<table class="table table-bordered">
    <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Description</th>
        <th width="280px">Action</th>
    </tr>

        @foreach ($table as $tab)       
        
        <tr>
           <td>{{$tab->id}}</td>
           <td>{{$tab->name}}</td>
           <td>{{$tab->description}}</td> 

           <td>
           <form action="{{ route('student.destroy',$tab->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('student.show',$tab->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('student.edit',$tab->id) }}">Edit</a>

                @csrf

                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td> 
        </tr>

        @endforeach

        
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif

@endsection