SET CHARSET UTF8;
CREATE DATABASE IF NOT EXISTS restaurant_review DEFAULT CHARACTER SET utf8;
USE restaurant_review;

CREATE TABLE IF NOT EXISTS `review`
(
  `id`       int(11) NOT NULL AUTO_INCREMENT,
  `poster`   varchar(255) NOT NULL,
  `restaurant_name`   varchar(255) NOT NULL,
  `review`    text,
  PRIMARY KEY (`id`)
);

INSERT INTO `review`(`poster`, `restaurant_name`, `review`) VALUES
('さくら', '焼肉 豚角', '食べ放題なのに美味しかった。'),
('もみじ', '侍パスタ', '美味しいが、店員の態度があまりよくなかった。');