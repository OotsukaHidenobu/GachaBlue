<?php
require_once('common.php');
// 出題する問題を決定
//$i = ('');
// 問題文を取得
$id1 = $_GET["id1"];
$id2 = $_GET["id2"];
$id3 = $_GET["id3"];
$id4 = $_GET["id4"];
$id5 = $_GET["id5"];
$id6 = $_GET["id6"];
$id7 = $_GET["id7"];
$id8 = $_GET["id8"];
$id9 = $_GET["id9"];
$id10 = $_GET["id10"];

$data1 = getDB1('select * from Characters where id=?',[$id1]);
$data2 = getDB1('select * from Characters where id=?',[$id2]);
$data3 = getDB1('select * from Characters where id=?',[$id3]);
$data4 = getDB1('select * from Characters where id=?',[$id4]);
$data5 = getDB1('select * from Characters where id=?',[$id5]);
$data6 = getDB1('select * from Characters where id=?',[$id6]);
$data7 = getDB1('select * from Characters where id=?',[$id7]);
$data8 = getDB1('select * from Characters where id=?',[$id8]);
$data9 = getDB1('select * from Characters where id=?',[$id9]);
$data10 = getDB1('select * from Characters where id=?',[$id10]);

$warning = "4キャラ全員編成してください"
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>teaming</title>

</head>
<script src="script/jquery-3.1.1.min.js"></script>
<style>
    /* Prevent the text contents of draggable elements from being selectable. */
    [draggable] {
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        /* Required to make elements draggable in old WebKit */
        -khtml-user-drag: element;
        -webkit-user-drag: element;
    }

    #button {
        width: 250px;
        height: 60px;
        padding: 10px;
        font-size: 30px;


    }

    h1 {
        text-align: center;
    }

    #button-div {
        text-align: center;
        margin-bottom: 40px;
    }

    .columns {
        /* margin: 0 auto; */
        /* clear: left; */
        margin-bottom: 30px;
        text-align: center;
  white-space:nowrap;
    }

    .center {
        text-align: center;
        /* margin: 0 auto; */
    }

    .img {
        display: inline-block;
        background: #ffff00;
        width: 10em;
        cursor: move;
        /* margin: 0 auto; */

    }

    /* .img {
        margin: 5px;
    } */

    .team {
        margin: 80px;
        clear: left;
    }

    .team-img {
        top: 50%;
    }

    .column {
        margin: 10px;
        /* height: 150px;
        width: 150px;
        float: left;
        border: 2px solid #666666;
        background-color: #ccc;
        margin-bottom: 30px;
        margin-right: 20px;
        -webkit-border-radius: 10px;
        -ms-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 3px #000;
        -ms-box-shadow: inset 0 0 3px #000;
        box-shadow: inset 0 0 3px #000;
        text-align: center;
        cursor: move; */
    }

    .columm {
        height: 150px;
        width: 250px;
        /* float: left; */
        border: 2px solid 4px #666666;
        background-color: #ccc;
        margin-bottom: 130px;
        margin-right: 20px;
        -webkit-border-radius: 10px;
        -ms-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 3px #000;
        -ms-box-shadow: inset 0 0 3px #000;
        box-shadow: inset 0 0 3px #000;

    }


    /* .column.over {
        border: 2px dashed #000;
    } */

    /* .column header {
        color: #fff;
        text-shadow: #000 0 1px;
        box-shadow: 5px;
        padding: 5px;
        background: -moz-linear-gradient(left center, rgb(0, 0, 0), rgb(79, 79, 79), rgb(21, 21, 21));
        background: -webkit-gradient(linear, left top, right top,
            color-stop(0, rgb(0, 0, 0)),
            color-stop(0.50, rgb(79, 79, 79)),
            color-stop(1, rgb(21, 21, 21)));
        background: -webkit-linear-gradient(left center, rgb(0, 0, 0), rgb(79, 79, 79), rgb(21, 21, 21));
        background: -ms-linear-gradient(left center, rgb(0, 0, 0), rgb(79, 79, 79), rgb(21, 21, 21));
        border-bottom: 1px solid #ddd;
        -webkit-border-top-left-radius: 10px;
        -moz-border-radius-topleft: 10px;
        -ms-border-radius-topleft: 10px;
        border-top-left-radius: 10px;
        -webkit-border-top-right-radius: 10px;
        -ms-border-top-right-radius: 10px;
        -moz-border-radius-topright: 10px;
        border-top-right-radius: 10px;
    } */
    .play .audio_button {
    background-image: url(ガチャブル画像/♪surassyu.png);
}
    .audio_button {
    position: relative;
    width: 80px;
    height: 80px;
    margin-left:20px;
    margin-top:20px;
    background: url(ガチャブル画像/♪.png) no-repeat center center;
    background-size: contain;
}
.modal-content{
	width:50%;
	margin:1.0em auto 0;
	padding:40px 20px;
	border:2px solid #aaa;
	background:#fff;
	z-index:2;
    position:fixed;
}

