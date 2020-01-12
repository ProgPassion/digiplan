@extends('master')


@section('title', 'Digiplan')


@section('content')
<div class="bg-primary overflow-hidden p-3 rounded">
	<span class="d-inline-block float-left hotels-desc-padding">
		Go back to all hotels page
	</span>
	<span class="d-inline-block float-right">
			<a class="btn btn-warning" href="/hotels">All Hotels</a>
	</span>
</div>
<h2>Hotel Detail</h2>
<div class="bg-white rounded text-dark hotels-desc-padding">
	<div class="main-hotel-detail">
		<h3 class="text-center">Main Hotel-Detail</h3>
		<img src="/storage/{{$data->img_path}}" />
		<div class="main-hotel-detail-label">
			<p>Hotel name</p>
			<p>Hotel location</p>
			<p>Nr of rooms</p>
		</div>
		<div class="main-hotel-detail-data">
			<p>{{$data->name}}</p>
			<p>{{$data->location}}</p>
			<p>200</p>
		</div>
	</div>
</div>
@endsection