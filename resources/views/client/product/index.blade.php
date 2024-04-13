@extends('client.master')

@section('title', 'Trang sản phẩm')

@section('main-content')
    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140" style="margin-top: 50px">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All Products
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
                        Tee
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
                        Polo
                    </button>

                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Filter
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product"
                            placeholder="Search">
                    </div>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Default
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Popularity
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Average rating
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Newness
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: Low to High
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Price
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        All
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $0.00 - $50.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $50.00 - $100.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $100.00 - $150.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $150.00 - $200.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col3 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Color
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Black
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Blue
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Grey
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Green
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Red
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                                        <i class="zmdi zmdi-circle-o"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        White
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col4 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Tags
                            </div>

                            <div class="flex-w p-t-4 m-r--5">
                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Fashion
                                </a>

                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Lifestyle
                                </a>

                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Denim
                                </a>

                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Streetstyle
                                </a>

                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Crafts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item tee">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="https://product.hstatic.net/200000654527/product/doi__2__b9d914aebc944ae9b5532ec0a20a83b3_grande.png"
                                alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('product.detail') }}"
                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Esprit Ruffle Shirt
                                </a>

                                <span class="stext-105 cl3">
                                    $16.64
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item tee">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="https://product.hstatic.net/200000654527/product/kr71_2_mau-01tsnoted-01-01_b73b72fea7c24ad899f790b82375a970_grande.png"
                                alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('product.detail') }}"
                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Herschel supply
                                </a>

                                <span class="stext-105 cl3">
                                    $35.31
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item tee">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="https://product.hstatic.net/200000654527/product/05_98302fd26eff49f497fc6a19860af942_grande.png"
                                alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('product.detail') }}"
                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Only Check Trouser
                                </a>

                                <span class="stext-105 cl3">
                                    $25.50
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item tee">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="https://product.hstatic.net/200000654527/product/61__1__00a187102f3747b3ae9d37d67088c9b2_grande.png"
                                alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('product.detail') }}"
                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Classic Trench Coat
                                </a>

                                <span class="stext-105 cl3">
                                    $75.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item tee">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="https://product.hstatic.net/200000654527/product/z4926558959115_6a6288b37919824dc0d8d65d3058b9e9_6ca2ab6183f348f19e120bc80e06acff_grande.jpg"
                                alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('product.detail') }}"
                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Front Pocket Jumper
                                </a>

                                <span class="stext-105 cl3">
                                    $34.75
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item tee">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="https://product.hstatic.net/200000654527/product/kr66_a3563fbaed42443589569fff3a88868d_grande.jpg"
                                alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('product.detail') }}"
                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Vintage Inspired Classic
                                </a>

                                <span class="stext-105 cl3">
                                    $93.20
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item tee">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="https://product.hstatic.net/200000654527/product/kr67_6a387592b94a4ac089aecc4d98c4e041_grande.jpg"
                                alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('product.detail') }}"
                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Shirt in Stretch Cotton
                                </a>

                                <span class="stext-105 cl3">
                                    $52.66
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item polo">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="https://product.hstatic.net/200000654527/product/kr65__4__cc9ce2823ed2444f80918c1b0dc181ba_grande.jpg"
                                alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('product.detail') }}"
                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Herschel supply
                                </a>

                                <span class="stext-105 cl3">
                                    $63.16
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item polo">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="https://product.hstatic.net/200000654527/product/z4469662507706_fdfd4333e58d3902c01bd38862a0ff53_b95d06d6a26042af8925716b4ecc64f0_master.jpg"
                                alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('product.detail') }}"
                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Herschel supply
                                </a>

                                <span class="stext-105 cl3">
                                    $63.15
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ asset('assets') }}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45">
                <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div>
        </div>
    </div>


@endsection
