<?php /* 页脚js等 */ ?>

<script type="text/javascript">
    // $(document).ready(function() {
    //     $("#main-menu li ul li").click(function() {
    //         $(this).siblings('li').removeClass('active'); // 删除其他兄弟元素的样式
    //         $(this).addClass('active'); // 添加当前元素的样式
    //     });
    //     $("a.smooth").click(function() {
    //         $("html, body").animate({
    //             scrollTop: $($(this).attr("href")).offset().top - 30
    //         }, {
    //             duration: 500,
    //             easing: "swing"
    //         });
    //     });
    //        return false;
    // });

    /*var href = "";
    var pos = 0;
    $("a.smooth").click(function(e) {
        $("#main-menu li").each(function() {
            $(this).removeClass("active");
        });
        $(this).parent("li").addClass("active");
        e.preventDefault();
        href = $(this).attr("href");
        pos = $(href).position().top - 30;
        $("html,body").animate({
            scrollTop: pos
        }, 500);
    });*/
</script>

<!-- Bottom Scripts -->
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/TweenMax.min.js"></script>
<script src="/static/js/resizeable.js"></script>
<script src="/static/js/joinable.js"></script>
<script src="/static/js/xenon-api.js"></script>
<script src="/static/js/xenon-toggles.js"></script>
<!-- JavaScripts initializations and stuff -->
<script src="/static/js/xenon-custom.js"></script>

<script>

    // 获取当前相对路径的方法
    // 首先获取 Url，然后把 Url 通过
    // 截成两部分，再从后一部分中截取相对路径。如果截取到的相对路径中有参数，则把参数去掉。
    function GetUrlRelativePath(url = false)
    {
       if(!url) var url = document.location.toString();
       if(url=='javascript:void(0)') {
           return 'javascript:void(0)';
       }

        var arrUrl = url.split("//");

        var start = arrUrl[1].indexOf("/");
        var relUrl = arrUrl[1].substring(start);//stop省略，截取从start开始到结尾的所有字符

        if(relUrl.indexOf("?") != -1){
            relUrl = relUrl.split("?")[0];
        }
        return relUrl;
    }

    $('#main-menu a').each(function (i) {

        $(this).parent().removeClass('active');

        if(GetUrlRelativePath(this.href) == GetUrlRelativePath() && GetUrlRelativePath(this.href) != '/' ){

            $(this).parent().addClass('active');

            $(this).parent().parent().css('display', 'block')

            //console.log($(this));

            //console.log(this.href);

            //console.log(GetUrlRelativePath(this.href));

        }else {
            if(i==0 && GetUrlRelativePath() == '/' ){
                console.log($(this));
                $(this).parent().addClass('active');
            }
        }
    })

    //console.log($('#main-menu a'));
</script>