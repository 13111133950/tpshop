<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"F:\Demo\tpshop\public/../application/index\view\index\test.html";i:1505282931;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title></title>
 <style>
.hq_hy:hover, .hq_zsh:hover, .hq_hb:hover, .hq_jyyc:hover, .hq_byb:hover, .hq_lrcl:hover
　　/*鼠标移上去变色（不点击）*/
        {
            color: #fff;
            border-color: #b1b0b0;
            background: #b1b0b0;
            border: none;
        }
        
        .start
        {
            cursor: pointer;
        }

        .end
        {
            cursor: pointer;
            color: #fff;
            background: #b1b0b0;
            border: none;
        }
    </style>
    <script src="http://libs.baidu.com/jquery/1.9.1/jquery.js"></script>
</head>

<body>
<table> 
<tr>
                <td>
                    <input class="flag hq_hy" type="submit" onclick="dj(this);" value="行业" />
                </td>
                <td>
                    <input class="flag hq_zsh" type="submit" onclick="dj(this);" value="指数" />
                </td>
                <td>
                    <input class="flag hq_hb" type="submit" onclick="dj(this);" value="货币" />
                </td>
                <td>
                    <input class="flag hq_jyyc" type="submit" onclick="dj(this);" value="交易异常" />
                </td>
                <td>
                    <input class="flag hq_byb" type="submit" onclick="dj(this);" value="比一比" />
                </td>
                <td>
                    <input class="flag hq_lrcl" type="submit" style="" onclick="dj(this);" value="ETF两融策略" />
                </td>
            </tr>
        </table>
   <script type="text/javascript">
    $(function () {
    //加载事件
        var collection = $(".flag");
        $.each(collection, function () {
            $(this).addClass("start");
        });
    });
    //单击事件
    function dj(dom) {
        var collection = $(".flag");
        $.each(collection, function () {
            $(this).removeClass("end");
            $(this).addClass("start");
        });
        $(dom).removeClass("start");
        $(dom).addClass("end");
    }
</script>



</body>

</html>