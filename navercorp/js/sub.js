

$(document).ready(function(){



/*--milestones.php------------------------------------------------------------*/

    /*-- tab_menu -------------------------------------*/
    $(".tab_menu > li").click(function(){
        var idx = $(this).index();
        $(".tab_menu > li").removeClass("on");
        $(".tab_menu > li").eq(idx).addClass("on");

        $(".tab_list > div").hide();
        $(".tab_list > div").eq(idx).show();
        //1을 누르면 a가 보이고, 2를 누르면 a가 사라지고 b가 보이게 하는 스크립트
    });
    /*-- tab_menu -------------------------------------*/

/*--milestones.php------------------------------------------------------------*/


/*--pressReleases.php--------------------------------------------------*/

    /*-- report_list------------------------------------*/
    $(".report_list li").slice(0,3).show();
    $(".btn_more").click(function(){

        $(".report_list li:hidden").slice(0,3).show();

    });
    //처음에는 3개만 보여지고, 버튼을 클릭하면 3개 더 보여주라는 코드
    /*-- report_list------------------------------------*/
    

    /*--select_wrap--------------------------*/
    var All_btn = $(".select_wrap > button");

    All_btn.bind("click", function(){
    /*--bind=>이벤트 실행하라는 코드로, 중복을 방지하고 데이터를 전송하는 코드--*/
        All_btn.attr("aria-expanded", "true");
        /*--attr=>출력하라는 명령코드--*/
        $(window).bind("click",function(){
            All_btn.attr("aria-expanded", "false");
            $(window).unbind("click");
        });
        return false;
    });

    $('.select_wrap button').bind('click',function(){
        $('.select_wrap > button').text($(this).text());
    });
    /*--select_wrap--------------------------*/

/*--pressReleases.php--------------------------------------------------*/



/*--proposalGuide.php--------------------------------------------------*/

$(document).ready(function(){
    /*--proposal_area------------------------*/
        $(".btn_expand").on('click', function(){
            if($(".proposal_list").attr('aria-expanded')==='true'){
                $(this).removeClass("on");
                $(".proposal_list").attr('aria-expanded', false);
            }else {
                $(this).addClass("on");
                $(".proposal_list").attr('aria-expanded', true);
            }
        });
    /*--proposal_area------------------------*/
    });
    
/*--proposalGuide.php--------------------------------------------------*/


});

