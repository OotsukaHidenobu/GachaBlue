DROP DATABASE IF EXISTS GachaBlueDB;
CREATE DATABASE GachaBlueDB;
USE GachaBlueDB;

DROP TABLE IF EXISTS Characters;

CREATE TABLE Characters(
ID integer,
Name varchar(32),
Rarity varchar(4),
Image varchar(256),
Hp integer,
Power integer,
PRIMARY KEY(ID)
);

insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(1,"ジータ","SSR","jeeta.png",1000,300);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(2,"ルリア","SR","ruria.png",750,100);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(3,"ビィ","SSR","b.png",700,110);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(4,"カタリナ","SSR","katarina.png",1100,260);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(5,"ラカム","SSR","rakamu.png",1000,320);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(6,"イオ","SSR","io.png",800,210);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(7,"オイゲン","SSR","oigen.png",1100,340);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(8,"ロゼッタ","SSR","rozetta.png",850,280);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(9,"リーシャ","SSR","risya.png",880,275);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(10,"モニカ","SSR","monika.png",930,300);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(11,"シェロカルテ","SSR","syero.png",1000,250);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(12,"ヴィーラ","SSR","vira.png",1100,280);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(13,"黒騎士","SSR","kurokisi.png",1200,330);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(14,"オーキス","SSR","okisu.png",750,200);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(15,"スツルム","SSR","suturumu.png",1050,310);
insert into Characters(ID,Name,Rarity,Image,Hp,Power) value(16,"ドランク","SSR","doranku.png",1150,270);
