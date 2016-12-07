<?php
//ウィジェット
register_sidebar();
//カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );
//カスタムヘッダー
add_theme_support('custom-header');
//パスワードページの保護中の文字消し
add_filter('protected_title_format', 'remove_protected');
function remove_protected($title) {
       return '%s';
}