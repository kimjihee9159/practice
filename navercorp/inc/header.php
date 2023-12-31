<? include $DOCUMENT_ROOT."control.php"; ?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>김지희-NAVER Corperation</title>
    <link rel="stylesheet" href="<?=$url?>css/basic.css">
    <!--사이트에 공통적으로 적용되는 스타일-->
    <link rel="stylesheet" href="<?=$url?>css/common.css">
    <?=$SetCss?>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="<?=$url?>js/common.js"></script>
    <?=$SetJs?>
</head>


<body>
<!--영역 안에 영역, 또 영역을 잡아서 구역을 나눠줌-->


<div id="wrap">

<!-- header---------------------------------------------------->
            
<header>

    <div class="header_wrap">

        <h1>
            <a href="/"><span class="blind">NAVER</span></a>
            <!--로고를 이미지만 넣고 텍스트로 설명을 삽입하지 않는 경우
            (ex. <a href="#"></a> 이런식으로 작성하는 경우) 검색이 되지 않기 때문에 텍스트를 넣고 블라인드 처리해준다-->
        </h1>

        <nav><!--상단 고정 메뉴-->
            <ul class="gnb_menu">

                <li <?=$now1?>><a href="<?=$url?>naver/company">네이버</a>
                    <ul class="dropMenu">
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="<?=$url?>naver/company"><span>NAVER</span></a></dt>
                                <dd><a href="<?=$url?>naver/company"><span>네이버 소개</span></a></dd>
                                <dd><a href="#"><span>1784 소개</span></a></dd>
                                <dd><a href="<?=$url?>naver/milestones"><span>주요연혁</span></a></dd>
                                <dd><a href="#"><span>수상내역</span></a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="#"><span>주요 관계사</span></a></dt>
                            </dl>
                        </li>
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="<?=$url?>naver/proposalGuide"><span>제휴제안</span></a></dt>
                                <dd><a href="#"><span>제휴제안 안내</span></a></dd>
                                <dd><a href="#"><span>제휴제안 등록</span></a></dd>
                                <dd><a href="#"><span>검토현황 조회</span></a></dd>
                            </dl>
                        </li>                                        
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="<?=$url?>naver/contact"><span>CONTACT</span></a></dt>
                            </dl>
                        </li>
                    </ul>
                </li>

                <li <?=$now2?>><a href="<?=$url?>service/featured">서비스</a>
                    <ul class="dropMenu">
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="<?=$url?>service/featured"><span>Featured</span><br> <span>Service</span></a></dt>
                            </dl>
                        </li>
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="#"><span>For</span><br><span>Business</span></a></dt>
                            </dl>
                        </li>
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="#"><span>For</span><br><span>Creators</span></a></dt>
                            </dl>
                        </li>                                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="#"><span>For</span><br><span>Developers</span></a></dt>
                            </dl>
                        </li>
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="#"><span>All</span><br><span>Service</span></a></dt>
                            </dl>
                        </li>
                    </ul>
                </li>

                <li <?=$now3?>><a href="#">가치실현</a></li>
                <li <?=$now4?>><a href="<?=$url?>promotion/pressReleases">홍보</a>
                <ul class="dropMenu">
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="<?=$url?>promotion/pressReleases"><span>보도자료</span></a></dt>
                            </dl>
                        </li>
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="<?=$url?>promotion/ads"><span>TV광고</span></a></dt>
                            </dl>
                        </li>
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="#"><span>미디어 행사</span></a></dt>
                            </dl>
                        </li>                                        
                        <li>
                            <dl class="dropMenu_list">
                                <dt><a href="#"><span>커뮤니케이션 채널</span></a></dt>
                            </dl>
                        </li>
                    </ul>
                </li>


                <li <?=$now5?>><a href="#">투자정보</a></li>
                <li <?=$now6?>><a href="#">스토리</a></li>
                <li <?=$now7?>><a href="#" target="_blank">채용</a></li>
            </ul>
        </nav>

        <div class="gnb_util">
            
            <div class="lang">
                <a href="#">KOR</a>
                <a href="#" class="off">ENG</a>
            </div>

            <div class="sitemap_btn">
                <button type="button" aria-expanded="false">
                    <span class="blind">사이트맵 열기/닫기</span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

        </div>
        
    </div>

    <!--sitemap--------------------------------------------->
        <div class="sitemap">
            <ul class="sitemap_container">
                <li class="sitemap_list">
                    <strong>네이버</strong>
                    <ul class="sitemap_menu">
                        <li class="depth_title"><a href="#"><strong><span>NAVER</span></strong></a></li>
                        <li><a href="#"><span>네이버 소개</span></a></li>
                        <li><a href="#"><span>1784 소개</span></a></li>
                        <li><a href="#"><span>주요연혁</span></a></li>
                        <li><a href="#"><span>수상내역</span></a></li>
                    </ul>
                    <ul class="sitemap_menu">
                        <li><a href="#"><strong><span>주요관계사</span></strong></a></li>
                    </ul>
                    <ul class="sitemap_menu">
                        <li class="depth_title"><a href="#"><strong><span>제휴제안</span></strong></a></li>
                        <li><a href="#"><span>제휴제안 안내</span></a></li>
                        <li><a href="#"><span>제휴제안 등록</span></a></li>
                        <li><a href="#"><span>검토현황 조회</span></a></li>
                    </ul>
                    <ul class="sitemap_menu">
                        <li><a href="#"><strong><span>Contact</span></strong></a></li>
                    </ul>
                </li>

                <li class="sitemap_list">
                    <strong>서비스</strong>
                    <ul class="sitemap_menu">
                        <li><a href="#"><strong><span>FEATURED SERVICES</span></strong></a></li>
                    </ul>
                    <ul class="sitemap_menu">
                        <li><a href="#"><strong><span>FOR BUSINESS</span></strong></a></li>
                    </ul>
                    <ul class="sitemap_menu">
                        <li><a href="#"><strong><span>FOR CREATORS</span></strong></a></li>
                    </ul>
                    <ul class="sitemap_menu">
                        <li><a href="#"><strong><span>FOR DEVELOPERS</span></strong></a></li>
                    </ul>
                    <ul class="sitemap_menu">
                        <li><a href="#" class="btn_link"><strong><span>ALL SERVICE</span></strong></a></li>
                    </ul>        
                </li>

                <li class="sitemap_list">
                    <strong>가치실현</strong>
                    <ul class="sitemap_menu">
                        <li class="depth_title"><a href="#"><strong><span>원칙</span></strong></a></li>
                        <li><a href="#"><span>프로젝트 꽃</span></a></li>
                        <li><a href="#"><span>지속가능경영</span></a></li>
                        <li><a href="#"><span>AI 윤리준칙</span></a></li>
                    </ul>

                    <ul class="sitemap_menu">
                        <li class="depth_title"><a href="#"><strong><span>정책</span></strong></a></li>
                    </ul>
                    <ul class="sitemap_menu depth_4">
                        <li class="depth_title"><a href="#"><strong><span>기업윤리</span></strong></a></li>
                        <li><a href="#"><span>기업윤리규범</span></a></li>
                        <li><a href="#"><span>기업윤리 상담센터</span></a></li>
                    </ul>
                    <ul class="sitemap_menu depth_4">
                        <li class="depth_title"><a href="#"><strong><span>프라이버시 센터</span></strong></a></li>
                        <li><a href="#"><span>네이버 리포트</span></a></li>
                        <li><a href="#"><span>개인정보보호</span></a></li>
                        <li><a href="#"><span>정보보호인증</span></a></li>
                    </ul>
                    <ul class="sitemap_menu">
                        <li class="depth_title"><a href="#"><strong><span>그린 임팩트</span></strong></a></li>
                        <li><a href="#"><span>그린 이니셔티브</span></a></li>
                        <li><a href="#"><span>그린 커넥트</span></a></li>
                        <li><a href="#"><span>친환경 데이터센터</span></a></li>
                        <li><a href="#"><span>친환경 업무공간</span></a></li>
                        <li><a href="#"><span>그린 아카이브</span></a></li>
                    </ul>
                </li>
                
                <li class="sitemap_list"><strong>홍보</strong></li>
                <li class="sitemap_list"><strong>투자정보</strong></li>
                <li class="sitemap_list"><strong>스토리</strong></li>
                <li class="sitemap_list"><strong>채용</strong></li>
                </ul>
            </ul>
        </div>
    <!--sitemap--------------------------------------------->

</header>
<div class="sitemap_dimmed"></div>

<!-- header---------------------------------------------------->

<div class="container">

<?
if( stristr($NowPage,'index.php')){}
else {include "../inc/sub_header.php";}
?>