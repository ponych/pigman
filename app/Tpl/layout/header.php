<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_site['title'];?> :: <?php echo C('title_suffix');?></title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />

    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
    <meta content="O2tZZ+1B7/ciYgjk9t+lrob5132BQ1gA7sA7MYfSPV0=" name="csrf-token" />

    <link href="<?php echo C('asset_cdn');?>/css/reset.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo C('asset_cdn');?>/css/main.css" media="all" rel="stylesheet" type="text/css" />

    <script src="<?php echo C('asset_cdn');?>/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo C('asset_cdn');?>/js/main.js" type="text/javascript"></script>
</head>


<body class="logged_in  env-production windows  page-dashboard">
<div class="wrapper">

    <div class="header<?php echo is_login()?' header-logged-in':'';?> true">
        <div class="container clearfix">

            <a class="header-logo-invertocat" href="https://github.com/">
                <span class="mega-octicon octicon-mark-github"></span>
            </a>

            <a href="/notifications" class="notification-indicator tooltipped downwards" data-gotokey="n" title="You have unread notifications">
                <span class="mail-status unread"></span>
            </a>

            <div class="command-bar js-command-bar  ">
                <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">
                    <input type="text" data-hotkey="s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off" data-username="ponych" />

                <span class="octicon help tooltipped downwards" title="Show command bar help">
                    <span class="octicon octicon-question"></span>
                </span>

                    <input type="hidden" name="ref" value="cmdform">

                </form>
                <ul class="top-nav">
                    <li class="explore"><a href="/explore">Explore</a></li>
                    <li><a href="https://gist.github.com">Gist</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="https://help.github.com">Help</a></li>
                </ul>
            </div>
            <ul id="user-links">
                <li>
                    <a href="/ponych" class="name">
                        <img height="20" alt="avatar" src="https://1.gravatar.com/avatar/1ed98e59301d48034e1b5642442c125f?d=https%3A%2F%2Fidenticons.github.com%2F3a4c0da719c8db4391292ef17647ff54.png&amp;r=x&amp;s=140" width="20" /> ponych
                    </a>
                </li>

                <li>
                    <a href="/new" id="new_repo" class="tooltipped downwards" title="Create a new repo" aria-label="Create a new repo">
                        <span class="octicon octicon-repo-create"></span>
                    </a>
                </li>

                <li>
                    <a href="/settings/profile" id="account_settings"
                       class="tooltipped downwards"
                       aria-label="Account settings "
                       title="Account settings ">
                        <span class="octicon octicon-tools"></span>
                    </a>
                </li>
                <li>
                    <a class="tooltipped downwards" href="/logout" data-method="post" id="logout" title="Sign out" aria-label="Sign out">
                        <span class="octicon octicon-log-out"></span>
                    </a>
                </li>

            </ul>

            <div class="js-new-dropdown-contents hidden">


                <ul class="dropdown-menu">
                    <li>
                        <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
                    </li>
                    <li>
                        <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
                    </li>



                </ul>

            </div>



        </div>
    </div>

    <div class="site clearfix">
        <div id="site-container" class="context-loader-container" data-pjax-container>
            <div class="pagehead">
                <div class="container">

                    <ul class="pagehead-actions">
                        <li><a class="feed tooltipped leftwards" title="Subscribe to your personalized GitHub Feed" href="/ponych.private.atom?token=899786__eyJzY29wZSI6IkF0b206L3BvbnljaC5wcml2YXRlLmF0b20iLCJleHBpcmVzIjoyOTY1MDg3ODI0fQ==--f9732bd3cbd409058e58fae9c981141babf68b6c"><span class="dashboard-feed-icon octicon octicon-rss"></span> News Feed</a></li>
                    </ul>

                    <div class="select-menu account-switcher js-menu-container js-select-menu">
  <span class="minibutton select-menu-button with-gravatar js-menu-target">
    <div class="select-menu-button-gravatar js-select-button-gravatar">
        <img height="20" alt="avatar" src="https://1.gravatar.com/avatar/1ed98e59301d48034e1b5642442c125f?d=https%3A%2F%2Fidenticons.github.com%2F3a4c0da719c8db4391292ef17647ff54.png&amp;r=x&amp;s=140" width="20" />
    </div>
    <span class="js-select-button">ponych</span>
  </span>

                        <div class="select-menu-modal-holder js-menu-content">
                            <div class="select-menu-modal js-navigation-container">
                                <div class="select-menu-header">
                                    <span class="select-menu-title">Switch account context</span>
                                    <span class="octicon octicon-remove-close js-menu-close"></span>
                                </div> <!-- /.select-menu-header -->

                                <div class="select-menu-list js-navigation-container">
                                    <div class="select-menu-no-results">You don’t belong to any organizations.</div>
                                </div> <!-- /.select-menu-list -->
                                <div class="select-menu-footer">
                                    <span class="octicon octicon-plus"></span>
                                    <a href="/account/organizations/new">Create Organization</a>
                                </div> <!-- /.select-menu-footer -->

                            </div> <!-- /.select-menu-modal -->
                        </div> <!-- /.select-menu-modal-holder -->
                    </div> <!-- /.select-menu -->


                    <p class="tip"><strong class="protip">ProTip&trade;</strong> <a href="http://shop.github.com/products/die-cut-github-stickers">Feline cephalopod adhesives</a> are great for decorating portable computation devices.</p>

                </div>
            </div><!-- /.pagehead -->

            <div class="container">
