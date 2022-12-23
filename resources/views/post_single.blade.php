<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">

<head>

    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KVJJSD3');</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="{{asset('post_single/css/block-library-style.min.css')}}" media="all">
    <link rel="stylesheet" id="classic-theme-styles-css" href="{{asset('post_single/css/css-classic-themes.min.css')}}" media="all">
    <link rel="stylesheet" id="roar_media-style-css" href="{{asset('post_single/css/roar_media-style.css')}}" media="all">
    <script src="js/jquery-jquery.min.js" id="jquery-core-js"></script>
    <script src="js/jquery-jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://roar.media/wp-json/">
    <link rel="alternate" type="application/json" href="https://roar.media/wp-json/wp/v2/posts/193825">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://roar.media/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://roar.media/wp-includes/wlwmanifest.xml">
    <link rel="shortlink" href="https://roar.media/?p=193825">
    <link rel="alternate" type="application/json+oembed"
        href="https://roar.media/wp-json/oembed/1.0/embed?url=https%3A%2F%2Froar.media%2Fenglish%2Flife%2Finsights-life%2Fcimacrisishacks-caring-for-children-during-a-crisis">
    <link rel="alternate" type="text/xml+oembed"
        href="https://roar.media/wp-json/oembed/1.0/embed?url=https%3A%2F%2Froar.media%2Fenglish%2Flife%2Finsights-life%2Fcimacrisishacks-caring-for-children-during-a-crisis&amp;format=xml">
    <link rel="pingback" href="https://roar.media/xmlrpc.php">
    <link rel="amphtml"
        href="https://roar.media/english/life/insights-life/cimacrisishacks-caring-for-children-during-a-crisis/amp">
    <link rel="icon" href="favicons/10-cropped-Roar-Logo-Icon-32x32.png" sizes="32x32">
    <link rel="icon" href="favicons/10-cropped-Roar-Logo-Icon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="favicons/10-cropped-Roar-Logo-Icon-180x180.png">
    <script src="https://kit.fontawesome.com/86ed18f74c.js" crossorigin="anonymous"></script>
    
</head>

