@include('index.css')
@include('index.document.css')
{{-- @include('index.document.header') --}}
<body class="page-template-default page page-id-33 theme-mendel woocommerce-no-js body_tag scheme_default blog_mode_page body_style_wide is_single sidebar_hide expand_content remove_margins header_style_header-custom-21 header_position_default menu_style_top no_layout wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
<div class="body_wrap">
    <div class="page_wrap">
        <header class="top_panel top_panel_custom top_panel_custom_21 top_panel_custom_header-fullwidth-simple without_bg_image scheme_default">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1500893297996 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex sc_layouts_row sc_layouts_row_type_compact sc_layouts_row_fixed scheme_dark">
                <div class="wpb_column vc_column_container vc_col-sm-3 sc_layouts_column sc_layouts_column_align_left sc_layouts_column_icons_position_left">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space  vc_custom_1500975516958" style="height: 0px"><span
                                    class="vc_empty_space_inner"></span></div>
                            <div class="sc_layouts_item">
                                <a href="index.html" id="sc_layouts_logo_530504277" class="sc_layouts_logo sc_layouts_logo_default">
                                    <img class="logo_image" src="{{ asset('img/img/logoheader.png') }}" alt="" width="240" height="42">
                                </a><!-- /.sc_layouts_logo --></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="sc_layouts_item">
								@include('index.header')
                                <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                                    <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-sm vc_hidden-xs sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space  vc_custom_1500893543863" style="height: 0px">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                            <div class="sc_layouts_item">
                                <div id="sc_layouts_iconed_text_873591328" class="sc_layouts_iconed_text">
                                    <a href="{{route('admin.index')}}"class="sc_layouts_item_link sc_layouts_iconed_text_link">
                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-user"></span>
                                    </a>
                                </div><!-- /.sc_layouts_iconed_text -->
                            </div>
                            <div class="sc_layouts_item">
                                <div id="sc_layouts_cart_1194727504" class="sc_layouts_cart">
                                    <span class="sc_layouts_item_icon sc_layouts_cart_icon trx_addons_icon-basket"></span>
                                    <span class="sc_layouts_item_details sc_layouts_cart_details">
                                        <span class="sc_layouts_item_details_line2 sc_layouts_cart_totals">
                                            <span class="sc_layouts_cart_items">0 items</span>-
                                            <span class="sc_layouts_cart_summa">&#36;0.00</span>
                                        </span>
                                    </span><!-- /.sc_layouts_cart_details -->
                                    <span class="sc_layouts_cart_items_short">0</span>
                                    <div class="sc_layouts_cart_widget widget_area">
                                        <span class="sc_layouts_cart_widget_close trx_addons_icon-cancel"></span>
                                        <div class="widget woocommerce widget_shopping_cart">
                                            <div class="widget_shopping_cart_content"></div>
                                        </div>
                                    </div><!-- /.sc_layouts_cart_widget -->
                                </div><!-- /.sc_layouts_cart --></div>
                            <div class="sc_layouts_item">
                                <div id="sc_layouts_iconed_text_500624530" class="sc_layouts_iconed_text"><a
                                        href="/cdn-cgi/l/email-protection#cbaeb3aaa6bba7ae8bbfaeb8bfe5a8a4a6"
                                        class="sc_layouts_item_link sc_layouts_iconed_text_link"><span
                                        class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-mail-1"></span></a>
                                </div><!-- /.sc_layouts_iconed_text --></div>
                            <div class="sc_layouts_item">
                                <div id="sc_layouts_search_1756010979" class="sc_layouts_search">
                                    <div class="search_wrap search_style_fullscreen search_ajax layouts_search">
                                        <div class="search_form_wrap">
                                            <form role="search" method="get" class="search_form"action="http://mendel-antiques.ancorathemes.com/">
                                                <input type="text" class="search_field" placeholder="Search" value=""name="s">
                                                <button type="submit"
                                                        class="search_submit trx_addons_icon-search"></button>
                                                <a class="search_close trx_addons_icon-delete"></a>
                                            </form>
                                        </div>
                                        <div class="search_results widget_area"><a href="#"class="search_results_close trx_addons_icon-cancel"></a>
                                            <div class="search_results_content"></div>
                                        </div>
                                    </div>
                                </div><!-- /.sc_layouts_search --></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1500902865228 vc_row-has-fill sc_layouts_row sc_layouts_row_type_normal sc_layouts_hide_on_frontpage scheme_dark">
                <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div id="sc_content_631574940"class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center">
                                <div class="sc_content_container">
                                    <div class="vc_empty_space  em_sp_top vc_custom_1568806866743 height_large"style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                    <div class="sc_layouts_item">
                                        <div id="sc_layouts_title_68417949" class="sc_layouts_title with_content">
                                            <div class="sc_layouts_title_content">
                                                <div class="sc_layouts_title_title">
                                                    <h1 class="sc_layouts_title_caption">Tài Liệu</h1>
                                                </div>
                                                <div class="sc_layouts_title_breadcrumbs">
                                                    <div class="breadcrumbs">
                                                        <a class="breadcrumbs_item home"href="{{route('index.index')}}">Trang Chủ</a>
                                                        <span class="breadcrumbs_delimiter"></span>
                                                        <span class="breadcrumbs_item current">Tài liệu</span>
                                                    </div>
                                                </div>
                                            </div><!-- .sc_layouts_title_content -->
                                        </div><!-- /.sc_layouts_title -->
                                    </div>
                                    <div class="vc_empty_space  em_sp_b vc_custom_1568806854216 height_large"style="height: 32px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div><!-- /.sc_content -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="menu_mobile_overlay"></div>
        <div class="page_content_wrap scheme_default">
            <div class="content_wrap">
                <div class="content">
                    <article id="post-33"class="post_item_single post_type_page post-33 page type-page status-publish hentry">
                        <div class="post_content entry-content">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space  vc_custom_1500471063032 height_large"style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                            <div id="sc_services_898808862"class="sc_services color_style_default sc_services_chess sc_services_featured_top">
                                                <h6 class="sc_item_subtitle sc_services_subtitle sc_align_center sc_item_title_style_Alternative">Tài Liệu</h6>
                                                <h2 class="sc_item_title sc_services_title sc_align_center sc_item_title_style_Alternative sc_item_title_tag">Học Viên Ngân Hàng</h2>
                                                <div class="sc_item_descr sc_services_descr sc_align_center"><p></p>
                                                </div>
                                                <div class="sc_services_columns_wrap sc_item_columns sc_item_columns_2 trx_addons_columns_wrap columns_padding_bottom no_margin">
                                                    <div class="trx_addons_column-1_2 ">
                                                        <div class="sc_services_item with_content">
                                                            <div class="post_featured with_thumb hover_icon sc_services_item_header post_featured_bg mendel_inline_957708294">
                                                                <div class="mask"></div>
                                                                <div class="icons"><a href="http://mendel-antiques.ancorathemes.com/services/antique-collection-and-delivery/"aria-hidden="true" class="icon-search-alt"></a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h5 class="sc_services_item_title">
                                                                    <a href="http://mendel-antiques.ancorathemes.com/services/antique-collection-and-delivery/">Khoa Quản trị kinh doanh</a></h5>
                                                                <div class="sc_services_item_subtitle"><a
                                                                        href="http://mendel-antiques.ancorathemes.com/services_group/services/"
                                                                        title="View all posts in Services">Services</a>
                                                                </div>
                                                                <div class="sc_services_item_text"><p></p>
                                                                </div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="http://mendel-antiques.ancorathemes.com/services/antique-collection-and-delivery/"
                                                                           class="sc_button sc_button_simple">Xem
                                                                            thêm</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="trx_addons_column-1_2 ">
                                                        <div class="sc_services_item with_content">
                                                            <div class="post_featured with_thumb hover_icon sc_services_item_header post_featured_bg mendel_inline_1053337459">
                                                                <div class="mask"></div>
                                                                <div class="icons"><a
                                                                        href="http://mendel-antiques.ancorathemes.com/services/furniture-restoration/"
                                                                        aria-hidden="true" class="icon-search-alt"></a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h5 class="sc_services_item_title"><a
                                                                        href="http://mendel-antiques.ancorathemes.com/services/furniture-restoration/">Khoa
                                                                    Tài Chính Ngân Hàng</a></h5>
                                                                <div class="sc_services_item_subtitle"><a
                                                                        href="http://mendel-antiques.ancorathemes.com/services_group/services/"
                                                                        title="View all posts in Services">Services</a>
                                                                </div>
                                                                <div class="sc_services_item_text"><p></p>
                                                                </div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="http://mendel-antiques.ancorathemes.com/services/furniture-restoration/"
                                                                           class="sc_button sc_button_simple">Xem
                                                                            thêm</a></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="trx_addons_column-1_2 ">
                                                        <div class="sc_services_item with_content">
                                                            <div class="post_featured with_thumb hover_icon sc_services_item_header post_featured_bg mendel_inline_1030833210">
                                                                <div class="mask"></div>
                                                                <div class="icons"><a
                                                                        href="http://mendel-antiques.ancorathemes.com/services/upholstery-and-polish-service/"
                                                                        aria-hidden="true" class="icon-search-alt"></a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h5 class="sc_services_item_title"><a
                                                                        href="http://mendel-antiques.ancorathemes.com/services/upholstery-and-polish-service/">Khoa
                                                                    Kế Toán</a></h5>
                                                                <div class="sc_services_item_subtitle"><a
                                                                        href="http://mendel-antiques.ancorathemes.com/services_group/services/"
                                                                        title="View all posts in Services">Services</a>
                                                                </div>
                                                                <div class="sc_services_item_text"><p></p>
                                                                </div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="http://mendel-antiques.ancorathemes.com/services/upholstery-and-polish-service/"
                                                                           class="sc_button sc_button_simple">Xem
                                                                            thêm</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="trx_addons_column-1_2 ">
                                                        <div class="sc_services_item with_content">
                                                            <div class="post_featured with_thumb hover_icon sc_services_item_header post_featured_bg mendel_inline_329904820">
                                                                <div class="mask"></div>
                                                                <div class="icons">
                                                                    <a href="http://mis.hvnh.edu.vn/"aria-hidden="true" class="icon-search-alt"></a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h5 class="sc_services_item_title"><a href="http://mis.hvnh.edu.vn/">Khoa Hệ Thống Thông Tin Quản Lý </a></h5>
                                                                <div class="sc_services_item_subtitle"><a href="http://mis.hvnh.edu.vn/" title="View all posts in Services">Services</a>
                                                                </div>
                                                                <div class="sc_services_item_text"><p></p></div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="http://mis.hvnh.edu.vn/" class="sc_button sc_button_simple">Xem thêm</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="trx_addons_column-1_2 ">
                                                        <div class="sc_services_item with_content">
                                                            <div class="post_featured with_thumb hover_icon sc_services_item_header post_featured_bg mendel_inline_3299048232">
                                                                <div class="mask"></div>
                                                                <div class="icons"><a
                                                                        href="http://khoaktqt.buh.edu.vn/"
                                                                        aria-hidden="true" class="icon-search-alt"></a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h5 class="sc_services_item_title"><a
                                                                        href="http://khoaktqt.buh.edu.vn/">Khoa
                                                                    Kinh Doanh Quốc Tế</a></h5>
                                                                <div class="sc_services_item_subtitle"><a
                                                                        href="hhttp://khoaktqt.buh.edu.vn/"
                                                                        title="View all posts in Services">Services</a>
                                                                </div>
                                                                <div class="sc_services_item_text"><p></p>
                                                                </div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="http://khoaktqt.buh.edu.vn/"
                                                                           class="sc_button sc_button_simple">Xem
                                                                            thêm</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="trx_addons_column-1_2 ">
                                                        <div class="sc_services_item with_content">
                                                            <div class="post_featured with_thumb hover_icon sc_services_item_header post_featured_bg mendel_inline_329904823">
                                                                <div class="mask"></div>
                                                                <div class="icons"><a href="http://hvnh.edu.vn/law/vi/home.html" aria-hidden="true" class="icon-search-alt"></a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h5 class="sc_services_item_title"><a
                                                                        href="http://hvnh.edu.vn/law/vi/home.html">Khoa
                                                                    Luật </a></h5>
                                                                <div class="sc_services_item_subtitle"><a
                                                                        href="http://hvnh.edu.vn/law/vi/home.html"
                                                                        title="View all posts in Services">Services</a>
                                                                </div>
                                                                <div class="sc_services_item_text"><p></p>
                                                                </div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="http://hvnh.edu.vn/law/vi/home.html"
                                                                           class="sc_button sc_button_simple">Xem
                                                                            thêm</a></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        </ul>
                                                    </div>
                                                    <div class="trx_addons_column-1_2 ">
                                                        <div class="sc_services_item with_content">
                                                            <div class="post_featured with_thumb hover_icon sc_services_item_header post_featured_bg mendel_inline_1030833215">
                                                                <div class="mask"></div>
                                                                <div class="icons"><a
                                                                        href="http://hvnh.edu.vn/atc/vi/home.html"
                                                                        aria-hidden="true" class="icon-search-alt"></a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h5 class="sc_services_item_title"><a
                                                                        href="http://hvnh.edu.vn/atc/vi/home.html">Khoa
                                                                    Ngôn Ngữ Anh</a></h5>
                                                                <div class="sc_services_item_subtitle"><a
                                                                        href="http://hvnh.edu.vn/atc/vi/home.html"
                                                                        title="View all posts in Services">Services</a>
                                                                </div>
                                                                <div class="sc_services_item_text"><p></p>
                                                                </div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="http://hvnh.edu.vn/atc/vi/home.html"
                                                                           class="sc_button sc_button_simple">Xem
                                                                            thêm</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="trx_addons_column-1_2 ">
                                                    <div class="sc_services_item with_content">
                                                        <div class="post_featured with_thumb hover_icon sc_services_item_header post_featured_bg mendel_inline_329904822">
                                                            <div class="mask"></div>
                                                            <div class="icons"><a
                                                                    href="http://hvnh.edu.vn/bank/vi/home.html"
                                                                    aria-hidden="true" class="icon-search-alt"></a>
                                                            </div>
                                                        </div>
                                                        <div class="sc_services_item_content">
                                                            <h5 class="sc_services_item_title"><a href="http://hvnh.edu.vn/bank/vi/home.html">Khoa ngân hàng </a></h5>
                                                            <div class="sc_services_item_subtitle">
                                                                <a href="http://hvnh.edu.vn/bank/vi/home.html" title="View all posts in Services">Services</a>
                                                            </div>
                                                            <div class="sc_services_item_text"><p></p></div>
                                                            <div class="sc_services_item_info">
                                                                <div class="sc_services_item_button sc_item_button">
                                                                    <a href="http://hvnh.edu.vn/bank/vi/home.html" class="sc_button sc_button_simple">Xem thêm</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="trx_addons_column-1_2 ">
                                                        <div class="sc_services_item with_content">
                                                            <div class="post_featured with_thumb hover_icon sc_services_item_header post_featured_bg mendel_inline_329904822s">
                                                                <div class="mask"></div>
                                                                <div class="icons"><a
                                                                        href="http://hvnh.edu.vn/bank/vi/home.html"
                                                                        aria-hidden="true" class="icon-search-alt"></a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h5 class="sc_services_item_title"><a href="http://hvnh.edu.vn/bank/vi/home.html">Khoa kinh tế </a></h5>
                                                                <div class="sc_services_item_subtitle">
                                                                    <a href="http://hvnh.edu.vn/bank/vi/home.html" title="View all posts in Services">Services</a>
                                                                </div>
                                                                <div class="sc_services_item_text"><p></p></div>
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_button sc_item_button">
                                                                        <a href="http://hvnh.edu.vn/bank/vi/home.html" class="sc_button sc_button_simple">Xem thêm</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space  vc_custom_1500477613879 height_large"
                                                         style="height: 32px"><span class="vc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                </div><!-- .entry-content -->


                    </article>

                </div><!-- </.content> -->

            </div><!-- </.content_wrap> -->            </div><!-- </.page_content_wrap> -->

       @include('index.footer')
    </div><!-- /.page_wrap -->

