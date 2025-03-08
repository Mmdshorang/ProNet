@extends('layouts.app')

@section('content')
    <h1>{{ $company->name }}</h1>
    <p>{{ $company->description }}</p>
    <p>Website: <a href="{{ $company->website }}">{{ $company->website }}</a></p>
@endsection