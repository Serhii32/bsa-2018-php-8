@extends('layout')

@section('title', 'Create currency')

@section('content')

	<h2>Create currency</h2>

	<form action="{{route('currencies.store')}}" method="post">

        {{csrf_field()}}
		
		<input class="form-control" type="text" name="title" placeholder="Title" value="{{ old('title') }}">
		@if($errors->has('title'))
		    <div class="alert alert-danger">{{$errors->first('title')}}</div>
		@endif

		<input class="form-control" type="text" name="short_name" placeholder="Short name" value="{{ old('short_name') }}">
		@if($errors->has('short_name'))
		    <div class="alert alert-danger">{{$errors->first('short_name')}}</div>
		@endif

		<input class="form-control" type="text" name="logo_url" placeholder="Image link" value="{{ old('logo_url') }}">
		@if($errors->has('logo_url'))
		    <div class="alert alert-danger">{{$errors->first('logo_url')}}</div>
		@endif

		<input class="form-control" type="text" name="price" placeholder="Price" value="{{ old('price') }}">
		@if($errors->has('price'))
		    <div class="alert alert-danger">{{$errors->first('price')}}</div>
		@endif

		<input style="font-weight: 600;" class="btn btn-success" type="submit" value="Save">

    </form>

@endsection