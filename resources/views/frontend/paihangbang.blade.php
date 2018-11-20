@extends('frontend.frontend')
@section('title'){{str_replace('加盟','',$thistypeinfo->typename)}}加盟店排行榜_火爆{{str_replace('加盟','',$thistypeinfo->typename)}}加盟排行榜-树人教育加盟网@stop
@section('keywords'){{str_replace('加盟','',$thistypeinfo->typename)}}加盟店排行榜,火爆{{str_replace('加盟','',$thistypeinfo->typename)}}加盟排行榜,{{str_replace('加盟','',$thistypeinfo->typename)}}品牌排行@stop
@section('description')树人教育加盟网为您全方位解读{{str_replace('加盟','',$thistypeinfo->typename)}}加盟品牌排行信息。分享{{str_replace('加盟','',$thistypeinfo->typename)}}门店信息，{{str_replace('加盟','',$thistypeinfo->typename)}}排行榜分类提供性价比最高{{str_replace('加盟','',$thistypeinfo->typename)}}品牌加盟排行榜信息，供你快速的选择适合自己的{{str_replace('加盟','',$thistypeinfo->typename)}}加盟品牌，让您加盟无忧，顺利开店。快速解决创业致富难题。@stop
@section('headlibs')
    <meta name="Copyright" content="树人教育加盟网-{{env('APP_URL')}}"/>
    <meta name="author" content="树人教育加盟网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}/index.php{{str_replace('/index.php','',Request::getrequesturi())}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}/index.php{{str_replace('/index.php','',Request::getrequesturi())}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}/index.php{{str_replace('/index.php','',Request::getrequesturi())}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}/index.php{{str_replace('/index.php','',Request::getrequesturi())}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('/index.php','',Request::getrequesturi())}}"/>
    <link rel="stylesheet" href="/frontend/css/article.css" />
    <link rel="stylesheet" href="/frontend/css/index.css" />
@stop
@section('main_content')
    <div id="ny_main">
        <div class="fenlei_jianjie">
            <div class="fenlei_jianjie_ph"></div>
            <div class="fenlei_jianjie_c">	树人教育加盟网综合排行榜是树人教育加盟网推出的互联网加盟品牌排行榜。所有入驻树人教育加盟网的优质品牌都将获得一定的排名。本次排名根据树人教育加盟网用户的偏好等综合因素进行排名，系列加盟排行榜不作为官方和权威的行业排名，仅供投资者进行参考。树人教育加盟网定期对所有餐饮品牌品牌进行排名，包括零食品牌排名榜、炸鸡品牌排行榜、便当服务品牌排行榜、小吃品牌排行榜等……树人教育加盟网温馨提示:所有创业加盟项目及相关信息均来自互联网及用户自主添加，筛选品牌前务必进行实地考察和咨询。
            </div>
        </div>
        <div class="paihang_center">
            <div class="path"><p>当前位置：<a href="/">首页</a>&gt;<a class="dq" href="/paihangbang/" title="品牌排行榜">品牌排行榜</a></p></div>
            <div class="paihang_left">
                <div class="ph_l">
                    <p class="tit">树人教育加盟网排行榜</p>
                    <ul>
                        @foreach($brandnavs as $brandnav)
                            <li><a target="_self" href="/paihangbang/{{$brandnav->real_path}}/">{{$brandnav->typename}}品牌排行榜</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="paihang_right">
                <div class="sheyLbox">
                    @foreach($paihangbrands as $index=>$paihangbrand)
                        <div class="sheyLlist clearfix">

                            <div class="hdzjbox">
                                <div class="pro-Img fl">
                                    <a target="_blank" href="/brand/{{$paihangbrand->id}}/" class="pp-pic-name" title="{{$paihangbrand->brandname}}"><img src="{{$paihangbrand->litpic}}" alt="{{$paihangbrand->brandname}}"></a>
                                </div>
                            </div>
                            <div class="sheyincont">
                                <div class="clearfix">
                                    <div class="incontTop">
                                        <div class="clearfix">
                                            <h3 class="inshoptit"><em class="paihang">第{{$index+1}}名</em>
                                                <a href="/brand/{{$paihangbrand->id}}/" title="{{$paihangbrand->brandname}}"  target="_blank">{{$paihangbrand->brandname}}</a>
                                            </h3>
                                            <ul class="inrzbox clearfix">
                                                <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                                <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                                <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="xiaobaonewbox">
                                        </div>
                                        <p class="inaddtxt">公司名称：{{$paihangbrand->brandgroup}} </p>
                                        <p class="inaddtxt inyuyuepeo">公司地址： {{$paihangbrand->brandaddr}}</p>
                                        <p class="ismoney">投资金额：￥{{$paihangbrand->brandpay}}
                                        </p>
                                        <p class="inpostcont"><span>适合人群<em></em></span>{{$paihangbrand->brandperson}}</p> </div>
                                    <div class="iniconbox">
                                        <ul>
                                            <li class="xishu">门店总数{{$paihangbrand->brandnum}} </li>
                                            <li class="renqi" style="color: red">火爆指数 {{$paihangbrand->click}}</li>
                                            <li class="pinglun">品牌好评{{rand(95,99)}}%</li>
                                            <li class="zuopin">所需面积 {{\App\AdminModel\Acreagement::where('id',$paihangbrand->acreage)->value('type')}}㎡</li>
                                            <li class="taoxi">品牌发源地 {{$paihangbrand->brandorigin}}</li>
                                        </ul>
                                    </div>
                                    <div class="iniconbox">
                                        <ul>
                                            <li class="xishu">申请加盟 {{$paihangbrand->brandapply}} </li>
                                            <li class="renqi">成立时间 {{$paihangbrand->brandtime}} </li>
                                            <li class="pinglun">注册资金 {{$paihangbrand->registeredcapital}}</li>
                                            <li class="zuopin">加盟区域 {{$paihangbrand->brandarea}}</li>
                                            <li class="taoxi">经营范围 {{$paihangbrand->brandmap}}</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="newyouhui">
                                    <ul class="newyouhuiinner coupon_more ">
                                        <li><span>【品牌特色】<em></em></span>{{str_limit($paihangbrand->brandpsp,90,'...')}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
@stop