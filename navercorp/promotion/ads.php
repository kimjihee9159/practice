<? include $DOCUMENT_ROOT."../inc/header.php"; ?>


<!-- search --------------------------------------------------->

<div class="search_wrap">
    <div class="select_wrap">
        <button type="button" aria-expanded="false">전체</button>
        <span class="underline"></span>
        <ul class="select_box">
            <li><button type="button" data-regYear="">전체</button></li>
            <li><button type="button" data-regYear="2022">2022년</button></li>
            <li><button type="button" data-regYear="2021">2021년</button></li>
            <li><button type="button" data-regYear="2020">2020년</button></li>
            <li><button type="button" data-regYear="2019">2019년</button></li>
            <li><button type="button" data-regYear="2018">2018년</button></li>
            <li><button type="button" data-regYear="2017">2017년</button></li>
        </ul>
    </div>
    <div class="search_box">
        <form id="searchform" method="post">
        <!--
        *method=> 리셋 후 전달하는 방식
        GET:조회 / post:등록 / put:수정 / DELETE:삭제
        -->
            <input type="text" id="title" name="title" value="">
            <span class="underline"></span>
            <button type="button"><span class="blind">검색</span></button>
        </form>
    </div>
</div>

<!-- search --------------------------------------------------->



<style>
.report_list.tv{margin-bottom: 12px;}
.report_list.tv li > a:hover h3{text-decoration: none;}
.report_list.tv .img_box{padding-top: 62%;}
.report_list.tv .img_box::before{
    content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
    background-color: #3a3e5080; opacity: 0; transition: all .4s;
}
.report_list.tv .img_box::after{
    content: ''; position: absolute; left: 50%; top: 100%; width: 46px; height: 46px;
    margin: 0 0 0 -23px; background: url(../img/sprite.png) no-repeat; background-size: 474px 1500px; background-position: -146px -50px;
    opacity: 0; transition: all .4s;
}
.report_list.tv li > a:hover .img_box::before{opacity: 1;}
.report_list.tv li > a:hover .img_box::after{ top: 50%; margin-top: -23px; opacity: 1;}
</style>



<div class="content promotion">

    <div class="content_box">

<!--content promotion------------------------------------->
        <ul class="report_list tv">
            <li>
                <a href="#">
                    <div class="img_box" style="background-image:url(../img/data/20210830105726_1.57.jpg)"><span class="blind">TV광고</span></div>
                    <div class="text_box">
                        <h3>[네이버앱 200% 활용법] 네이버앱 당겨서 자격증 보관</h3>

                        <span>2021</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img_box" style="background-image:url(../img/data/20210823103245_1.32.jpg)"><span class="blind">TV광고</span></div>
                    <div class="text_box">
                        <h3>[네이버앱 200% 활용법] 네이버앱 당겨서 주문</h3>
                        <span>2021</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img_box" style="background-image:url(../img/data/20210814222856_1.28.jpg)"><span class="blind">TV광고</span></div>
                    <div class="text_box">
                        <h3>[네이버앱 200% 활용법] 네이버앱 당겨서 현장결제</h3>
                        <span>2021</span>
                    </div>
                </a>
            </li>
            <!--------------------->
            <li>
                <a href="#">
                    <div class="img_box" style="background-image:url(../img/data/20210803115600_1.png)"><span class="blind">TV광고</span></div>
                    <div class="text_box">
                        <h3>[네이버앱 200% 활용법] 네이버앱 당겨서 멤버십 적립금 확인</h3>
                        <span>2021</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img_box" style="background-image:url(../img/data/20210803112257_1.png)"><span class="blind">TV광고</span></div>
                    <div class="text_box">
                    <h3>[네이버앱 200% 활용법] 네이버앱 흔들어 QR체크인</h3>
                        <span>2021</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img_box" style="background-image:url(../img/data/20210121150144_1.47.jpg)"><span class="blind">TV광고</span></div>
                    <div class="text_box">
                        <h3>[SME 광고 캠페인] 어민들이 만드는 온라인 가게의 경쟁력, 네이버</h3>
                        <span>2021</span>
                    </div>
                </a>
            </li>
        </ul>

    <div class="btn_area">
        <button type="button" class="btn_more">
        <!--클릭했을 때 아래로 이동, 위로 이동처럼 데이터를 담고 있는 경우 버튼이고,
        클릭했을 때 다른 페이지로 이동하는 경우는 링크-->
        <span class="blind">더보기</span>
        </button>
    </div>
<!--content promotion------------------------------------->

    </div>

</div>




<? include $DOCUMENT_ROOT."../inc/footer.php"; ?>