.modal-p{
	margin-top:1em;
}

.modal-p:first-child{
	margin-top:0;
}

.button-link{
	color:#00f;
	text-decoration:underline;
}

.button-link:hover{
	cursor:pointer;
	color:#f00;
    margin-top:30px;
}
#modal-overlay{
	z-index:1;
	display:none;
	position:fixed;
	top:0;
	left:0;
	width:100%;
	height:120%;
	background-color:rgba(0,0,0,0.75);
}
#skill-img{
    width:40px;
    height: 40px;
}
.modal-txt{
    margin-left:30px;
}
</style>

<body>
<div class="audio_wrap">
  <div class="audio_button"></div>
  <audio id="audio" src="./Music/bgm_maoudamashii_fantasy14.mp3" autoplay loop>
  </audio>
</div>
    <h1>編成画面</h1>
</div>

<div id="modal-01" class="modal-content" style="top: 50%; left: 50%;
  transform: translateY(-50%) translateX(-50%);
  -webkit- transform: translateY(-50%) translateX(-50%);
   display: none;">
    <!-- モーダルウィンドウのコンテンツ開始 -->
    <h2 style="text-align: center;"><?=$data1['Name']?></h2>
    <h3>ステータス</h3>
    <p class="modal-txt">HP:<?=$data1['Hp']?></p>
    <p class="modal-txt">攻撃力:<?=$data1['Power']?></p>
    <h3>アビリティ</h3>
    <p class="modal-txt"><img id="skill-img" src="assets/<?= $data1['Skill1Image'] ?>" align="middle">:<?=$data1['Skill1Text']?></p>
    <p class="modal-txt"><img id="skill-img" src="assets/<?= $data1['Skill2Image'] ?>" align="middle">:<?=$data1['Skill2Text']?></p>
    <p class="modal-txt"><img id="skill-img" src="assets/<?= $data1['Skill3Image'] ?>" align="middle">:<?=$data1['Skill3Text']?></p>
    <p></p>

	<p><a id="modal-close" class="button-link">閉じる</a></p>
	<!-- モーダルウィンドウのコンテンツ終了 -->
</div>

<div id="modal-02" class="modal-content" style="left: 234.5px; top: 122px; display: none;">
	<!-- モーダルウィンドウのコンテンツ開始 -->
	<p>2つ目のモーダルウィンドウです。全体を囲むdiv要素に[id="modal-content-01"]が設定されています。</p>
	<p>「閉じる」か「背景」をクリックするとモーダルウィンドウを終了します。</p>
	<p><a id="modal-close" class="button-link">閉じる</a></p>
	<!-- モーダルウィンドウのコンテンツ終了 -->
</div>

<div id="modal-03" class="modal-content" style="left: 234.5px; top: 122px; display: none;">
	<!-- モーダルウィンドウのコンテンツ開始 -->
	<p>3つ目のモーダルウィンドウです。全体を囲むdiv要素に[id="modal-content-01"]が設定されています。</p>
	<p>「閉じる」か「背景」をクリックするとモーダルウィンドウを終了します。</p>
	<p><a id="modal-close" class="button-link">閉じる</a></p>
	<!-- モーダルウィンドウのコンテンツ終了 -->
