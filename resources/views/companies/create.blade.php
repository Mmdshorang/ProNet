@extends('layouts.app')

@section('content')
    <h1>ایجاد شرکت جدید</h1>

    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">نام شرکت</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">ایمیل</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>

            <label for="website">وبسایت</label>
            <input type="url" id="website" name="website">
        </div>
        <div>
            <label for="description">توضیحات</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <button type="submit">ایجاد شرکت</button>
    </form>
@endsection
