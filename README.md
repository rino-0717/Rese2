# アプリケーション名
Rese
- 概要説明：ある企業のグループ会社の飲食店予約サービス
![飲食店一覧]<img width="1437" alt="shop_all" src="https://github.com/user-attachments/assets/304a2b5b-a7a7-4dfd-990a-589bf77235f3">


## 作成した目的
外部の飲食店予約サービスは手数料を取られるので自社で予約サービスを持ちたいため

## アプリケーションURL
- 会員登録：http://localhost:90/register
- ログイン：http://localhost:90/login
- 飲食店一覧：http://localhost:90/
- 飲食店詳細：http://localhost:90/detail{shop_id}
- マイページ：http://localhost:90/mypage

## 他のリポジトリ

## 機能一覧
会員登録機能、ログイン機能、いいね機能（＋取消し）、検索機能、予約機能（＋取消し）

## 使用技術（実行環境）
- PHP 7.4.9
- Laravel 8.83.27
- Mysql 8.0.26

## テーブル設計図
![テーブル仕様書](https://github.com/user-attachments/assets/7c96b9f1-211d-4a99-9c4c-148a33675a5d)

## ER図
![ER図](https://github.com/user-attachments/assets/f3a83dcd-01d1-4880-8baf-0a966f63c0ef)


# 環境構築
Dockerビルド
- 1.git clone git@github.com:rino-0717/Rese2.git
- 2.DockerDesktopアプリを立ち上げる
- 3.docker-compose up -d --build

# Laravel環境構築
- 1.docker-compose exec php bash
- 2.composer install
- 3.「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成
- 4..envに以下の環境変数を追加
    - DB_CONNECTION=mysql
    - DB_HOST=mysql
    - DB_PORT=3306
    - DB_DATABASE=laravel_db
    - DB_USERNAME=laravel_user
    - DB_PASSWORD=laravel_pass
- 5.アプリケーションキーの作成：php artisan key:generate
- 6.マイグレーションの実行：php artisan migrate
- 7.シーディングの実行：php artisan db:seed

# アカウントの種類（テストユーザー）
- ユーザー名：test,test2,test3,test4,test5,test6,test7,test8
- メールアドレス：test@test,test2@test,test3@test,test4@test,test5@test,test6@test,test7@test,test8@test
- パスワード：test@test,test2@test,test3@test,test4@test,test5@test,test6@test,test7@test,test7@test

# URL
- 開発環境：http://localhost/
- phpMyAdmin：http://localhost:8080/