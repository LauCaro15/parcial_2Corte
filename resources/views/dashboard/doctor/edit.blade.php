@extends('dashboard.master')
@section('content')
<form action="{{ route("category.update", $category->id)}}" method="category">
    @method('put')
    @include('dashboard.category.form')
</form>

@endsection