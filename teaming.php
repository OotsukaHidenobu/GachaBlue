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

$data1 = getDB1('select Image from Characters where id=?',[$id1]);
$data2 = getDB1('select Image from Characters where id=?',[$id2]);
$data3 = getDB1('select Image from Characters where id=?',[$id3]);
$data4 = getDB1('select Image from Characters where id=?',[$id4]);
$data5 = getDB1('select Image from Characters where id=?',[$id5]);
$data6 = getDB1('select Image from Characters where id=?',[$id6]);
$data7 = getDB1('select Image from Characters where id=?',[$id7]);
$data8 = getDB1('select Image from Characters where id=?',[$id8]);
$data9 = getDB1('select Image from Characters where id=?',[$id9]);
$data10 = getDB1('select Image from Characters where id=?',[$id10]);

$warning = "4キャラ全員編成してください"
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>teaming</title>
</head>

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

    }

    .center {
        text-align: center;
        /* margin: 0 auto; */
    }

    img {
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
    background-image: url(assets/SkillIcon.png);
}
    .audio_button {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    background: url(assets/mizeraburu_mist.png) no-repeat center center;
    background-size: contain;
}
</style>

<body>
<div class="audio_wrap">
  <div class="audio_button"></div>
  <audio id="audio" src="./Music/bgm_maoudamashii_fantasy14.mp3" loop>
    <!-- あなたのブラウザーは <code>audio</code> 要素をサポートしていません。 -->
  </audio>
</div>
    <h1>編成画面</h1>
    <div class="columns team">
        <span class="columm">
            <a class="column" draggable="true">
                <img class="img team-img" src="ガチャブル画像/Empty/Empty.png" id="ball">
            </a>
        </span>

        <span class="columm">
            <a class="column" draggable="true">
                <img class="img team-img" src="ガチャブル画像/Empty/Empty.png" id="ball">
            </a>
        </span>
        <span class="columm">
            <a class="column" draggable="true">
                <img class="img team-img" src="ガチャブル画像/Empty/Empty.png" id="ball">
            </a>
        </span>
        <span class="columm">
            <a class="column" draggable="true">
                <img class="img team-img" src="ガチャブル画像/Empty/Empty.png" id="ball">
            </a>
        </span>
    </div>

    <div class="columns">
        <a class="column" draggable="true">
            <img class="img" src="assets/<?= $data1['Image'] ?>" id="ball" name="<?= $id1 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="assets/<?= $data2['Image'] ?>" id="ball" name="<?= $id2 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="assets/<?= $data3['Image'] ?>" id="ball" name="<?= $id3 ?>">
        </a>

    </div>

    <div class="columns">
        <a class="column" draggable="true">
            <img class="img" src="assets/<?= $data4['Image'] ?>" id="ball" name="<?= $id4 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="assets/<?= $data5['Image'] ?>" id="ball" name="<?= $id5 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="assets/<?= $data6['Image'] ?>" id="ball" name="<?= $id6 ?>">
        </a>
        <a class="column" draggable="true">
            <img class="img"src="assets/<?= $data7['Image'] ?>" id="ball" name="<?= $id7 ?>">
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
        <button id="button">戦闘開始</button>
    </div>

    <script src="script/jquery-3.1.1.min.js"></script>

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
                location.href = `Buttle.html?id1=` + encodeURIComponent(id1) +"&id2="+ encodeURIComponent(id2)+"&id3="+ encodeURIComponent(id3)+"&id4="+ encodeURIComponent(id4);
            }
            else {
                alert("<?php echo $warning; ?>");
            }
        });

        $(function () {
  var audioBtn = $('.audio_button'),
  audioWrap = $('.audio_wrap'),
  audio = document.getElementById('audio');

  audioBtn.on('click', function () {
    if( audioWrap.hasClass('play') ) {
      audio.pause();
      audioWrap.removeClass('play');
    } else {
      audio.play();
      audioWrap.addClass('play');
    }
  });
});
    </script>
</body>


</html>