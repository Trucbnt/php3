<div class="row isotope-grid">
    @foreach ($products as $product)
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
        <div class="block2">
            <div class="block2-pic hov-img0">
                <img src="{{$product->img_thumbnail}}" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Quick View
                </a>
            </div>
            <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                    <a href="{{route("products.show" , $product->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                        {{$product->name}}
                    </a>
                    <span class="stext-105 cl3">
                        ${{$product->price_regular}}
                    </span>
                </div>
                <div class="block2-txt-child2 flex-r p-t-3">
                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                        <img class="icon-heart1 dis-block trans-04" src="/storage/thame/images/icons/icon-heart-01.png" alt="ICON">
                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/storage/thame/images/icons/icon-heart-02.png" alt="ICON">
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="flex-c-m flex-w w-full p-t-45">
    <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
        Load More
    </a>
</div>