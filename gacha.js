var connection = mysql.createConnection({
    host     : 'localhost',
    user     : 'me',
    password : 'secret'
  });


var id=0;
var gacha=[];

function getRandomInt(max){
    return Math.floor(Math.random()*Math.floor(max));
}

function gacha(){
    for(i=0;i<=10;i++){
        id=getRandomInt(16);
        //データベースのid番目のやつをgachaに入れる。やり方分からぬ。終わり。
    }
}