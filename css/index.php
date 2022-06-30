<!doctype html>
<html lang="ko">
<head>

<title>아튜던트 온라인 아트전시관, 온라인 졸업전시회 제작</title>
    
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=0.9,minimum-scale=0.9,maximum-scale=0.9,user-scalable=no" />
<meta name="HandheldFriendly" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
<meta name="title" content="아튜던트 온라인 아트전시관, 온라인 졸업전시회 제작" />
<meta name="classification" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="description" content="" />

<meta property="og:type" content="website">
<meta property="og:title" content="아튜던트 온라인 아트전시관, 온라인 졸업전시회 제작" />
<meta property="og:author" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta property="og:url" content="" />


<meta itemprop="url" content="" />
<meta itemprop="name" content="" />
<meta itemprop="description" content="" />

<!-- Default CSS { -->
<link rel="stylesheet" href="./css/reset.css" />
<link rel="stylesheet" href="./css/style.css" />
<link rel="stylesheet" href="./css/magic-check.css">
<!-- } -->

<!-- font { -->
<link rel="stylesheet" href="./css/NotoSansKR.css?v=1.2" />
<link rel="stylesheet" href="./css/Roboto.css" />
<!-- } -->

<!-- jQuery 1.12.1 { -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<!-- } -->

<!-- Swiper 5.4.3 { -->
<script src="./js/swiper.js"></script>
<link rel="stylesheet" href="./css/swiper.css">
<!-- } -->

<!-- Google Material Icons { -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- } -->

</head>
<body>

    <div class="main_wrap">
        
        <ul class="main_col_left">
		<a href="https://forms.gle/sT3WPFesgh8154hXA" target="_blank">
            <div class="main_l_box">
                <div class="hover_box">
                    <ul class="hover_box_ul1">
                        <li class="font-t txts_1">APPLICATION</li>
                        <li class="font-t txts_2">LANDING</li>
                        <li class="font-t txts_3">INTERACTIVE</li>
                    </ul>
                    <ul class="hover_box_ul3"></ul>
                    <ul class="hover_box_ul2"></ul>
                    <div class="cb"></div>
                </div>
            </div></a>
        </ul>
        
        <ul class="main_col_center">
       
            <div class="main_c_box">
                <ul class="main_c_box_hd font-b">ARTUDENT EXHIBITION</ul>
                <ul><img src="./image/main/main_img.png"></ul>
                <ul class="main_c_box_bt">
                    <li><img src="./image/main/ico1.png"></li>
                    <li><img src="./image/main/ico2.png"></li>
                    <li><img src="./image/main/ico3.png"></li>
                </ul>
            </div>
        </ul>
        
        <ul class="main_col_right">
            <a href="/sub.php"><div class="main_r_box">
                <div class="hover_R_box">
                    <ul class="hover_R_box_ul1">
                        <li class="font-t txts_R_1">EXHIBITION</li>
                        <li class="font-t txts_R_2">LANDING</li>
                        <li class="font-t txts_R_3">INTERACTIVE</li>
                    </ul>
                    <ul class="hover_R_box_ul3"></ul>
                    <ul class="hover_R_box_ul2"></ul>
                    <div class="cb"></div>
                </div>
            </div></a>
        </ul>
        
        
        <div class="cb"></div>
        
        <div class="main_c_box_bt2 mobile_bts">
            <li><img src="./image/main/ico1.png"></li>
            <li><img src="./image/main/ico2.png"></li>
            <li><img src="./image/main/ico3.png"></li>
        </div>
        
        
        <ul class="main_ci">
            <img src="./image/main/ci.png">
        </ul>
        
        
        
    </div>
    
 <style>
    /* 로딩전 화면을 가리기 위한 꼼수 */
    #loadings {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #ffffff;
        z-index: 999999;
    }
    
    /* 로더 */
    #loading_api {
        position: absolute;
        width: 50px;
        height: 50px;
        border: 2px solid rgba(0, 0, 0, .1); /* 컬러 */
        border-radius: 50%;
        border-top-color: rgba(119,120,151,0.7); /* 컬러 */
        animation: spin 1s ease-in-out infinite;
        -webkit-animation: spin 1s ease-in-out infinite;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }
    
    /* 로더 애니메이션 */
    @keyframes spin {
        to {
            -webkit-transform: rotate(360deg);
        }
    }

    @-webkit-keyframes spin {
        to {
            -webkit-transform: rotate(360deg);
        }
    }
</style>

<!-- 아래 제이쿼리는 그누보드/영카트의 경우 로드되어 있으니 빼주시면 됩니다. { -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- } -->


<!-- 로더 시작 { -->
<div id="loadings">
    <div id="loading_api"></div>
</div>

<script>
    
    // DOM을 포함한 페이지가 준비가 되면 사라집니다.
    $(window).on("load", function() {
        $('#loadings').fadeOut(1500);
    });

    // 좀 더  늦게 사라지게 할 경우 아래코드 사용
    // setTimeout(function() { 의 500 숫자로 조절가능
    /*
    $(window).on("load", function() {
        setTimeout(function() {
            $('#loading').fadeOut(500);
        }, 500);
    });
    */
    
</script>
<!-- } 로더 끝 -->
   

</body>
</html>


