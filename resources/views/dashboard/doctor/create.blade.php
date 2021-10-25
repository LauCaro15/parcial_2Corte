@extends('dashboard.master')
@section('content')
    <form action="{{ route('doctor.store')}}" method="doctor">
        @include('dashboard.doctor.form')
    </form>
@endsection