<x-layout>
    

        <div>
            
            <div class="card_img">                   
                    <img src="{{ asset('storage/' . $atable->image_path) }}" alt="Product Image">
            </div>
            <br>
            <div>
                <h2>{{__('app.name')}}:<br> {{$atable["name"]}}</h2>
            </div>
            <br>
            <div>
                <h2>{{__('app.price')}}: {{$atable["price"]}}</h2>
            </div>
            <br>
            <div>
                <p>{{__('app.seller_id')}}: {{$atable["seller_id"]}}</p>
            </div>
            <br>
            <div>
                <p> {{__('app.description')}}:<br> {{$atable["description"]}}</p>
            </div>
            
            
            <form action="{{route('marketplace.edit', $atable)}}" method="GET" >
                @csrf
                
                <div class="form_element form_button">
                    <label for="submit"></label>
                    <input type="submit" value="{{__('app.Update listing')}}" id="submit">
                </div>

            </form>

            

            <form action="{{route('marketplace.delete', $atable->id)}}" method="POST" >
                @csrf
                @method('DELETE') 
                <div class="form_element form_button">
                    <label for="submit"></label>
                    <input type="submit" value="{{__('app.delete listing')}}" id="submit">
                </div>

            </form>
        </div>
    
</x-layout>