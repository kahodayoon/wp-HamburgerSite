<?php get_header(); //header.phpに切り取り。 ?>  
  <body  <?php body_class(); ?> class="js-body">
    <div class="l-main-contents">
      <div class="l-right-side">
      <?php get_sidebar(); ?>
      </div>
      <div class="l-left-side">
      <?php get_header('search'); //header-search.phpに切り取り ?>  
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
            <img class="c-image--wide" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="出来上がりの写真" />
            <section class="p-introduction__product1">
              <img class="c-image--small" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品1" />
              <p class="c-text">
                　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります
              </p>
            </section>
            <section class="p-introduction__product2">
              <img class="c-image--small" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品1" />
              <p class="c-text">
                　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります　テキストが入ります
              </p>
            </section>
            <img class="c-image--normal" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="出来上がりの写真" />
          </div>
          <div class="p-introduction--collection">
            <img class="c-image--collection" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="./img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品の写真" />
            <img class="c-image--collection" src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.jpg" alt="商品の写真" />
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
    <?php get_footer(); ?>