<body class="post-template-default single single-post postid-193825 single-format-standard parent-life-e">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVJJSD3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="loader"><i class="icon-loader"></i></div>

    <div id="page" class="site">
        {{ View::make('header') }}
        <main id="primary" class="site-main">
            <article id="post-193825"
                class="post-193825 post type-post status-publish format-standard has-post-thumbnail hentry category-insights-e-life">
                <header class="entry-header">
                    <h1 class="entry-title">{{ $post_details[0]->post_title }}</h1>
                    <div class="post-meta post-video">
                        <div>
                            <div>
                                <div>
                                    <a href="teamroar.html" class="post-author"><img
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyuNFyw05KSucqjifL3PhDFrZLQh7QAS-DTw&usqp=CAU">{{ $post_details[0]->author_id }}</a>
                                    <a href="insights.html" class="post-category">{{ $post_details[0]->cat_id }}</a>
                                    <span class="sep"></span>
                                    <time class="post-date" datetime="2022-12-16T14:51:29+05:30"
                                        itemprop="datePublished">{{ date('d-m-Y', strtotime($post_details[0]->created_at)) }}</time>
                                    <span class="sep"></span>
                                    <!--<div class="post-format">-->
                                    <!--    <i class="post-icon"></i>-->
                                    <!--    <span>article</span>-->
                                    <!--</div>v-->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="social-share"><a class="s-whatsapp"
                                    href="{{ $post_details[0]->youtube_link }}"
                                    data-action="share/whatsapp/share" target="_blank" rel="nofollow"><i
                                        class="icon-youtube"></i></a><a class="s-facebook"
                                    href="{{ $post_details[0]->facebook_link }}"
                                    target="_blank" rel="nofollow"><i class="icon-facebook"></i></a><a class="s-twitter"
                                    href="{{ $post_details[0]->twitter_link }}"
                                    target="_blank" rel="nofollow"><i class="icon-twitter"></i></a>
                                    <a class="s-twitter"
                                    href="{{ $post_details[0]->tiktok_link }}"
                                    target="_blank" rel="nofollow"><img src="https://img.icons8.com/ios-glyphs/30/null/tiktok.png"/></a>
                                    <a class="s-twitter"
                                    href="{{ $post_details[0]->linkedin_link }}"
                                    target="_blank" rel="nofollow"><img src="https://img.icons8.com/ios-filled/30/null/linkedin-circled--v1.png"/></a>
                                    
                        </div>
                    </div>
                </header>
                <div class="entry-content">
                    {!! $post_details[0]->content !!}
                </div>
                <!--<footer class="entry-footer">-->
                <!--    <div class="social-share"><a class="s-whatsapp"-->
                <!--            href="https://wa.me/?text=https%3A%2F%2Froar.media%2Fenglish%2Flife%2Finsights-life%2Fcimacrisishacks-caring-for-children-during-a-crisis"-->
                <!--            data-action="share/whatsapp/share" target="_blank" rel="nofollow"><i-->
                <!--                class="icon-whatsapp"></i></a><a class="s-facebook"-->
                <!--            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Froar.media%2Fenglish%2Flife%2Finsights-life%2Fcimacrisishacks-caring-for-children-during-a-crisis"-->
                <!--            target="_blank" rel="nofollow"><i class="icon-facebook"></i></a><a class="s-twitter"-->
                <!--            href="https://twitter.com/intent/tweet?text=#CIMACrisisHacks:%20Caring%20For%20Children%20During%20A%20Crisis&amp;url=https%3A%2F%2Froar.media%2Fenglish%2Flife%2Finsights-life%2Fcimacrisishacks-caring-for-children-during-a-crisis&amp;via=roarlk"-->
                <!--            target="_blank" rel="nofollow"><i class="icon-twitter"></i></a><a class="s-rss"-->
                <!--            href="feed.html" target="_blank" rel="nofollow"><i class="icon-rss"></i></a></div>-->
                <!--</footer>-->
            </article>
        </main>
        <section class="site-section">
            <div class="section-content">
                <h3 class="title-h3 center">Related Articles</h3>
            </div>
            <ul class="related-list clear-row">
                @foreach ($related_articles as $article)
                <li class="grid__item post-article ms-3 d-none d-md-block d-lg-block">
                    <a href="/post/{{ $article->id }}">
                      <div class="post-thumbnail">
                        <img src="{{ asset('/featuredImage/'.$article->featured_image) }}" style="width: 600px; height: 280px;">
                      </div>
                      <div class="entry-content-wrap">
                        <header class="entry-header">
                          <h2 class="entry-title">{{ $article->post_title }}</h2>
                        </header>
                        <footer class="entry-footer">
                          <div class="post-format">
                            <i class="post-icon"></i>
                            <span>{{ $article->categoryName }}</span>
                          </div>
                          <span class="sep"></span>
                          {{-- <div class="post-category">Insights</div> --}}
                          <span class="sep"></span>
                          <time class="post-date" datetime="2022-02-28T14:24:09+05:30" itemprop="datePublished">{{ $article->author_id }}
                            </time>
                        </footer>
                      </div>
                    </a>
                  </li>
                @endforeach
            </ul>
        </section>
    </div>
    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="col-4 clear-row">
                <div class="column">
                    <div class="site-branding">
                        <p class="site-title"><a href="english.html" rel="home">GenZ Media</a></p>
                        <p>GenZ Media සමුහය පාඨක ඔබ වෙත නැවුම් තොරතුරු ගෙන එන්නෙමු
                        </p>
                    </div>
                    <div class="site-social-menu">
                        <ul id="menu-social-menu" class="menu">
                            <li id="menu-item-183043"
                                class="facebook-i menu-item menu-item-type-custom menu-item-object-custom menu-item-183043">
                                <a target="_blank" rel="noopener"
                                    href="https://www.facebook.com/Roar.SriLanka/">Facebook</a></li>
                            <li id="menu-item-183044"
                                class="twitter-i menu-item menu-item-type-custom menu-item-object-custom menu-item-183044">
                                <a target="_blank" rel="noopener" href="https://twitter.com/Roarlk">Twitter</a></li>
                            <li id="menu-item-183045"
                                class="instagram-i menu-item menu-item-type-custom menu-item-object-custom menu-item-183045">
                                <a target="_blank" rel="noopener"
                                    href="https://www.instagram.com/roar.media/">Instagram</a></li>
                            <li id="menu-item-183046"
                                class="youtube-i menu-item menu-item-type-custom menu-item-object-custom menu-item-183046">
                                <a target="_blank" rel="noopener"
                                    href="https://www.youtube.com/channel/UCAJlUtAvlrv-RjL2iIOiC9g">Youtube</a></li>
                            <li id="menu-item-183047"
                                class="rss-i menu-item menu-item-type-custom menu-item-object-custom menu-item-183047">
                                <a target="_blank" rel="noopener" href="rss.html">RSS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="footer-menu">
                        <ul id="menu-footer-menu-1" class="menu">
                            <li
                                class="page_item page-item-186578" style="font-size: 16px; font-weight: bold">About Us
                            </li>
                            <li id="menu-item-183049"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-183049">
                                <p>GenZ Media සමුහය පාඨක ඔබ වෙත නැවුම් තොරතුරු ගෙන එන්නෙමු
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="column">
                    <div class="footer-menu">
                        <div class="menu">
                            <ul>
                                <li class="page_item page-item-186578"><a href="contribute.html">Contributor
                                        Platform</a></li>
                                <li class="page_item page-item-184599"><a href="privacy.html">Privacy Policy</a></li>
                                <li class="page_item page-item-184603"><a href="terms.html">Roar Media Pte. Ltd Terms of
                                        Service</a></li>
                                <li class="page_item page-item-191137"><a href="content-policy.html">Roar Media: Content
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="column">
                    <div>Email us for general inquiries and copyright information
                    
                        <form action="">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            <small>Copyright &copy; 2022 Roar Media - A Roar Global Company. All Rights Reserved.</small>
        </div>
    </footer>
    <script data-cfasync="false" src="{{asset('post_single/js/cloudflare-static-email-decode.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('post_single/js/3.1.1-jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('post_single/js/dist-masonry.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('post_single/js/dist-infinite-scroll.pkgd.min.js')}}"></script>
    <script type="text/javascript">
        $(window).on('load', function () {
            $(".loader").fadeOut();
            $(".site-footer").fadeIn();
        });

        $(document).ready(function () {
            var $lang = $('html').attr('lang');

            // Set Ads on Responsive
            if ($lang === 'bn-BD') {
                if ($(window).width() > 768) {
                    $('.pbgr-wrap.pbgr-header').append('<pubguru data-pg-ad="roar_atf_desk">');
                    $('.pbgr-wrap.pbgr-post-content-1').append('<pubguru data-pg-ad="roar_flex_desk" >');
                    $('.pbgr-wrap.pbgr-post-content-2').append('<pubguru data-pg-ad="roar_flex_desk2" >');
                    $('.pbgr-wrap.pbgr-post-content-3').append('<pubguru data-pg-ad="roar_flex_desk3" >');
                    $('.pbgr-wrap.pbgr-post-content-4').append('<pubguru data-pg-ad="roar_flex_desk4" >');
                    $('.pbgr-wrap.pbgr-sidebar').append('<pubguru class="pg-sticky" data-gpt-parent="unit_code">');
                } else {
                    $('.pbgr-wrap.pbgr-header').append('<pubguru data-pg-ad="roar_atf_mob" >');
                    $('.pbgr-wrap.pbgr-post-content-1').append('<pubguru data-pg-ad="roar_flex_mob" >');
                    $('.pbgr-wrap.pbgr-post-content-2').append('<pubguru data-pg-ad="roar_flex_mob2" >');
                    $('.pbgr-wrap.pbgr-post-content-3').append('<pubguru data-pg-ad="roar_flex_mob3" >');
                    $('.pbgr-wrap.pbgr-post-content-4').append('<pubguru data-pg-ad="roar_flex_mob4" >');
                    $('.pbgr-wrap.pbgr-post-content-5').append('<pubguru data-pg-ad="roar_flex_mob5" >');
                    $('.pbgr-wrap.pbgr-sidebar').append('');
                }
            }

            // Set RSS Links
            if ($lang === 'si-LK') {
                $('#menu-social-menu .rss-i a').attr('href', '/sinhala/rss');
            } else if ($lang === 'ta-IN') {
                $('#menu-social-menu .rss-i a').attr('href', '/tamil/rss');
            } else if ($lang === 'bn-BD') {
                $('#menu-social-menu .rss-i a').attr('href', '/bangla/rss');
            } else {
                $('#menu-social-menu .rss-i a').attr('href', '/english/rss');
            }

            // init Masonry
            var $grid = $('.grid').masonry({
                itemSelector: 'none', // select none at first
                columnWidth: '.grid__col-sizer',
                gutter: '.grid__gutter-sizer',
                percentPosition: true,
                stagger: 30,
                // nicer reveal transition
                visibleStyle: { transform: 'translateY(0)', opacity: 1 },
                hiddenStyle: { transform: 'translateY(100px)', opacity: 0 }
            });
            // get Masonry instance
            var msnry = $grid.data('masonry');
            // Infinite Scroll options
            $grid.infiniteScroll({
                path: '.nav-previous a',
                append: '.grid__item',
                outlayer: msnry,
                status: '.page-load-status',
                history: false,
                debug: false,
                onInit: function () {
                    this.on('append', function (event, response, path, items) {
                        $grid.imagesLoaded().done(function () {
                            $grid.masonry();
                        });
                    });
                }
            });
            // initial items reveal
            $grid.imagesLoaded(function () {
                $grid.removeClass('are-images-unloaded');
                $grid.masonry('option', { itemSelector: '.grid__item' });
                var $items = $grid.find('.grid__item');
                $grid.masonry('appended', $items);
            });
            $('.drop-menu span').on('click', function () {
                $(this).siblings('ul').slideToggle(200);
                $(this).parent('nav').toggleClass('is-active');
            });
            $(document).on('click', function (event) {
                var $trigger = $('.drop-menu');
                if ($trigger !== event.target && !$trigger.has(event.target).length) {
                    $('.drop-menu ul').slideUp(200);
                    $('.drop-menu').removeClass('is-active');
                }
            });
        });
    </script>
    <script src="js/fitvids-for-wordpress-jquery.fitvids.js" id="fitvids-js"></script>
    <script src="js/js-comment-reply.min.js" id="comment-reply-js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('body').fitVids();
        });
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"77a6a2772853c380","token":"c63e2106c21e48338a86de0c5800ab7a","version":"2022.11.3","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>