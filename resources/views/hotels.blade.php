@extends('master')


@section('title', 'Digiplan')


@section('content')
<div class="bg-primary overflow-hidden p-3 rounded">
	<span class="d-inline-block float-left hotels-desc-padding">
		If you want to promote your hotel to this site the button
	</span>
	<span class="d-inline-block float-right">
		@if(is_object($data['userOwnHotel']))
			<a class="btn btn-warning" href="/hotel/{{$data['userOwnHotel']->id}}/edit">Edit</a>
		@else
			<a class="btn btn-warning" href="/create">Create</a>
		@endif	
	</span>
</div>
<h2>Hotels</h2>
<div class="bg-white rounded text-dark hotels-desc-padding">
	@foreach($data['hotels'] as $hotel)
	<div class="hotel-desc-wrapper">
		<div class="img-container">
			<img src="/storage/{{$hotel->img_path}}" />
		</div>
		<div class="hotel-detail-info">
			<table class="table">
					<tr>
						<td colspan="2"><h3>Hotel Info</h2></td>
					</tr>
					<tr>
						<td>Hotel:</td>
						<td><strong>{{$hotel->name}}<strong></td>
					</tr>
					<tr>
						<td>Location:</td>
						<td><strong>{{$hotel->location}}</strong></td>
					</tr>
					<tr>
						<td class="text-center" colspan="2"><strong><a href="/hotel/{{$hotel->id}}">View Details</a></strong></td>
					</tr>
			</table>
		</div>
	</div>
	@endforeach
</div>
@endsection