-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.32-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных dnd_database
CREATE DATABASE IF NOT EXISTS `dnd_database` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `dnd_database`;

-- Дамп структуры для таблица dnd_database.attachments
CREATE TABLE IF NOT EXISTS `attachments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BackstoryID` int(11) NOT NULL DEFAULT 0,
  `Attachment 1` tinytext DEFAULT NULL,
  `Attachment 2` tinytext DEFAULT NULL,
  `Attachment 3` tinytext DEFAULT NULL,
  `Attachment 4` tinytext DEFAULT NULL,
  `Attachment 5` tinytext DEFAULT NULL,
  `Attachment 6` tinytext DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_attachments_backstories` (`BackstoryID`) USING BTREE,
  CONSTRAINT `FK_attachments_backstories` FOREIGN KEY (`BackstoryID`) REFERENCES `backstories` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.attachments: ~3 rows (приблизительно)
INSERT INTO `attachments` (`ID`, `BackstoryID`, `Attachment 1`, `Attachment 2`, `Attachment 3`, `Attachment 4`, `Attachment 5`, `Attachment 6`) VALUES
	(1, 1, 'His weapon is the main treasure for a warrior', 'My maps are my creations, I will think twice before selling them to anyone', 'The friends we make during the adventures are the main purpose for the adventure', 'Nature is the main beauty of this world, it should be preserved and saved at all costs', 'My loved one is in enemys custody nad I\'m fiting to save her', 'My dead mother left me a trinket before passing away, I don\'t want to part with it no matter what'),
	(2, 2, 'My homeplane is my home and I need to return there no matter waht', 'I have my clothes from my homeplane and very cherish them', 'The friends that helped me in this world are my treasure', 'I learn new skills all the time to be helpfull to everyone around me', 'My home play was a terrible place so I want to learn how to make it better', 'I have always studied for a specific proffession and I want to continue studying it in this new world'),
	(3, 3, 'My friend was left in the mosters nest, I need to know what happened to him', 'I have a part of the monster with me and I don\'t want to part with it since it reminds me of the incident', 'I started to like monsters after the incident and have a monster baby pet', 'I left a family relic in the monsters lair and need to retrieve it', 'I liked fighting the monster and want to make money out of it and become a moster hunter', 'I carry tokens of all my former allies as a reminder about them');

-- Дамп структуры для таблица dnd_database.backstories
CREATE TABLE IF NOT EXISTS `backstories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Skills` varchar(50) DEFAULT NULL,
  `Tools` varchar(50) DEFAULT NULL,
  `Languages` varchar(50) DEFAULT NULL,
  `Equipment` tinytext DEFAULT NULL,
  `Start money` varchar(50) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `Ability title` varchar(50) DEFAULT NULL,
  `Ability` longtext DEFAULT NULL,
  `Views` int(11) DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.backstories: ~3 rows (приблизительно)
INSERT INTO `backstories` (`ID`, `Title`, `Skills`, `Tools`, `Languages`, `Equipment`, `Start money`, `Description`, `Ability title`, `Ability`, `Views`) VALUES
	(1, 'DESERTER', 'athletics, medicine', 'cartographer tools', 'choose 1 simple language', 'Shortsword, Leather armor, cartographer tools, 3 maps of local surroundings, food and water for 5 days, 5 gold coins', '5 gold coins', 'You once were a wrrior of a mighty ruler sworn your life in duty to him, byt over time you understood that his actions and reasons for them are not so noble as it looked from first sight.\r\n        You decided to ran away admist battle and become a deserter of your own country which defies it\'s lords law and order and tries to survive on his own. For a long time you were striding your former lords lands on your own just trying to survive and hide from his guards, \r\n        but now you are low on money and in need of work so you decided to stick to some adventuring party and try to hide among them and maybe find a new place in life. ', 'Map maker', 'Over the course of your travels you have made manu handdrawn maps of local surroundings, at the start of your adventure you have got 2 handdrawn maps of local surroundings\r\n        with marked cities, roads and any other points of interest, maps area is 200 feet radius around you, to create a new map u need to waste 2 hours going around the 200 feet radius area and drawing it\'s map,\r\n        remember that you will be walking around the area during that time and your safety is not guaranteed whie walking around an unknown surroundings.', 7),
	(2, 'FALLEN THROUGH PLANES', 'magic, nature', 'None', 'choose 1 exotic language', 'Adventurers kit, food and water for 2 days, 2 daggers, studded leather armor, pouch with 10 gold coins', '10 gold coins', 'You were living your simple and normal life in your original plane of existance until one day you stumbled upon a hole in the ground, at first u didn\'t pay attention\r\n        to it, but during your adventures you stumbled upon more and more holes around your home plane. One day your curiosity got over you and you decided to jump in one of the holes and after a minute fall u found urself\r\n        on a material plane. ', 'Spell of a plane descender', '    <p>After jumping to another plane part of your himeplanes magic sticked to you and manifested in a form of a cantrip u can use, learn a cantrip from a table below depending\r\n        on your homeplane\r\n    </p>\r\n    <table>\r\n        <tr>\r\n            <th>Homeplane</th>\r\n            <th>Cnatrip</th>\r\n        </tr>\r\n        <tr>\r\n            <td>Feywild</td>\r\n            <td>Message</td>\r\n        </tr>  \r\n        <tr>\r\n            <td>Nine hells</td>\r\n            <td>COntrol flames</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Astral plane</td>\r\n            <td>Encode thoughts</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Limbo</td>\r\n            <td>Eldritch blast</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Mechanus</td>\r\n            <td>On or Off</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Pandemonium</td>\r\n            <td>Blade ward</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Starddep</td>\r\n            <td>Mind Sliver</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Bytopia</td>\r\n            <td>Mold earth</td>\r\n        </tr>\r\n        <tr>\r\n            <td>House of the triad</td>\r\n            <td>Primal Savagery</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Ravenloft</td>\r\n            <td>Thunderclap</td>\r\n        </tr>           \r\n    </table>', 0),
	(3, 'MONSTER PREY', 'surviaval, athletics', 'Leatherworkers tools', 'None', 'Leather armor, dagger, 5 monster meat pieces worth 10 gp each, 2 monster egg worth 5 gp each', 'None', 'You were a young adventurer on your first simple mission, when suddenly you were attacked by a monster far more powerfull then what you could handle,\r\n        you were taken to it\'s nest as food for it\'s babies bu you managed to kill them and escape the large beast having some trophies with you and now want to\r\n        return to any mager city and sell them.', 'Hardened skin and mind', 'Because of your encounter with such a powerfull creature your body and mind have becomed stronger, choose one damamge type you will have resistance to ', 3);

-- Дамп структуры для таблица dnd_database.feats
CREATE TABLE IF NOT EXISTS `feats` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Effect` longtext DEFAULT NULL,
  `Views` int(11) DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.feats: ~3 rows (приблизительно)
