


CREATE TABLE `blogger_disk`.`post_topic` ( `ptid` INT(11) NOT NULL , `post_id` INT NOT NULL , `topic_id` INT NOT NULL , UNIQUE (`post_id`)) ENGINE = InnoDB; 


ALTER TABLE `post_topic` ADD FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`) ON DELETE CASCADE ON UPDATE NO ACTION; ALTER TABLE `post_topic` ADD FOREIGN KEY (`topic_id`) REFERENCES `topics`(`tid`) ON DELETE CASCADE ON UPDATE NO ACTION; 