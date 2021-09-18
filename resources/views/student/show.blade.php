@extends('student.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

            <h2> Show Product</h2>

        </div>
        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>ID:</strong>

            {{ $student->id }}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>Name:</strong>

            {{ $student->name }}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>Description:</strong>

            {{ $student->description }}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>Created At:</strong>

            {{ $student->created_at }}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>Updaed At:</strong>

            {{ $student->updated_at }}

        </div>
    </div>
</div>

@endsection