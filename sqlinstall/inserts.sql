INSERT INTO `topics` (`tid`, `name`, `slug`) VALUES
(1, 'Inspiration', 'inspiration'),
(2, 'Motivation', 'motivation'),
(3, 'Diary', 'diary')



INSERT INTO `post_topic` (`ptid`, `post_id`, `topic_id`) VALUES
(1, 1, 1),
(2, 2, 2)