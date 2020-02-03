DROP DATABASE IF EXISTS db1366;
CREATE DATABASE db1366;
USE db1366;

DROP TABLE IF EXISTS Characters;

CREATE TABLE Characters(
ID integer,
Name varchar(32),
Rarity varchar(4),
Image varchar(256),
Hp integer,
Power integer,
Skill1ID integer,
Skill1Image varchar(32),
Skill1Text varchar(256),
Skill2ID integer,
Skill2Image varchar(32),
Skill2Text varchar(256),
Skill3ID integer,
Skill3Image varchar(32),
Skill3Text varchar(256),
PRIMARY KEY(ID)
);

insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(1,"ジータ","SSR","jeeta.png",1000,300,			1,"reizi.png","味方全体の攻撃力UP(中)",							2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)", 3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)");
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(2,"ルリア","SR","ruria.png",750,100,			4,"ruria_skill1.png","味方全体が攻撃を1回無効",					5,"ruria_skill2.png","味方全体の攻撃力UP(大)",				 6,"ruria_skill4.png","味方全体の防御力UP(大)");
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(3,"ビィ","SSR","b.png",700,110,					7,"tupura.png","敵にダメージ(大)",								8,"kisin.png","自身の攻撃力UP(特大)",						 9,"asyura.png"."ダメージ1回無効/攻撃されたとき敵にダメージ(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(4,"カタリナ","SSR","katarina.png",1100,260,		10,"katarina_skill1.png","敵にダメージ(中)/自身の攻撃力UP(小)",	11,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",12,"dameka.png"."30%ダメージ軽減"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(5,"ラカム","SSR","rakamu.png",1000,320,			1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(6,"イオ","SSR","io.png",800,210,				1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(7,"オイゲン","SSR","oigen.png",1100,340,		1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(8,"ロゼッタ","SSR","rozetta.png",850,280,		1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(9,"リーシャ","SSR","risya.png",880,275,			1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(10,"モニカ","SSR","monika.png",930,300,			1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(11,"シェロカルテ","SSR","syero.png",1000,250,	1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(12,"ヴィーラ","SSR","vira.png",1100,280,		1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(13,"黒騎士","SSR","kurokisi.png",1200,330,		1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(14,"オーキス","SSR","okisu.png",750,200,		1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(15,"スツルム","SSR","suturumu.png",1050,310,	1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(16,"ドランク","SSR","doranku.png",1150,270,		1,"reizi.png","味方全体の攻撃力UP(中)",2,"mizeraburu_mist.png","敵の攻撃力DOWN(中)/防御力DOWN(中)",3,"amabure.png"."敵にダメージ(中)/防御力DOWN(中)"););
