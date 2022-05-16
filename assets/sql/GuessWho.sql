CREATE TABLE `persons` (
  `person_name` varchar(50) UNIQUE PRIMARY KEY,
  `female` boolean,
  `large_nose` boolean,
  `large_mouth` boolean,
  `brown_eyes` boolean,
  `hat` boolean,
  `bald` boolean,
  `beard` boolean,
  `glasses` boolean,
  `moustache` boolean,
  `smiling` boolean,
  `brown_hair` boolean,
  `long_hair` boolean
);

CREATE TABLE `persons1` (
  `person_name` varchar(50) UNIQUE PRIMARY KEY,
  `gender` varchar(6),
  `nose_traits` varchar(50),
  `mouth_traits` varchar(50),
  `eyes_traits` varchar(50),
  `hair_traits` varchar(50),
  `facial_hair_traits` varchar(50),
  `hat` boolean,
  `glasses` boolean
);

CREATE TABLE `users` (
  `u_id` varchar(50) UNIQUE PRIMARY KEY,
  `name` varchar(50),
  `number_plays` integer,
  `first_date` datetime,
  `last_date` datetime
);

CREATE TABLE `person_id` (
  `s_id` integer UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `p_id` varchar(255),
  `u_id` varchar(50),
  `id_date` datetime
);

ALTER TABLE `persons` COMMENT = 'This will contain all the Person attributes';

ALTER TABLE `persons1` COMMENT = 'This will contain all the Person attributes';

ALTER TABLE `users` COMMENT = 'Stores users, email is primary key';

ALTER TABLE `person_id` ADD FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

ALTER TABLE `person_id` ADD FOREIGN KEY (`p_id`) REFERENCES `persons1` (`person_name`);
