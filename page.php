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
  <body  class="js-body">
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
        <div class="l-main--visual p-page-visual wrapper">
          <h2 class="c-main-font-visual">ショップについて</h2>
        </div>
        <div class="l-container wrapper">
          <div class="p-introduction">
            <h2 class="c-title-font">見出しh2</h2>
            <p class="c-main-text u-mb">
              Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
            </p>

            <h3 class="c-title-sub--h3 u-mb">見出しh3</h3>
            <h4 class="c-title-sub--h4 u-mb">見出しh4</h4>
            <h5 class="c-title-sub--h5 u-mb">見出しh5</h5>
            <h6 class="c-title-sub--h6 u-mb">見出しh6</h6>
            <blockquote class="c-quote wrapper" cite="https://###">
              <p>
                Blockquote:引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              </p>
              <p>出典元：<a href="###">〇〇〇〇</a></p>
            </blockquote>
          </div>
          <div class="p-introduction--product">
            <img class="c-image--wide" src="./img/cooked-foods.jpg" alt="出来上がりの写真" />
            <section class="p-introduction__product1">
              <img class="c-image--small" src="./img/cooked-foods.jpg" alt="商品1" />
              <p class="c-text">
                　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります
              </p>
            </section>
            <section class="p-introduction__product2">
              <img class="c-image--small" src="./img/cooked-foods.jpg" alt="商品1" />
              <p class="c-text">
                　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります
              </p>
            </section>
            <img class="c-image--normal" src="./img/cooked-foods.jpg" alt="出来上がりの写真" />
          </div>
          <div class="p-introduction--collection">
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
          </div>
          <div class="p-list">
            <nav class="p-list__list1">
              <ol class="p-list__list--ver1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ol>
              <ol class="p-list__list--ver2">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
              </ol>
              <ol class="p-list__list--ver1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ol>
            </nav>
            <nav class="p-list__list2">
              <ul class="p-list__list--ver1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ul>
              <ul class="p-list__list--ver2">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
              </ul>
              <ul class="p-list__list--ver1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ul>
            </nav>
          </div>
          <div class="c-code u-mb">
            <p>
              &lt;html&gt;<br />&emsp;&emsp;&lt;head&gt;<br />&emsp;&emsp;&lt;/head&gt;<br />&emsp;&emsp;&lt;body&gt;<br />&emsp;&emsp;&lt;/body&gt;<br />&lt;/html&gt;
            </p>
          </div>
          <table class="c-table u-mb-large">
            <tr>
              <td class="c-table__td1">テーブル</td>
              <td class="c-table__td2">テーブル</td>
            </tr>
            <tr>
              <td class="c-table__td1">テーブル</td>
              <td class="c-table__td2">テーブル</td>
            </tr>
            <tr>
              <td class="c-table__td1">テーブル</td>
              <td class="c-table__td2">テーブル</td>
            </tr>
            <tr>
              <td class="c-table__td1">テーブル</td>
              <td class="c-table__td2">テーブル</td>
            </tr>
            <tr>
              <td class="c-table__td1">テーブル</td>
              <td class="c-table__td2">テーブル</td>
            </tr>
          </table>
          <button class="c-button--large u-mb">ボタン</button>
          <p class="c-bold">boldboldboldboldbold</p>
        </div>
        <!--l-containerのdiv-->
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
