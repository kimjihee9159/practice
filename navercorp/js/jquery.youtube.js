(function($){

    $.fn.spidochetube = function(options){

        var settings = $.extend({
            key              : "",
            id               : "",
            max_results      : 10,
            autoplay         : 0,
            theme            : "",
            paging           : 0,
            scroll_duration  : 0,
            first_load       : true
        },options);

        if(settings.key === ""){
            console.log('api key not defined');
            return;
        }

        return this.each(function(){

            var $this = $(this);
            var max_results = 0;
            var total_results = 0;
            var id = settings.id;
            var url= "";
            var next_page = "";
            var next_page_data = "";
            var first_load = settings.first_load;

            if(settings.max_results <= 50){
                max_results = settings.max_results;
            }else{
                max_results = 50;
            }

            if(first_load === true){
                init_item_click($this, settings.scroll_duration);
                $this.html('<div class="spidochetube_inner"><ul id="spidochetube_list"></ul></div>');

                if(settings.paging === "loadmore"){
                    $('#spidochetube_list').after('<a id="spidochetube_loadmore" href="#">More</a>');
                }
            }

            next_page_data = $('#spidochetube_loadmore').attr('data-next');

            if(next_page_data !== undefined){
                next_page = next_page_data;
            }

            url ="https://www.googleapis.com/youtube/v3/playlistItems?playlistId="+id+"&orderby=reversedPosition&pageToken="+next_page+"&maxResults="+max_results+"&key="+settings.key+"&part=snippet,status,contentDetails";

            $.getJSON(url,function(data){

                total_results = data.pageInfo.totalResults;
                next_page = data.nextPageToken;

                $.each(data.items, function(index,item){

                    var snippet = item.snippet;
                    var title = snippet.title;
                    var status = item.status.privacyStatus;
                    var video_id  = "";
                    var thumb_url = "";
                    var video_url = "";

                    if(snippet.thumbnails !== undefined){
                        video_id  = snippet.resourceId.videoId;
                        thumb_url = snippet.thumbnails.medium.url;
                        video_url = "https://www.youtube.com/embed/"+video_id;
                    }else{
                        return;
                    }

                    html  = '<li><div><iframe id="player" src="'+video_url+'" frameborder="0" allowfullscreen></iframe></div></li>';

                    $('#spidochetube_list').append(html);

                    if(data.nextPageToken !== undefined){
                        $('#spidochetube_loadmore').attr('data-next',next_page);
                    }else{
                        $('#spidochetube_loadmore').css('visibility','hidden');

                    }
                });

            }).then(function(){

                if(first_load === true){
                    var first_video_id = $('#spidochetube_list li:first-child a').attr('data-youtubeID');
                    var first_video_url = iframe_src(first_video_id, settings.autoplay, settings.theme);
                    var iframe_html = '<iframe id="player" src="'+first_video_url+'" width="640" height="360" frameborder="0" allowfullscreen></iframe>';

                    $('#spidochetube_player').append(iframe_html);
                }

                $('#spidochetube_loadmore').off('click').on('click',function(){
                    $this.spidochetube({
                        key         : settings.key,
                        id          : settings.id,
                        max_results : settings.max_results,
                        paging      : settings.paging,
                        first_load  : false
                    });
                    return false;
                });

                set_player_height();
                $(window).resize(set_player_height);

                if($.isFunction(settings.complete)){
                    settings.complete.apply($this);
                }

            });

        });

        function iframe_src(iframe_video_id, autoplay, theme){

            var src = 'https://www.youtube.com/embed/'+iframe_video_id+'?version=3&loop=1&autoplay='+autoplay+'&rel=0&showsearch=0&showinfo=0&theme='+theme;
            return src;

        }

        function set_player_height(){

            var ratio = 1.7777777777777777;
            var player_width = $('#player').width();
            var player_height = player_width / ratio;

            $('#player').height(player_height);

        }

        function init_item_click($el, scroll_duration){

            $el.on('click','li a',function(e){
                e.preventDefault();
                var next_video_id = $(this).attr('data-youtubeID');
                var next_video_url = iframe_src(next_video_id, settings.autoplay, settings.theme);

                $('#spidochetube_list li').removeClass('spidochetube_current');
                $(this).parent().addClass('spidochetube_current');

                $('html, body').animate({
                    scrollTop: $('#spidochetube_player').offset().top
                }, scroll_duration, function(){
                    $('#spidochetube_player iframe').attr('src' , next_video_url);
                });

            });
        }

    };

})(jQuery);