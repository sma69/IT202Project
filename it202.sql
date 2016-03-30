drop table if exists clients;
create table clients
(
clientId INT(11) primary key auto_increment,
clientName varchar(32),
clientPW varchar(64),
activeSession varchar(128),
firstLogin datetime,
lastLogin datetime
);
 );

drop table if exists players;
create table players
(
playerId INT(11) primary key auto_increment,
clientName varchar(32),
wins INT(11),
lastLogin datetime
);
 );

drop table if exists matches;
create table matches
(
playerId INT(11) primary key auto_increment,
playerName varchar(32),
player2Name varchar(32),
result INT(11),
gameEnd datetime,
);
 );
 
