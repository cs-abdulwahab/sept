@extends('customer.cmaster')



@section('album')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                @foreach($customers as $customer)

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                 alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">For Customer {{$customer->id   }} This is a wider card
                                    with
                                    supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    {{ Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) }}
                                    <div class="btn-group">


                                        <button type="button"
                                                onclick="window.location='{{ route('customers.show',$customer->id ) }}'"
                                                class="btn btn-sm btn-outline-secondary">View
                                        </button>


                                        <button type="button"
                                                onclick="window.location='{{ route('customers.edit',['customer'=>$customer] ) }}'"
                                                class="btn btn-sm btn-outline-secondary">Edit
                                        </button>

                                        {{--This is the delete button via Form / Laravel Colletive--}}
                                        {{ Form::button('Delete',[ 'type'=>'submit'  , 'class'=>'btn btn-sm btn-outline-secondary']) }}


                                    </div>
                                    {{ Form::close() }}
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach

            </div>
        </div>
    </div>
@endsection