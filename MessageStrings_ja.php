<?php
/*
* INTER-Mediator Ver.@@@@2@@@@ Released @@@@1@@@@
*
*   by Masayuki Nii  msyk@msyk.net Copyright (c) 2010 Masayuki Nii, All rights reserved.
*
*   This project started at the end of 2009.
*   INTER-Mediator is supplied under MIT License.
*/
class MessageStrings_ja
{

    function getMessages()
    {
        return $this->messages;
    }

    function getMessageAs($num, $appending)
    {
        $msg = $this->messages[$num];
        $index = 1;
        foreach ($appending as $keyword)    {
            $msg = str_replace("@{$index}@", $keyword, $msg);
            $index++;
        }
        return $msg;
    }

    private $messages = array(
        1 => 'レコード番号',
        2 => '更新',
        3 => 'レコード追加',
        4 => 'レコード削除',
        5 => '追加',
        6 => '削除',
        7 => '保存',
        8 => 'ログインユーザ: ',
        9 => 'ログアウト',
        10 => "",
        11 => "ページ目へ",
        12 => '詳細',
        1001 => "他のユーザによってこのフィールドの値が変更された可能性があります。\n\n初期値=@1@\n変更値=@2@\n現在のデータベース上の値=@3@\n\nOKボタンをクリックすれば、変更値を保存します。",
        1002 => "テーブル名を決定できません: @1@",
        1003 => "更新に必要な情報が残されていません: フィールド名=@1@",
        1005 => "db_query関数の呼び出しで、必須のプロパティ'name'が指定されていません",
        1006 => "リンクノードの設定に正しくないものがあります：@1@",
        1007 => "db_update関数の呼び出しで、必須のプロパティ'name'が指定されていません",
        1008 => "db_update関数の呼び出しで、必須のプロパティ'conditions'が指定されていません",
        1009 => "",
        1010 => "",
        1011 => "db_update関数の呼び出しで、必須のプロパティ'dataset'が指定されていません",
        1012 => "クエリーアクセス: ",
        1013 => "更新アクセス: ",
        1004 => "db_query関数での通信時のエラー=@1@/@2@",
        1014 => "db_update関数での通信時のエラー=@1@/@2@",
        1015 => "db_delete関数での通信時のエラー=@1@/@2@",
        1016 => "db_createRecord関数での通信時のエラー=@1@/@2@",
        1017 => "削除アクセス: ",
        1018 => "新規レコードアクセス: ",
        1019 => "db_delete関数の呼び出しで、必須のプロパティ'name'が指定されていません",
        1020 => "db_delete関数の呼び出しで、必須のプロパティ'conditions'が指定されていません",
        1021 => "db_createRecord関数の呼び出しで、必須のプロパティ'name'が指定されていません",
        1022 => 'ご使用のWebブラウザには対応していません。（Internet Explorerで互換モードを使用している場合は使用しないでください）',
        1023 => '[このサイトはINTER-Mediatorを利用して構築しています。]',
        1024 => '複数のレコードが更新される可能性があります。keyフィールドの指定は適切でないかもしれません。そのまま進めてかまいませんか? ',
        1025 => 'レコードを本当に削除していいですか?',
        1026 => 'レコードを本当に作成していいですか?',
        1027 => "チャレンジ取得: ",
        1028 => "get_challenge関数での通信エラー=@1@/@2@",
        1029 => "パスワード変更アクセス: ",
        1030 => "パスワード変更時の通信時のエラー=@1@/@2@",
        1031 => "ファイルアップロード: ",
        1032 => "ファイルアップロード時の通信時のエラー=@1@/@2@",
        1033 => "ページファイルに指定したフィールド名「@1@」は、指定したコンテキストには存在しません",
        1034 => "他のユーザによってこのフィールドの値が変更された可能性があります。\n\n@1@\n\nOKボタンをクリックすれば、変更値を保存します。",
        1035 => "フィールド=@1@, 初期値=@2@, 更新値=@3@\n",
        1036 => "フィールド=@1@, 式=@2@: パースエラーが発生しました。",
        1037 => "循環参照を検出しました。",
        2001 => '認証エラー!',
        2002 => 'ユーザ名:',
        2003 => 'パスワード:',
        2004 => 'ログイン',
        2005 => 'パスワード変更',
        2006 => '新パスワード:',
        2007 => 'ユーザ名、新旧パスワードのいずれかが指定されていません',
        2008 => 'チャレンジの取得に失敗しました',
        2009 => 'パスワードの変更に成功しました。新しいパスワードでログインをしてください',
        2011 => 'ユーザ名(メールアドレス):',
        2010 => 'パスワードの変更に失敗しました。旧パスワードが違うなどが考えられます',
        3101 => "アップロードするファイルを\nドラッグ&ドロップする",
        3102 => 'ドラッグしたファイル: ',
    );
}

?>