INSERT INTO `feats` (`ID`, `Title`, `Effect`, `Views`) VALUES
	(1, 'DEMON CONTRACT', '<i>You have made a contract with a poverfull demonical or fiendish creature, this contract grants them a piece of their power, but also takes somethingin return, choose one positive and\r\n        one negative effect from below:\r\n    </i>\r\n    <br><br>\r\n    <p>Positive effects:</p>\r\n    <p><b>Demonic skin:</b> You gain immunity to fire damage</p>\r\n    <p><b>Demonic claws:</b>Your nails become claws that can be used as a natural weapon dealing 1d8 + your Strength modifier damage</p>\r\n    <p><b>Demonic charm:</b>Your body and face becomes more beautifull, you become more attractive and roll all persuaition, deception and performance checks with advantage</p>\r\n    <br><br>\r\n    <p>Negative effects:</p>\r\n    <p><b>Your immortal soul:</b>if you fall unconcious with 0 hit points you automaticallly fail all 3 death saves</p>\r\n    <p><b>Your age:</b>You become 50 years older</p>\r\n    <p><b>Your memories:</b>You forget most details of what happened to you before the last week</p>', 6),
	(2, 'SIGIL OF NATURE', '<i><b>Requirements:</b> Level 8</i>\r\n    <br><br>\r\n    <i>You have gone in contact with the world tree or other powerful nature spirit and it left a mark on you</i>\r\n    <br><br>\r\n    <p>You learn <b>Druidcraft</b> cantrip</p>\r\n    <br><br>\r\n    <p>You learn <b>Speak with animals</b> and <b>Friendship with animals</b> spells and can use them at will</p>\r\n    <br><br>\r\n    <p>You learn 1 additional first level spell out of druid spell list and can use it 1 time per long rest without expending spell slots</p>', 1),
	(3, 'HEAVY', '<i><b>Requirements:</b> Medium or large sized race</i>\r\n    <br><br>\r\n    <p><i>You are so heavy that enemies find it hard to move you anywhere.</i> When you are trying to be moved by any effect you can make a constitution saving throw with DC\r\n     12, you are being moved only 5 feet on a failed save, on a successfull save you are not moved at all</p>', 2);

