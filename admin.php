<?php
include_once "api/db.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>安怡老人長期照顧中心(養護型)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>

    <style>
    * {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
        padding: 0;
    }

    div {
        scroll-margin-top: 10vh;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }

    /* carousel */
    .carousel-caption {
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 80vh;
    }

    @media (min-width: 40em) {

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
    }

    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
    }

    /* 半透明 navbar */
    .top {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
    }


    /* 響應式設定 */
    @media (max-width: 768px) {
        #demo {
            height: 40vh;
            /* 螢幕寬度小於 768px 時，高度設為 40% */
        }
    }

    @media (max-width: 480px) {
        #demo {
            height: 30vh;
            /* 螢幕寬度小於 480px 時，高度設為 30% */
        }
    }

    /* 螢幕寬度大於 1000px 時，增加高度 */
    @media (min-width: 1000px) {
        #demo {
            height: 80vh;
            /* 高度設為視窗高度的 80% */
        }
    }

    .big {
        overflow: hidden;
    }

    .big img {
        transform: scale(1, 1);
        transition: all 1s ease-out;
    }

    .big img:hover {
        transform: scale(2, 2);
    }

    .bg-pink {
        background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.hanau.com.tw%2Fworks%2Fdetail%2FHD-8417&psig=AOvVaw1sqFosXzDzG79hOtJi3F_O&ust=1735194901922000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCIDm2fGmwooDFQAAAAAdAAAAABAE);
    }

    footer {
        color: white;
    }

    .highlight-block {
        background-color: #38342e;
        width: 100%;
        height: 100%;
        position: absolute;
        opacity: 0.5;
    }

    #backToTopBtn {
        position: fixed;
        /* 固定定位 */
        bottom: 20px;
        /* 從底部20px */
        right: 20px;
        /* 從右邊20px */
        z-index: 1050;
        /* 確保按鈕在最上層，避免被 footer 等遮擋 */
        display: none;
        /* 預設不顯示 */
    }

    /* 為navbar設置漸變效果 */
    .navbar {
        transition: opacity 0.5s ease;
        /* 設置透明度的漸變過程，0.5秒內平滑過渡 */
    }

    .navbar-nav .nav-link {
        position: relative;
        overflow: hidden;
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: rgb(139, 62, 17);
        transition: width 0.3s ease;
    }

    .navbar-nav .nav-link:hover::after {
        width: 60%;
        left: 20%;
    }

    @media (max-width: 767px) {
        .navbar-nav .nav-link {
            display: inline-block;
            padding: 10px 15px;
            font-size: 14px;
        }
    }

    /* 固定的電話按鈕 */
    /* .callBox {
            width: 40px;
            height: 100px;
            background-color: rgb(251, 160, 108);
            position: fixed;
            right: 10px;
            top: 40%;
            display: flex;
            flex-wrap: wrap;
            z-index: 1000;
        } */

    /* 設置過渡效果，讓圖片放大時有平滑過渡 */
    /* .callBox img {
            transition: transform 0.3s ease;
            width: 100%;
        } */

    /* 當鼠標懸停時，圖片放大 1.2 倍 */
    /* .callBox img:hover {
            transform: scale(1.5);
        } */

    /* 有背景色的區域 */
    .background {
        background-color: #ffe8dc;
    }

    /* 收費表 */
    .feeTable {
        width: 70%;
        margin: auto;
        background-color: #fcbf9e;
    }

    .card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 10px;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .environment img {
        border-radius: 8px;
        box-shadow: 4px 4px 8px rgba(91, 36, 5, 0.5);
    }

    .adminBox {
        width: 80%;
        height: 80vh;
        /* background-color: lightblue; */
        margin: auto;
    }
    </style>
</head>

