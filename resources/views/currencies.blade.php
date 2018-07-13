@extends('layout')

@section('title', 'Currency market')

@section('content')

	<h2>Currency market</h2>
	@if($currencies->count() > 0)

		<table class="table table-striped">
			<thead>
		        <tr>
		            <th>Logo</th>
		            <th>Title</th>
		            <th>Short Name</th>
		            <th>Price</th>
		            <th>Actions</th>
		        </tr>
		    </thead>
		    <tbody>
		    	@foreach ($currencies as $currency)
					<tr>
						<td>
							<img src="{{ $currency->logo_url }}" alt="{{$currency->title}}">
						</td>
						<td>
							<h3><a href="{{route('currencies.show', ['id' => $currency->id])}}">{{ $currency->title }}</a></h3>
						</td>
						<td>
							<h3>{{ $currency->short_name }}</h3>
						</td>
						<td>
							<h3>{{ $currency->price }}</h3>
						</td>

						<td>
		                    <a style="font-weight: 600;" class="btn btn-info" href="{{route('currencies.edit', ['id' => $currency->id])}}">Edit</a>

		                    <form style="display: inline-block;" action="{{ route('currencies.destroy', ['id' => $currency->id]) }}" method="POST">
		                        {{ csrf_field() }}
		                        {{ method_field('DELETE') }}

		                    <button style="font-weight: 600;" class="btn btn-danger" onsubmit="return confirm('Are you sure?')" type="submit">Delete</button>
		                    </form>

		                </td>
					</tr>
		    	@endforeach
		    </tbody>
		</table>

	@else

		<p>No currencies</p>

	@endif


@endsection