<!-- <?php
require_once('common.php');
// idの最大値を取得（=問題数）
$data = getDB1('select max(id) as maxid from Question');
// 出題する問題を決定
$i = rand(1, $data['maxid']);
// 問題文を取得
$data = getDB1('select question from Question where id=?', [$i]);
?> -->
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

    #button-div {
        text-align: center;
    }

    .columns {
        margin: 0 auto;
        /* clear: left; */

    }

    .center {
        margin: 0 auto;
    }

    img {
        display: inline-block;
        background: #ffff00;
        width: 12em;
        margin: 0 auto;

    }


    .img {
        width: 150px;
        margin-top: 30px;
    }

    .column {
        height: 150px;
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
        cursor: move;
    }

    .column.over {
        border: 2px dashed #000;
    }

    .column header {
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
    }
</style>

<body>
    <div class="columns">
        <div class="column" draggable="true">
            <header>A</header>
        </div>
        <div class="column" draggable="true">
            <header>B</header>
        </div>
        <div class="column" draggable="true">
            <header>C</header>
        </div>
        <div class="column" draggable="true">
            <header>D</header>
        </div>
    </div>

    <div class="columns">
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>

    </div>

    <div class="columns">
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>

    </div>

    <div class="columns">
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>
        <div class="column" draggable="true">
            <img class="img" src="assets/katarina.jpg" id="ball">
        </div>

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
    </script>
</body>

</html>