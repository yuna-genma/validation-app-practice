# validation-app-practice

## 概要

COACHTECH 教材 Tutorial 9-6「バリデーション ハンズオン演習」で作成した成果物です。
フォームリクエストを使ったバリデーションと日本語エラーメッセージを備えた「ユーザー登録フォーム」を作成した。

## 使用技術

- PHP 8.x
- Laravel 10.x
- FormRequest / バリデーションルール
- phpmyadmin

## 学んだこと

- エラーメッセージの日本語化<br>

1. 言語ファイルをインストールする

    ```php
    sail composer require laravel-lang/common --dev
    sail artisan lang:add ja
    ```

2. デフォルトの言語を日本語に設定する

    ```php
    'locale' => 'ja',
    ```

- phpmyadminでユーザーのデータが登録されているか確認した。

## 動作確認

`http://localhost/register` にアクセス
