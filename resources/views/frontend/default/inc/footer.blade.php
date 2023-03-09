<!-- kemedar top header css start -->
<link rel="stylesheet" href="{{ my_asset('footer_section/css/style.css') }}">
<!-- kemedar top header css end -->

<style>
    .dropdown_up {
        position: absolute;
        right: 0 !important;
        bottom: 0 !important;
    }
</style>
<!-- footer start -->
<footer>
    <div class="footer footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="footer-details text-center">
                        <a href="#">
                            <img src="{{ my_asset('kemedar/assets/images/brand/kemedar.png') }}" alt=""
                                 style="width: 40% !important; margin: 0 auto;">
                        </a>
                        <p> Kemedar Prop-tech system is a real estate marketplace that will do revolutionary changes in the way people are selling, buying, renting, finishing, investing, or promoting their properties whether they are individuals or companies
                        </p>
                        <h6>Contact us</h6>
                        <ul class="icon-list">
                            <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
                            <li><a href="#"><i class="fas fa-phone-alt"></i></a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#"><i class="fas fa-wifi"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-links footer-left-space">
                                <h5 class="footer-title ">{{ translate('Useful links') }}
                                    <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                </h5>
                                <ul class="footer-content">
                                    <li>
                                        <a href="#">{{ translate('About us') }}</a>
                                    </li>
                                    <li>
                                        <a href="#">{{ translate('Systems Stats') }}</a>
                                    </li>
                                    <li>
                                        <a href="#">{{ translate('Support') }}</a>
                                    </li>
                                    <li>
                                        <a href="#">{{ translate('Contact') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <div class="footer-links">
                                <h5 class="footer-title">{{ translate('Premium Services') }}
                                    <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                </h5>
                                <ul class="footer-content">
                                    <li>
                                        <a href="#">{{ translate('For Individuals') }}</a>
                                    </li>
                                    <li>
                                        <a href="#">{{ translate('For Businesses') }}</a>
                                    </li>
                                    <li>
                                        <a href="#"> {{ translate('Subscriptions') }}</a>
                                    </li>
                                    <li>
                                        <a href="#">{{ translate('Pricing') }}</a>
                                    </li>
                                    <li>
                                        <a href="#">{{ translate('Advertising services') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <div class="footer-links">
                                <h5 class="footer-title">{{ translate('Our Partners') }}
                                    <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                </h5>
                                <ul class="footer-content">
                                    <li>
                                        <a href="#">{{ translate('Camonea') }}</a>
                                    </li>
                                    <li>
                                        <a href="#">{{ translate('Xeed') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="footer-links">
                                <h5 class="footer-title">{{ translate('subscribe') }}
                                    <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                </h5>
                                <div class="footer-content">
                                    <p class="mb-0">
                                        {{ translate('Real estate investing involves the purchase, Improvement of realty, management and sale or rental of real estate for profit.') }}
                                    </p>
                                    <form>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <span class="input-group-apend">
                                                <button type="submit" class="input-group-text" id="basic-addon2"><i
                                                        class="fas fa-paper-plane"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-blog">
                        <div class="slick-between">
                            <div class="footer-slider" style="display: flex">
                                <div>
                                    <div class="media">
                                        <a href="#">
                                            <div class="img-overlay">
                                                <img src="{{ my_asset('kemedar/assets/images/brand/kemework.png') }}"
                                                     alt="">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h6><a href="#">Kemework</a></h6>
                                            <p class="font-roboto"><a href="blog-detail-right-sidebar.html">{{ translate('This home provides wonderful entertaining spaces.') }}</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media">
                                        <a href="#">
                                            <div class="img-overlay">
                                                <img src="{{ my_asset('kemedar/assets/images/brand/kemetro.png') }}"
                                                     alt="">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h6><a href="#">Kemetro</a></h6>
                                            <p class="font-roboto"><a href="blog-detail-right-sidebar.html">{{ translate('Marketplace for 185 essential product categories needed for your home.') }}</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media">
                                        <a href="#">
                                            <div class="img-overlay">
                                                <img src="{{ my_asset('kemedar/assets/images/brand/reit.png') }}"
                                                     alt="">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h6><a href="#">Kemedar Reit</a></h6>
                                            <p class="font-roboto"><a href="blog-detail-right-sidebar.html"> {{ translate('A smarter and better way for everyone to Real Estate Investment.') }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sub-footer footer-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="copy-right">
                        <p class="mb-0">{{ translate('All rights reserved to KEMEDAR® CORPORATION 2014') }}</p>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6 text-end" style="position: relative">
                    <ul class="sub-footer-link">
                        <li onmouseenter="finddropdownshow()" onmouseleave="finddropdownhide()">
                            <a href="#">Find</a>
                            <div class=" benefit-div find-div" id="finddropdown"
                                 style="background: url('/footer_section/images/FindImage.png') no-repeat 50% 88%/14em , #ededed; z-index: 9999 !important;"
                                 onmouseenter="finddropdownshow()" onmouseleave="finddropdownhide()">
                                <div>
                                    <span class="active-span">{{ translate('Find') }}</span>
                                </div>
                                <ul class="benefit-list" style="margin-top: 10px !important;">
                                    <li onmouseenter="properSubmenushow()" onmouseleave="properSubmenuhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-01.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Properties') }}</span>
                                        </a>
                                        <div class="inner-submenu" id="properSubmenu"
                                             onmouseenter="properSubmenushow()" onmouseleave="properSubmenuhide()">
                                            <div>
                                                <span class="active-span">{{ translate('Properties') }}</span>
                                            </div>
                                            <ul>

                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-01.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('For Sale') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-02.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('For Sale or Rent') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-04.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('For Rent') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-05.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('For daily booking') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Kemedar Reit in Auction System') }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="" style="color:#000 !important;"
                                        onmouseenter="taskerSubmenushow()" onmouseleave="taskerSubmenuhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-02.png"
                                                 class="img-fluid" alt="">
                                        </i>

                                        <a href="">
                                            <span>{{ translate('Handymen & technicians') }}</span>
                                        </a>
                                        <div class="inner-submenu taskerSubmenu" id="taskerSubmenu"
                                             onmouseenter="taskerSubmenushow()" onmouseleave="taskerSubmenuhide()">
                                            <ul>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Tasker Categories') }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-03.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Prjects & Compunds') }}</span>
                                        </a>
                                    </li>
                                    <br>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-04.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Agents') }}</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-05.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Developers') }}</span>
                                        </a>
                                    </li>
                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-12.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Finishing Companies') }}</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-10.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/carpenter.html">
                                            <span>{{ translate('Franchise Owner') }}</span>
                                        </a>
                                    </li>
                                    <li style="color:#000 !important;" onmouseenter="productSubmenushow()"
                                        onmouseleave="productSubmenuhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-09.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/lawyer.html">
                                            <span>Products</span>
                                        </a>
                                        <div class="product-submenu" id="productSubmenu"
                                             onmouseenter="productSubmenushow()" onmouseleave="productSubmenuhide()">
                                            <div class="left-div-submenu">
                                                <div>
                                                    <span class="active-span">{{ translate('Products') }}</span>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <i>
                                                            <img src="{{ my_asset('footer_section') }}/images/product/Icon-01.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Construction') }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i>
                                                            <img src="{{ my_asset('footer_section') }}/images/product/Icon-02.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Manosry Material') }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i>
                                                            <img src="{{ my_asset('footer_section') }}/images/product/Icon-03.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Architectural') }}</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <i>
                                                            <img src="{{ asset('footer_section') }}/images/product/Icon-04.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Electrical') }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i>
                                                            <img src="{{ my_asset('footer_section') }}/images/product/Icon-05.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Plumbing') }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i>
                                                            <img src="{{ my_asset('footer_section') }}/images/product/Icon-06.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Mechanical') }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i>
                                                            <img src="{{ my_asset('footer_section') }}/images/product/Icon-07.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Appliances') }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i>
                                                            <img src="{{ my_asset('footer_section') }}/images/product/Icon-08.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Furniture') }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i>
                                                            <img src="{{ my_asset('footer_section') }}/images/product/Icon-09.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Decorative') }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i>
                                                            <img src="{{ my_asset('footer_section') }}/images/product/Icon-10.png"
                                                                 alt="">
                                                        </i>
                                                        <a href="">
                                                            <span>{{ translate('Landscape &amp; Garden') }}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="left-right-submenu">
                                                <img src="{{ my_asset('footer_section') }}/images/products.png"
                                                     width="100%" height="auto" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-08.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/decorist.html">
                                            <span>Product Sellers</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-07.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/painter.html">
                                            <span>{{ translate('Job or Career') }}</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-06.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/carpenter.html">
                                            <span>{{ translate('Instructor') }}</span>
                                        </a>
                                    </li>
                                    <li class="brn" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-11.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/lawyer.html">
                                            <span>{{ translate('Training Course') }}</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li onmouseenter="addDivshow()" onmouseleave="addDivhide()">
                            <a href="#">Add</a>
                            <div class=" benefit-div find-div " id="addDiv" onmouseenter="addDivshow()"
                                 onmouseleave="addDivhide()"
                                 style="background: url('{{ my_asset('footer_section') }}/images/add.png') no-repeat 50% 88%/23em , #ededed;">
                                <div>
                                    <span class="active-span">{{ translate('Add') }}</span>
                                </div>
                                <ul class="benefit-list"
                                    style="margin-top: 10px !important;
                                        ">
                                    <li>
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-01.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Property') }}</span>
                                        </a>
                                    </li>
                                    <li class="" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-02.png"
                                                 class="img-fluid" alt="">
                                        </i>

                                        <a href="">
                                            <span>{{ translate('Buy Request') }}</span>
                                        </a>
                                    </li>
                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-03.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Project') }}</span>
                                        </a>
                                    </li>
                                    <br>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-06.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Investment opportunity') }}</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-07.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Store') }}</span>
                                        </a>
                                    </li>
                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-08.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Product') }}</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-09.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/carpenter.html">
                                            <span>{{ translate('Post') }}</span>
                                        </a>
                                    </li>
                                    <li class="" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-04.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/lawyer.html">
                                            <span>{{ translate('Page') }}</span>
                                        </a>
                                    </li>
                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-05.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/decorist.html">
                                            <span>{{ translate('Group') }}</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-11.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/painter.html">
                                            <span>{{ translate('Event') }}</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-10.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/carpenter.html">
                                            <span>{{ translate('Used product') }}</span>
                                        </a>
                                    </li>
                                    <li class="brn" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-12.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/lawyer.html">
                                            <span>{{ translate('Video news') }}</span>
                                        </a>
                                    </li>
                                    <li class="" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-14.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/lawyer.html">
                                            <span>{{ translate('Article news') }}</span>
                                        </a>
                                    </li>
                                    <li class="" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/add/Icon-13.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/lawyer.html">
                                            <span>{{ translate('Course') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li onmouseenter="investDivshow()" onmouseleave="investDivhide()">
                            <a href="#">Invest</a>
                            <div class=" benefit-div find-div " id="investDiv" onmouseenter="investDivshow()"
                                 onmouseleave="investDivhide()"
                                 style="background: url('{{ my_asset('footer_section') }}/images/invest.png') no-repeat 50% 88%/23em , #ededed;">
                                <div>
                                    <span class="active-span">{{ translate('Invest') }}</span>
                                </div>
                                <ul class="benefit-list" style="margin-top: 10px !important;
            ">
                                    <li>
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/invest/Icon-01.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Invest my real estate') }}</span>
                                        </a>
                                    </li>
                                    <li class="" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/invest/Icon-02.png"
                                                 class="img-fluid" alt="">
                                        </i>

                                        <a href="">
                                            <span>{{ translate('Invest my real estate') }}</span>
                                        </a>
                                    </li>

                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/invest/Icon-03.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Invest in Kemedar Reits') }}</span>
                                        </a>
                                    </li>
                                    <br>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/invest/Icon-04.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Find investment opportunity') }} </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/invest/Icon-05.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Buy stock in real company') }} </span>
                                        </a>
                                    </li>
                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/invest/Icon-06.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Crowd investment') }} </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/invest/Icon-07.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/carpenter.html">
                                            <span>{{ translate('Venture investment') }} </span>
                                        </a>
                                    </li>
                                    <li class="" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/invest/Icon-08.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/lawyer.html">
                                            <span>{{ translate('Invest in startup') }} </span>
                                        </a>
                                    </li>
                                    <li class="brn" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/invest/Icon-09.png"
                                                 class="img-fluid" style="width:20px" alt="">
                                        </i>
                                        <a href="hire-technician/lawyer.html">
                                            <span>{{ translate('Angel investment') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li onmouseenter="connectDivshow()" onmouseleave="connectDivhide()">
                            <a href="#">Connect</a>
                            <div class=" benefit-div find-div " id="connectDiv" onmouseenter="connectDivshow()"
                                 onmouseleave="connectDivhide()"
                                 style="background: url('{{ asset('footer_section') }}/images/CONNCECT.png') no-repeat 50% 88%/23em , #ededed;">
                                <div>
                                    <span class="active-span">{{ translate('Connect') }}</span>
                                </div>
                                <ul class="benefit-list" style="margin-top: 10px !important;
            ">
                                    <li>
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/connect/Icon-01.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('News Feed') }}</span>
                                        </a>
                                    </li>
                                    <li class="" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/connect/Icon-02.png"
                                                 class="img-fluid" alt="">
                                        </i>

                                        <a href="">
                                            <span>{{ translate('Find friend') }}</span>
                                        </a>
                                    </li>

                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/connect/Icon-03.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Groups') }}</span>
                                        </a>
                                    </li>
                                    <br>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/connect/Icon-04.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Pages') }} </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/connect/Icon-05.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Forums') }} </span>
                                        </a>
                                    </li>


                                </ul>

                            </div>
                        </li>
                        <li onmouseenter="knowDivshow()" onmouseleave="knowDivhide()">
                            <a href="#">Know</a>

                            <div class=" benefit-div find-div " id="knowDiv" onmouseenter="knowDivshow()"
                                 onmouseleave="knowDivhide()"
                                 style="background: url('{{ my_asset('footer_section') }}/images/know.png') no-repeat 50% 88%/23em , #ededed;">
                                <div>
                                    <span class="active-span">{{ translate('Know') }}</span>
                                </div>
                                <ul class="benefit-list" style="margin-top: 10px !important;
            ">
                                    <li>
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/know/Icon-01.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Recent news') }}</span>
                                        </a>
                                    </li>
                                    <li class="" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/know/Icon-02.png"
                                                 class="img-fluid" alt="">
                                        </i>

                                        <a href="">
                                            <span>{{ translate('Trending news') }}</span>
                                        </a>
                                    </li>

                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/know/Icon-03.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Reports') }}</span>
                                        </a>
                                    </li>
                                    <br>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/know/Icon-04.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Real estate market news') }}</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/know/Icon-05.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Real estate investment') }}</span>
                                        </a>
                                    </li>
                                    <li class="brn">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/know/Icon-06.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Governmental & legal news') }}</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/know/Icon-07.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Auction & Tenders') }}</span>
                                        </a>
                                    </li>


                                </ul>

                            </div>
                        </li>
                        <li onmouseenter="learnDivshow()" onmouseleave="learnDivhide()">
                            <a href="#">Learn</a>
                            <div class=" benefit-div find-div " id="learnDiv" onmouseenter="learnDivshow()"
                                 onmouseleave="learnDivhide()"
                                 style="background: url('{{ my_asset('footer_section') }}/images/learn.png') no-repeat 50% 88%/23em , #ededed;">
                                <div>
                                    <span class="active-span">{{ translate('Learn') }}</span>
                                </div>
                                <ul class="benefit-list" style="margin-top: 10px !important;
            ">
                                    <li onmouseenter="consDivshow()" onmouseleave="consDivhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-01.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Construction') }}</span>
                                        </a>
                                        <div class="inner-submenu" id="consDiv" onmouseenter="consDivshow()"
                                             onmouseleave="consDivhide()">
                                            <div>
                                                <span class="active-span">{{ translate('Construction') }}</span>
                                            </div>
                                            <ul>

                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-01.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Construction Worker') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-02.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Brick Mason') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-04.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Construction') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-05.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Surveyor') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-05.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Conceret finisher') }}</span>
                                                    </a>
                                                </li>

                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-05.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Ironworker') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/property/Icon-05.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Crane operater') }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="" onmouseenter="HomeDSubmenushow()"
                                        onmouseleave="HomeDSubmenuhide()" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-02.png"
                                                 class="img-fluid" alt="">
                                        </i>

                                        <a href="">
                                            <span style="font-size: 11px   !important;">{{ translate('Home Development & Finishing') }}</span>
                                        </a>
                                        <div class="inner-submenu taskerSubmenu" id="HomeDSubmenu"
                                             onmouseenter="HomeDSubmenushow()" onmouseleave="HomeDSubmenuhide()">

                                            <ul>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Home Design Archetict') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Painter') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Plumber') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Electrician') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Flooring') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Tile setter') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Roofer') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Carpenter') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Glazier') }}</span>
                                                    </a>
                                                </li>



                                            </ul>
                                        </div>
                                    </li>

                                    <li class="brn" onmouseenter="rebSubmenushow()"
                                        onmouseleave="rebSubmenuhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-02.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Real Estate Business') }}</span>
                                        </a>
                                        <div class="inner-submenu taskerSubmenu" id="rebSubmenu"
                                             onmouseenter="rebSubmenushow()" onmouseleave="rebSubmenuhide()">

                                            <ul>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>
                                                            {{ translate('Managment') }}
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>
                                                            {{ translate('Communications') }}
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Business Strategy') }}</span>
                                                    </a>
                                                </li>
                                                <li class="brn">
                                                    <i>

                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Real estate Marketing') }}</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <br>
                                    <li onmouseenter="hdhDivshow()" onmouseleave="hdhDivhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/find/Icon-09.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Home decoration & homestyle') }}</span>
                                        </a>
                                        <div class="inner-submenu" id="hdhDiv" onmouseenter="hdhDivshow()"
                                             onmouseleave="hdhDivhide()">
                                            <div>
                                                <span class="active-span">{{ translate('Home decoration & homestyle') }}</span>
                                            </div>
                                            <ul>

                                                <li class="">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/product/Icon-01.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Home decoration') }}</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <i>
                                                        <img src="{{ my_asset('footer_section') }}/images/product/Icon-02.png"
                                                             class="img-fluid" alt="">
                                                    </i>
                                                    <a href="">
                                                        <span>{{ translate('Do it Yourself') }}</span>
                                                    </a>
                                                </li>




                                            </ul>
                                        </div>
                                    </li>




                                </ul>

                            </div>
                        </li>
                        <li onmouseenter="appdivshow()" onmouseleave="appdivhide()">
                            <a href="#">{{ translate('Mobile Apps') }}</a>

                            <div class="benefit-div find-div appdiv " id="appdiv" onmouseenter="appdivshow()"
                                 onmouseleave="appdivhide()">
                                <div>
                                    <span class="active-span">{{ translate('Mobile Apps') }}</span>
                                </div>
                                <ul class="benefit-list" style="margin-top:20px !important;">
                                    <li class="brn" onmouseenter="kemeappDivshow()"
                                        onmouseleave="kemeappDivhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/mobile/Icon-01.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Kemedar') }}</span>
                                        </a>
                                        <div class="inner-submenu" id="kemeappDiv" onmouseenter="kemeappDivshow()"
                                             onmouseleave="kemeappDivhide()">
                                            <div>
                                                <span class="active-span">{{ translate('Kemedar') }}</span>
                                            </div>

                                            <div style="margin-top: -10px;">
                                                <div class="get-app">
                                                    <h6>
                                                        <b style="color:#c33">{{ translate('GET THE MOBILE APP') }}</b>
                                                    </h6>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;">
                                                        <img src="{{ my_asset('footer_section') }}/images/google-play.svg"
                                                             width="75px" alt="">

                                                    </a>
                                                    <span
                                                        style="display: inline !important; padding: 0px !important;">or</span>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;  margin-left: 8px;">
                                                        <img src="{{ my_asset('footer_section') }}/images/app-store.svg"
                                                             width="63px" alt="">

                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="brn" onmouseenter="kemetoappDivshow()"
                                        onmouseleave="kemetoappDivhide()" style="color:#000 !important;">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/mobile/Icon-02.png"
                                                 class="img-fluid" alt="">
                                        </i>

                                        <a href="">
                                            <span>{{ translate('Kemmeto') }}</span>
                                        </a>
                                        <div class="inner-submenu" id="kemetoappDiv"
                                             onmouseenter="kemetoappDivshow()" onmouseleave="kemetoappDivhide()">
                                            <div>
                                                <span class="active-span">{{ translate('Kemmeto') }}</span>
                                            </div>

                                            <div style="margin-top: -10px;">
                                                <div class="get-app">
                                                    <h6>
                                                        <b style="color:#c33">{{ translate('GET THE MOBILE APP') }}</b>
                                                    </h6>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;">
                                                        <img src="{{ my_asset('footer_section') }}/images/google-play.svg"
                                                             width="75px" alt="">

                                                    </a>
                                                    <span
                                                        style="display: inline !important; padding: 0px !important;">or</span>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;  margin-left: 8px;">
                                                        <img src="{{ my_asset('footer_section') }}/images/app-store.svg"
                                                             width="63px" alt="">

                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="brn" onmouseenter="kemetroappDivshow()"
                                        onmouseleave="kemetroappDivhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/mobile/Icon-03.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Kemmetro') }}</span>
                                        </a>
                                        <div class="inner-submenu" id="kemetroappDiv"
                                             onmouseenter="kemetroappDivshow()" onmouseleave="kemetroappDivhide()">
                                            <div>
                                                <span class="active-span">{{ translate('Kemmetro') }}</span>
                                            </div>

                                            <div style="margin-top: -10px;">
                                                <div class="get-app">
                                                    <h6>
                                                        <b style="color:#c33">{{ translate('GET THE MOBILE APP') }}</b>
                                                    </h6>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;">
                                                        <img src="{{ my_asset('footer_section') }}/images/google-play.svg"
                                                             width="75px" alt="">

                                                    </a>
                                                    <span
                                                        style="display: inline !important; padding: 0px !important;">or</span>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;  margin-left: 8px;">
                                                        <img src="{{ my_asset('footer_section') }}/images/app-store.svg"
                                                             width="63px" alt="">

                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="brn" onmouseenter="kemenewsappDivshow()"
                                        onmouseleave="kemenewsappDivhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/mobile/Icon-04.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Kemedar News') }}</span>
                                        </a>
                                        <div class="inner-submenu" id="kemenewsappDiv"
                                             onmouseenter="kemenewsappDivshow()" onmouseleave="kemenewsappDivhide()">
                                            <div>
                                                <span class="active-span">{{ translate('Kemedar News') }}</span>
                                            </div>

                                            <div style="margin-top: -10px;">
                                                <div class="get-app">
                                                    <h6>
                                                        <b style="color:#c33">{{ translate('GET THE MOBILE APP') }}</b>
                                                    </h6>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;">
                                                        <img src="{{ my_asset('footer_section') }}/images/google-play.svg"
                                                             width="75px" alt="">

                                                    </a>
                                                    <span
                                                        style="display: inline !important; padding: 0px !important;">or</span>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;  margin-left: 8px;">
                                                        <img src="{{ my_asset('footer_section') }}/images/app-store.svg"
                                                             width="63px" alt="">

                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="brn" onmouseenter="kemeacaappDivshow()"
                                        onmouseleave="kemeacaappDivhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/mobile/Icon-05.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Kemedar Academy') }}</span>
                                        </a>
                                        <div class="inner-submenu" id="kemeacaappDiv"
                                             onmouseenter="kemeacaappDivshow()" onmouseleave="kemeacaappDivhide()">
                                            <div>
                                                <span class="active-span">{{ translate('Kemedar Academy') }}</span>
                                            </div>

                                            <div style="margin-top: -10px;">
                                                <div class="get-app">
                                                    <h6>
                                                        <b style="color:#c33">{{ translate('GET THE MOBILE APP') }}</b>
                                                    </h6>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;">
                                                        <img src="{{ my_asset('footer_section') }}/images/google-play.svg"
                                                             width="75px" alt="">

                                                    </a>
                                                    <span
                                                        style="display: inline !important; padding: 0px !important;">or</span>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;  margin-left: 8px;">
                                                        <img src="{{ my_asset('footer_section') }}/images/app-store.svg"
                                                             width="63px" alt="">

                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="brn" onmouseenter="messengerappDivshow()"
                                        onmouseleave="messengerappDivhide()">
                                        <i>
                                            <img src="{{ my_asset('footer_section') }}/images/mobile/Icon-01.png"
                                                 class="img-fluid" alt="">
                                        </i>
                                        <a href="">
                                            <span>{{ translate('Kemedar Messenger') }}</span>
                                        </a>
                                        <div class="inner-submenu" id="messengerappDiv"
                                             onmouseenter="messengerappDivshow()" onmouseleave="messengerappDivhide()">
                                            <div>
                                                <span class="active-span">{{ translate('Kemedar Messenger') }}</span>
                                            </div>

                                            <div style="margin-top: -10px;">
                                                <div class="get-app">
                                                    <h6>
                                                        <b style="color:#c33">{{ translate('GET THE MOBILE APP') }}</b>
                                                    </h6>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;">
                                                        <img src="{{ my_asset('footer_section') }}/images/google-play.svg"
                                                             width="75px" alt="">

                                                    </a>
                                                    <span
                                                        style="display: inline !important; padding: 0px !important;">or</span>
                                                    <a href=""
                                                       style="display: inline !important; padding: 0px !important;  margin-left: 8px;">
                                                        <img src="{{ my_asset('footer_section') }}/images/app-store.svg"
                                                             width="63px" alt="">

                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </li>
                        <li>
                            <div class="dropdown" id="dropdown_up">
                                <a class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Useful Links
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">{{ translate('Action') }}</a></li>
                                    <li><a class="dropdown-item" href="#">{{ translate('Another action') }}</a></li>
                                    <li><a class="dropdown-item" href="#">{{ translate('Something else here') }}</a></li>
                                </ul>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- kemedar top header js start -->
<script src="https://kit.fontawesome.com/fc057e91f8.js" crossorigin="anonymous"></script>
<script src="{{ my_asset('footer_section/js/app.js') }}"></script>
<!-- kemedar top header js end -->
<script>
    window.addEventListener('DOMContentLoaded', function() {
        document.querySelector('ul.dropdown-menu').style.setProperty("top", "-25px");
    });
</script>
