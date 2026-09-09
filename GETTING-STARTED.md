# Make the starter site your own

The example text and AI-generated imagery are fictional. No pages, contact
addresses or forms are installed automatically. The site title, navigation and
posts come from your WordPress site. Keep a backup before editing an existing site.

Open **Appearance > Ozeki Corporate Guide** for a short guide and links to the
standard editing screens. It does not import content, change settings or redirect
you after activation. The complete guide is also available there.

## 1. Replace the photograph and text

1. Open **Appearance > Editor > Templates > Front Page**. The Front Page template
   controls this homepage, even when a static page is selected in Reading settings.
2. Open **List View** (Document Overview) and select the heading, paragraph or Image
   block you want to edit. Type your own wording. Labels may differ by WP version.
3. Select the Image block, then **Replace > Upload** or **Open Media Library**.
4. Wait until processing finishes, then update **Alternative text** to describe the
   new image's purpose. Leave it empty only when the image is decorative.
5. Save, reload and check both desktop and mobile. The hero uses a cropped 5:4
   frame, so keep the main subject near the centre. Keep the original image.

**Upload problems:** check the maximum file size in **Media > Add New Media File**.
Hosting, PHP, multisite and server settings can affect that limit; it is not a
theme restriction. For example, our clean test server allowed 2 MB. Reduce the
image's dimensions or compression file size, or ask your hosting administrator.
Changing an extension is not compression. Do not change server security settings
just to upload an image. Wait for completion before setting its alternative text.

## 2. Create pages and connect the menu

1. Open **Pages > Add New** and choose **Ozeki Corporate — About**, **Services**,
   **Company** or **Contact**. If no starter chooser opens, use **+ > Patterns**
   and search for **Ozeki Corporate** (category **Ozeki Corporate pages**).
2. Give the page its own title and use the default page template. It already
   displays the title; the pattern supplies the body, not another H1 or header.
3. Replace the example text and images and save a draft. Pages are independent:
   changing a service on one page does not change the homepage automatically.
4. Preview before publishing. Contact needs your real contact method first.
5. In **Appearance > Editor**, edit the **Header** template part. Use List View
   to select its **Navigation** block. The initial **Pages** submenu contains a
   **Page List**, which may automatically show published pages. Choose its Edit
   or conversion control, when offered, to work with individual links.
6. Select the desired published pages, arrange them using List View / Move up /
   Move down, and save. Remove unwanted links, not the pages themselves. The menu
   and header can be shared across pages. Verify the public menu on a phone.

The starters use normal blocks and do not install a demonstration website. They
can be edited or removed like other content. No developer script is required.

### Pages or posts?

Use **Pages > Add New** for About, Services, Company and Contact. Use **Posts >
Add New** for dated news and articles. Published posts appear in news listings;
the shipped homepage shows the three latest posts, newest first. Pages do not
enter that feed.

For a separate news index, create an empty **News** page, select it as the **Posts
page** in **Settings > Reading** when using a static homepage, then link it from
Navigation. WordPress displays the post listing there, not that page's editor
body. Edit the homepage itself in the Front Page template.

Keep reference notes and unfinished work as drafts or private content. Check
visibility while logged out. Published pages may also enter the initial Page List
menu automatically. Removing a menu link or news section does not unpublish the
content. Change its visibility or move that specific item to Trash. Prefer Trash
to permanent deletion when you might need to recover it.

## 3. Set up the contact destination

The initial **Start a conversation** section is text only. It neither sends
inquiries nor creates a contact page.

1. Create and publish a **Contact** page with real contact details you intend to
   publish, or a contact form from a plugin you have configured.
2. Return to the Front Page template and select the contact section in List View.
   Choose **Edit pattern** if the editor only allows changing existing content.
3. Add a **Buttons** block inside that section. Name the button **Contact us**.
4. Use the button's **Link** control to find and select your published Contact
   page. Apply the link and save the template.
5. Open the homepage while logged out and follow the button. For forms, test both
   submission and actual delivery to the intended inbox separately.

An email button can instead use `mailto:` followed by your real business address.
It opens the visitor's email app and does not send mail itself. Do not leave a
dead button, an example address or an invented contact destination in a live site.

## 4. Review before publishing

Replace company details, review navigation and WordPress's initial sample post
and page yourself, and remove the example disclosure only after replacing the
fictional content. Check the company table with your actual labels and long text
on a phone. Japanese Refined changes typography, not the language of the content.

- Check every button and navigation link while logged out.
- Verify photo crops, alternative text, phone layout and keyboard operation.
- Reload the editor to confirm changes were saved, and keep a backup.
- The homepage news section uses your posts. If not needed, remove that section
  in the Front Page template; removing the display does not delete the posts.

## 日本語での操作の要点

「外観 → Ozeki Corporate Guide」から、管理画面内の案内を開けます。
この案内だけでページが作成されたり、設定が変更されたりすることはありません。

