
CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `role` text DEFAULT NULL,
  `role_id` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO admin_user VALUES("1","Mridha","Belal Hasnain","admin","21232f297a57a5a743894a0e4a801fc3","Administrator","1");



 

CREATE TABLE `company_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name_first_part` text NOT NULL,
  `comapnay_name_last_part` text NOT NULL,
  `address` text NOT NULL,
  `logo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO company_info VALUES("1","Missionpara","Jam-E-Masjid","16/41, MissionPara Road, <br>
Narayanganj Sadar, Narayanganj","none");




CREATE TABLE `ecms_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `members_id` text NOT NULL,
  `invoice_no` text NOT NULL,
  `invoice_date` text NOT NULL,
  `debit_amount` text NOT NULL,
  `credit_amount` text NOT NULL,
  `blance` text NOT NULL,
  `narration` text NOT NULL,
  `paid_id` text NOT NULL,
  `dues_id` int(11) NOT NULL,
  `blance_id` int(11) NOT NULL,
  `gn_date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

INSERT INTO ecms_fees VALUES("1","1001","0","2020-08-02","4500","0","0","Dec\'2019 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("2","1002","0","2020-08-02","7000","0","0","Feb\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("3","1003","0","2020-08-02","1000","0","1000","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("4","1004","0","2020-08-02","3300","0","3300","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("5","1006","0","2020-08-02","3500","0","3500","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("6","1007","0","2020-08-02","0","300","-300","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("7","1009","0","2020-08-02","3000","0","3000","Nov\'19 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("8","1010","0","2020-08-02","400","0","400","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("9","1011","0","2020-08-02","3500","0","3500","Feb\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("10","1012","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("11","1013","0","2020-08-02","1500","0","1500","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("12","1014","0","2020-08-02","0","1000","-1000","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("13","1015","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("14","1016","0","2020-08-02","1000","0","1000","July\'2020 & Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("15","1018","0","2020-08-02","2800","0","0","Feb\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("16","1020","0","2020-08-02","2500","0","2500","April\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("17","1021","0","2020-08-02","2600","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("18","1022","0","2020-08-02","3000","0","3000","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("19","1023","0","2020-08-02","1000","0","1000","April\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("20","1025","0","2020-08-02","0","500","-500","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("21","1027","0","2020-08-02","2700","0","2700","Dec\'2019 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("22","1028","0","2020-08-02","6500","0","6500","Aug\'2019 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("23","1030","0","2020-08-02","1800","0","1800","Dec\'2019 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("24","1031","0","2020-08-02","2100","0","0","Feb\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("25","1034","0","2020-08-02","1800","0","1800","Dec\'2019 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("26","1035","0","2020-08-02","5500","0","0","Oct\'2019 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("27","1036","0","2020-08-02","1200","0","1200","March\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("28","1037","0","2020-08-02","2000","0","2000","May\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("29","1038","0","2020-08-02","3500","0","3500","Feb\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("30","1039","0","2020-08-02","500","0","500","Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("31","1001","0","2020-09-23","500","0","0","Monthly-Bill Sep\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("32","1002","0","2020-09-23","1000","0","0","Monthly-Bill","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("33","1003","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("34","1004","0","2020-09-23","300","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("35","1005","0","2020-09-23","0","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("36","1006","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("37","1007","0","2020-09-23","300","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("38","1008","0","2020-09-23","0","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("39","1009","0","2020-09-23","300","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("40","1010","0","2020-09-23","200","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("41","1011","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("42","1012","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("43","1013","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("44","1014","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("45","1015","0","2020-09-23","200","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("46","1016","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("47","1017","0","2020-09-23","0","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("48","1018","0","2020-09-23","400","0","0","Monthly-Bill","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("49","1019","0","2020-09-23","0","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("50","1020","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("51","1021","0","2020-09-23","200","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("52","1022","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("53","1023","0","2020-09-23","200","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("54","1024","0","2020-09-23","0","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("55","1025","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("56","1026","0","2020-09-23","0","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("57","1027","0","2020-09-23","300","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("58","1028","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("59","1029","0","2020-09-23","300","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("60","1030","0","2020-09-23","200","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("61","1031","0","2020-09-23","300","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("62","1032","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("63","1033","0","2020-09-23","0","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("64","1034","0","2020-09-23","200","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("65","1035","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("66","1036","0","2020-09-23","200","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("67","1037","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("68","1038","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("69","1039","0","2020-09-23","500","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("70","1040","0","2020-09-23","200","0","0","Monthly-Bill","0","0","0","2020-09-23");
INSERT INTO ecms_fees VALUES("71","1004","0","2020-10-02","0","1200","-900","Oct\'2019 to Jan\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("72","1081","0","2020-10-02","0","600","0","Feb\'2020 to April\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("73","1037","0","2020-10-02","0","2000","-1500","May\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("74","1003","0","2020-10-02","0","1000","-500","July\'2020 & Aug\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("75","1012","0","2020-10-02","0","1000","-500","Sep\'2020 & Oct\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("76","1015","0","2020-10-02","0","400","-200","Sep\'2020 & Oct\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("77","1018","0","2020-10-02","0","2000","0","Feb\'2020 to June\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("78","1027","0","2020-10-03","0","600","-300","Dec\'2019 & Jan\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("79","1037","0","2020-10-07","0","500","-2000","Sep\'2020","0","0","0","0000-00-00");
INSERT INTO ecms_fees VALUES("80","1039","0","2020-10-07","0","500","0","Aug\'2020","0","0","0","0000-00-00");





CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_id` varchar(255) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Desigination` varchar(255) DEFAULT NULL,
  `DOB` varchar(255) DEFAULT NULL,
  `Joining_Date` varchar(255) DEFAULT NULL,
  `Mobile_number` varchar(255) DEFAULT NULL,
  `edu_qulification` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Salary` varchar(255) DEFAULT NULL,
  `Status_employee` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO employee VALUES("1","001","Md. Mahfuzur","Rahman","Imam","2020-09-01","2020-09-01","0","Kamil","Missionpara","13000","1");
