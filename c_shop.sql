CREATE TABLE coffee_shop(
admin char(10) not null,
password char(10) not NULL
);

CREATE TABLE coff_customer(
c_user int(10) PRIMARY KEY not null, 
c_name char(20) not null,
c_phone int(11) not null,
c_address varchar(20) not null,
c_email varchar(20) not null
);

CREATE TABLE Inventory(
c_code char(10) PRIMARY KEY not null,
c_bean char(10) not null,
price int not null,
c_roast char(20) not null,
bagSize int(64) not null
);

CREATE TABLE Inventory_Offer(
Arabica char(20) not null,
Robusta char(20) not null,
liberica char(20) not null,
Excesla char(20) not null
);

CREATE TABLE Coff_Employees(
e_ID int(10) PRIMARY KEY not null,
e_name char(20) not null,
e_phone int(11) not null,
e_address varchar(20) not null,
e_email char(20) not null,
payRate int(20) not null
);

CREATE TABLE Check_Out(
b_ID int(10) not null,
c_user int(10) not null,
trackingNum int(50) not null,
total int(100) not null
PRIMARY KEY(b_ID),
FOREIGN KEY(c_user) REFERENCES coff_customer(c_user) 
);

CREATE TABLE SCHED_ORDER(
sch_ID int(10) not null,
e_ID int(10) not null,
c_code int(10) not null,
TrackingShipments int(50) not null
PRIMARY KEY(sch_ID),
FOREIGN KEY(e_ID) REFERENCES Coff_Employees(e_ID),
FOREIGN KEY(c_code) REFERENCES Inventory(c_code)
);