</div><!-- /.body_wrap -->


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript">
    var ajaxRevslider;

    jQuery(document).ready(function () {


        // CUSTOM AJAX CONTENT LOADING FUNCTION
        ajaxRevslider = function (obj) {

            // obj.type : Post Type
            // obj.id : ID of Content to Load
            // obj.aspectratio : The Aspect Ratio of the Container / Media
            // obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content

            var content = '';
            var data = {
                action: 'revslider_ajax_call_front',
                client_action: 'get_slider_html',
                token: 'a945e10489',
                type: obj.type,
                id: obj.id,
                aspectratio: obj.aspectratio
            };

            // SYNC AJAX REQUEST
            jQuery.ajax({
                type: 'post',
                url: 'http://mendel-antiques.ancorathemes.com/wp-admin/admin-ajax.php',
                dataType: 'json',
                data: data,
                async: false,
                success: function (ret, textStatus, XMLHttpRequest) {
                    if (ret.success == true)
                        content = ret.data;
                },
                error: function (e) {
                    console.log(e);
                }
            });

            // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
            return content;
        };

        // CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
        var ajaxRemoveRevslider = function (obj) {
            return jQuery(obj.selector + ' .rev_slider').revkill();
        };


        // EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
        if (jQuery.fn.tpessential !== undefined)
            if (typeof (jQuery.fn.tpessential.defaults) !== 'undefined')
                jQuery.fn.tpessential.defaults.ajaxTypes.push({
                    type: 'revslider',
                    func: ajaxRevslider,
                    killfunc: ajaxRemoveRevslider,
                    openAnimationSpeed: 0.3
                });
        // type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
        // func: the Function Name which is Called once the Item with the Post Type has been clicked
        // killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
        // openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)


    });