</div>



    <div class="columns team">
        <span class="columm">
            <a class="column" draggable="true">
                <img class="img team-img" src="ガチャブル画像/Empty/Empty.png" id="ball">
            </a>
        </span>

        <span class="columm">
            <a class="column" draggable="true">
                <img class="img team-img modal-syncer" src="ガチャブル画像/Empty/Empty.png" id="ball">
            </a>
        </span>
        <span class="columm">
            <a class="column" draggable="true">
                <img class="img team-img modal-syncer" src="ガチャブル画像/Empty/Empty.png" id="ball">
            </a>
        </span>
        <span class="columm">
            <a class="column" draggable="true">
                <img class="img team-img modal-syncer" src="ガチャブル画像/Empty/Empty.png" id="ball">
            </a>
        </span>
    </div>

    <div class="columns">
        <a class="column" draggable="true">
            <img class="img modal-syncer" data-target="modal-01" src="assets/<?= $data1['Image'] ?>" id="ball" name="<?= $id1 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img modal-syncer" data-target="modal-02" src="assets/<?= $data2['Image'] ?>" id="ball" name="<?= $id2 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img modal-syncer" data-target="modal-03" src="assets/<?= $data3['Image'] ?>" id="ball" name="<?= $id3 ?>">
        </a>

    </div>

    <div class="columns">
        <a class="column" draggable="true">
            <img class="img modal-syncer" data-target="modal-04" src="assets/<?= $data4['Image'] ?>" id="ball" name="<?= $id4 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img modal-syncer" data-target="modal-05" src="assets/<?= $data5['Image'] ?>" id="ball" name="<?= $id5 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img modal-syncer" data-target="modal-06" src="assets/<?= $data6['Image'] ?>" id="ball" name="<?= $id6 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img modal-syncer" data-target="modal-07" src="assets/<?= $data7['Image'] ?>" id="ball" name="<?= $id7 ?>">
        </a>

    </div>

    <div class="columns">
        <a class="column" draggable="true">
            <img class="img" src="assets/<?= $data8['Image'] ?>" id="ball" name="<?= $id8 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="assets/<?= $data9['Image'] ?>" id="ball" name="<?= $id9 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="assets/<?= $data10['Image'] ?>" id="ball" name="<?= $id10 ?>">
        </a>

    </div>

    <br clear="left">
    <div id="button-div">
        <button id="button" onclick="Se(1)">戦闘開始</button>
    </div>


    <script src="./Music/Se.js"></script>
    <script>
        var dragSrcEl = null;

        function handleDragStart(e) {
            // Target (this) element is the source node.

            dragSrcEl = this;

            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/html', this.innerHTML);
        }

        function handleDragOver(e) {
            if (e.preventDefault) {
                e.preventDefault(); // Necessary. Allows us to drop.
            }

            e.dataTransfer.dropEffect = 'move';  // See the section on the DataTransfer object.

            return false;
        }

        function handleDragEnter(e) {
            // this / e.target is the current hover target.
            this.classList.add('over');
        }

        function handleDragLeave(e) {
            this.classList.remove('over');  // this / e.target is previous target element.
        }

        function handleDrop(e) {
            // this/e.target is current target element.

            if (e.stopPropagation) {
                e.stopPropagation(); // Stops some browsers from redirecting.
            }

            // Don't do anything if dropping the same column we're dragging.
            if (dragSrcEl != this) {
                // Set the source column's HTML to the HTML of the columnwe dropped on.
                dragSrcEl.innerHTML = this.innerHTML;
                this.innerHTML = e.dataTransfer.getData('text/html');
            }
            MordalContent();

            return false;
        }

        function handleDragEnd(e) {
            // this/e.target is the source node.

            [].forEach.call(cols, function (col) {
                col.classList.remove('over');
            });
        }

        var cols = document.querySelectorAll('.columns .column');
        [].forEach.call(cols, function (col) {
            col.addEventListener('dragstart', handleDragStart, false);
            col.addEventListener('dragenter', handleDragEnter, false)
            col.addEventListener('dragover', handleDragOver, false);
            col.addEventListener('dragleave', handleDragLeave, false);
            col.addEventListener('drop', handleDrop, false);
            col.addEventListener('dragend', handleDragEnd, false);
        });

        var a = 0;
        var b = 0;
        var id1 = 0;
        var id2 = 0;
        var id3 = 0;
        var id4 = 0;


            button.addEventListener("click", (e) => {
                var answer = document.querySelectorAll(".team .img");
            var button = document.querySelector("#button");
            a = 0;
            b = 0;
            for(var i=0; i<answer.length; i++){
                if (answer[i].src == "http://hp1366.neecbox.net/GachaBlue/%E3%82%AC%E3%83%81%E3%83%A3%E3%83%96%E3%83%AB%E7%94%BB%E5%83%8F/Empty/Empty.png") {

                    a++;

                }
                else {
                    id1 = answer[0].name;
                    id2 = answer[1].name;
                    id3 = answer[2].name;
                    id4 = answer[3].name;
                    b++;
                }
            }
            // answer.forEach(function (param) {
            //     if (param.src == "http://hp1366.neecbox.net/GachaBlue/%E3%82%AC%E3%83%81%E3%83%A3%E3%83%96%E3%83%AB%E7%94%BB%E5%83%8F/Empty/Empty.png") {

            //         a++;
            //         console.log("aaa");

            //     }
            //     else {

            //         b++;
            //         console.log("param.name");
            //     }
            // })
            if (b == 4) {
                location.href = `Buttle.php?id1=` + encodeURIComponent(id1) +"&id2="+ encodeURIComponent(id2)+"&id3="+ encodeURIComponent(id3)+"&id4="+ encodeURIComponent(id4);
            }
            else {
                alert("<?php echo $warning; ?>");
            }
        });

        function MordalContent(){
//グローバル変数
var nowModalSyncer = null ;		//現在開かれているモーダルコンテンツ
var modalClassSyncer = "modal-syncer" ;		//モーダルを開くリンクに付けるクラス名

//モーダルのリンクを取得する
var modals = document.getElementsByClassName( modalClassSyncer ) ;

//モーダルウィンドウを出現させるクリックイベント
for(var i=0,l=modals.length; l>i; i++){

	//全てのリンクにタッチイベントを設定する
	modals[i].onclick = function(){

		//ボタンからフォーカスを外す
		this.blur() ;

		//ターゲットとなるコンテンツを確認
		var target = this.getAttribute( "data-target" ) ;

		//ターゲットが存在しなければ終了
		if( typeof( target )=="undefined" || !target || target==null ){
			return false ;
		}

		//コンテンツとなる要素を取得
		nowModalSyncer = document.getElementById( target ) ;

		//ターゲットが存在しなければ終了
		if( nowModalSyncer == null ){
			return false ;
		}

		//キーボード操作などにより、オーバーレイが多重起動するのを防止する
		if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない
		//if($("#modal-overlay")[0]) $("#modal-overlay").remove() ;		//現在のモーダルウィンドウを削除して新しく起動する

		//オーバーレイを出現させる
		$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
		$( "#modal-overlay" ).fadeIn( "fast" ) ;

		//コンテンツをセンタリングする
		centeringModalSyncer() ;

		//コンテンツをフェードインする
		$( nowModalSyncer ).fadeIn( "slow" ) ;

		//[#modal-overlay]、または[#modal-close]をクリックしたら…
		$( "#modal-overlay,#modal-close" ).unbind().click( function() {

			//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
			$( "#" + target + ",#modal-overlay" ).fadeOut( "fast" , function() {

				//[#modal-overlay]を削除する
				$( '#modal-overlay' ).remove() ;

			} ) ;

			//現在のコンテンツ情報を削除
			nowModalSyncer = null ;

		} ) ;

	}

}
        }

        $(function () {
  var audioBtn = $('.audio_button'),
  audioWrap = $('.audio_wrap'),
  audio = document.getElementById('audio');

  audioBtn.on('click', function () {
    if( audioWrap.hasClass('play') ) {
        audio.play();
      audioWrap.removeClass('play');
    } else {
        audio.pause();
      audioWrap.addClass('play');
    }
  });
});

