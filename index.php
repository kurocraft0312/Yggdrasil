<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- OGP利用宣言 -->
    <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">
    <!-- BASIC -->
    <meta name="description" content="ページの説明文">
    <meta name="keywords" content="キーワード">
    <meta name="author" content="kurocraft0312">
    <!-- Win/Safari -->
    <meta name="format-detection" content="telephone=no,email=no,address=no">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <meta name="msapplication-TileColor" content="Win8+用のタイルカラー">
    <meta name="msapplication-TitleImage" content="Win8+用のタイル画像">
    <!-- CSRF対策 -->
    <meta name="csrf-param" content="">
    <meta name="csrf-token" content="">
    <!-- OGP -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="サイト名">
    <meta property="og:title" content="ページタイトル">
    <meta property="og:description" content="記事の抜粋文">
    <meta property="og:url" content="ページURL">
    <meta property="og:image" content="画像URL">
    <meta property="og:image:alt" content="画像の説明URL">
    <meta property="og:local" content="ja_JP">
    <!-- SNS -->
    <meta property="fb:app_id" content="APP-ID（15文字）">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Twitterユーザー名">
    <meta name="twitter:image" content="OGP画像のURL">
    <!-- canonical -->
    <link rel="canonical" href="">
    <!-- favicon -->
    <link rel="icon" href="./favicon.ico">
    <!-- Web Clip(Retina対応) -->
    <link rel="apple-touch-icon" href="">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Yggdrasil</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div id="title-header" class="container">
            <h1 class="site-title">サイト名</h1>
            <a href="tel:000-0000-0000" class="tel">000-0000-0000<p class="business-hours">営業時間：10:00～19:00</p></a>
            <div class="contact-btn">
                <a href="#" class="contact-btn-color">お問い合わせ</a>
            </div>
        </div>
        <div class="g-nav-area">
            <nav class="title-menu">
                <div class="container g-nav-wrap">
                    <ul class="g-nav">
                        <li class="g-nav-menu"><a href="#" class="">テスト1</a></li>
                        <li class="g-nav-menu"><a href="#" class="">テスト2</a></li>
                        <li class="g-nav-menu"><a href="#" class="">テスト3</a></li>
                        <li class="g-nav-menu"><a href="#" class="">テスト4</a></li>
                        <li class="g-nav-menu"><a href="#" class="">テスト5</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="top-eyecatch">
            <figure class="top-eyecatch-img">
                <img src="assets/img/top-eyecatch.jpg" class="top-eyecatch-image" alt="">
            </figure>
        </div>
    </header>
    <main>
        <div id="business-solution-area" class="container">
            <!-- サイトの最新情報を表示するやつをこの辺に置きたい -->
            <section class="management-issues">
                <!-- テーマカスタマイザーで設定できるようにする項目 -->
                <h2>経営課題（顧客が抱える問題点を列挙する）</h2>
                <p>◯◯株式会社では、～をすることで～します。</p>
                <ul class="business-mission">
                    <li class="business-mission-list">
                        <!-- ここはアイコンフォントにしたい -->
                        <img src="" alt="">
                        <h3>問題点1</h3>
                        <p class="business-mission-contents">問題内容1問題内容1問題内容1問題内容1問題内容1問題内容1問題内容1問題内容1問題内容1問題内容1問題内容1</p>
                    </li>
                    <li class="business-mission-list">
                        <img src="" alt="">
                        <h3>問題点2</h3>
                        <p class="business-mission-contents">問題内容2問題内容2問題内容2問題内容2問題内容2問題内容2問題内容2問題内容2問題内容2問題内容2問題内容2</p>
                    </li>
                    <li class="business-mission-list">
                        <img src="" alt="">
                        <h3>問題点3</h3>
                        <p class="business-mission-contents">問題内容3問題内容3問題内容3問題内容3問題内容3問題内容3問題内容3問題内容3問題内容3問題内容3問題内容3</p>
                    </li>
                </ul>
            </section>
            <section class="business-solution">
                <!-- テーマカスタマイザーで設定できるようにする項目 -->
                <h2>事業内容(解決策を提案)</h2>
                <p>◯◯株式会社では、～つの事業を展開しています。</p>
                <ul class="business-desc">
                    <li class="business-desc-list">
                        <img src="" alt="">
                        <h3>事業1</h3>
                        <p>事業内容1事業内容1事業内容1事業内容1事業内容1事業内容1事業内容1事業内容1事業内容1事業内容1事業内容1</p>
                    </li>
                    <li class="business-desc-list">
                        <img src="" alt="">
                        <h3>事業2</h3>
                        <p>事業内容2事業内容2事業内容2事業内容2事業内容2事業内容2事業内容2事業内容2事業内容2事業内容2事業内容2</p>
                    </li>
                    <li class="business-desc-list">
                        <img src="" alt="">
                        <h3>事業3</h3>
                        <p>事業内容3事業内容3事業内容3事業内容3事業内容3事業内容3事業内容3事業内容3事業内容3事業内容3事業内容3</p>
                    </li>
                </ul>
            </section>
            <!--この辺にタブメニュー名--><!-- テーマカスタマイザーで設定できるようにする項目 -->
            <!--この辺にカード型レイアウト-->
            <section class="works">
            <h2>実績一覧</h2>
            <div class="card-item-list">
                <div class="card-item">
                    <a href="#">
                        <img src="assets/img/slide1.jpg" alt="">
                        <p>ここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入ります</p>
                    </a>
                </div>
                <div class="card-item">
                    <a href="#">
                        <img src="assets/img/slide2.jpg" alt="">
                        <p>ここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入ります</p>
                    </a>
                </div>
                <div class="card-item">
                    <a href="#">
                        <img src="assets/img/slide3.jpg" alt="">
                        <p>ここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入ります</p>
                    </a>
                </div>
            </div>
            </section>
            <section class="cus-voice">
            <h2>お客様の声</h2>
                <div class="card-item-list">
                    <div class="card-item">
                        <a href="#">
                            <img src="assets/img/slide1.jpg" alt="">
                            <p>ここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入ります</p>
                        </a>
                    </div>
                    <div class="card-item">
                        <a href="#">
                            <img src="assets/img/slide2.jpg" alt="">
                            <p>ここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入ります</p>
                        </a>
                    </div>
                    <div class="card-item">
                        <a href="#">
                            <img src="assets/img/slide3.jpg" alt="">
                            <p>ここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入りますここにタイトルが入ります</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="companyinfo">
            <h2>お知らせ</h2>
                <p class="companyinfodesc">○○の最新情報です。</p>
                <ul>
                    <li class="companyinfobox">
                        <a href="#" class="companyinfolist">
                            <div class="dateinfo">2020年01月20日</div>
                            <div class="infocontents">最新のお知らせ最新のお知らせ</div>
                        </a>
                    </li>
                    <li class="companyinfobox">
                        <a href="#" class="companyinfolist">
                            <div class="dateinfo">2020年01月20日</div>
                            <div class="infocontents">最新のお知らせ最新のお知らせ</div>
                        </a>
                    </li>
                    <li class="companyinfobox">
                        <a href="#" class="companyinfolist">
                            <div class="dateinfo">2020年01月20日</div>
                            <div class="infocontents">最新のお知らせ最新のお知らせ</div>
                        </a>
                    </li>
                    <li class="companyinfobox">
                        <a href="#" class="companyinfolist">
                            <div class="dateinfo">2020年01月20日</div>
                            <div class="infocontents">最新のお知らせ最新のお知らせ</div>
                        </a>
                    </li>
                    <li class="companyinfobox">
                        <a href="#" class="companyinfolist">
                            <div class="dateinfo">2020年01月20日</div>
                            <div class="infocontents">最新のお知らせ最新のお知らせ</div>
                        </a>
                    </li>
                    <li class="companyinfobox">
                        <a href="#" class="companyinfolist">
                            <div class="dateinfo">2020年01月20日</div>
                            <div class="infocontents">最新のお知らせ最新のお知らせ</div>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </main>
    <!-- この辺にページネーションほしい -->
    <footer class="site-footer">
        <div class="container">
            <div class="copyright">
                <!-- フッターのグロナビ -->
                <div class="g-nav-footer-area">
                    <nav class="title-menu">
                        <div class="container g-nav-wrap">
                            <ul class="g-nav">
                                <li class="g-nav-menu"><a href="#" class="">テスト1</a></li>
                                <li class="g-nav-menu"><a href="#" class="">テスト2</a></li>
                                <li class="g-nav-menu"><a href="#" class="">テスト3</a></li>
                                <li class="g-nav-menu"><a href="#" class="">テスト4</a></li>
                                <li class="g-nav-menu"><a href="#" class="">テスト5</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <p>&copy;2019 copyright</p>
                <p>WordPress Yggdrasil Theme is provided by "<a href="https://www.rat-post.com/" target="_blank">Ratpost</a>".</p>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script defer src="assets/js/lazysizes.min.js"></script>
    <script defer src="assets/js/index.js"></script>
    <?php wp_footer(); ?>
</body>
</html>