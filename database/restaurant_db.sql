SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `restaurant` (
  `meal` varchar(255) DEFAULT NULL,
  `best_restaurant` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `restaurant` (`meal`, `best_restaurant`) VALUES
('burger', 'Super Burger'),
('pizza', 'Italiano Pizza'),
('shawarma', 'Shawarma King'),
('sushi', 'Tokyo House'),
('burger', 'Burger House'),
('pizza', 'Italiano Pizzeria'),
('shawarma', 'Shawarma King'),
('sushi', 'Tokyo Sushi'),
('fried chicken', 'KFC'),
('pasta', 'Little Italy');

COMMIT;



