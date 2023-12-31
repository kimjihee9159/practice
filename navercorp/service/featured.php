<? include $DOCUMENT_ROOT."../inc/header.php"; ?>

<p class="head_info">
네이버는 기술플랫폼으로서 첨단 기술을 누구나 쉽게 활용할 수 있는 일상의 친숙한 서비스로 제공하기 위해<br>변화를 추구하고, 이용자와 호흡하며 항상 새로운 도전을 시도합니다.
</p>


<style>
.featured .content_box:first-child{padding-top:0;}

.featured .content_box .info::after{content: ''; display: block; clear: both;}
.featured .content_box{margin-top:0; padding: 20px 0 35px; border-bottom: 1px solid #efefef;}
.featured .content_box:last-child{border: none;}
.featured .content_box .info{float: left; vertical-align: top; width: calc(100% - 400px); margin-top:-3px; padding-right: 39px;}
.featured  .content_box .img_slide{width: 400px; display: inline-block; vertical-align: top;}
/*----------------------------------------*/
.featured .info h3{font-family:'NanumSquare-B', sans-serif; font-size: 26px; margin: 34px 0 20px; line-height: 34px; letter-spacing: -.2px;}
.featured .info h3 strong{display: block; color: #00b843}
.featured .icon{float: left; position: relative; width: 80px; height: 80px;
margin: 6px 28px 0 0;}
.featured .icon::before{
    content: ''; display: block; position: absolute; left: 50%; top: 50%;
    width: 80px; height: 80px; margin: -40px 0 0 -40px; background: url(../img/sp_service.png) no-repeat; background-size: 151px 1100px;}
.featured .info .icon.naver::before,
.featured .info .icon.line::before,
.featured .info .icon.papago::before{background: url(../img/sprite.png) no-repeat; background-size: 474px 1500px;}

.featured .info .icon.naver::before{background-position: -60px -1415px;}
.featured .info .icon.line::before{background-position: -214px -152px;}
.featured .info .icon.clova::before{background-position: -71px -747px;}
.featured .info .icon.whale::before{background-position: -71px -921px;}
.featured .info .icon.papago::before{background-position: -411px -164px; width:44px; height: 57px; margin: -30px -0 0 -26px;}
.featured .info .icon.map::before{background-position: 0 -85px;}
.featured .info .icon.webtoon::before{background-position: 0 -255px;}
.featured .info .icon.series::before{background-position: -71px -664px;}
.featured .info .icon.band::before{background-position: 0 -425px;}
.featured .info .icon.now::before{background-position: -71px -830px;}
.featured .info .icon.snow::before{background-position: 0 -342px;}
.featured .info .icon.works::before{background-position: -71px -1012px;}



/*----------------------------------------*/
.featured .info .text{overflow: hidden; margin: 0 0 25px; font-size:15px; color: #606768; line-height: 1.8; letter-spacing: -.1px;}

/*----------------------------------------*/
.featured .link_box::after{content:''; display: block; clear: both;}
.featured .link_box a{
    float: left; display: block; margin-right: 30px; height: 23px;
    background: url(../img/sprite.png) no-repeat; background-size: 474px 1500px; }

.featured .link_box a.item1{width: 20px; background-position: -110px -102px;}
.featured .link_box a.item1:hover{background-position: -197px -103px;}

.featured .link_box a.item2{width: 24px; background-position: -136px -102px;}
.featured .link_box a.item2:hover{background-position: -224px -103px;}

.featured .link_box a.item3{width: 22px; height: 22px; background-position: -149px -129px;}
.featured .link_box a.item3:hover{background-position: -174px -129px;}

.featured .link_box a.item4{width: 25px; height: 22px; background-position: -166px -103px;}
.featured .link_box a.item4:hover{background-position: -255px -104px;}

.featured .link_box a.item5{
    width: 132px; height: 28px; margin-top: -2px; background-position: -105px -694px; background-size: 237px 750px}
.featured .link_box a.item5:hover{background-position: -105px -722px;}


/*----------------------------------------*/
.featured .slide_area{padding: 0 46px;}
.featured .slide_area .slides{position:relative;}
.featured .slide_area .slides > div{position: absolute; cursor: pointer;}

</style>


<div class="content featured">
    <!--01------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>네이버</strong>국내 최대 검색 포털 서비스</h3>
            <i class="icon naver"><span class="blind">네이버아이콘</span></i>
            <p class="text">
            네이버 모바일은 사용자의 검색 의도와 맥락을 깊이 이해하는 검색 서비스를 중심으로 개인의 다양한 관심사를 이어갈 수 있는 콘텐츠 주제판을 제공하고 있습니다. 또한 매일 3천만 명에 이르는 다양한 사용자의 생각과 관심사를 연결하고, 새로운 기회를 만들어가는 플랫폼이 되고자 크고 작은 변화들을 이어가고 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item3"><span class="blind">원스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
                <a href="#" class="item5"><span class="blind">채널써치</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide1_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide2_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide1_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide2_v2.png" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

    <!--02------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>라인</strong>글로벌 모바일 플랫폼</h3>
            <i class="icon line"><span class="blind">라인아이콘</span></i>
            <p class="text">
                2011년 메신저 앱으로 시작한 LINE은 전 세계에서 가장 빠르게 성장한 글로벌 메신저 플랫폼으로, 이제는 메신저를 넘어 사람과 사람, 기업, 서비스를 연결하는 허브 역할을 하고 있습니다. LINE은 더 많은 글로벌 사용자에게 편리한 일상생활의 경험을 제공하기 위해 AI, 핀테크, 간편결제, 음악, 게임, 여행, 배달 서비스 등 다양한 앱을 연결하며 온라인과 오프라인 경계를 넘나들고 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide3.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide4.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide3.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide4.png" alt=""></div>

                </div>
            </div>
        </div>

    </div>

    <!--03------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>네이버 클로바</strong>미래를 위한 새로운 플랫폼</h3>
            <i class="icon clova"><span class="blind">클로바아이콘</span></i>
            <p class="text">
                클로바(CLOVA)는 음성・이미지 인식, 인공신경망 번역, 대화형 엔진 등 인간의 오감을 활용한 기술들이 집결된 통합 AI 플랫폼입니다. 네이버와 LINE의 서비스에 클로바를 적용하는 한편, 전용 스마트폰 앱, AI스피커 ‘웨이브(WAVE)’와 ‘프렌즈(Friends)’등 다양한 제품을 출시 하였으며 각 분야의 전문 기업들과 손잡고 클로바 플랫폼을 접목시킨 다양한 기기와 서비스들을 확대해 나가고 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item3"><span class="blind">원스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide5.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide6.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide5.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide6.png" alt=""></div>

                </div>
            </div>
        </div>

    </div>

    <!--04------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>파파고</strong>든든한 번역 파트너
            </h3>
            <i class="icon papago"><span class="blind">파파고아이콘</span></i>
            <p class="text">
                네이버 자체 기술로 만들어진 파파고(papago)는 음성인식, 음성합성, 기계번역, 문자인식 등의 기술이 집약된 자동통역 앱으로 사용자들이 해외여행이나 외국인과 만나는 상황에서 효과적으로 사용할 수 있습니다. 특히 인공신경망 번역(NMT : Neural Machine Translation) 기술이 적용됨으로써 기존 구 단위로 쪼개 번역했던 방식이 문장을 통째로 번역하는 것으로 바뀌어 더욱 정확하고 문장 맥락에 맞는 번역 서비스를 제공합니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item3"><span class="blind">원스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide7.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide8.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide7.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide8.png" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

    <!--05------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>WHALE</strong>완전히 새로운 경험</h3>
            <i class="icon whale"><span class="blind">웨일아이콘</span></i>
            <p class="text">
                웨일(WHALE)은 '누구나 쉽게 쓰는 브라우저'를 목표로 네이버에서 5년 간의 개발 끝에 선보인 웹 브라우저입니다. 웨일은 다양한 독자 기술과 유려한 디자인을 바탕으로 기존의 웹 서핑을 넘어서는 새로운 경험을 제공합니다. 특히 여러 개의 창(tab)을 띄우지 않고도 하나의 창에서 한 번에 작업을 가능하게 하는 '옴니태스킹'이 핵심이며, 퀵서치, 스페이스, 사이드바와 같은 독특하고 편리한 기능도 갖추고 있습니다. 또한 웨일 스토어를 통해 다양한 확장앱과 멋진 디자인의 배경테마도 사용할 수 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item3"><span class="blind">원스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide9_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide10_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide9_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide10_v2.png" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

    <!--06------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>네이버 지도</strong>길 찾을 땐 한번에</h3>
            <i class="icon map  "><span class="blind">지도아이콘</span></i>
            <p class="text">
                대중교통, 자동차, 자전거, 도보 경로는 물론 내비게이션까지! 원하는 목적지를 네이버 지도로 한번에 찾아가세요. 지도 서비스는 실제 삶의 변화와 맥을 같이 해야 합니다. 지도 서비스는 삶의 공간에서 발생하는 수많은 정보들을 가장 빠르게 반영하고, 공간 기반의 생활 밀착형 서비스들과 다양한 매시업이 이어지도록 더욱 노력하겠습니다. 길 찾을 땐, 네이버 지도!
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item3"><span class="blind">원스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide11.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide12.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide11.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide12.png" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

    <!--07------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>네이버웹툰</strong>매일매일 새로운 재미</h3>
            <i class="icon webtoon"><span class="blind">네이버아이콘</span></i>
            <p class="text">
            지난 2004년 서비스를 시작한 이래, 도전만화>베스트도전>정식 웹툰이라는 승격 시스템을 통하여 네이버웹툰은 수많은 스타 작가들의 산실이 되었습니다. 이같은 시스템은 또한 미국, 대만, 태국 등 다양한 국가에서도 호평 속에 서비스되고 있습니다. 네이버는 국내 웹툰시장에서의 독보적인 지위에 안주하지 않고, 해외서비스인 ‘라인 웹툰’을 2년 만에 월간 사용자 수 1,800만명을 달성하며 해외 사용자가 국내 사용자 수를 넘어서는 성과를 기록하고 있습니다. 또한 충성도 높은 팬층을 확보한 강력한 IP를 바탕으로 출판, 영화, 드라마, 게임 등의 다양한 부가 산업으로 그 영역을 확장해나가고 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item3"><span class="blind">원스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide15_v3.jpg" alt=""></div>
                    <div><img src="../img/service/img_service_slide16_v3.jpg" alt=""></div>
                    <div><img src="../img/service/img_service_slide15_v3.jpg" alt=""></div>
                    <div><img src="../img/service/img_service_slide16_v3.jpg" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

    <!--08------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>시리즈(SERIES)</strong>콘텐츠 비즈니스 플랫폼</h3>
            <i class="icon series"><span class="blind">시리즈아이콘</span></i>
            <p class="text">
                시리즈(SERIES)는 6만여개의 장르소설 및 만화 콘텐츠를 소비할 수 있는 유료 콘텐츠 플랫폼입니다. AI 기술을 통한 사용자 맞춤 추천, 벡터 기반의 뷰어 환경 제공, 사용자 이력 기반의 기능 제공 등 콘텐츠와 기술이 결합된 새로운 비즈니스의 미래를 만들어가고 있습니다. 창작자와 독자가 만나, 새로운 경험과 기회를 만들어가며 성장세를 이어나가고 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item3"><span class="blind">원스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide23_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide24_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide23_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide24_v2.png" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

    <!--09------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>밴드</strong>모임이 쉬워진다 - 밴드</h3>
            <i class="icon band"><span class="blind">밴드아이콘</span></i>
            <p class="text">
            밴드는 모임을 위한 그룹형 소셜 네트워크 서비스(SNS)로 회사, 학교, 가족 등 지인 기반의 모임부터 관심사 기반의 주제형 커뮤니티까지 모임에 최적화된 서비스입니다. 점차 다양해지는 모임의 유형을 지원하기위해 지역 소모임, 미션 인증 챌린지 및 온라인 클래스를 위한 기능을 제공하고 있습니다. 현재는 177개가 넘는 국가에서 다양한 모임이 활발히 운영이 되고 있습니다. 이용자의 사용 패턴과 활동성을 기반으로 더욱 확장된 형태의 모바일 커뮤니티 서비스로 진화해 나갈 밴드는 여러 가지 실험적인 서비스를 통해 국내뿐 아니라 글로벌 도전을 이어나가고 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide19.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide20_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide19.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide20_v2.png" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

    <!--10------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>NOW</strong>여러분의 지금을 함께 합니다. We Live NOW.</h3>
            <i class="icon now"><span class="blind">나우아이콘</span></i>
            <p class="text">
                2019년 '네이버 앱에서 듣는 오디오쇼'를 표방하며 출발한 NOW.는, ‘고퀄리티 엔터테인먼트 콘텐츠’로 빠르게 영역을 확장하며 성장해 오고 있습니다. 국내 뿐만 아니라 글로벌 사용자 모두에게 사랑받는 엔터테인먼트 플랫폼을 목표로 더 많은 창작자, 아티스트들과 함께 호흡하며 대중들이 폭넓게 즐길 수 있는 양질의 오리지널 콘텐츠를 제작하여 사용자들에게 공급하고 있습니다. 뿐만 아니라 방송사, OTT서비스, 영화 업계 등 다양한 Content Provider들과의 제휴, 협력을 통해 트렌디한 콘텐츠를 빠르고 쉽게 접할 수 있는 서비스 경험을 제공하고 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide25.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide26.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide25.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide26.png" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

    <!--11------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>스노우</strong>일상이 특별해지는 AR 카메라</h3>
            <i class="icon snow"><span class="blind">스노우아이콘</span></i>
            <p class="text">
                스마트폰 카메라를 통해 인식한 얼굴에 다양한 효과를 넣은 동영상을 친구나 가족에게 보낼 수 있는 스노우(SNOW)는 10대 사용자들의 트렌드에 맞춰 서비스를 혁신해 나가고 있습니다. 스노우는 3억 9000만 글로벌 다운로드를 돌파하며 해외 이용자 비중이 약 70% 에 이르는 등 글로벌 서비스로 지속적인 성장세를 이어가고 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide17_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide18_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide17_v2.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide18_v2.png" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

    <!--12------------------>
    <div class="content_box">

        <div class="info">
            <h3><strong>네이버웍스</strong>일하는 방식을 바꾸다. 업무용 협업 도구</h3>
            <i class="icon works"><span class="blind">네이버아이콘</span></i>
            <p class="text">
                네이버웍스(NAVER WORKS)는 메시지, 메일, 캘린더, 드라이브 등 업무에 필요한 다양한 기능을 제공하는 올인원 협업 도구입니다. 일본 비지니스 채팅 시장 점유율 1위와 고객 만족도 조사 1위를 차지하였으며, 일본을 포함해 35만 곳의 기업과 기관에서 400만 명이 사용하고 있습니다 (22년 1월 기준). 네이버클라우드의 인프라, 네이버의 AI 기술 (클로바, 파파고)과 보안 노하우를 접목하여, 일하는 모든 사람들이 쉽고 빠르게 소통하고 효율적으로 일하는 조직으로 변화를 만들어나가고 있습니다.
            </p>
            <div class="link_box">
                <a href="#" class="item1"><span class="blind">구글스토어</span></a>
                <a href="#" class="item2"><span class="blind">앱스토어</span></a>
                <a href="#" class="item3"><span class="blind">원스토어</span></a>
                <a href="#" class="item4"><span class="blind">홈페이지</span></a>
            </div>
        </div>


        <div class="img_slide">
            <div class="slide_area">
                <div class="slides">
                    <div><img src="../img/service/img_service_slide27.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide28.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide27.png" alt=""></div>
                    <div><img src="../img/service/img_service_slide28.png" alt=""></div>

                    
                </div>
            </div>
        </div>

    </div>

</div>

<script type="text/javascript" src="../js/jquery.carousel.js"></script>

<script>
/*--이미지 롤링되어 바뀌는 스크립트------------------------*/

$(document).ready(function(){
        /*--slide_area-----------------------------*/
        $('.slide_area').carousel(".slide_area",{
            carouselWidth:271,
            carouselHeight:428,
            autoplay:false,
            qutoplayInterval:5000, //롤링되는 속도
            frontWidth:223,
            frontHeight:396,
            backZoom:1
        });
        /*--slide_area-----------------------------*/
    });
</script>

<? include $DOCUMENT_ROOT."../inc/footer.php"; ?>