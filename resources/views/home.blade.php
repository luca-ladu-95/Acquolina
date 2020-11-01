@extends('app')




@section('content')
    @include('admin_nav')

    <div class="container-menu">
        <div id="restaurant-menu">
            <br>
            <br>
            <br>
            <div class=" text-center center">
                <div class="overlay">
                    <h2>Menu</h2>
                    <hr>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    @include('menu')

                </div>


            </div>
        </div>
    </div>



    @include('script_nav')
@endsection


