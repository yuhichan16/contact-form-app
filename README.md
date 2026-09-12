<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# COACHTECHお問い合わせフォーム

# 作成者 城 優飛

## 概要

確認テストを受けて実力を測る目的のため作成しました

# 実装機能

## お問い合わせフォーム入力ページ

- 入力ページを表示する
- カテゴリの選択
- タグの選択
- 必須項目を入力後のバリデーション通過時と失敗時の処理
- 通過時はお問い合わせフォーム確認ページへ遷移する
- 失敗時は各エラーメッセージが表示される

## お問い合わせフォーム確認ぺージ

- 確認ページの表示
- 確認ページ内容を送信・修正

## サンクスページ

- サンクスページを表示する
- HOMEボタンを押すとお問い合わせフォーム入力ページに遷移する

## 管理者登録画面

- 登録ページの表示
- 必須項目を入力後のバリデーション処理
- 通過時はユーザー作成後に/adminへ遷移する
- 失敗時は各エラーメッセージが表示される
- ログイン画面に遷移する

## ログイン画面

- ログイン画面を表示する
- 必須項目を入力後のバリデーション処理
- 通過時は/adminへ遷移する
- 失敗時は各エラーメッセージが表示される
- レート制限: 5回/分 の実装
- ヘッダーのregisterを押すと管理者登録画面へ遷移する

## 管理画面(一覧)

- 管理画面一覧を表示する-> 未認証時は/loginにリダイレクト
- 検索条件を入力して検索
- 検索条件のリセット
- お問い合わせ詳細ページに遷移する
- タグを追加した時にバリデーションルール指定
- 通過時は新規タグが作成後タグ一覧に反映され/adminにリダイレクト
- 失敗時は各エラーメッセージが表示される
- タグ編集ページに遷移して現在のタグが入力された更新フォームに遷移する

## タグ編集ページ

- タグ名を変更後に更新したときのバリデーション処理
- 通過時はタグ名が更新後にタグ一覧に反映され、/adminにリダイレクト
- 失敗時は各エラーメッセージが表示される
- 管理画面に戻る
- タグの削除

## お問い合わせ詳細ぺージ

- 詳細ページが表示される
- 該当データが削除されて、/adminにリダイレクトされる
- 管理画面一覧に戻る

## ログアウト

- 管理画面ヘッダーの「logout」を押すとセッション破棄後にログアウト処理

## 環境構築手順

# Laravelプロジェクトの作成 (Laravel 10.x)

ubuntuを使用してLaravel 10.xをインストールします
docker run --rm \
 -u "$(id -u):$(id -g)" \
 -v "$(pwd):/var/www/html" \
 -w /var/www/html \
 -e COMPOSER_CACHE_DIR=/tmp/composer_cache \
 laravelsail/php82-composer:latest \
 composer create-project laravel/laravel:^10.0 contact-form-app

# Laravel Sailのインストール

## プロジェクトディレクトリへ移動

- cd contact-form-app

## Laravel Sailのインストール (コマンド使用)

docker run --rm \
 -u "$(id -u):$(id -g)" \
 -v "$(pwd):/var/www/html" \
 -w /var/www/html \
 -e COMPOSER_CACHE_DIR=/tmp/composer_cache \
 laravelsail/php82-composer:latest \
 composer require laravel/sail --dev

## Sailの設定ファイルをパブリッシュ (MySQLを選択)

docker run --rm \
 -u "$(id -u):$(id -g)" \
 -v "$(pwd):/var/www/html" \
 -w /var/www/html \
 -e COMPOSER_CACHE_DIR=/tmp/composer_cache \
 laravelsail/php82-composer:latest \
 php artisan sail:install --with=mysql

## ※M1/M2/M3 Mac（Apple Silicon）をお使いの方

Apple Silicon搭載のMacでは、`sail up -d`実行時に以下のエラーが発生することがあります：

```
no matching manifest for linux/arm64/v8
```

解決方法: `compose.yaml`を開き、mysqlサービスに`platform: 'linux/amd64'`を追加してください。
mysql:
image: 'mysql/mysql-server:8.0'
platform: 'linux/amd64' # ← この行を追加
ports:

# .env ファイルの設定

.env ファイルを開いて、データベースの接続状況が以下と一致しているか確認します。
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

