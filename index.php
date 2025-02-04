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
    </style>
</head>

<body>
    <!-- 彈出視窗modal -->
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

    <!-- 導覽列 nav -->
    <div class="container-fluid">
        <!-- navbar-expand-sm 響應式 -->
        <!-- position-fixed 固定在頂端 -->
        <!-- w-100 寬度滿版 -->
        <nav class="navbar navbar-expand-sm navbar-light  fixed-top w-100" style="background-color:rgb(251, 160, 108);">
            <div class="container-fluid">
                <!-- logo -->
                <a class="navbar-brand" href="#">

                </a>
                <a class="navbar-brand" href="#">
                    <img src="image/logo.png" alt="" style="width: 40px;" class="me-2">
                    安怡老人長期照顧中心
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#about">關於安怡</a>
                        </li>

                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#item">服務項目</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#pic">環境照片</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#fee">收費方式</a>
                        </li>

                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#intro">入住須知</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#ltc">長照服務</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#add">機構位置</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#contact">聯絡我們</a>
                        </li>
                    </ul>
                    <div>
                        <a href="https://www.facebook.com/people/%E5%AE%89%E6%80%A1%E8%80%81%E4%BA%BA%E9%95%B7%E6%9C%9F%E7%85%A7%E9%A1%A7%E4%B8%AD%E5%BF%83/100066267172988/"
                            title="安怡facebook">
                            <img src="image/fb.png" alt="" style="width: 40px;" class="me-2 ms-4"></a>
                    </div>
                    <div>
                        <div class="di di ad">
                            <input type="button" class="btn btn-outline-dark"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/login.php&#39;)" value="管理登入">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <main>
        <!-- 輪播圖 -->
        <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php
                $rows=$Carousel->all(['sh'=>1]);
                foreach($rows as $row){
                    echo "<div class='carousel-item active'>
                    <img src='upload/".$row['img']."' class='d-block w-100' alt='...' style='height: 80vh;width: auto;'>
                </div>";
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- <hr class="featurette-divider"> -->

        <!-- 關於安怡 -->
        <div class="vh-75 pt-5 pb-5 mb-5 background">
            <div class="about" id="about">
                <div class="row">
                    <div class="col-sm-7 text-center mb-4 mt-5">
                        <h2 class="fw-bold">
                            <img src="image/medal.png" alt="" style="width: 40px;margin-right:10px">
                            關於安怡
                        </h2>
                        <hr class="mx-auto" style="width: 35%; border-top: 2px solid #999;">
                        <div class="lh-lg text-wrap p-3">
                            <p>
                                <?=$About->find(1)['about'];?>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex me-5 p-4" style="align-items:center">
                        <img src="upload/<?=$About->find(1)['img'];?>" class="img-fluid" alt="" style="border-radius: 8px;box-shadow: 4px 4px 8px rgba(91, 36, 5, 0.5);
">
                    </div>

                </div>

            </div>
        </div>
        <!-- <hr class="featurette-divider"> -->

        <!-- 服務項目 item -->
        <div class="vh-75">
            <div class="item" id="item">
                <div class="contact mb-5 mt-3 p-2" id="item">
                    <h2 class="fw-bold mt-3 text-center">
                        <img src="image/takecare.png" alt="" style="width: 40px;margin-right:10px">
                        服務項目
                    </h2>
                    <hr class="mx-auto" style="width: 35%; border-top: 2px solid #999;">
                    <div class="container">

                        <table class="table table-hover text-center mt-5">
                            <thead>

                                <tr>
                                    <th>醫療服務</th>
                                    <th>專業照顧</th>
                                    <th>環境交通</th>
                                    <th>活動設計</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>洗腎接送</td>
                                    <td>腫瘤照顧</td>
                                    <td>鄰近捷運站</td>
                                    <td>戶外活動</td>
                                </tr>
                                <tr>
                                    <td>復健接送</td>
                                    <td>術後照顧</td>
                                    <td>鄰近交流道</td>
                                    <td>旅遊活動</td>
                                </tr>
                                <tr>
                                    <td>醫師巡診</td>
                                    <td>藥師評估</td>
                                    <td>鄰近公車站</td>
                                    <td>宗教關懷</td>
                                </tr>
                                <tr>
                                    <td>鄰近醫院</td>
                                    <td>傷口照顧</td>
                                    <td>鄰近停車場</td>
                                    <td>藝文活動</td>
                                </tr>
                                <tr>
                                    <td>鄰近診所</td>
                                    <td>生活照顧</td>
                                    <td>位居市中心</td>
                                    <td>社團活動</td>
                                </tr>
                                <tr>
                                    <td>牙科服務</td>
                                    <td>延緩失能</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>營養評估</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-5">
                            <div class="row">
                                <div class="col-sm-8 p-2">
                                    <h4>服務對象：</h4>
                                    <p>鼻胃管、導尿管、氧氣、認知障礙(失智)、復健照護、透析照護(洗腎)、腫瘤照護(癌症)、精神照護</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">

        <!-- 環境照片 pic -->
        <div class="vh-75 pt-5 pb-5 mb-5">
            <div class="pic text-center" id="pic">
                <h2 class="fw-bold">
                    <img src="image/morning.png" alt="" style="width: 40px;margin-right:10px">
                    環境照片
                </h2>
                <hr class="mx-auto" style="width: 35%; border-top: 2px solid #999;">
                <div>
                    <div class="container">
                        <div class="row">
                            <?php
                            $rows=$Pic->all(['sh'=>1]);
                            foreach($rows as $row){
                                echo "<div class='col-sm-4 mb-2 mt-4 environment'>
                                <img src='upload/".$row['img']."' class='d-block img-fluid'>
                            </div>";
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- 收費方式 fee -->
        <div class="vh-75 background pt-3 pb-3">
            <div class="fee" id="fee">
                <div class="contact pb-3 mt-3" id="fee">
                    <div class="row">
                        <!-- youtube -->
                        <div class="text-center mb-4">
                            <h2 class="fw-bold mt-5">
                                <img src="image/fee.png" alt="" style="width: 40px;margin-right:10px">收費方式
                            </h2>
                            <hr class="mx-auto" style="width: 35%; border-top: 2px solid #999;">
                            <div class="container">
                                <table class="text-center mt-5 feeTable">
                                    <thead>
                                        <tr>
                                            <th>四人房</th>
                                            <th>六人房</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>每月 36000 元起</td>
                                            <td>每月 36000 元起</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-start p-2">
                                    <br>
                                    <table style="margin:auto;">
                                        <tr>
                                            <td style="vertical-align:top;">
                                                ※
                                            </td>
                                            <td>
                                                以上價格僅為「照護費」，不含保證金、衛耗材及其他衍生費用。
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:top;">
                                                ※
                                            </td>
                                            <td>
                                                以上價格僅供參考，實際價格以住民與機構間簽訂之契約為據。
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <hr class="featurette-divider"> -->

        <!-- 入住須知 intro-->
        <div class="vh-75 mt-5 mb-3 mt-3">
            <div class="intro" id="intro">
                <div class="row">
                    <div class="col-sm-12 text-center mt-3">
                        <h2 class="fw-bold">
                            <img src="image/home.png" alt="" style="width: 40px;margin-right:10px">
                            入住須知
                        </h2>
                        <hr class="mx-auto" style="width: 35%; border-top: 2px solid #999;">
                        <div class="p-3">
                            <table style="margin:auto">
                                <tr>
                                    <td style="vertical-align:top;">1.</td>
                                    <td class="text-start">入住長照機構，須提供體檢報告，體檢項目請依各機構規定，體檢後約需七個工作天才能領取報告，敬請即早準備！</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top;">2.</td>
                                    <td class="text-start">參訪時，請攜帶病歷摘要或相關資料，讓機構可以評估參考。
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top;">3.</td>
                                    <td class="text-start">參訪後，需經由機構進行評估，確認可以收住後，才會安排後續入住事宜。</td>
                                </tr>
                            </table>
                        </div>

                    </div>


                </div>

            </div>
        </div>
        <div width="80%" style="margin:auto;">
            <h3 class="text-center">申請入住體檢項目</h3>
            <div class="container mb-5 p-3">
                <table class="table table-striped">
                    <tr>
                        <td>1.</td>
                        <td>胸部X光(效期3個月內) B型肝炎表面抗原抗體測定</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>糞便檢查(桿菌性痢疾、阿米巴痢疾及寄生蟲)</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>尿液檢查</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>一般血液常規檢查：<br>
                            白血球(WBC)、紅血球（RBC）、血色素（HB）、血比容（Hct）、血小板（Platelet）。</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>生化檢查：<br>
                            血糖（Sugar）、總膽固醇、三酸甘油酯、SGOT、 SGPT、肌酸酐（Creatinine）、尿素氮 （BUN）、尿酸 (UA)、總蛋白、白蛋白、B
                            肝炎型表面抗原（HBsAg）、抗體（anti-HBs）。</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>皮膚病檢查(疥瘡)</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- 長照服務 ltc -->
        <div class="background vh-75 pt-5 pb-5 mb-5">
            <div class="ltc text-center" id="ltc">
                <h2 class="fw-bold">
                    <img src="image/heart.png" alt="" style="width: 40px;margin-right:10px">
                    長照服務資源
                </h2>
                <hr class="mx-auto" style="width: 35%; border-top: 2px solid #999;">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-light w-25 mt-3 text-secondary"><a
                                        href="https://1966.gov.tw/LTC/cp-6533-70777-207.html"
                                        class="text-decoration-none text-dark">申請長照服務</a></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-light w-25 mt-3"><a
                                        href="https://1966.gov.tw/LTC/cp-6454-70075-207.html"
                                        class="text-decoration-none text-dark">喘息服務</a></button>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-light w-25 mt-3 text-secondary"><a
                                        href="https://1966.gov.tw/LTC/cp-6457-69925-207.html"
                                        class="text-decoration-none text-dark">住宿式服務使用者補助方案</a></button>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-light w-25 mt-3 text-secondary"><a
                                        href="https://1966.gov.tw/LTC/cp-6456-69825-207.html"
                                        class="text-decoration-none text-dark">失智症照護與服務資源</a></button>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-light w-25 mt-3 text-secondary"><a
                                        href="https://1966.gov.tw/LTC/mp-207.html"
                                        class="text-decoration-none text-dark">衛福部長照專區(1966專線)</a></button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- <hr class="featurette-divider"> -->
        <!-- 聯絡我們 contact -->
        <div class="vh-75 pt-3">
            <div class="contact" id="contact">
                <div class="text-center">
                    <h2 class="fw-bold mt-3">
                        <img src="image/phone-call.png" alt="" style="width: 40px;margin-right:10px">
                        聯絡我們
                    </h2>
                    <hr class="mx-auto mb-5" style="width: 35%; border-top: 2px solid #999;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 mb-4 mx-auto text-start">
                                <form action="api/message.php" method="post" enctype="multipart/form-data">
                                    <!-- 姓名 -->
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control" id="name" placeholder="姓名" name="name">
                                    </div>
                                    <!-- 電話 -->
                                    <div class="mb-3 mt-3">
                                        <label for="mobile" class="form-label"></label>
                                        <input type="text" class="form-control" id="mobile" placeholder="聯絡電話"
                                            name="mobile">
                                    </div>

                                    <!-- 地址 -->
                                    <!-- 縣市 -->
                                    <div class="d-flex">
                                        <select class="form-select w-25" id="city" name="city">
                                            <option value="">居住區域</option>
                                        </select>
                                        <!-- 區域 -->
                                        <select class="form-select w-25" id="district" name="district" disabled>
                                            <option value="">請選擇區域</option>
                                        </select>
                                    </div>



                                    <!-- Email -->
                                    <div class="mb-3 mt-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            name="email">
                                    </div>

                                    <!-- 留言 -->
                                    <div class="mt-3">
                                        <label for="note" class="form-label"></label>
                                        <textarea class="form-control" id="note" rows="3" placeholder="留言"
                                            name="text"></textarea>
                                    </div>
                                    <!-- 送出 -->
                                    <div class="mx-auto text-center">
                                        <input type="hidden" name="table" value="messages">
                                        <button type="submit" class="btn btn-secondary mt-5">送出</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-sm-1 mb-4">
                            </div>
                            <div class="col-sm-5 mb-4">
                                <img src="image/service.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- 機構位置 add -->
        <div class="vh-75 mt-3 pt-3 mb-0 pb-0 background">
            <div class="add" id="add">
                <div class="text-center">
                    <h2 class="fw-bold mt-3">
                        <img src="image/map.png" alt="" style="width: 40px;margin-right:10px">
                        機構位置
                    </h2>
                    <hr class="mx-auto mb-5" style="width: 35%; border-top: 2px solid #999;">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-6 mb-4 mx-auto text-start p-3">
                                <p class="fw-bold text-center">安怡老人長期照顧中心(養護型)</p>
                                <hr>
                                <div class="ps-3">
                                    <table>
                                        <tr>
                                            <td>中心地址：</td>
                                            <td>235新北市中和區建一路87號3樓</td>
                                        </tr>
                                        <tr>
                                            <td>聯絡時間：</td>
                                            <td>週一至週日 10:00~12:00、14:00~20:00</td>
                                        </tr>
                                        <tr>
                                            <td>聯絡電話：</td>
                                            <td>(02) 2228-7623</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-5 mb-4">
                                <div class="ratio ratio-16x9">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14463.720061169453!2d121.46982487524716!3d25.002493911542857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a92561ec254b%3A0xff7ed01af0b9b90b!2z5paw5YyX5biC56eB56uL5a6J5oCh6ICB5Lq66ZW35pyf54Wn6aGn5Lit5b-DKOmkiuitt-Weiyk!5e0!3m2!1szh-TW!2stw!4v1738203378293!5m2!1szh-TW!2stw"
                                        style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- top button -->
        <!-- <button type="button"
            class="btn btn-light position-absolute bottom-0 end-0 translate-middle-y position-fixed border"
            id="backToTopBtn">回到最上方</button> -->

        <!-- call button -->
        <!-- <div class="callBox">
            <div>
                <a href="https://www.facebook.com/people/%E5%AE%89%E6%80%A1%E8%80%81%E4%BA%BA%E9%95%B7%E6%9C%9F%E7%85%A7%E9%A1%A7%E4%B8%AD%E5%BF%83/100066267172988/"
                    title="安怡facebook">
                    <img src="image/fb.png" alt="" style="width: 40px;" class="me-2"></a>
            </div>
            <div class="ms-1">
                <a href="tel:0222287623" title="打電話">
                    <img src="image/call.png" alt="" style="width: 35px;" class="me-3"></a>
            </div>
        </div> -->
        <!-- FOOTER -->
        <footer class="footer position-relative pt-0 ps-3 mx-0 pb-0 mb-0" style="background-color:rgb(249, 142, 79)">
            <div class="row">
                <div class="col-sm-12 text-center mt-2">
                    <p><?=$Footer->find(1)['footer'];?>
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
    <!-- 全台灣各縣市及區域資料 -->
    <script>
    const cityDistrictMap = {
        "台北市": ["中正區", "大同區", "松山區", "信義區", "大安區", "南港區", "北投區", "內湖區", "士林區", "文山區"],
        "新北市": ["板橋區", "新莊區", "三重區", "中和區", "永和區", "土城區", "蘆洲區", "樹林區", "三峽區", "鶯歌區", "淡水區", "金山區", "萬里區", "林口區",
            "八里區", "平溪區", "雙溪區", "貢寮區", "新店區", "深坑區", "石碇區", "坪林區", "烏來區"
        ],
        "桃園市": ["桃園區", "中壢區", "平鎮區", "八德區", "楊梅區", "蘆竹區", "大溪區", "龍潭區", "龜山區", "大園區", "觀音區", "新屋區", "復興區"],
        "台中市": ["中區", "東區", "南區", "西區", "北區", "西屯區", "南屯區", "東屯區", "大里區", "太平區", "豐原區", "大甲區", "清水區", "沙鹿區", "龍井區",
            "大肚區", "烏日區", "和平區", "大雅區", "神岡區", "潭子區", "大安區"
        ],
        "台南市": ["東區", "北區", "南區", "安平區", "安南區", "永康區", "歸仁區", "新化區", "左鎮區", "玉井區", "楠西區", "南化區", "仁德區", "關廟區",
            "龍崎區", "官田區", "麻豆區", "佳里區", "西港區", "七股區", "將軍區", "學甲區", "北門區", "新營區", "鹽水區", "後壁區", "白河區", "東山區",
            "六甲區", "下營區", "柳營區", "大內區", "山上區", "新市區", "安定區"
        ],
        "高雄市": ["苓雅區", "左營區", "楠梓區", "三民區", "鳳山區", "林園區", "大寮區", "大樹區", "旗山區", "美濃區", "六龜區", "內門區", "杉林區", "甲仙區",
            "桃源區", "那瑪夏區", "茂林區", "茄萣區", "小港區"
        ],
        "基隆市": ["仁愛區", "信義區", "中正區", "中山區", "安樂區", "暖暖區", "七堵區"],
        "宜蘭縣": ["宜蘭市", "羅東鎮", "蘇澳鎮", "冬山鄉", "五結鄉", "員山鄉", "大同鄉", "南澳鄉", "頭城鎮", "礁溪鄉", "三星鄉"],
        "新竹縣": ["竹北市", "湖口鄉", "新豐鄉", "新埔鎮", "關西鎮", "芎林鄉", "寶山鄉", "竹東鎮", "五峰鄉", "橫山鄉", "尖石鄉", "北埔鄉", "峨眉鄉"],
        "苗栗縣": ["苗栗市", "頭份市", "竹南鎮", "三灣鄉", "南庄鄉", "獅潭鄉", "後龍鎮", "通霄鎮", "苑裡鎮", "大湖鄉", "埔心鄉", "五福鄉", "冷水鄉", "三義鄉",
            "西湖鄉", "卓蘭鎮"
        ],
        "彰化縣": ["彰化市", "芬園鄉", "花壇鄉", "秀水鄉", "鹿港鎮", "福興鄉", "線西鄉", "和美鎮", "伸港鄉", "員林市", "社頭鄉", "永靖鄉", "埔心鄉", "大村鄉",
            "溪湖鎮", "大雅鄉", "河東鄉", "草湖鄉", "鶴壁鄉", "北斗鎮"
        ],
        "南投縣": ["南投市", "埔里鎮", "草屯鎮", "竹山鎮", "集集鎮", "名間鄉", "水里鄉", "魚池鄉", "信義鄉", "仁愛鄉"],
        "雲林縣": ["斗六市", "斗南鎮", "虎尾鎮", "西螺鎮", "土庫鎮", "褒忠鄉", "東勢鄉", "臺西鄉", "崙背鄉", "麥寮鄉", "四湖鄉", "元長鄉", "口湖鄉", "水林鄉",
            "西山鄉"
        ],
        "嘉義縣": ["太保市", "朴子市", "布袋鎮", "大林鎮", "民雄鄉", "溪口鄉", "阿里山鄉", "中埔鄉", "竹崎鄉", "梅山鄉", "番路鄉", "大埔鄉", "五峰鄉"],
        "屏東縣": ["屏東市", "三地門鄉", "霧台鄉", "瑪家鄉", "九如鄉", "里港鄉", "高樹鄉", "鹽埔鄉", "長治鄉", "麟洛鄉", "竹田鄉", "內埔鄉", "萬丹鄉", "潮州鎮",
            "東港鎮", "恆春鎮", "滿州鄉", "車城鄉", "三和鄉", "牡丹鄉"
        ],
        "台東縣": ["台東市", "成功鎮", "關山鎮", "海端鄉", "池上鄉", "東河鄉", "長濱鄉", "鹿野鄉", "緣分村", "達仁鄉", "太麻里鄉", "金峰鄉", "大武鄉", "太平洋鄉",
            "蘭嶼鄉"
        ],
        "花蓮縣": ["花蓮市", "鳳林鎮", "玉里鎮", "光復鄉", "豐濱鄉", "瑞穗鄉", "富里鄉", "卓溪鄉", "吉安鄉", "新城鄉", "秀林鄉", "萬榮鄉"],
        "澎湖縣": ["馬公市", "湖西鄉", "白沙鄉", "西嶼鄉", "望安鄉", "七美鄉"],
        "金門縣": ["金城鎮", "金湖鎮", "金寧鄉", "烈嶼鄉", "烏坵鄉"],
        "馬祖縣": ["南竿鄉", "北竿鄉", "莒光鄉", "東引鄉"]
    };

    // 載入縣市選項
    const citySelect = document.getElementById('city');
    for (let city in cityDistrictMap) {
        const option = document.createElement('option');
        option.value = city;
        option.textContent = city;
        citySelect.appendChild(option);
    }

    // 當城市選擇改變時，更新區域選項
    document.getElementById('city').addEventListener('change', function() {
        const city = this.value;
        const districtSelect = document.getElementById('district');

        // 清空區域選項
        districtSelect.innerHTML = '<option value="">請選擇區域</option>';

        // 如果選擇了城市，顯示相應的區域
        if (city && cityDistrictMap[city]) {
            const districts = cityDistrictMap[city];
            districts.forEach(function(district) {
                const option = document.createElement('option');
                option.value = district;
                option.textContent = district;
                districtSelect.appendChild(option);
            });
            districtSelect.disabled = false; // 啟用區域選擇
        } else {
            districtSelect.disabled = true; // 禁用區域選擇
        }
    });
    </script>
</body>

</html>