<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Blog-리스트형</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- system-style -->
<link href="../../assets/plugins/ratchet-2.0.2/css/ratchet.css" rel="stylesheet">

<!-- ratchet plus CSS -->
<link href="http://break.kimsq.co.kr/rc/dist/css/ratchet-plus.css" rel="stylesheet" >

<!-- Optional theme : kimsq -->
<link href="../../assets/css/ratchet-theme-rb.css" rel="stylesheet">

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">

<!-- Swiper : https://github.com/nolimits4web/Swiper -->
<link href="../../assets/plugins/swiper/3.2.7/css/swiper.css" rel="stylesheet">


<link rel="stylesheet" href="../../assets/css/sys.css">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./article.css">

<script src="../../assets/plugins/ratchet-2.0.2/js/ratchet.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

</head>
<body>
    
<div id="page-main">

    <header class="bar bar-nav">
        <button class="btn btn-link btn-nav pull-left" data-history="back"><span class="icon icon-left-nav"></span></button>
        <a class="btn btn-link btn-nav pull-right" href="" data-ignore="push">
            <span class="icon icon-home"></span>
        </a>
        <h1 class="title">
            공식 블로그
        </h1>
    </header>

    <div class="bar bar-standard bar-header-secondary rb-menu">
        <div class="segmented-control ">
        </div>
    </div>

    <nav class="bar bar-tab">
        <a class="tab-item" href="#modal-search">
            <span class="icon icon-search"></span>
            <span class="tab-label">검색</span>
        </a>
        <a class="tab-item" data-location="reload">
            <span class="icon icon-refresh"></span>
            <span class="tab-label">새로고침</span>
        </a>
        <a class="tab-item" data-toggle="modal" data-target="modal-bbs-write" data-title="게시물 작성">
            <span class="icon icon-compose"></span>
            <span class="tab-label">글쓰기</span>
        </a>
        <a class="tab-item" data-toggle="popup" data-target="modal-bbs-default" data-title="테마관리">
            <span class="icon icon-list"></span>
            <span class="tab-label">등록순</span>
        </a>
        <a class="tab-item" data-toggle="modal" data-target="modal-bbs-default" data-content="" data-title="게시판 설정">
            <span class="icon icon-gear"></span>
            <span class="tab-label">설정</span>
        </a>
    </nav>

    <div class="content">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="content-padded">
                        <div class="rb-blog-list card-deck-wrapper">

                            <div class="card-deck">
                                <div class="card rb-format-default">
                                    <a href="#modal-view-default" data-format="standard">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/01.jpg" alt="Card image cap">
                                        </div>
                                        <span class="rb-new badge badge-negative">NEW</span>
                                        <div class="card-block">
                                            <h4 class="card-title">오븐 빵/케익 만들기</h4>
                                        </div>
                                    </a>
                                </div>

                                <div class="card rb-format-video">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="video">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/02.jpg" alt="Card image cap">
                                            <div class="rb-icon">
                                                <i class="fa fa-play-circle-o"></i>
                                            </div>
                                            <span class="badge rb-count">0:59</span>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="card-title">오늘의 요리</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="card-deck">
                                <div class="card rb-format-gallery">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="gallery">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/02.jpg" alt="Card image cap">
                                            <div class="rb-icon">
                                                <i class="fa fa-clone"></i>
                                            </div>
                                            <span class="badge rb-count">10장</span>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="card-title">종가의 내림 손맛</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="card rb-format-video">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="video">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/03.jpg" alt="Card image cap">
                                            <div class="rb-icon">
                                                <i class="fa fa-play-circle-o"></i>
                                            </div>
                                            <span class="badge rb-count">0:59</span>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="card-title">새로운 식재료를 소개합니다.</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="card-deck">
                                <!-- 이미지 형 -->
                                <div class="card rb-format-image">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="image">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/05.jpg" alt="Card image cap">
                                            <span class="badge rb-count">10장</span>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="card-title">작은 요리 노하우</h4>
                                        </div>
                                    </a>
                                </div>

                                <!-- 인용문형 -->
                                <div class="card rb-format-quote">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="quote">
                                        <span class="rb-new badge badge-negative">NEW</span>
                                        <div class="card-block">
                                            <h4 class="card-title">평범하지만 위대한 레시피</h4>
                                            <p class="card-text">간단한 한끼 식사로도, 간식으로도 인기 만점인 가래떡과 불고기의 색다른 만남</p>
                                        </div>
                                    </a>
                                </div>
                            </div>


                            <div class="card-deck">
                                <div class="card rb-format-default">
                                    <a href="#modal-view" data-format="standard">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/01.jpg" alt="Card image cap">
                                        </div>
                                        <span class="rb-new badge badge-negative">NEW</span>
                                        <div class="card-block">
                                            <h4 class="card-title">오븐 빵/케익 만들기</h4>
                                        </div>
                                    </a>
                                </div>

                                <div class="card rb-format-video">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="video">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/02.jpg" alt="Card image cap">
                                            <div class="rb-icon">
                                                <i class="fa fa-play-circle-o"></i>
                                            </div>
                                            <span class="badge rb-count">0:59</span>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="card-title">오늘의 요리</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="card-deck">
                                <div class="card rb-format-gallery">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="gallery">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/02.jpg" alt="Card image cap">
                                            <div class="rb-icon">
                                                <i class="fa fa-clone"></i>
                                            </div>
                                            <span class="badge rb-count">10장</span>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="card-title">종가의 내림 손맛</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="card rb-format-video">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="video">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/03.jpg" alt="Card image cap">
                                            <div class="rb-icon">
                                                <i class="fa fa-play-circle-o"></i>
                                            </div>
                                            <span class="badge rb-count">0:59</span>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="card-title">새로운 식재료를 소개합니다.</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="card-deck">
                                <!-- 이미지 형 -->
                                <div class="card rb-format-image">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="image">
                                        <div class="rb-img-wrap">
                                            <img class="card-img-top img-fluid" src="../../assets/img/05.jpg" alt="Card image cap">
                                            <span class="badge rb-count">10장</span>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="card-title">작은 요리 노하우</h4>
                                        </div>
                                    </a>
                                </div>

                                <!-- 인용문형 -->
                                <div class="card rb-format-quote">
                                    <a data-toggle="modal" data-target="#modal-view" data-title="포스트 제목" data-format="quote">
                                        <span class="rb-new badge badge-negative">NEW</span>
                                        <div class="card-block">
                                            <h4 class="card-title">평범하지만 위대한 레시피</h4>
                                            <p class="card-text">간단한 한끼 식사로도, 간식으로도 인기 만점인 가래떡과 불고기의 색다른 만남</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <ul class="table-view">
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-category" data-title="분류 1" data-url="">
                                <span class="badge">5</span>
                                분류 1
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-category" data-title="분류 2" data-url="">
                                <span class="badge">5</span>
                                분류 2
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-category" data-title="분류 3" data-url="">
                                <span class="badge">5</span>
                                분류 3
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-category" data-title="분류 4" data-url="">
                                분류 4
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-category" data-title="분류 5" data-url="">
                                분류 5
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-category" data-title="분류 6" data-url="">
                                분류 6
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="swiper-slide">
                    <ul class="table-view">
                        <li class="table-view-divider">2016년</li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                <span class="badge">5</span>
                                3월
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                2월
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                <span class="badge">5</span>
                                1월
                            </a>
                        </li>
                        <li class="table-view-divider">2015년</li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                12월
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                <span class="badge">5</span>
                               11월
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                10월
                            </a>
                        </li>

                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                9월
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                8월
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                7월
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                6월
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                               5월
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-archive" data-title="2016년 3월" data-url="">
                                4월
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="swiper-slide">
                    <ul class="table-view">
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-tags" data-title="태그1" data-url="">
                                <i class="fa fa-tag fa-lg"></i> Tag 1
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-tags" data-title="태그1" data-url="">
                                <i class="fa fa-tag fa-lg"></i> Tag 1
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-tags" data-title="태그1" data-url="">
                                <i class="fa fa-tag fa-lg"></i> Tag 1
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-tags" data-title="태그1" data-url="">
                                <i class="fa fa-tag fa-lg"></i> Tag 1
                            </a>
                        </li>
                        <li class="table-view-cell">
                            <a class="navigate-right" data-toggle="page" data-start="#page-main" data-target="#page-tags" data-title="태그1" data-url="">
                                <i class="fa fa-tag fa-lg"></i> Tag 1
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="content-padded">
                            <h4>킴스큐 소개</h4>
                            <p>킴스큐(kimsQ)는 전문기술이 없는 사용자도 간단한 조작으로 쉽게 웹사이트를 구축하고 운영할 수 있게해 주는 도구입니다. 개인화된 나만의 웹사이트를 구축하고 싶은 사용자에게 쉽고 빠르게 웹사이트를 만들 수 있는 기반을 제공하는 것을 목표로 개발되고 있습니다. </p>
                            <p>기본적으로 블로그/커뮤니티/기업 웹사이트를 만들 수 있으며 구성요소를 넣고 뺄 수 있는 '모듈' 시스템을 통해서 쇼핑몰,그룹웨어 등으로 기능의 확장이 가능합니다.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>