-- Дамп структуры для таблица dnd_database.flaws
CREATE TABLE IF NOT EXISTS `flaws` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BackstoryID` int(11) NOT NULL DEFAULT 0,
  `Flaw 1` tinytext DEFAULT NULL,
  `Flaw 2` tinytext DEFAULT NULL,
  `Flaw 3` tinytext DEFAULT NULL,
  `Flaw 4` tinytext DEFAULT NULL,
  `Flaw 5` tinytext DEFAULT NULL,
  `Flaw 6` tinytext DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_flaws_backstories` (`BackstoryID`) USING BTREE,
  CONSTRAINT `FK_flaws_backstories` FOREIGN KEY (`BackstoryID`) REFERENCES `backstories` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.flaws: ~3 rows (приблизительно)
INSERT INTO `flaws` (`ID`, `BackstoryID`, `Flaw 1`, `Flaw 2`, `Flaw 3`, `Flaw 4`, `Flaw 5`, `Flaw 6`) VALUES
	(1, 1, 'I\'m a wanted criminal in my country and any guard will try to put me in prison', 'I killed many people and their souls still haunt me in my nightmares', 'Every now and then I can start paniking out of nowhere', 'My face got burned by an enemy fireball and now I\'m so ugly no one wants to talk with me', 'I have bad reputation with multiple religous cults because of my actions in the past', 'I have lost my arm/leg during a war and now I have an artifitial limb instead'),
	(2, 2, 'I need to feed on living flesh or drink blood once a week to survive', 'My original race is hated on this new plane', 'My magic works strangly in this world and sometimes triggers wildmagic', 'I have horrific scars on my face because of the plane jump', 'I have left all my things and possesions on the original plane and want to return it', 'I know local language very poorly and can only say some common phrases'),
	(3, 3, 'One of my limbs was bitten off by the monster', 'I have sevre burns left by the monster on my face', 'I have a mental trauma and tend to start paniking when I see something that reminds me of the monster', 'I get too enthuasiastic every time I  start speakig about my encounter with the monster', 'I became bald trying to escape from the monster and my hair will never grow back', 'My party left me to be eaten by a monster and now I rareley trust anyone to be my companion');

-- Дамп структуры для таблица dnd_database.ideals
CREATE TABLE IF NOT EXISTS `ideals` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BackstoryID` int(11) NOT NULL DEFAULT 0,
  `Ideal 1` tinytext DEFAULT NULL,
  `Ideal 2` tinytext DEFAULT NULL,
  `Ideal 3` tinytext DEFAULT NULL,
  `Ideal 4` tinytext DEFAULT NULL,
  `Ideal 5` tinytext DEFAULT NULL,
  `Ideal 6` tinytext DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ideals_backstories` (`BackstoryID`) USING BTREE,
  CONSTRAINT `FK_ideals_backstories` FOREIGN KEY (`BackstoryID`) REFERENCES `backstories` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.ideals: ~3 rows (приблизительно)