### 写真・文章の差し替え

1. 「外観 → エディター → テンプレート → フロントページ」を開きます。
   このテーマのトップページは、このテンプレートで編集します。
2. リスト表示から見出し・段落・画像を選び、文章を変更します。
3. 画像ブロックの「置換」からアップロード、またはメディアライブラリを選択します。
4. 処理完了後に、新しい画像に合う「代替テキスト」を設定して保存します。
   情報を伝えない装飾画像なら空欄にできます。
5. 再読み込みして保存結果を確認します。冒頭の写真は5:4の枠に切り抜かれるため、
   主役を中央寄りにした写真で、PCとスマートフォンの両方を確認してください。

アップロードできない場合は「メディア → 新規追加」の最大ファイルサイズを確認します。
上限はテーマではなくサーバーなどの設定によります。試験環境の2MBは一例です。
画像の縦横サイズや圧縮率を調整するか、サーバー管理者に相談してください。
拡張子の変更だけでは軽量化できません。原本は別に保存しておきましょう。

### 固定ページとメニューを揃える

1. 「固定ページ → 新規追加」で Ozeki Corporate の About（会社紹介）、
   Services（サービス）、Company（会社情報）、Contact（問い合わせ）を選びます。
   選択画面が出ない場合は「＋ → パターン」で Ozeki Corporate を検索します。
2. ページタイトルを付け、標準のページテンプレートを使います。パターンには
   本文だけが入るので、サイトのヘッダーやページタイトルを重ねて追加する必要はありません。
3. 見本文・画像を差し替え、まず下書き保存・プレビューします。各ページの内容は独立しており、
   サービスを変更してもトップページの内容が自動で変わるわけではありません。
4. サイトエディターでヘッダーを開き、リスト表示からナビゲーションを選びます。
   最初の Pages 内のページリストは公開ページを自動表示する場合があります。
   編集・変換の操作で個別リンクにすると、必要なページと順番を指定できます。
5. リンクの上下移動などで順番を整えて保存します。不要なリンクを外しても、
   固定ページ自体は削除されません。スマホとログアウト状態でも確認しましょう。

### 固定ページと投稿を使い分ける

会社紹介・サービス・会社情報・問い合わせは「固定ページ → 新規追加」、ニュースや
技術記事は「投稿 → 新規追加」で作ります。公開した投稿は記事一覧に入り、配布版の
トップページには新しい順に3件表示されます。固定ページはニュース一覧には入りません。

独立した記事一覧が必要なら、本文が空の「お知らせ」固定ページを作り、
「設定 → 表示設定」で固定フロントページを使う場合の「投稿ページ」に指定して、
メニューへリンクを追加します。このページには本文ではなく投稿一覧が表示されます。
トップページの編集場所は引き続きフロントページのテンプレートです。

参照用メモや未完成の記事は下書き・非公開にして、ログアウト状態で確認します。
公開した固定ページも初期メニューのページリストに自動で入る場合があります。
メニューのリンクやニュース欄を外すだけでは非公開になりません。公開状態を変更するか、
その記事・ページだけをゴミ箱へ移してください。取り消せるよう、完全削除は慎重に行います。

### 問い合わせ先を設定する

最初の「Start a conversation」は見本文だけで、フォームや送信機能はありません。

1. 公開してよい連絡先、または設定済みプラグインのフォームを載せた
   「お問い合わせ」固定ページを作り、公開します。
2. フロントページのリスト表示で問い合わせのセクションを選びます。
   内容だけの編集画面なら「パターンを編集」を選びます。
3. その中に「ボタン」ブロックを追加し、「お問い合わせ」などの名前にします。
4. ボタンのリンク設定で、作成した固定ページを検索・選択して適用し、保存します。
5. ログアウト状態でもリンクを確認します。フォームの場合は送信と実際のメール到着も
   別に確認してください。テーマ自体がメールを届けるわけではありません。

メールへのリンクなら `mailto:` に実際の業務用アドレスを続けて指定できます。
訪問者のメールアプリを開く仕組みで、自動送信ではありません。
架空の連絡先や未設定のボタンを、そのまま公開しないようにしてください。

会社情報・メニュー・最初のサンプル投稿も確認します。Japanese Refinedは書体や余白の
設定であり自動翻訳ではありません。文章はそのまま日本語へ差し替えられます。

ニュースが不要ならフロントページの該当セクションを外せます。投稿自体は削除されません。
公開前に、見本のままの連絡先、リンク未設定のボタン、画像の代替テキスト、保存状態、
キーボード操作も確認してください。ページ作成に開発用スクリプトは不要です。

## WordPress reference

- [Image block](https://wordpress.org/documentation/article/image-block/)
- [Link control](https://wordpress.org/documentation/article/link-editing/)
- [Buttons block](https://wordpress.org/documentation/article/buttons-block/)
