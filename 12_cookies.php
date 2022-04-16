<?php
 /*
 cookieはブラウザ保存なのでセンシティブデータはクッキーに保存したくない。センシティブデータを扱う時は次項のsessionに保存する。
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.

  user's first name or their email address など、ログイン情報などではない、ただユーザを識別する情報だけを覚えさせとく。Hello Brad をwhen they come back to the website時に表示させるなd
*/

// Set cookie
setcookie('name', 'Brad', time() + 86400 * 30);//最後は切れる期限、86400秒後(1日後)✖️３０で１ヶ月後。

if(isset($_COOKIE['name'])){
  echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400);//クッキー消去