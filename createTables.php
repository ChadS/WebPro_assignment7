CREATE TABLE `music`.`album` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` VARCHAR( 225 ) NOT NULL ,
`typeofalbum` VARCHAR( 225 ) NOT NULL ,
`material` VARCHAR( 225 ) NOT NULL ,
`price` INT( 11 ) NOT NULL ,
PRIMARY KEY ( `id` )
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS music.`users` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,

PRIMARY KEY (`id`)
);

CREATE TABLE `music`.`artist` (

`id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`artistname` VARCHAR( 255 ) NOT NULL ,
`artistemail` VARCHAR( 255 ) NOT NULL ,
`artistphone` INT( 11 ) NOT NULL ,
`date` DATETIME NOT NULL ,
PRIMARY KEY ( `id` )

) ENGINE = InnoDB;