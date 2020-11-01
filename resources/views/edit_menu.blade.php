@extends('home')

@section('content')
    <br>

    <<div class="section-title text-center center">

            <h2>Modifica Menu</h2>
    </div>
    <br>


    <div class="container-menu">

        <!--menu list-->
        <div id="container-edit-menu">
            <div class="menu-section text-center center">


                @forelse($menu as $item)


                    <div class="menu-item ">
                        <div class="menu-item-name"> {{$item->name}}</div>


                        <form method="POST" action="modifica-menu/{{$item->id}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class=" btn-danger">Cancella</button>
                        </form>

                        <form method="POST" action="">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="">Modifica</button>

                        </form>

                    </div>
                    <hr class="hr-full">




                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>

        </div>
        <div class="clearfix"></div>
    </div>

@endsection