INSERT INTO `ideals` (`ID`, `BackstoryID`, `Ideal 1`, `Ideal 2`, `Ideal 3`, `Ideal 4`, `Ideal 5`, `Ideal 6`) VALUES
	(1, 1, 'Atonement: I need to help others to atone for all those lifes I ruined (good)', 'Law: fleeing from the ruler doesn\'t mean I can become a criminal and igore the order of a country I\'m in (Lawfull)', 'Power: I need power to fight the ruler I left and I will do anything to achieve it (chaotic)', 'Vengence: The ruler is the evil that needs to be killed no matter what (Evil)', 'Beauty: The world without war is beautifull and I need to enjoy it to the fullest while I can (neutral)', 'Life: I didn\'t have much of a life in the millitary so I wanna know what it means, to live as a human whil I\'m free (Any)'),
	(2, 2, 'Calmness: This new world is very calm and stable, I want it to stay that way (good)', 'Rules: Every world has its own rules and we all need to follow them (Lawfull)', 'Freedom: Since it\'s not my homeplane I can do whatever I want here (chaotic)', 'War: This place is better then my homeplane, so I need to ruin it (Evil)', 'Curiosity: I need to know as much as possible about this new world (neutral)', 'Relics: I want to get some relics from this plane as souvenirs before I return to my homeplane (Any)'),
	(3, 3, 'Clean world: I need to create a world without monsters so no one has to suffer (good)', 'Order: There was order even in monsters nest, so I may not be lower then him and disturpt order (Lawfull)', 'Hunt: I saw many valuable treasures in the monsters nest so I want to return and take them (chaotic)', 'Vengence: I must kill all of this monsters kind as my vengence (Evil)', 'fairness: I want to kill exacty that one monster which tried to kill me (neutral)', 'Help: I want to help everyone who forced the same problem as I did (Any)');

-- Дамп структуры для таблица dnd_database.options
CREATE TABLE IF NOT EXISTS `options` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Backstory_ID` int(11) NOT NULL DEFAULT 0,
  `Option title` varchar(50) NOT NULL DEFAULT '0',
  `Option 1` varchar(50) NOT NULL DEFAULT '0',
  `Option 2` varchar(50) NOT NULL DEFAULT '0',
  `Option 3` varchar(50) NOT NULL DEFAULT '0',
  `Option 4` varchar(50) NOT NULL DEFAULT '0',
  `Option 5` varchar(50) NOT NULL DEFAULT '0',
  `Option 6` varchar(50) DEFAULT NULL,
  `Option 7` varchar(50) DEFAULT NULL,
  `Option 8` varchar(50) DEFAULT NULL,
  `Option 9` varchar(50) DEFAULT NULL,
  `Option 10` varchar(50) DEFAULT NULL,
  `Option description` longtext DEFAULT NULL,
  `Table title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK__backstories` (`Backstory_ID`),
  CONSTRAINT `FK__backstories` FOREIGN KEY (`Backstory_ID`) REFERENCES `backstories` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.options: ~3 rows (приблизительно)
INSERT INTO `options` (`ID`, `Backstory_ID`, `Option title`, `Option 1`, `Option 2`, `Option 3`, `Option 4`, `Option 5`, `Option 6`, `Option 7`, `Option 8`, `Option 9`, `Option 10`, `Option description`, `Table title`) VALUES
	(1, 1, 'Way of fighting', 'swordsman', 'spearsmen', 'archer', 'cavalrymen', 'battle mage', 'Healer', 'cannon operator', 'infiltrator', 'scout', 'squire', 'Before becoming a deserter you were a warrior in the rulers army, roll a d10 or choose one from a table below to determine what kind of fighter you were', 'kind of warrior'),
	(2, 2, 'Home plane', 'Feywild', 'Nine hells', 'Astral plane', 'Limbo', 'Mechanus', 'Pandemonium', 'Stardeep', 'Bytopia', 'House of the Triad', 'Ravenloft', 'Before falling to the material plane you were an inhabitant of some other palne, roll a d10 or choose one from a table below to determine your home plane', 'Plane of existance'),
	(3, 3, 'Monster', 'Guarding naga', 'Remorhaz', 'Roc', 'Beholder', 'Young red shadow dragon', 'Ice devil', 'Purple Worm', 'Androsphynx', 'Dragon turtle', 'Kraken', 'You were attacked by some type of a powerfull creature, throw a d10 or pick from the table to determine which one', 'Monster');

-- Дамп структуры для таблица dnd_database.races
CREATE TABLE IF NOT EXISTS `races` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Languages` tinytext NOT NULL,
  `Characteristics` tinytext NOT NULL,
  `Age` text NOT NULL,
  `Alignment` text NOT NULL,
  `Size` text NOT NULL,
  `Speed` text NOT NULL,
  `Names` text NOT NULL,
  `Description` longtext NOT NULL,
  `Vision` text NOT NULL,
  `Ability header 1` varchar(50) NOT NULL DEFAULT '',
  `Ability text 1` longtext NOT NULL,
  `Ability header 2` varchar(50) NOT NULL DEFAULT '',
  `Ability text 2` longtext NOT NULL,
  `Image code` tinytext DEFAULT NULL,
  `Views` int(11) DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.races: ~3 rows (приблизительно)
