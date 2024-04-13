    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>

                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            Help & FAQs
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            My Account
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            EN
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            USD
                        </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="{{ route('home.index') }}" class="logo">
                        <h3 style="font-family: 'Lilita One', sans-serif; color: #000; ">MOONSTORE</h3>
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>

                            <li>
                                <a href="{{ route('product.index') }}">Shop</a>
                            </li>

                            <li>
                                <a href="{{ route('blog.index') }}">Blog</a>
                            </li>

                            <li>
                                <a href="">About</a>
                            </li>

                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="2">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                        <a href="#"
                            class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                            data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>

                        @if (Auth::check() && Auth::user()->role == 0)
                            <a href="{{ route('profile.index', Auth::user()->id) }}"
                                class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"
                                style="font-size: 16px">
                                {{ Auth::user()->name }}
                            </a>
                        @else
                            <a href="{{ route('login.index') }}"
                                class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" data-notify="0">
                                <i class="zmdi zmdi-account"></i>
                            </a>
                        @endif
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <h4 style="font-family: 'Lilita One', sans-serif; color: #000; ">MOONSTORE</h4>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                    data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
                    data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>

            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                    <a href="{{ route('home.index') }}">Home</a>
                </li>

                <li>
                    <a href="{{ route('product.index') }}">Shop</a>
                </li>

                <li>
                    <a href="{{ route('blog.index') }}">Blog</a>
                </li>

                <li>
                    <a href="">About</a>
                </li>

                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search" id="app">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="{{ asset('assets') }}/images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <input class="plh3" type="text" v-model="searchQuery" name="search" placeholder="Search...">
                    <div v-if="results.length > 0" class="mt-3">
                        <ul v-for="(item, index) in results">
                            <li>
                                <a :href="'/product/' + item.id" class="text-dark text-decoration-none">@{{ item.product_name }}</a>
                            </li>
                        </ul>
                    </div>
                    <div v-else class="mt-3">
                        <p>No result...</p>
                    </div>
                </form>

                <script>
                    const {
                        createApp
                    } = Vue;

                    createApp({
                        data() {
                            return {
                                searchQuery: null,
                                results: []
                            }
                        },
                        methods: {
                            getResults() {
                                axios.get('/search/' + this.searchQuery)
                                    .then(res => {
                                        this.results = res.data;
                                    })
                                    .catch(error => {
                                        console.log(error);
                                    });
                            }
                        },
                        watch: {
                            searchQuery(after, before) {
                                this.getResults();
                            }
                        },
                        mounted() {
                            return true;
                        }
                    }).mount('#app');
                </script>
            </div>
        </div>
    </header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{ asset('assets') }}/images/item-cart-01.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                White Shirt Pleat
                            </a>

                            <span class="header-cart-item-info">
                                1 x $19.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{ asset('assets') }}/images/item-cart-02.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Converse All Star
                            </a>

                            <span class="header-cart-item-info">
                                1 x $39.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{ asset('assets') }}/images/item-cart-03.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Nixon Porter Leather
                            </a>

                            <span class="header-cart-item-info">
                                1 x $17.00
                            </span>
                        </div>
                    </li>
                </ul>

                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $75.00
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="shoping-cart.html"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Cart
                        </a>

                        <a href="shoping-cart.html"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