<body>
    <!-- 彈出視窗modal -->
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)"><i class="bi bi-x-circle"></i></a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

    <!-- 導覽列 nav -->
    <div class="container-fluid">
        <!-- navbar-expand-sm 響應式 -->
        <!-- position-fixed 固定在頂端 -->
        <!-- w-100 寬度滿版 -->
        <nav class="navbar navbar-expand-lg navbar-light  fixed-top w-100" style="background-color:rgb(251, 160, 108);">
            <div class="container-fluid">
                <!-- logo -->
                <a class="navbar-brand" href="#">

                </a>
                <a class="navbar-brand" href="index.php">
                    <img src="image/logo.png" alt="" style="width: 40px;" class="me-2">
                    安怡長照中心
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="?do=about">簡介管理</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="?do=carousel">輪播圖管理</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="?do=pic">環境照片管理</a>
                        </li>
                        <!-- <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="?do=fee">收費方式管理</a>
                        </li> -->

                        <!-- <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="?do=intro">入住須知管理</a>
                        </li> -->
                        <!-- <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="?do=contact">聯絡我們管理</a>
                        </li> -->
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="?do=admin">帳號管理</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="?do=footer">版權頁尾管理</a>
                        </li>
                    </ul>
                    <div>
                        <a href="https://www.facebook.com/people/%E5%AE%89%E6%80%A1%E8%80%81%E4%BA%BA%E9%95%B7%E6%9C%9F%E7%85%A7%E9%A1%A7%E4%B8%AD%E5%BF%83/100066267172988/"
                            title="安怡facebook">
                            <img src="image/fb.png" alt="" style="width: 40px;" class="me-2 ms-4"></a>
                    </div>
                    <div>
                        <div class="di di ad">
                            <a href="api/logout.php"><input type="button" class="btn btn-outline-dark" value="登出"></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="adminBox mt-5 pt-5">
        <?php
			// $do=(isset($_GET[do]))?$_GET['do']:'main';
			
			// 語法是isset時，才能簡化為??的寫法
			$do=$_GET['do']??'about';

			$file="./backend/{$do}.php";

			// 簡化為三元運算式
			include (file_exists($file))?$file:"./backend/about.php";
			?>
    </div>

    <main>

        <!-- FOOTER -->
        <footer class="footer" style="width:100%;background-color:rgb(249, 142, 79);position:fixed;bottom:0px">
            <div class="row">
                <div class="col-sm-12 text-center mt-2">
                    <p> <?=$Footer->find(1)['footer'];?>
                    </p>
                </div>
            </div>
        </footer>
    </main>

    <!-- js include 順序 1.bs 2.jq 3.self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- 回到上方 按鈕 -->
    <script>
    $(document).ready(function() {
        // 滾動事件，顯示或隱藏按鈕
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#backToTopBtn').fadeIn(); // 顯示按鈕
            } else {
                $('#backToTopBtn').fadeOut(); // 隱藏按鈕
            }
        });

        // 點擊按鈕時，平滑滾動到頁面頂部
        $('#backToTopBtn').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 'smooth');
        });
    });
    </script>

    <!-- 漢堡選單點擊後自動收合 -->
    <script>
    // 使用 jQuery 讓選單項目被點擊後自動收合
    $(document).ready(function() {
        $('.navbar-nav .nav-link').on('click', function() {
            // 使用 jQuery 隱藏選單
            $('#navbarSupportedContent').collapse('hide');
        });
    });
    </script>
    <!-- 點擊空白處時、滾動時，漢堡選單自動收合 -->
    <script>
    $(document).ready(function() {
        // 當點擊漢堡選單按鈕時，切換顯示選單
        $('.navbar-toggler').click(function() {
            $('#navbarSupportedContent').toggleClass('show');
        });

        // 點擊空白處時，隱藏選單
        $(document).click(function(event) {
            if (!$(event.target).closest('.navbar-toggler').length && !$(event.target).closest(
                    '#navbarSupportedContent').length) {
                $('#navbarSupportedContent').removeClass('show');
            }
        });

        // 當頁面滾動時，隱藏選單
        $(window).on('scroll', function() {
            $('#navbarSupportedContent').removeClass('show');
        });
    });
    </script>
    <!-- 滾動時navbar變為透明度50% -->
    <script>
    $(document).ready(function() {
        var scrollTimeout; // 用來儲存 setTimeout

        // 監聽滾動事件
        $(window).scroll(function() {
            // 滾動時將透明度設為 50%
            $('.navbar').css('opacity', '0.5');

            // 清除先前的 setTimeout 以防止誤判停止滾動
            clearTimeout(scrollTimeout);

            // 設置滾動停止後的行為
            scrollTimeout = setTimeout(function() {
                // 停止滾動後將透明度恢復為 100%
                $('.navbar').css('opacity', '1');
            }, 200); // 200ms 沒有滾動則認為滾動停止
        });
    });
    </script>
</body>

</html>