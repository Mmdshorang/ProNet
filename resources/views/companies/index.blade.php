// resources/views/companies/index.blade.php
@extends('layouts.app')

@section('content')
    <h1>Companies</h1>
    <a href="{{ route('companies.index') }}">لیست شرکت‌ها</a>

    <ul>
        @foreach($companies as $company)
            <li>
                <a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection