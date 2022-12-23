<?php
    use App\Models\Category;

    $all_categories = Category::all()->toArray();
?>

<a class="skip-link screen-reader-text" href="#primary">Skip to content</a>
<header id="masthead" class="site-header">
    <div class="container">
        <div>
            <nav class="drop-menu site-menu">
                <span><i class="icon-menu"></i></span>
                <ul id="menu-site-menu" class="menu">
                    <li id="menu-item-6890"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6890"><a
                            target="_blank" rel="noopener" href="#">About Us</a></li>
                    <li id="menu-item-6892"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6892"><a
                             rel="noopener" href="#" data-toggle="modal" data-target="#exampleModal">Contact Us</a></li>
                </ul>
            </nav>
            <nav class="drop-menu search-menu">
                <span><i class="icon-search"></i></span>
                <ul>
                    <li>
                        <form role="search" method="get" class="search-form" action="#">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search &hellip;" value=""
                                    name="s">
                            </label>
                            <input type="submit" class="search-submit" value="Search">
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="site-branding">
            <a href="/" rel="home" style="margin-left: 120px;">
                <img src="/images/cropped-Logo-V3.png" alt="">
            </a>
        </div>
        <div>
            <nav class="drop-menu drop-arrow lang-menu right-drop">
                <div class="social-share" style="margin-top: -20px"><a class="s-whatsapp"
                        href="https://www.youtube.com/@genz_lk" data-action="share/whatsapp/share" target="_blank"
                        rel="nofollow"><i class="icon-youtube"></i></a><a class="s-facebook"
                        href="https://www.facebook.com/genzteam.lk" target="_blank" rel="nofollow"><i
                            class="icon-facebook"></i></a><a class="s-twitter" href="#" target="_blank"
                        rel="nofollow"><i class="icon-twitter"></i></a>
                    <a class="s-twitter" href="tiktok.com/@gen_z.lk" target="_blank" rel="nofollow"><img
                            src="https://img.icons8.com/ios-glyphs/30/null/tiktok.png" /></a>
                    <a class="s-twitter" href="https://www.linkedin.com/in/gen-z-b24444256" target="_blank"
                        rel="nofollow"><img
                            src="https://img.icons8.com/ios-filled/30/null/linkedin-circled--v1.png" /></a>

                </div>
            </nav>
        </div>
    </div>
    <nav id="site-navigation" class="main-navigation">
        <div class="menu-category-menu-container">
            <ul id="primary-menu" class="menu">
                <li id="menu-item-183057"
                    class="{{ URL::current() == URL('/') ? 'menu-item menu-item-type-taxonomy menu-item-object-category menu-item-183057 current-menu-item' : '' }}">
                    <a href="/">GenZ පුවත්</a></li>
                @foreach ($all_categories as $category)
                <li id="menu-item-183057"
                    class="{{ URL::current() == URL('/posts/byCategory/'.$category['id']) ? 'menu-item menu-item-type-taxonomy menu-item-object-category menu-item-183057 current-menu-item' : '' }}">
                    <a href="{{ URL('/posts/byCategory/'.$category['id']) }}">{{ $category['categoryName'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>