<div id="page-category" class="page right">
    <header class="bar bar-nav">
        <a class="btn btn-link btn-nav pull-left" data-history="back">
            <span class="icon icon-left-nav"></span>&nbsp;
        </a>
        <h1 class="title"><i class="fa fa-folder-o fa-lg fa-fw"></i> 분류 1</h1>
    </header>
    <div class="content">
        <div class="content-padded">
            블로그 목록
        </div>
    </div>
</div>


<div id="page-archive" class="page right">
    <header class="bar bar-nav">
        <a class="btn btn-link btn-nav pull-left" data-history="back">
            <span class="icon icon-left-nav"></span>&nbsp;
        </a>
        <h1 class="title"><i class="fa fa-calendar fa-fw"></i> 2016년 3월</h1>
    </header>
    <div class="content">
        <div class="content-padded">
            블로그 목록
        </div>
    </div>
</div>

<div id="page-tags" class="page right">
    <header class="bar bar-nav">
        <a class="btn btn-link btn-nav pull-left" data-history="back">
            <span class="icon icon-left-nav"></span>&nbsp;
        </a>
        <h1 class="title"><i class="fa fa-tag fa-lg fa-fw"></i> 2016년 3월</h1>
    </header>
    <div class="content">
        <div class="content-padded">
            블로그 목록
        </div>
    </div>
