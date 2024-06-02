# お問い合わせフォーム

## 背景・目的
基礎学習タームの復習や自身の実力確認のために実施。

## アプリケーション機能の概要
ユーザー  
* 専用フォームからお問い合わせが可能（個人情報も一緒に記入）

管理者
* 管理者登録
* ユーザー情報の閲覧

## 環境構築
Dockerビルド
1. git clone
2. docker-compose up -d --build
3. リモートリポジトリ作成
4. リモートリポジトリとローカルリポジトリの紐付け

Larabel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envファイルを作成し、環境変数を設定
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed  

&ensp;※sudu chmod -R 777 src/*

## 使用技術
* laravel 8.83.8
* PHP 7.4.9
* MySQL 8.0.26
* nginx 1.21.1
* phpMyadmin
* diagrams.net

## ER図
![ER図]()

## URL

