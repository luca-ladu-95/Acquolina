@extends('app')

@section('content')
    @include('admin_nav')


    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title text-center">
                <h2>{{$dish->name}}</h2>
                <hr>

            </div>
            <div class="col-md-10 col-md-offset-1">
                <form method="POST"  action="{{route('store_dish', $dish)}}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="block mb-2 uppercase font-bold text-xl text-gray-700" for="name">Nome</label>
                                <input type="text" id="name"  name="name" class="form-control" value="{{$dish->name}}" required="required">
                                @error('name')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Prezzo</label>
                                <input type="number" value="{{$dish->price}}"  class="form-control" id="price" name="price" min="1" max="100">
                                @error('price')
                                <p class="text-red-500 text-xs warning">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="block mb-2 uppercase font-bold text-xl text-gray-700" for="Italian_description">Descrizione Italiana</label>
                        <textarea name="Italian_description" id="Italian_description" placeholder="{{$dish->Italian_description}}" class="form-control" rows="3"  required></textarea>
                        @error('Italian_description')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="block mb-2 uppercase font-bold text-xl text-gray-700" for="English_description">Descrizione Inglese</label>
                        <textarea name="English_description" id="English_description" class="form-control" rows="3" placeholder="{{$dish->English_description}}" required></textarea>
                        @error('English_description')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="block mb-2 uppercase font-bold text-xl text-gray-700" for="German_description">Descrizione Tedesca</label>
                        <textarea name="German_description" id="German_description" class="form-control" rows="3" placeholder="{{$dish->German_description}}" required></textarea>
                        @error('German_description')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="block mb-2 uppercase font-bold text-xl text-gray-700" for="Gtype">Inserisci la tipologia</label>

                    <select class="form-control" id="type" name="type">
                        <option value="0">Antipasti di mare</option>
                        <option value="1">Antipasti di terra</option>
                        <option value="2">Primi di mare</option>
                        <option value="3">Primi di terra</option>
                        <option value="4">Secondi di mare</option>
                        <option value="5">Secondi di terra</option>
                        <option value="6">Insalate</option>
                        <option value="7">Dessert</option>
                        <option value="8">Pizze</option>
                        <option value="9">Bevande</option>
                        <option value="10">Birre</option>
                        <option value="11">Caffetteria</option>
                        <option value="12">Digestivi</option>
                        <option value="13">Vino sfuso</option>
                        <option value="14">Vini bianchi</option>
                        <option value="15">Vini rossi</option>
                    </select>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-custom btn-lg">Aggiorna</button>




                </form>
            </div>
        </div>
    </div>

    @include('script_nav')
@endsection
