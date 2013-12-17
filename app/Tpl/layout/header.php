<!DOCTYPE html>
<html lang="zh-CN" class="ua-mac ua-ff25">
<head>
    <meta content="text/html;charset=utf-8" http-equiv="content-type" />
    <title><?php echo $_site['title'];?></title>
    <link rel="stylesheet" href="<?php echo C('asset_cdn');?>/assets/css/reset.css" />
    <link rel="stylesheet" href="<?php echo C('asset_cdn');?>/assets/css/main.css" />
</head>
<body>

<div id="db-global-nav" class="global-nav">
    <div class="bd">
        <div class="top-nav-info">


            <span class="perf-metric"><!-- _performtips_ --></span>
            <ul>

                <li><a id="top-nav-doumail-link" href="http://www.douban.com/doumail/">豆邮</a></li>
                <li class="nav-user-account">
                    <a target="_blank" href="http://www.douban.com/accounts/" class="bn-more"><span>小马哥的帐号</span><span class="arrow"></span></a>
                    <div class="more-items">
                        <table cellpadding="0" cellspacing="0">
                            <tr><td><a href="http://www.douban.com/mine/">我的豆瓣</a></td></tr>
                            <tr><td><a target="_blank" href="http://www.douban.com/accounts/">我的帐号</a></td></tr>
                            <tr><td><a href="http://www.douban.com/accounts/logout?source=main&amp;ck=pwMA">退出</a></td></tr>
                        </table>
                    </div>

                </li>
            </ul>
        </div>


        <div class="top-nav-reminder"  style=margin-right:5px>
            <a href="http://www.douban.com/notification/" class="lnk-remind">提醒
                <span class="num"><span>2</span><i></i></span>
            </a>
            <div id="top-nav-notimenu" class="more-items">
                <div class="bd">
                    <p>加载中...</p>
                </div>
            </div>
        </div>


        <div class="global-nav-items">
            <ul>

                <li class="on">
                    <a href="http://www.douban.com/"  onclick="moreurl(this, {from: 'top-nav-click-main', uid: '1924862'})" >豆瓣</a>
                </li>


                <li>
                    <a href="http://book.douban.com/" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-book', uid: '1924862'})" >读书</a>
                </li>


                <li>
                    <a href="http://movie.douban.com/" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-movie', uid: '1924862'})" >电影</a>
                </li>


                <li>
                    <a href="http://music.douban.com/" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-music', uid: '1924862'})" >音乐</a>
                </li>


                <li>
                    <a href="http://www.douban.com/location/" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-location', uid: '1924862'})" >同城</a>
                </li>


                <li>
                    <a href="http://www.douban.com/group/" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-group', uid: '1924862'})" >小组</a>
                </li>


                <li>
                    <a href="http://read.douban.com/?dcs=top-nav&amp;dcm=douban" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-read', uid: '1924862'})" >阅读</a>
                </li>


                <li>
                    <a href="http://douban.fm/" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-fm', uid: '1924862'})" >豆瓣FM</a>
                </li>


                <li>
                    <a href="http://dongxi.douban.com/?dcs=top-nav&amp;dcm=douban" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-commodity', uid: '1924862'})" >东西</a>
                </li>

                <li>
                    <a href="#more" class="bn-more"><span>更多</span></a>
                    <div class="more-items">
                        <table cellpadding="0" cellspacing="0">

                            <tr><td><a href="http://9.douban.com" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-9', uid: '1924862'})" >九点</a></td></tr>

                            <tr><td><a href="http://alphatown.com" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-town', uid: '1924862'})" >阿尔法城</a></td></tr>

                            <tr><td><a href="http://www.douban.com/mobile/" target="_blank"  onclick="moreurl(this, {from: 'top-nav-click-mobile', uid: '1924862'})" >移动应用</a></td></tr>
                        </table>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

