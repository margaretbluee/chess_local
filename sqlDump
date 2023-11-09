-- --------------------------------------------------------
-- Διακομιστής:                  127.0.0.1
-- Έκδοση διακομιστή:            10.4.28-MariaDB - mariadb.org binary distribution
-- Λειτ. σύστημα διακομιστή:     Win64
-- HeidiSQL Έκδοση:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for chess_local
CREATE DATABASE IF NOT EXISTS `chess_local` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `chess_local`;

-- Dumping structure for πίνακας chess_local.board
CREATE TABLE IF NOT EXISTS `board` (
  `x` tinyint(1) NOT NULL,
  `y` tinyint(1) NOT NULL,
  `b color` enum('B','W') NOT NULL,
  `piece color` enum('W','B') DEFAULT NULL,
  `piece` enum('K','Q','R','B','N','P') DEFAULT NULL,
  PRIMARY KEY (`x`,`y`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table chess_local.board: ~64 rows (approximately)
INSERT INTO `board` (`x`, `y`, `b color`, `piece color`, `piece`) VALUES
	(1, 1, 'B', 'W', 'R'),
	(1, 2, 'W', 'W', 'P'),
	(1, 3, 'B', NULL, NULL),
	(1, 4, 'W', NULL, NULL),
	(1, 5, 'B', NULL, NULL),
	(1, 6, 'W', NULL, NULL),
	(1, 7, 'B', 'B', 'P'),
	(1, 8, 'W', 'B', 'R'),
	(2, 1, 'W', 'W', 'N'),
	(2, 2, 'B', 'W', 'P'),
	(2, 3, 'W', NULL, NULL),
	(2, 4, 'B', NULL, NULL),
	(2, 5, 'W', NULL, NULL),
	(2, 6, 'B', NULL, NULL),
	(2, 7, 'W', 'B', 'P'),
	(2, 8, 'B', 'B', 'N'),
	(3, 1, 'B', 'W', 'B'),
	(3, 2, 'W', 'W', 'P'),
	(3, 3, 'B', NULL, NULL),
	(3, 4, 'W', NULL, NULL),
	(3, 5, 'B', NULL, NULL),
	(3, 6, 'W', NULL, NULL),
	(3, 7, 'B', 'B', 'P'),
	(3, 8, 'W', 'B', 'B'),
	(4, 1, 'W', 'W', 'Q'),
	(4, 2, 'B', 'W', 'P'),
	(4, 3, 'W', NULL, NULL),
	(4, 4, 'B', NULL, NULL),
	(4, 5, 'W', NULL, NULL),
	(4, 6, 'B', NULL, NULL),
	(4, 7, 'W', 'B', 'P'),
	(4, 8, 'B', 'B', 'Q'),
	(5, 1, 'B', 'W', 'K'),
	(5, 2, 'W', 'W', 'P'),
	(5, 3, 'B', NULL, NULL),
	(5, 4, 'W', NULL, NULL),
	(5, 5, 'B', NULL, NULL),
	(5, 6, 'W', NULL, NULL),
	(5, 7, 'B', 'B', 'P'),
	(5, 8, 'W', 'B', 'K'),
	(6, 1, 'W', 'W', 'B'),
	(6, 2, 'B', 'W', 'P'),
	(6, 3, 'W', NULL, NULL),
	(6, 4, 'B', NULL, NULL),
	(6, 5, 'W', NULL, NULL),
	(6, 6, 'B', NULL, NULL),
	(6, 7, 'W', 'B', 'P'),
	(6, 8, 'B', 'B', 'B'),
	(7, 1, 'B', 'W', 'N'),
	(7, 2, 'W', 'W', 'P'),
	(7, 3, 'B', NULL, NULL),
	(7, 4, 'W', NULL, NULL),
	(7, 5, 'B', NULL, NULL),
	(7, 6, 'W', NULL, NULL),
	(7, 7, 'B', 'B', 'P'),
	(7, 8, 'W', 'B', 'N'),
	(8, 1, 'W', 'W', 'R'),
	(8, 2, 'B', 'W', 'P'),
	(8, 3, 'W', NULL, NULL),
	(8, 4, 'B', NULL, NULL),
	(8, 5, 'W', NULL, NULL),
	(8, 6, 'B', NULL, NULL),
	(8, 7, 'W', 'B', 'P'),
	(8, 8, 'B', 'B', 'R');

-- Dumping structure for πίνακας chess_local.board_empty
CREATE TABLE IF NOT EXISTS `board_empty` (
  `x` tinyint(1) NOT NULL,
  `y` tinyint(1) NOT NULL,
  `b color` enum('B','W') NOT NULL,
  `piece color` enum('W','B') DEFAULT NULL,
  `piece` enum('K','Q','R','B','N','P') DEFAULT NULL,
  PRIMARY KEY (`x`,`y`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table chess_local.board_empty: ~64 rows (approximately)
INSERT INTO `board_empty` (`x`, `y`, `b color`, `piece color`, `piece`) VALUES
	(1, 1, 'B', 'W', 'R'),
	(1, 2, 'W', 'W', 'P'),
	(1, 3, 'B', NULL, NULL),
	(1, 4, 'W', NULL, NULL),
	(1, 5, 'B', NULL, NULL),
	(1, 6, 'W', NULL, NULL),
	(1, 7, 'B', 'B', 'P'),
	(1, 8, 'W', 'B', 'R'),
	(2, 1, 'W', 'W', 'N'),
	(2, 2, 'B', 'W', 'P'),
	(2, 3, 'W', NULL, NULL),
	(2, 4, 'B', NULL, NULL),
	(2, 5, 'W', NULL, NULL),
	(2, 6, 'B', NULL, NULL),
	(2, 7, 'W', 'B', 'P'),
	(2, 8, 'B', 'B', 'N'),
	(3, 1, 'B', 'W', 'B'),
	(3, 2, 'W', 'W', 'P'),
	(3, 3, 'B', NULL, NULL),
	(3, 4, 'W', NULL, NULL),
	(3, 5, 'B', NULL, NULL),
	(3, 6, 'W', NULL, NULL),
	(3, 7, 'B', 'B', 'P'),
	(3, 8, 'W', 'B', 'B'),
	(4, 1, 'W', 'W', 'Q'),
	(4, 2, 'B', 'W', 'P'),
	(4, 3, 'W', NULL, NULL),
	(4, 4, 'B', NULL, NULL),
	(4, 5, 'W', NULL, NULL),
	(4, 6, 'B', NULL, NULL),
	(4, 7, 'W', 'B', 'P'),
	(4, 8, 'B', 'B', 'Q'),
	(5, 1, 'B', 'W', 'K'),
	(5, 2, 'W', 'W', 'P'),
	(5, 3, 'B', NULL, NULL),
	(5, 4, 'W', NULL, NULL),
	(5, 5, 'B', NULL, NULL),
	(5, 6, 'W', NULL, NULL),
	(5, 7, 'B', 'B', 'P'),
	(5, 8, 'W', 'B', 'K'),
	(6, 1, 'W', 'W', 'B'),
	(6, 2, 'B', 'W', 'P'),
	(6, 3, 'W', NULL, NULL),
	(6, 4, 'B', NULL, NULL),
	(6, 5, 'W', NULL, NULL),
	(6, 6, 'B', NULL, NULL),
	(6, 7, 'W', 'B', 'P'),
	(6, 8, 'B', 'B', 'B'),
	(7, 1, 'B', 'W', 'N'),
	(7, 2, 'W', 'W', 'P'),
	(7, 3, 'B', NULL, NULL),
	(7, 4, 'W', NULL, NULL),
	(7, 5, 'B', NULL, NULL),
	(7, 6, 'W', NULL, NULL),
	(7, 7, 'B', 'B', 'P'),
	(7, 8, 'W', 'B', 'N'),
	(8, 1, 'W', 'W', 'R'),
	(8, 2, 'B', 'W', 'P'),
	(8, 3, 'W', NULL, NULL),
	(8, 4, 'B', NULL, NULL),
	(8, 5, 'W', NULL, NULL),
	(8, 6, 'B', NULL, NULL),
	(8, 7, 'W', 'B', 'P'),
	(8, 8, 'B', 'B', 'R');

-- Dumping structure for procedure chess_local.clean_board
DELIMITER //
CREATE PROCEDURE `clean_board`()
BEGIN
REPLACE INTO board SELECT * FROM board_empty;
END//
DELIMITER ;

-- Dumping structure for πίνακας chess_local.game_status
CREATE TABLE IF NOT EXISTS `game_status` (
  `status` enum('not active','initialized','started','\r\nended','aborded') NOT NULL DEFAULT 'not active',
  `p_turn` enum('W','B') DEFAULT NULL,
  `result` enum('B','W','D') DEFAULT NULL,
  `last_change` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table chess_local.game_status: ~0 rows (approximately)

-- Dumping structure for procedure chess_local.move_piece
DELIMITER //
CREATE PROCEDURE `move_piece`(x1 TINYINT, y1 TINYINT,x2 TINYINT,y2 TINYINT)
BEGIN
DECLARE p,p_color CHAR;
SELECT piece, piece_color INTO p, p_color
FROM `board` WHERE X=x1 AND Y=y1;
UPDATE board
SET piece=p, piece_color=p_color
WHERE X=x2 AND Y=y2;
UPDATE board
SET piece=NULL,piece_color=NULL
WHERE X=x1 AND Y=y1;
END//
DELIMITER ;

-- Dumping structure for πίνακας chess_local.players
CREATE TABLE IF NOT EXISTS `players` (
  `username` varchar(20) DEFAULT NULL,
  `piece_color` enum('B','W') NOT NULL,
  PRIMARY KEY (`piece_color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table chess_local.players: ~0 rows (approximately)

-- Dumping structure for trigger chess_local.game_status_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER game_status_update BEFORE UPDATE
ON game_status
FOR EACH ROW BEGIN
SET NEW.last_change = NOW();
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