</div>

<!-- 포스트 내용보기 -->

<div id="popover-view" class="popover rb-format-default">
    <ul class="table-view">
        <li class="table-view-cell">URL복사</li>
        <li class="table-view-cell">소셜미디어 공유</li>
        <li class="table-view-cell">Item3</li>
        <li class="table-view-cell">Item4</li>
    </ul>
</div>

<div id="modal-view-default" class="modal effect-scale rb-format-default">
    <header class="bar bar-nav">
        <a href="#modal-view-default" class="btn btn-link btn-nav pull-right">
            <span class="icon icon-close"></span>
        </a>
        <a href="#popover-view" class="btn btn-link btn-nav pull-right">
            <span class="icon icon-more-vertical"></span>
        </a>
        <h1 class="title rb-left">
            <span data-role="title">오븐 빵/케익 만들기</span>
            <p data-role="">분류1</p>
        </h1>
    </header>
    <div class="content">
        <section class="rb-format-default">

            <div class="rb-blog-header card card-inverse" style="background-image: url(../../assets/img/01.jpg)">
                <div class="card-block">
                    <p class="card-text rb-category"><span class="badge">분류1</span></p>
                    <h4 class="card-title rb-title">오븐 빵/케익 만들기</h4>
                    <p class="card-text rb-destription">구체적인 입출국 날짜나 국내 일정은 공개되지 않았으나 경기 전날이자 갈라디너 행사가 열리는 8일에 입국할 가능성이 커 보인다.</p>
                    <p class="card-text rb-meta">
                        <span class="badge badge-inverted"><i class="fa fa-calendar"></i> 2016.02.01</span>
                        <span class="badge badge-inverted"><i class="fa fa-user"></i> 벽돌공장</span>
                        <span class="badge badge-inverted"><i class="fa fa-eye"></i> 123</span>
                    </p>
                    <p class="card-text rb-scroll"><span class="icon icon-down-nav"></span>&nbsp;아래로 스크롤</p>
                </div>
            </div>

            <div class="rb-blog-body">

                <article class="rb-article" data-role="content">
                    <p>4일 구글코리아에 따르면 슈미트 회장은 9일부터 서울에서 열리는 이세돌 9단과 인공지능(AI) 프로그램 알파고의 대국을 보고자 한국을 찾을 예정이다.</p>
                    <p>구체적인 입출국 날짜나 국내 일정은 공개되지 않았으나 경기 전날이자 갈라디너 행사가 열리는 8일에 입국할 가능성이 커 보인다.</p>
                    <img src="http://break.kimsq.co.kr/rc-html-examples/assets/img/04.jpg" class="img-fluid" alt="여기는 사진설명">
                    <p>구글은 갈라디너 행사에 이세돌 9단과 한국기원 등 바둑계 관계자, AI 분야 전문가 등을 초청했다.</p>
                    <p>슈미트 회장은 이세돌 9단과 알파고의 대국을 직접 관전할 것으로 알려졌다. 그러나 대국 전 일정을 소화할지는 분명치 않다.</p>
                </article>
            </div>

            <div class="rb-blog-footer">

                <ul class="table-view rb-author">
                    <li class="table-view-cell table-view-divider">작성자</li>
                    <li class="table-view-cell media">
                        <a data-toggle="modal" data-target="modal-bbs-default" data-title="프로필 보기">
                            <img class="media-object pull-left rb-avatar" src="http://live2.kimsq.com/avatar/sf14534519348196_m.jpg" data-role="avatar">
                            <div class="media-body">
                                <strong data-role="author">권기택</strong>
                                <p data-role="email">break@redblock.co.kr</p>
                            </div>
                        </a>
                    </li>
                </ul>

                <ul class="table-view rb-tag">
                    <li class="table-view-cell table-view-divider"><i class="fa fa-tag fa-fw"></i> 태그</li>
                    <li class="table-view-cell media">
                        키워드 1
                    </li>
                    <li class="table-view-cell media">
                        키워드 2
                    </li>
                </ul>
                <ul class="table-view rb-attach">
                    <li class="table-view-cell table-view-divider"><i class="fa fa-paperclip fa-fw"></i> 첨부</li>
                    <li class="table-view-cell media">
                        <a class="navigate-right">
                            <span class="badge">446.1KB</span>
                            <div class="media-body">
                                킴스큐 메뉴얼.zip
                            </div>
                        </a>
                    </li>
                    <li class="table-view-cell media">
                        <a class="navigate-right">
                            <span class="badge">446.1KB</span>
                            <div class="media-body">
                                킴스큐 메뉴얼2.zip
                            </div>
                        </a>
                    </li>
                </ul>

                <div class="content-padded">
                    <p class="segmented-control rb-share ">
                        <a class="control-item rb-share-facebook"><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="control-item rb-share-twitter"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="control-item rb-share-kakao"><i class="fa fa-comment fa-lg"></i></a>
                    </p>
                </div>

            </div>
        </section>
    </div>
</div>


<!-- 포스트 검색 -->
<div id="modal-search" class="modal">
    <header class="bar bar-nav">
        <a href="#modal-search" class="btn btn-link btn-nav pull-left">
            <span class="icon icon-left-nav"></span>&nbsp;
        </a>
        <h1 class="title">검색</h1>
    </header>
    <div class="content">
        <div class="content-padded">
            검색창 
        </div>
    </div>
</div>

<script src="../../assets/plugins/jquery.finger/0.1.2/jquery.finger.min.js"></script>
<script src="../../assets/plugins/history-js/1.8.0b2/jquery.history.js"></script>

<!-- ratchet plus JS -->
<script src="http://break.kimsq.co.kr/rc/dist/js/ratchet-plus.js" type="text/javascript"></script>

<!-- Swiper : https://github.com/nolimits4web/Swiper -->
<script src="../../assets/plugins/swiper/3.2.7/js/swiper.jquery.min.js"></script>

<script src="./script.js"></script>

</body>
</html>
