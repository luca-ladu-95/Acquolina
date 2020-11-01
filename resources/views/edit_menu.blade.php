@extends('app')

@section('content')

    @include('admin_nav')

    <br>

    <<div class="section-title text-center center">

            <h2>Modifica Menu</h2>
    </div>
    <br>




    <div class="container-menu">

        <div class="conferma-messaggio">
            @if(session('message'))
                <div class="alert alert-success">Elemento eliminato correttamente</div>
            @endif
        </div>


        <!--menu list-->
        <div id="container-edit-menu">
            <div class="menu-section text-center center">


                @forelse($menu as $item)


                    <div class="menu-item ">
                        <div class="menu-item-name"> {{$item->name}}</div>


                        <form method="POST" action="modifica-menu/{{$item->id}}">
                            @method('DELETE')
                            @csrf
                            <button Onclick="return ConfirmDelete()" type="submit" class=" btn-danger">Cancella</button>
                        </form>

                        <form method="GET" action="modifica-menu/{{$item->id}}">
                            @csrf
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


    @include('script_nav')


    <script>
        function ConfirmDelete()
        {
            var x = confirm("Sei sicuro di voler eliminare questo elemento?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

@endsection


