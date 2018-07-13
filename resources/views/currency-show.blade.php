@extends('layout')

@section('title', $currency->title)

@section('content')

	<h2>{{$currency->title}}</h2>
	<a style="font-weight: 600;" class="edit-button btn btn-info" href="{{route('currencies.edit', ['id' => $currency->id])}}">Edit</a>
				
	<form style="display: inline-block;" action="{{ route('currencies.destroy', ['id' => $currency->id]) }}" method="POST">

		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		                
		<button style="font-weight: 600;" class="delete-button btn btn-danger" onsubmit="return confirm('Are you sure?')" type="submit">Delete</button>
	</form>

	<table class="table table-striped">
		<thead>
			<tr>
		        <th>Name</th>
		        <th>Value</th>
		    </tr>
		</thead>
		<tbody>
			<tr>
				<th>Image</th>
		        <td><img src="{{ $currency->logo_url }}" alt="{{$currency->title}}"></td>
			</tr>
			<tr>
				<th>Title</th>
		        <td><h3>{{$currency->title}}<h3></td>
			</tr>
			<tr>
				<th>Short name</th>
		        <td><h3>{{$currency->short_name}}<h3></td>
			</tr>
			<tr>
				<th>Price</th>
		        <td><h3>{{$currency->price}}<h3></td>
			</tr>
		      
		</tbody>
	</table>

@endsection