<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    @yield('headlibs')
    <link rel="stylesheet" href="/frontend/css/common.css" />
    <link rel="stylesheet" href="/frontend/css/swiper.min.css" />
</head>
<body>
<div class="zong_topbar clear">
    <div class="wrap_mar f12 clear">
        <div id="testDiv">
            <ul class="fl topbar_left"> <li class="fl"><span class="webtitle">欢迎访问树人教育加盟网</span> </li></ul>
        </div>
        <div class="top_right">
            <a href="/sprodlist/all/" rel="nofollow"><em class="zxm"></em>搜项目</a>
            <a href="/paihangbang/"><em class="phb"></em>品牌排行榜</a>
            <a href="/storage/sitemap.xml"><em class="kdh"></em>快导航</a>
            <a href="http://m.jjedu.com.cn"><em class="sjb"></em>手机版</a>
        </div>
    </div>
</div>
<!-- logo -->
<div class="zong_logo wrap_mar clear" style="margin-top:0">
    <h1 class="fl"><a href="{{config('app.url')}}" title="树人教育加盟网" class="logo_left" target="_self"><img src="/frontend/images/logo.png" alt="树人教育加盟网"></a></h1>
    <div class="logo_center fr">
        <div class="logo_find clear">
            <div class="logo_select f14 pr fl">行业<i class="zong_icon i7"></i></div>
            <form action="{{config('app.url')}}/sprodlist/all/" method="post">
                {{csrf_field()}}
            <input type="text" name="keywords" value="请输入您想查找的项目" class="fl text fontW" id="keyword_fenci" onfocus="if(this.value=='请输入您想查找的项目'){this.value='';}" onblur="if(this.value==''){this.value='请输入您想查找的项目';}"/>
            <input type="submit" value="搜索" class="button f16 fontW fr" />
            </form>
        </div>
        <ul class="f12">
            <li><a href="/brand/1247/" title="聚能教育加盟" target="_blank">聚能教育加盟</a> |</li>
            <li><a href="/brand/7/" title="UBTV小主播加盟" target="_blank">UBTV小主播加盟</a> |</li>
            <li><a href="/brand/1062/" title="新东方教育加盟" target="_blank">新东方教育加盟</a> |</li>
            <li><a href="/brand/67/" title="昂立教育加盟" target="_blank">昂立教育加盟</a> |</li>
            <li><a href="/brand/2/" title="巴布豆早教加盟" target="_blank">巴布豆早教加盟</a></li>
        </ul>
    </div>
</div>
<!-- 导航 -->
<div class="menu">
    <div class="menu_box">
        <div class="header_menu show"><div class="tit">行业分类</div></div>
        <ul class="menu_list">
            <li><a href="/" target="_self">首页</a></li>
            <li><a href="/jyproject/" target="_self">教育品牌大全</a></li>
            <li><a href="/news/" target="_self">品牌新闻</a></li>
            <li><a href="/paihangbang/" target="_blank">教育加盟排行榜</a></li>
        </ul>
    </div>
</div>
@yield('main_content')
<div class="footer clear">
    <div class="footer_nav">
        <span>关于我们</span>|
        <span>本站法律顾问</span>|
        <span>投诉删除</span>|
        <a href="/storage/sitemap.xml">网站地图</a>|
        <span>法律声明</span>|
        <span>联系我们</span>
    </div>
    <div class="cert"><img src="/frontend/images/index07.jpg" alt="信用保障"></div>
    <div class="copyright">
        <p>树人教育加盟网友情提示：多打电话、多咨询、实地考察，可降低投资风险！</p>
        <p> Copyright © 2015-2018 www.xiuxianshipin.com Corporation, All Rights Reserved 上海卡哇伊实业有限公司 版权所有</p>
        <p><a rel="nofollow" href="http://www.miitbeian.gov.cn" rel="nofollow" target="_blank"> 沪ICP备15007550号-24</a></p>
    </div>
</div>
<script src="/frontend/js/jquery.min.js"></script>
<script src="/frontend/js/swiper.min.js"></script>
<script src="/frontend/js/frontend.js"></script>
@yield('footlibs')
</body>
</html>
