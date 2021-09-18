@extends('student.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

            <h2>Add Detail</h2>

        </div>
        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>

        </div>
    </div>
</div>

<form action="{{ route('student.store') }}" method="POST">

    @csrf
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div> 
</form>
    
@endsection