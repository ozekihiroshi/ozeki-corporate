<?php
/** Optional, read-only onboarding. No imports, remote requests or saved options. */
if (!defined('ABSPATH')) { exit; }

function ozeki_corporate_add_guide_page(): void {
    add_theme_page(
        __('Ozeki Corporate Guide', 'ozeki-corporate'),
        __('Ozeki Corporate Guide', 'ozeki-corporate'),
        'edit_theme_options',
        'ozeki-corporate-guide',
        'ozeki_corporate_render_guide'
    );
}
add_action('admin_menu', 'ozeki_corporate_add_guide_page');

function ozeki_corporate_render_guide(): void {
    if (!current_user_can('edit_theme_options')) {
        wp_die(esc_html__('You do not have permission to view this guide.', 'ozeki-corporate'));
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('Make this website your own', 'ozeki-corporate'); ?></h1>
        <p><?php esc_html_e('Start with the homepage, add the pages you need, then connect them. These links open standard WordPress screens; this guide does not create content or change settings.', 'ozeki-corporate'); ?></p>
        <p><a href="#ozeki-corporate-guide-ja" lang="ja"><?php esc_html_e('日本語の操作ガイド', 'ozeki-corporate'); ?></a></p>
        <div class="card">
            <h2><?php esc_html_e('1. Personalize the homepage', 'ozeki-corporate'); ?></h2>
            <p><?php esc_html_e('Open the Site Editor, then Templates > Front Page. This template controls the homepage even when Reading settings select a static page. Use List View to select text or an Image block. Choose Replace, wait for processing, then update Alternative text and Save.', 'ozeki-corporate'); ?></p>
            <p><?php esc_html_e('Check the maximum upload size in Media > Add New. It is a hosting limit, not a theme limit. Reduce large files or ask your host. The hero crops to 5:4; check the subject on a phone. Keep the original photo.', 'ozeki-corporate'); ?></p>
            <p><a class="button" href="<?php echo esc_url(admin_url('site-editor.php')); ?>"><?php esc_html_e('Open Site Editor', 'ozeki-corporate'); ?></a></p>
        </div>
        <div class="card">
            <h2><?php esc_html_e('2. Add your supporting pages', 'ozeki-corporate'); ?></h2>
            <p><?php esc_html_e('Add a page and choose an Ozeki Corporate starter: About, Services, Company or Contact. If no chooser appears, open the block inserter (+), select Patterns and search for Ozeki Corporate. Give the page a title, replace example copy and images, and save a draft before publishing. Use the default page template; it supplies the page title.', 'ozeki-corporate'); ?></p>
            <p><?php esc_html_e('Patterns are starting content, not synchronized demo pages. Editing one page does not update other pages or the homepage. No page is created until you use the editor.', 'ozeki-corporate'); ?></p>
            <p><a class="button" href="<?php echo esc_url(admin_url('post-new.php?post_type=page')); ?>"><?php esc_html_e('Add a page', 'ozeki-corporate'); ?></a> <a href="<?php echo esc_url(admin_url('edit.php?post_type=page')); ?>"><?php esc_html_e('Review existing pages', 'ozeki-corporate'); ?></a></p>
        </div>
        <div class="card">
            <h2><?php esc_html_e('3. Connect navigation and contact links', 'ozeki-corporate'); ?></h2>
            <p><?php esc_html_e('In the Site Editor, edit the Header template part and select Navigation using List View. The initial Pages submenu contains a Page List, which can automatically include published pages. Use its Edit/convert control to manage individual links when offered. Keep only the pages you want, arrange their order, and Save. Removing a navigation link does not delete its page.', 'ozeki-corporate'); ?></p>
            <p><?php esc_html_e('Publish your Contact page with real contact details or a configured form plugin. In the homepage contact section, add a Buttons block, name it Contact us and use Link to select that page. If only content fields are available, choose Edit pattern first. A mailto: link opens a visitor’s mail app; the theme does not send inquiries. Test links logged out and test form delivery separately.', 'ozeki-corporate'); ?></p>
        </div>
        <div class="card">
            <h2><?php esc_html_e('4. Choose typography and review news', 'ozeki-corporate'); ?></h2>
            <p><?php esc_html_e('Use Pages for About, Services, Company and Contact. Use Posts for news and articles: published posts enter news listings, and the starter homepage shows the three latest posts. Keep reference notes as drafts or private content. Removing a menu link does not make content private; change its visibility or move the specific item to Trash.', 'ozeki-corporate'); ?></p>
            <p><a href="<?php echo esc_url(admin_url('post-new.php')); ?>"><?php esc_html_e('Write a news post', 'ozeki-corporate'); ?></a> | <a href="<?php echo esc_url(admin_url('edit.php')); ?>"><?php esc_html_e('Review posts', 'ozeki-corporate'); ?></a></p>
            <p><?php esc_html_e('In the Site Editor, open Styles to choose the default look or Japanese Refined. This changes presentation, not language. The homepage news section displays your posts. Review the initial sample post and page yourself; keep, replace or remove them as appropriate. If you do not need news, remove that section from the Front Page template, not your posts.', 'ozeki-corporate'); ?></p>
        </div>
        <div class="card">
            <h2><?php esc_html_e('5. Before you publish', 'ozeki-corporate'); ?></h2>
            <ul class="ul-disc">
                <li><?php esc_html_e('Replace fictional names, placeholder contact details, photos and example copy. Remove the example notice only after replacing that content.', 'ozeki-corporate'); ?></li>
                <li><?php esc_html_e('Check titles, site identity, navigation order and every destination, including contact links. Do not leave a button without a working link.', 'ozeki-corporate'); ?></li>
                <li><?php esc_html_e('Check desktop and phone layouts, image crops, alternative text and keyboard navigation. Read the pages while logged out.', 'ozeki-corporate'); ?></li>
                <li><?php esc_html_e('Save, reload and reopen the editor to verify your changes. Back up your site and test any form’s actual email delivery.', 'ozeki-corporate'); ?></li>
            </ul>
        </div>
        <div class="card" id="ozeki-corporate-guide-ja" lang="ja">
            <h2><?php esc_html_e('日本語の操作ガイド', 'ozeki-corporate'); ?></h2>
            <ol>
                <li><?php esc_html_e('トップページ：サイトエディターの「テンプレート → フロントページ」を編集します。通常の固定ページ本文とは別です。画像は「置換」し、処理完了後に代替テキストを設定します。アップロード上限はメディア画面で確認してください。', 'ozeki-corporate'); ?></li>
                <li><?php esc_html_e('固定ページ：新規追加で Ozeki Corporate の About（会社紹介）、Services（サービス）、Company（会社情報）、Contact（問い合わせ）を選びます。選択画面が出なければ「＋ → パターン」で Ozeki Corporate を検索します。タイトルを付け、見本文を差し替え、まず下書き保存します。', 'ozeki-corporate'); ?></li>
                <li><?php esc_html_e('メニュー：ヘッダーのナビゲーションをリスト表示で選びます。最初の Pages 内のページリストは公開ページを自動表示する場合があります。編集・変換で個別リンクにし、必要なページと順番を選んで保存します。リンクを外しても固定ページ自体は削除されません。', 'ozeki-corporate'); ?></li>
                <li><?php esc_html_e('問い合わせ：実際の連絡先や設定済みフォームを載せた固定ページを公開し、トップページのボタンからリンクします。テーマ自体に送信機能はありません。フォーム送信とメール到着は別に試験してください。', 'ozeki-corporate'); ?></li>
                <li><?php esc_html_e('公開前：会社名・写真・見本文・仮の連絡先・サンプル投稿を確認します。PCとスマホ、ログアウト状態、キーボード操作、保存後の再表示を確認してバックアップを取ります。Japanese Refined は書体や余白の設定で、自動翻訳ではありません。', 'ozeki-corporate'); ?></li>
                <li><?php esc_html_e('投稿と固定ページ：会社紹介・サービス・会社情報・問い合わせは固定ページ、ニュースや記事は投稿で作ります。公開した投稿は記事一覧と配布版トップページの最新3件に表示されます。参照用メモは下書きか非公開にします。メニューのリンクを外すだけでは非公開になりません。不要な記事は対象だけをゴミ箱へ移してください。', 'ozeki-corporate'); ?></li>
            </ol>
        </div>
        <p><a href="<?php echo esc_url(get_parent_theme_file_uri('GETTING-STARTED.md')); ?>"><?php esc_html_e('Read the complete English / Japanese guide (Markdown)', 'ozeki-corporate'); ?></a></p>
    </div>
    <?php
}
