@extends('app')

@section('content')
<div class="container">
    <div class="row">
        Displaying a registration page for the course: {!! $course !!}.

        {!! Form::open() !!}

        {!! Form::close() !!}
    </div>
</div>
@endsection