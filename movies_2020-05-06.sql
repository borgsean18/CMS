# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.34)
# Database: movies
# Generation Time: 2020-05-06 19:45:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table assignmentMovies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `assignmentMovies`;

CREATE TABLE `assignmentMovies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `desc` varchar(500) NOT NULL DEFAULT '',
  `rating` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `assignmentMovies` WRITE;
/*!40000 ALTER TABLE `assignmentMovies` DISABLE KEYS */;

INSERT INTO `assignmentMovies` (`id`, `title`, `desc`, `rating`)
VALUES
	(1,'Bloodshot','After he and his wife are murdered, marine Ray Garrison is resurrected by a team of scientists. Enhanced with nanotechnology, he becomes a superhuman, biotech killing machine—\'Bloodshot\'. As Ray first trains with fellow super-soldiers, he cannot recall anything from his former life. But when his memories flood back and he remembers the man that killed both him and his wife, he breaks out of the facility to get revenge, only to discover that there\'s more to the conspiracy than he thought.',3),
	(2,'Onward','In a suburban fantasy world, two teenage elf brothers embark on an extraordinary quest to discover if there is still a little magic left out there.',4),
	(3,'The Hunt','Twelve strangers wake up in a clearing. They don\'t know where they are—or how they got there. In the shadow of a dark internet conspiracy theory, ruthless elitists gather at a remote location to hunt humans for sport. But their master plan is about to be derailed when one of the hunted turns the tables on her pursuers.',3),
	(4,'Digimon Adventure: Last Evolution Kizuna','Tai is now a university student, living alone, working hard at school, and working every day, but with his future still undecided. Meanwhile, Matt and others continue to work on Digimon incidents and activities that help people with their partner Digimon. When an unprecedented phenomenon occurs, the DigiDestined discover that when they grow up, their relationship with their partner Digimon will come closer to an end. As a countdown timer activates on the Digivice, they realize that the more they',4),
	(5,'Trolls World Tour','Queen Poppy and Branch make a surprising discovery — there are other Troll worlds beyond their own, and their distinct differences create big clashes between these various tribes. When a mysterious threat puts all of the Trolls across the land in danger, Poppy, Branch, and their band of friends must embark on an epic quest to create harmony among the feuding Trolls to unite them against certain doom.',5),
	(6,'My Spy','A hardened CIA operative finds himself at the mercy of a precocious 9-year-old girl, having been sent undercover to surveil her family.',3),
	(7,'Just Mercy','The powerful true story of Harvard-educated lawyer Bryan Stevenson, who goes to Alabama to defend the disenfranchised and wrongly condemned — including Walter McMillian, a man sentenced to death despite evidence proving his innocence. Bryan fights tirelessly for Walter with the system stacked against them.',3),
	(8,'I Still Believe','The true-life story of Christian music star Jeremy Camp and his journey of love and loss that looks to prove there is always hope.',3),
	(9,'The Turning','A young woman quits her teaching job to be a private tutor (governess) for a wealthy young heiress who witnessed her parent\'s tragic death. Shortly after arriving, the girl\'s degenerate brother is sent home from his boarding school. The tutor has some strange, unexplainable experiences in the house and begins to suspect there is more to their story.',4),
	(10,'A Way Back','A former basketball all-star, who has lost his wife and family foundation in a struggle with addiction attempts to regain his soul and salvation by becoming the coach of a disparate ethnically mixed high school basketball team at his alma mater.',3),
	(11,'Guns Akimbo','An ordinary guy suddenly finds himself forced to fight a gladiator-like battle for a dark website that streams the violence for viewers. Miles must fight heavily armed Nix and also save his kidnapped ex-girlfriend.',3),
	(12,'Logan','In the near future, a weary Logan cares for an ailing Professor X in a hideout on the Mexican border. But Logan\'s attempts to hide from the world and his legacy are upended when a young mutant arrives, pursued by dark forces.',4),
	(13,'Dark Waters','A tenacious attorney uncovers a dark secret that connects a growing number of unexplained deaths due to one of the world\'s largest corporations. In the process, he risks everything — his future, his family, and his own life — to expose the truth.',4),
	(14,'The Informer','In New York, former convict Pete Koslow, related to the Polish mafia, must deal with both Klimek the General, his ruthless boss, and the twisted ambitions of two federal agents, as he tries to survive and protect the lives of his loved ones…',2),
	(15,'A Beautiful Day In The Neighbourhood','An award-winning cynical journalist, Lloyd Vogel, begrudgingly accepts an assignment to write an Esquire profile piece on the beloved television icon Fred Rogers. After his encounter with Rogers, Vogel\'s perspective on life is transformed.',2),
	(16,'Love The Way You Are','Opposites clash when spunky girl next door Lin Lin meets eccentric nerd Yuke. Despite being neighbors and schoolmates since childhood, Lin Lin and Yuke barely know each other. When the pair are both admitted into the same university, Lin Lin discovers that Yuke harbors a secret crush for campus beauty, Ruting. Ever the busybody, Lin Lin decides to matchmake Yuke and Ruting, only to find herself gradually falling for Yuke.',3),
	(17,'Mortal Kombat Legends: Scorpion’s Revenge','After the vicious slaughter of his family by stone-cold mercenary Sub-Zero, Hanzo Hasashi is exiled to the torturous Netherrealm. There, in exchange for his servitude to the sinister Quan Chi, he’s given a chance to avenge his family – and is resurrected asScorpion, a lost soul bent on revenge. Back on Earthrealm, Lord Raiden gathers a team of elite warriors – Shaolin monk Liu Kang, Special Forces officer Sonya Blade and action star Johnny Cage – an unlikely band of heroes with one chance to sav',4),
	(18,'Memories Of Murder','1986 Gyunggi Province. The body of a young woman is found brutally raped and murdered. Two months later, a series of rapes and murders commences under similar circumstances. And in a country that had never known such crimes, the dark whispers about a serial murderer grow louder. A special task force is set up in the area, with two local detectives Park Doo-Man and Jo Young-Goo joined by a detective from Seoul who requested to be assigned to the case.',3),
	(19,'Harriet','The extraordinary tale of Harriet Tubman\'s escape from slavery and transformation into one of America\'s greatest heroes. Her courage, ingenuity and tenacity freed hundreds of slaves and changed the course of history.',4),
	(20,'Judy & Punch','In the anarchic town of Seaside, nowhere near the sea, puppeteers Judy and Punch are trying to resurrect their marionette show. The show is a hit due to Judy\'s superior puppeteering but Punch\'s driving ambition and penchant for whisky lead to a inevitable tragedy that Judy must avenge.',3);

/*!40000 ALTER TABLE `assignmentMovies` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
