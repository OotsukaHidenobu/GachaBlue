<?php
require_once('common.php');
$id1 = $_GET["id1"];
$id2 = $_GET["id2"];
$id3 = $_GET["id3"];
$id4 = $_GET["id4"];

$name1 = getDB1('select Name from Characters where id=?',[$id1]);
$name2 = getDB1('select Name from Characters where id=?',[$id2]);
$name3 = getDB1('select Name from Characters where id=?',[$id3]);
$name4 = getDB1('select Name from Characters where id=?',[$id4]);

$image1 = getDB1('select Image from Characters where id=?',[$id1]);
$image2 = getDB1('select Image from Characters where id=?',[$id2]);
$image3 = getDB1('select Image from Characters where id=?',[$id3]);
$image4 = getDB1('select Image from Characters where id=?',[$id4]);

$hp1 = getDB1('select Hp from Characters where id=?',[$id1]);
$hp2 = getDB1('select Hp from Characters where id=?',[$id2]);
$hp3 = getDB1('select Hp from Characters where id=?',[$id3]);
$hp4 = getDB1('select Hp from Characters where id=?',[$id4]);

$power1 = getDB1('select Power from Characters where id=?',[$id1]);
$power2 = getDB1('select Power from Characters where id=?',[$id2]);
$power3 = getDB1('select Power from Characters where id=?',[$id3]);
$power4 = getDB1('select Power from Characters where id=?',[$id4]);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>�킦�I</title>

    <!--<link rel="stylesheet" href="./css/style.css">-->
