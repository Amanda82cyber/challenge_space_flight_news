@extends('layouts.template')
@section('title', $title)

@section('content')
		@include($component, ['contents' => $contents])
@endsection
