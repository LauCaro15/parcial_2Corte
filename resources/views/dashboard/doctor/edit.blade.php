@extends('dashboard.master')
@section('content')
<form action="{{ route("doctor.update", $doctor->id)}}" method="doctor">
    @method('put')
    @include('dashboard.doctor.form')
</form>

@endsection