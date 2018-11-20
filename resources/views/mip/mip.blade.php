<!DOCTYPE html>
<html mip>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="stylesheet" type="text/css" href="https://c.mipcdn.com/static/v1/mip.css">
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/mobile/css/mipcommon.css" rel="stylesheet" type="text/css"/>
    @yield('headlibs')
</head>
<body>
<div class="header clearfix mtop84">
    <div class="search clearfix">
        <div class="city fl">
            <a href="/"><mip-img src="/mobile/images/nav-logo2.png" alt="树人教育加盟网"></mip-img></a>
        </div>
        <div class="searchCon fl">
            <mip-form url="{{str_replace('www.','mip.',config('app.url'))}}/sprodlist/all/" target="_self" method="post">
                {{csrf_field()}}
            <div class="ipt-box"></div>
            <input class="ipt-placeholder" placeholder="输入您想找的项目" />
            <button type="submit" class="search_btn"></button>
            </mip-form>
        </div>
        <mip-accordion sessions-key="mip_1" animatetime="0.24">
            <section>
            <div class="message fr">
            <b>项目分类</b>
        </div>
                <div class="mip-accordion-content d_nav">
                    <ul>
                        <li><a href="/" target="_self"><span>首页</span></a></li>
                        <li><a href="/blist/all/" target="_self"><span>项目大全</span></a></li>
                        <li><a href="/nlist/1/" target="_self"><span>加盟指南</span></a></li>
                        <li><a href="/nlist/2/" target="_self"><span>投资分析</span></a></li>
                        <li><a href="/nlist/4/" target="_self"><span>经营管理</span></a></li>
                        <li><a href="/bnlist/" target="_self"><span>品牌新闻</span></a></li>
                        <li><a href="/paihangbang/" target="_self"><span>品牌排行榜</span></a></li>
                        <li>热门行业</li>
                        <li><a href="/blist/lingshi_1/" target="_self"><span>零食加盟</span></a></li>
                        <li><a href="/blist/jinkou_2/" target="_self"><span>进口零食加盟</span></a></li>
                        <li><a href="/blist/douzhipin_3/" target="_self"><span>豆制品加盟</span></a></li>
                        <li><a href="/blist/guoren_4/" target="_self"><span>干果店加盟</span></a></li>
                        <li><a href="/blist/penghua_5/" target="_self"><span>膨化食品加盟</span></a></li>
                        <li><a href="/blist/tangguo_6/" target="_self"><span>糖果加盟</span></a></li>
                        <li><a href="/blist/roushi_7/" target="_self"><span>肉制品加盟</span></a></li>
                        <li><a href="/blist/canyin_8/" target="_self"><span>餐饮加盟</span></a></li>
                        <li><a href="/blist/tianpin_9/" target="_self"><span>甜品加盟</span></a></li>
                        <li><a href="/blist/sort_10/" target="_self"><span>面馆加盟</span></a></li>
                        </li>
                    </ul>
                </div>
            </section>
        </mip-accordion>
    </div>
</div>
@yield('main_content')
<mip-fixed type="bottom">
    <div class="zxNavBar">
        <div class="zxNavBarcon">
            <button  role="button" tabindex="0"  id="btn-open" class="zxHdImgcons" >
                <div class="zxHdImg">
                    <mip-img src="/mobile/images/hdimg2.jpg" ></mip-img>
                </div>
                <div class="zxHdName">
                    <div class="zxHdName-peo">
                        @if(isset($thisarticleinfos))
                            @if($thisarticleinfos->brandname)
                                {{$thisarticleinfos->brandname}}
                            @elseif ($thisarticleinfos->brandid)
                                {{\App\AdminModel\Brandarticle::where('id',$thisarticleinfos->brandid)->value('brandname')}}
                            @else
                                {{$thisarticleinfos->bdname}}
                            @endif
                        @elseif(isset($thistypeinfo))
                            {{$thistypeinfo->typename}}
                        @else
                            {{config('app.indexname')}}
                        @endif
                    </div>
                    <p>品牌招商经理  <span>联系她</span></p>
                </div>
            </button>
            <button  on="tap:my-lightbox.toggle" id="btn-open" role="button" tabindex="0" class="mfcall" >免费通话</button>
            <button   on="tap:my-lightbox.toggle" id="btn-open2" role="button" tabindex="0" class="mfcsain" >立即咨询</button>
        </div>
    </div>
