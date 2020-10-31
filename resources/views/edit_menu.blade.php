@extends('home')

@section('content')

    <div>

    </div>


    <div >

        <!--menu list-->
        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">



                @forelse($menu as $item)



                    <form method="POST" action="modifica-menu/{{$item->id}}">
                        @method('DELETE')
                        @csrf

                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <button type="submit" class="btn-danger rounded">Delete</button>
                        </div>
                        <hr>

                    </form>




                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
