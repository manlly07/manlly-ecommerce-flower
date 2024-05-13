CREATE TABLE `Users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT (now()),
  `is_deleted` boolean DEFAULT false
);

CREATE TABLE `ProductCategory` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `created_at` datetime DEFAULT (now()),
  `is_deleted` boolean DEFAULT false
);

CREATE TABLE `ProductSpus` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `category_id` int NOT NULL,
  `created_at` datetime DEFAULT (now()),
  `is_deleted` boolean DEFAULT false
);

CREATE TABLE `ProductImage` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `image` varchar(255) DEFAULT '',
  `product_id` int NOT NULL
);

CREATE TABLE `ProductAttribute` (
  `product_id` int PRIMARY KEY AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
);

CREATE TABLE `ProductSkus` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `color` varchar(255) DEFAULT 'white',
  `size` varchar(255) DEFAULT 's',
  `price` float DEFAULT 0,
  `quantity` int DEFAULT 0,
  `created_at` datetime DEFAULT (now()),
  `is_deleted` boolean DEFAULT false
);

CREATE TABLE `SpuToSku` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `spu_id` int NOT NULL,
  `sku_id` int NOT NULL
);

CREATE TABLE `Reviews` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `rate` int,
  `image` varchar(255) DEFAULT "",
  `content` varchar(255) DEFAULT "",
  `reply` varchar(255) DEFAULT "",
  `created_at` DATE DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `Orders` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `phone` varchar(10) NOT NULL,
  `firstname` varchar(255) DEFAULT '',
  `lastname` varchar(255) DEFAULT '',
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT '',
  `total` float NOT NULL,
  `status` ENUM ('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT "processing",
  `payment_method` ENUM ('COD', 'OnlineBanking') DEFAULT "COD",
  `payment_status` enum ('pending', 'paid', 'cancelled') DEFAULT "pending",
  `created_at` datetime DEFAULT (now())
);

CREATE TABLE `OrderDetail` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `price` float,
  `quantity` int DEFAULT 0
);


CREATE TABLE `Blog` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `thumbnail` varchar(255) DEFAULT '',
  `content` varchar(255) DEFAULT '',
  `created_at` datetime DEFAULT (now()),
  `is_deleted` boolean DEFAULT false
);


ALTER TABLE `ProductSpus` ADD FOREIGN KEY (`category_id`) REFERENCES `ProductCategory` (`id`);

ALTER TABLE `ProductAttribute` ADD FOREIGN KEY (`product_id`) REFERENCES `ProductSpus` (`id`);

ALTER TABLE `OrderDetail` ADD FOREIGN KEY (`order_id`) REFERENCES `Orders` (`id`);

ALTER TABLE `OrderDetail` ADD FOREIGN KEY (`product_id`) REFERENCES `SpuToSku` (`id`);

ALTER TABLE `SpuToSku` ADD FOREIGN KEY (`spu_id`) REFERENCES `ProductSpus` (`id`);

ALTER TABLE `SpuToSku` ADD FOREIGN KEY (`sku_id`) REFERENCES `ProductSkus` (`id`);

ALTER TABLE `ProductImage` ADD FOREIGN KEY (`product_id`) REFERENCES `ProductSpus` (`id`);

ALTER TABLE `Reviews` ADD FOREIGN KEY (`product_id`) REFERENCES `ProductSpus` (`id`);

INSERT INTO ProductCategory (title, description) VALUES ('Hoa tươi', 'Cung cấp đa dạng các loại hoa tươi rực rỡ');
INSERT INTO ProductCategory (title, description) VALUES ('Hoa bó', 'Bó hoa được thiết kế đẹp mắt, phù hợp nhiều dịp');
INSERT INTO ProductCategory (title, description) VALUES ('Hoa lẵng', 'Lẵng hoa sang trọng, thích hợp cho các sự kiện');
INSERT INTO ProductCategory (title, description) VALUES ('Hoa cưới', 'Hoa cưới cầm tay, hoa cài áo chú rể, hoa trang trí xe hoa');
INSERT INTO ProductCategory (title, description) VALUES ('Hoa sinh nhật', 'Hoa tươi rực rỡ, phù hợp cho ngày sinh nhật');
INSERT INTO ProductCategory (title, description) VALUES ('Hoa khai trương', 'Lẵng hoa sang trọng, chúc mừng cho sự kiện khai trương mới');
INSERT INTO ProductCategory (title, description) VALUES ('Hoa chia buồn', 'Vòng hoa, lẵng hoa thể hiện sự tôn kính và chia buồn');
INSERT INTO ProductCategory (title, description) VALUES ('Hoa hộp', 'Hoa được sắp xếp đẹp mắt trong hộp sang trọng');
INSERT INTO ProductCategory (title, description) VALUES ('Hoa lụa', 'Hoa lụa cao cấp, bền đẹp theo thời gian');
INSERT INTO ProductCategory (title, description) VALUES ('Phụ kiện hoa', 'Giấy gói hoa, nơ, ruy băng, ...');

