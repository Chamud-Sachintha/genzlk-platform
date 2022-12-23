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
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <title>Genz-LK - Covering the deeper issues, untold tales and the hidden heroes of Sri Lanka.</title>
  <link rel="next" href="https://roar.media/page/2">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
  <link rel="stylesheet" id="wp-block-library-css" href="css/block-library-style.min.css" media="all">
  <link rel="stylesheet" id="classic-theme-styles-css" href="css/css-classic-themes.min.css" media="all">

  <link rel="stylesheet" id="roar_media-style-css" href="css/roar_media-style.css" media="all">
  <script src="js/jquery-jquery.min.js" id="jquery-core-js"></script>
  <script src="js/jquery-jquery-migrate.min.js" id="jquery-migrate-js"></script>
  <link rel="https://api.w.org/" href="https://roar.media/wp-json/">
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://roar.media/xmlrpc.php?rsd">
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://roar.media/wp-includes/wlwmanifest.xml">
  <link rel="icon" href="favicons/10-cropped-Roar-Logo-Icon-32x32.png" sizes="32x32">
  <link rel="icon" href="favicons/10-cropped-Roar-Logo-Icon-192x192.png" sizes="192x192">
  <link rel="apple-touch-icon" href="favicons/10-cropped-Roar-Logo-Icon-180x180.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
  <meta name="msapplication-TileImage"
    content="https://roar.media/wp-content/uploads/2022/10/cropped-Roar-Logo-Icon-270x270.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <style>
    a {
      color: var(--bs-link-color);
      text-decoration: none !important;
    }

    body {
      background: #f5f9fe;
    }
  </style>
</head>

<body class="home blog hfeed parent-home">

  <div id="page" class="site">
    {{View::make('header')}}

    <?php $index=0; ?>
    @foreach ($all_posts as $each_post)
      <li class="grid__item post-article ms-3 d-none d-md-block d-lg-block">
        <a href="/post/{{ $each_post->id }}">
          <div class="post-thumbnail">
            <img src="{{ asset('/featuredImage/'.$each_post->featured_image) }}" style="width: 600px; height: 280px;">
          </div>
          <div class="entry-content-wrap">
            <header class="entry-header">
              <h2 class="entry-title">{{ $each_post->post_title }}</h2>
            </header>
            <div class="entry-content">
              <p>{{ Str::limit($contents[$index], 100, '...') }}</p>
            </div>
            <footer class="entry-footer">
              <div class="post-format">
                <i class="post-icon"></i>
                <span>{{ $each_post->categoryName }}</span>
              </div>
              <span class="sep"></span>
              {{-- <div class="post-category">Insights</div> --}}
              <span class="sep"></span>
              <time class="post-date" datetime="2022-02-28T14:24:09+05:30" itemprop="datePublished">{{ $each_post->author_id }}
                </time>
              <!--<p>{{ $each_post->author_id }}</p>-->
            </footer>
          </div>
        </a>
      </li>

      {{-- mobile view --}}

      <li class="grid__item post-article d-md-none d-lg-none">
        <a href="/post/{{ $each_post->id }}">
          <div class="post-thumbnail">
            <img src="{{ asset('/featuredImage/'.$each_post->featured_image) }}">
          </div>
          <div class="entry-content-wrap">
            <header class="entry-header">
              <h2 class="entry-title">{{ $each_post->post_title }}</h2>
            </header>
            <div class="entry-content">
              <p>{{ Str::limit($contents[$index], 100, '...') }}</p>
              <?php $index = $index + 1 ?>
            </div>
            <footer class="entry-footer">
              <div class="post-format">
                <i class="post-icon"></i>
                <span>{{ $each_post->categoryName }}</span>
              </div>
              <span class="sep"></span>
              {{-- <div class="post-category">Insights</div> --}}
              <span class="sep"></span>
              <time class="post-date" datetime="2022-02-28T14:24:09+05:30" itemprop="datePublished">{{ $each_post->author_id }}
                </time>
            </footer>
          </div>
        </a>
      </li>

    @endforeach

  </div>


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
  <script type="text/javascript">
    jQuery(document).ready(function () {
      jQuery('body').fitVids();
    });
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
    integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
    data-cf-beacon='{"rayId":"777402940b99c4ca","token":"c63e2106c21e48338a86de0c5800ab7a","version":"2022.11.3","si":100}'
    crossorigin="anonymous"></script>
  
</body>