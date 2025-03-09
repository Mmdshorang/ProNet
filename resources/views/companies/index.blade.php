@extends('layouts.app')

@section('content')
    <h1>Companies</h1>
    <a href="{{ route('companies.create') }}">اضافه کردن شرکت جدید</a>

    <ul>
        @foreach($companies as $company)
            <li>
                <a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