//モーダルコンテンツ
$(function(){

//グローバル変数
var nowModalSyncer = null ;		//現在開かれているモーダルコンテンツ
var modalClassSyncer = "modal-syncer" ;		//モーダルを開くリンクに付けるクラス名

//モーダルのリンクを取得する
var modals = document.getElementsByClassName( modalClassSyncer ) ;

//モーダルウィンドウを出現させるクリックイベント
for(var i=0,l=modals.length; l>i; i++){

	//全てのリンクにタッチイベントを設定する
	modals[i].onclick = function(){

		//ボタンからフォーカスを外す
		this.blur() ;

		//ターゲットとなるコンテンツを確認
		var target = this.getAttribute( "data-target" ) ;

		//ターゲットが存在しなければ終了
		if( typeof( target )=="undefined" || !target || target==null ){
			return false ;
		}

		//コンテンツとなる要素を取得
		nowModalSyncer = document.getElementById( target ) ;

		//ターゲットが存在しなければ終了
		if( nowModalSyncer == null ){
			return false ;
		}

		//キーボード操作などにより、オーバーレイが多重起動するのを防止する
		if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない
		//if($("#modal-overlay")[0]) $("#modal-overlay").remove() ;		//現在のモーダルウィンドウを削除して新しく起動する

		//オーバーレイを出現させる
		$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
		$( "#modal-overlay" ).fadeIn( "fast" ) ;

		//コンテンツをセンタリングする
		centeringModalSyncer() ;

		//コンテンツをフェードインする
		$( nowModalSyncer ).fadeIn( "slow" ) ;

		//[#modal-overlay]、または[#modal-close]をクリックしたら…
		$( "#modal-overlay,#modal-close" ).unbind().click( function() {

			//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
			$( "#" + target + ",#modal-overlay" ).fadeOut( "fast" , function() {

				//[#modal-overlay]を削除する
				$( '#modal-overlay' ).remove() ;

			} ) ;

			//現在のコンテンツ情報を削除
			nowModalSyncer = null ;

		} ) ;

	}

}

// 	//リサイズされたら、センタリングをする関数[centeringModalSyncer()]を実行する
// 	$( window ).resize( centeringModalSyncer ) ;

// 	//センタリングを実行する関数
// 	function centeringModalSyncer() {

// 		//モーダルウィンドウが開いてなければ終了
// 		if( nowModalSyncer == null ) return false ;

// 		//画面(ウィンドウ)の幅、高さを取得
// 		var w = $( window ).width() ;
// 		var h = $( window ).height() ;

// 		//コンテンツ(#modal-content)の幅、高さを取得
// 		// jQueryのバージョンによっては、引数[{margin:true}]を指定した時、不具合を起こします。
// //		var cw = $( nowModalSyncer ).outerWidth( {margin:true} ) ;
// //		var ch = $( nowModalSyncer ).outerHeight( {margin:true} ) ;
// 		var cw = $( nowModalSyncer ).outerWidth() ;
// 		var ch = $( nowModalSyncer ).outerHeight() ;

// 		//センタリングを実行する
// 		$( nowModalSyncer ).css( {"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"} ) ;

// 	}

} ) ;



//センタリングをする関数
function centeringModalSyncer(){

//画面(ウィンドウ)の幅を取得し、変数[w]に格納
var w = $(window).width();

//画面(ウィンドウ)の高さを取得し、変数[h]に格納
var h = window.innerHeight;

//コンテンツ(#modal-content)の幅を取得し、変数[cw]に格納
var cw = $("#modal-content").outerWidth({margin:true});

//コンテンツ(#modal-content)の高さを取得し、変数[ch]に格納
var ch = $("#modal-content").outerHeight({margin:true});

//コンテンツ(#modal-content)を真ん中に配置するのに、左端から何ピクセル離せばいいか？を計算して、変数[pxleft]に格納
var pxleft = ((w - cw)/2);

//コンテンツ(#modal-content)を真ん中に配置するのに、上部から何ピクセル離せばいいか？を計算して、変数[pxtop]に格納
var pxtop = ((h - ch)/2);

//[#modal-content]のCSSに[left]の値(pxleft)を設定
$("#modal-content").css({"left": pxleft + "px"});

//[#modal-content]のCSSに[top]の値(pxtop)を設定
$("#modal-content").css({"top": pxtop + "px"});

}

</script>
</body>


</html>