# MySQL-Front 3.2  (Build 7.19)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES 'latin1' */;
#
# Table structure for table Shoutbox
#

DROP TABLE IF EXISTS `shoutbox`;
CREATE TABLE `shoutbox` (
`id` int(12) NOT NULL auto_increment,
`name` char(25) default NULL,
`email` char(25) default NULL,
`message` char(255) default NULL,
`date` char(15) default NULL,
`ip` char(25) default NULL,
  PRIMARY KEY  (`id`)
   ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table Shoutbox
#

INSERT INTO `shoutbox` VALUES (1,'gabby','ulicigabriel@gmail.com','primul mesaj','01/07/2009','::1');
INSERT INTO `shoutbox` VALUES (2,'admin','ulicigabriel@gmail.com','gsgfsgts','01/07/2009','::1');
INSERT INTO `shoutbox` VALUES (3,'prof','ulicigabriel@gmail.com','ce mai faceti','01/07/2009','::1');
INSERT INTO `shoutbox` VALUES (4,'demo','ulicigabriel@gmail.com','baubau','01/07/2009','::1');
INSERT INTO `shoutbox` VALUES (5,'bau','ulicigabriel@gmail.com','baubau','01/07/2009','::1');
INSERT INTO `shoutbox` VALUES (6,'gabby','ulicigabriel@gmail.com','baubau','01/07/2009','::1');




Drop table if EXISTS `log`;

CREATE TABLE IF NOT EXISTS `log` (
`nr_crt` int(11) NOT NULL AUTO_INCREMENT,
`host` varchar(256) NOT NULL,
`ip_adresa` varchar(16) NOT NULL,
`browser` varchar(100) NOT NULL DEFAULT '',
`data` date NOT NULL,
`pagina_referinta` varchar(256) NOT NULL DEFAULT '',
PRIMARY KEY (`nr_crt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;





#
# Table structure for table utilizatori
#

DROP TABLE IF EXISTS `utilizatori`;
CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL auto_increment,
  `iuser` char(50) default NULL,
  `pass` char(50) default NULL,
  `nume` char(50) default NULL,
  `prenume` char(50) default NULL,
  `email` char(50) default NULL,
  `dn_an` char(50) default NULL,
  `dn_luna` char(50) default NULL,
  `dn_zi` char(50) default NULL,
  `sex` char(50) default NULL,
  `adresa` char(50) default NULL,
  `tara` char(50) default NULL,
  `judet` char(50) default NULL,
  `localitate` char(50) default NULL,
  `cod_postal` char(50) default NULL,
  `tel1` char(50) default NULL,
  `date1` int(11) unsigned default NULL,
  `status` char(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table utilizatori
#

INSERT INTO `utilizatori` VALUES (1,'gabby','imortal','Ulici','Gabriel','ulici_gabriel@yahoo.com','23','09','87','b','Bd. Expozitiei','RO','Bucuresti','Bucuresti','4344','0742081983',2009,NULL);
INSERT INTO `utilizatori` VALUES (2,'demo','demo','DemoN','DemoP','demo@yahoo.com','23','09','87','b','Bd. Expozitiei','RO','Satu Mare','Satu Mare','4344','0742032983',2009,NULL);

#
# Table structure for table Profi
#

DROP TABLE IF EXISTS `prof`;
CREATE TABLE `prof` (
  `id` int(11) NOT NULL auto_increment,
  `iuser` char(50) default NULL,
  `pass` char(50) default NULL,
  `nume` char(50) default NULL,
  `prenume` char(50) default NULL,
  `email` char(50) default NULL,
  `dn_an` char(50) default NULL,
  `dn_luna` char(50) default NULL,
  `dn_zi` char(50) default NULL,
  `sex` char(50) default NULL,
  `adresa` char(50) default NULL,
  `tara` char(50) default NULL,
  `judet` char(50) default NULL,
  `localitate` char(50) default NULL,
  `cod_postal` char(50) default NULL,
  `tel1` char(50) default NULL,
  `date1` int(11) unsigned default NULL,
  `status` char(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table Profi
#

INSERT INTO `prof` VALUES (1,'admin','adminp','admin1','admin1','admin@evolution.com','23','09','87','b','Bd. Expozitiei','RO','Bucuresti','Bucuresti','4344','0742081983',2009,NULL);

#
# Table structure for table dn_an
#

DROP TABLE IF EXISTS `dn_an`;
CREATE TABLE `dn_an` (
  `id` int(11) NOT NULL auto_increment,
  `val` char(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table dn_an
#


INSERT INTO `dn_an` VALUES (1,'1980');
INSERT INTO `dn_an` VALUES (2,'1981');
INSERT INTO `dn_an` VALUES (3,'1982');
INSERT INTO `dn_an` VALUES (4,'1983');
INSERT INTO `dn_an` VALUES (5,'1984');
INSERT INTO `dn_an` VALUES (6,'1985');
INSERT INTO `dn_an` VALUES (7,'1986');
INSERT INTO `dn_an` VALUES (8,'1987');
INSERT INTO `dn_an` VALUES (9,'1988');
INSERT INTO `dn_an` VALUES (10,'1989');
INSERT INTO `dn_an` VALUES (11,'1990');
INSERT INTO `dn_an` VALUES (12,'1991');
INSERT INTO `dn_an` VALUES (13,'1992');
INSERT INTO `dn_an` VALUES (14,'1993');
INSERT INTO `dn_an` VALUES (15,'1994');
INSERT INTO `dn_an` VALUES (16,'1995');
INSERT INTO `dn_an` VALUES (17,'1996');
INSERT INTO `dn_an` VALUES (18,'1997');
INSERT INTO `dn_an` VALUES (19,'1998');
INSERT INTO `dn_an` VALUES (20,'1999');
INSERT INTO `dn_an` VALUES (21,'2000');
INSERT INTO `dn_an` VALUES (22,'2001');
INSERT INTO `dn_an` VALUES (23,'2002');
INSERT INTO `dn_an` VALUES (24,'2003');
INSERT INTO `dn_an` VALUES (25,'2004');
INSERT INTO `dn_an` VALUES (26,'2005');
INSERT INTO `dn_an` VALUES (27,'2006');
INSERT INTO `dn_an` VALUES (28,'2007');
INSERT INTO `dn_an` VALUES (29,'2008');
INSERT INTO `dn_an` VALUES (30,'2009');

#
# Table structure for table dn_luna
#

DROP TABLE IF EXISTS `dn_luna`;
CREATE TABLE `dn_luna` (
  `id` int(11) NOT NULL auto_increment,
  `val` char(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table dn_luna
#

INSERT INTO `dn_luna` VALUES (1,'Ianuarie');
INSERT INTO `dn_luna` VALUES (2,'Februarie');
INSERT INTO `dn_luna` VALUES (3,'Martie');
INSERT INTO `dn_luna` VALUES (4,'Aprilie');
INSERT INTO `dn_luna` VALUES (5,'Mai');
INSERT INTO `dn_luna` VALUES (6,'Iunie');
INSERT INTO `dn_luna` VALUES (7,'Iulie');
INSERT INTO `dn_luna` VALUES (8,'August');
INSERT INTO `dn_luna` VALUES (9,'Septembrie');
INSERT INTO `dn_luna` VALUES (10,'Octombrie');
INSERT INTO `dn_luna` VALUES (11,'Noiembrie');
INSERT INTO `dn_luna` VALUES (12,'Decembrie');


#
# Table structure for table dn_zi
#

DROP TABLE IF EXISTS `dn_zi`;
CREATE TABLE `dn_zi` (
  `id` int(11) NOT NULL auto_increment,
  `val` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table dn_zi
#

INSERT INTO `dn_zi` VALUES (1,'1');
INSERT INTO `dn_zi` VALUES (2,'2');
INSERT INTO `dn_zi` VALUES (3,'3');
INSERT INTO `dn_zi` VALUES (4,'4');
INSERT INTO `dn_zi` VALUES (5,'5');
INSERT INTO `dn_zi` VALUES (6,'6');
INSERT INTO `dn_zi` VALUES (7,'7');
INSERT INTO `dn_zi` VALUES (8,'8');
INSERT INTO `dn_zi` VALUES (9,'9');
INSERT INTO `dn_zi` VALUES (10,'10');
INSERT INTO `dn_zi` VALUES (11,'11');
INSERT INTO `dn_zi` VALUES (12,'12');
INSERT INTO `dn_zi` VALUES (13,'13');
INSERT INTO `dn_zi` VALUES (14,'14');
INSERT INTO `dn_zi` VALUES (15,'15');
INSERT INTO `dn_zi` VALUES (16,'16');
INSERT INTO `dn_zi` VALUES (17,'17');
INSERT INTO `dn_zi` VALUES (18,'18');
INSERT INTO `dn_zi` VALUES (19,'19');
INSERT INTO `dn_zi` VALUES (20,'20');
INSERT INTO `dn_zi` VALUES (21,'21');
INSERT INTO `dn_zi` VALUES (22,'22');
INSERT INTO `dn_zi` VALUES (23,'23');
INSERT INTO `dn_zi` VALUES (24,'24');
INSERT INTO `dn_zi` VALUES (25,'25');
INSERT INTO `dn_zi` VALUES (26,'26');
INSERT INTO `dn_zi` VALUES (27,'27');
INSERT INTO `dn_zi` VALUES (28,'28');
INSERT INTO `dn_zi` VALUES (29,'29');
INSERT INTO `dn_zi` VALUES (30,'30');
INSERT INTO `dn_zi` VALUES (31,'31');

#
# Table structure for table cursuri
#

DROP TABLE IF EXISTS `cursuri`;
CREATE TABLE `cursuri` (
  `idcurs` int(11) NOT NULL auto_increment,
  `id_user` char(255) default NULL,
  `iuser` char(255) default NULL,
  `denumire` char(255) default NULL,
  `descriere` char(255) default NULL,
  `ore_alocate` char(255) default NULL,
  `data_test` char(255) default NULL,
  `date1` char(255) default NULL,
  `link` char(255) default NULL,
  PRIMARY KEY  (`idcurs`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table cursuri
#

INSERT INTO `cursuri` VALUES (1,'1','admin','Algoritmi de programare','Algoritmi de programare','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Algoritmi%20de%20programare/');
INSERT INTO `cursuri` VALUES (2,'1','admin','Aplicatii C','Aplicatii C','10','2009-06-01','2009-05-12 11:06:07','Cursuri/C%20aplicatii/');
INSERT INTO `cursuri` VALUES (3,'1','admin','Programare C','Programare C','10','2009-06-01','2009-05-12 11:06:07','Cursuri/C%20teorie/');
INSERT INTO `cursuri` VALUES (4,'1','admin','Clonarea Software','Clonarea Software','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Clonare%20Software/');
INSERT INTO `cursuri` VALUES (5,'1','admin','Flash','Flash','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Flash/');
INSERT INTO `cursuri` VALUES (6,'1','admin','Oracle','Oracle','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Oracle/');
INSERT INTO `cursuri` VALUES (7,'1','admin','Limbajul Java','Limbajul Java','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Limbaje%20JAVA/');
INSERT INTO `cursuri` VALUES (8,'1','admin','Php','Php','10','2009-06-01','2009-05-12 11:06:07','Cursuri/php/');
INSERT INTO `cursuri` VALUES (9,'1','admin','Procesare Text','Procesare Text','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Procesare%20texte/');
INSERT INTO `cursuri` VALUES (10,'1','admin','Programare Visual C++','Programare Visual C++','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Visual%20C++/');
INSERT INTO `cursuri` VALUES (11,'1','admin','Retele','Retele','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Retele/');
INSERT INTO `cursuri` VALUES (12,'1','admin','Sisteme de operare','Sisteme de operare','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Sisteme%20de%20operare/');
INSERT INTO `cursuri` VALUES (13,'1','admin','UNIX','UNIX','10','2009-06-01','2009-05-12 11:06:07','Cursuri/Unix/');
INSERT INTO `cursuri` VALUES (14,'1','admin','Python','Python','10','2009-06-01','2009-05-12 11:06:07','Cursuri/python/');


#
# Table structure for table Teste
#

DROP TABLE IF EXISTS `teste`;
CREATE TABLE `teste` (
  `idtest` int(11) NOT NULL auto_increment,
  `nume` char(50) default NULL,
  `descriere` char(255) default NULL,
  `data` char(255) default NULL,
  `iuser` CHAR(255) default NULL,
  PRIMARY KEY  (`idtest`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table teste
#

INSERT INTO `teste` VALUES (1,'Test 1', 'Algoritmi de programare', ' 2009-07-23','admin');
INSERT INTO `teste` VALUES (2,'Test 2', 'Flash', ' 2009-07-23','admin');
INSERT INTO `teste` VALUES (3,'Test 3', 'Limbajul Java', ' 2009-07-23','admin');
INSERT INTO `teste` VALUES (4,'Test 4', 'PHP', ' 2009-07-23','admin');
INSERT INTO `teste` VALUES (5,'Test 5', 'UNIX', ' 2009-07-23','admin');

#
# Table structure for table Usercurs
#

Drop TABLE if EXISTS `usercurs`;
CREATE TABLE `usercurs` (
	`idusercurs` int(11) DEFAULT NULL,
	`iuser` char (255) DEFAULT NULL,
	`idcurs` int(11) DEFAULT NULL,
	`datainscriere` char(255) default NULL,
	PRIMARY key (`idusercurs`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table usercurs
#

INSERT INTO `usercurs` VALUES (1,'1','1','2009-07-15');
INSERT INTO `usercurs` VALUES (2,'2','2','2009-07-14');
INSERT INTO `usercurs` VALUES (3,'2','5','2009-07-13');
INSERT INTO `usercurs` VALUES (4,'1','3','2009-07-12');
INSERT INTO `usercurs` VALUES (5,'2','4','2009-07-11');


#
# Table structure for table Usercurstest
#

Drop TABLE if EXISTS `usercurstest`;
CREATE TABLE `usercurstest` (
	`idusercurstest` int(11) DEFAULT NULL,
	`idusercurs` char (255) DEFAULT NULL,
	`data_test` char(255) default NULL,
	PRIMARY key (`idusercurstest`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table usercurstest
#

INSERT INTO `usercurstest` VALUES (1,'1','2009-07-15');
INSERT INTO `usercurstest` VALUES (2,'2','2009-07-14');
INSERT INTO `usercurstest` VALUES (3,'3','2009-07-13');
INSERT INTO `usercurstest` VALUES (4,'4','2009-07-12');
INSERT INTO `usercurstest` VALUES (5,'5','2009-07-11');

#
# Table structure for table intrebaritest
#

Drop TABLE if EXISTS `intrebaritest`;
CREATE TABLE `intrebaritest` (
	`id` int(11) DEFAULT NULL,
	`q` int (11) DEFAULT NULL,
	`intrebari` char(255) default NULL,
	`raspuns1` char(255) default NULL,
	`raspuns2` char(255) default NULL,
	`raspuns3` char(255) default NULL,
	`raspuns4` char(255) default NULL,
	`rascor` char(255) default NULL,
	PRIMARY key (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table intrebaritest
#

INSERT INTO `intrebaritest` VALUES (1,'1','Eliberarea unei zone de memorie rezervate anterior se face prin functia standard:','void free(void* p)', 'void* malloc(unsigned n)','malloc(size of(int)','void* farmalloc(unsigned long n)','void free(void* p)');
INSERT INTO `intrebaritest` VALUES (2,'1','Fie declaratia int For=1; ea este:','corecta','incorecta, o declaratie nu poate fi insotita de inintializare','incorecta, For este cuvant cheie, nu poate constitui un indentificator','incorecta, variabila inttreaga for nu poate fi intializata cu constanta reala(1)','corecta');
INSERT INTO `intrebaritest` VALUES (3,'1','Fie declaratie int* const p; aceasta este:','corecta, p fiind un pointer constant','incorecta, p fiind un pointer care nu a fost initializat','corecta, p fiind un pointer la o zona de memorie constanta ','corecta, p fiind un pointer constant la o zona de memorie constanta','incorecta, p fiind un pointer care nu a fost initializat');
INSERT INTO `intrebaritest` VALUES (4,'1','In urma executarii secventei de atribuiri y=x+1; z=y-1; x=z+1:','y si z sunt egale','x si z sunt egale','toate sunt egale','x si y sunt egale','x si y sunt egale');
INSERT INTO `intrebaritest` VALUES (5,'1','Pentru x=5, care este valoarea expresiei 3<<x>>2:','10','8','0','24','24');
INSERT into `intrebaritest` values (6,'2','In Flash elementele grafice pot fi realizate prin:','vector','imagine','vector si imagine','nici o varianta de mai sus','vector si imagine');
INSERT into `intrebaritest` values (7,'2','Ce este scena:',' un efect','continutul compus al filmului','un simbol','o instructiune','continutul compus al filmului');
INSERT into `intrebaritest` values (8,'2','Timeline Effects Settings:','multitudinea obiectului','importa o forma intr-un timp','manipularea obiectului intr-un anumit fel','nici una de mai sus','manipularea obiectului intr-un anumit fel');
INSERT into `intrebaritest` values (9,'2','Shape tween:','importa o forma intr-un anumit moment de timp','modifica proprietatile : pozitie, dimensiune, etc.','expandeaza si/sau contracta obiectele in timp','modifica propietatile unei instante a unui simbol','importa o forma intr-un anumit moment de timp');
INSERT into `intrebaritest` values (10,'2','ActionScript este:','un limbaj folosit pt dezvoltarea efectelor','un limbaj folosit pentru animatii 3D','un limbaj folosit pentru dezvoltarea functiionalitati in cadrul animatilor','nici una de mai sus','un limbaj folosit pentru dezvoltarea functiionalitati in cadrul animatilor');
INSERT into `intrebaritest` values (11,'3','Despre linia de cod: int[] temp=new int[99], se poate spune:','creaza un tablou de nr intregi, tablou cu toate pozitile sale initializate automat cu 0','creaza un tablou de nr intregi, tablou cu fiecare element initializat cu 99','nu creaza nimic, operatorul "new" nu se poate folosi impreuna cu un tip primitiv','creaza un tablou de obiecte initializate cu null, datorita folosiri operatorului "new"','creaza un tablou de nr intregi, tablou cu toate pozitile sale initializate automat cu 0');
INSERT into `intrebaritest` values (12,'3','O varianta de instanta care stocheaza un obiect va fi initializata automat in java:','cu 0','cu "\0"','cu false','cu null','cu null');
INSERT into `intrebaritest` values (13,'3','O variabila globala este:','inexistenta in java, rolul ei poate fi preluat de alte tipuri de variabile','o variabila folosita in interiorul unei metode','folosita pentru a defini atribuirile unui obiect','totdeauna precedata de un cuvant "static"','folosita pentru a defini atribuirile unui obiect');
INSERT into `intrebaritest` values (14,'3','Linile de cod: String[] vorbitor=new String[10]; vorbitor[10]="Text introdus", au ca efect:','crearea unui tablou de obiecte String initializate fiecare cu "10"','producerea unei erori datorita plasarii incorecte a parantezelor patrate in String[]','crearea unui tablou de tablou de 10 obiecte string si asignarea sisului "text introdus" in ultimul element al tabloului','prodecerea unei erori datorita adresari "vorbitor[10]"','crearea unui tablou de tablou de 10 obiecte string si asignarea sisului "text introdus" in ultimul element al tabloului');
INSERT into `intrebaritest` values (15,'3','Urmatorul cod sursa class ClasaMea{ public static void main(String argument([])} produce:','o clasa numita "ClasaMea"','eroarea deoarece trebuie sa existe cel putin o instructiune in metoda main()','eroarea deoarece cuvantul cheie "static" se foloseste doar pentru variabile','un applet numit "ClasaMea"','o clasa numita "ClasaMea"');
INSERT into `intrebaritest` values (16,'4','Ultima versiuna de PHP este:','4','6','3','5','5');
INSERT into `intrebaritest` values (17,'4','O variabila in PHP trebuie prefixata de operatorul:','!','%','*','$','$');
INSERT into `intrebaritest` values (18,'4','Care din urmatoarele sintaxe sunt corecte pentru a defini o culoare:','$gray=ImageCollorAllocate(ImageCreate(200,150),200,200,250)','$image=ImageCreate(200,150);$gray=ImageColorAllocate($image,200,200,250)','$gray=RGB(200,200,250)','$gray=ImageColorAllocate(200,200,250)','$image=ImageCreate(200,150);$gray=ImageColorAllocate($image,200,200,250)');
INSERT into `intrebaritest` values (19,'4','Ce functie sa i se atribuie unei variabile pentru ca aceasta sa devina conexiune logica cu un fisier:','fgets()','fread[]','fopen()','fopen[]','fopen()');
INSERT into `intrebaritest` values (20,'4','Care din urmatoarele setari pentru stabilirea cheie primare a tabelei este corecta:','Create Table comentarii(id int unsigned not null auto_increment Primary key)','Create table comentarii(id int unsigned zerofill not null Auto_increment Primary Key)','Create Table comentarii(id unsigned not null primary key)','nici una de mai sus','Create Table comentarii(id int unsigned not null auto_increment Primary key)');
INSERT into `intrebaritest` values (21,'5','In ce an sa dezvoltat primul UNIX','1973','1980','1969','1987','1973');
INSERT into `intrebaritest` values (22,'5','Care sunt principalale companii care au produs Unix','Bell Lab,Microsoft,Novell','Bell Lab,Microsoft,Berkley,USL,Novell,Sun','Microsoft,Sun,USL','Novell,USL,Sun,Microsoft','Bell Lab,Microsoft,Berkley,USL,Novell,Sun');
INSERT into `intrebaritest` values (23,'5','Nivelele UNIX-ului sunt','Kernelul,nucleul','nucleul,spatiul swamp','programele de sistem, nucleul UNIX-ului','nici una','programele de sistem, nucleul UNIX-ului');
INSERT into `intrebaritest` values (24,'5','Toate comenzile trebuie prefixate de operatorul','!','%','*','$','$');
INSERT into `intrebaritest` values (25,'5','Care sunt variantele de UNIX','UNIX,XENIX,BSD','BSD,SVRR,LINUX','UNIX,Xenix,BSD,SVR2,Linux,Posix,SunOS','Posix,SunOS,UNIX,Linux','UNIX,Xenix,BSD,SVR2,Linux,Posix,SunOS');

#
# Table structure for table note
#

DROP TABLE IF EXISTS `note`;
CREATE TABLE `note` (
  `id` int(11) NOT NULL auto_increment,
  `iuser` char(255) default NULL,
  `test` Char(255) default Null,
  `nota` int(11) default Null,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Dumping data for table note
#

INSERT INTO `note` VALUES (1,'gabby','test1','9');
INSERT INTO `note` VALUES (2,'gabby','test2','9');
INSERT INTO `note` VALUES (3,'gabby','test3','10');
INSERT INTO `note` VALUES (4,'gabby','test4','4');
INSERT INTO `note` VALUES (5,'gabby','test5','7');
INSERT INTO `note` VALUES (6,'demo','test1','3');
INSERT INTO `note` VALUES (7,'demo','test2','7');
INSERT INTO `note` VALUES (8,'demo','test3','6');
INSERT INTO `note` VALUES (9,'demo','test4','4');
INSERT INTO `note` VALUES (10,'demo','test5','9');
#
# Table structure for table tara
#

DROP TABLE IF EXISTS `tara`;
CREATE TABLE `tara` (
  `iso` char(2) collate latin1_general_ci NOT NULL default '',
  `name` varchar(80) collate latin1_general_ci NOT NULL default '',
  `printable_name` varchar(80) collate latin1_general_ci NOT NULL default '',
  `iso3` char(3) collate latin1_general_ci default NULL,
  `numcode` smallint(6) default NULL,
  PRIMARY KEY  (`iso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# Dumping data for table tara
#

INSERT INTO `tara` VALUES ('AD','ANDORRA','Andorra','AND',20);
INSERT INTO `tara` VALUES ('AE','UNITED ARAB EMIRATES','United Arab Emirates','ARE',784);
INSERT INTO `tara` VALUES ('AF','AFGHANISTAN','Afghanistan','AFG',4);
INSERT INTO `tara` VALUES ('AG','ANTIGUA AND BARBUDA','Antigua and Barbuda','ATG',28);
INSERT INTO `tara` VALUES ('AI','ANGUILLA','Anguilla','AIA',660);
INSERT INTO `tara` VALUES ('AL','ALBANIA','Albania','ALB',8);
INSERT INTO `tara` VALUES ('AM','ARMENIA','Armenia','ARM',51);
INSERT INTO `tara` VALUES ('AN','NETHERLANDS ANTILLES','Netherlands Antilles','ANT',530);
INSERT INTO `tara` VALUES ('AO','ANGOLA','Angola','AGO',24);
INSERT INTO `tara` VALUES ('AQ','ANTARCTICA','Antarctica','',0);
INSERT INTO `tara` VALUES ('AR','ARGENTINA','Argentina','ARG',32);
INSERT INTO `tara` VALUES ('AS','AMERICAN SAMOA','American Samoa','ASM',16);
INSERT INTO `tara` VALUES ('AT','AUSTRIA','Austria','AUT',40);
INSERT INTO `tara` VALUES ('AU','AUSTRALIA','Australia','AUS',36);
INSERT INTO `tara` VALUES ('AW','ARUBA','Aruba','ABW',533);
INSERT INTO `tara` VALUES ('AZ','AZERBAIJAN','Azerbaijan','AZE',31);
INSERT INTO `tara` VALUES ('BA','BOSNIA AND HERZEGOVINA','Bosnia and Herzegovina','BIH',70);
INSERT INTO `tara` VALUES ('BB','BARBADOS','Barbados','BRB',52);
INSERT INTO `tara` VALUES ('BD','BANGLADESH','Bangladesh','BGD',50);
INSERT INTO `tara` VALUES ('BE','BELGIUM','Belgium','BEL',56);
INSERT INTO `tara` VALUES ('BF','BURKINA FASO','Burkina Faso','BFA',854);
INSERT INTO `tara` VALUES ('BG','BULGARIA','Bulgaria','BGR',100);
INSERT INTO `tara` VALUES ('BH','BAHRAIN','Bahrain','BHR',48);
INSERT INTO `tara` VALUES ('BI','BURUNDI','Burundi','BDI',108);
INSERT INTO `tara` VALUES ('BJ','BENIN','Benin','BEN',204);
INSERT INTO `tara` VALUES ('BM','BERMUDA','Bermuda','BMU',60);
INSERT INTO `tara` VALUES ('BN','BRUNEI DARUSSALAM','Brunei Darussalam','BRN',96);
INSERT INTO `tara` VALUES ('BO','BOLIVIA','Bolivia','BOL',68);
INSERT INTO `tara` VALUES ('BR','BRAZIL','Brazil','BRA',76);
INSERT INTO `tara` VALUES ('BS','BAHAMAS','Bahamas','BHS',44);
INSERT INTO `tara` VALUES ('BT','BHUTAN','Bhutan','BTN',64);
INSERT INTO `tara` VALUES ('BV','BOUVET ISLAND','Bouvet Island','',0);
INSERT INTO `tara` VALUES ('BW','BOTSWANA','Botswana','BWA',72);
INSERT INTO `tara` VALUES ('BY','BELARUS','Belarus','BLR',112);
INSERT INTO `tara` VALUES ('BZ','BELIZE','Belize','BLZ',84);
INSERT INTO `tara` VALUES ('CA','CANADA','Canada','CAN',124);
INSERT INTO `tara` VALUES ('CC','COCOS (KEELING) ISLANDS','Cocos (Keeling) Islands','',0);
INSERT INTO `tara` VALUES ('CD','CONGO, THE DEMOCRATIC REPUBLIC OF THE','Congo, the Democratic Republic of the','COD',180);
INSERT INTO `tara` VALUES ('CF','CENTRAL AFRICAN REPUBLIC','Central African Republic','CAF',140);
INSERT INTO `tara` VALUES ('CG','CONGO','Congo','COG',178);
INSERT INTO `tara` VALUES ('CH','SWITZERLAND','Switzerland','CHE',756);
INSERT INTO `tara` VALUES ('CI','COTE D\'IVOIRE','Cote D\'Ivoire','CIV',384);
INSERT INTO `tara` VALUES ('CK','COOK ISLANDS','Cook Islands','COK',184);
INSERT INTO `tara` VALUES ('CL','CHILE','Chile','CHL',152);
INSERT INTO `tara` VALUES ('CM','CAMEROON','Cameroon','CMR',120);
INSERT INTO `tara` VALUES ('CN','CHINA','China','CHN',156);
INSERT INTO `tara` VALUES ('CO','COLOMBIA','Colombia','COL',170);
INSERT INTO `tara` VALUES ('CR','COSTA RICA','Costa Rica','CRI',188);
INSERT INTO `tara` VALUES ('CS','SERBIA AND MONTENEGRO','Serbia and Montenegro','',0);
INSERT INTO `tara` VALUES ('CU','CUBA','Cuba','CUB',192);
INSERT INTO `tara` VALUES ('CV','CAPE VERDE','Cape Verde','CPV',132);
INSERT INTO `tara` VALUES ('CX','CHRISTMAS ISLAND','Christmas Island','',0);
INSERT INTO `tara` VALUES ('CY','CYPRUS','Cyprus','CYP',196);
INSERT INTO `tara` VALUES ('CZ','CZECH REPUBLIC','Czech Republic','CZE',203);
INSERT INTO `tara` VALUES ('DE','GERMANY','Germany','DEU',276);
INSERT INTO `tara` VALUES ('DJ','DJIBOUTI','Djibouti','DJI',262);
INSERT INTO `tara` VALUES ('DK','DENMARK','Denmark','DNK',208);
INSERT INTO `tara` VALUES ('DM','DOMINICA','Dominica','DMA',212);
INSERT INTO `tara` VALUES ('DO','DOMINICAN REPUBLIC','Dominican Republic','DOM',214);
INSERT INTO `tara` VALUES ('DZ','ALGERIA','Algeria','DZA',12);
INSERT INTO `tara` VALUES ('EC','ECUADOR','Ecuador','ECU',218);
INSERT INTO `tara` VALUES ('EE','ESTONIA','Estonia','EST',233);
INSERT INTO `tara` VALUES ('EG','EGYPT','Egypt','EGY',818);
INSERT INTO `tara` VALUES ('EH','WESTERN SAHARA','Western Sahara','ESH',732);
INSERT INTO `tara` VALUES ('ER','ERITREA','Eritrea','ERI',232);
INSERT INTO `tara` VALUES ('ES','SPAIN','Spain','ESP',724);
INSERT INTO `tara` VALUES ('ET','ETHIOPIA','Ethiopia','ETH',231);
INSERT INTO `tara` VALUES ('FI','FINLAND','Finland','FIN',246);
INSERT INTO `tara` VALUES ('FJ','FIJI','Fiji','FJI',242);
INSERT INTO `tara` VALUES ('FK','FALKLAND ISLANDS (MALVINAS)','Falkland Islands (Malvinas)','FLK',238);
INSERT INTO `tara` VALUES ('FM','MICRONESIA, FEDERATED STATES OF','Micronesia, Federated States of','FSM',583);
INSERT INTO `tara` VALUES ('FO','FAROE ISLANDS','Faroe Islands','FRO',234);
INSERT INTO `tara` VALUES ('FR','FRANCE','France','FRA',250);
INSERT INTO `tara` VALUES ('GA','GABON','Gabon','GAB',266);
INSERT INTO `tara` VALUES ('GB','UNITED KINGDOM','United Kingdom','GBR',826);
INSERT INTO `tara` VALUES ('GD','GRENADA','Grenada','GRD',308);
INSERT INTO `tara` VALUES ('GE','GEORGIA','Georgia','GEO',268);
INSERT INTO `tara` VALUES ('GF','FRENCH GUIANA','French Guiana','GUF',254);
INSERT INTO `tara` VALUES ('GH','GHANA','Ghana','GHA',288);
INSERT INTO `tara` VALUES ('GI','GIBRALTAR','Gibraltar','GIB',292);
INSERT INTO `tara` VALUES ('GL','GREENLAND','Greenland','GRL',304);
INSERT INTO `tara` VALUES ('GM','GAMBIA','Gambia','GMB',270);
INSERT INTO `tara` VALUES ('GN','GUINEA','Guinea','GIN',324);
INSERT INTO `tara` VALUES ('GP','GUADELOUPE','Guadeloupe','GLP',312);
INSERT INTO `tara` VALUES ('GQ','EQUATORIAL GUINEA','Equatorial Guinea','GNQ',226);
INSERT INTO `tara` VALUES ('GR','GREECE','Greece','GRC',300);
INSERT INTO `tara` VALUES ('GS','SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS','South Georgia and the South Sandwich Islands','',0);
INSERT INTO `tara` VALUES ('GT','GUATEMALA','Guatemala','GTM',320);
INSERT INTO `tara` VALUES ('GU','GUAM','Guam','GUM',316);
INSERT INTO `tara` VALUES ('GW','GUINEA-BISSAU','Guinea-Bissau','GNB',624);
INSERT INTO `tara` VALUES ('GY','GUYANA','Guyana','GUY',328);
INSERT INTO `tara` VALUES ('HK','HONG KONG','Hong Kong','HKG',344);
INSERT INTO `tara` VALUES ('HM','HEARD ISLAND AND MCDONALD ISLANDS','Heard Island and Mcdonald Islands','',0);
INSERT INTO `tara` VALUES ('HN','HONDURAS','Honduras','HND',340);
INSERT INTO `tara` VALUES ('HR','CROATIA','Croatia','HRV',191);
INSERT INTO `tara` VALUES ('HT','HAITI','Haiti','HTI',332);
INSERT INTO `tara` VALUES ('HU','HUNGARY','Hungary','HUN',348);
INSERT INTO `tara` VALUES ('ID','INDONESIA','Indonesia','IDN',360);
INSERT INTO `tara` VALUES ('IE','IRELAND','Ireland','IRL',372);
INSERT INTO `tara` VALUES ('IL','ISRAEL','Israel','ISR',376);
INSERT INTO `tara` VALUES ('IN','INDIA','India','IND',356);
INSERT INTO `tara` VALUES ('IO','BRITISH INDIAN OCEAN TERRITORY','British Indian Ocean Territory','',0);
INSERT INTO `tara` VALUES ('IQ','IRAQ','Iraq','IRQ',368);
INSERT INTO `tara` VALUES ('IR','IRAN, ISLAMIC REPUBLIC OF','Iran, Islamic Republic of','IRN',364);
INSERT INTO `tara` VALUES ('IS','ICELAND','Iceland','ISL',352);
INSERT INTO `tara` VALUES ('IT','ITALY','Italy','ITA',380);
INSERT INTO `tara` VALUES ('JM','JAMAICA','Jamaica','JAM',388);
INSERT INTO `tara` VALUES ('JO','JORDAN','Jordan','JOR',400);
INSERT INTO `tara` VALUES ('JP','JAPAN','Japan','JPN',392);
INSERT INTO `tara` VALUES ('KE','KENYA','Kenya','KEN',404);
INSERT INTO `tara` VALUES ('KG','KYRGYZSTAN','Kyrgyzstan','KGZ',417);
INSERT INTO `tara` VALUES ('KH','CAMBODIA','Cambodia','KHM',116);
INSERT INTO `tara` VALUES ('KI','KIRIBATI','Kiribati','KIR',296);
INSERT INTO `tara` VALUES ('KM','COMOROS','Comoros','COM',174);
INSERT INTO `tara` VALUES ('KN','SAINT KITTS AND NEVIS','Saint Kitts and Nevis','KNA',659);
INSERT INTO `tara` VALUES ('KP','KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF','Korea, Democratic People\'s Republic of','PRK',408);
INSERT INTO `tara` VALUES ('KR','KOREA, REPUBLIC OF','Korea, Republic of','KOR',410);
INSERT INTO `tara` VALUES ('KW','KUWAIT','Kuwait','KWT',414);
INSERT INTO `tara` VALUES ('KY','CAYMAN ISLANDS','Cayman Islands','CYM',136);
INSERT INTO `tara` VALUES ('KZ','KAZAKHSTAN','Kazakhstan','KAZ',398);
INSERT INTO `tara` VALUES ('LA','LAO PEOPLE\'S DEMOCRATIC REPUBLIC','Lao People\'s Democratic Republic','LAO',418);
INSERT INTO `tara` VALUES ('LB','LEBANON','Lebanon','LBN',422);
INSERT INTO `tara` VALUES ('LC','SAINT LUCIA','Saint Lucia','LCA',662);
INSERT INTO `tara` VALUES ('LI','LIECHTENSTEIN','Liechtenstein','LIE',438);
INSERT INTO `tara` VALUES ('LK','SRI LANKA','Sri Lanka','LKA',144);
INSERT INTO `tara` VALUES ('LR','LIBERIA','Liberia','LBR',430);
INSERT INTO `tara` VALUES ('LS','LESOTHO','Lesotho','LSO',426);
INSERT INTO `tara` VALUES ('LT','LITHUANIA','Lithuania','LTU',440);
INSERT INTO `tara` VALUES ('LU','LUXEMBOURG','Luxembourg','LUX',442);
INSERT INTO `tara` VALUES ('LV','LATVIA','Latvia','LVA',428);
INSERT INTO `tara` VALUES ('LY','LIBYAN ARAB JAMAHIRIYA','Libyan Arab Jamahiriya','LBY',434);
INSERT INTO `tara` VALUES ('MA','MOROCCO','Morocco','MAR',504);
INSERT INTO `tara` VALUES ('MC','MONACO','Monaco','MCO',492);
INSERT INTO `tara` VALUES ('MD','MOLDOVA, REPUBLIC OF','Moldova, Republic of','MDA',498);
INSERT INTO `tara` VALUES ('MG','MADAGASCAR','Madagascar','MDG',450);
INSERT INTO `tara` VALUES ('MH','MARSHALL ISLANDS','Marshall Islands','MHL',584);
INSERT INTO `tara` VALUES ('MK','MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','Macedonia, the Former Yugoslav Republic of','MKD',807);
INSERT INTO `tara` VALUES ('ML','MALI','Mali','MLI',466);
INSERT INTO `tara` VALUES ('MM','MYANMAR','Myanmar','MMR',104);
INSERT INTO `tara` VALUES ('MN','MONGOLIA','Mongolia','MNG',496);
INSERT INTO `tara` VALUES ('MO','MACAO','Macao','MAC',446);
INSERT INTO `tara` VALUES ('MP','NORTHERN MARIANA ISLANDS','Northern Mariana Islands','MNP',580);
INSERT INTO `tara` VALUES ('MQ','MARTINIQUE','Martinique','MTQ',474);
INSERT INTO `tara` VALUES ('MR','MAURITANIA','Mauritania','MRT',478);
INSERT INTO `tara` VALUES ('MS','MONTSERRAT','Montserrat','MSR',500);
INSERT INTO `tara` VALUES ('MT','MALTA','Malta','MLT',470);
INSERT INTO `tara` VALUES ('MU','MAURITIUS','Mauritius','MUS',480);
INSERT INTO `tara` VALUES ('MV','MALDIVES','Maldives','MDV',462);
INSERT INTO `tara` VALUES ('MW','MALAWI','Malawi','MWI',454);
INSERT INTO `tara` VALUES ('MX','MEXICO','Mexico','MEX',484);
INSERT INTO `tara` VALUES ('MY','MALAYSIA','Malaysia','MYS',458);
INSERT INTO `tara` VALUES ('MZ','MOZAMBIQUE','Mozambique','MOZ',508);
INSERT INTO `tara` VALUES ('NA','NAMIBIA','Namibia','NAM',516);
INSERT INTO `tara` VALUES ('NC','NEW CALEDONIA','New Caledonia','NCL',540);
INSERT INTO `tara` VALUES ('NE','NIGER','Niger','NER',562);
INSERT INTO `tara` VALUES ('NF','NORFOLK ISLAND','Norfolk Island','NFK',574);
INSERT INTO `tara` VALUES ('NG','NIGERIA','Nigeria','NGA',566);
INSERT INTO `tara` VALUES ('NI','NICARAGUA','Nicaragua','NIC',558);
INSERT INTO `tara` VALUES ('NL','NETHERLANDS','Netherlands','NLD',528);
INSERT INTO `tara` VALUES ('NO','NORWAY','Norway','NOR',578);
INSERT INTO `tara` VALUES ('NP','NEPAL','Nepal','NPL',524);
INSERT INTO `tara` VALUES ('NR','NAURU','Nauru','NRU',520);
INSERT INTO `tara` VALUES ('NU','NIUE','Niue','NIU',570);
INSERT INTO `tara` VALUES ('NZ','NEW ZEALAND','New Zealand','NZL',554);
INSERT INTO `tara` VALUES ('OM','OMAN','Oman','OMN',512);
INSERT INTO `tara` VALUES ('PA','PANAMA','Panama','PAN',591);
INSERT INTO `tara` VALUES ('PE','PERU','Peru','PER',604);
INSERT INTO `tara` VALUES ('PF','FRENCH POLYNESIA','French Polynesia','PYF',258);
INSERT INTO `tara` VALUES ('PG','PAPUA NEW GUINEA','Papua New Guinea','PNG',598);
INSERT INTO `tara` VALUES ('PH','PHILIPPINES','Philippines','PHL',608);
INSERT INTO `tara` VALUES ('PK','PAKISTAN','Pakistan','PAK',586);
INSERT INTO `tara` VALUES ('PL','POLAND','Poland','POL',616);
INSERT INTO `tara` VALUES ('PM','SAINT PIERRE AND MIQUELON','Saint Pierre and Miquelon','SPM',666);
INSERT INTO `tara` VALUES ('PN','PITCAIRN','Pitcairn','PCN',612);
INSERT INTO `tara` VALUES ('PR','PUERTO RICO','Puerto Rico','PRI',630);
INSERT INTO `tara` VALUES ('PS','PALESTINIAN TERRITORY, OCCUPIED','Palestinian Territory, Occupied','',0);
INSERT INTO `tara` VALUES ('PT','PORTUGAL','Portugal','PRT',620);
INSERT INTO `tara` VALUES ('PW','PALAU','Palau','PLW',585);
INSERT INTO `tara` VALUES ('PY','PARAGUAY','Paraguay','PRY',600);
INSERT INTO `tara` VALUES ('QA','QATAR','Qatar','QAT',634);
INSERT INTO `tara` VALUES ('RE','REUNION','Reunion','REU',638);
INSERT INTO `tara` VALUES ('RO','ROMANIA','Romania','ROM',642);
INSERT INTO `tara` VALUES ('RU','RUSSIAN FEDERATION','Russian Federation','RUS',643);
INSERT INTO `tara` VALUES ('RW','RWANDA','Rwanda','RWA',646);
INSERT INTO `tara` VALUES ('SA','SAUDI ARABIA','Saudi Arabia','SAU',682);
INSERT INTO `tara` VALUES ('SB','SOLOMON ISLANDS','Solomon Islands','SLB',90);
INSERT INTO `tara` VALUES ('SC','SEYCHELLES','Seychelles','SYC',690);
INSERT INTO `tara` VALUES ('SD','SUDAN','Sudan','SDN',736);
INSERT INTO `tara` VALUES ('SE','SWEDEN','Sweden','SWE',752);
INSERT INTO `tara` VALUES ('SG','SINGAPORE','Singapore','SGP',702);
INSERT INTO `tara` VALUES ('SH','SAINT HELENA','Saint Helena','SHN',654);
INSERT INTO `tara` VALUES ('SI','SLOVENIA','Slovenia','SVN',705);
INSERT INTO `tara` VALUES ('SJ','SVALBARD AND JAN MAYEN','Svalbard and Jan Mayen','SJM',744);
INSERT INTO `tara` VALUES ('SK','SLOVAKIA','Slovakia','SVK',703);
INSERT INTO `tara` VALUES ('SL','SIERRA LEONE','Sierra Leone','SLE',694);
INSERT INTO `tara` VALUES ('SM','SAN MARINO','San Marino','SMR',674);
INSERT INTO `tara` VALUES ('SN','SENEGAL','Senegal','SEN',686);
INSERT INTO `tara` VALUES ('SO','SOMALIA','Somalia','SOM',706);
INSERT INTO `tara` VALUES ('SR','SURINAME','Suriname','SUR',740);
INSERT INTO `tara` VALUES ('ST','SAO TOME AND PRINCIPE','Sao Tome and Principe','STP',678);
INSERT INTO `tara` VALUES ('SV','EL SALVADOR','El Salvador','SLV',222);
INSERT INTO `tara` VALUES ('SY','SYRIAN ARAB REPUBLIC','Syrian Arab Republic','SYR',760);
INSERT INTO `tara` VALUES ('SZ','SWAZILAND','Swaziland','SWZ',748);
INSERT INTO `tara` VALUES ('TC','TURKS AND CAICOS ISLANDS','Turks and Caicos Islands','TCA',796);
INSERT INTO `tara` VALUES ('TD','CHAD','Chad','TCD',148);
INSERT INTO `tara` VALUES ('TF','FRENCH SOUTHERN TERRITORIES','French Southern Territories','',0);
INSERT INTO `tara` VALUES ('TG','TOGO','Togo','TGO',768);
INSERT INTO `tara` VALUES ('TH','THAILAND','Thailand','THA',764);
INSERT INTO `tara` VALUES ('TJ','TAJIKISTAN','Tajikistan','TJK',762);
INSERT INTO `tara` VALUES ('TK','TOKELAU','Tokelau','TKL',772);
INSERT INTO `tara` VALUES ('TL','TIMOR-LESTE','Timor-Leste','',0);
INSERT INTO `tara` VALUES ('TM','TURKMENISTAN','Turkmenistan','TKM',795);
INSERT INTO `tara` VALUES ('TN','TUNISIA','Tunisia','TUN',788);
INSERT INTO `tara` VALUES ('TO','TONGA','Tonga','TON',776);
INSERT INTO `tara` VALUES ('TR','TURKEY','Turkey','TUR',792);
INSERT INTO `tara` VALUES ('TT','TRINIDAD AND TOBAGO','Trinidad and Tobago','TTO',780);
INSERT INTO `tara` VALUES ('TV','TUVALU','Tuvalu','TUV',798);
INSERT INTO `tara` VALUES ('TW','TAIWAN, PROVINCE OF CHINA','Taiwan, Province of China','TWN',158);
INSERT INTO `tara` VALUES ('TZ','TANZANIA, UNITED REPUBLIC OF','Tanzania, United Republic of','TZA',834);
INSERT INTO `tara` VALUES ('UA','UKRAINE','Ukraine','UKR',804);
INSERT INTO `tara` VALUES ('UG','UGANDA','Uganda','UGA',800);
INSERT INTO `tara` VALUES ('UM','UNITED STATES MINOR OUTLYING ISLANDS','United States Minor Outlying Islands','',0);
INSERT INTO `tara` VALUES ('US','UNITED STATES','United States','USA',840);
INSERT INTO `tara` VALUES ('UY','URUGUAY','Uruguay','URY',858);
INSERT INTO `tara` VALUES ('UZ','UZBEKISTAN','Uzbekistan','UZB',860);
INSERT INTO `tara` VALUES ('VA','HOLY SEE (VATICAN CITY STATE)','Holy See (Vatican City State)','VAT',336);
INSERT INTO `tara` VALUES ('VC','SAINT VINCENT AND THE GRENADINES','Saint Vincent and the Grenadines','VCT',670);
INSERT INTO `tara` VALUES ('VE','VENEZUELA','Venezuela','VEN',862);
INSERT INTO `tara` VALUES ('VG','VIRGIN ISLANDS, BRITISH','Virgin Islands, British','VGB',92);
INSERT INTO `tara` VALUES ('VI','VIRGIN ISLANDS, U.S.','Virgin Islands, U.s.','VIR',850);
INSERT INTO `tara` VALUES ('VN','VIET NAM','Viet Nam','VNM',704);
INSERT INTO `tara` VALUES ('VU','VANUATU','Vanuatu','VUT',548);
INSERT INTO `tara` VALUES ('WF','WALLIS AND FUTUNA','Wallis and Futuna','WLF',876);
INSERT INTO `tara` VALUES ('WS','SAMOA','Samoa','WSM',882);
INSERT INTO `tara` VALUES ('YE','YEMEN','Yemen','YEM',887);
INSERT INTO `tara` VALUES ('YT','MAYOTTE','Mayotte','',0);
INSERT INTO `tara` VALUES ('ZA','SOUTH AFRICA','South Africa','ZAF',710);
INSERT INTO `tara` VALUES ('ZM','ZAMBIA','Zambia','ZMB',894);
INSERT INTO `tara` VALUES ('ZW','ZIMBABWE','Zimbabwe','ZWE',716);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
