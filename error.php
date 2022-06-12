<?php
// ①HTTPエラー
// ファイルがない
// ・HTTPステータスコードを見れば、何のエラーかわかる

// ②DB関連のエラー
// データベース登録情報がテーブル定義と異なる
// ・try~catchでエラーメッセージを確認する
// ・ログファイルにログを出力する

// ③PHPエラー
// スペルミス、
// ・エラーメッセージを確認する
// ・ログを確認する