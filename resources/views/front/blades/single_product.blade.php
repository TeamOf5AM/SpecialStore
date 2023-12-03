<div class="pe-4 w-lg-prd_crd">
    <div class="card border border-secondary p-2 bg-prdct-card">
        <div class="card-body prd_h" style="background:url({{asset('public/storage/media/'.$productArr->image)}});background-size:cover">
            
        </div>
    <!-- <img class="w-100 rounded" src="{{asset('public/storage/media/'.$productArr->image)}}" alt=""> -->
    <div class="card-body px-1 py-2">
        <a class="mclr" href="{{url('product/'.$productArr->slug)}}">
        <p class="mb-0 small text-wraping">{{$productArr->name}}</p>
        </a>
        <p class="mb-0 small text-danger w-100">Rs {{$home_featured_product_attr[$productArr->id][0]->price}}
        <!-- <del class="float-end text-danger">Rs {{$home_product_attr[$productArr->id][0]->mrp}}</del> -->
        <span class="float-end"><i onclick="home_add_to_cart('{{$productArr->id}}','{{$home_product_attr[$productArr->id][0]->size}}','{{$home_product_attr[$productArr->id][0]->color}}')" class="far fa-plus-circle fs-5 w-75"></i></span></p>
        <p class="mb-0 smaller">3.5 <i class="fas fa-star"></i> <span>(8)</span> <span class="badge bg-success">Best Seller</span></p>
        <!-- <button class="btn btn-outline-danger p-1 btn-sm w-100">Add To Bag</button> -->
    </div>
    </div>
</div>
