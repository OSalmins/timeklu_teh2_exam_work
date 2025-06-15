<x-layout>
    

        <div>
            <div>
                <img src="${item.table_img}" alt="attels">
            </div>
            <br>
            <div>
                <h2>{{__('app.name')}}:<br> {{$table["name"]}}</h2>
            </div>
            <br>
            <div>
                <h2>{{__('app.price')}}: {{$table["price"]}}</h2>
            </div>
            <br>
            <div>
                <p>{{__('app.seller_id')}}: {{$table["seller_id"]}}</p>
            </div>
            <br>
            <div>
                <p> {{__('app.description')}}:<br> {{$table["description"]}}</p>
            </div>
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
        </div>
    
</x-layout>