CREATE TABLE Grup(
GrupName varchar(20) PRIMARY KEY NOT NULL,
GrupSize int NOT NULL
);

CREATE TABLE Course(
CourseID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
CourseName varchar(20) NOT NULL,
StartDate date NOT NULL,
AmountWeeks int NOT NULL,
AmountLessons int NOT NULL,
GrupName varchar(20) NOT NULL,
FOREIGN KEY (`GrupName`) REFERENCES `Grup` (`GrupName`)
);

CREATE TABLE Classroom(
RoomID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
RoomNumber varchar(20) NOT NULL,
RoomName varchar(20) NOT NULL,
RoomSize int NOT NULL
);

CREATE TABLE Teacher(
TeacherID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
TeacherName VARCHAR(20) NOT NULL
);


CREATE TABLE GrupException(
GeID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
GrupName varchar(20) NOT NULL,
UnavailableDate date NOT NULL,
FOREIGN KEY (`GrupName`) REFERENCES `Grup` (`GrupName`)
);

CREATE TABLE Implementation(
ImplementationID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
GrupName varchar(20) NOT NULL,
CourseID int,
FOREIGN KEY (`GrupName`) REFERENCES `Grup` (`GrupName`),
FOREIGN KEY (`CourseID`) REFERENCES `Course` (`CourseID`)
);

CREATE TABLE Equipment(
EquipmentID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
EquipmentName varchar(20) NOT NULL,
RoomID int,
FOREIGN KEY (`RoomID`) REFERENCES `Classroom` (`RoomID`)
);

CREATE TABLE ContactLesson(
LessonID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
LessonName varchar(20) NOT NULL,
EquipmentID int,
TeacherID int,
CourseID int,
GrupName varchar(20) NOT NULL,
FOREIGN KEY (`EquipmentID`) REFERENCES `Equipment` (`EquipmentID`),
FOREIGN KEY (`TeacherID`) REFERENCES `Teacher` (`TeacherID`),
FOREIGN KEY (`CourseID`) REFERENCES `Course` (`CourseID`),
FOREIGN KEY (`GrupName`) REFERENCES `Grup` (`GrupName`)
);

CREATE TABLE TeacherException(
TrID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
TeacherID int,
UnavailableDate date NOT NULL,
FOREIGN KEY (`TeacherID`) REFERENCES `Teacher` (`TeacherID`)
);

CREATE TABLE Lecture(
LectureID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
TeacherID int,
CourseID int,
FOREIGN KEY (`TeacherID`) REFERENCES `Teacher` (`TeacherID`),
FOREIGN KEY (`CourseID`) REFERENCES `Course` (`CourseID`)
);

insert into Classroom(RoomNumber,RoomName, RoomSize)  values ('HOI3_A_1_28A', 'Pienryhmätila', 10);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_1_28B', 'Pienryhmätila', 10);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_1_30 ', 'Harjoitusluokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_1_32', 'Lastenhoidon luokka', 10);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_2_02', 'Teorialuokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_2_03', 'Teorialuokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_2_04', 'Nojatuoliluokka, iso', 40);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_2_05', 'Teorialuokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_2_28', 'Plinttiluokka', 120);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_2_24', 'Luovan toiminnan luokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_2_26', ' Anatomian luokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_A_2_28', 'Plinttiluokka', 20);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_1_06A', 'Sairaalahuone', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_1_06B', 'Virtuaalisimulaatio', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_1_09', 'Kuntotestihuone', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_1_10 ', 'Teorialuokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_1_30', 'Pellava', 10);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_1_31', 'Pihlaja', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_1_09 ', 'Kuntosali', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_2_02', 'Atk-luokka, iso', 40);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_2_03', 'Teorialuokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_2_05', 'Teorialuokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_2_27', 'Nojatuoliluokka, pieni', 20);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_B_2_28', 'Teorialuokka', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_Y1_03', 'Auditorio', 200);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_Y1_05', 'Sauna', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_Y1_07', 'Miesten pukuhuone', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_Y1_12', 'Naisten pukuhuone', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_Y1_24', 'Liikuntasali', 50);
insert into Classroom(RoomNumber,RoomName, RoomSize) values ('HOI3_Y2_08', 'Iso luentosali', 70);
