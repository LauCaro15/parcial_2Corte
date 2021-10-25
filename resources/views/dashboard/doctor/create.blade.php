@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
    <form action="{{ route('doctor.store') }}" method="post">
        @include('dashboard.doctor.form')
    </form>
@endsection