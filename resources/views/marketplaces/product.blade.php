<x-layout>
    

        <div>
            <div class="card_img">                   
                    <img src="{{ asset('storage/' . $table->image_path) }}" alt="Product Image">
                </div>
            <br>
            <div>
                <h2>{{$table["name"]}}</h2>
            </div>
            <br>
            <div>
                <h2>{{__('app.price')}}: {{$table["price"]}}</h2>
            </div>
            <br>
            <div>
                <h2>{{__('app.seller_info')}}:</h2>
                <p>{{__('app.seller_id')}}: {{$table["seller_id"]}}</p>
                @if($seller)
                    <p>{{__('app.name')}}: {{$seller["name"]}}</p>
                    <p>{{__('app.email')}}: {{$seller["email"]}}</p>
                @endif

            </div>
            <br>
            <div>
                <h2>{{__('app.description')}}:</h2>
                <br>
                <p>{{$table["description"]}}</p>
            </div>
            
            {{--
            <form action="{{route('marketplace.update', $table)}}" method="POST" >
                @csrf
                @method('UPDATE') 
                <div class="form_element form_button">
                    <label for="submit"></label>
                    <input type="submit" value="{{__('app.update listing')}}" id="submit">
                </div>

            </form>

            

            <form action="{{route('marketplace.delete', $table->id)}}" method="POST" >
                @csrf
                @method('DELETE') 
                <div class="form_element form_button">
                    <label for="submit"></label>
                    <input type="submit" value="{{__('app.delete listing')}}" id="submit">
                </div>

            </form>
            --}}
        </div>
    
</x-layout>