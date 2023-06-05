@extends('dashboard.master')
@section('title')
    edit Country
@endsection
@section('content')
    <form action="{{route('states.update',$state->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('Patch')
        <div class="container mt-3">
            <div class="card mb-4">
                <h5 class="card-header">Edit Country</h5>
                <div class="card-body">


                    <div class="mb-3">
                        <label class="form-label">Name </label>
                        <input type="text" value="{{$state->name}}" class="form-control w-50" name="name">

                        <div class="alert-danger">{{ $errors->first('name') }}</div>
                    </div>
                    <br>
                    <div class="alert-danger">{{ $errors->first('name') }}</div>


                    <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();"
                            class="btn btn-primary">Edit
                    </button>


                </div>
            </div>
        </div>
    </form>
@endsection
