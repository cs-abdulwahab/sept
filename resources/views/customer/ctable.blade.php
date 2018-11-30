@extends('customer.cmaster')

@section('top')

    <div id="sec">





        <sample-component>

        </sample-component>

{{--

        <base-input
                v-model="username"
                label="Username : "
                placeholder="Enter your username"
        ></base-input>
--}}


        {{--

        <example-component title="HEADER TITLE ">

            asd

        </example-component>
--}}


    </div>

    <br/><br/><br/><br/><br/>


    <div id="vm4">

        <form @submit.prevent="validateBeforeSubmit" action="http://www.google.com" method="post">
            <input v-model="fname" v-validate.initial="'required|alpha_spaces|min:3'" class="form-control"
                   name="fname_field" placeholder="Enter First name"/>
            <input name="email_field" placeholder="Enter email" v-validate.initial="'required|email'"
                   v-model="email"/>
            {{--
                        <input placeholder="confirm password" v-validate.initial="'confirmed:pw_confirm'" name="confirm_field"
                               type="password" class="form-control"/>

                        <input placeholder="confirm password again" name="pw_confirm" ref="pw_confirm" type="password"
                               class="form-control"/>--}}
            <input value="123" placeholder="digita" v-validate.initial="'required|digits:3'" name="digits_field"
                   type="text"
                   class="form-control"/>

            <button type="submit"> Submit !</button>

            <p class="text-danger" v-show="errors.count()>0">There is a error

                {{--<span v-for()></span>--}}

            </p>
        </form>
    </div>


    {{--

        <div id="databinding">
            <input type="text" v-on:keyup.enter="showinputvalue"
                   v-bind:style="styleobj" placeholder="Enter Fruits Names"/>
            <h1 v-if="items.length > 0">Display Fruits Name</h1>
            <ul>
                <li v-for="a in items">@{{ a }}</li>
            </ul>
        </div>
    --}}




    <div id="app" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml">
        <button @click="trigger">@{{title}}</button>
    </div>


    <div id="example-1">
        <button @click="counter += 1">Add 1</button>
        <p>The button above has been clicked @{{ counter }} times.</p>


        <button @click="send"> Is Error</button>
        <h1 :style="styleobj">asd</h1>

        <p v-if="show"> In case empty </p>

        <p v-else="show"> Incase Data here </p>


        <p v-show="show">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>


    </div>




@stop

@section ('album')

    <div class="container">

        <table class="table mt-2 table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>

            @foreach($customers as $customer)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{$customer->email}}</td>
                    <td class="ml-auto">

                        <button class="btn btn-primary">Edit</button>

                        <button class="btn btn-danger" onclick="alert('delete');">Delete</button>


                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>

@stop