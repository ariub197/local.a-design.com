<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@ari19702">
  <meta property="og:url" content="https://arisumi-design.com/">
  <meta property="og:title" content="ホームページ制作から定期的な更新まで承ります">
  <meta property="og:description" content="都内で個人で活動するフリーランスウェブコーダー＆デザイナー。
  ホームページ制作、サイトリニューアル、ウェブサイト更新をはじめとし、ロゴデザインなども承ります。お客様の運営方針に沿ったより良いWEBサイトのご提案いたします。">
  <meta name="keywords" content="Web,コーダー,デザイン,東京,Arisumi">
  <meta property="og:image" content="">
  <title>Arisumi Design</title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/public/assets/img/favicon.ico"
    type="image/x-icon">
  <?php wp_head(); ?>
</head>

<body>
  <header id="header">
    <div class="l-header">
      <div class="l-header__pc">
        <h1 class="l-header__logo"><a href="/"><img
              src="<?php echo get_template_directory_uri(); ?>/public/assets/img/Logo Design.svg"
              alt="Arisumi Design logo"></a>
        </h1>
        <div class="l-header__nav">
          <ul class="c-header__nav">
            <li><a href="/" class="c-header__nav-item">Top<span>トップ</span></a></li>
            <li><a href="/profile/" class="c-header__nav-item">Profile<span>プロフィール</span></a></li>
            <li><a href="/works/" class="c-header__nav-item">Works<span>制作実績</span></a></li>
            <li><a href="/news/" class="c-header__nav-item">News<span>お知らせ</span></a></li>
          </ul>
        </div>
        <div class="c-header__sns-links">
          <div class="c-header__sns-link"><a href="https://twitter.com/ari19702" class="c-header__sns-link--twitter"><i
                class="fa-brands fa-twitter"></i></a></div>
          <div class="c-header__sns-link"><a href="https://github.com/ariub197" class="c-header__sns-link--github">
              <svg height="32" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="32"
                data-view-component="true" class="octicon octicon-mark-github v-align-middle">
                <path
                  d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95
              0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08
              2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82
              1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z">
                </path>
              </svg>
            </a></div>
        </div>
        <div class="l-header__contact"><a href="/contact/" class="c-contact-button">
            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/email.svg" alt="">お問い合わせ</a>
        </div>
      </div>
    </div>
    <div class="l-header__sp">
      <h1 class="l-header__logo-sp"><a href="/"><img
            src="<?php echo get_template_directory_uri(); ?>/public/assets/img/Logo Design.svg"
            alt="Arisumi Design logo"></a>
      </h1>
      <div class="l-header__contact-sp"><a href="/contact/" class="c-contact-button-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/email.svg" alt=""><br></a>
      </div>
    </div>

    <div id="js-drawer" class="c-drawer-icon">
      <div class="c-drawer-icon__bars">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div class="c-drawer-content">
      <div class="c-drawer-content__items">
        <div class="c-drawer-content__item"><a href="/">Top</a></div>
        <div class="c-drawer-content__item"><a href="/profile/">Profile</a></div>
        <div class="c-drawer-content__item"><a href="/works/">Works</a></div>
        <div class="c-drawer-content__item"><a href="/news/">News</a></div>
      </div>
      <div class="c-header__sns-links-sp">
        <div class="c-header__sns-link"><a href="https://twitter.com/ari19702" class="c-header__sns-link--twitter"><i
              class="fa-brands fa-twitter"></i></a></div>
        <div class="c-header__sns-link"><a href="https://github.com/ariub197" class="c-header__sns-link--github">
            <svg height="32" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="32" data-view-component="true"
              class="octicon octicon-mark-github v-align-middle">
              <path
                d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95
            0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08
            2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82
            1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z">
              </path>
            </svg>
          </a></div>
      </div>
      <div class="l-drawer__contact-sp"><a href="/contact/" class="c-contact-button">
          <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/email.svg" alt="">お問い合わせ</a></div>
    </div>
  </header>
  <main>