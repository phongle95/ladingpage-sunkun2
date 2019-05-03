<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="sunkun/img/sunkunlogo.PNG" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SunKun - An Thấp Khớp</title>
    <!-- Place favicon.ico in the root directory -->
    <meta name="keywords" content="An thấp khớp,Sunkun,Xương khớp chắc khỏe,Sức khỏe gia đình việt,Tỏi đen,điều trị bệnh xương khớp,bệnh xương khớp" />
    <meta name="description" content='Liệu trình 10 ngày đã được thử nghiệm và sử dụng bởi rất nhiều người có bệnh đau nhức xương khớp. 97% người sử dụng điều hài lòng, và kết thúc đau khớp trong 10 ngày đầu tiên. 3% còn lại thì khỏi hoàn toàn trong vòng 2 tuần' />
    <!--meta facebook-->
    <meta property="og:title" content="An Thấp Khớp - Sunkun - Xương Khớp Chắc Khỏe" />
    <meta property="og:description" content="Liệu trình 10 ngày đã được thử nghiệm và sử dụng bởi rất nhiều người có bệnh đau nhức xương khớp. 97% người sử dụng điều hài lòng, và kết thúc đau khớp trong 10 ngày đầu tiên. 3% còn lại thì khỏi hoàn toàn trong vòng 2 tuần" />
    <meta property="og:image" content="sunkun/img/expert-team/atk5.png" />
    <!--meta google-->
    <meta itemprop="name" content="Tỏi đen 1 nhánh sunkun lên men 90 ngày và thảo dược thành phần và hàm lượng có trong thảo dược : Cây hy thiêm thảo ,Độc hoạt ,Đỗ trọng ,Ngưu tất ,Xuyên khung ,Đương quy và các dược liệu quý khác" />
    <meta itemprop="description" content="Liệu trình 10 ngày đã được thử nghiệm và sử dụng bởi rất nhiều người có bệnh đau nhức xương khớp. 97% người sử dụng điều hài lòng, và kết thúc đau khớp trong 10 ngày đầu tiên. 3% còn lại thì khỏi hoàn toàn trong vòng 2 tuần" />
    <meta itemprop="image" content="sunkun/img/expert-team/atk5.png" />
    <meta name="og:url" content="{{ route('trangchu.menu.master') }}" />
    <!-- Structure data -->
    <script type="application/ld+json">
        { "@context": "http://schema.org", "@type": "Organization", "address": { "@type": "PostalAddress", "addressLocality": "Việt Nam", "addressRegion": "TP Đà Nẵng", "streetAddress": "121 Cù Chính Lan, Thành Phố Đà Nẵng" }, "description": "Liệu trình 10 ngày đã được thử nghiệm và sử dụng bởi rất nhiều người có bệnh đau nhức xương khớp. 97% người sử dụng điều hài lòng, và kết thúc đau khớp trong 10 ngày đầu tiên. 3% còn lại thì khỏi hoàn toàn trong vòng 2 tuần", "name": "An Thap Khop", "telephone": "0989274727" }
    </script>
    <script type="application/ld+json">
        { "@context": "http://schema.org", "@type": "WebSite", "name": "Lysonvn", "url": "https://www.sunkun.vn/", "sameAs": ["https://www.facebook.com/toidensunkun.vn/"] }
    </script>

    <!-- Icon css link -->
    <link href="sunkun/vendors/themify-icon/themify-icons.css" rel="stylesheet">
    <link href="sunkun/css/font-awesome.min.css" rel="stylesheet"> {{--
    <link href="sunkun/vendors/linears-icon/style.css" rel="stylesheet"> --}}
    <!-- Bootstrap -->
    <link href="sunkun/css/bootstrap.min.css" rel="stylesheet">
    <!-- RS5.0 Layers and Navigation Styles -->
    {{--
    <link rel="stylesheet" type="text/css" href="sunkun/vendors/revolution/css/layers.css"> --}} {{--
    <link rel="stylesheet" type="text/css" href="sunkun/vendors/revolution/css/navigation.css"> --}}
    <link rel="stylesheet" type="text/css" href="sunkun/vendors/revolution/css/settings.css">
    <!-- Extra plugin css -->
    <link href="sunkun/vendors/animate-css/animate.css" rel="stylesheet">
    <link href="sunkun/vendors/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="sunkun/css/style.css" rel="stylesheet">
    <link href="sunkun/css/responsive.css" rel="stylesheet">
    <link href="sunkun/css/phone.css" rel="stylesheet">
    <link href="sunkun/css/toastr.css" rel="stylesheet">

    <!-- animation -->
    <link rel="stylesheet" href="animate.min.css">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <style type="text/css">
        #my_centered_buttons {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!--================Slider Area =================-->
    <header class="main_menu_area">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('trangchu.menu.master') }}"><img style="height:69px;width:119px;" src="sunkun/img/sunkunlogo.PNG" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a style="font-weight:600;color:#fff" href="#home">Trang Chủ</a></li>
                        <li><a style="font-weight:600;color:#fff" href="#feature">Triệu Chứng</a></li>
                        <li><a style="font-weight:600;color:#fff" href="#screenshot">Nguy Cơ</a></li>
                        <li><a style="font-weight:600;color:#fff" href="#giaiphap">Giải Pháp Cho Bạn</a></li>
                        <li><a style="font-weight:600;color:#fff" href="#feedback">Khách Hàng Phản Hồi</a></li>
                        <!-- <li><a style="font-weight:600;color:#fff" href="#price">Price</a></li>
                        <li><a style="font-weight:600;color:#fff" href="#download">Download</a></li>
                        <li><a style="font-weight:600;color:#fff" href="#team">Team</a></li> -->
                        <li><a style="font-weight:600;color:#fff" href="#contact">Liên Hệ</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!--================Slider Area =================-->
    <!--================Slider Area =================-->
    <section class="slider_area" id="home">
        <div class="rev_slider fullwidthabanner" data-version="5.3.0.2" id="main_slider">
            <ul>
                <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off" class="secand_slider">
                    <!-- MAIN IMAGE -->
                    <img src="sunkun/img/header-slider/sunkun4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption first_text" data-width="none" data-height="none" data-whitespace="nowrap" data-voffset="['270','270','200']" data-hoffset="['0','0','0']" data-x="['left','left','left','left','30']" data-y="top" data-fontsize="['36','36','25','22']" data-lineheight="['52','52','35','30']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="font-family: Gill Sans Extrabold, sans-serif;">Hết Đau Nhức , Phục Hồi Xương Khớp
                        <br>Thoái Hóa Xương, Thoát Vị Đĩa Đệm
                        <br> Viêm Khớp , Khô Khớp , Gout..v.v..
                    </div>
                    <div class="tp-caption download_btn" data-whitespace="nowrap" data-voffset="['515','515','430']" data-hoffset="['0','0','0']" data-x="['left','left','left','left','30']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-y="top" data-start="1800">
                        <a class="register_angkar_btn purple_s_btn" href="#contact">Tư Vấn Ngay<img src="https://img.icons8.com/color/48/000000/communication.png"></a>
                    </div>
                    <!-- LAYERS -->
                    <div class="tp-caption some_text" data-width="['570','570','570','350']" data-height="none" data-whitespace="normal" data-voffset="['400','400','300','285']" data-hoffset="['0','0','0']" data-x="['left','left','left','left','30']" data-y="top" data-fontsize="['16','16','15']" data-lineheight="['26','26','26']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    </div>
                    <!-- <div class="tp-caption right_text" data-width="none" data-height="none" data-whitespace="normal" data-voffset="['150','110','110','0']" data-hoffset="['0','0','0']" data-x="right" data-y="['top','top','top','bottom']" data-fontsize="['48']" data-lineheight="['55']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slider_shap">
                            <img src="sunkun/img/header-slider/khung.png" alt="Sun Kun">
                            <div class="slider_moblie owl-carousel">
                                <div class="item">
                                    <img src="sunkun/img/header-slider/logo1.png" alt="Sun Kun">
                                </div>
                                <div class="item">
                                    <img src="sunkun/img/header-slider/1toi.jpg" alt="Sun Kun">
                                </div>
                                <div class="item">
                                    <img src="sunkun/img/header-slider/2toi.jpg" alt="Sun Kun">
                                </div>
                            </div>
                        </div>
                    </div> -->
                </li>
                <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off" class="secand_slider">
                    <!-- MAIN IMAGE -->
                    <img src="sunkun/img/header-slider/sunkun3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption first_text" data-width="none" data-height="none" data-whitespace="nowrap" data-voffset="['270','270','200']" data-hoffset="['0','0','0']" data-x="['left','left','left','left','30']" data-y="top" data-fontsize="['36','36','25','22']" data-lineheight="['52','52','35','30']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="font-family: Gill Sans Extrabold, sans-serif;">Hết Đau , Phục Hồi Xương Khớp
                        <br> Chỉ Trong Vòng 10 Ngày
                        <br> Từ Sản Phẩm Tự Nhiên
                    </div>
                    <div class="tp-caption download_btn" data-whitespace="nowrap" data-voffset="['515','515','430']" data-hoffset="['0','0','0']" data-x="['left','left','left','left','30']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-y="top" data-start="1800">
                        <a class="register_angkar_btn purple_s_btn" href="#contact">Tư Vấn Ngay<img src="https://img.icons8.com/color/48/000000/communication.png"></a>
                    </div>
                    <!-- LAYERS -->
                    <div class="tp-caption some_text" data-width="['570','570','570','350']" data-height="none" data-whitespace="normal" data-voffset="['400','400','300','285']" data-hoffset="['0','0','0']" data-x="['left','left','left','left','30']" data-y="top" data-fontsize="['16','16','15']" data-lineheight="['26','26','26']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    </div>
                    <!-- <div class="tp-caption right_text" data-width="none" data-height="none" data-whitespace="normal" data-voffset="['150','110','110','0']" data-hoffset="['0','0','0']" data-x="right" data-y="['top','top','top','bottom']" data-fontsize="['48']" data-lineheight="['55']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slider_shap">
                            <img src="sunkun/img/header-slider/khung.png" alt="Sun Kun">
                            <div class="slider_moblie owl-carousel">
                                <div class="item">
                                    <img src="sunkun/img/header-slider/1toi.jpg" alt="Sun Kun">
                                </div>
                                <div class="item">
                                    <img src="sunkun/img/header-slider/2toi.jpg" alt="Sun Kun">
                                </div>
                            </div>
                        </div>
                    </div> -->
                </li>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </section>
    <!--================End Slider Area =================-->
    <!--================Detail Area =================-->
    <section class="detail_doc_area">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="main_title">
                    <h2>AN THẤP KHỚP </h2>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/tevrUdnf1AA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:center">Lương Y nói về sản phẩm chúng tôi</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <h3 class="animated infinite flash delay-1s" style="font-family:Arial, sans-serif;font-size: 160%;color:#ff0606;font-weight:600;text-align:left">"CẮT ĐUÔI" CÁC VẤN ĐỀ</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <p style="font-family:Arial, sans-serif;font-size: 120%;color:black;font-weight:500;text-align:left">
                                    <img src="https://img.icons8.com/color/40/000000/ok.png"> Thoái hóa đốt sống lưng L3,4,5
                                    <br>
                                    <br>
                                    <img src="https://img.icons8.com/color/40/000000/ok.png"> Thoát vị đĩa đệm, viêm khớp gối
                                    <br>
                                    <br>
                                    <img src="https://img.icons8.com/color/40/000000/ok.png"> Viêm đa khớp, chân tay tê mỏi
                                    <br>
                                    <br>
                                    <img src="https://img.icons8.com/color/40/000000/ok.png"> Viêm khớp dạng thấp, thoái hóa
                                </p>
                                <br>
                                <a id="my_centered_buttons" class="animated infinite zoomIn delay-1s btn btn-default submit_btn" href="#contact">Đăng Ký Tư Vấn</a>
                                <br>
                                <h3 class="animated infinite zoomIn delay-1s" style="font-family:Arial, sans-serif;font-size: 160%;color:#ff0606;font-weight:600;text-align:lecenft">CAM KẾT HIỆU QUẢ SAU 7 NGÀY </h3>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Detail Area =================-->

    <!--================Feature Area =================-->
    <section class="feature_area" id="feature">
        <div class="container">
            <div class="main_title">
                <h2>BẠN ĐANG GẶP CÁC TRIỆU CHỨNG DƯỚI ĐÂY</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="left_side_feature">
                        <div class="media">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Cứng khớp</h4>
                                </a>
                                <p>Các khớp bị tổn thương sưng, đỏ,viêm nóng thường xuyên.</p>
                            </div>
                            <div class="media-right">
                                <img src="https://img.icons8.com/nolan/64/000000/hand.png">
                            </div>
                        </div>
                    </div>
                    <div class="left_side_feature">
                        <div class="media">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Sưng Đau khớp</h4>
                                </a>
                                <p>Sưng tấy quanh khớp, đau khi chạm vào và đau nhức vào ban đêm. </p>
                            </div>
                            <div class="media-right">
                                <img src="https://img.icons8.com/office/60/000000/leg.png">
                            </div>
                        </div>
                    </div>
                    <div class="left_side_feature">
                        <div class="media">
                            <div class="media-body">
                                <a href="#contact">
                                    <h4>Đặt Hàng Ngay</h4>
                                </a>
                                <p>Hoàn tiền 100% hoặc đổi trả sản phẩm khi quý khách không hài lòng về sản phẩm , dịch vụ của chúng tôi
                                </p>
                            </div>
                            <div class="media-right">
                                <img src="https://img.icons8.com/ultraviolet/60/000000/cash-in-hand.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature_mobile">
                        <img src="sunkun/img/feature-m-slider/xuongkhop.jpg" alt="dau xuong khớp">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right_side_feature">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://img.icons8.com/color/60/000000/wheelchair.png">
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Khó hoặc mất vận động</h4>
                                </a>
                                <p>Không thể duỗi thẳng các khớp vị trí viêm sưng có dấu hiệu tê,nhức.</p>
                            </div>
                        </div>
                    </div>
                    <div class="right_side_feature">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://img.icons8.com/color/60/000000/calves.png">
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Các cơ bắp yếu đần đi</h4>
                                </a>
                                <p>Người bệnh sợ vận động vì đau, dẫn đến ít hoạt động các khớp và cơ. </p>
                            </div>
                        </div>
                    </div>
                    <div class="right_side_feature">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://img.icons8.com/color/60/000000/doctor-female.png">
                            </div>
                            <div class="media-body">
                                <a href="tel:0989274727">
                                    <h4>Chuyên gia tư vấn</h4>
                                </a>
                                <p>Gọi ngay 0989 274 727 để được tư vấn miễn phí </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Area =================-->
    <!--================Detail Area =================-->
    <section class="detail_doc_area">
        <div class="container">
            <div class="row">
                <div class="main_title">
                    <h2>Tại sao bà con dùng rất nhiều sản phẩm nhưng vẫn không khỏi?</h2>
                </div>
                <div class="col-md-6">
                    <div class="left_detail_content">
                        <div class="content_title">
                            <h2 style="font-family: Gill Sans Extrabold, sans-serif;">Các Nguyên Nhân</h2>
                        </div>
                        <div class="benefits_collaps">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ĐIỀU TRỊ KHÔNG TẬN GỐC
                                    <i class="ti-plus"></i>
                                    <i class="ti-minus"></i>
                                    </a>
                                 </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">Đa số mọi người dùng thuốc chỉ giải quyết phần ngọn của bệnh. bản chất bệnh xương khớp phải giải quyết phần gốc của nó</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfive">
                                        <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                ĐIỀU TRỊ KHÔNG DỨT ĐIỂM
                                        <i class="ti-plus"></i>
                                        <i class="ti-minus"></i>
                                        </a>
                                     </h4>
                                    </div>
                                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                        <div class="panel-body">
                                            <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">Hầu hết mọi người đều chủ quan, khi thấy bệnh có dấu hiệu thuyên giảm thì dừng hẳn.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    KHÔNG THEO ĐÚNG HƯỚNG DẪN
                                    <i class="ti-plus"></i>
                                    <i class="ti-minus"></i>
                                    </a>
                                 </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">Việc sử dụng sản phẩm không đúng theo hướng dẫn tư vấn, không đúng giờ, đúng phương pháp... Ăn uống và sử dụng những chất làm mất tác dụng của sản phẩm...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    LẠM DỤNG THUỐC TÂY
                                    <i class="ti-plus"></i>
                                    <i class="ti-minus"></i>
                                    </a>
                                 </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">Việc sử dụng và lạm dụng thuốc tây y không đúng cách gây tổn thương các niêm mạc dẫn tới khó hỗ trợ và kéo dài hơn</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfor">
                                        <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFor" aria-expanded="false" aria-controls="collapseThree">
                                    CHỦ QUAN VỚI TÌNH TRẠNG BỆNH
                                    <i class="ti-plus"></i>
                                    <i class="ti-minus"></i>
                                    </a>
                                 </h4>
                                    </div>
                                    <div id="collapseFor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfor">
                                        <div class="panel-body">
                                            <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">80% ngại ngùng và thiếu hiểu biết, không quan tâm, không chủ động đi khám sức khoẻ, dẫn đến nặng rồi mới lo chữa trị. BIẾN CHỨNG NẶNG MỚI LO CHỮA TRỊ</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <a class="animated infinite zoomIn delay-1s btn btn-default submit_btn" href="#contact">Tư Vấn Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right_detail_img">
                        <img src="sunkun/img/bs1.jpg" alt="bác sĩ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Detail Area =================-->
    <br>
    <br>
    <br>
    <!--================Expert Team Area =================-->
    <div class="expert_team_area" id="screenshot">
        <div class="container">
            <div class="main_title">
                <h2>KHÔNG XỬ LÝ NGAY, BIẾN CHỨNG NGUY HIỂM !!!</h2>
                <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:center">Theo thống kê, Việt Nam có đến hơn 37% số người mắc bệnh về xương khớp. Căn bệnh này có thể gây ra những biến chứng nguy hiểm như làm mất khả năng lao động, bại liệt, thậm chí đe dọa đến tính mạng.</p>
            </div>
            <div class="expert_slider owl-carousel">
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/screenshot/teoco.jpg" alt="teo cơ">
                    </div>
                </div>
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/screenshot/tkt.jpg" alt="thần kinh tọa">
                    </div>
                </div>
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/screenshot/tieutien.jpg" alt="xương khớp">
                    </div>
                </div>
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/screenshot/tanphe.jpg" alt="xương khớp">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Expert Team Area =================-->

    <!--================Detail Area =================-->
    <section class="detail_doc_area" id="giaiphap">
        <div class="container">
            <div class="row">
                <div class="main_title">
                    <h2>TẠI SAO AN THẤP KHỚP LÀ SẢN PHẨM ĐIỀU TRỊ BỆNH ĐAU NHỨC XƯƠNG KHỚP HIỆU QUẢ</h2>
                </div>
                <div class="col-md-6">
                    <div class="left_detail_content">
                        <h3 style="font-family:Arial, sans-serif;font-size: 140%;color:#ff0606;font-weight:600;text-align:left">Sản phẩm 2 thành phần gồm tỏi đen cô đơn và thảo dược</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left">
                                    <img src="https://img.icons8.com/color/30/000000/heart-with-pulse.png"> Tỏi đen cô đơn sunkun được lên men 90 ngày dành riêng cho bệnh đau nhức xương khớp
                                    <br>
                                    <img src="https://img.icons8.com/color/30/000000/heart-with-pulse.png"> Thảo dược làm từ dược liệu quý hoàn toàn tự nhiên như Cây hy thiêm thảo , Độc hoạt , Đỗ trọng , Ngưu tất , Xuyên khung
                                    <br>
                                    <img src="https://img.icons8.com/color/30/000000/heart-with-pulse.png"> Sản phẩm hoàn toàn tự nhiên , điều trị tận gốc mà không lo tái phát lại
                                </p>
                                <a id="my_centered_buttons" class="animated infinite zoomIn delay-1s btn btn-default submit_btn" href="#contact">Nhận Tư Vấn</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right_detail_img">
                        <img src="sunkun/img/spatk.jpg" alt="an thấp khớp">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <!-- <div class="col-sm-2"></div> -->
                <div class="col-sm-12">
                    <div class="main_title">
                        <h2>CƠ CHẾ ĐIỀU TRỊ CỦA AN THẤP KHỚP NHƯ THẾ NÀO ?</h2>
                    </div>
                    <div>
                        <h3 class="custom-h3"><img src="https://img.icons8.com/color/40/000000/ok.png"> Giai Đoạn 1:  Kháng Viêm, Tiêu Độc</h3>
                        <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left;padding-left: 45px;">
                            Trong giai đoạn này dược tính chú trọng khoanh vùng, tác động trực tiếp đến thẳng các ổ viêm, Làm sạch ổ viêm đồng thời đẩy độc tố ra ngoài cơ thể. Người bệnh sẽ cảm thấy đau tăng lên đôi chút, sau đó sẽ dịu dần và thoải mái hơn.
                        </p>
                        <br>
                        <h3 class="custom-h3"><img src="https://img.icons8.com/color/40/000000/ok.png"> Giai Đoạn 2:  Giai Đoạn Phục Hồi</h3>
                        <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left;padding-left: 45px;">
                            Sau khi tiêu viêm, tán độc, các dưỡng chất từ dược liệu được hấp thụ giúp nâng cao sức đề kháng, khai thông khí huyết, kích hoạt cơ chế tự lành của cơ thể. Người bệnh sẽ cảm thấy ăn ngon dễ ngủ, vận động linh hoạt hơn.
                        </p>
                        <br>
                        <h3 class="custom-h3"><img src="https://img.icons8.com/color/40/000000/ok.png"> Giai Đoạn 3:  Giai Đoạn Tái Tạo</h3>
                        <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:left;padding-left: 45px;">
                            Cơ chế tự lành được kích hoạt mạnh, khí huyết lưu thông, do cơ thể được bồi bổ nên các chức năng cải thiện, tăng tiết dịch khớp, mô sụn dần tạo mới thay thế phần bị hỏng, tăng sản tế bào xương, cơ gân đàn hồi dẻo dai. Người bệnh vận động thoải mái.
                        </p>
                    </div>
                </div>
                <!-- <div class="col-sm-2"></div> -->
            </div>
            <br>
            <br>
            <div class="row">
                <div class="main_title">
                    <h2>CHÚNG TÔI CAM KẾT HOÀN TIỀN 100% KHI KHÁCH HÀNG KHÔNG HÀI LÒNG VỀ SẢN PHẨM</h2>
                    <br>
                    <br>
                    <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:center">" AN THẤP KHỚP - với tôn chỉ xây dựng niềm tin từ chất lượng sản phẩm, giữ chữ tín nhờ sự tin dùng của khách hàng. Chúng tôi cam kết luôn đồng hành, lắng nghe và cung cấp dịch vụ chăm sóc tận tình nhất dành cho khách hàng. Cùng nhau, chúng ta tạo nên một cộng đồng Việt sống vui sống khoẻ."</p>
                </div>
                <div class="col-sm-6">
                    <br>
                    <img style="width:100%" src="sunkun/img/XN1.jpg" alt="an thấp khớp">

                </div>
                <div class="col-sm-6">
                    <br>
                    <img style="width:100%" src="sunkun/img/XN2.jpg" alt="an thấp khớp">

                </div>
            </div>

        </div>
    </section>
    <div class="container-fluid">
        <br>
        <br>
        <div class="row">
            <div class="main_title">
                <h2>KHÁCH HÀNG PHẢN HỒI SAU KHI SỬ DỤNG AN THẤP KHỚP</h2>
            </div>
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/yjVxaCS0TIY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
                <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:550;text-align:center">Những vượt trội của an thấp khớp là không những hiệu quả cho bệnh đau nhức xương khóp mà còn hổ trợ phòng bệnh khác như huyết áp cao , tiểu đường , dạ dày vì có tỏi đen trong đó </p>
            </div>
            <div class="col-sm-4">

            </div>

        </div>
    </div>
    <!--================End Detail Area =================-->
    <!--================Expert Team Area =================-->
    <div class="expert_team_area" id="screenshot">
        <div class="container">
            <div class="main_title">
                <h2>MỘT SỐ TIN NHẮN CỦA NGƯỜI BỆNH PHẢN HỒI</h2>
            </div>
            <div class="expert_slider owl-carousel">
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/message1.jpg" alt="tin nhắn">
                    </div>
                </div>
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/message2.jpg" alt="tin nhắn">
                    </div>
                </div>
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/message3.jpg" alt="tin nhắn">
                    </div>
                </div>
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/message4.jpg" alt="tin nhắn">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================Expert Team Area =================-->
    <div class="expert_team_area" id="team">
        <div class="container">
            <div class="main_title">
                <h2>Hình Ảnh An Thấp Khớp</h2>
            </div>
            <div class="expert_slider owl-carousel">
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/expert-team/atk5.jpg" alt="an thap khop">

                    </div>
                </div>
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/expert-team/atk6.jpg" alt="an thap khop">

                    </div>
                </div>
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/expert-team/atk7.jpg" alt="an thap khop">
                        <div class="expert_hover">

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="expert_inner">
                        <img src="sunkun/img/expert-team/atk8.jpg" alt="an thap khop">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Expert Team Area =================-->
    <!--================Clients Feedback Area =================-->
    <section class="clients_feedback_area" id="feedback">
        <div class="container">
            <div class="main_title">
                <h2>HÀNG NGÀN BÀ CON ĐÃ SỬ DỤNG VÀ PHẢN HỒI CHO CHÚNG TÔI</h2>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="clients_slider owl-carousel">
                        <div class="item">
                            <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:center">“cho biết: “ Hay bị đau khớp tay, đầu gối, thường hay đau nhức và khó đi lại vào mỗi buổi sáng chữa trị nhiều nơi không khỏi. Đến bệnh viện tỉnh điều trị cả tháng mà vẫn đau đớn, không đi lại được. Nhưng khi được một người bạn giới thiệu về An thấp khớp điều trị tới tuần thứ 3 bệnh đỡ rõ rệt, đi lại dễ dàng, các khớp xương không còn đau nữa và sau 2 tháng đã KHỎI.”</p>
                            <img src="sunkun/img/2kh1.jpg" alt="">
                            <a href="#contact">
                                <h4>Bác Lan</h4>
                            </a>
                            <h5>Thanh Trì - Hà Nội - 65 Tuổi</h5>
                        </div>
                        <div class="item">
                            <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:center">“Trong 1 lần tôi xem được trên chương trình VTV2 Phát sóng về Sản Phẩm An thấp khớp nên tôi cũng yên tâm đặt mua và dùng thử xem thế nào, tôi dùng được 2 tháng rồi, cũng đỡ được 7 phần rồi, cũng không thấy đau dạ dày nên yên tâm hơn nhiều mà chi phí mỗi ngày tính ra chỉ bằng bữa ăn sáng.”</p>
                            <img src="sunkun/img/2kh2.jpg" alt="nguoi dan">
                            <a href="#contact">
                                <h4>Chú Đình Hùng</h4>
                            </a>
                            <h5>Điện Bàn - Quảng Nam - 54 Tuổi</h5>
                        </div>
                        <div class="item">
                            <p style="font-family:Arial, sans-serif;font-size: 130%;color:black;font-weight:500;text-align:center">“Tôi đã dùng hết 3 liệu trình rồi đã khỏi hẳn. Tôi mừng lắm giờ không phải lo nữa rồi. Rất cảm ơn nhà thuốc. Tôi đã giới thiệu cho một số người dùng nữa. Cảm ơn nhà thuốc rất nhiều!”</p>
                            <img src="sunkun/img/2kh3.jpg" alt="nguoi dan">
                            <a href="#contact">
                                <h4>Cô Nguyễn Thị Hoa</h4>
                            </a>
                            <h5>Hải Châu - Đà Nẵng - 52 Tuổi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!--================End Clients Feedback Area =================-->

    <!--================Map Area =================-->
    <section class="map_area" id="contact">
        <div class="mapBox row m0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36475.89541140938!2d108.1996668035341!3d16.06257256960803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219858159ac29%3A0xb0857a4dcdc0741c!2zQ1RZIFRI4buwQyBQSOG6qE0gU1VOS1VO!5e0!3m2!1svi!2s!4v1554871631493!5m2!1svi!2s" width="100%" height="780" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contact_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_form_left">
                            <div class="row">
                                <p style="text-align:center;font-weight:600;font-size:20px;">Cần tư vấn điền vào biểu mẫu sau dưới đây</p>
                                <br>
                                <form action="{{ route('front.email') }}" method="POST" class="comment_form_inner">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập Tên Của Bạn">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <input type="number" class="form-control" id="subject" name="sdt" placeholder="Nhập Số Điện">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="noiDung" id="message" rows="1" placeholder="Nội Dung"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button class="animated infinite zoomIn delay-1s btn btn-default submit_btn" type="submit">Nhận Tư Vấn</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact_details">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Địa Điểm Của Chúng Tôi</h4>
                                    <h5>121 Cù Chính Lan, Thanh Khê Đông, Thanh Khê, Đà Nẵng </h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Gọi Cho Chúng Tôi</h4>
                                    <h5>(+84) 989 274 727</h5>
                                    <h5> 0989 274 727</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Gởi Email Cho Chúng Tôi</h4>
                                    <h5>sunkun.vn@gmail.com</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Giờ Làm Việc</h4>
                                    <h5>T2-T7 : 7.00AM tới 5.00PM</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-star    "></i>
                                </div>
                                <div class="media-body">
                                    <h4>Chúng Tôi Là Ai?</h4>
                                    <h5><a target="_blank" rel="noopener noreferrer" href="https://www.sunkun.vn/">sunkun.vn</a></h5>
                                </div>
                            </div>
                            <ul>
                                <li><a href="https://www.facebook.com/toidensunkun.vn/"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="https://www.youtube.com/channel/UCOgd36CInYnNFKzMkKOHQGw/featured"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class='quick-call-button'></div>
    <div class='call-now-button'>
        <div>
            <p class='call-text'></p>
            <a href='tel:0989274727' title='Gọi ngay'>
                <div class='quick-alo-ph-circle active'></div>
                <div class='quick-alo-ph-circle-fill active'></div>
                <div class='quick-alo-ph-img-circle shake'></div>
            </a>
        </div>
    </div>

    <!--================End Map Area =================-->
    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="container">
            <div class="pull-left">
                <h4>
                  <p>Copyright @2019 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://vinasofts.vn/" target="_blank">VinaSofts</a></p>
               </h4>
            </div>
            <div class="pull-right">
                <ul>
                    <li><a href="#home">Trang Chủ</a></li>
                    <li><a href="#feature">Triệu Chứng</a></li>
                    <li><a href="#screenshot">Nguy Cơ</a></li>
                    <li><a href="#giaiphap">Giải Pháp Cho Bạn</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->
    <script src="sunkun/js/jquery-2.1.4.min.js"></script>
    <script src="sunkun/js/bootstrap.min.js"></script>
    <script src="sunkun/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="sunkun/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="sunkun/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="sunkun/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="sunkun/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="sunkun/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

    <!-- Extra plugin js -->
    <script src="sunkun/vendors/owlcarousel/owl.carousel.min.js"></script>
    <script src="sunkun/vendors/flipster/jquery.flipster.min.js"></script>

    <!--gmaps Js-->
    <script src="sunkun/js/gmaps.min.js"></script>
    <script src="sunkun/js/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/js/toastr.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        setInterval(function() {

            var arr = ['Lê', 'Nguyễn', 'Lương', 'Võ', 'Trương', 'Đặng', 'Ngô'];
            var lot = ['hồng', 'thành', 'thị', 'thu', 'ánh', 'minh', 'hoài'];
            var ten = ['phong', 'trung', 'hằng', 'hậu', 'phương', 'tài', 'linh', 'hiền', 'luân'];
            var brr = ['vừa đặt hàng thành công', 'đã được tư vấn', 'mua hàng thành công', 'vừa đăng ký thành công', 'vừa đặt xong 1 liệu trình'];
            var number = Math.floor(Math.random() * 5);
            var aa = Math.floor(Math.random() * 5);
            var bb = Math.floor(Math.random() * 5);
            var so = Math.floor(Math.random() * 5);
            console.log("Hello" + " " + arr[number]);
            toastr["success"](arr[number] + ' ' + lot[aa] + ' ' + ten[bb] + '<br>' + brr[so]);
        }, 6000);
    </script>
    <script>
        var msg = '{{Session::get('
        alert ')}}';
        var exist = '{{Session::has('
        alert ')}}';
        if (exist) {
            alert(msg);
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138944058-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-138944058-1');
    </script>

</body>

</html>