INSERT INTO `races` (`ID`, `Title`, `Languages`, `Characteristics`, `Age`, `Alignment`, `Size`, `Speed`, `Names`, `Description`, `Vision`, `Ability header 1`, `Ability text 1`, `Ability header 2`, `Ability text 2`, `Image code`, `Views`) VALUES
	(1, 'BANSHEE', 'You can speak, read and understand Common and abyssal', 'Increase your charisma score by 2 and your intelligence score by 1', 'As banshees are ghosts they don\'t age like humans and can\'t die of old age, they look like they looked the moment they ended their life', 'Banshees envy the humans who led them to suicide and usually have from chaotic-good to chaotic-evil alingments', 'Your size is medium', 'Your movement speed is 30 feet and you can levitate up to 1 feet above the ground at will', 'Banshees have the same names as the race they were before death', 'Banshees were wimen some time ago, but they commited suicide due to betrayal, unrequited love or something else, but their envy did not let them to move on to the next life and now they are continuing to live in this world as banshees, half ghost half humans striving to finish all their buisness in this world and settle their envy and be free to move on to the next life.', 'You can see witihn dim lighting as if it was bright light and in compleete darkness as if it\'s dim lighting in a 60 foot radius, you can\'t descreet colors in this way, only tones of grey', 'Banshee scream', 'Once per long rest you can use an action to preform a scream attack in a 60 foot cone, all creatures in that cone should make a Wisdom saving throw (DC 12 + your profficiency bonus) and become deafened and stunned unil the end of their next turn on a failed save.', 'Transparent form', 'As a bonus action you can change your form from normal to transparent or backwards. In transparent form you gin resistance to all nonmagical damage, but gains vulnerability to any magical damage.', 'http://localhost/login/Kasp_proj_new/images/Banshee.jpg', 5),
	(2, 'LEPRECHAUN', 'You can speak, read and understand sylvan nad 2 languages of your choice', 'Increase your Intelligence score by 2 and your Wisdom score by 1', 'Leprechauns become an adult in 14 years and can live up to 225 years', 'Leprechauns are funs of wicious tricks and jokes they usually have chaotic-neutral alignment', 'Your size is small', 'Your movement speed is 25 feet', 'Male: Noah, Oisin, Liam, Tadhg <br> Female: Fiadh, Eabha, Ava, Freya', 'Leprechauns are small fay that live on flower fields or swamps, they usually dress in a nice, clean green suit and war a green hat on the head. Leprechauns enjoy doing pranks on humanoids they encounter andd they don\'t really care of the consequences of their pranks, the only thing leprechauns care about is gold which they try to collect as much as possible and store in a big metal pot in their lair', 'Normal vision', 'A pot of gold', 'if you have atleast 1 gold coin when you begin the long rest, you get 3 extra gold coins when you finish it', 'Fast feet', 'As a bonus action you can make a small movement which equals half your movement speed, if this movement ends in slightly obscured or obscured area you automatically make a disengage action as a free action', 'http://localhost/login/Kasp_proj_new/images/leprechaun.jpg', 2),
	(3, 'IMP', 'You can speak, read and understand Common and Infernal', 'Increase your Agility score by 2 and your Intelligence score by 1', 'Imps do not age, instead they are transported back to their home plane after 5 years of existance if not powered by a mage in time', 'Imps are evil sasdistic creatures from infernal plane and have chaotic-evil alingment', 'Your size is medium or small', 'Your movement speed is 30 feet', 'Male: Kolimuz, Drakath, Trilgomak, Ror\'os <br> Female: Brageth, Aglorath, Mazgamaun, Ballmoxan', 'Imps are small fiends from infernall plane summoned by a sorcerers ritual or fallen through another plane to the main plane, they are devious creatures that prefer to wark alone and try to create as much havoc as they can. Imps cair a lot for their stuff they found during the adventures, but have no morale so can steal others stuff easily. They are also very self centerd and usually don\'t care about others opinions.', 'You can see witihn dim lighting as if it was bright light and in compleete darkness as if it\'s dim lighting in a 60 foot radius, you can\'t descreet colors in this way, only tones of grey', 'heat resistance', 'As a creature from an infernal plane you gain fire resistance and do any checks connected to overcoming hight temperature with advantage', 'Imp fire', 'Instead of a normal attack you can throw a small ball of fire to a distance up to 15 feet that deals 1d6+ your Intelligence modifier damage', 'http://localhost/login/Kasp_proj_new/images/Imp.jpg', 1);

