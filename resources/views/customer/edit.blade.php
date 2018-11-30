@extends('customer.cmaster')

@section('album')
    Edit Page

    edit id is {{ $customer->id }}

    Suppose there is an edit form

    now call the update method    in the case of customer update the updated_at field

    and update using Laravel Collective Form Facade


    {{ Form::model($user, ['route' => ['customers.update', $customer->id]]) }}

@endsection