<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Hamburger</title>
    <meta name="description" content="ハンバーガーサイト" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=M+PLUS+1&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/common.css" />
  </head>
  <body class="js-body">
    <div class="l-main-contents">
      <div class="l-right-side">
        <div class="p-foodmenu-title--pc c-menu">Menu</div>
        <nav class="p-foodmenu js-foodmenu">
          <button class="c-menu--close js-foodmenu--close">
            <span class="c-menu--close__bar"></span>
            <span class="c-menu--close__bar"></span>
          </button>
          <ul>
            <li class="p-foodmenu__list1">
              <a href="#">バーガー</a>
              <ul>
                <li class="p-foodmenu__list2"><a href="#">ハンバーガー</a></li>
                <li class="p-foodmenu__list2"><a href="#">チーズバーガー</a></li>
                <li class="p-foodmenu__list2"><a href="#">テリヤキバーガー</a></li>
                <li class="p-foodmenu__list2"><a href="#">アボカドバーガー</a></li>
                <li class="p-foodmenu__list2"><a href="#">フィッシュバーガー</a></li>
                <li class="p-foodmenu__list2"><a href="#">ベーコンバーガー</a></li>
              </ul>
            </li>
            <li class="p-foodmenu__list1">
              <a href="#">サイド</a>
              <ul class="p-foodmenu__ul">
                <li class="p-foodmenu__list2"><a href="#">ポテト</a></li>
                <li class="p-foodmenu__list2"><a href="#">サラダ</a></li>
                <li class="p-foodmenu__list2"><a href="#">ナゲット</a></li>
                <li class="p-foodmenu__list2"><a href="#">コーン</a></li>
              </ul>
            </li>
            <li class="p-foodmenu__list1">
              <a href="#">ドリンク</a>
              <ul class="p-foodmenu__ul">
                <li class="p-foodmenu__list2"><a href="#">コーラ</a></li>
                <li class="p-foodmenu__list2"><a href="#">ファンタ</a></li>
                <li class="p-foodmenu__list2"><a href="#">オレンジ</a></li>
                <li class="p-foodmenu__list2"><a href="#">アップル</a></li>
                <li class="p-foodmenu__list2"><a href="#">紅茶（Ice/Hot）</a></li>
                <li class="p-foodmenu__list2"><a href="#">コーヒー（Ice/Hot）</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="p-foodmenu--background js-foodmenu--background"></div>
      </div>
      <div class="l-left-side">
        <header class="l-header wrapper">
          <div class="p-foodmenu-title--sp c-menu js-foodmenu-title--sp">Menu</div>
          <h1 class="c-logo--header u-mb-large">Hamburger</h1>
          <form method="get" action="#" class="p-search-box">
            <div class="p-search-box__text">
              <input class="c-input-text" type="text" value="検索ワードを入力" size="20" />
              <i class="c-icon--loupe"></i>
            </div>
            <input class="c-button" type="submit" value="検索" />
          </form>
        </header>
        <div class="l-main p-archive-visual">
          <div class="l-main p-archive-visual__layer">
            <div class="p-archive-visual__text wrapper">
              <h2 class="c-main-font--archive-large">Menu:</h2>
              <p class="c-main-font--archive-small">チーズバーガー</p>
            </div>
          </div>
        </div>
        <div class="l-container wrapper">
          <div class="p-archive-section--main">
            <h2 class="c-title-font">小見出しが入ります</h2>
            <p class="c-main-text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
          <div class="p-archive-menu-main">
            <section class="p-archive-menu--cheseburger">
              <img
                class="p-archive-menu__image"
                src="./img/cheseburger.jpg"
                alt="チーズバーガーの写真"
              />
              <div class="p-archive-menu__textbox wrapper">
                <h3 class="p-archive-menu__title">チーズバーガー</h3>
                <h4 class="p-archive-menu__sub-title">小見出しが入ります</h4>
                <p class="p-archive-menu__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <div class="c-button--archive">詳しく見る</div>
              </div>
            </section>
            <section class="p-archive-menu--doublecheseburger">
              <img
                class="p-archive-menu__image"
                src="./img/cheseburger.jpg"
                alt="ダブルチーズバーガーの写真"
              />
              <div class="p-archive-menu__textbox wrapper">
                <h3 class="p-archive-menu__title">ダブルチーズバーガー</h3>
                <h4 class="p-archive-menu__sub-title">小見出しが入ります</h4>
                <p class="p-archive-menu__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <div class="c-button--archive">詳しく見る</div>
              </div>
            </section>
            <section class="p-archive-menu--specialcheseburger">
              <img
                class="p-archive-menu__image"
                src="./img/cheseburger.jpg"
                alt="スペシャルチーズバーガーの写真"
              />
              <div class="p-archive-menu__textbox wrapper">
                <h3 class="p-archive-menu__title">スペシャルチーズバーガー</h3>
                <h4 class="p-archive-menu__sub-title">小見出しが入ります</h4>
                <p class="p-archive-menu__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <div class="c-button--archive">詳しく見る</div>
              </div>
            </section>
          </div>
          <!--p-archive-menuのdiv-->
        </div>
        <div class="p-pagenavi wrapper">
          <p class="c-iphonepage-previous">&lt;&lt; 前へ</p>
          <p class="c-iphonepage-next">次へ &gt;&gt;</p>
          <p class="c-tabletpage-text">page 1/10</p>
          <p class="c-tabletpage-arrow--previous">&lt;&lt;</p>
          <p class="c-tabletpage-number c-tabletpage-number--first">1</p>
          <p class="c-tabletpage-number">2</p>
          <p class="c-tabletpage-number">3</p>
          <p class="c-tabletpage-number">4</p>
          <p class="c-tabletpage-number">5</p>
          <p class="c-tabletpage-number">6</p>
          <p class="c-tabletpage-number">7</p>
          <p class="c-tabletpage-number">8</p>
          <p class="c-tabletpage-number">9</p>
          <p class="c-tabletpage-arrow--next">&gt;&gt;</p>
        </div>
      </div>
      <!--l-left-sideのdiv-->
    </div>
    <!--l-main-contentsのdiv-->
    <footer class="l-footer">
      <p class="c-info">ショップ情報<span> | </span>ヒストリー</p>
      <p class="c-copyright">Copyright: RaiseTech</p>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/92cec73944.js" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
  </body>
</html>
