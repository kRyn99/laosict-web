drop table vilove.provinces;
drop table vilove.districts;

CREATE TABLE `provinces` (
                             `id` bigint(20) NOT NULL AUTO_INCREMENT,
                             `province_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                             `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                             PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO provinces (province_code,province_name) VALUES
                                                        ('STT','Star Telecom'),
                                                        ('ATA','Atapeu'),
                                                        ('BOK','Bokeo'),
                                                        ('BOL','Bolikhamxay'),
                                                        ('CHA','Champasac'),
                                                        ('HUA','Huaphan'),
                                                        ('KHA','Khammuon'),
                                                        ('LUN','Lunnamtha'),
                                                        ('LUP','Luangphapang'),
                                                        ('OUD','Odomxay');
INSERT INTO provinces (province_code,province_name) VALUES
                                                        ('PHO','Phongsaly'),
                                                        ('SAL','Salavan'),
                                                        ('SAV','Savannakhet'),
                                                        ('VIC','Vientian Capital'),
                                                        ('VIP','Vientian Province'),
                                                        ('XAY','Xayaboli'),
                                                        ('XEK','Xekong'),
                                                        ('XIE','Xiekhouang'),
                                                        ('XAB','Xaysambun');

CREATE TABLE `districts` (
                             `id` bigint(20) NOT NULL AUTO_INCREMENT,
                             `province_id` bigint(20) NOT NULL DEFAULT 1,
                             `district_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                             `district_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                             `province_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
                             PRIMARY KEY (`id`),
                             KEY `province_district` (`province_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (18,'PHOUVONG','PhouVong','ATA'),
                                                                                  (18,'SAMAKKHIXAI','Samakkhixai','ATA'),
                                                                                  (18,'SANAMXAI','SANAMXAI','ATA'),
                                                                                  (18,'SANXAI','Sanxai','ATA'),
                                                                                  (18,'XAYSETTHA','XaySetTha','ATA'),
                                                                                  (19,'HOUYSAI','HOUYSAI','BOK'),
                                                                                  (19,'MEUNG','MEUNG','BOK'),
                                                                                  (19,'PARKTHA','PARKTHA','BOK'),
                                                                                  (19,'PHAOUDOUM','PHAOUDOUM','BOK'),
                                                                                  (19,'TONPHEUNG','TONPHEUNG','BOK');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (20,'BORIKHAN','BORIKHAN','BOL'),
                                                                                  (20,'KHAMKEUT','Kham Keut','BOL'),
                                                                                  (20,'PAKKADING','PAKKADING','BOL'),
                                                                                  (20,'PARKSUN','PARKSUN','BOL'),
                                                                                  (20,'THAPHABAT','Thaphabat','BOL'),
                                                                                  (20,'VIENGTHONG','Vieng Thong','BOL'),
                                                                                  (20,'SAICHAMPHON','SAICHAMPHON','BOL'),
                                                                                  (21,'BACHIANGCHAREUNSOUK','BACHIANGCHAREUNSOUK','CHA'),
                                                                                  (21,'CHAMPASAK','Champasak','CHA'),
                                                                                  (21,'KHONG','khong','CHA');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (21,'MOUNLAPAMOK','Mounlapamok','CHA'),
                                                                                  (21,'PAKXE','PAKXE','CHA'),
                                                                                  (21,'PAKXONG','Pakxong','CHA'),
                                                                                  (21,'PATHOUMPHON','PATHOUMPHON','CHA'),
                                                                                  (21,'PHONTHONG','phonthong','CHA'),
                                                                                  (21,'XANASOMBOUN','XANASOMBOUN','CHA'),
                                                                                  (21,'SOUKHOUMA','SOUKHOUMA','CHA'),
                                                                                  (22,'MEUANGET','MEUANGET','HUA'),
                                                                                  (22,'MEUANGHIEM','MEUANGHIEM','HUA'),
                                                                                  (22,'HUAMEUANG','HUAMEUANG','HUA');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (22,'MUANGKOUAN','MUANGKOUAN','HUA'),
                                                                                  (22,'SOPBAO','sopbao','HUA'),
                                                                                  (22,'VIENGXAI','VIENGXAI','HUA'),
                                                                                  (22,'XAMNUEA','xamnuea','HUA'),
                                                                                  (22,'XAMTAI','xamtai','HUA'),
                                                                                  (22,'XIANGKHOR','XIANGKHOR','HUA'),
                                                                                  (22,'MEUANGXON','MEUANGXON','HUA'),
                                                                                  (23,'BOUALAPHA','Boualapha','KHA'),
                                                                                  (23,'HINBOUN','Hinboun','KHA'),
                                                                                  (23,'KHUNKHAM','KHUNKHAM','KHA');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (23,'MAHAXAI','MAHAXAI','KHA'),
                                                                                  (23,'NAKAY','NAKAY','KHA'),
                                                                                  (23,'NONGBOK','Nongbok','KHA'),
                                                                                  (23,'THAKHEK','Thakhek','KHA'),
                                                                                  (23,'XAIBOUATHONG','XAIBOUATHONG','KHA'),
                                                                                  (23,'XEBANGFAI','XEBANGFAI','KHA'),
                                                                                  (23,'GNOMMALAT','GNOMMALAT','KHA'),
                                                                                  (24,'LONG','Long','LUN'),
                                                                                  (24,'LOUANG-NAMTHA','LOUANG-NAMTHA','LUN'),
                                                                                  (24,'NALE','NALE','LUN');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (24,'SING','Sing','LUN'),
                                                                                  (24,'VIANGPHOUKHA','VIANGPHOUKHA','LUN'),
                                                                                  (25,'CHOMPETH','CHOMPETH','LUP'),
                                                                                  (25,'LUANGPRABANG','Luangprabang','LUP'),
                                                                                  (25,'NARN','NARN','LUP'),
                                                                                  (25,'NGOY','NGOY','LUP'),
                                                                                  (25,'NUMBARK','NUMBARK','LUP'),
                                                                                  (25,'PARKOU','PARKOU','LUP'),
                                                                                  (25,'PARKSEANG','PARKSEANG','LUP'),
                                                                                  (25,'PHONETHONG','Phonethong','LUP');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (25,'PONXAI','PONXAI','LUP'),
                                                                                  (25,'POUKOUN','POUKOUN','LUP'),
                                                                                  (25,'XIENGNGERN','XIENGNGERN','LUP'),
                                                                                  (26,'BENG','Beng','OUD'),
                                                                                  (26,'HOUN','Houn','OUD'),
                                                                                  (26,'LA','LA','OUD'),
                                                                                  (26,'NAMO','NAMO','OUD'),
                                                                                  (26,'NGA','Nga','OUD'),
                                                                                  (26,'PAKBENG','PAKBENG','OUD'),
                                                                                  (26,'XAI','XAI','OUD');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (27,'BOUN-NUA','BOUN-NUA','PHO'),
                                                                                  (27,'BOUN-TAI','BOUN-TAI','PHO'),
                                                                                  (27,'KHOA','KHOA','PHO'),
                                                                                  (27,'MAI','Mai','PHO'),
                                                                                  (27,'GNOT-OU','GNOT-OU','PHO'),
                                                                                  (27,'PHONGSALI','PHONGSALI','PHO'),
                                                                                  (27,'SAMPHAN','Samphan','PHO'),
                                                                                  (28,'KHONGXEDON','Khongxedon','SAL'),
                                                                                  (28,'LAKHONPHENG','LAKHONPHENG','SAL'),
                                                                                  (28,'LAONGAM','Laongam','SAL');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (28,'SALAVANH','SALAVANH','SAL'),
                                                                                  (28,'SAMOUAY','SAMOUAY','SAL'),
                                                                                  (28,'TA-OY','TA-OY','SAL'),
                                                                                  (28,'TOUMLAN','TOUMLAN','SAL'),
                                                                                  (28,'VAPI','Vapi','SAL'),
                                                                                  (29,'ATSAPHANGTHONG','Atsaphangthong','SAV'),
                                                                                  (29,'ATSAPHONE','Atsaphone','SAV'),
                                                                                  (29,'CHAMPHONE','Champhone','SAV'),
                                                                                  (29,'KAISONEPHOMVIHAN','KAISONEPHOMVIHAN','SAV'),
                                                                                  (29,'NONG','Nong','SAV');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (29,'OUTHOUMPHONE','OUTHOUMPHONE','SAV'),
                                                                                  (29,'PHALANXAI','PHALANXAI','SAV'),
                                                                                  (29,'PHIN','PHIN','SAV'),
                                                                                  (29,'XEPON','XEPON','SAV'),
                                                                                  (29,'SONGKHONE','Songkhone','SAV'),
                                                                                  (29,'THAPANGTHONG','Thapangthong','SAV'),
                                                                                  (29,'VILABOULY','Vilabouly','SAV'),
                                                                                  (29,'XAIBOULY','XAIBOULY','SAV'),
                                                                                  (29,'XAIPHOUTHONG','XAIPHOUTHONG','SAV'),
                                                                                  (30,'CHANTHABULY','CHANTHABULY','VIC');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (30,'HADXAIFONG','HADXAIFONG','VIC'),
                                                                                  (30,'NAXAITHONG','NAXAITHONG','VIC'),
                                                                                  (30,'PARKNGUM','PARKNGUM','VIC'),
                                                                                  (30,'SANGTHONG','Sangthong','VIC'),
                                                                                  (30,'XAYSETHA','XAYSETHA','VIC'),
                                                                                  (30,'SIKHOTTABONG','SIKHOTTABONG','VIC'),
                                                                                  (30,'SISATTANAK','Sisattanak','VIC'),
                                                                                  (30,'XAYTHANY','Xaythany','VIC'),
                                                                                  (31,'FUANG','FUANG','VIP'),
                                                                                  (31,'HINHEUP','HINHEUP','VIP');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (31,'KASI','KASI','VIP'),
                                                                                  (31,'KEOOUDOM','Keooudom','VIP'),
                                                                                  (31,'MET','MET','VIP'),
                                                                                  (31,'MEUN','Meun','VIP'),
                                                                                  (31,'PHONHONG','PHONHONG','VIP'),
                                                                                  (31,'THOURAKHOM','THOURAKHOM','VIP'),
                                                                                  (31,'VANGVIANG','VANGVIANG','VIP'),
                                                                                  (31,'VIANGKHAM','VIANGKHAM','VIP'),
                                                                                  (31,'XANAKHAM','XaNaKham','VIP'),
                                                                                  (35,'HOM','Hom','XAB');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (35,'LONGXAN','LONGXAN','XAB'),
                                                                                  (35,'THATHOME','THATHOME','XAB'),
                                                                                  (32,'BOTEN','Boten','XAY'),
                                                                                  (32,'HONGSA','Hongsa','XAY'),
                                                                                  (32,'KENTHAO','Kenthao','XAY'),
                                                                                  (32,'KHOP','KHOP','XAY'),
                                                                                  (32,'NGEUN','Ngeun','XAY'),
                                                                                  (32,'PAKLAI','PAKLAI','XAY'),
                                                                                  (32,'PHIANG','PHIANG','XAY'),
                                                                                  (32,'THONGMIXAI','THONGMIXAI','XAY');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (32,'XAIGNABOURI','XAIGNABOURI','XAY'),
                                                                                  (32,'XAYSATHARN','XAYSATHARN','XAY'),
                                                                                  (32,'XIANGHON','XIANGHON','XAY'),
                                                                                  (33,'DARKCHEUNG','DARKCHEUNG','XEK'),
                                                                                  (33,'KALEUM','KALEUM','XEK'),
                                                                                  (33,'LAMARM','LAMARM','XEK'),
                                                                                  (33,'SALAVANH','Salavanh','XEK'),
                                                                                  (33,'THATENG','THATENG','XEK'),
                                                                                  (34,'KHAM','kham','XIE'),
                                                                                  (34,'KHOUN','Khoun','XIE');
INSERT INTO districts (province_id,district_code,district_name,province_code) VALUES
                                                                                  (34,'NONGHET','Nong Het','XIE'),
                                                                                  (34,'PEK','PEK','XIE'),
                                                                                  (34,'PHAXAI','PHAXAI','XIE'),
                                                                                  (34,'MOK-MAI','MOK-MAI','XIE'),
                                                                                  (34,'PHOUKOUT','PHOUKOUT','XIE'),
                                                                                  (29,'XONNABOULY','XONNABOULY','SAV'),
                                                                                  (35,'ANOUVONG','ANOUVONG','XAB'),
                                                                                  (35,'LONGCHENG','LONGCHENG','XAB'),
                                                                                  (25,'VIENGKHAM','VIENGKHAM','LUP');