INSERT INTO employee VALUES("2","002","Md.Shahidul Islam","Sayeed","Mowazzin","2020-09-01","2020-09-01","01749582650","Alim","Missionpara","12000","1");
INSERT INTO employee VALUES("3","003","Mawlana","Habibullah","Khadem","2020-09-01","2020-09-01","01758423523","Hafez","Kishoreganj","8000","1");



CREATE TABLE `expens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `narration` text NOT NULL,
  `amount` text NOT NULL,
  `date` date NOT NULL,
  `salary_date` date NOT NULL,
  `head_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




 

CREATE TABLE `expens_head` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `expense_head` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO expens_head VALUES("1","Electric Bill");
INSERT INTO expens_head VALUES("2","Gas Bill");
INSERT INTO expens_head VALUES("4","Development work");
INSERT INTO expens_head VALUES("5","Misc. Expenses");





CREATE TABLE `income` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `narration` text NOT NULL,
  `amount` text NOT NULL,
  `date` date NOT NULL,
  `invoice_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO income VALUES("1","Friday","Dan Box","3400","2020-09-04","2020-09-23");
INSERT INTO income VALUES("2","Others Donaton","RCT # 868-869 for dev, work","5200","2020-09-04","2020-09-28");
INSERT INTO income VALUES("3","Friday","Dan Box","3450","2020-09-11","2020-09-24");
INSERT INTO income VALUES("4","Others Donaton","RCT # 870 for development work","1000","2020-09-11","2020-09-24");
INSERT INTO income VALUES("5","Friday","Dan Box","4300","2020-09-18","2020-09-24");
INSERT INTO income VALUES("6","Others Donaton","RCT # 871 for development work","5000","2020-09-18","2020-09-24");
INSERT INTO income VALUES("7","Friday","Dan Box","4320","2020-09-25","2020-09-26");
INSERT INTO income VALUES("8","Others Donaton","RCT # 872 for development work","500","2020-09-25","2020-09-26");
INSERT INTO income VALUES("9","Inner Donation Box","Parish as donate for electric load increase,","3000","2020-10-02","2020-10-05");
INSERT INTO income VALUES("10","Inner Donation Box","Shiplu as donate for electric load increase,","3000","2020-10-02","2020-10-05");
INSERT INTO income VALUES("11","Inner Donation Box","Sohebas donate for electric load increase,","1000","2020-10-02","2020-10-05");
INSERT INTO income VALUES("12","Friday","Dan Box  (outer Dan Box-3140/=)","6240","2020-10-02","2020-10-03");
INSERT INTO income VALUES("13","Inner Donation Box","Adv. Azhar as donate for electric load increase,","2000","2020-10-05","2020-10-05");
INSERT INTO income VALUES("14","Inner Donation Box","Abu Zafar ahmed Babul as donate for electric load increase, (873)","25000","2020-10-07","2020-10-09");
INSERT INTO income VALUES("15","Inner Donation Box","Towhidul Islam (RCT-874)","1000","2020-10-07","2020-10-09");
INSERT INTO income VALUES("16","Friday","Dan box","3073","2020-10-09","2020-10-10");
INSERT INTO income VALUES("17","Others Donaton","RCT # 879-882","7500","2020-10-09","2020-10-10");





CREATE TABLE `masjid_property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Property_id` text NOT NULL,
  `Property_name` text NOT NULL,
  `rent_t_name` text NOT NULL,
  `Description` text NOT NULL,
  `Rent` text NOT NULL,
  `s_mony` text NOT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO masjid_property VALUES("1","001","Shop # 1","Mr. Lokman","MissionPara","4500","0","2020-09-12 16:46:49");
INSERT INTO masjid_property VALUES("2","002","Shop # 2","Mr. Mizan","Missionpara","2000","","2020-09-12 16:49:29");
INSERT INTO masjid_property VALUES("3","003","Shop # 3","Mr. Kamal","Missionpara","2500","","2020-09-12 16:50:31");
INSERT INTO masjid_property VALUES("4","004","Shop # 4","Mr. Dulal","Missionpara","4000","","2020-09-12 16:51:21");
INSERT INTO masjid_property VALUES("5","005","Shop # 5","Mr. Dulal","Missionpara","4500","","2020-09-12 16:51:52");
INSERT INTO masjid_property VALUES("6","006","Shop # 6","Mr. Titu","Missionpara","2000","","2020-09-12 16:52:37");
INSERT INTO masjid_property VALUES("7","007","House # 1","Mr. Sharif","Missionpara","3500","","2020-09-12 16:54:36");





CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_code` text NOT NULL,
  `type` text NOT NULL,
  `Committee_m_desigination` text DEFAULT NULL,
  `commitee_serial` text NOT NULL,
  `ec_sub_fees` text DEFAULT NULL,
  `fixed` text NOT NULL,
  `First_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `Mobile_number` text NOT NULL,
  `Membership_date` text NOT NULL,
  `Address` text NOT NULL,
  `Active_status` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

INSERT INTO members VALUES("1","1001","Committee Member","President","1","500","500","Alhaj Abdus","Samad","01716220582","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("2","1002","Committee Member","Motowalli","2","1000","3500","Abu Zafar Ahmed","Babul","01911360213","01/01/2020","16/32, Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("3","1003","Committee Member","Senior vice-president","3","500","0","Anwar","Hossain Khan","01715910443","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("4","1004","Committee Member","Vice-president","4","300","200","Alhaj Abdus","Salam Bhuiyan","01838799113","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("5","1005","Committee Member","Vice-president","5","0","0","Alhaj Mohammad","Ali Bepari","01993300176","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("6","1006","Committee Member","Vice-president","6","500","0","Jahid","Ahmed","01612150375","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("7","1007","Committee Member","Advisor","7","300","0","Al","Amin","01712258563","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("8","1008","Committee Member","Advisor","8","0","300","Professor Fazlul","Haque","01944702516","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("9","1009","Committee Member","Advisor","9","300","300","Alhaj Md.","Enamul Haq","01715016116","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("10","1010","Committee Member","Advisor","10","200","0","Md. Abul","Kalam","01711621997","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("11","1011","Committee Member","Advisor","11","500","0","Shahjahan","Ahmed","01715178050","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("12","1012","Committee Member","General Secretary","12","500","0","Shariful Islam","Arfan","01672712576","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("13","1013","Committee Member","Joint General Secretary","13","500","100","Asaduzzaman","Parish","01716440440","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("14","1014","Committee Member","Treasurer","14","500","0","Mridha Md Belal","Hasnain Shiplu","01713336597","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("15","1015","Committee Member","Assistant Treasurer","15","200","0","Md. Ramjanul","Islam Shoaib","01672306617","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("16","1016","Committee Member","Internal Auditor","16","500","0","Kamrul Hassan","Chowdhury Ashiq","01727367070","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("17","1017","Committee Member","Internal Auditor","17","0","0","Samsuzzaman","Tamim","01672490868","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("18","1018","Committee Member","Internal Auditor","18","400","100","Adv. Azharul","Islam","01911645939","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("19","1019","Committee Member","Internal Auditor","19","0","0","Aminul","Islam (Ahad)","01672306616","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("20","1020","Committee Member","Office Secretary","20","500","0","Sohel","Sikder","01681183722","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("21","1021","Committee Member","Publicity editor","21","200","0","Mukul","H","01316457525","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("22","1022","Committee Member","Co-publicity editor","22","500","0","Tonoy","H","017111111111","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("23","1023","Committee Member","Member","23","200","100","Fazlul Haque","Sikder","01812420100","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("24","1024","Committee Member","Member","24","0","0","Jamal","sir","01715186828","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("25","1025","Committee Member","Member","25","500","300","Amir Khasru","Babu","01715760695","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("26","1026","Committee Member","Member","26","0","0","Md. Adnan","Ansari","01715208800","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("27","1027","Committee Member","Member","27","300","150","Din","Islam Dilu","01711453054","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("28","1028","Committee Member","Member","28","500","0","Shafiqul","Islam Kajal","01720316796","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("29","1029","Committee Member","Member","29","300","0","Masudur","Rahman","01674499323","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("30","1030","Committee Member","Member","30","200","100","Titumir","Mollah","01912182015","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("31","1031","Committee Member","Member","31","300","150","Rashed","Sarkar","01914739885","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("32","1032","Committee Member","Member","32","500","0","K.M.Fazlul","Haque","01684942139","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("33","1033","Committee Member","Member","33","0","0","Akhtaruzzaman","Shaheen","01713081947","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("34","1034","Committee Member","Member","34","200","0","Mahbub Ali","Sumon","01954442729","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("35","1035","Committee Member","Member","35","500","0","Arifur","Rahman Rana","01911204836","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("36","1036","Committee Member","Member","36","200","0","Abdul","Basit","01711066978","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("37","1037","Committee Member","Member","37","500","200","Shah","Alam","01715191404","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("38","1038","Committee Member","Member","38","500","100","Abdul","Jalil","01714093741","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("39","1039","Committee Member","Member","39","500","300","Md.Fazlul Haque","Bhuiyan","01684942139","01/01/2020","Tri Bhaban,Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("40","1040","Committee Member","Member","40","200","0","Sayef Md.","Akash","01956212359","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("41","1041","General Member","","","0","500","Syed","Ahmed","000000","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("42","1042","General Member","","","0","300","Md. Khalilur","Rahman","00000","2020-01-01","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("43","1043","General Member","","","0","100","Ziaur Rahman","Russel","00","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("44","1044","General Member","","","0","100","Abul","Kashem","00","01/01/2020","Kashmi Bhaban,Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("45","1045","General Member","","","0","500","Md. Shahabuddin","Ahmed","0","01/01/2020","Shantir Nir,Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("46","1046","General Member","","","0","100","Tridiv","Ahmed","0","01/01/2020","19/2,Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("47","1047","General Member","","","0","100","Dulal","Ahmmed","01713339968","01/01/2020","19/2,Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("48","1048","General Member","","","0","100","Ahsan Uddin","Dulal","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("49","1049","General Member","","","0","100","Romel","Hossain","01923119330","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("50","1050","General Member","","","0","200","Abu","Siddique","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("51","1051","General Member","","","0","100","Hasina","Moslem","0","01/01/2020","Tri Bhaban,Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("52","1052","General Member","","","0","150","M.A.","Kabir","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("53","1053","General Member","","","0","100","Basir","Ahmed","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("54","1054","General Member","","","0","100","Shah","Jalal","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("55","1055","General Member","","","0","100","Abul Hashem","Chowdhury","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("56","1056","General Member","","","0","50","Ali","Akber","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("57","1057","General Member","","","0","500","Md.Borkat","Ullah","01912756849","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("58","1058","General Member","","","0","500","Md.Shamsul","Islam","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("59","1059","General Member","","","0","200","Md. Sirajil","Islam","0","01/01/2020","Missionpara, Narayanganj. (Don Chamber)","1");
INSERT INTO members VALUES("60","1060","General Member","","","0","100","Md.Abdul Hamid","Bashani","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("61","1061","General Member","","","0","100","Md.Abdul","Hamid","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("62","1062","General Member","","","0","120","Rafiqul Islam","Bachchu","01672306617","01/01/2020","16/40,Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("63","1063","General Member","","","0","100","Sobel","Hossain","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("64","1064","General Member","","","0","200","Md. Luthfor","Rahman","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("65","1065","General Member","","","0","200","Omar Ali","Mollah","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("66","1066","General Member","","","0","100","Mostaq","Ahmed","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("67","1067","General Member","","","0","100","Akter","Hossain","0","01/01/2020","Missionpara, Narayanganj.","1");
INSERT INTO members VALUES("68","1068","General Member","0","","0","50","Mrs.","Aziz","0","2020-09-01","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("69","1069","General Member","0","","0","100","Shamsul Alam","Chowdhury","01727367070","2020-09-01","27,  Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("70","1070","General Member","0","","0","200","Shamim","Ahmed","0","2020-09-01","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("71","1071","General Member","0","","0","500","Azizur","Rahman","0","2020-09-01","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("72","1072","General Member","0","","0","0","Md.Adnan","Ansari","0","2020-09-17","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("73","1073","General Member","0","","0","0","Late Abdul","Hannan","0","2020-09-01","16/40,  Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("74","1074","General Member","0","","0","100","Abdur","Razzak","0","2020-09-01","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("75","1075","General Member","0","","0","200","Md.Abu","Sayed","0","2020-09-01","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("76","1076","General Member","0","","0","100","Md.Mamun","Ahmed","0","2020-09-01","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("77","1077","General Member","0","","0","40","Akteruzzaman","Bachchu","0","2020-09-01","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("78","1078","General Member","0","","0","200","Abdul","Kadir","01949388531","2020-09-01","Sukh Bash Property,  Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("79","1079","General Member","0","","0","50","Md.","Rafin","0","2020-09-17","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("80","1080","General Member","0","","0","500","Md.Younus","Bhuiyan","01913484911","2020-09-01","Missionpara,Narayanganj.","1");
INSERT INTO members VALUES("81","1081","Committee Member","","1041","200","0","Md.","Rashedul","01925769936","2020-10-01","Missionpara","1");





CREATE TABLE `salary_payment` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Employee_id` text DEFAULT NULL,
  `salary_amount` text DEFAULT NULL,
  `advanced_payment` text DEFAULT NULL,
  `gn_date` date DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO salary_payment VALUES("1","001","13000","0","2020-09-24","2020-09-24");
