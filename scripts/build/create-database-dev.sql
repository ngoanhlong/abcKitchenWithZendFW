CREATE DATABASE IF NOT EXISTS `canteen_live` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
CREATE DATABASE IF NOT EXISTS `canteen_dev` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
CREATE DATABASE IF NOT EXISTS `canteen_testing` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE USER 'canteen_live'@'localhost' IDENTIFIED BY 'canteen_live';
CREATE USER 'canteen_dev'@'localhost' IDENTIFIED BY 'canteen_dev';
CREATE USER 'canteen_testing'@'localhost' IDENTIFIED BY 'canteen_testing';

GRANT ALL PRIVILEGES ON canteen_live.* TO 'canteen_live'@'%' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON canteen_dev.* TO 'canteen_dev'@'%' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON canteen_testing.* TO 'canteen_testing'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;

