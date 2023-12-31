
    $(document).ready(function(){

    /*--gnb_menu-----------------------------------------------*/
    $('.gnb_menu').delegate('li', 'mouseenter', function(){
        //delegate=조건을 뜻하는 코드
            $(this).find('.dropMenu').stop().slideDown(500); //500=내려오는 속도
        });

        $('.gnb_menu').delegate('li', 'focusin', function(){
            $(this).find('.dropMenu').stop().slideDown(500);
        });

        $('.gnb_menu').delegate('li', 'mouseleave', function(){
            $(this).find('.dropMenu').stop().slideUp(250);
        });

        $('.gnb_menu').delegate('li', 'focusout', function(){
            $(this).find('.dropMenu').stop().slideUp(250);
        });

        /*-----
        mouseover : 
        mouseenter = focusin :
        <->mouseleave = focusout
        -------*/
        
        /*--sitemap_btn----------------------*/
        $('.sitemap_btn button').click(function(){
            $(this).attr('aria-expanded', true);
            $('header').toggleClass('active');
            $('body').toggleClass('overflow_hidden')
        });
        /*--sitemap_btn----------------------*/


        /*--gnb_menu-----------------------------------------------*/


         /*--hasScrolled-------------------------------------------------------*/

        var didScroll;
        var lastScrollTop=0; //현재 스크롤 위치
        var delta=5;         //동작의 구현이 시작되는 위치
        var navbarHeight=$('header').outerHeight(); //영향을 받을 요소를 선택

        //스크롤시에 사용자가 스크롤했다는 것을 알림
        $(window).scroll(function(event){
            didScroll=true;
            
        });

        //hasScrolled를 실행하고 didScroll 상태를 재설정
        setInterval(function(){  //setInterval=일정 시간을 두고 움직임을 만드는 호출함수 코드
            if(didScroll){
                hasScrolled();
                didScroll = false;
            }
        },250);  //250d의 단위=milliseconds=1초의 1000분의 1


        //hasScrolled 동작을 구현
        function hasScrolled(){

            //현재 스크롤의 위치를 저장
            var st = $(this).scrollTop(); //st=setting값을 의미

            //헤더의 높이보다 더 스크롤이 되었을 경우
            if(Math.abs(lastScrollTop - st) <= delta)
            return; 

            //현재 스크롤 위치가 헤더 높이보다 클 경우
            if(st > lastScrollTop && st > navbarHeight){
                $('header').removeClass('header_down').addClass('header_up');
            }else{
                if(st+$(window).height()<$(document).height()){ //현재 스크롤 위치와 윈도우 높이가 문서의 높이보다 작을 경우
                $('header').removeClass('header_up').addClass('header_down');
                }
            }

            lastScrollTop = st; //lastScrollTop에 현재 스크롤 위치를 저장
        };

        /*--hasScrolled-------------------------------------------------------*/


        /*--affiliate_list-------------------------------------------------------*/

        $(".affiliate_list button").click(function(){
            $(".affiliate_list ul").stop().fadeToggle(0);
            return false;
        });

        $(document).click(function(e){
            if(e.target.className == ".affiliate_lsit ul"){
                return false;
            }
            $(".affiliate_list ul").stop().fadeOut(0);
        });
        
        /*--affiliate_list-------------------------------------------------------*/


    });

