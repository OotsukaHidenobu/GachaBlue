<?php
require_once('common.php');
// 出題する問題を決定
//$i = rand(1, $data['maxid']);
// 問題文を取得
$data = getDB1('select Image from Characters where id=1');

$comment = $_GET["id"];
echo $comment;
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
</style>

<body>
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
            <img class="img" src="ガチャブル画像/イオ/unnamedB89DZEEQ.png" id="ball">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="ガチャブル画像/イオ/unnamedB89DZEEQ.png" id="ball">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="ガチャブル画像/イオ/unnamedB89DZEEQ.png" id="ball">
        </a>

    </div>

    <div class="columns">
        <a class="column" draggable="true">
            <img class="img" src="ガチャブル画像/アポロ/unnamedA7JOSI2A.png" id="ball">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="ガチャブル画像/イオ/unnamedB89DZEEQ.png" id="ball">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="ガチャブル画像/モニカ/unnamed3W9Q327M.png" id="ball">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="ガチャブル画像/イオ/unnamedB89DZEEQ.png" id="ball">
        </a>

    </div>

    <div class="columns">
        <a class="column" draggable="true">
            <img class="img" src="ガチャブル画像/イオ/unnamedB89DZEEQ.png" id="ball">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="ガチャブル画像/イオ/unnamedB89DZEEQ.png" id="ball">
        </a>
        <a class="column" draggable="true">
            <img class="img" src="ガチャブル画像/イオ/unnamedB89DZEEQ.png" id="ball">
        </a>

    </div>

    <br clear="left">
    <div id="button-div">
        <button id="button">戦闘開始</button>
    </div>



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






        button.addEventListener("click", (e) => {
            var answer = document.querySelectorAll(".team .img");
            var button = document.querySelector("#button");
            a = 0;
            b = 0;
            answer.forEach(function (param) {
                console.log(param.src);
                if (param.src == "file:///D:/GitClone/GachaBlue/%E3%82%AC%E3%83%81%E3%83%A3%E3%83%96%E3%83%AB%E7%94%BB%E5%83%8F/Empty/Empty.png") {

                    a++;
                    console.log("aaa");
                }
                else {

                    b++;
                    console.log("bbb");

                }
            })
            if (b == 4) {
                location.href = `Buttle.html?=` + encodeURIComponent(1) + '=' + encodeURIComponent(4);

            }
            else {

                alert("dame");
            }
        });
        var query = location.search;
        var value = query.split('=');

        console.log(decodeURIComponent(value[3]));
    </script>
</body>

</html>