INSERT INTO salary_payment VALUES("2","002","12000","0","2020-09-24","2020-09-24");
INSERT INTO salary_payment VALUES("3","003","8000","0","2020-09-24","2020-09-24");





CREATE TABLE `shop_rent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` text NOT NULL,
  `invoice_no` text NOT NULL,
  `invoice_date` text NOT NULL,
  `debit_amount` text NOT NULL,
  `credit_amount` text NOT NULL,
  `blance` text NOT NULL,
  `narration` text NOT NULL,
  `paid_id` text NOT NULL,
  `dues_id` int(11) NOT NULL,
  `blance_id` int(11) NOT NULL,
  `gn_date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO shop_rent VALUES("1","001`","0","2020-09-12","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO shop_rent VALUES("2","002","0","2020-09-12","16000","0","16000","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO shop_rent VALUES("3","003","0","2020-09-22","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO shop_rent VALUES("4","004","0","2020-09-22","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO shop_rent VALUES("5","005","0","2020-09-22","13500","0","13500","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO shop_rent VALUES("6","006","0","2020-09-22","23000","0","23000","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO shop_rent VALUES("7","007","0","2020-09-22","3500","0","3500","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO shop_rent VALUES("8","001","0","2020-09-23","4500","0","0","Monthly Rent","0","0","0","2020-09-23");
INSERT INTO shop_rent VALUES("9","002","0","2020-09-23","2000","0","0","Monthly Rent","0","0","0","2020-09-23");
INSERT INTO shop_rent VALUES("10","003","0","2020-09-23","2500","0","0","Monthly Rent","0","0","0","2020-09-23");
INSERT INTO shop_rent VALUES("11","004","0","2020-09-23","4000","0","0","Monthly Rent","0","0","0","2020-09-23");
INSERT INTO shop_rent VALUES("12","005","0","2020-09-23","4500","0","0","Monthly Rent","0","0","0","2020-09-23");
INSERT INTO shop_rent VALUES("13","006","0","2020-09-23","2000","0","0","Monthly Rent","0","0","0","2020-09-23");
INSERT INTO shop_rent VALUES("14","007","0","2020-09-23","3500","0","0","Monthly Rent","0","0","0","2020-09-23");





CREATE TABLE `subscription_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `members_id` text NOT NULL,
  `invoice_no` text NOT NULL,
  `invoice_date` text NOT NULL,
  `debit_amount` text NOT NULL,
  `credit_amount` text NOT NULL,
  `blance` text NOT NULL,
  `narration` text NOT NULL,
  `paid_id` text NOT NULL,
  `dues_id` int(11) NOT NULL,
  `blance_id` int(11) NOT NULL,
  `gn_date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

INSERT INTO subscription_fees VALUES("1","1001","0","2020-08-02","500","0","500","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("2","1002","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("3","1004","0","2020-08-02","2400","0","2400","Sep\'2019 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("4","1025","0","2020-08-02","0","300","-300","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("5","1041","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("6","1031","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("7","1042","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("8","1043","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("9","1009","0","2020-08-02","600","0","600","July\'2020 & Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("10","1044","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("11","1030","0","2020-08-02","0","400","-400","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("12","1008","0","2020-08-02","600","0","600","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("13","1045","0","2020-08-02","0","2000","-2000","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("14","1046","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("15","1047","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("16","1048","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("17","1049","0","2020-08-02","800","0","800","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("18","1050","0","2020-08-02","1200","0","1200","March\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("19","1039","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("20","1051","0","2020-08-02","0","100","-100","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("21","1052","0","2020-08-02","0","600","-600","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("22","1023","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("23","1053","0","2020-08-02","100","0","100","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("24","1054","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("25","1055","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("26","1056","0","2020-08-02","100","0","100","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("27","1057","0","2020-08-02","500","0","500","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("28","1027","0","2020-08-02","600","0","600","May\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("29","1058","0","2020-08-02","2000","0","2000","May\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("30","1059","0","2020-08-02","1600","0","1600","Jan\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("31","1060","0","2020-08-02","100","0","100","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("32","1061","0","2020-08-02","100","0","100","May\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("33","1062","0","2020-08-02","0","0","0","May\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("34","1013","0","2020-08-02","800","0","800","Jan\'2020 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("35","1063","0","2020-08-02","0","400","-400","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("36","1064","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("37","1065","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("38","1066","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("39","1067","0","2020-08-02","1400","0","1400","July\'2019 to Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("40","1068","0","2020-08-02","0","200","-200","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("41","1069","0","2020-08-02","800","0","800","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("42","1070","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("43","1018","0","2020-08-02","800","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("44","1071","0","2020-08-02","2500","0","2500","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("45","1074","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("46","1075","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("47","1037","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("48","1010","0","2020-08-02","800","0","800","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("49","1077","0","2020-08-02","0","240","-240","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("50","1038","0","2020-08-02","800","0","800","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("51","1079","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("52","1080","0","2020-08-02","0","500","-500","Upto Aug\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("53","1001","0","2020-09-23 17:45:34","500","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("54","1002","0","2020-09-23 17:45:34","3500","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("55","1003","0","2020-09-23 17:45:34","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("56","1004","0","2020-09-23 17:45:34","200","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("57","1005","0","2020-09-23 17:45:34","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("58","1006","0","2020-09-23 17:45:34","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("59","1007","0","2020-09-23 17:45:34","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("60","1008","0","2020-09-23 17:45:34","300","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("61","1009","0","2020-09-23 17:45:34","300","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("62","1010","0","2020-09-23 17:45:34","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("63","1011","0","2020-09-23 17:45:34","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("64","1012","0","2020-09-23 17:45:34","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("65","1013","0","2020-09-23 17:45:34","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("66","1014","0","2020-09-23 17:45:34","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("67","1015","0","2020-09-23 17:45:34","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:34");
INSERT INTO subscription_fees VALUES("68","1016","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("69","1017","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("70","1018","0","2020-09-23 17:45:35","100","0","0","Monthly Subsciption Fees","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("71","1019","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("72","1020","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("73","1021","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("74","1022","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("75","1023","0","2020-09-23 17:45:35","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("76","1024","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("77","1025","0","2020-09-23 17:45:35","300","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("78","1026","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("79","1027","0","2020-09-23 17:45:35","150","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("80","1028","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("81","1029","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("82","1030","0","2020-09-23 17:45:35","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("83","1031","0","2020-09-23 17:45:35","150","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("84","1032","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("85","1033","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("86","1034","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("87","1035","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("88","1036","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("89","1037","0","2020-09-23 17:45:35","200","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("90","1038","0","2020-09-23 17:45:35","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("91","1039","0","2020-09-23 17:45:35","300","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("92","1040","0","2020-09-23 17:45:35","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("93","1041","0","2020-09-23 17:45:35","500","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:35");
INSERT INTO subscription_fees VALUES("94","1042","0","2020-09-23 17:45:36","300","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("95","1043","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("96","1044","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("97","1045","0","2020-09-23 17:45:36","500","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("98","1046","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("99","1047","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("100","1048","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("101","1049","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("102","1050","0","2020-09-23 17:45:36","200","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("103","1051","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("104","1052","0","2020-09-23 17:45:36","150","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("105","1053","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("106","1054","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("107","1055","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("108","1056","0","2020-09-23 17:45:36","50","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("109","1057","0","2020-09-23 17:45:36","500","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("110","1058","0","2020-09-23 17:45:36","500","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("111","1059","0","2020-09-23 17:45:36","200","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("112","1060","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("113","1061","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("114","1062","0","2020-09-23 17:45:36","120","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("115","1063","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("116","1064","0","2020-09-23 17:45:36","200","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("117","1065","0","2020-09-23 17:45:36","200","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("118","1066","0","2020-09-23 17:45:36","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:36");
INSERT INTO subscription_fees VALUES("119","1067","0","2020-09-23 17:45:37","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("120","1068","0","2020-09-23 17:45:37","50","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("121","1069","0","2020-09-23 17:45:37","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("122","1070","0","2020-09-23 17:45:37","200","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("123","1071","0","2020-09-23 17:45:37","500","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("124","1072","0","2020-09-23 17:45:37","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("125","1073","0","2020-09-23 17:45:37","0","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("126","1074","0","2020-09-23 17:45:37","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("127","1075","0","2020-09-23 17:45:37","200","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("128","1076","0","2020-09-23 17:45:37","100","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("129","1077","0","2020-09-23 17:45:37","40","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("130","1078","0","2020-09-23 17:45:37","200","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("131","1079","0","2020-09-23 17:45:37","50","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("132","1080","0","2020-09-23 17:45:37","500","0","0","Monthly Subsciption Fees","0","0","0","2020-09-23 17:45:37");
INSERT INTO subscription_fees VALUES("133","1013","0","2020-09-30","0","100","0","Jan\'2020","0","0","0","0000-00-00");
INSERT INTO subscription_fees VALUES("134","1081","0","2020-08-02","0","0","0","Upto Aug\'2020","0","0","0","0000-00-00");



