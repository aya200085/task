@extends('dashboard.master')
@section('title')
    state page
@endsection
@section('content')
    <div class="card">
        <h5 class="card-header">{{$title}}</h5>
        {!! $dataTable->table([
'class'=>'table-responsive dataTable table table-striped table-hover table-bordered'
]) !!}
    </div>
    </div>

    {!! $dataTable->scripts() !!}

@endsection
