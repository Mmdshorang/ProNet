@extends('layouts.app')

@section('content')
    <h1>{{ $company->name }}</h1>
    <p><strong>ایمیل:</strong> {{ $company->email }}</p>
    <p><strong>وبسایت:</strong> {{ $company->website }}</p>
    <p><strong>توضیحات:</strong> {{ $company->description }}</p>

    <a href="{{ route('companies.edit', $company->id) }}">ویرایش</a>
    <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">حذف</button>
    </form>
@endsection
