@extends('dashboard.master')
@section('content')
    <form action="{{ route('category.store')}}" method="category">
        @include('dashboard.category.form')
    </form>
@endsection