</head>
<body>
    <div id="EnenyName" class="EnemyName">
        <h1>�A���e�B���b�g�o�n���[�g</h1>
    </div>
    <hr id="HPBar" class="HPBar" />
    <h1 href="#" class="HP">
        HP:
        <h1 id="HP" class="HP">
            11000
        </h1>
    </h1>
    <div id="texture" class="texture">
        <div id="EnemyImage" class="EnemyImage">
            <img src="assets/UltimateBahamut.png">
            <input type="hidden" name="EnemyAttack" value="500" id="EnemyAttack" class="EnemyAttack">
            <input type="hidden" name="EnemyDefence" value="100" id="EnemyDefence" class="EnemyDefence">
        </div>
        <div id="CharactersImage1" class="CharactersImage">
            <h1 id="Char1HPBar" class="CharHPBar">HP:</h1>
            <h1 id="Char1HP" class="CharHP"><?= $hp1['Hp'] ?></h1>
            <input type="hidden" name="Char1Attack" value="<?= $power1['Power'] ?>" id="Char1Attack" class="CharAttack">
            <input type="hidden" name="Char1Defence" value="100" id="Char1Defence" class="CharDefence">
            <img src="assets/<?= $image1['Image'] ?>">
            <img src="assets/mizeraburu_mist.png"onclick="Char1Skill(0,0,0,25,25)">
            <img src="assets/mizeraburu_mist.png">
            <img src="assets/mizeraburu_mist.png">
        </div>
        <div id="CharactersImage2" class="CharactersImage">
            <h1 id="Char2HPBar" class="CharHPBar">HP:</h1>
            <h1 id="Char2HP" class="CharHP"><?= $hp2['Hp'] ?></h1>
            <input type="hidden" name="Char2Attack" value="<?= $power2['Power'] ?>" id="Char2Attack" class="CharAttack">
            <input type="hidden" name="Char2Defence" value="100" id="Char2Defence" class="CharDefence">
            <img src="assets/<?= $image2['Image'] ?>">
            <img src="assets/mizeraburu_mist.png">
            <img src="assets/mizeraburu_mist.png">
            <img src="assets/mizeraburu_mist.png">
        </div>
        <div id="CharactersImage3" class="CharactersImage">
            <h1 id="Char3HPBar" class="CharHPBar">HP:</h1>
            <h1 id="Char3HP" class="CharHP"><?= $hp3['Hp'] ?></h1>
            <input type="hidden" name="Char3Attack" value="<?= $power3['Power'] ?>" id="Char3Attack" class="CharAttack">
            <input type="hidden" name="Char3Defence" value="100" id="Char3Defence" class="CharDefence">
            <img src="assets/<?= $image3['Image'] ?>">
            <img src="assets/mizeraburu_mist.png">
            <img src="assets/mizeraburu_mist.png">
            <img src="assets/mizeraburu_mist.png">
        </div>
        <div id="CharactersImage4" class="CharactersImage">
            <h1 id="Char4HPBar" class="CharHPBar">HP:</h1>
            <h1 id="Char4HP" class="CharHP"><?= $hp4['Hp'] ?></h1>
            <input type="hidden" name="Char4Attack" value="<?= $power4['Power'] ?>" id="Char4Attack" class="CharAttack">
            <input type="hidden" name="Char4Defence" value="100" id="Char4Defence" class="CharDefence">
            <img src="assets/<?= $image4['Image'] ?>">
            <img src="assets/mizeraburu_mist.png">
            <img src="assets/mizeraburu_mist.png">
            <img src="assets/mizeraburu_mist.png">
        </div>
    </div>
    <div>
        <button id="Attack" class="Attack" onclick="hp_down()">�U��</button>
    </div>
    <div id="Characters" class="Characters">
    </div>

    <!--//////////-->
    <!--Javascript-->
    <!--//////////-->
    <script type="text/javascript">
        var enemyHP = document.getElementById('HP')
        var enemyAttack = document.getElementById('EnemyAttack')
        var EnemyDefence = document.getElementById('EnemyDefence')

        var Char1Attack = document.getElementById('Char1Attack')
        var Char2Attack = document.getElementById('Char2Attack')
        var Char3Attack = document.getElementById('Char3Attack')
        var Char4Attack = document.getElementById('Char4Attack')

        var Char1HP = document.getElementById('Char1HP')
        var Char2HP = document.getElementById('Char2HP')
        var Char3HP = document.getElementById('Char3HP')
        var Char4HP = document.getElementById('Char4HP')

        var Char1Defence = document.getElementById('Char1Defence')
        var Char2Defence = document.getElementById('Char2Defence')
        var Char3Defence = document.getElementById('Char3Defence')
        var Char4Defence = document.getElementById('Char4Defence')

        var CharHPArray = [Char1HP, Char2HP, Char3HP, Char4HP];
        var m_charHPArray = [Char1HP, Char2HP, Char3HP, Char4HP];
        var CharAttackArray = [Char1Attack, Char2Attack, Char3Attack, Char4Attack]
        var CharDefenceArray = [Char1Defence, Char2Defence, Char3Defence, Char4Defence]

        

        function hp_down() {
            var Char1Power = parseFloat(Char1Attack.value) + Math.round(parseFloat(Char1Attack.value / 100) * (Math.random() * 2 - 1));
            var Char2Power = parseFloat(Char2Attack.value) + Math.round(parseFloat(Char2Attack.value / 100) * (Math.random() * 2 - 1));
            var Char3Power = parseFloat(Char3Attack.value) + Math.round(parseFloat(Char3Attack.value / 100) * (Math.random() * 2 - 1));
            var Char4Power = parseFloat(Char4Attack.value) + Math.round(parseFloat(Char4Attack.value / 100) * (Math.random() * 2 - 1));

            var enemyPower = parseFloat(enemyAttack.value) + Math.round(parseFloat(enemyAttack.value / 100) * (Math.random() * 2 - 1));

            var allPower = 0;
            for (var i = 0; i < 4; i++) {
                if (CharHPArray[i].innerHTML > 0) {
                    allPower += parseFloat(CharAttackArray[i].value) + Math.round(parseFloat(CharAttackArray[i].value / 100) * (Math.random() * 2 - 1));
                }
            }

            var fullpunch = Math.random() * 100;
            if (fullpunch < 5) {
                for (var i = 0; i < m_charHPArray.length; i++) {
                    m_charHPArray[i].innerHTML -= Math.round(enemyPower / 2);
                }
            }
            else {
                var rand = Math.random() * m_charHPArray.length;
                if (rand < 1) {
                    m_charHPArray[0].innerHTML -= enemyPower;
                }
                else if (rand < 2) {
                    m_charHPArray[1].innerHTML -= enemyPower;
                }
                else if (rand < 3) {
                    m_charHPArray[2].innerHTML -= enemyPower;
                }
                else if (rand < 4) {
                    m_charHPArray[3].innerHTML -= enemyPower;
                }
            }

            if (Char1HP.innerHTML <= 0) {
                Char1HP.innerHTML = 0;
                for (var i = 0; i < m_charHPArray.length; i++) {
                    if (m_charHPArray[i] == Char1HP) {
                        m_charHPArray.splice(i, 1);
                        break;
                    }
                }
                var CharactersImage1 = document.getElementById('CharactersImage1');
                CharactersImage1.style.backgroundColor = "#000";
                CharactersImage1.style.opacity = 0.6;
            }
            if (Char2HP.innerHTML <= 0) {
                Char2HP.innerHTML = 0;
                for (var i = 0; i < m_charHPArray.length; i++) {
                    if (m_charHPArray[i] == Char2HP) {
                        m_charHPArray.splice(i, 1);
                        break;
                    }
                }
                var CharactersImage2 = document.getElementById('CharactersImage2');
                CharactersImage2.style.backgroundColor = "#000";
                CharactersImage2.style.opacity = 0.6;
            }
            if (Char3HP.innerHTML <= 0) {
                Char3HP.innerHTML = 0;
                for (var i = 0; i < m_charHPArray.length; i++) {
                    if (m_charHPArray[i] == Char3HP) {
                        m_charHPArray.splice(i, 1);
                        break;
                    }
                }
                var CharactersImage3 = document.getElementById('CharactersImage3');
                CharactersImage3.style.backgroundColor = "#000";
                CharactersImage3.style.opacity = 0.6;
            }
            if (Char4HP.innerHTML <= 0) {
                Char4HP.innerHTML = 0;
                for (var i = 0; i < m_charHPArray.length; i++) {
                    if (m_charHPArray[i] == Char4HP) {
                        m_charHPArray.splice(i, 1);
                        break;
                    }
                }
                var CharactersImage4 = document.getElementById('CharactersImage4');
                CharactersImage4.style.backgroundColor = "#000";
                CharactersImage4.style.opacity = 0.6;
            }

            enemyHP.innerHTML -= allPower;
            console.log(allPower);
            if (enemyHP.innerHTML <= 0) {
                location.href = "./Result_Win.html";
            }
            else if (m_charHPArray.length <= 0) {
                location.href = "./Result_Lose.html";
            }
        }
        /////////////
        //�s�������
        /////////////
        function Char1Skill(Damege, attackBuff, defenceBuff, attackDebuff, defenceDebuff) {
            enemyHP.innerHTML -= Damege;
            Char1Attack.value += (parseFloat(Char1Attack.value) / 100) * attackBuff;
            Char1Defence.value += (parseFloat(Char1Defence.value) / 100) * defenceBuff;
            EnemyAttack.value -= (parseFloat(EnemyAttack.value) / 100) * attackDebuff;
            EnemyDefence.value -= (parseFloat(EnemyDefence.value) / 100) * defenceDebuff;
            console.log("�U����:" + Char1Attack.value + ", �h���:" + Char1Defence.value + ", �G�̍U����:" + EnemyAttack.value + ", �G�̖h���:" + EnemyDefence.value)
        }
        function Char1SkillAll(Damege, attackBuff, defenceBuff, attackDebuff, defenceDebuff) {
            enemyHP.innerHTML -= Damege;
            for (var i = 0; i < 4; i++) {
                CharAttackArray[i].value += (CharAttackArray[i].value / 100) * attackBuff;
            }
            for (var i = 0; i < 4; i++) {
                CharDefenceArray[i].value += (CharDefenceArray[i].value / 100) * defenceBuff;
            }
            EnemyAttack.value -= (EnemyAttack.value / 100) * attackDebuff;
            EnemyDefence.value -= (EnemyDefence.value / 100) * defenceDebuff;
        }
    </script>

    <!--/////-->
    <!--style-->
    <!--/////-->
    <style>
        #EnenyName {
            text-align: center;
        }


        #CharactersImage1 {
            background-color: none;
            opacity: 1;
            display: block;
            position: absolute;
            top: 0px;
            left: 600px;
        }

        .CharHPBar {
            position: absolute;
            left: 330px;
        }

        #Char1HP {
            position: absolute;
            left: 400px;
        }

        #CharactersImage2 {
            position: absolute;
            top: 180px;
            left: 600px;
        }

        #Char2HP {
            position: absolute;
            left: 400px;
        }

        #CharactersImage3 {
            position: absolute;
            top: 360px;
            left: 600px;
        }

        #Char3HP {
            position: absolute;
            left: 400px;
        }

        #CharactersImage4 {
            position: absolute;
            top: 540px;
            left: 600px;
        }

        #Char4HP {
            position: absolute;
            left: 400px;
        }

        .CharactersImage {
            position: relative;
            padding: 0.25em 1em;
            margin: 2em 0;
            top: 0;
            background: #efefef;
        }

            .CharactersImage:before, .CharactersImage:after {
                position: absolute;
                top: 0;
                content: '';
                width: 10px;
                height: 100%;
                display: inline-block;
                box-sizing: border-box;
            }

            .CharactersImage:before {
                border-left: dotted 2px #15adc1;
                border-top: dotted 2px #15adc1;
                border-bottom: dotted 2px #15adc1;
                left: 0;
            }

            .CharactersImage:after {
                border-top: dotted 2px #15adc1;
                border-right: dotted 2px #15adc1;
                border-bottom: dotted 2px #15adc1;
                right: 0;
            }

            .CharactersImage p {
                margin: 0;
                padding: 0;
            }

        #HPBar {
            margin-top: 1%;
            border: none;
            width: 50%;
            height: 10px;
            background: red;
        }

        .HP {
            float: left;
        }

        #Attack {
			clear: both;
            display: inline-block;
            max-width: 180px;
            text-align: left;
            background-color: #ffa300;
            font-size: 16px;
            color: #FFF;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 24px;
            border-radius: 4px;
            border-bottom: 4px solid #d37800;
            position: absolute;
			top: 40px;
            left: 670px;
        }

        #texture {
            clear: both;
            position: relative;
        }
    </style>
</body>
</html>