> 重要: DB_HOST は localhost や 127.0.0.1 ではなく、Dockerコンテナ名である mysql を指定します。

# フロントエンドのセットアップ (Vite & Tailwind CSS)

本プロジェクトでは、フロントエンドのスタイリングにTailwind CSSを使用します。

## NPM依存パッケージのインストール

> 重要: sail npm install を実行する前に、必ずSailコンテナが起動していることを確認してください。
> sail npm install

## Tailwind CSSのインストール

sail npm install -D tailwindcss@^3.4.0 postcss autoprefixer
sail npm install alpinejs

## 設定ファイルの生成

sail npx tailwindcss init -p

## Tailwind CSSのテンプレートパス設定

tailwind.config.js を開き、以下のように設定します。
/** @type {import("tailwindcss").Config} \*/
export default {
content: [
"./resources/**/_.blade.php",
"./resources/\*\*/_.js",
"./resources/\*_/_.vue",
],
theme: {
extend: {},
},
plugins: [],
}

## 提供リポジトリのresourcesディレクトリと入れ替え

以下のリポジトリをクローンし、resourcesディレクトリを丸ごと入れ替えます。
git clone https://github.com/coachtech-prepared-file/Preparedblade-ConfirmationTest-ContactForm.git

入れ替え手順:
① Finderでプロジェクトフォルダを開きます。
open .
② プロジェクト内の resources フォルダを削除します。
③ クローンしたリポジトリ内の resources フォルダをプロジェクト直下にコピーします。

※コマンド操作に慣れている場合は rm -rf と cp -r でも可能ですが、誤削除を防ぐためFinderでの操作を推奨します。

## Vite開発サーバーの起動

sail npm run dev
注意: sail npm run dev は実行したままにしておく必要があります。

# phpMyAdminの追加

compose.yaml を開き、mysql サービスの後に以下の設定を追加してください。

compose.yaml に追加する内容:

    phpmyadmin:
        image: 'phpmyadmin:latest'
        ports:
            - '${FORWARD_PHPMYADMIN_PORT:-8080}:80'
        environment:
            PMA_HOST: mysql
            PMA_USER: '${DB_USERNAME}'
            PMA_PASSWORD: '${DB_PASSWORD}'
        networks:
            - sail
        depends_on:
            - mysql

# Sailの起動とエイリアス設定

## Sailをバックグラウンドで起動

./vendor/bin/sail up -d

## エイリアスを設定して 'sail' だけでコマンドを実行できるようにする

echo "alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'" >> ~/.zshrc

## または bash の場合

echo "alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'" >> ~/.bashrc

## シェルを再起動するか、新しいターミナルを開いてエイリアスを有効にする

exec $SHELL

# アプリケーションキーの設定

ルートで以下のコマンドを実行する
sail artisan key:generate

# データベースのマイグレーションと初期データの投入

- 以下のコマンドでテーブルを作成し、初期データを投入します。
  sail artisan migrate --seed

- 既存のデータベースをリセットしたい場合は以下を実行してください。
  sail artisan migrate:fresh --seed

⚠️ 日本語化／翻訳について:
— 日本語化は FormRequest の `messages()` と `lang/ja`（認証系）で行います。
`laravel-lang/*` 系の外部翻訳パッケージ（`composer require laravel-lang/...`）は導入しないでください。
同系パッケージは 2026年5月のサプライチェーン攻撃でマルウェア配布に悪用された経緯があり、本課題では不要です。

# 使用技術一覧

- Windows
- PHP: 8.2
- Laravel: 10.x
- DB: MySQL 8.0
- Webサーバー: Nginx
- フロントエンド: Vite, Tailwind CSS ^3.4.0
- 開発ツール: Docker, LaravelSail, phpMyAdmin

# 開発環境URL一覧

- (お問い合わせ入力ページ) http://localhost/contact
- (お問い合わせ確認ページ) http://localhost/contacts/confirm
- (サンクスページ) http://localhost/contacts/thanks
- (管理者登録画面) http://localhost/register
- (ログイン画面) http://localhost/login
- (管理画面) http://localhost/admin
- (お問い合わせ詳細ページ) http://localhost/admin/contacts/{}
- (タグ編集画面) http://localhost/admin/tags/{}/edit
