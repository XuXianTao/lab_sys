/*
create table ass (
	cla 	varchar(200) not null,		#课室
    id		int not null,				#学号
    nam 	varchar(200) not null,		#名字
    wDay	int,						#值班是周几，1一，2二...
    bTim	time,						#值班开始时间
    eTim	time,						#值班结束时间
    primary key(id,wDay,bTim,eTim)
);
*/
use `lab_sys`;
select * from ass;
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','1','07:30','12:00','15000000','张水清');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','1','08:00','12:00','15000001','刘佳镕');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','1','12:00','16:00','15000002','陈鑫妍');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','1','12:00','17:30','15000000','张水清');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','1','12:00','18:00','15000001','刘佳镕');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','1','16:00','18:00','15000003','方楚丽');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','1','17:00','22:00','15000004','李创丰');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','1','18:00','22:00','15000003','方楚丽');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','1','17:00','22:00','15000005','刘楠');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','1','19:00','22:00','15000006','张穗安');

insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','2','07:30','12:30','15000005','刘楠');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','2','07:30','12:00','15000006','梁贺舟');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','2','07:30','12:00','15000007','黄弘庆');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','2','08:00','10:00','15000008','彭劲');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C102','2','08:00','12:00','15000009','王杏婷');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','2','12:00','15:00','15000006','梁贺舟');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','2','12:00','17:30','15000007','黄弘庆');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','2','14:00','16:00','15000010','薛小涵');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','2','16:00','18:00','15000011','黄棉烽');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C102','2','12:00','18:00','15000009','王杏婷');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','2','14:00','16:00','15000012','郑陶然');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','2','14:00','16:00','15000013','姜淼');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','2','18:00','22:00','15000010','薛小涵');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','2','18:00','22:00','15000011','黄棉烽');

insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','3','07:30','12:30','15000014','吴瑞钊');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','3','07:30','10:00','15000006','梁贺舟');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','3','10:00','12:00','15000015','刘寅一');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','3','09:30','12:00','15000012','郑陶然');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','3','09:30','12:00','15000013','姜淼');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','3','12:00','18:00','15000016','李小雨');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','3','12:00','14:00','15000017','张子雍');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','3','12:00','17:00','15000015','刘寅一');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','3','16:00','18:00','15000017','张子雍');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','3','18:00','22:00','15000016','李小雨');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','3','18:00','22:00','15000010','薛小涵');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','3','18:00','22:00','15000006','张穗安');

insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','4','08:00','12:00','15000018','楚翔宇');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','4','10:00','13:00','15000015','刘寅一');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','4','12:00','18:00','15000002','陈鑫妍');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','4','12:00','19:00','15000019','谭舒婷');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','4','12:00','18:00','15000017','张子雍');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','4','12:00','18:00','15000018','楚翔宇');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','4','13:00','18:00','15000020','张若妍');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','4','14:00','16:00','15000012','郑陶然');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','4','14:00','16:00','15000013','姜淼');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C102','4','12:00','18:00','15000021','宋冰冰');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','4','17:00','22:00','15000022','邹紫婧');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','4','18:00','22:00','15000003','方楚丽');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','4','19:00','22:00','15000006','张穗安');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C102','4','18:00','22:00','15000021','宋冰冰');

insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','5','07:30','12:30','15000004','李创丰');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C103','5','08:00','12:00','15000008','彭劲');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C102','5','08:20','11:40','15000023','申浩');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','5','07:30','10:00','15000012','郑陶然');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','5','07:30','10:00','15000013','姜淼');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','5','12:00','17:30','15000014','吴瑞钊');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','5','12:00','16:00','15000008','彭劲');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','5','13:00','18:00','15000020','张若妍');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','5','12:00','19:00','15000024','杨晓铃');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','5','16:00','19:00','15000019','谭舒婷');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C102','5','14:00','18:00','15000023','申浩');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C104','5','17:00','22:00','15000022','邹紫婧');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C102','5','19:00','21:40','15000023','申浩');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','5','18:00','22:00','15000011','黄棉烽');
insert into ass(`cla`,`wDay`,`bTim`,`eTim`,`id`,`nam`) values('C303','5','19:00','22:00','15000024','杨晓铃');