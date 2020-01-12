@extends('master')


@section('title', 'Digiplan')


@section('content')
<div class="bg-primary overflow-hidden p-3 rounded">
	<p class="bg-danger p-1">You are a step away from being part of the promotion of your hotel</p>
	<h3 class="text-center">Complete the form below with your detail</h3>
</div>
<h2>Enter the details:</h2>
<div class="row text-dark">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default mb-0 shadow">
            <div class="panel-heading">Register</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="/create" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Hotel Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                        <label for="location" class="col-md-4 control-label">Location</label>

                        <div class="col-md-6">
                            <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required>

                            @if ($errors->has('location'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('location') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <label for="file" class="col-md-4 control-label">Image</label>

                        <div class="col-md-6">
                            <input id="file" type="file" class="hotels-desc-padding" name="image" value="{{ old('image') }}" required>

                            @if ($errors->has('file'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection