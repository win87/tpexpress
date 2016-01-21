create DATABASE if not exists tpexpress;
use tpexpress;

--会员表
drop table if exists tpexpress_user;
create table tpexpress_user(
id int unsigned not null auto_increment primary key,
user_id int(14) unique not null,
email varchar(40) not null,
pwd1 char(40),
pwd2 char(40),
join_date datetime,
last_login datetime,
auto_flag tinyint(1) not null default 1,
active_flag tinyint(1) default 0,
user_type tinyint(1) default 1,
picture varchar(40),
verify_code varchar(32) not null
)ENGINE=InnoDB DEFAULT CHARSET=gbk;

--包裹表
drop table if exists tpexpress_package;
create table tpexpress_package(
package_id int unsigned not null auto_increment primary key,
user_id int not null,
recipients varchar(10) not null,
line tinyint,
catalogue varchar(30),
brand varchar(30),
pPrice decimal(10,2), 
quantity smallint unsigned,
unit varchar(10),
tPrice decimal(10,2),
order_date date,
status tinyint(1) default 0,
note text
)ENGINE=InnoDB DEFAULT CHARSET=gbk;

--收件人地址表
drop table if exists tpexpress_recipients;
create table tpexpress_recipients(
id int unsigned not null auto_increment primary key,
user_id int not null,
name varchar(10),
phone varchar(15),
address varchar(30),
province varchar(15) not null,
city varchar(20) not null,
area varchar(20),
zip varchar(6),
country varchar(20) not null,
id_num varchar(18)
)ENGINE=InnoDB DEFAULT CHARSET=gbk;

--订单表
drop table if exists tpexpress_order;
create table tpexpress_order(
id int unsigned not null auto_increment primary key,
user_id int not null,
oName varchar(10),
oPrice decimal(10,2), 
oQuantity smallint unsigned,
oUnit varchar(10),
oPaid tinyint(1) default 0,
oBuy tinyint(1) default 0,
oDate date,
oWebsite text,
oNote text
)ENGINE=InnoDB DEFAULT CHARSET=gbk;

--分类表
drop table if exists tpexpress_cate;
create table tpexpress_cate(
id int unsigned not null auto_increment primary key,
cName varchar(30) not null
);

--商品表
drop table if exists Texpress_pro;
create table Texpress_pro(
id int unsigned not null auto_increment primary key,
pName varchar(255) not null,
cId int unsigned not null,
pSn varchar(50) not null,
pNum int unsigned not null,
mPrice decimal(10,2) not null,
tPrice decimal(10,2) not null,
pDesc text,
pImg varchar(255) not null,
pubTime datetime,
isShow tinyint(1),
isHot tinyint(1)
);


--Texpress_order
	--status:
		-- 0=Not order
		-- 1=Ordered
		-- 2=Cancel
		
drop table if exists Texpress_order;
create table Texpress_order(
order_id int unsigned not null auto_increment primary key,
pro_name varchar(50) not null,
c_id int unsigned not null,
order_price decimal(8,2) not null,
order_num int unsigned not null,
status tinyint(1) default 0,
order_time date,
note varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=gbk;

--tg_host_book
drop table if exists tg_host_book;
create table tg_host_book(
id int unsigned not null auto_increment primary key,
host_id int not null,
guest_id int not null,
book_time date,
status tinyint(1) default 0
);

--tg_guest_book
drop table if exists tg_guest_book;
create table tg_guest_book(
id int unsigned not null auto_increment primary key,
guest_id int not null,
host_id int not null,
book_time date,
status tinyint(1) default 0
);

--Texpress_admin
drop table if exists Texpress_admin;
create table Texpress_admin(
admin_id tinyint unsigned not null auto_increment primary key,
email varchar(50) unique,
password char(32),
reg_time datetime
);

--tg_user_login
drop table if exists tg_user_login;
create table tg_user_login(
id int unsigned not null auto_increment primary key,
user_id int(14) unique not null,
email varchar(40) not null,
password1 char(40),
password2 char(40),
join_date datetime,
last_login datetime,
auto_flag tinyint(1) not null default 1,
active_flag tinyint(1) default 0,
user_type tinyint(1),
picture varchar(40),
verify_code varchar(32) not null
);

--tg_host_info
-- 1 = office_worker
-- 2 = manual_worker
-- 3 = self_employed
-- 4 = executive
-- 5 = housewife
-- 6 = retired
-- 7 = student
-- 8 = other

--"language":
	-- 1=english
	-- 2=spanish
	-- 3=mandarin
	-- 4=vietnamese
	-- 5=fillipino
	-- 6=french
	-- 7=german
	-- 8=indian
	-- 9=arabic
	-- 10=korean
	-- 11=japanese
	-- 12=portuguese
drop table if exists tg_host_info;
create table tg_host_info(
id int unsigned not null auto_increment primary key,
host_id int(14) unique not null references tg_user_login(user_id),
first_name varchar(20),
last_name varchar(20),
gender tinyint(1),
age smallint,
ethnicity varchar(15),
occupation smallint,
language varchar(100),
phone_code smallint,
phone varchar(15),
mobile_code smallint,
mobile varchar(15)
);

--tg_host_house
-- house_type:
	-- 1= House
	-- 2= Apartment
	-- 3= Condo
	-- 4= Town House
	-- 5= Other
	
--room_type:
	-- 1=Private room
	-- 2=Shared room
	-- 3=Entire home
drop table if exists tg_host_house;
create table tg_host_house(
id int unsigned not null auto_increment primary key,
house_id int(14) unique not null references tg_user_login(user_id),
adult_no smallint unsigned,
child_no smallint unsigned,
house_type smallint,
room_type smallint,
bedroom varchar(3),
bathroom varchar(3),
d_price int(4) unsigned,
m_price int(6) unsigned,
house_title varchar(100),
summary text,
pub_time datetime,
update_time datetime
);

--tg_host_services
drop table if exists tg_host_services;
create table tg_host_services(
id int unsigned not null auto_increment primary key,
services_id int(14) unique not null references tg_user_login(user_id),
meals tinyint(1),
commute tinyint(1),
laundry tinyint(1),
airport_pickup tinyint(1),
lesson tinyint(1),
daily_services varchar(80),
common varchar(80),
extras varchar(80)
);

--tg_house_img
drop table if exists tg_house_img;
create table tg_house_img(
id int unsigned not null auto_increment primary key,
album_id int(14) not null references tg_host_house(id),
img_path varchar(44)
);

--tg_house_location
drop table if exists tg_house_location;
create table tg_house_location(
id int unsigned not null auto_increment primary key,
location_id int(14) unique not null references tg_host_house(id),
country varchar(20) not null,
street_number varchar(6),
route varchar(30),
address2 varchar(10),
locality varchar(20) not null,
administrative_area_level_1 varchar(15),
postal_code varchar(8),
lat float(10,6) not null,
lng float(10,6) not null
);

--tg_host_calendar
drop table if exists tg_host_calendar;
create table tg_host_calendar(
id int unsigned not null auto_increment primary key,
calendar_id int(14) unique not null,
start_day date,
min_days int unsigned,
is_avail tinyint(1) unsigned default 1
);

--tg_countries
drop table if exists tg_countries;
create table tg_countries(
countries_id int unsigned not null auto_increment primary key,
country varchar(20)
);

--tg_states
drop table if exists tg_states;
create table tg_states(
states_id int unsigned not null auto_increment primary key,
state varchar(10)
);

--tg_guest_info

-- "occupation":
	-- 1=student
	-- 2=office_worker
	-- 3=self_employed
	-- 4=other

--"purpose":
	-- 1=study abroad
	-- 2=travel
	-- 3=business
	-- 4=other
	
--"language":
	-- 1=english
	-- 2=spanish
	-- 3=chinese
	-- 4=vietnamese
	-- 5=fillipino
	-- 6=french
	-- 7=germany
	-- 8=indian
	-- 9=arabic
	-- 10=korean
	-- 11=japanese
	-- 12=portuguese
drop table if exists tg_guest_info;
create table tg_guest_info(
id int unsigned not null auto_increment primary key,
guest_id int(14) unique not null,
first_name varchar(20),
last_name varchar(20),
gender tinyint(1),
age smallint,
ethnicity varchar(15),
from_country varchar(20),
occupation smallint,
language varchar(100),
mobile_code smallint,
mobile varchar(15),
name_dest varchar(50),
purpose smallint
);

--tg_guest_request
-- using guest_id relate to tg_guest_info

--"preferred_services":
	-- 1=meals
	-- 2=transportation
	-- 3=laundry
	-- 4=room cleaning
	-- 5=internet
	-- 6=Language lesson
	-- 7=Airport pick-up
	-- 8=Wifi
	-- 9=Legal guardianship

drop table if exists tg_guest_request;
create table tg_guest_request(
id int unsigned not null auto_increment primary key,
guest_id int(14) unique not null,
country varchar(20) not null,
street_number varchar(6),
route varchar(30),
locality varchar(20) not null,
administrative_area_level_1 varchar(20),
postal_code varchar(10),
lat float(10,6) not null,
lng float(10,6) not null,
arrival date,
departure date,
preferred_services varchar(150),
d_price decimal(6,2),
m_price decimal(8,2),
is_avail tinyint(1) unsigned default 1,
intro text
);


--no use
--tg_houses_list
drop table if exists tg_houses_list
create table tg_houses_list(
house_id int unsigned not null auto_increment primary key,
user_id int not null
);

