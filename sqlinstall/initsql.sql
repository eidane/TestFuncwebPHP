


CREATE TABLE `blogger_disk`.`post_topic` ( 
	`ptid` INT(11) NOT NULL , 
	`post_id` INT NOT NULL , 
	`topic_id` INT NOT NULL , 
	UNIQUE (`post_id`)) ENGINE = InnoDB; 

CREATE TABLE `posts` (
 `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `user_id` int(11) DEFAULT NULL,
 `title` varchar(255) NOT NULL,
 `slug` varchar(255) NOT NULL UNIQUE,
 `votes` int(11) NOT NULL DEFAULT '0',
 `points` int(11) NOT NULL DEFAULT '0',
 `views` int(11) NOT NULL DEFAULT '0',
 `image` varchar(255) NOT NULL,
 `body` text NOT NULL,
 `published` tinyint(1) NOT NULL,
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB ;

CREATE TABLE `blogger_disk`.`ratingregistre` ( 
	`uid` INT(11) NOT NULL , 
	`id` INT(11) NOT NULL , 
	PRIMARY KEY (`uid`, `id`)) 
	ENGINE = InnoDB; 


CREATE TABLE `blogger_disk`.`topics` ( 
	`tid` INT(11) NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(255) NOT NULL , 
	`slug` VARCHAR(255) NOT NULL , 
	PRIMARY KEY (`tid`), 
	UNIQUE (`slug`)) 
ENGINE = InnoDB; 

CREATE TABLE `blogger_disk`.`post_topic` ( 
	`ptid` INT NOT NULL , 
	`post_id` INT NOT NULL , 
	`topic_id` INT NOT NULL , 
	PRIMARY KEY (`ptid`), 
	UNIQUE (`post_id`)) 
ENGINE = InnoDB; 

ALTER TABLE `post_topic` ADD FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`) ON DELETE CASCADE ON UPDATE NO ACTION; ALTER TABLE `post_topic` ADD FOREIGN KEY (`topic_id`) REFERENCES `topics`(`tid`) ON DELETE CASCADE ON UPDATE NO ACTION; 
