
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

 CREATE DATABASE IF NOT EXISTS `tms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
 USE `tms`;


CREATE TABLE `task` (
  `idtask` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `task` (`idtask`, `name`, `duration`, `date`, `userid`) VALUES
(1, 'Web Development', '4', '07/15/2022', 2),
(2, 'Web Development', '4', '07/15/2022', 3),
(3, 'Web Development', '4', '07/15/2022', 4),
(4, 'Web Development', '4', '07/15/2022', 2),
(5, 'Web Development', '4', '07/15/2022', 3),
(7, 'Web Development', '4', '07/15/2022', 4),
(8, 'Web Development', '4', '07/15/2022', 2);


CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `user` (`iduser`, `fname`, `lname`, `type`) VALUES
(2, 'Mark Daniell ', 'Romanillos', 2),
(3, 'Mark Daniell ', 'Romanillos', 3),
(4, 'Mark Daniell ', 'Romanillos', 4),
(8, 'Mark Daniell ', 'Romanillos', 1),
(9, 'Mark Daniell ', 'Romanillos', 1),
(10, 'Mark Daniell ', 'Romanillos', 1);


ALTER TABLE `task`
  ADD PRIMARY KEY (`idtask`),
  ADD KEY `userid` (`userid`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

ALTER TABLE `task`
  MODIFY `idtask` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`iduser`);
COMMIT;