-- Дамп структуры для таблица dnd_database.subclases
CREATE TABLE IF NOT EXISTS `subclases` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Main Title` varchar(50) NOT NULL DEFAULT '0',
  `Description` text NOT NULL,
  `Ability title 1` varchar(50) NOT NULL DEFAULT '',
  `Ability level 1` varchar(20) NOT NULL DEFAULT '',
  `Ability text 1` longtext NOT NULL,
  `Ability title 2` varchar(50) NOT NULL DEFAULT '',
  `Ability level 2` varchar(20) NOT NULL DEFAULT '',
  `Ability text 2` longtext NOT NULL,
  `Ability title 3` varchar(50) DEFAULT NULL,
  `Ability level 3` varchar(20) DEFAULT NULL,
  `Ability text 3` longtext DEFAULT NULL,
  `Ability title 4` varchar(50) DEFAULT NULL,
  `Ability level 4` varchar(20) DEFAULT NULL,
  `Ability text 4` longtext DEFAULT NULL,
  `Image_code` tinytext DEFAULT NULL,
  `Views` int(11) DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.subclases: ~3 rows (приблизительно)
INSERT INTO `subclases` (`ID`, `Main Title`, `Description`, `Ability title 1`, `Ability level 1`, `Ability text 1`, `Ability title 2`, `Ability level 2`, `Ability text 2`, `Ability title 3`, `Ability level 3`, `Ability text 3`, `Ability title 4`, `Ability level 4`, `Ability text 4`, `Image_code`, `Views`) VALUES
	(1, 'MONK: WAY OF FAST KICKS', 'Monks who follow the way of fast kicks try to master the tehnique of flurry of blows and make their fists a living tornado of kicks that drop down on their opponents.', 'Power of the wind', 'level 3', 'At 3rd level monks who follow the path of fast kicks can summon small wind currents with their flurry of blows. When you preform Flurry of blows you can push the target 5ft. away for each hit that dealt damage to the target, unwilling creatures can make a strength saving trow to neglect the effect DC equals 10 + 2 for each hit.  ', 'Finishing blow', 'level 6', 'At 6th level monks who follow the way of fast kicks learn to lean in an extra kick between their flurry of blows.Your Flurry of blows now deals 3 unarmed strikes instead of 2 and any unarmed strike got in other way now counts as 2 unarmed strikes.', 'Tornado of blows', 'level 11', 'Over the course of their training monks who follow the way of fast kicks learn to attack at a speed close to the speed of sound. At 11th level when you use your Flurry of blows you may use extra 1 psi point to preform another Flurry of blows, you may use this feature a number of times equal to your Dexterity modifier, all charges reset after a long rest.', 'Ideal blow', 'level 17', 'When their training gets to the peak monks who follow the way of fast blow can hit and never tire, tales are that such master can kill a whole army singlehandedly At 17th level you gain the ultimate mastery over your abilities, when you knock a creature unconcious with you Flurry of blows you regain all psi points you used this turn', 'http://localhost/login/Kasp_proj_new/images/monk.jpg', 25),
	(2, 'WIZARD: SCHOOL OF MIND INFESTATION', 'Wizards who got in contact with mind frayers can sometimes gain a desire to learn their mind fraying technique thus starting to learn the techniques of ', 'Mind fraying novice', 'level 2', 'When you take on the studies of this school at 2nd level you learn to read others thoughts with ease you can use spell Detect thoughts without consuming spell slots a number of times equal to your profficiency modifier, all charges reset after a long rest. ', 'Cyphered mind', 'level 2', 'At the beggining of their studies the apprentice of this school learn to block their mind from outside infestation. At 2nd level as a reaction to falling under effect of a spell connected to your mind or thoughts you can close your mind doing all the saving throws against that effect with advantage and gaining resistance to psyhic damage until the end of your next turn, you can use this feature a number of times equal to half your profficiency modifier rounded up, all charges rest after a long rest.', 'Intrusive thought', 'level 6', 'Over the course of your studies you have learnt to affect the thoughts of a creature whose mind you are reading. At 6th level when you successfully use the spell Detect thoughts you can forse the target creature to make a second wisdom saving throw, on a failed save you can change it\'s thoughts to a sentance not longer then 5 words and the creatures actions will change according to that sentance, the effect lasts 1 minute or until you drop concentration, you can use this feature a number of times equal to your profficiency modifier, all charges reset after a long rest.', 'Ideal thought reading', 'level 10', 'At 10th level you master the art of thought reading to ideal. Your Detect thoughts spell now can affect even creatures who don\'t speak any language and have intelligence lower than 3, also any creature makes saving throws against this spell with a disadvantage.', 'http://localhost/login/Kasp_proj_new/images/mind%20control.jpg', 12),
	(3, 'DRUID: CIRCLE OF TREES', 'Druids who went to feywild and seen the tree of live sometimes decide to give their lives to the tree thus accepting the circle of trees', 'body of tree', 'level 2', 'When you accept the circle of tree you organism changes to become more similiar to a tree. At 2nd level you no longer need to eat and sleep, you are getting all the needed vitamins through a photosintesis and for a long rest you need 4 hours under the direct lighting of sun or other alike light source.', 'tree skin', 'level 2', 'With the changes in your organism your skin also changes to be tree alike. Your natural DC now equals 16', 'Tree knowledge', 'level 6', 'In your dreams you learn some spells from the tree of life. At 6th level you can add Thorn whip, Entangle and Earthbind to your spell list if you don\'t know them yet, this spells now don\'t count against the number of spells and cantrips you can learn.', 'Intimidating presence', 'level 10', 'At 10th level your look reminds one of a tree even more. You can use an action to force a creature within 30 feet of you to make a Wisdom saving throw against your magic save DC, on a failed save the creature is affraid and immobilized, the effect lasts for 1 minute, the creature can repeat the saving throw at the end of it\'s every turn to end the effect earlier. You can use this feature a number of times equal to your profficiency modifier, all charges reset after a long rest.', 'http://localhost/login/Kasp_proj_new/images/druid.jpg', 4);

-- Дамп структуры для таблица dnd_database.traits
CREATE TABLE IF NOT EXISTS `traits` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Backstory_ID` int(11) DEFAULT NULL,
  `Trait 1` tinytext DEFAULT NULL,
  `Trait 2` tinytext DEFAULT NULL,
  `Trait 3` tinytext DEFAULT NULL,
  `Trait 4` tinytext DEFAULT NULL,
  `Trait 5` tinytext DEFAULT NULL,
  `Trait 6` tinytext DEFAULT NULL,
  `Trait 7` tinytext DEFAULT NULL,
  `Trait 8` tinytext DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_traits_backstories` (`Backstory_ID`),
  CONSTRAINT `FK_traits_backstories` FOREIGN KEY (`Backstory_ID`) REFERENCES `backstories` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.traits: ~3 rows (приблизительно)
INSERT INTO `traits` (`ID`, `Backstory_ID`, `Trait 1`, `Trait 2`, `Trait 3`, `Trait 4`, `Trait 5`, `Trait 6`, `Trait 7`, `Trait 8`) VALUES
	(1, 1, 'I was betrayed a lot in the past, so I rarley really trust anyone', 'My weapon is my best tool and my best friend', 'mapmaking is my profession and I can\'t spend a day eithout making atleast a sketch', 'Training is a duty of the warrior, even after fleeing from military I train harshly every day', 'My family is still living under a ruler I left and I wil do anything to make them free', 'I find something romantic in this lonley travels and try to find beauty in everything around me', 'I am a strong warrior and a lone wolf, I don\'t need some weak burden traveling with me', 'I promised not to kill a sentient being again to atone for all those I have killed before'),
	(2, 2, 'I have a trinket from my home plane that I cherish a lot', 'Creatures from my home plane are really ugly so I try to hide my appearence', 'I think magic is my only chance to survive in this world so I train it every day', 'I am very curious about this new world and try to learn as much about it as possible', 'The life around me has changed, but it doesn\'t mean I should too', 'I am fixed on the idea to find another hole in the ground and jump again', 'I would like to help my friends and family to move to this new palne', 'My enemy is in my homeplane and I am affraid to return there'),
	(3, 3, 'One of my limbs was bitten out by the monster.', 'Because of toxic gas in mosters layer I\'m now deaf or can\'t smell anything.', 'The monster has infested me with something, I have no idea what it is or what effect it does on me.', 'After the incident I decided I will slay every monster of the same kind I encounter.', 'I have left others in the monsters nest and now need to atone for my sins.', 'I was once an aristocrate but lost my documents and wealth in the nest.', 'The monster killed all other adventurers in my group, so I carry their adventuring badges as a reminder.', 'The monster now hunts me because I didn\'t kill it.');

-- Дамп структуры для таблица dnd_database.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `admin?` int(11) DEFAULT 0,
  `Description` tinytext DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_id` (`user_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы dnd_database.users: ~4 rows (приблизительно)
INSERT INTO `users` (`ID`, `user_id`, `username`, `password`, `Name`, `Email`, `admin?`, `Description`) VALUES
	(1, 245954068, 'DM1997', 'FIREBALL', 'Roberto', 'RobertB@gmail.com', 1, NULL),
	(2, 469830, 'Mia22', 'Nya', 'Mia', 'Mieechka@gmail.com', 0, NULL),
	(3, 735339787, 'admin', '0000', 'Vladlen', '11DVPodnebess@rvt.lv', 1, NULL),


/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
