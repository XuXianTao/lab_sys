drop database if exists `lab_sys`;
create database `lab_sys` character set utf8;
use `lab_sys`;
#管理、教师、助理
create table man (
	typ		int not null,				#类型，0管理，1教师，2助理
    id		int not null,				#职工号/学号
    nam		varchar(200) not null,		#名字
    cla		varchar(200),				#课室
    wDay	int,						#上班是周几，1一，2二
    bTim	time,						#开始时间
    eTim	time,						#结束时间
    primary key(typ,id,wDay,bTim,eTim)
) engine=InnoDB;
#学生
create table stu (
	cla 	varchar(200) not null,		#课室
    num		int not null,				#机号
    id		int not null primary key,	#学号
    nam 	varchar(200) not null,		#名字
    wDay	int,						#上课是周几，1一，2二...
    bTim	time,						#上课时间
    eTim	time,						#下课时间
    teaId	int not null				#上课教师
) engine=InnoDB;
#异常
create table excp (
	dat		datetime,					#时间
    id		int not null,				#学号
    nam     varchar(200) not null,      #名字
    cla     varchar(200) not null,      #课室
    num     int not null,               #机号
    delId	int,						#处理人学号
    delNam	varchar(200),				#处理人姓名
    sts		varchar(200) not null,		#处理状态，完全未处理，处理不成功，处理完毕
    delWay	varchar(200),				#处理方式
    delInt	time,						#处理间隔
    pc		boolean,					#电脑，0没问题，1有问题
    wire	boolean,					#导线，0没问题，1有问题
    box		boolean,					#电路箱，0没问题，1有问题
    oscp	boolean,					#示波器，0没问题，1有问题
    gen		boolean,					#函数发生器，0没问题，1有问题
    oth		boolean,					#其他，0没选，1选中
    des		varchar(200),				#描述
    primary key(dat,id),
    foreign key(id) references stu(id)
) engine=InnoDB;
#课堂
create table fb (
	dat		datetime,					#时间
    id		int not null,				#学号
    nam     varchar(200) not null,      #姓名
    teaNam	varchar(200) not null,		#上课教师
    wDay	int,						#上课是周几，1一，2二...
    bTim	time,						#上课时间
    eTim	time,						#下课时间
    kno		int not null				#知识点掌握程度，由完全掌握到完全不掌握1-5
) engine=InnoDB;
#故障统计
create table bd (
	cla		varchar(200) not null,		#课室
    num		int not null,				#机号
    pc		int,						#电脑故障数
    wire	int,						#导线故障数
    box		int,						#电路箱故障数
    oscp	int,						#示波器故障数
    gen		int,						#函数发生器故障数
    oth		int,						#其他故障数
    des		varchar(200)				#描述
) engine=InnoDB;