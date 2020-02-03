<?php
require_once 'common.php';

class Gacha{
    /**
     * @param int ガチャID
     */

     public static function doGacha(){
         for($i=0;$i<10;$i++){
            $rand=rand(0,16);
            // SELECT文を変数に格納
            $sql = "SELECT * FROM Characters WHERE id = $rand";

            // SQLステートメントを実行し、結果を変数に格納
            $stmt = $dbh->query($sql);
            $result=getCard();
         }
     }

     private static function getCard(){
        // foreach文で配列の中身を一行ずつ出力
        foreach ($stmt as $row) {
            // データベースのフィールド名で出力
            echo $row['Name'].'：'.$row['Rarity'].':'.$row['Image'].':'.$row['Hp'].':'.$row['Power'];

            // 改行を入れる
            echo '<br>';
        }
     }
}

// $rand =mt_rand(0,16);

// function(){
//     //GachaBlue.sqlのCharactersの中から$randを使ってIDを検索
//     //検索して出たやつを配列にぶち込む
//     //終わり(多分)
// }