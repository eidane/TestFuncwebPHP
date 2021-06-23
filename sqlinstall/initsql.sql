


CREATE TABLE `blogger_disk`.`post_topic` ( `ptid` INT(11) NOT NULL , `post_id` INT NOT NULL , `topic_id` INT NOT NULL , UNIQUE (`post_id`)) ENGINE = InnoDB; 


CREATE TABLE `blogger_disk`.`ratingregistre` ( `uid` INT(11) NOT NULL , `id` INT(11) NOT NULL , PRIMARY KEY (`uid`, `id`)) ENGINE = InnoDB; 


CREATE TABLE `blogger_disk`.`topics` ( `tid` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `slug` VARCHAR(255) NOT NULL , PRIMARY KEY (`tid`), UNIQUE (`slug`)) ENGINE = InnoDB; 

CREATE TABLE `blogger_disk`.`post_topic` ( `ptid` INT NOT NULL , `post_id` INT NOT NULL , `topic_id` INT NOT NULL , PRIMARY KEY (`ptid`), UNIQUE (`post_id`)) ENGINE = InnoDB; 
topics
ALTER TABLE `post_topic` ADD FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`) ON DELETE CASCADE ON UPDATE NO ACTION; ALTER TABLE `post_topic` ADD FOREIGN KEY (`topic_id`) REFERENCES `topics`(`tid`) ON DELETE CASCADE ON UPDATE NO ACTION; 
+----+-----------+------------------------+------------+
|     field      |     type               | specs      |
+----+-----------+------------------------+------------+
|  id            | INT(11)                |            |
|  name          | VARCHAR(255)           |            |
|  slug          | VARCHAR(255)           | UNIQUE     |
+----------------+--------------+---------+------------+


post_topic
+----+-----------+------------------------+------------+
|     field      |     type               | specs      |
+----+-----------+------------------------+------------+
|  id            | INT(11)                |            |
|  post_id       | INT(11)                |  UNIQUE    |
|  topic_id      | INT(11)                |            |
+----------------+--------------+---------+------------+
