<? include $DOCUMENT_ROOT."../inc/header.php"; ?>


<!--content-------------------------------------------->

<div class="content contact">
    <!--01----------------------------------->
    <div class="content_box">

            <dl>
                <dt>네이버 본사</dt>
                    <dd>
                    <strong>ADDRESS</strong>
                    <p>경기도 성남시 분당구 정자일로 95 네이버 1784 우)13561<br>
                    NAVER 1784, 95 Jeongjail-ro, Bundang-gu, Seongnam-si, Gyeonggi-do, Republic of Korea</p>
                    <strong>TEL</strong>
                    <span>1588-3830</span>
                    </dd>
            </dl>
        </div>

    <!--02----------------------------------->
    <div class="content_box">
            <dl>
                <dt>글로벌 계열사</dt>
                    <dd>
                    <strong>NAVER BAND Inc.</strong>
                    <p>5750 Wilshire Blvd. Ste 640, Los Angeles, CA 90036, USA</p>
                    <strong>NAVER FRANCE</strong>
                    <p>2ème étage, 89 Rue Réaumur 75002 Paris, France</p>
                    <strong>NAVER J.Hub Corporation</strong>
                    <p>BASECAMP TOKYO, 2-10-44, Kamiosaki, Shinagawa Ku, Tokyo, Japan</p>
                    <strong>NAVER LABS EUROPE</strong>
                    <p>6-8 chemin de Maupertuis 38240 Meylan, France</p>
                    <strong>NAVER VIETNAM</strong>
                    <p>4th Floor, Tower B, Viettel Building, 285 Cach Mang Thang Tam, Dist 10, HCMC, Vietnam</p>
                    </dd>
            </dl>
        </div>
</div>

<!--content-------------------------------------------->



<!--map_wrap-------------------------------------------->

<div class="map_wrap">

    <!-- * 카카오맵 - 지도퍼가기 -->
    <!-- 1. 지도 노드 -->
    <div id="daumRoughmapContainer1671086626158" class="root_daum_roughmap root_daum_roughmap_landing"></div>

    <!--
        2. 설치 스크립트
        * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
    -->
    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

    <!-- 3. 실행 스크립트 -->
    <script charset="UTF-8">
        new daum.roughmap.Lander({
            "timestamp" : "1671086626158",
            "key" : "2d2bp",
            //"mapWidth" : "640",
            "mapHeight" : "460"
        }).render();
    </script>

</div>

<!--map_wrap-------------------------------------------->



<style>
    /*----------------
    .content_cs{margin:50px auto 100px;}
    .content_box ul{float: left; padding-right: 50px;}
    .content_box .cs{font-family: 'NanumSquare-B', sans-serif; color: #333;}
    .content_box li, .content_box p{padding-right: ;}
    -----------*/
</style>


<!--content_cs-------------------------------------------->

<div class="content">
    <div class="content_box">
            <dl>
                <dt>네이버 고객센터</dt>
                    <dd>
                        <ul class="customer_center">
                            <li><a href="#"><strong>서비스 문의</strong></a>
                            <p>고객센터를 통해 궁금증을<br>해결하세요.</p></li>

                            <li><a href="#"><strong>회원정보관리</strong></a>
                            <p>회원정보를 쉽고 편하게<br>관리할 수 있습니다.</p></li>

                            <li><a href="#"><strong>신고센터</strong></a>
                            <p>유해게시물이나 권리침해 게시물을<br> 신고할 수 있습니다.</p></li>
                        </ul>
                    </dd>
                </dl>
        </div>


<? include $DOCUMENT_ROOT."../inc/footer.php"; ?>