<x-layout>
    
    <div class="nav_objects" id="piedavajums"><h1>{{__('app.offers')}}</h1></div>

    <div class="container_piedavajumi container_edamgaldi">    
        @foreach ($table as $item)
            <div class="card">
                <div class="card_img">                   
                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Product Image">
                </div>
                <div class="card_text">
                    <h3>{{$item["name"]}}</h3>    
                </div>
                <div class="card_price">
                    <i>{{$item["price"]}}</i>
                </div>
                <div class="card_button">
                    <a href="/marketplace/{{$item["id"]}}">{{__('app.View details')}}</a>
                </div>
            </div>
        @endforeach
        
        
            
    </div>
    <div class="section_regular" >
        <div id="pagination">{{$table->links()}}</div>
    </div>
</x-layout>