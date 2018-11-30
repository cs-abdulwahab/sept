@extends('customer.cmaster')


@section('top')

    @parent

@endsection

@section('album')

    Show Customer  Nicely {{ $customer->id}}

@endsection