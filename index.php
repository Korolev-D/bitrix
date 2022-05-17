<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Hmart - Home One");
?>

    <!-- Hero/Intro Slider Start -->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "slider",
    Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "4",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array("SLIDER_LINK"),
        "PROPERTY_CODE" => array("SLIDER_LINK"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "",
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_NOTES" => "",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Слайдер",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>
    <!-- Hero/Intro Slider End -->
    <!-- Banner Area Start -->
    <div class="banner-area style-one pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-banner nth-child-1">
                        <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/banner/3.webp" alt="">
                        <div class="banner-content nth-child-1">
                            <h3 class="title">Smart Watch For <br>
                                Your Hand</h3>
                            <span class="category">From $29.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-banner nth-child-2 mb-30px mb-lm-30px mt-lm-30px ">
                        <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/banner/4.webp" alt="">
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Headphones</h3>
                            <span class="category">From $95.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="single-banner nth-child-2">
                        <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/banner/5.webp" alt="">
                        <div class="banner-content nth-child-3">
                            <h3 class="title">Smartphone</h3>
                            <span class="category">From $69.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Product Area Start -->
    <div class="product-area pb-100px">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <!-- Tab Start -->
                    <div class="tab-slider d-md-flex justify-content-md-between align-items-md-center">
                        <ul class="product-tab-nav nav justify-content-start align-items-center">
                            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#newarrivals">New Arrivals</button>
                            </li>
                            <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#toprated">Top Rated</button>
                            </li>
                            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#featured">Featured</button>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab End -->
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col">
                    <div class="tab-content mt-60px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="newarrivals">
                            <div class="row mb-n-30px">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/2.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/2.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="old">$48.50</span>
                                                <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/3.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/3.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Smart Music Box
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/4.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/5.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/5.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="sale">-8%</span>
                                            <span class="new">Sale</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/6.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/6.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Smart Table Camera
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="old">$138.50</span>
                                                <span class="new">$112.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/7.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Round Pocket Router
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/8.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/8.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="old">$260.00</span>
                                                <span class="new">$238.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        <!-- 2nd tab start -->
                        <div class="tab-pane fade" id="toprated">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/2.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/2.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="old">$48.50</span>
                                                <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/3.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/3.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Smart Music Box
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/4.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/5.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/5.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="sale">-8%</span>
                                            <span class="new">Sale</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/6.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/6.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Smart Table Camera
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="old">$138.50</span>
                                                <span class="new">$112.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/7.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Round Pocket Router
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/8.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/8.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="old">$260.00</span>
                                                <span class="new">$238.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd tab end -->
                        <!-- 3rd tab start -->
                        <div class="tab-pane fade" id="featured">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/2.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/2.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="old">$48.50</span>
                                                <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/3.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/3.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Smart Music Box
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/4.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/5.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/5.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="sale">-8%</span>
                                            <span class="new">Sale</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/6.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/6.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Smart Table Camera
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="old">$138.50</span>
                                                <span class="new">$112.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/7.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Round Pocket Router
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/8.webp" alt="Product" />
                                                <img class="hover-image" src="<?= SITE_TEMPLATE_PATH?>/assets/images/product-image/8.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                                </a>
                                            </h5>
                                            <span class="price">
                                                    <span class="old">$260.00</span>
                                                <span class="new">$238.50</span>
                                                </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd tab end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->
    <!-- Feeedback Start -->
    <div class="fashion-area" data-bg-image="<?= SITE_TEMPLATE_PATH?>/assets/images/fashion/fashion-bg.webp">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 text-center">

                    <?$APPLICATION->IncludeComponent(
                            "bitrix:main.feedback",
                            "",
                            Array(
                                "USE_CAPTCHA" => "Y",
                                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                "EMAIL_TO" => "my@email.com",
                                "REQUIRED_FIELDS" => Array("NAME","EMAIL","MESSAGE"),
                                "EVENT_MESSAGE_ID" => Array("5"),
                                "AJAX_MODE" => "Y",
                                "AJAX_OPTION_SHADOW" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                            )
                    );?>

                </div>
            </div>
        </div>
    </div>
    <!-- Fashion  End -->
    <!-- Fashion Area Start -->
    <div class="fashion-area" data-bg-image="<?= SITE_TEMPLATE_PATH?>/assets/images/fashion/fashion-bg.webp">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 text-center">
                    <h2 class="title"> <span>Smart Fashion</span> With Smart Devices </h2>
                    <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize m-auto">Shop All Devices</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fashion Area End -->
    <!-- Feature product area start -->
    <div class="feature-product-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Featured Offers</h2>
                        <p>There are many variations of passages of Lorem Ipsum available</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 mb-md-35px mb-lm-35px">
                    <div class="single-feature-content">
                        <div class="feature-image">
                            <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/feature-image/1.webp" alt="">
                        </div>
                        <div class="top-content">
                            <h4 class="title"><a href="single-product.html">Bluetooth Headphone </a></h4>
                            <span class="price">
                            <span class="old"><del>$48.50</del></span>
                                <span class="new">$38.50</span>
                                </span>
                        </div>
                        <div class="bottom-content">
                            <div class="deal-timing">
                                <div data-countdown="2021/09/15"></div>
                            </div>
                            <a href="single-product-variable.html" class="btn btn-primary  m-auto"> Shop
                                Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="feature-right-content">
                        <div class="image-side">
                            <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/feature-image/2.webp" alt="">
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                    class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">
                            <div class="deal-timing">
                                <span>End In:</span>
                                <div data-countdown="2021/09/15"></div>
                            </div>
                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                                <span class="price">
                            <span class="old">$48.50</span>
                                    <span class="new">$38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feature-right-content mt-30px">
                        <div class="image-side">
                            <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/feature-image/3.webp" alt="">
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                    class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">
                            <div class="deal-timing">
                                <span>End In:</span>
                                <div data-countdown="2021/09/15"></div>
                            </div>
                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                                <span class="price">
                            <span class="old">$48.50</span>
                                    <span class="new">$38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature product area End -->
    <!-- Testimonial area start -->
    <div class="trstimonial-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Client Feedback</h2>
                        <p>There are many variations of passages of Lorem Ipsum available</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper-container content-top slider-nav-style-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                        </p>
                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="<?= SITE_TEMPLATE_PATH?>/assets/images/testimonial/1.png" alt="">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Regan Rosen<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                        </p>
                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="<?= SITE_TEMPLATE_PATH?>/assets/images/testimonial/1.png" alt="">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Regan Rosen<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                        </p>
                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="<?= SITE_TEMPLATE_PATH?>/assets/images/testimonial/1.png" alt="">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Regan Rosen<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                        </p>
                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="<?= SITE_TEMPLATE_PATH?>/assets/images/testimonial/1.png" alt="">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Regan Rosen<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial area end-->
    <!-- Brand area start -->
    <div class="brand-area pt-100px pb-100px">
        <div class="container">
            <div class="brand-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="<?= SITE_TEMPLATE_PATH?>/assets/images/partner/1.png" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="<?= SITE_TEMPLATE_PATH?>/assets/images/partner/2.png" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="<?= SITE_TEMPLATE_PATH?>/assets/images/partner/3.png" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="<?= SITE_TEMPLATE_PATH?>/assets/images/partner/4.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area end -->
    <!-- Blog area start from here -->
    <div class="main-blog-area pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30px0px">
                        <h2 class="title">Latest Blog</h2>
                        <p> There are many variations of passages of Lorem Ipsum available</p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="row">
                <div class="col-lg-6 col-sm-6 mb-xs-30px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="<?= SITE_TEMPLATE_PATH?>/assets/images/blog-image/1.webp" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date line-height-1">
                                <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                                <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Wild Nick</a></span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">10 Quick Tips About Smart Product</a></h5>
                            <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-lg-6 col-sm-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="<?= SITE_TEMPLATE_PATH?>/assets/images/blog-image/2.webp" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date line-height-1">
                                <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                                <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Oaklee Odom</a></span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">5 Real-Life Lessons About Smart Product</a></h5>
                            <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
            </div>
        </div>
    </div>
    <!-- Blog area end here -->
    </html>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>