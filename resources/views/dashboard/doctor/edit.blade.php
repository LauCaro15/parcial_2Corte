@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
<form action="{{ route("doctor.update", $doctor->id)}}" method="post">
    @method('put')
    @include('dashboard.doctor.form')
</form>
@endsection