</mip-fixed>
<mip-lightbox
        id="my-lightbox"
        layout="nodisplay"
        class="mip-hidden">
    <div class="lightbox">
        <div class="CengBox">
            <mip-img src="/mobile/images/kai.png" class="money"></mip-img>
            <mip-img  src="/mobile/images/cha.png" on="tap:my-lightbox.toggle" class="lightbox-close chaaaa"></mip-img>
            <p class="top1">
                        <span id="brand_name_UNM">@if(isset($thisarticleinfos))
                                @if($thisarticleinfos->brandname)
                                    {{$thisarticleinfos->brandname}}
                                @elseif ($thisarticleinfos->brandid)
                                    {{\App\AdminModel\Brandarticle::where('id',$thisarticleinfos->brandid)->value('brandname')}}
                                @else
                                    {{$thisarticleinfos->bdname}}
                                @endif
                            @elseif(isset($thistypeinfo))
                                {{$thistypeinfo->typename}}
                            @else
                                品牌加盟
                            @endif</span>
                <span id="brand_name_UNM2">
                        <span id="brand_name_UNM3">|</span></span>
                <span id="title_one_UNM">开店方案</span></p>
            <p class="top2"  id="title_two_UNM">手机验证，获取详细开店方案</p>
            <mip-form method="post" target="_self" url="https://message.5988.com/index.php/my_ci/into/">
                <ul>
                    <li>
                        <p id="pin1"><label for=""></label><input type="text" name="username" id="realname_UNM" placeholder="请输入您的称呼"></p>
                    </li>
                    <li>
                        <p class=""><label for=""></label><input type="text" name="iphone" maxlength="11" class="tellTex pin3" id="mobile_UNM" placeholder="请输入手机号码"></p>
                    </li>
                    <li id="pin4">
                        <p><label for=""></label></p>
                        <textarea name="" rows="" name="note"  cols="" id="content_UNM" placeholder="我对此项目很感兴趣 请联系我"></textarea>
                    </li>
                    <input type="hidden" name="realm" value="www.xiuxianshipin.com">
                    <input type="hidden" name="job" value="guestbook">
                    <input type="hidden" name="title" value="树人教育加盟网">
                    <input type="hidden" name="cla" value="
        @if(isset($thisarticleinfos))
                    @if($thisarticleinfos->brandname)
                    {{\App\AdminModel\Arctype::where('id',$thisarticleinfos->typeid)->value('typename')}}
                    @elseif ($thisarticleinfos->brandid)
                    {{\App\AdminModel\Arctype::where('id',\App\AdminModel\Brandarticle::where('id',$thisarticleinfos->brandid)->value('typeid'))->value('typename')}}
                    @else
                    {{$thisarticleinfos->arctype->typename}}
                    @endif
                    @elseif(isset($thistypeinfo))
                    {{$thistypeinfo->typename}}
                    @else
                            未知分类
@endif
                            ">
                    <input type="hidden" name="combrand" value="
        @if(isset($thisarticleinfos))
                    @if($thisarticleinfos->brandname)
                    {{$thisarticleinfos->brandname}}
                    @elseif ($thisarticleinfos->brandid)
                    {{\App\AdminModel\Brandarticle::where('id',$thisarticleinfos->brandid)->value('brandname')}}
                    @else
                    {{$thisarticleinfos->bdname}}
                    @endif
                    @elseif(isset($thistypeinfo))
                    {{$thistypeinfo->typename}}
                    @else
                            未知分类
@endif
                            ">
                    <input type="hidden" name="resolution" id="resolution">
                </ul>
                <div class="sure"><button type="submit" class="sure2">确定</button></div>
            </mip-form>
        </div>
        <div class="clear"></div>
    </div>
</mip-lightbox>

<footer>
    <div class="link-box ">
        <a href="http://www.xiuxianshipin.com/" class="foot-link">电脑版</a><span class="v-line">|</span>
        <a href="/blist/all/" class="foot-link">品牌招商</a><span class="v-line">|</span>
        <a href="/nlist/1/" class="foot-link">加盟指南</a><span class="v-line">|</span>
        <a href="/nlist/2/" class="foot-link">投资分析</a><span class="v-line">|</span>
        <a href="/nlist/4/" class="foot-link">经营管理</a>
    </div>
    <p class="firm clearfix">
        <span class="foot-text mgr15">上海卡哇伊实业有限公司 版权所有</span>
    </p>
</footer>
<script src="https://c.mipcdn.com/static/v1/mip.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-form/mip-form.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-accordion/mip-accordion.js"></script>
<script src="https://mipcache.bdstatic.com/static/v1/mip-link/mip-link.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-lightbox/mip-lightbox.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-fixed/mip-fixed.js"></script>
<script src="https://mipcache.bdstatic.com/static/v1/mip-stats-baidu/mip-stats-baidu.js"></script>
<mip-stats-baidu token="363854924683c7a256f4a5d7e3a1197a"></mip-stats-baidu>
<script src="https://c.mipcdn.com/extensions/platform/v1/mip-cambrian/mip-cambrian.js"></script>
<mip-cambrian site-id="1589647661647643"></mip-cambrian>
@yield('footlibs')
</body>
</html>
