<?php
require_once('common.php');

$raritys = [
  'SSR' =>  300,
  'SR'  => 1200,
  'R'   => 8500,
];

$cards['SSR'] = [ 'アイツ', 'コイツ', ];
$cards['SR']  = [ 'イオンリング', 'チルド', 'マザー', 'アイアンメイデン', 'ビッグコア', ];
$cards['R']   = [ 'ファン', 'ルグル', 'ガルン', 'ビーンズ', 'ディー01', ];

$rand = mt_rand(0,10000); // 乱数生成

for($i=0;$i<9;$i++){
    $probability = 0;
    foreach($raritys as $rarity => $rarity_probability){
      $probability += $rarity_probability;
      if($rand <= $probability){ // 排出レアリティ確定
        $result[] = array_rand( $$cards[$rarity], 1 ); // 排出レアリティ内からランダムに1枚取得
        break;
      }
    }
  }


// 結果表示
foreach(result as $v){
    echo $v.'<br>';
  }

?>