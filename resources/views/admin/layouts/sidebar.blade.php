            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <div class="d-flex sidebar-profile">
                            <div class="sidebar-profile-image">
                                <img src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/10/avatar-trang-4.jpg"
                                    alt="image">
                                <span class="sidebar-status-indicator"></span>
                            </div>
                            <div class="sidebar-profile-name">
                                <p class="sidebar-name text-uppercase" style="font-size: 16px">
                                    @if (Auth::check())
                                        {{ Auth::user()->name }}
                                    @else
                                        {{ route('admin.index') }}
                                    @endif
                                </p>
                                <p class="sidebar-designation">
                                    Administrator
                                </p>
                            </div>
                        </div>
                        <div class="nav-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type to search..."
                                    aria-label="search" aria-describedby="search">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="search">
                                        <i class="typcn typcn-zoom"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.index') }}">
                            <i class="typcn typcn-device-desktop menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="typcn typcn-briefcase menu-icon"></i>
                            <span class="menu-title">Category Manage</span>
                            <i class="typcn typcn-chevron-right menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('category.index') }}">List
                                        Category</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('category.create') }}">Add
                                        Category</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('category.trash') }}">Restore
                                        Category</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="typcn typcn-film menu-icon"></i>
                            <span class="menu-title">Product Manage</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="">List Product</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="">Add Product</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="">Restore
                                        Product</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                            aria-controls="charts">
                            <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                            <span class="menu-title">Blog Manage</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="">List Blog</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="">Add Blog</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="">Restore Blog</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false"
                            aria-controls="tables">
                            <i class="typcn typcn-th-small-outline menu-icon"></i>
                            <span class="menu-title">Order Manage</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="">List
                                        Order</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false"
                            aria-controls="icons">
                            <i class="typcn typcn-compass menu-icon"></i>
                            <span class="menu-title">Voucher Manage</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="">List
                                        Voucher</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="">Add
                                        Voucher</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="">Restore
                                        Voucher</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                            aria-controls="auth">
                            <i class="typcn typcn-user-add-outline menu-icon"></i>
                            <span class="menu-title">User Pages</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="auth">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">
                                        Register
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false"
                            aria-controls="error">
                            <i class="typcn typcn-globe-outline menu-icon"></i>
                            <span class="menu-title">Error pages</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="error">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404
                                    </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/documentation/documentation.html">
                            <i class="typcn typcn-document-text menu-icon"></i>
                            <span class="menu-title">Documentation</span>
                        </a>
                    </li> --}}
                </ul>
                <ul class="sidebar-legend">
                    <li>
                        <p class="sidebar-menu-title">Category</p>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">#Sales</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">#Marketing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">#Growth</a></li>
                </ul>
            </nav>
            <!-- partial -->