</script>
<!-- Instagram Feed JS -->
<script type="text/javascript">
    var sbiajaxurl = "http://mendel-antiques.ancorathemes.com/wp-admin/admin-ajax.php";
</script>
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "http:\/\/mendel-antiques.ancorathemes.com\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.7'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
    jQuery(document).ready(function (jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "MM d, yy",
            "firstDay": 1,
            "isRTL": false
        });
    });
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-timepicker/jquery-ui-timepicker-addon.min.js?ver=5.3.2'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-sliderAccess.js?ver=5.3.2'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_addons/js/swiper/swiper.jquery.min.js'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_addons/js/magnific/jquery.magnific-popup.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var TRX_ADDONS_STORAGE = {
        "ajax_url": "http:\/\/mendel-antiques.ancorathemes.com\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "97687fc03d",
        "site_url": "http:\/\/mendel-antiques.ancorathemes.com",
        "post_id": "33",
        "vc_edit_mode": "0",
        "popup_engine": "magnific",
        "animate_inner_links": "0",
        "user_logged_in": "0",
        "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$",
        "msg_ajax_error": "Invalid server answer!",
        "msg_magnific_loading": "Loading image",
        "msg_magnific_error": "Error loading image",
        "msg_error_like": "Error saving your like! Please, try again later.",
        "msg_field_name_empty": "The name can't be empty",
        "msg_field_email_empty": "Too short (or empty) email address",
        "msg_field_email_not_valid": "Invalid email address",
        "msg_field_text_empty": "The message text can't be empty",
        "msg_search_error": "Search error! Try again later.",
        "msg_send_complete": "Send message complete!",
        "msg_send_error": "Transmit failed!",
        "ajax_views": "",
        "menu_cache": [".menu_mobile_inner > nav > ul"],
        "login_via_ajax": "1",
        "msg_login_empty": "The Login field can't be empty",
        "msg_login_long": "The Login field is too long",
        "msg_password_empty": "The password can't be empty and shorter then 4 characters",
        "msg_password_long": "The password is too long",
        "msg_login_success": "Login success! The page should be reloaded in 3 sec.",
        "msg_login_error": "Login failed!",
        "msg_not_agree": "Please, read and check 'Terms and Conditions'",
        "msg_email_long": "E-mail address is too long",
        "msg_email_not_valid": "E-mail address is invalid",
        "msg_password_not_equal": "The passwords in both fields are not equal",
        "msg_registration_success": "Registration success! Please log in!",
        "msg_registration_error": "Registration failed!",
        "scroll_to_anchor": "1",
        "update_location_from_anchor": "0",
        "msg_sc_googlemap_not_avail": "Googlemap service is not available",
        "msg_sc_googlemap_geocoder_error": "Error while geocode address"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_addons/js/trx_addons.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var TRX_DEMO_STORAGE = {
        "ajax_url": "http:\/\/mendel-antiques.ancorathemes.com\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "97687fc03d",
        "site_url": "http:\/\/mendel-antiques.ancorathemes.com",
        "user_logged_in": "0",
        "msg_ajax_error": "Invalid server response! Try again later.",
        "tabs_delay": "5000"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_demo/js/trx_demo_panels.js'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.0.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_628ed1ee6ec9661da1ed4f9e60a23a4b",
        "fragment_name": "wc_fragments_628ed1ee6ec9661da1ed4f9e60a23a4b",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.0.1'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/trx_addons/components/cpt/layouts/shortcodes/menu/superfish.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var MENDEL_STORAGE = {
        "ajax_url": "http:\/\/mendel-antiques.ancorathemes.com\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "97687fc03d",
        "site_url": "http:\/\/mendel-antiques.ancorathemes.com",
        "theme_url": "http:\/\/mendel-antiques.ancorathemes.com\/wp-content\/themes\/mendel",
        "site_scheme": "scheme_default",
        "user_logged_in": "",
        "mobile_layout_width": "767",
        "mobile_device": "",
        "menu_side_stretch": "",
        "menu_side_icons": "1",
        "background_video": "",
        "use_mediaelements": "1",
        "comment_maxlength": "1000",
        "admin_mode": "",
        "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$",
        "strings": {
            "ajax_error": "Invalid server answer!",
            "error_global": "Error data validation!",
            "name_empty": "The name can&#039;t be empty",
            "name_long": "Too long name",
            "email_empty": "Too short (or empty) email address",
            "email_long": "Too long email address",
            "email_not_valid": "Invalid email address",
            "text_empty": "The message text can&#039;t be empty",
            "text_long": "Too long message text"
        },
        "alter_link_color": "#838a40",
        "button_hover": "slide_left",
        "stretch_tabs_area": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/themes/mendel/js/__scripts.js'></script>
<script type='text/javascript'>
    var mejsL10n = {
        "language": "en", "strings": {
            "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
            "mejs.fullscreen-off": "Turn off Fullscreen",
            "mejs.fullscreen-on": "Go Fullscreen",
            "mejs.download-video": "Download Video",
            "mejs.fullscreen": "Fullscreen",
            "mejs.time-jump-forward": ["Jump forward 1 second", "Jump forward %1 seconds"],
            "mejs.loop": "Toggle Loop",
            "mejs.play": "Play",
            "mejs.pause": "Pause",
            "mejs.close": "Close",
            "mejs.time-slider": "Time Slider",
            "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
            "mejs.time-skip-back": ["Skip back 1 second", "Skip back %1 seconds"],
            "mejs.captions-subtitles": "Captions\/Subtitles",
            "mejs.captions-chapters": "Chapters",
            "mejs.none": "None",
            "mejs.mute-toggle": "Mute Toggle",
            "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
            "mejs.unmute": "Unmute",
            "mejs.mute": "Mute",
            "mejs.volume-slider": "Volume Slider",
            "mejs.video-player": "Video Player",
            "mejs.audio-player": "Audio Player",
            "mejs.ad-skip": "Skip ad",
            "mejs.ad-skip-info": ["Skip in 1 second", "Skip in %1 seconds"],
            "mejs.source-chooser": "Source Chooser",
            "mejs.stop": "Stop",
            "mejs.speed-rate": "Speed Rate",
            "mejs.live-broadcast": "Live Broadcast",
            "mejs.afrikaans": "Afrikaans",
            "mejs.albanian": "Albanian",
            "mejs.arabic": "Arabic",
            "mejs.belarusian": "Belarusian",
            "mejs.bulgarian": "Bulgarian",
            "mejs.catalan": "Catalan",
            "mejs.chinese": "Chinese",
            "mejs.chinese-simplified": "Chinese (Simplified)",
            "mejs.chinese-traditional": "Chinese (Traditional)",
            "mejs.croatian": "Croatian",
            "mejs.czech": "Czech",
            "mejs.danish": "Danish",
            "mejs.dutch": "Dutch",
            "mejs.english": "English",
            "mejs.estonian": "Estonian",
            "mejs.filipino": "Filipino",
            "mejs.finnish": "Finnish",
            "mejs.french": "French",
            "mejs.galician": "Galician",
            "mejs.german": "German",
            "mejs.greek": "Greek",
            "mejs.haitian-creole": "Haitian Creole",
            "mejs.hebrew": "Hebrew",
            "mejs.hindi": "Hindi",
            "mejs.hungarian": "Hungarian",
            "mejs.icelandic": "Icelandic",
            "mejs.indonesian": "Indonesian",
            "mejs.irish": "Irish",
            "mejs.italian": "Italian",
            "mejs.japanese": "Japanese",
            "mejs.korean": "Korean",
            "mejs.latvian": "Latvian",
            "mejs.lithuanian": "Lithuanian",
            "mejs.macedonian": "Macedonian",
            "mejs.malay": "Malay",
            "mejs.maltese": "Maltese",
            "mejs.norwegian": "Norwegian",
            "mejs.persian": "Persian",
            "mejs.polish": "Polish",
            "mejs.portuguese": "Portuguese",
            "mejs.romanian": "Romanian",
            "mejs.russian": "Russian",
            "mejs.serbian": "Serbian",
            "mejs.slovak": "Slovak",
            "mejs.slovenian": "Slovenian",
            "mejs.spanish": "Spanish",
            "mejs.swahili": "Swahili",
            "mejs.swedish": "Swedish",
            "mejs.tagalog": "Tagalog",
            "mejs.thai": "Thai",
            "mejs.turkish": "Turkish",
            "mejs.ukrainian": "Ukrainian",
            "mejs.vietnamese": "Vietnamese",
            "mejs.welsh": "Welsh",
            "mejs.yiddish": "Yiddish"
        }
    };
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.13-9993131'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=5.3.2'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpmejsSettings = {
        "pluginPath": "\/wp-includes\/js\/mediaelement\/",
        "classPrefix": "mejs-",
        "stretching": "responsive"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=5.3.2'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-includes/js/wp-embed.min.js?ver=5.3.2'></script>
<script type='text/javascript'
        src='http://mendel-antiques.ancorathemes.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.0.5'></script>
<a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
<script>
    TRX_DEMO_STORAGE['tabs_layout'] = "		<div class=\"trx_demo_panels trx_demo_tabs_position_rc\" style=\"width:320px;\">    			<div class=\"trx_demo_tabs\">  				<a class=\"hint_left hint_big hint_slide\" href=\"https://themeforest.net/checkout/from_item/20831042?license=regular&#038;size=source\"  						 target=\"_blank\"						aria-label=\"Buy theme\"  						data-type=\"link\"  						style=\"color:#ffffff;background-color:#838a40;\"  					><i class=\"trx_demo_icon-shopping-cart\"></i></a><a class=\"hint_left hint_big hint_slide\" href=\"#panel_related-themes\"  												aria-label=\"Related themes\"  						data-type=\"products\"  						style=\"color:#ffffff;background-color:#838a40;\"  					><i class=\"trx_demo_icon-gallery\"></i></a><a class=\"hint_left hint_big hint_slide\" href=\"http://mendel-antiques.ancorathemes.com?notabs=1\"  												aria-label=\"Hide panel\"  						data-type=\"link\"  						style=\"color:#ffffff;background-color:#838a40;\"  					><i class=\"trx_demo_icon-browser\"></i></a>			</div>    			<div class=\"trx_demo_panels_wrap\">  				<div id=\"panel_related-themes\"  							class=\"trx_demo_panel  									trx_demo_panel_products									trx_demo_panel_thumbs_animation_off									trx_demo_panel_layout_1col									trx_demo_panel_style_plain\"  							style=\"\"  					><div class=\"trx_demo_panel_header\"><h5 class=\"trx_demo_panel_title\" style=\"\">Related Themes</h5></div><div class=\"trx_demo_panel_list\"><div class=\"trx_demo_panel_list_item\">  									<div class=\"trx_demo_panel_list_item_image_wrap\">  																					<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_1_1\" style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2019/07/Geometry.jpg);\">  												<a href=\"http://demo.themerex.net/?theme=geometry\" target=\"_blank\"></a>  											</div>  											<h6 class=\"trx_demo_panel_list_item_title\">  											<a href=\"http://demo.themerex.net/?theme=geometry\" target=\"_blank\">Geometry &#8211; Interior Design &amp; Furniture Shop WordPress Theme</a>  										</h6>  										<div class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Business</span></div>									</div>  								</div><div class=\"trx_demo_panel_list_item\">  									<div class=\"trx_demo_panel_list_item_image_wrap\">  																					<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_1_1\" style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2018/08/ozisti-1.png);\">  												<a href=\"http://demo.themerex.net/?theme=ozisti\" target=\"_blank\"></a>  											</div>  											<h6 class=\"trx_demo_panel_list_item_title\">  											<a href=\"http://demo.themerex.net/?theme=ozisti\" target=\"_blank\">Ozisti &#8211; Augmented Reality, AR WooCommerce WordPress Theme</a>  										</h6>  										<div class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">WooCommerce</span></div>									</div>  								</div><div class=\"trx_demo_panel_list_item\">  									<div class=\"trx_demo_panel_list_item_image_wrap\">  																					<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_1_1\" style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2018/04/palladio-1.png);\">  												<a href=\"http://demo.themerex.net/?theme=palladio\" target=\"_blank\"></a>  											</div>  											<h6 class=\"trx_demo_panel_list_item_title\">  											<a href=\"http://demo.themerex.net/?theme=palladio\" target=\"_blank\">Palladio &#8211; Interior Design &amp; Architecture Theme</a>  										</h6>  										<div class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Business</span></div>									</div>  								</div><div class=\"trx_demo_panel_list_item\">  									<div class=\"trx_demo_panel_list_item_image_wrap\">  																					<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_1_1\" style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2017/09/1-51.png);\">  												<a href=\"http://demo.themerex.net/?theme=astudio\" target=\"_blank\"></a>  											</div>  											<h6 class=\"trx_demo_panel_list_item_title\">  											<a href=\"http://demo.themerex.net/?theme=astudio\" target=\"_blank\">A.Studio &#8211; Interior Design and Architecture Theme</a>  										</h6>  										<div class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Business</span></div>									</div>  								</div><div class=\"trx_demo_panel_list_item\">  									<div class=\"trx_demo_panel_list_item_image_wrap\">  																					<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_1_1\" style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2018/03/gravity-1.png);\">  												<a href=\"http://demo.themerex.net/?theme=gravity\" target=\"_blank\"></a>  											</div>  											<h6 class=\"trx_demo_panel_list_item_title\">  											<a href=\"http://demo.themerex.net/?theme=gravity\" target=\"_blank\">Gravity &#8211; Interior Design &amp; Furniture Store</a>  										</h6>  										<div class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Retail</span></div>									</div>  								</div><div class=\"trx_demo_panel_list_item\">  									<div class=\"trx_demo_panel_list_item_image_wrap\">  																					<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_1_1\" style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2017/11/1-4.png);\">  												<a href=\"http://demo.themerex.net/?theme=green-thumb\" target=\"_blank\"></a>  											</div>  											<h6 class=\"trx_demo_panel_list_item_title\">  											<a href=\"http://demo.themerex.net/?theme=green-thumb\" target=\"_blank\">Green Thumb &#8211; Gardening &amp; Landscaping Theme</a>  										</h6>  										<div class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Retail</span></div>									</div>  								</div><div class=\"trx_demo_panel_list_item\">  									<div class=\"trx_demo_panel_list_item_image_wrap\">  																					<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_1_1\" style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2019/07/Rhodos-1.jpg);\">  												<a href=\"http://demo.themerex.net/?theme=rhodos\" target=\"_blank\"></a>  											</div>  											<h6 class=\"trx_demo_panel_list_item_title\">  											<a href=\"http://demo.themerex.net/?theme=rhodos\" target=\"_blank\">Rhodos &#8211; A Colossal Multipurpose WordPress Theme for Business &amp; Portfolio</a>  										</h6>  										<div class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Business</span></div>									</div>  								</div><div class=\"trx_demo_panel_list_item\">  									<div class=\"trx_demo_panel_list_item_image_wrap\">  																					<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_1_1\" style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2019/09/Piqes_image.jpg);\">  												<a href=\"http://demo.themerex.net/?theme=piqes\" target=\"_blank\"></a>  											</div>  											<h6 class=\"trx_demo_panel_list_item_title\">  											<a href=\"http://demo.themerex.net/?theme=piqes\" target=\"_blank\">Piqes &#8211; Creative Startup &#038; Agency WordPress Theme</a>  										</h6>  										<div class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Business</span></div>									</div>  								</div><div class=\"trx_demo_panel_list_item\">  									<div class=\"trx_demo_panel_list_item_image_wrap\">  																					<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_1_1\" style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2019/07/yungen-preview.jpg);\">  												<a href=\"http://demo.themerex.net/?theme=yungen\" target=\"_blank\"></a>  											</div>  											<h6 class=\"trx_demo_panel_list_item_title\">  											<a href=\"http://demo.themerex.net/?theme=yungen\" target=\"_blank\">Yungen &#8211; Modern Digital Agency Business WordPress Theme</a>  										</h6>  										<div class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Business</span></div>									</div>  								</div></div><div class=\"trx_demo_panel_footer\"><a class=\"trx_demo_panel_button sc_button theme_button\" href=\"https://themerex.net/premium/?utm_source=demowidget&#038;utm_medium=demowidget&#038;utm_campaign=demowidget\" target=\"_blank\">View All Themes</a></div></div></div>  			<span class=\"trx_demo_button_close\"><span class=\"trx_demo_button_close_icon\"></span></span>    		</div>  		<div class=\"trx_demo_panels_mask\"></div>  		";
</script>

</body>
</html>
