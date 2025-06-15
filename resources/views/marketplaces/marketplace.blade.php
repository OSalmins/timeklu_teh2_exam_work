<x-layout>
    <h1>Marketplace</h1>
    <p>{{$table[0]["name"]}}</p>
    <p>{{$table[1]["name"]}}</p>
    <div class="nav_objects" id="piedavajums"><h1>Piedāvājums</h1></div>

    <div class="container_piedavajumi container_edamgaldi">    
        @foreach ($table as $item)
            <div class="card">
                <div class="card_img">
                    <img src="${item.table_img}" alt="attels">
                </div>
                <div class="card_text">
                    <h3>{{$item["name"]}}</h3>    
                </div>
                <div class="card_price">
                    <i>{{$item["price"]}}</i>
                </div>
                <div class="card_button">
                    <a href="/marketplace/{{$item["id"]}}">View details</a>
                </div>
            </div>
        @endforeach
        
        
            
    </div>
    <div class="section_regular" >
        <div id="pagination">{{$table->links()}}</div>
    </div>
</x-layout>