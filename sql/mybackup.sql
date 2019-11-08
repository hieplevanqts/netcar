#
# TABLE STRUCTURE FOR: access
#

CREATE TABLE `access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `access` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `access` (`id`, `user_id`, `access`) VALUES ('1', '11', '{\"product\":[\"products\",\"add\",\"edit\",\"delete\",\"categories\",\"cat_add\",\"cat_edit\",\"cat_delete\"]}');
INSERT INTO `access` (`id`, `user_id`, `access`) VALUES ('2', '12', '{\"menu\":[\"menulist\",\"add\",\"edit\",\"delete\"]}');
INSERT INTO `access` (`id`, `user_id`, `access`) VALUES ('3', '2', '{\"product\":[\"products\",\"category_pro\",\"add\",\"delete_once\",\"cat_add\",\"del_cat_once\",\"delete_once_comment\",\"delete_once_question\"],\"order\":[\"orders\",\"listSale\",\"listProvince\",\"delete_once_orders\",\"addSale\",\"del_once_sale\"],\"news\":[\"newslist\",\"categories\",\"tagsnews\",\"addnews\",\"delete_once_news\",\"cat_add_news\",\"del_catnews_once\"],\"menu\":[\"addmenu\",\"menulist\",\"delete\"],\"comment\":[\"comments\",\"questions\"],\"imageupload\":[\"banners\",\"addbanner\",\"delete_Banner_once\"],\"pages\":[\"pagelist\",\"addpage\",\"delete_page_once\"],\"contact\":[\"contacts\",\"delete\"],\"admin\":[\"site_option\",\"maps\",\"store_shopping\"]}');
INSERT INTO `access` (`id`, `user_id`, `access`) VALUES ('4', '1', '{\"inuser\":[\"categories\",\"cate_add\",\"delete_cat_once\"],\"media\":[\"listAll\",\"categories\",\"add\",\"delete_once\",\"cat_add\",\"del_cat_once\"],\"video\":[\"listAll\",\"category_video\",\"add\",\"delete_once\",\"cat_add\",\"del_cat_once\"],\"product\":[\"products\",\"category_pro\",\"config\",\"add\",\"delete_once\",\"cat_add\",\"del_cat_once\",\"delete_once_comment\",\"delete_once_question\"],\"order\":[\"orders\",\"listSale\",\"listProvince\",\"delete_once_orders\",\"addSale\",\"del_once_sale\"],\"attribute\":[\"listBrand\",\"listLocale\",\"listColor\",\"listprice\",\"listOption\",\"addbrand\",\"delete_brand_once\",\"addlocale\",\"delete_locale_once\",\"addcolor\",\"delete_color_once\",\"addprice\",\"delete_price_once\",\"addoption\",\"delete_option_once\"],\"news\":[\"newslist\",\"categories\",\"tagsnews\",\"addnews\",\"delete_once_news\",\"cat_add_news\",\"del_catnews_once\"],\"tag\":[\"listnew\",\"listpro\"],\"menu\":[\"addmenu\",\"menulist\",\"delete\"],\"comment\":[\"comments\",\"questions\"],\"imageupload\":[\"banners\",\"addbanner\",\"delete_Banner_once\"],\"pages\":[\"pagelist\",\"addpage\",\"delete_page_once\"],\"contact\":[\"contacts\",\"delete\"],\"raovat\":[\"listraovat\",\"categories\",\"tagtinrao\",\"add\",\"delete_raovat_once\",\"cat_add\",\"del_cattinrao_once\"],\"email\":[\"emails\",\"delete\"],\"support\":[\"listSuport\",\"add\",\"delete_support_once\"],\"users\":[\"listuser_admin\",\"listusers\",\"add_users\",\"smslist\"],\"admin\":[\"site_option\",\"maps\",\"store_shopping\",\"setup_product\"],\"province\":[\"listDistric\",\"listWard\",\"street\"],\"report\":[\"soldout\",\"bestsellers\"]}');
INSERT INTO `access` (`id`, `user_id`, `access`) VALUES ('5', '580', '{\"admin\":[\"\",\"site_option\",\"inuser\",\"comment\",\"email\",\"contact\"],\"users\":[\"delete\"],\"order\":[\"orders\",\"Deleteeorder\"],\"support\":[\"add\",\"edit\",\"x\\u00f3a\"],\"product\":[\"products\",\"add\",\"edit\",\"delete\",\"categories\",\"cat_add\",\"cat_edit\",\"listCodeSale\",\"cat_delete\",\"images\"],\"news\":[\"newslist\",\"add\",\"edit\",\"delete\",\"categories\",\"cat_add\",\"cat_edit\",\"delete_cat\"],\"pages\":[\"pagelist\",\"add\",\"edit\",\"delete\",\"action\"],\"menu\":[\"menulist\",\"add\",\"edit\",\"delete\"]}');
INSERT INTO `access` (`id`, `user_id`, `access`) VALUES ('6', '612', '{\"media\":[\"listAll\",\"categories\"],\"video\":[\"listAll\",\"category_video\",\"add\",\"delete_once\",\"cat_add\",\"del_cat_once\"]}');
INSERT INTO `access` (`id`, `user_id`, `access`) VALUES ('7', '636', '{\"product\":[\"products\",\"category_pro\",\"add\",\"delete_once\",\"cat_add\",\"del_cat_once\",\"delete_once_comment\",\"delete_once_question\"],\"order\":[\"orders\",\"listSale\",\"listProvince\",\"delete_once_orders\",\"addSale\",\"del_once_sale\"],\"news\":[\"newslist\",\"categories\",\"tagsnews\",\"addnews\",\"delete_once_news\",\"cat_add_news\",\"del_catnews_once\"],\"users\":[\"listuser_admin\",\"listusers\",\"delete_users_once\",\"add_users\"],\"admin\":[\"site_option\",\"maps\",\"store_shopping\"]}');


#
# TABLE STRUCTURE FOR: alias
#

CREATE TABLE `alias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` char(50) CHARACTER SET utf8 DEFAULT NULL,
  `item_id` int(11) DEFAULT '0',
  `new_cat` int(11) DEFAULT '0',
  `new` int(11) DEFAULT '0',
  `pro_cat` int(11) DEFAULT '0',
  `pro` int(11) DEFAULT '0',
  `page` int(11) DEFAULT '0',
  `m_cat` int(11) DEFAULT '0',
  `media` int(11) DEFAULT '0',
  `locale` int(11) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `inuser` int(11) DEFAULT NULL,
  `video_cat` int(11) DEFAULT NULL,
  `video` int(11) DEFAULT NULL,
  `services_cat` int(11) DEFAULT NULL,
  `services` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=209 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('10', 'gioi-thieu', 'page', '0', '0', '0', '0', '0', '31', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('53', 'mua-tu-xa', 'page', '0', '0', '0', '0', '0', '32', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('54', 'chung-nhan', 'page', '0', '0', '0', '0', '0', '33', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('55', 'dai-ly', 'page', '0', '0', '0', '0', '0', '34', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('19', 'tin-tuc-su-kien', 'cate-new', '0', '3', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('197', 'hyundai', 'cate-pro', '0', '0', '0', '27', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('198', 'acura', 'cate-pro', '0', '0', '0', '28', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('199', 'toyota', 'cate-pro', '0', '0', '0', '29', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('200', 'hyundai-elantra-sport-2018', 'pro', '0', '0', '0', '0', '111', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('201', 'hyundai-i20-active-2018', 'pro', '0', '0', '0', '0', '112', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('202', 'hyundai-starex-2018', 'pro', '0', '0', '0', '0', '113', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('203', 'acura-mdx-2007', 'pro', '0', '0', '0', '0', '114', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('61', 'doi-pho-voi-thuc-pham-ban-bang-su-hieu-biet', 'new', '0', '0', '6', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('58', 'giao-luu-truc-tuyen-nguon-rau-sach-cho-bua-com-gia-dinh', 'new', '0', '0', '3', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('59', 'lo-muc-dau-tu-khung-cua-ty-phu-pham-nhat-vuong-vao-nong-nghiep', 'new', '0', '0', '4', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('60', 'se-co-phuong-tien-kiem-tra-nhanh-thuc-pham-tai-cho', 'new', '0', '0', '5', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('208', 'mercedes-maybach-s600-pullman-ve-den-viet-nam', 'new', '0', '0', '15', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('81', 'up-anh-jpeg-cha-le-khong-duoc-12', 'media', '0', '0', '0', '0', '0', '0', '0', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('84', 'san-pham-cham-soc-toc-nao-tot', 'new', '0', '0', '7', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('85', 'dien-vien-vu-tuan-viet-chuong-phong-cach-thoi-trang-khoe-khoan', 'new', '0', '0', '8', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('86', 'hinh-anh', 'm-cat', '0', '0', '0', '0', '0', '0', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('87', 'bai-hat-gianh-cho-nguoi-dang-yeu', 'video', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, '2', NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('88', 'danh-muc-video-cua-nam-2018', 'video-cat', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, '4', NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('89', 'ban-nha-tai-ha-noi-viet-nam', 'services', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, '3');
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('90', 'khac', 'cate-ser', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '42', NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('177', 'danh-muc-1', 'cate-pro', '0', '0', '0', '26', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('178', 'san-pham-moi', 'pro', '0', '0', '0', '0', '92', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('204', 'acura-mdx-20071', 'pro', '0', '0', '0', '0', '115', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('205', 'acura-ilx-premium-2016', 'pro', '0', '0', '0', '0', '116', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('206', 'bmw-m4-30-jahre-do-dau-tien-tren-the-gioi', 'new', '0', '0', '13', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alias` (`id`, `alias`, `type`, `item_id`, `new_cat`, `new`, `pro_cat`, `pro`, `page`, `m_cat`, `media`, `locale`, `brand`, `inuser`, `video_cat`, `video`, `services_cat`, `services`) VALUES ('207', 'hanh-trinh-caravan-xe-co-the-road-to-saigon-2018', 'new', '0', '0', '14', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: code_sale
#

CREATE TABLE `code_sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `code_sale` (`id`, `name`, `code`, `price`, `active`) VALUES ('10', 'Noel', 'ADCVX', '10', '1');


#
# TABLE STRUCTURE FOR: comments
#

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `comment` text CHARACTER SET utf8,
  `reply` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `review` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: comments_binhluan
#

CREATE TABLE `comments_binhluan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sanpham` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `giatri` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `date` date NOT NULL,
  `flg` int(1) NOT NULL DEFAULT '0' COMMENT '0: moi binh luan; 1: xac nhan de hien thi',
  `reply` int(11) DEFAULT NULL,
  `review` tinyint(1) DEFAULT '0',
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` char(10) COLLATE utf8_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('1', '5', 'nội dung đánh giá sản phẩm này rất tốt', '5', '0', '0', '1505698798', '2017-09-18', '0', '0', '1', 'trần mạnh', 'dangtranmanh051187@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('2', '5', 'nội dung bình luận', '0', '0', '0', '1505698841', '2017-09-18', '0', '0', '1', 'trần mạnh', 'dangtranmanh051187@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('3', '5', 'noi dung binh luận đánh giá nhận xét', '0', '0', '0', '1505699713', '2017-09-18', '0', '0', '0', 'trần mạnh', 'dangtranmanh051187@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('4', '5', 'nội dung bình luận tiếp theo', '4', '0', '0', '1505699941', '2017-09-18', '0', '0', '1', 'trần mạnh', 'dangtranmanh051187@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('5', '5', 'bình luận của vũ', '0', '0', '0', '1505700184', '2017-09-18', '0', '0', '1', 'trần long vũ', 'dangtranmanh051187@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('6', '5', 'bình luận của vũ', '0', '0', '0', '1505700223', '2017-09-18', '0', '0', '1', 'trần long vũ', 'dangtranmanh051187@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('7', '5', 'binh luận mới', '2', '0', '0', '1505700317', '2017-09-18', '0', '0', '1', 'tiến đạt', 'nguyentiendat@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('8', '5', 'noi dung binh luận', '1', '0', '0', '1505702973', '2017-09-18', '0', '0', '1', 'công sáng', 'congsang@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('9', '5', 'bình luận tiếp theo', '5', '0', '0', '1505703111', '2017-09-18', '0', '0', '1', 'công sáng', 'congsang@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('10', '5', 'noi trung tra loi binh luan', '4', '0', '0', '1505721191', '0000-00-00', '0', '7', '1', 'cong sangs', 'congsang@gmail.com', '1');
INSERT INTO `comments_binhluan` (`id`, `id_sanpham`, `comment`, `giatri`, `userid`, `parent_id`, `time`, `date`, `flg`, `reply`, `review`, `user_name`, `user_email`, `lang`) VALUES ('11', '4', 'Tốt', '5', '0', '0', '1505981714', '2017-09-21', '0', '0', '1', 'Vân', 'buivananh.th@gmail.com', '1');


#
# TABLE STRUCTURE FOR: config_banner
#

CREATE TABLE `config_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `field` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `active` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `config_banner` (`id`, `type`, `name`, `field`, `active`) VALUES ('1', NULL, 'banner trang chủ', 'banner', '1');
INSERT INTO `config_banner` (`id`, `type`, `name`, `field`, `active`) VALUES ('2', NULL, 'slide', 'slide', '1');
INSERT INTO `config_banner` (`id`, `type`, `name`, `field`, `active`) VALUES ('3', NULL, 'banner trái', 'left', '0');
INSERT INTO `config_banner` (`id`, `type`, `name`, `field`, `active`) VALUES ('4', NULL, 'Banner phải', 'right', '0');
INSERT INTO `config_banner` (`id`, `type`, `name`, `field`, `active`) VALUES ('5', NULL, 'banner top', 'top', '0');
INSERT INTO `config_banner` (`id`, `type`, `name`, `field`, `active`) VALUES ('6', NULL, 'banner bottom', 'bottom', '0');
INSERT INTO `config_banner` (`id`, `type`, `name`, `field`, `active`) VALUES ('7', NULL, 'đối tác', 'partners', '1');


#
# TABLE STRUCTURE FOR: config_checkpro
#

CREATE TABLE `config_checkpro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `field` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `color` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `active` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('1', 'product', 'sản phẩm mới', 'hot', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('2', 'product', 'Trang chủ', 'home', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('3', 'product', 'sp khuyến mại', 'coupon', 'f39c12', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('4', 'product', 'sản phẩm nổi bật', 'focus', 'd352d4', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('5', 'product_category', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('6', 'product_category', 'Danh mục mới', 'hot', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('7', 'product_category', 'Nổi bật', 'focus', 'c3c3c3', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('8', 'product_category', 'Đặc biệt', 'coupon', 'd352d4', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('9', 'news', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('10', 'news', 'Tin nổi bật', 'focus', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('11', 'news', 'Tin mới', 'hot', 'c3c3c3', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('12', 'news_category', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('13', 'news_category', 'Danh mục hót', 'hot', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('14', 'news_category', 'Nổi bật', 'focus', 'c3c3c3', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('15', 'news_category', 'Danh mục bên trái', 'coupon', '0098da', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('16', 'media', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('17', 'media', 'nổi bật', 'focus', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('18', 'media', 'Đặc biệt', 'hot', 'c3c3c3', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('19', 'media_category', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('20', 'media_category', 'Mới', 'hot', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('21', 'media_category', 'Nổi bật', 'focus', 'c3c3c3', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('22', 'media_category', 'Cột trái', 'coupon', 'd352d4', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('23', 'video', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('24', 'video', 'nổi bật', 'focus', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('25', 'video', 'Đặc biệt', 'hot', 'c3c3c3', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('26', 'video_category', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('27', 'video_category', 'Mới', 'hot', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('28', 'video_category', 'Nổi bật', 'focus', 'c3c3c3', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('29', 'staticpage', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('30', 'staticpage', 'Liên hệ', 'focus', '008d4c', '0');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('31', 'staticpage', 'Đặc biệt', 'hot', 'c3c3c3', '0');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('32', 'raovat', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('33', 'raovat', 'nổi bật', 'focus', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('34', 'raovat', 'Đặc biệt', 'hot', 'c3c3c3', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('35', 'raovat_category', 'Trang chủ', 'home', 'd73925', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('36', 'raovat_category', 'Mới', 'hot', '008d4c', '1');
INSERT INTO `config_checkpro` (`id`, `type`, `name`, `field`, `color`, `active`) VALUES ('37', 'raovat_category', 'Nổi bật', 'focus', 'c3c3c3', '1');


#
# TABLE STRUCTURE FOR: config_menu
#

CREATE TABLE `config_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `field` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `active` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `config_menu` (`id`, `type`, `name`, `field`, `active`) VALUES ('2', 'top', 'menu đại', NULL, '1');
INSERT INTO `config_menu` (`id`, `type`, `name`, `field`, `active`) VALUES ('3', 'left', 'menu left', NULL, '1');
INSERT INTO `config_menu` (`id`, `type`, `name`, `field`, `active`) VALUES ('4', 'right', 'menu right', NULL, '1');
INSERT INTO `config_menu` (`id`, `type`, `name`, `field`, `active`) VALUES ('5', 'bottom', 'menu bottom', NULL, '1');
INSERT INTO `config_menu` (`id`, `type`, `name`, `field`, `active`) VALUES ('6', 'tag', 'menu tag', NULL, '1');
INSERT INTO `config_menu` (`id`, `type`, `name`, `field`, `active`) VALUES ('7', 'bottom_2', 'menu bottom 2', NULL, '0');
INSERT INTO `config_menu` (`id`, `type`, `name`, `field`, `active`) VALUES ('8', 'bottom_3', 'menu bottom 3', NULL, '0');


#
# TABLE STRUCTURE FOR: contact
#

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `city` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `country` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `comment` text CHARACTER SET utf8,
  `mark` tinyint(1) DEFAULT '0',
  `show` tinyint(1) DEFAULT '0',
  `time` int(11) DEFAULT NULL,
  `cat_name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `contact` (`id`, `full_name`, `phone`, `email`, `address`, `city`, `country`, `comment`, `mark`, `show`, `time`, `cat_name`) VALUES ('9', 'donkihote', '094857643', 'abc@gmail.com', 'xumantra', NULL, NULL, 'Lam sao su dung camera ip', '0', '1', '1474383531', 'Camera');
INSERT INTO `contact` (`id`, `full_name`, `phone`, `email`, `address`, `city`, `country`, `comment`, `mark`, `show`, `time`, `cat_name`) VALUES ('13', 'Vân', '0982255552', 'buivananh.th@gmail.com', 'sâsasaas', NULL, NULL, 'sxssxxs', '0', '0', '1505980957', NULL);
INSERT INTO `contact` (`id`, `full_name`, `phone`, `email`, `address`, `city`, `country`, `comment`, `mark`, `show`, `time`, `cat_name`) VALUES ('14', 'Vân', '0989339814', 'buivananh.th@gmail.com', ' Số 7, ngách 71 Ngõ 120 Phường Vĩnh Tuy, Quận Hai Bà Trưng, TP Hà Nội', NULL, NULL, 'sdsdsd', '0', '0', '1512033926', NULL);


#
# TABLE STRUCTURE FOR: district
#

CREATE TABLE `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `pre` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `provinceid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=698 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('106', 'Bến Lức', 'Huyện', '8');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('121', 'Bắc Trà My', 'Huyện', '9');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('139', 'Bà Rịa', 'Thị xã', '10');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('147', 'Buôn Đôn', 'Huyện', '11');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('162', ' Thới Lai', 'Huyện', '12');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('171', 'Bắc Bình', 'Huyện', '13');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('181', 'Bảo Lâm', 'Huyện', '14');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('193', 'A Lưới', 'Huyện', '15');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('202', 'An Biên', 'Huyện', '16');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('217', 'Bắc Ninh', 'Thành phố', '17');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('225', 'Ba Chẽ', 'Huyện', '18');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('239', 'Bá Thước', 'Huyện', '19');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('266', 'Anh Sơn', 'Huyện', '20');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('287', 'Bình Giang', 'Huyện', '21');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('299', 'An Khê', 'Thị xã', '22');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('316', 'Bình Long', 'Thị xã', '23');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('327', 'Ân Thi', 'Huyện', '24');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('337', 'An Lão', 'Huyện', '25');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('348', 'Cái Bè', 'Huyện', '26');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('359', 'Đông Hưng', 'Huyện', '27');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('367', 'Bắc Giang', 'Thành phố', '28');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('377', 'Cao Phong', 'Huyện', '29');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('388', 'An Phú', 'Huyện', '30');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('399', 'Bình Xuyên', 'Huyện', '31');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('408', 'Bến Cầu', 'Huyện', '32');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('417', 'Đại Từ', 'Huyện', '33');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('426', 'Bắc Hà', 'Huyện', '34');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('435', 'Giao Thủy', 'Huyện', '35');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('445', 'Ba Tơ', 'Huyện', '36');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('459', 'Ba Tri', 'Huyện', '37');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('468', 'Cư Jút', 'Huyện', '38');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('476', 'Cà Mau', 'Thành phố', '39');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('485', 'Bình Minh', 'Huyện', '40');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('493', 'Gia Viễn', 'Huyện', '41');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('501', 'Cẩm Khê', 'Huyện', '42');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('514', 'Bác Ái', 'Huyện', '43');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('521', 'Đông Hòa', 'Huyện', '44');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('530', 'Bình Lục', 'Huyện', '45');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('536', 'Cẩm Xuyên', 'Huyện', '46');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('548', 'Cao Lãnh', 'Thành phố', '47');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('560', 'Châu Thành', 'Huyện', '48');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('571', 'Đăk Glei', 'Huyện', '49');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('581', 'Ba Đồn', 'Thị xã', '50');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('589', 'Cam Lộ', 'Huyện', '51');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('599', 'Càng Long', 'Huyện', '52');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('607', 'Châu Thành', 'Huyện', '53');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('614', 'Bắc Yên', 'Huyện', '54');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('626', 'Bạc Liêu', 'Thành phố', '55');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('633', 'Lục Yên', 'Huyện', '56');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('642', 'Chiêm Hóa', 'Huyện', '57');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('649', 'Điện Biên', 'Huyện', '58');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('659', 'Lai Châu', 'Thị xã', '59');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('678', 'Bắc Mê', 'Huyện', '61');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('689', 'Ba Bể', 'Huyện', '62');
INSERT INTO `district` (`id`, `name`, `pre`, `provinceid`) VALUES ('697', 'Bảo Lạc', 'Huyện', '63');


#
# TABLE STRUCTURE FOR: document
#

CREATE TABLE `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `description` text CHARACTER SET utf8,
  `sort` int(3) DEFAULT NULL,
  `lang` char(10) CHARACTER SET utf8 DEFAULT '1',
  `active` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `document` (`id`, `name`, `parent_id`, `description`, `sort`, `lang`, `active`) VALUES ('1', 'Hướng dẫn tổng quan về quản trị website', '0', '<p><a href=\"http://giaodiendep.vn/huongdan/\">Xem video hướng dẫn</a></p>\r\n', '1', 'vi', '1');


#
# TABLE STRUCTURE FOR: emails
#

CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `emails` (`id`, `email`, `time`, `name`, `content`) VALUES ('9', 'trungkienbds@gmail.com', '1433398898', NULL, NULL);
INSERT INTO `emails` (`id`, `email`, `time`, `name`, `content`) VALUES ('11', 'vinarise.vn@gmail.com', '1433996361', NULL, NULL);
INSERT INTO `emails` (`id`, `email`, `time`, `name`, `content`) VALUES ('12', 'daibkz@gmail.com', '1470928353', NULL, NULL);
INSERT INTO `emails` (`id`, `email`, `time`, `name`, `content`) VALUES ('13', 'dangtranmanh051187@gmail.com', '1506309969', NULL, NULL);
INSERT INTO `emails` (`id`, `email`, `time`, `name`, `content`) VALUES ('14', 'buivananh.th@gmail.com', '1506331541', NULL, NULL);


#
# TABLE STRUCTURE FOR: images
#

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `url` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `title` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `target` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `id_item` int(11) DEFAULT NULL,
  `sort` int(3) DEFAULT NULL,
  `cate` int(4) DEFAULT '0',
  `lang` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=283 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('200', NULL, NULL, NULL, '_self', NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('216', NULL, NULL, 'Video hướng dẫn lắp đặt camera 2', '_self', '12', 'upload/img/media/9f62009350cb11a54f10ffd7c56e1bca.png', '1', '2', '0', NULL, 'https://www.youtube.com/embed/QzqthoS3Xkw');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('217', NULL, NULL, 'HƯỚNG DẪN LẮP ĐẶT HỆ THỐNG CAMERA QUAN SÁT', '_self', '12', 'upload/img/media/14fca64f4ab55bddda0d89209d9d8c80.png', '1', '3', '0', NULL, 'https://www.youtube.com/embed/JdrNRXs8KqI');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('218', NULL, NULL, 'Hướng dẫn cấu hình Camera xem qua mạng 100% thành công', '_self', '12', 'upload/img/media/9f62009350cb11a54f10ffd7c56e1bca1.png', '1', '4', '0', NULL, 'https://www.youtube.com/embed/Q27P_jphAXU');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('219', NULL, NULL, 'Video Clip Hướng dẫn sử dụng Camera IP Wifi không dây thông minh Webvision 6203', '_self', '12', 'upload/img/media/9f62009350cb11a54f10ffd7c56e1bca2.png', '1', '5', '0', NULL, 'https://www.youtube.com/embed/isA3QHA4wOM');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('273', 'partners', '', 'đối tác 1', '_self', NULL, 'upload/img/banner/pn1.png', NULL, NULL, '0', 'vi', '');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('274', 'slide', '', 'banner1', '_self', NULL, 'upload/img/banner/banner-1.jpg', NULL, NULL, '0', 'vi', '');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('275', 'slide', '', 'banner2', '_self', NULL, 'upload/img/banner/banner2.jpg', NULL, NULL, '0', 'vi', '');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('276', 'home', '', 'banner3', '_self', NULL, 'upload/img/banner/cloud-4chic-toa-sang-voi-dam-me1512721215.jpg', NULL, NULL, '0', 'vi', '');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('277', 'home', '', 'banner4', '_self', NULL, 'upload/img/banner/banner-11.jpg', NULL, NULL, '0', 'vi', '');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('278', 'partners', '', '2', '_self', NULL, 'upload/img/banner/pn5.png', NULL, NULL, '0', 'vi', '');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('279', 'partners', '', '3', '_self', NULL, 'upload/img/banner/pn11.png', NULL, NULL, '0', 'vi', '');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('280', 'partners', '', '4', '_self', NULL, 'upload/img/banner/pn51.png', NULL, NULL, '0', 'vi', '');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('281', 'partners', '', '5', '_self', NULL, 'upload/img/banner/pn12.png', NULL, NULL, '0', 'vi', '');
INSERT INTO `images` (`id`, `type`, `url`, `title`, `target`, `name`, `image`, `id_item`, `sort`, `cate`, `lang`, `content`) VALUES ('282', 'partners', '', '6', '_self', NULL, 'upload/img/banner/pn52.png', NULL, NULL, '0', 'vi', '');


#
# TABLE STRUCTURE FOR: inuser
#

CREATE TABLE `inuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `hot` int(11) DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `alias` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang` char(10) COLLATE utf8_unicode_ci DEFAULT '1',
  `tag` text COLLATE utf8_unicode_ci,
  `time` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `focus` int(11) DEFAULT NULL,
  `title_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('4', 'Rực Rỡ Mùa Hoa Tây Bắc', 'Tết Nguyên Đán 2015 là thời khắc quan trọng nhất trong năm, là khi mỗi gia đình Việt Nam có thời gian được trở về quây quần bên nhau và tưng bừng du xuân khắp mọi miền đất nước. Trong không khí xuân nồng ấm ấy, Vietravel hân hạnh gửi tới Quý khách hàng ngàn đường tour Việt Nam để gia đình bạn thỏa sức tận hưởng những ngày lễ vui tươi, hạnh phúc, đón chào năm mới An khang Thịnh Vượng. \n', '1', 'upload/img/ava1_hoanhai1.jpg', '<div>&nbsp;</div>\n\n<div>\n<p style=\"text-align:justify\"><strong>Ng&agrave;y 1 : TP.HCM - NỘI B&Agrave;I (H&Agrave; NỘI) &ndash; ĐỀN H&Ugrave;NG - NGHĨA LỘ Số bữa ăn: 3 bữa&nbsp;</strong></p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://travel.com.vn/Images/tour/tfd_141103_mien%20bac%20-%20den%20hung.jpg\" style=\"border:0px; box-sizing:border-box; height:458px; vertical-align:middle; width:650px\" /></p>\n\n<p style=\"text-align:justify\">Qu&yacute; kh&aacute;ch tập trung tại cột số 04 ga đi Trong Nước - S&acirc;n bay T&acirc;n Sơn Nhất để hướng dẫn l&agrave;m thủ tục cho Qu&yacute; kh&aacute;ch đ&aacute;p chuyến bay đi H&agrave; Nội. Xe Vietravel đ&oacute;n đo&agrave;n tại s&acirc;n bay Nội B&agrave;i, khởi h&agrave;nh đi Y&ecirc;n B&aacute;i. Tr&ecirc;n đường đi Qu&yacute; kh&aacute;ch gh&eacute; Ph&uacute; Thọ viếng Đền H&ugrave;ng, đến nơi, Qu&yacute; kh&aacute;ch l&agrave;m lễ d&acirc;ng hương đất tổ, tham quan đền Thượng, đền Trung, đền Hạ, Giếng Ngọc, Lăng vua H&ugrave;ng, tự do chụp ảnh mua sắm qu&agrave; lưu niệm. Đo&agrave;n tiếp tục khởi h&agrave;nh đi Nghĩa Lộ, nhận ph&ograve;ng kh&aacute;ch sạn nghỉ ngơi. Buổi tối, Qu&yacute; kh&aacute;ch thưởng thức chương tr&igrave;nh biểu diễn m&uacute;a X&ograve;e, giao lưu v&agrave; t&igrave;m hiểu n&eacute;t văn h&oacute;a đặc sắc của d&acirc;n tộc Th&aacute;i. Nghỉ đ&ecirc;m tại Nghĩa Lộ.</p>\n\n<p style=\"text-align:justify\"><strong>Ng&agrave;y 2 : NGHĨA LỘ - M&Ugrave; CANG CHẢI - SAPA (Số bữa ăn: 3 bữa)</strong></p>\n\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"https://travel.com.vn/Images/tour/tfd_141103_sapa%20-%20muong%20hoa%202.jpg\" style=\"border:0px; box-sizing:border-box; height:408px; vertical-align:middle; width:650px\" /></strong></p>\n\n<p style=\"text-align:justify\">Trả ph&ograve;ng kh&aacute;ch sạn, đo&agrave;n khởi h&agrave;nh đi M&ugrave; Cang Chải, ngang qua T&uacute; Lệ, Qu&yacute; kh&aacute;ch sẽ ngửi được m&ugrave;i hương thoang thoảng theo gi&oacute; bảng lảng tr&ecirc;n m&aacute;i nh&agrave; của &ldquo;cơm mới&rdquo;, nơi đ&acirc;y nổi tiếng với x&ocirc;i nếp, cốm kh&ocirc;. Đến Đ&egrave;o Khau Phạ Qu&yacute; kh&aacute;ch dừng chụp ảnh v&agrave; ngắm nh&igrave;n Bản L&igrave;m M&ocirc;ng xinh đẹp tọa lạc dưới ch&acirc;n đ&egrave;o. Đ&acirc;y l&agrave; Bản của d&acirc;n tộc M&ocirc;ng v&agrave; l&agrave; nơi c&oacute; ruộng l&uacute;a đẹp nhất M&ugrave; Cang Chải. Qua đ&egrave;o Khau Phạ v&agrave;o địa phận M&ugrave; Cang Chải, Qu&yacute; kh&aacute;ch sẽ bị m&ecirc; hoặc bởi vẻ đẹp h&uacute;t hồn của cung đường ruộng bậc thang (Nổi tiếng tại 3 x&atilde;: La P&aacute;n Tẩn, Chế Cu Nha v&agrave; Zế Xu Ph&igrave;nh). Đo&agrave;n chi&ecirc;m ngưỡng những thung lũng rộng h&uacute;t tầm mắt, c&aacute;c thửa ruộng tầng tầng lớp lớp lượn s&oacute;ng theo sườn n&uacute;i, ngọn n&uacute;i n&agrave;y nối tiếp ngọn n&uacute;i kh&aacute;c. Qu&yacute; kh&aacute;ch c&oacute; thể tham quan v&agrave; thưởng ngoạn c&aacute;c giai đoạn của m&ugrave;a l&uacute;a: m&ugrave;a nước đổ &oacute;ng &aacute;nh tr&ecirc;n c&aacute;c triền n&uacute;i (th&aacute;ng 2-3), m&ugrave;a cấy l&uacute;a (th&aacute;ng 5), m&ugrave;a l&uacute;a non (th&aacute;ng 6-7) v&agrave; đẹp nhất l&agrave;m m&ugrave;a l&uacute;a ch&iacute;n hay c&ograve;n lại l&agrave; m&ugrave;a v&agrave;ng (th&aacute;ng 9-10). Cũng ch&iacute;nh bởi vẻ đẹp m&ecirc; l&ograve;ng người v&agrave;o m&ugrave;a l&uacute;a ch&iacute;n m&agrave; Ruộng Bậc Thang ở ba x&atilde; n&agrave;y đ&atilde; được xếp hạng Di t&iacute;ch Quốc Gia năm 2007. Đến thị trấn M&ugrave; Cang Chải, Qu&yacute; kh&aacute;ch ăn trưa, nghỉ ngơi. Chiều đo&agrave;n khởi h&agrave;nh đi Sa Pa, tr&ecirc;n đường đi Qu&yacute; kh&aacute;ch dừng ch&acirc;n ngắm to&agrave;n cảnh đồi ch&egrave; T&acirc;n Uy&ecirc;n thơ mộng v&agrave; tiếp tục sẽ được chi&ecirc;m ngưỡng phong cảnh n&uacute;i rừng T&acirc;y Bắc h&ugrave;ng vĩ tr&ecirc;n Đ&egrave;o &Ocirc; Quy Hồ - Ranh giới giữa 2 tỉnh L&agrave;o Cai v&agrave; Lai Ch&acirc;u uốn lượn quanh d&atilde;y Ho&agrave;ng Li&ecirc;n c&ograve;n gọi l&agrave; khu vực Cổng Trời. Đến Sa Pa, nhận ph&ograve;ng kh&aacute;ch sạn nghỉ ngơi. Buổi tối, Qu&yacute; kh&aacute;ch tự do tham quan phố n&uacute;i v&agrave; thưởng thức những m&oacute;n ăn đặc sản tại nơi đ&acirc;y. Nghỉ đ&ecirc;m tại Sa Pa</p>\n\n<p style=\"text-align:justify\"><strong>Ng&agrave;y 3 : SAPA - LAI CH&Acirc;U (Số bữa ăn: 3 bữa)</strong></p>\n\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"https://travel.com.vn/Images/tour/tfd_141103_sapa%20trong%20suong%201.jpg\" style=\"border:0px; box-sizing:border-box; height:436px; vertical-align:middle; width:650px\" /></strong></p>\n\n<p style=\"text-align:justify\">Qu&yacute; kh&aacute;ch tham quan v&agrave; chinh phục N&uacute;i H&agrave;m Rồng, thăm Vườn Lan khoe sắc, Vườn Hoa Trung T&acirc;m, ngắm N&uacute;i Phanxipăng h&ugrave;ng vĩ, Cổng Trời, Đầu Rồng Thạch L&acirc;m, S&acirc;n M&acirc;y. Đo&agrave;n tự do ngắm cảnh v&agrave; chụp ảnh thị trấn Sapa trong sương. Trả ph&ograve;ng kh&aacute;ch sạn, ăn trưa. Chiều Qu&yacute; kh&aacute;ch tham quan Th&aacute;c Bạc - D&ograve;ng nước trắng x&oacute;a chảy từ độ cao tr&ecirc;n 200m v&agrave;o d&ograve;ng suối dưới thung lũng &Ocirc; Quy Hồ, tạo n&ecirc;n &acirc;m thanh n&uacute;i rừng đầy ấn tượng, tiếp tục tham quan Lao Chải, Tả Van hoặc Tả Ph&igrave;n (t&ugrave;y điều kiện thực tế). Về đến Lai Ch&acirc;u, Qu&yacute; kh&aacute;ch nhận ph&ograve;ng kh&aacute;ch sạn. Nghỉ đ&ecirc;m tại Lai Ch&acirc;u.</p>\n\n<p style=\"text-align:justify\"><strong>Ng&agrave;y 4 : LAI CH&Acirc;U - PHONG THỔ - MƯỜNG LAY - ĐIỆN BI&Ecirc;N (Số bữa ăn: 3 bữa)</strong></p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://travel.com.vn/Images/tour/tfd_140929_du-lich-tay-bac.jpg\" style=\"border:0px; box-sizing:border-box; height:432px; vertical-align:middle; width:650px\" /></p>\n\n<p style=\"text-align:justify\">Đo&agrave;n trả ph&ograve;ng ăn s&aacute;ng, khởi h&agrave;nh đi Điện Bi&ecirc;n, tr&ecirc;n đường ngắm cảnh rừng n&uacute;i T&acirc;y Bắc dọc theo d&ograve;ng s&ocirc;ng Nậm Na v&agrave; v&ugrave;ng ngập nước do đập nh&agrave; m&aacute;y Thủy điện Sơn La d&acirc;ng l&ecirc;n tại ng&atilde; ba s&ocirc;ng: s&ocirc;ng Đ&agrave;, s&ocirc;ng Nậm Na v&agrave; s&ocirc;ng Nậm Rốm. Đến Mường L&acirc;y ăn trưa. Đo&agrave;n tiếp tục khởi h&agrave;nh đến Điện Bi&ecirc;n, Qu&yacute; kh&aacute;ch tham quan Bảo t&agrave;ng Điện Bi&ecirc;n Phủ - Được x&acirc;y dựng v&agrave;o năm 1984 nh&acirc;n dịp kỷ niệm 30 năm chiến thắng lịch sử Điện Bi&ecirc;n Phủ, viếng Nghĩa trang liệt sĩ đồi A1, thăm Đồi A1, Hầm sở chỉ huy qu&acirc;n đội Ph&aacute;p - Tướng Đờ C&aacute;t (De Castries). Nghỉ đ&ecirc;m tại Điện Bi&ecirc;n. Nhận ph&ograve;ng kh&aacute;ch sạn, ăn tối v&agrave; nghỉ đ&ecirc;m tại Điện Bi&ecirc;n</p>\n\n<p style=\"text-align:justify\"><strong>Ng&agrave;y 5 : ĐIỆN BI&Ecirc;N - SƠN LA - MỘC CH&Acirc;U (Số bữa ăn: 3 bữa)</strong></p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://travel.com.vn/Images/tour/tfd_140905_Doi%20che%20Moc%20Chau.jpg\" style=\"border:0px; box-sizing:border-box; height:424px; vertical-align:middle; width:650px\" /></p>\n\n<p style=\"text-align:justify\">Trả ph&ograve;ng kh&aacute;ch sạn, đo&agrave;n khởi h&agrave;nh về Sơn La. Tr&ecirc;n đường đi, Qu&yacute; kh&aacute;ch sẽ được chi&ecirc;m ngưỡng phong cảnh n&uacute;i rừng T&acirc;y Bắc h&ugrave;ng vĩ tr&ecirc;n đỉnh Đ&egrave;o Pha Đin - Một trong &quot;tứ đại đ&egrave;o&quot; v&ugrave;ng T&acirc;y Bắc v&agrave; được xếp c&ugrave;ng nh&oacute;m 6 con đ&egrave;o g&acirc;y ấn tượng nhất Việt Nam. Đến Sơn La, Qu&yacute; kh&aacute;ch ăn trưa. Sau đ&oacute;, Qu&yacute; kh&aacute;ch khởi h&agrave;nh về Mộc Ch&acirc;u. Đo&agrave;n khởi h&agrave;nh tham quan Th&aacute;c Dải Yếm - C&ograve;n c&oacute; t&ecirc;n gọi l&agrave; Th&aacute;c N&agrave;ng, nhằm v&iacute; vẻ đẹp mềm mại, h&igrave;nh ảnh quyến rũ của th&aacute;c nước như xu&acirc;n sắc của người con g&aacute;i tuổi trăng tr&ograve;n. Sau đ&oacute; tham quan Đồi Ch&egrave; Mộc Ch&acirc;u - Đứng tr&ecirc;n đồi ch&egrave; du kh&aacute;ch sẽ cảm nhận được l&agrave;n kh&ocirc;ng kh&iacute; m&aacute;t lạnh trong l&agrave;nh, tận mắt thấy những l&agrave;n sương bồng bềnh tr&ocirc;i, những đường ch&egrave; chạy v&ograve;ng quanh đồi được sắp đặt th&agrave;nh h&agrave;ng như những thửa ruộng bậc thang xanh ngắt cứ trải d&agrave;i bất tận. Qu&yacute; kh&aacute;ch dừng mua sắm đặc sản nổi tiếng được chế biến từ sữa b&ograve; tươi nổi tiếng của Mộc Ch&acirc;u về l&agrave;m qu&agrave;. Đo&agrave;n về kh&aacute;ch sạn nhận ph&ograve;ng, nghỉ ngơi. Nghỉ đ&ecirc;m tại Mộc Ch&acirc;u.</p>\n\n<p style=\"text-align:justify\"><strong>Ng&agrave;y 6 : MỘC CH&Acirc;U - MAI CH&Acirc;U - H&Ograve;A B&Igrave;NH - S&Acirc;N BAY NỘI B&Agrave;I (H&Agrave; NỘI) (Số bữa ăn: 2 bữa (s&aacute;ng, trưa))</strong></p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://travel.com.vn/Images/tour/tfd_141103_moc%20chau%20-%20hoa%20cai.jpg\" style=\"border:0px; box-sizing:border-box; height:346px; vertical-align:middle; width:650px\" /></p>\n\n<p style=\"text-align:justify\">Ăn s&aacute;ng tại kh&aacute;ch sạn, trả ph&ograve;ng. Đo&agrave;n khởi h&agrave;nh đi Mai Ch&acirc;u - H&ograve;a B&igrave;nh, tham quan Bản L&aacute;c Mai Ch&acirc;u - T&igrave;m hiểu nh&agrave; s&agrave;n, phong tục tập qu&aacute;n, c&aacute;ch kinh doanh du lịch loại h&igrave;nh home stay của b&agrave; con người Th&aacute;i nơi đ&acirc;y. Đo&agrave;n khởi h&agrave;nh về H&ograve;a B&igrave;nh ăn trưa. Đo&agrave;n khởi h&agrave;nh về H&ograve;a B&igrave;nh ăn trưa. Sau đ&oacute;, khởi h&agrave;nh về H&agrave; Nội, xe đưa Qu&yacute; kh&aacute;ch ra s&acirc;n bay Nội B&agrave;i đ&aacute;p chuyến bay về Tp.HCM. Chia tay Qu&yacute; kh&aacute;ch v&agrave; kết th&uacute;c chương tr&igrave;nh du lịch tại s&acirc;n bay T&acirc;n Sơn Nhất</p>\n</div>\n', 'ruc-ro-mua-hoa-tay-bac', '0', '0', '1446786194', '22', '0', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('5', 'Giấc mộng hoa phương Bắc', 'Đất trời đã vào xuân, non cao miền Bắc bừng sáng trong vẻ đẹp mê đắm của rừng hoa thắm sắc ẩn hiện trong sương khói vấn vương. Những bước chân phiêu du trên núi ngàn cũng rộn rã hơn, chan hòa cùng nét tươi mới giữa đất trời nở hoa. Tour Tết, Trong nước', '1', 'upload/img/mua-hoa-xuan-tay-bac_1.jpg', '<div>&nbsp;</div>\n\n<div>\n<p style=\"text-align: center;\"><img alt=\"\" src=\"http://www.vietravel.com.vn/Images/inuserPicture/mua-hoa-xuan-tay-bac_1.jpg\" style=\"border:0px; box-sizing:border-box; height:441px; vertical-align:middle; width:650px\" /></p>\n\n<p style=\"text-align:justify\">nhiều lần lỡ hẹn, t&ocirc;i cũng đặt ch&acirc;n đến miền rẻo cao phương Bắc với thật nhiều h&aacute;o hức. Qu&atilde;ng đường đi qua&nbsp; Sapa, Điện Bi&ecirc;n, Sơn La, Cao Bằng, Lạng Sơn&hellip; dường như ngắn lại bởi ai cũng say sưa ngắm những cung đường bạt ng&agrave;n hoa đ&agrave;o, hoa mận, hoa mơ. Hoa nở tr&agrave;n tr&ecirc;n triền đồi, lấp l&oacute; ven đường, hồn nhi&ecirc;n thả bức r&egrave;m trước s&acirc;n nh&agrave;&hellip; đẹp đến nỗi kh&ocirc;ng một m&aacute;y ảnh &ldquo;khủng&rdquo; n&agrave;o c&oacute; thể ghi lại trọn vẹn.</p>\n\n<p style=\"text-align: center;\"><img alt=\"\" src=\"http://www.vietravel.com.vn/Images/inuserPicture/mua-hoa-xuan-tay-bac_6.jpg\" style=\"border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px\" /></p>\n\n<p style=\"text-align:justify\">C&oacute; l&uacute;c hoa phủ hồng cả sườn n&uacute;i, khiến kh&aacute;ch l&atilde;ng du ngất ng&acirc;y chẳng muốn dời ch&acirc;n. Một cơn gi&oacute; thoảng qua, khung cảnh bỗng h&oacute;a th&agrave;nh cơn mưa hoa lất phất. Chắt chiu nhựa sống qua năm d&agrave;i th&aacute;ng rộng, hội tụ đủ tinh t&uacute;y của đất trời để mỗi độ xu&acirc;n về th&acirc;n c&acirc;y x&ugrave; x&igrave; ấy lại nảy lộc đơm hoa sưởi ấm cả n&uacute;i rừng. Những c&aacute;nh đ&agrave;o phai T&acirc;y Bắc hồng phớt, mỏng manh m&agrave; l&agrave;n hương lại dịu d&agrave;ng, thanh tao đến lạ. Đ&ocirc;ng Bắc lại tự h&agrave;o với n&eacute;t ki&ecirc;u sa rực rỡ của rừng hoa đ&agrave;o b&iacute;ch lộng lẫy c&oacute; c&aacute;nh d&agrave;y, to, đủ sắc đỏ, hồng, trắng&hellip;</p>\n\n<p style=\"text-align: center;\"><img alt=\"\" src=\"http://www.vietravel.com.vn/Images/inuserPicture/mua-hoa-xuan-tay-bac_4.jpg\" style=\"border:0px; box-sizing:border-box; height:472px; vertical-align:middle; width:650px\" /></p>\n\n<p style=\"text-align:justify\">Ven đường đi, h&ograve;a c&ugrave;ng mu&ocirc;n sắc hoa đ&agrave;o b&iacute;ch, đ&agrave;o phai l&agrave; n&eacute;t đẹp hoang d&atilde; của những lo&agrave;i hoa dại t&iacute;m ng&aacute;t, v&agrave;ng rực cả khoảng trời. Đến n&uacute;i N&agrave;ng T&ocirc; Thị, động Tam Thanh, cảm x&uacute;c của t&ocirc;i gần như vỡ &ograve;a khi được chi&ecirc;m ngưỡng những đ&oacute;a hoa đ&agrave;o trắng muốt như tuyết, c&acirc;y đ&agrave;o gh&eacute;p hội tụ đủ ba m&agrave;u trắng - hồng - đỏ rất ấn tượng.</p>\n\n<p style=\"text-align: center;\"><img alt=\"\" src=\"http://www.vietravel.com.vn/Images/inuserPicture/mua-hoa-xuan-tay-bac_3_1.jpg\" style=\"border:0px; box-sizing:border-box; height:975px; vertical-align:middle; width:650px\" /></p>\n\n<p style=\"text-align:justify\">Hoa kh&ocirc;ng chỉ t&ocirc; điểm cho n&uacute;i rừng m&agrave; c&ograve;n mang cả kh&ocirc;ng gian văn h&oacute;a v&ugrave;ng cao đến với mọi người. T&ocirc;i cứ nhớ m&atilde;i nhịp ch&acirc;n vui của ch&agrave;ng trai bản xuống chợ ng&agrave;y xu&acirc;n m&agrave; tr&ecirc;n vai lắc lư một c&agrave;nh đ&agrave;o thắm. Những c&ocirc; g&aacute;i Dao, M&ocirc;ng v&aacute;y xanh v&aacute;y đỏ tỏa s&aacute;ng dưới hoa xu&acirc;n v&agrave; bọn trẻ con mắt trong veo, n&ocirc; đ&ugrave;a hồn nhi&ecirc;n tr&ecirc;n c&acirc;y mận thật đ&aacute;ng y&ecirc;u l&agrave;m sao!</p>\n\n<p style=\"text-align: center;\"><img alt=\"\" src=\"http://www.vietravel.com.vn/Images/inuserPicture/mua-hoa-xuan-tay-bac_2_1.jpg\" style=\"border:0px; box-sizing:border-box; height:894px; vertical-align:middle; width:650px\" /></p>\n\n<p style=\"text-align:justify\">Chỉ cần như thế cũng b&otilde; c&ocirc;ng cho một chuyến ngao du sơn thủy, s&aacute; g&igrave; n&uacute;i cao hay đ&egrave;o vắng, chỉ cần v&aacute;c ba l&ocirc; l&ecirc;n đường, ta lại sở hữu m&ugrave;a xu&acirc;n thi vị cho ri&ecirc;ng m&igrave;nh. Hoa nở khắp đất trời, hoa nở trong l&ograve;ng người để t&ocirc;i m&atilde;i nhung nhớ về miền rẻo cao phương Bắc. Đ&oacute; ch&iacute;nh l&agrave; những x&uacute;c cảm đầu năm thi&ecirc;ng li&ecirc;ng v&agrave; rất đỗi tự h&agrave;o về qu&ecirc; hương m&agrave; kh&ocirc;ng h&agrave;nh tr&igrave;nh n&agrave;o c&oacute; được.</p>\n</div>\n', 'giac-mong-hoa-phuong-bac', '0', '0', '1446792582', '22', '0', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('6', 'Train Ticket', 'Operated by national carrier Vietnam Railways.Travelling in an air-con sleeping berth and of course, there’s some spectacular scenery to lap up too. There are four main ticket classes: hard seat, soft seat, hard sleeper and soft sleeper. These are also split into air-con and non air-con options. Presently, air-con is only available on the faster express trains. Hard-seat class is usually packed and tolerable for day travel, but expect plenty of cigarette smoke. Ticket prices vary depending on the train; the fastest trains are more expensive. Aside from the main HCMC–Hanoi run, three rail-spur lines link Hanoi with the other parts of northern Vietnam. A third runs northwest to Lao Cai (Sapa).', '0', 'upload/img/ticket.jpg', '', 'train-ticket', '0', '0', '1447426430', '23', '0', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('7', 'Train North to South', 'Everyday departure with trains number: Trains SE1-SE6: Soft sleepers (4-berth), hard sleepers (6-berth), soft class seats (all air-con). TN3-TN10: Soft sleepers (air-con), hard sleepers (air-con & non-air-con), soft seats (a/c & non-a/c), hard seats (non-air-con).', '0', 'upload/img/tk1.jpg', '<span style=\"color:rgb(85, 85, 85); font-family:arial\">Unit Price: US Dollar (US$); A/C: Air-conditioning.</span><br />\n<span style=\"color:rgb(85, 85, 85); font-family:arial\">Child&#39;s fare: under 5 years: free of charge if sharing bed with parent; 5 years/up: adult rate.</span><br />\n<span style=\"color:rgb(85, 85, 85); font-family:arial\">Please note: 20% of the amount will be charged in case of cancellation for any ticket.</span><br />\n&nbsp;\n<div>&nbsp;</div>\n\n<div>\n<table style=\"border-collapse:collapse; border-spacing:0px; border:1px solid rgb(223, 223, 223); color:rgb(96, 96, 96); font-family:arial; font-size:17.6px; height:105px; line-height:normal; margin:0px auto; padding:0px; vertical-align:baseline; width:800px\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline; width:250px\">DEP FROM HANOI</td>\n			<td style=\"text-align:center; vertical-align:baseline; width:250px\">SE NO. 1/ TIME TABLE</td>\n			<td style=\"text-align:center; vertical-align:baseline; width:250px\">SE NO. 3/&nbsp;TIME TABLE</td>\n			<td style=\"text-align:center; vertical-align:baseline; width:250px\">SE NO. 5/&nbsp;TIME TABLE</td>\n			<td style=\"text-align:center; vertical-align:baseline; width:250px\">&nbsp;PRICE</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline\">HA NOI</td>\n			<td style=\"text-align:center; vertical-align:baseline\">19.35</td>\n			<td style=\"text-align:center; vertical-align:baseline\">22.00</td>\n			<td style=\"text-align:center; vertical-align:baseline\">6.00</td>\n			<td style=\"text-align:center; vertical-align:baseline\">&nbsp;55 USD</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline\"><span style=\"color:rgb(128, 128, 128)\">HUE</span></td>\n			<td style=\"text-align:center; vertical-align:baseline\">8.48</td>\n			<td style=\"text-align:center; vertical-align:baseline\">10.27</td>\n			<td style=\"text-align:center; vertical-align:baseline\">19.55</td>\n			<td style=\"text-align:center; vertical-align:baseline\">&nbsp;55 USD</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline\"><span style=\"color:rgb(128, 128, 128)\">DA NANG&nbsp;</span></td>\n			<td style=\"text-align:center; vertical-align:baseline\">11.26</td>\n			<td style=\"text-align:center; vertical-align:baseline\">13.00</td>\n			<td style=\"text-align:center; vertical-align:baseline\">22.47</td>\n			<td style=\"text-align:center; vertical-align:baseline\">60 USD</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline\"><span style=\"color:rgb(128, 128, 128)\">&nbsp;NHA TRANG</span></td>\n			<td style=\"text-align:center; vertical-align:baseline\">21.14</td>\n			<td style=\"text-align:center; vertical-align:baseline\">22.04</td>\n			<td style=\"text-align:center; vertical-align:baseline\">8.35</td>\n			<td style=\"text-align:center; vertical-align:baseline\">80 USD</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline\"><span style=\"color:rgb(128, 128, 128)\">BINH THUAN&nbsp;</span></td>\n			<td style=\"text-align:center; vertical-align:baseline\">1.12</td>\n			<td style=\"text-align:center; vertical-align:baseline\">2.14</td>\n			<td style=\"text-align:center; vertical-align:baseline\">16.14</td>\n			<td style=\"text-align:center; vertical-align:baseline\">85 USD</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline\"><span style=\"color:rgb(128, 128, 128)\">&nbsp;SAI GON</span></td>\n			<td style=\"text-align:center; vertical-align:baseline\">4.39</td>\n			<td style=\"text-align:center; vertical-align:baseline\">5.20</td>\n			<td style=\"text-align:center; vertical-align:baseline\">16.05</td>\n			<td style=\"text-align:center; vertical-align:baseline\">100 USD<br />\n			&nbsp;</td>\n		</tr>\n	</tbody>\n</table>\n</div>\n', 'train-north-to-south', '0', '0', '1447426503', '23', '0', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('8', 'Train to Sapa', 'The Ha Noi-Lao Cai trains runs every evening, departing from Ha Noi Train Station at Tran Quy Cap Street. Three run at night, and one makes a day trip. The following are the trains from Ha Noi to Lao Cai (PM: SP1, SP3 , SP7 ) and vice versa (PM: SP2, SP4 , SP8) daily. The daytime route offers only hard seats, whereas travelers can enjoy soft-sleepers, air-conditioned, four-berth cabins on the night trains. In the SP3 & SP4, there are 2 Victoria Carriages. In SP1 & SP2, there are Orient Express, Tulico Carriages, Friendly Carriages, Ratraco Carriages, and TSC Carriages, King Express Carriages, Royal Carriages. All of these are alternatives for tourists to Sapa from Hanoi.', '0', 'upload/img/tk2.jpg', '<p>Deluxe Train: Fansipan Express (SP1-SP2), Livitrans Express (SP1-SP2), Sapaly Expres (SP3-SP4)</p>\n\n<p>First Class Train: Orient Express (SP1-SP2), TSC Express ( SP1-SP2), Pumpkin Express train (SP1-SP2), VN Express Train ( SP3-SP4)</p>\n\n<p>&nbsp;</p>\n\n<table style=\"border-collapse:collapse; border-spacing:0px; border:1px solid rgb(223, 223, 223); color:rgb(96, 96, 96); font-family:arial; font-size:17.6px; height:105px; line-height:normal; margin:0px auto; padding:0px; vertical-align:baseline; width:800px\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline; width:250px\">HANOI - LAO CAI</td>\n			<td style=\"text-align:center; vertical-align:baseline; width:250px\">DELUXE CABIN 4 BERTHS</td>\n			<td style=\"text-align:center; vertical-align:baseline; width:250px\">\n			<p>FIRST CLASS 4 BERTHS</p>\n			</td>\n			<td style=\"text-align:center; vertical-align:baseline; width:250px\">VIP CLASS 2 BERTHS</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline\"><span style=\"color:rgb(128, 128, 128)\">SP1: 21H40 - 5H30</span></td>\n			<td style=\"text-align:center; vertical-align:baseline\">30 USD</td>\n			<td style=\"text-align:center; vertical-align:baseline\">35 USD</td>\n			<td style=\"text-align:center; vertical-align:baseline\">70 USD</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline\"><span style=\"color:rgb(128, 128, 128)\">SP1: 20H00 - &nbsp;6H10</span></td>\n			<td style=\"text-align:center; vertical-align:baseline\">30 USD</td>\n			<td style=\"text-align:center; vertical-align:baseline\">35 USD</td>\n			<td style=\"text-align:center; vertical-align:baseline\">70 USD</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center; vertical-align:baseline\"><span style=\"color:rgb(128, 128, 128)\">SP1: 20H17 - &nbsp;4H35</span></td>\n			<td style=\"text-align:center; vertical-align:baseline\">30 USD</td>\n			<td style=\"text-align:center; vertical-align:baseline\">35 USD</td>\n			<td style=\"text-align:center; vertical-align:baseline\">70 USD</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>The prices may change due to exchange rate or season; therefore, please confirm exact price when you make the final booking with payment. Please contact by email to have more information. Email:&nbsp;<a href=\"mailto:info@vietnampremiertravel.com\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: Arial; color: rgb(34, 34, 34);\">info@vietnampremiertravel.com</a>&nbsp;/ Tel: (+84 4) 3926 2866</p>\n', 'train-to-sapa', '0', '0', '1447426437', '23', '0', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('9', 'Tàu Bắc - Nam', 'Khởi hành hàng ngày với tàu số : Xe lửa SE1 - SE6 : tà vẹt mềm ( 4 bến ) , tà vẹt cứng ( 6 bến ) , ghế hạng mềm ( tất cả các máy con) . TN3 - TN10 : tà vẹt mềm ( máy lạnh ) , tà vẹt cứng ( máy lạnh & không khí -con) , ghế ngồi mềm (a / c và phi - a / c ) , ghế ngồi cứng ( không máy lạnh ) .', '0', 'upload/img/tk11.jpg', '<pre>\n<span style=\"font-size:14px\">Đơn gi&aacute; : Dollar Mỹ (US $ ) ; A / C : Điều h&ograve;a kh&ocirc;ng kh&iacute; .\nGi&aacute; v&eacute; cho trẻ em: dưới 5 tuổi: miễn ph&iacute; nếu ngủ chung giường với bố mẹ ; 5 năm / up : tỷ lệ người lớn .\nXin lưu &yacute; : 20 % của số tiền sẽ được t&iacute;nh trong trường hợp hủy cho bất kỳ v&eacute; .</span></pre>\n', 'tau-bac-nam', '0', '0', '1446800384', '22', '0', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('10', 'teafdsagd', 'gdasgdsg', '0', NULL, 'sagdsagdsagd', 'teafdsagd', 'en', '0', '1453861931', '0', '0', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('11', 'Dàn xe đời mới - Đa dạng chủng loại', 'Chúng tôi cho thuê xe từ những dòng xe giá rẻ đến những dòng xe cao cấp, từ 4 chỗ đến xe 12 chỗ Dàn xe của chúng tôi luôn có bộ phận theo dõi, quản lý và bảo hành. Để đảm bảo trước khi đến đón khách, Xe luôn trong tình trạng sạch, đẹp và an toàn.', '0', 'upload/img/icon3.png', '', 'dan-xe-doi-moi-da-dang-chung-loai', 'vi', '0', '1453863158', '20', '0', '1', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('12', 'Tài xế thân thiện và chuyên nghiệp', 'Các tài xế của chúng tôi được tuyển chọn khắt khe theo các tiêu chí. Lái xe an toàn, có kinh nghiệm, thông thạo tuyến đường và được công tu Training các kỹ năng phục vụ khách hàng. Tùy theo mục đích thuê xe và loại xe cũng như yêu cầu của quí khách', '0', 'upload/img/icon2.png', '', 'tai-xe-than-thien-va-chuyen-nghiep', 'vi', '0', '1453863170', '20', '0', '1', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('13', 'Giá cho thuê xe tốt nhất trên thị trường', 'Qui trình và cách tính giá cũng như báo giá của chúng tôi luôn là mức giá tốt nhất trên thị trường. Chính vì vậy khi quí khách thuê xe của chúng tôi cũng có nghĩa quí khách đã có được mức giá tốt nhât trong những nhà cung cấp.', '0', 'upload/img/icon1.png', '', 'gia-cho-thue-xe-tot-nhat-tren-thi-truong', 'vi', '0', '1453863176', '20', '0', '1', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('14', 'Hướng dẫn lái xe ô tô an toàn trên đường cao tốc', 'Trên đường cao tốc, người điều khiển phương tiện giao thông được phép lái xe với vận tốc tối đa cao hơn so với lái trên đường phố, đường làng và do đó tiết kiệm thời gian di chuyển hơn nhưng cũng tiềm ẩn nhiều rủi ro xảy ra tai nạn đáng tiếc nếu không tuân thủ đúng luật.', '0', 'upload/img/new1.jpg', '<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 0); font-family:inherit; font-size:inherit\">Th&oacute;i quen h&agrave;ng ng&agrave;y khi l&aacute;i xe đ&ocirc;i khi đ&atilde; trở th&agrave;nh nguy&ecirc;n nh&acirc;n của những trường hợp tai nạn đ&aacute;ng tiếc khi tham gia giao th&ocirc;ng tr&ecirc;n đường cao tốc: chạy xe dưới tốc độ tối thiểu, kh&ocirc;ng giữ khoảng c&aacute;ch an to&agrave;n với xe ph&iacute;a trước, dừng/đỗ t&ugrave;y tiện, quay đầu xe&hellip; Nhưng lưu &yacute; sau sẽ gi&uacute;p bạn c&oacute; những chuyến đi an to&agrave;n c&ugrave;ng bạn b&egrave;, người th&acirc;n.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 0); font-family:inherit; font-size:inherit\">&ndash; Ngo&agrave;i c&aacute;c vấn đề kỹ thuật đảm bảo an to&agrave;n cho xe &ocirc; t&ocirc;, đặc biệt phải lưu &yacute; đến lốp xe bởi khi chạy với tốc độ cao, nhiệt độ ngo&agrave;i trời cao, h&agrave;ng h&oacute;a chở nhiều&hellip;; do đ&oacute;, với những bộ lốp &ldquo;tuổi đời&rdquo; cao, m&ograve;n nhiều cần đặc biệt cẩn trọng (nổ lốp xe khi đang đi tốc độ cao l&agrave; một trong những nguy&ecirc;n nh&acirc;n phổ biến dẫn đến tai nạn).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 0); font-family:inherit; font-size:inherit\">&ndash; Đảm bảo tốc độ theo hệ thống biển b&aacute;o tr&ecirc;n đường, giảm tốc độ ph&ugrave; hợp ở những đoạn đường cong, c&oacute; nhiều phương tiện (cho d&ugrave; ở l&agrave;n đường kh&aacute;c) hoặc chướng ngại vật&hellip; Tr&aacute;nh nh&igrave;n tập trung v&agrave;o một điểm qu&aacute; l&acirc;u, đặc biệt c&aacute;c đoạn đường cong hay l&ecirc;n/xuống dốc (dễ dẫn đến trường hợp &ldquo;kh&oacute;a mục ti&ecirc;u&rdquo; khiến xe đi thẳng đến điểm đ&oacute;).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 0); font-family:inherit; font-size:inherit\">&nbsp;&ndash; Giữ khoảng c&aacute;ch an to&agrave;n với quy tắc 3 gi&acirc;y (Bạn nh&igrave;n xe ph&iacute;a trước chạy qua một vật cố định n&agrave;o đ&oacute; ở b&ecirc;n đường: cột đ&egrave;n, biển b&aacute;o&hellip; v&agrave; bắt đầu đếm&nbsp;ước lượng từ 1 đến 3, khoảng thời gian tưởng ứng đủ 3 gi&acirc;y). Nếu trời mưa hoặc tầm quan s&aacute;t bị ảnh hưởng, th&igrave; n&ecirc;n tăng l&ecirc;n 4-5 gi&acirc;y. H&atilde;y ch&uacute; &yacute; c&aacute;c biển chỉ dẫn lưu &yacute; khoảng c&aacute;ch 50 &ndash; 100 &ndash; 200m.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 0); font-family:inherit; font-size:inherit\">&ndash;<span style=\"font-family:inherit; font-size:inherit\">&nbsp;</span><span style=\"font-family:inherit; font-size:inherit\">Kh&ocirc;ng bao giờ l&ugrave;i xe, quay đầu xe, đi ngược chiều tr&ecirc;n đường cao tốc</span>.<span style=\"font-family:inherit; font-size:inherit\">&nbsp;</span><span style=\"font-family:inherit; font-size:inherit\">Kh&ocirc;ng được cho xe &ocirc; t&ocirc; chạy ở l&agrave;n dừng xe khẩn cấp v&agrave; phần lề đường</span>.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 0); font-family:inherit; font-size:inherit\">&ndash;<span style=\"font-family:inherit; font-size:inherit\">&nbsp;</span><span style=\"font-family:inherit; font-size:inherit\">Khi v&agrave;o hoặc ra khỏi đường cao tốc phải giảm tốc độ</span><span style=\"font-family:inherit; font-size:inherit\">&nbsp;</span>v&agrave;<span style=\"font-family:inherit; font-size:inherit\"><span style=\"font-family:inherit; font-size:inherit\">&nbsp;</span></span><span style=\"font-family:inherit; font-size:inherit\">nhường đường cho xe đi tr&ecirc;n l&agrave;n đường ch&iacute;nh</span>.<span style=\"font-family:inherit; font-size:inherit\"><span style=\"font-family:inherit; font-size:inherit\">&nbsp;</span></span><span style=\"font-family:inherit; font-size:inherit\">Chỉ được chuyển l&agrave;n đường ở những nơi cho ph&eacute;p</span>,<span style=\"font-family:inherit; font-size:inherit\">&nbsp;</span>khi chuyển l&agrave;n lu&ocirc;n ch&uacute; &yacute; ph&iacute;a sau v&agrave; lu&ocirc;n xi-nhan. Kh&ocirc;ng chuyển l&agrave;n kiểu cắt đầu xe kh&aacute;c v&agrave; chuyển nhiều l&agrave;n đường c&ugrave;ng một thời điểm.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 0); font-family:inherit; font-size:inherit\">&ndash; Người điều khiển v&agrave; người ngồi trong xe &ocirc;t&ocirc; đều phải thắt d&acirc;y an to&agrave;n. Bởi khi lưu th&ocirc;ng với tốc độ cao (100km/h), th&igrave; thắt d&acirc;y an to&agrave;n cho mọi người tr&ecirc;n xe &ocirc; t&ocirc; l&agrave; việc cần thiết hơn bao giờ hết.</span></p>\r\n', 'huong-dan-lai-xe-o-to-an-toan-tren-duong-cao-toc', 'vi', '0', '1453864782', '22', '1', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('15', 'Gợi y 8 lộ trình về quê ăn tết tránh kẹt xe ở hà nội', '', '0', 'upload/img/new4.jpg', '', 'goi-y-8-lo-trinh-ve-que-an-tet-tranh-ket-xe-o-ha-noi', 'vi', '0', '1453864774', '22', '1', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('16', 'Hơn 2000 người tham gia hưởng ứng \"Năm an toàn giao thông\" 2016', '', '0', 'upload/img/new31.jpg', '', 'hon-2000-nguoi-tham-gia-huong-ung-nam-an-toan-giao-thong-2016', 'vi', '0', '1453864761', '22', '1', '0', '', '', '');
INSERT INTO `inuser` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('17', 'Tăng phí trả vé tàu để hạn chế \"cò\" vé chợ đen.', '', '0', 'upload/img/new2.jpg', '', 'tang-phi-tra-ve-tau-de-han-che-co-ve-cho-den', 'vi', '0', '1453864807', '22', '1', '0', '', '', '');


#
# TABLE STRUCTURE FOR: inuser_category
#

CREATE TABLE `inuser_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `focus` int(11) DEFAULT NULL,
  `hot` int(11) DEFAULT NULL,
  `tour` int(11) DEFAULT NULL,
  `sort` int(5) DEFAULT '1',
  `lang` char(10) COLLATE utf8_unicode_ci DEFAULT '1',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `inuser_category` (`id`, `name`, `alias`, `description`, `image`, `parent_id`, `home`, `focus`, `hot`, `tour`, `sort`, `lang`, `title`) VALUES ('27', 'Nguyễn công hoan', 'nguyen-cong-hoan', '<p><em>Seaside Resort g&acirc;y ấn tượng với t&ocirc;i nhất nhờ dịch vụ rất ho&agrave;n hảo v&agrave; chuy&ecirc;n nghiệp. Seaside Resort l&agrave; một kh&aacute;ch sạn với đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp, năng động, s&aacute;ng tạo, phong c&aacute;ch phục vụ v&agrave; chăm s&oacute;c kh&aacute;ch h&agrave;ng tốt. Hơn nữa ch&iacute;nh s&aacute;ch chăm s&oacute;c kh&aacute;ch h&agrave;ng nhiệt t&igrave;nh, chu đ&aacute;o ngay cả khi đ&atilde; ho&agrave;n th&agrave;nh hợp đồng.</em></p>\r\n', 'upload/img/inuser/avt1.png', '0', '1', NULL, NULL, NULL, '6', 'vi', 'Big Boss');
INSERT INTO `inuser_category` (`id`, `name`, `alias`, `description`, `image`, `parent_id`, `home`, `focus`, `hot`, `tour`, `sort`, `lang`, `title`) VALUES ('28', 'Mrs bin', 'doctor', 'Seaside Resort impresses me most with its excellent service and professionalism. Seaside Resort is a hotel with professional staffs', 'upload/img/traveler_story111.png', '0', '1', '0', '0', '0', '1', 'en', 'doctor');
INSERT INTO `inuser_category` (`id`, `name`, `alias`, `description`, `image`, `parent_id`, `home`, `focus`, `hot`, `tour`, `sort`, `lang`, `title`) VALUES ('29', 'Nguyễn thành đạt', 'nguyen-thanh-dat', '<p>Thật tuyệt khi sử dụng dịch vụ tại Thăng Long, t&ocirc;i cảm thấy m&igrave;nh được phục vụ v&ocirc; c&ugrave;ng chu đ&aacute;o v&agrave; tận t&igrave;nh.Chắc chắn t&ocirc;i sẽ quay lại mua h&agrave;ng tại Thăng Long lần nữa.Ch&uacute;c Thăng Long ph&aacute;t triển mạnh mẽ hơn nữa, t&ocirc;i tin chắc điều đ&oacute;.</p>\r\n', 'upload/img/inuser/avt.png', '0', '1', NULL, NULL, NULL, '5', 'vi', 'VNPT Technology ');


#
# TABLE STRUCTURE FOR: inuser_to_category
#

CREATE TABLE `inuser_to_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inuser` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('25', '1', '20');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('29', '3', '22');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('30', '2', '22');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('32', '4', '22');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('34', '5', '22');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('38', '9', '22');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('39', '6', '23');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('40', '8', '23');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('41', '7', '23');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('50', '11', '20');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('51', '12', '20');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('52', '13', '20');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('53', '16', '22');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('54', '15', '22');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('55', '14', '22');
INSERT INTO `inuser_to_category` (`id`, `id_inuser`, `id_category`) VALUES ('56', '17', '22');


#
# TABLE STRUCTURE FOR: language
#

CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `language` (`id`, `alias`, `name`) VALUES ('1', 'vi', 'Tiếng Việt');
INSERT INTO `language` (`id`, `alias`, `name`) VALUES ('2', 'en', 'English');


#
# TABLE STRUCTURE FOR: map_shopping
#

CREATE TABLE `map_shopping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `tim_kiem` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `toa_domap` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `toa_dohienthi` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `diachi_shop` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phone` char(150) CHARACTER SET utf8 DEFAULT NULL,
  `lang` char(10) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `map_shopping` (`id`, `title`, `tim_kiem`, `toa_domap`, `toa_dohienthi`, `diachi_shop`, `phone`, `lang`) VALUES ('2', 'Chi nhánh camera siêu net tại Hà Nội', '168 Nguyễn Tuân - Thanh Xuân Hà Nội', '(20.998863, 105.80291809999994)', '20.998863, 105.80291809999994', '168 Nguyễn Tuân - Thanh Xuân Hà Nội', '0918.041616 - 0987.041616', 'vi');
INSERT INTO `map_shopping` (`id`, `title`, `tim_kiem`, `toa_domap`, `toa_dohienthi`, `diachi_shop`, `phone`, `lang`) VALUES ('5', 'Chi nhánh camera siêu net tại Hải Phòng', '52 Lê Quang Đạo - Nam Từ Liêm - Hà Nội', '', '', 'Số 66, Trường Chinh, Kiến An, Hải Phòng', '031 3603208', 'vi');
INSERT INTO `map_shopping` (`id`, `title`, `tim_kiem`, `toa_domap`, `toa_dohienthi`, `diachi_shop`, `phone`, `lang`) VALUES ('6', 'Chi nhánh camera siêu net tại TP. HCM', 'Tp HCM', '(10.7764745, 106.70088310000006)', '10.7764745, 106.70088310000006', '212/58 Thoại Ngọc Hầu, P. Phú Thạnh, Q. Tân Phú, TP. HCM', '08 39722693', 'vi');
INSERT INTO `map_shopping` (`id`, `title`, `tim_kiem`, `toa_domap`, `toa_dohienthi`, `diachi_shop`, `phone`, `lang`) VALUES ('7', 'Chi nhánh camera siêu net tại Yên Bái', 'Yên Bái', '(21.6837923, 104.4551361)', '21.6837923, 104.4551361', '168 Nguyễn Tuân - Yên Bái', '0918.041616 - 0987.041616', 'vi');
INSERT INTO `map_shopping` (`id`, `title`, `tim_kiem`, `toa_domap`, `toa_dohienthi`, `diachi_shop`, `phone`, `lang`) VALUES ('11', 'cừa hàng thời trang', 'cua hang so 23 ngo 229 cầu giấy hà nội', '(21.0477839, 105.79456129999994)', '21.0477839, 105.79456129999994', 'cua hang so 23 ngo 229 cầu giấy hà nội', '0988787654', 'vi');


#
# TABLE STRUCTURE FOR: media
#

CREATE TABLE `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `title_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keyword_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lang` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `home` tinyint(1) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `focus` tinyint(1) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `image` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `alias` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `media` (`id`, `name`, `description`, `content`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `category_id`, `home`, `hot`, `focus`, `sort`, `image`, `active`, `alias`, `link`) VALUES ('1', 'album hè cắm trại 2018', '<p>nội dung m&ocirc; tả</p>\r\n', '<p>nội dung chi tiết</p>\r\n', 'Không gian nhà hàng', 'Không gian nhà hàng', 'Không gian nhà hàng', 'vi', '11', '1', NULL, NULL, '1', 'upload/img/media/dia-diem-du-lich-54.jpg', '1', 'album-he-cam-trai-2018', '');
INSERT INTO `media` (`id`, `name`, `description`, `content`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `category_id`, `home`, `hot`, `focus`, `sort`, `image`, `active`, `alias`, `link`) VALUES ('10', 'album anh  cam trại hè', '', '', '', '', '', 'vi', '11', '1', NULL, NULL, '2', 'upload/img/media/dia-diem-du-lich-4.jpg', '1', 'album-anh-cam-trai-he', '');
INSERT INTO `media` (`id`, `name`, `description`, `content`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `category_id`, `home`, `hot`, `focus`, `sort`, `image`, `active`, `alias`, `link`) VALUES ('11', 'up anh jpeg cha le khong duoc-12', '<p>m&ocirc;i tả</p>\r\n', '', '', '', '', 'vi', '1', NULL, NULL, '1', '3', 'upload/img/media/1233.JPEG', '1', 'up-anh-jpeg-cha-le-khong-duoc-12', 't0WFOnwp3MM');


#
# TABLE STRUCTURE FOR: media_category
#

CREATE TABLE `media_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `alias` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `home` tinyint(1) DEFAULT NULL,
  `focus` tinyint(1) DEFAULT NULL,
  `coupon` tinyint(1) DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `title_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description_seo` text CHARACTER SET utf8,
  `keyword_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lang` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `parent_id` int(11) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `left_right` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `media_category` (`id`, `name`, `alias`, `sort`, `home`, `focus`, `coupon`, `image`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `description`, `parent_id`, `hot`, `left_right`) VALUES ('1', 'Hình ảnh', 'hinh-anh', '2', NULL, NULL, NULL, 'upload/img/media/anh1.jpg', 'Hình ảnh', 'gdsagds', NULL, 'vi', '<p>noi dung m&ocirc; tả</p>\r\n', '0', NULL, '1');
INSERT INTO `media_category` (`id`, `name`, `alias`, `sort`, `home`, `focus`, `coupon`, `image`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `description`, `parent_id`, `hot`, `left_right`) VALUES ('11', 'album anh nam 2019', 'album-anh-nam-2019', '5', '1', NULL, NULL, 'upload/img/media/dia-diem-du-lich-5.jpg', '', '', NULL, 'vi', '<p>m&ocirc; tả</p>\r\n', '1', NULL, '1');
INSERT INTO `media_category` (`id`, `name`, `alias`, `sort`, `home`, `focus`, `coupon`, `image`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `description`, `parent_id`, `hot`, `left_right`) VALUES ('10', 'album nam 2018', 'album-nam-2018', '4', '1', NULL, NULL, 'upload/img/media/anh.jpg', '', '', NULL, 'vi', '<p>noi dung m&ocirc; tả cho album</p>\r\n', '1', NULL, '1');
INSERT INTO `media_category` (`id`, `name`, `alias`, `sort`, `home`, `focus`, `coupon`, `image`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `description`, `parent_id`, `hot`, `left_right`) VALUES ('12', 'Hình ảnh hội nghị', 'hinh-anh-hoi-nghi', '6', '1', NULL, NULL, 'upload/img/media/dia-diem-du-lich-3.jpg', '', '', NULL, 'vi', '', '1', NULL, '1');


#
# TABLE STRUCTURE FOR: media_images
#

CREATE TABLE `media_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `id_item` int(11) DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `url` char(200) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `media_images` (`id`, `name`, `id_item`, `image`, `url`, `sort`) VALUES ('1', 'anh so 1', '1', 'upload/img/media_multi/ae20248dc61407525e7a96a1b002c72b.jpg', NULL, NULL);
INSERT INTO `media_images` (`id`, `name`, `id_item`, `image`, `url`, `sort`) VALUES ('2', 'anh so 2', '1', 'upload/img/media_multi/67594498cb19b94e98cc1c2095c83c51.jpg', NULL, NULL);
INSERT INTO `media_images` (`id`, `name`, `id_item`, `image`, `url`, `sort`) VALUES ('4', 'anh so 4', '1', 'upload/img/media_multi/44bb59baff034000b0f46258088bf8b8.jpg', NULL, NULL);
INSERT INTO `media_images` (`id`, `name`, `id_item`, `image`, `url`, `sort`) VALUES ('5', 'anh so 5', '1', 'upload/img/media_multi/036d5e089f887f4687e3379500c8256d.jpg', NULL, NULL);
INSERT INTO `media_images` (`id`, `name`, `id_item`, `image`, `url`, `sort`) VALUES ('6', 'anh so 6', '1', 'upload/img/media_multi/fa02a841c335c7566a42548fe1c0083d.jpg', NULL, NULL);


#
# TABLE STRUCTURE FOR: menu
#

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seturl` tinyint(2) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `module` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `home` tinyint(1) DEFAULT '0',
  `lang` char(10) COLLATE utf8_unicode_ci DEFAULT '1',
  `view_type` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `style` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('1', 'Giới thiệu', 'page/gioi-thieu.html', NULL, 'gioi-thieu', 'main', '', NULL, '0', '', 'pages', '0', '0', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('7', 'Liên hệ', 'contact', NULL, 'lien-he', 'main', '', NULL, '0', '', '0', '0', '4', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('39', 'Trang chủ', 'trang-chu', 'upload/img/menus/img_top1.png', 'trang-chu', 'bottom_2', '', NULL, '0', '', '0', '0', NULL, '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('40', 'Giới thiệu', 'gioi-thieu', 'upload/img/menus/img_top2.png', 'gioi-thieu', 'bottom_2', '', NULL, '0', '', '0', '0', NULL, '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('41', 'Thông báo', 'thong-bao', 'upload/img/menus/img_top3.png', 'thong-bao', 'bottom_2', '', NULL, '0', '', '0', '0', NULL, '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('42', 'Thanh toán mua hàng', 'thanh-toan-mua-hang', 'upload/img/menus/img_top4.png', 'thanh-toan-mua-hang', 'bottom_2', '', NULL, '0', '', '0', '0', NULL, '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('43', 'Khuyến mãi', 'khuyen-mai', NULL, 'khuyen-mai', 'bottom_2', '', NULL, '0', '', '0', '0', NULL, '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('44', 'Góp ý', 'gop-y', NULL, 'gop-y', 'bottom_2', '', NULL, '0', '', '0', '0', NULL, '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('45', 'Liên hệ', 'lien-he', NULL, 'lien-he', 'bottom_2', '', NULL, '0', '', '0', '0', NULL, '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('46', 'Đặt hàng online', '#', 'upload/img/menus/a4.png', 'dat-hang-online', 'top', '', NULL, '0', '', '0', '0', '0', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('47', 'Giao hàng tận nơi', '#', 'upload/img/menus/a3.png', 'giao-hang-tan-noi', 'top', '', NULL, '0', '', '0', '0', '1', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('48', 'Hỗ trợ online', '#', 'upload/img/menus/a5.png', 'ho-tro-online', 'top', '', NULL, '0', '', '0', '0', '2', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('55', 'Đại lý', 'page/dai-ly.html', NULL, 'dai-ly', 'main', '', NULL, '0', '', 'pages', '0', '3', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('57', 'Về chúng tôi - QTS', 'page/gioi-thieu.html', 'upload/img/menus/img_box_footer3.png', 've-chung-toi-qts', 'bottom', '', NULL, '0', '<p>text demo sản phẩm</p>\r\n', 'pages', '0', '0', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('58', 'Hướng dẫn mua hàng', 'huong-dan-mua-hang', 'upload/img/menus/img_box_footer4.png', 'huong-dan-mua-hang', 'bottom', '', NULL, '0', '<p>text demo sản phẩm</p>\r\n', '0', '0', '1', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('62', 'Sản phẩm', 'danh-muc/rau-cu-qua.html', NULL, 'san-pham', 'main', '', NULL, '0', '', 'products', '10', '1', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('63', 'Tin tức - Sự kiện', 'danh-muc-tin/tin-tuc-su-kien.html', NULL, 'tin-tuc-su-kien', 'main', '', NULL, '0', '', 'news', '0', '2', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('68', 'Uy tín hàng đầu ', 'uy-tin-hang-dau', 'upload/img/menus/img_box_footer2.png', 'uy-tin-hang-dau', 'bottom', '', NULL, '0', '<p>text demo sản phẩm</p>\r\n', '0', '0', '2', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('69', 'Tư vấn miễn phí 24/7', 'tu-van-mien-phi-24-7', 'upload/img/menus/img_box_footer.png', 'tu-van-mien-phi-24-7', 'bottom', '', NULL, '0', '<p>text demo sản phẩm</p>\r\n', '0', '0', '3', '0', 'vi', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('71', 'home', 'home', NULL, 'home', 'main', '', NULL, '0', '', '0', '0', '0', '0', 'en', NULL, NULL);
INSERT INTO `menu` (`id`, `name`, `url`, `image`, `alias`, `position`, `target`, `seturl`, `parent_id`, `description`, `module`, `cat_id`, `sort`, `home`, `lang`, `view_type`, `style`) VALUES ('72', 'home 2', 'home-2', NULL, 'home-2', 'main', '', NULL, '0', '', '0', '0', '1', '0', 'en', NULL, NULL);


#
# TABLE STRUCTURE FOR: news
#

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `hot` int(11) DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `alias` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang` char(10) COLLATE utf8_unicode_ci DEFAULT '1',
  `tag` text COLLATE utf8_unicode_ci,
  `time_update` int(8) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `focus` int(11) DEFAULT NULL,
  `title_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8_unicode_ci,
  `video` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `button_1` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `news` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time_update`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`, `video`, `view`, `active`, `button_1`) VALUES ('13', 'BMW M4 30 Jahre \"độ đầu tiên\" trên thế giới', '<p>AC Schinitzer lại một lần nữa l&agrave;m m&atilde;n nh&atilde;n tất cả &quot;Bim-er&quot; tr&ecirc;n thế giới với bản độ mới nhất d&agrave;nh ri&ecirc;ng cho M4.</p>\r\n', NULL, 'upload/img/news/1519635922-604-bmw-m4-ac-schnitzer-abu-dhabi-13-1519633492-width660height440.jpg', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">BMW c&oacute; thể xem như l&agrave; &ldquo;con cưng&rdquo; của h&atilde;ng độ xe danh tiếng AC Schnitzer, v&igrave; vậy kh&ocirc;ng c&oacute; g&igrave; kh&oacute; hiểu khi m&agrave; chỉ v&agrave;i tuần sau khi BMW cho ra mắt mẫu xe mui trần &nbsp;M4 30 Jahre Edition th&igrave; tại một đại l&yacute; ở Abu Dhabi đ&atilde; xuất hiện bản độ d&agrave;nh cho chiếc mui trần nước Đức.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/upload/images/1519635922-604-bmw-m4-ac-schnitzer-abu-dhabi-13-1519633492-width660height440.jpg\" style=\"height:440px; width:660px\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Chiếc BMW M4 được trang bị bộ body kit ch&iacute;nh h&atilde;ng của AC Schnitzer bao gồm: cản trước, cản sau, c&aacute;nh lướt gi&oacute; ph&iacute;a sau đều l&agrave;m từ vật liệu carbon, ngo&agrave;i ra c&ograve;n được trang bị mui cứng của M4 GTS v&agrave; ốp sườn hai b&ecirc;n M Performance. Bộ m&acirc;m 20 inch v&agrave; một v&agrave;i chi tiết nội thất ốp carbon được sơn c&ugrave;ng m&agrave;u với ngoại thất, nh&igrave;n tổng thể chiếc xe ch&uacute;ng ta dễ li&ecirc;n tưởng đến nh&acirc;n vật Bumblebee trong series phim nổi tiếng Transformer.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/upload/images/1519635922-923-bmw-m4-ac-schnitzer-abu-dhabi-07--1--1519633540-width660height440.jpg\" style=\"height:440px; width:660px\" /></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', 'bmw-m4-30-jahre-do-dau-tien-tren-the-gioi', 'vi', NULL, NULL, '1519706772', '3', '1', '1', '', '', '', '', NULL, '1', '0');
INSERT INTO `news` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time_update`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`, `video`, `view`, `active`, `button_1`) VALUES ('14', 'Hành trình caravan xe cổ - The Road to Saigon 2018', '<p>Đo&agrave;n caravan với 44 chiếc xe cổ tham dự s&aacute;ng nay (26/02/2018) đ&atilde; c&oacute; mặt tại cửa khẩu Lệ Thanh, tỉnh Gia Lai.</p>\r\n', NULL, 'upload/img/news/a15.jpg', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đo&agrave;n caravan với 44 chiếc xe cổ v&agrave; do chủ nh&acirc;n tự l&aacute;i vừa đến Việt Nam s&aacute;ng nay (26/02/2018) tại cửa khẩu Lệ Thanh, huyện Đức Cơ, tỉnh Gia Lai. Đ&acirc;y được xem l&agrave; đo&agrave;n caravan nước ngo&agrave;i lớn nhất theo loại h&igrave;nh xe tự l&aacute;i đến với Việt Nam trong h&agrave;nh tr&igrave;nh mang t&ecirc;n The Road to Saigon 2018. Tuy nhi&ecirc;n, đ&acirc;y l&agrave; đo&agrave;n caravan với sự tham dự của nhiều xe cổ v&agrave; xe b&aacute;n tải với 44 xe tham gia, trong đ&oacute; c&oacute; những xe được sản xuất từ những năm 1907 đến 1977 v&agrave; c&oacute; xe đ&atilde; hơn 100 năm tuổi.&nbsp;</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/upload/images/1519642502-98-hanh-trinh-caravan-xe-co---the-road-to-saigon-2018-c1-min-1519639008-width640height480.jpg\" style=\"height:480px; width:640px\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">H&agrave;nh tr&igrave;nh The Road to Saigon 2018 bắt đầu từ cửa khẩu Lệ Thanh (Gia Lai) v&agrave; đi qua 10 tỉnh th&agrave;nh kh&aacute;c nhau gồm: Gia Lai - Kon Tum - B&igrave;nh Định &ndash; Ph&uacute; Y&ecirc;n &ndash; Đắk Lắk &ndash; Kh&aacute;nh H&ograve;a &ndash; Ninh Thuận &ndash; B&igrave;nh Thuận &ndash; Đồng Nai v&agrave; kết th&uacute;c tại S&agrave;i G&ograve;n v&agrave;o ng&agrave;y 02/03/2018 tại địa điểm Dinh Độc Lập.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'hanh-trinh-caravan-xe-co-the-road-to-saigon-2018', 'vi', NULL, NULL, '1519706917', '3', '1', '1', '', '', '', '', NULL, '1', '0');
INSERT INTO `news` (`id`, `title`, `description`, `hot`, `image`, `content`, `alias`, `lang`, `tag`, `time_update`, `time`, `category_id`, `home`, `focus`, `title_seo`, `keyword_seo`, `description_seo`, `video`, `view`, `active`, `button_1`) VALUES ('15', 'Mercedes-MayBach S600 Pullman về đến Việt Nam', '<p>Mẫu xe si&ecirc;u sang Mercedes-Maybach phi&ecirc;n bản S600 Pullman đ&atilde; đặt ch&acirc;n đến Việt Nam.</p>\r\n', NULL, 'upload/img/news/a22.jpg', '<p>Si&ecirc;u sang Mercedes-Maybach phi&ecirc;n bản S600 Pullman đ&atilde; đặt ch&acirc;n đến Việt Nam, đ&acirc;y l&agrave; mẫu sedan cỡ lớn sang trọng bậc nhất của thương hiệu si&ecirc;u sang Mercedes-Maybach cho khoảng duỗi ch&acirc;n d&agrave;i nhất ở h&agrave;ng ghế &ocirc;ng chủ. ​​</p>\r\n\r\n<p>Đ&acirc;y l&agrave; một phi&ecirc;n bản k&eacute;o d&agrave;i trục cơ sở của chiếc Mercedes-Maybach ti&ecirc;u chuẩn, Mercedes-Maybach S600 Pullman c&oacute; chiều d&agrave;i cơ sở hơn l&ecirc;n đến 6.400mm - hơn hẳn chiều d&agrave;i cơ sở của một chiếc Rolls-Royce Phantom hay Bentley Mulsanne, sau c&aacute;i t&ecirc;n Maybach 62 th&igrave; hiện tại c&oacute; thể n&oacute;i đ&acirc;y l&agrave; chiếc sedan h&agrave;ng đầu của Daimler.​</p>\r\n\r\n<p>Về động cơ, Mercedes-Maybach S600 Pullman được trang bị động cơ V12 sử dụng tăng &aacute;p k&eacute;p, dung t&iacute;ch 6.0 l&iacute;t, cho c&ocirc;ng suất 530 m&atilde; lực v&agrave; m&ocirc;-men xoắn 830 Nm. Si&ecirc;u sedan c&oacute; thời gian tăng tốc 0-100 km/h chỉ trong 6,4 gi&acirc;y v&agrave; mất 24 gi&acirc;y để tăng tốc từ 0-200 km/h.​</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/upload/images/a2(4).jpg\" style=\"height:245px; width:368px\" /></p>\r\n', 'mercedes-maybach-s600-pullman-ve-den-viet-nam', 'vi', NULL, NULL, '1519707010', '3', '1', '1', '', '', '', '', '0', '1', '0');


#
# TABLE STRUCTURE FOR: news_category
#

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `focus` int(11) DEFAULT NULL,
  `hot` int(11) DEFAULT NULL,
  `coupon` int(11) DEFAULT NULL,
  `time_update` int(11) DEFAULT NULL,
  `time_start` int(8) DEFAULT NULL,
  `sort` int(5) DEFAULT '1',
  `lang` char(10) COLLATE utf8_unicode_ci DEFAULT '1',
  `title_seo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` text COLLATE utf8_unicode_ci,
  `description_seo` text COLLATE utf8_unicode_ci,
  `button_view_left` int(11) NOT NULL,
  `button_view_right` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `news_category` (`id`, `name`, `alias`, `description`, `image`, `parent_id`, `home`, `focus`, `hot`, `coupon`, `time_update`, `time_start`, `sort`, `lang`, `title_seo`, `keyword`, `description_seo`, `button_view_left`, `button_view_right`) VALUES ('3', 'Tin tức - sự kiện', 'tin-tuc-su-kien', '', NULL, '0', '1', NULL, NULL, NULL, NULL, NULL, '3', 'vi', '', NULL, '', '1', '1');


#
# TABLE STRUCTURE FOR: news_to_category
#

CREATE TABLE `news_to_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_news` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `news_to_category` (`id`, `id_news`, `id_category`) VALUES ('22', '9', '3');
INSERT INTO `news_to_category` (`id`, `id_news`, `id_category`) VALUES ('23', '10', '3');
INSERT INTO `news_to_category` (`id`, `id_news`, `id_category`) VALUES ('24', '11', '3');
INSERT INTO `news_to_category` (`id`, `id_news`, `id_category`) VALUES ('25', '12', '3');
INSERT INTO `news_to_category` (`id`, `id_news`, `id_category`) VALUES ('26', '13', '3');
INSERT INTO `news_to_category` (`id`, `id_news`, `id_category`) VALUES ('28', '14', '3');
INSERT INTO `news_to_category` (`id`, `id_news`, `id_category`) VALUES ('29', '15', '3');


#
# TABLE STRUCTURE FOR: order
#

CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `address` text CHARACTER SET utf8,
  `phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `note` text CHARACTER SET utf8,
  `item_order` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `show` tinyint(1) DEFAULT '0',
  `mark` tinyint(1) DEFAULT '0',
  `admin_note` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `province` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `district` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `ward` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` decimal(21,0) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `view` tinyint(1) DEFAULT '1',
  `code` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `address2` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `startplaces` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `finishplace` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `mobile` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `fax` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `startime` char(30) CHARACTER SET utf8 DEFAULT NULL,
  `endtime` char(30) CHARACTER SET utf8 DEFAULT NULL,
  `home` tinyint(1) DEFAULT NULL,
  `other_note` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `code_sale` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `price_sale` int(10) DEFAULT NULL,
  `approved` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `price_ship` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `order` (`id`, `fullname`, `address`, `phone`, `email`, `note`, `item_order`, `time`, `show`, `mark`, `admin_note`, `province`, `district`, `ward`, `user_id`, `status`, `view`, `code`, `address2`, `startplaces`, `finishplace`, `mobile`, `fax`, `hot`, `startime`, `endtime`, `home`, `other_note`, `code_sale`, `price_sale`, `approved`, `total_price`, `price_ship`) VALUES ('1', 'dang tran manh', 'đội 7 thôn trung', '0977160509', 'dangtranmanh051187@gmail.com', 'ghi chú giao hàng', NULL, '1505376785', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '1', NULL, 'dia chi giao hàng khác', 'Thanh toán tiền mặt khi nhận hàng.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, '246912', '30000');
INSERT INTO `order` (`id`, `fullname`, `address`, `phone`, `email`, `note`, `item_order`, `time`, `show`, `mark`, `admin_note`, `province`, `district`, `ward`, `user_id`, `status`, `view`, `code`, `address2`, `startplaces`, `finishplace`, `mobile`, `fax`, `hot`, `startime`, `endtime`, `home`, `other_note`, `code_sale`, `price_sale`, `approved`, `total_price`, `price_ship`) VALUES ('2', 'dang tran manh', 'đội 7 thôn trung', '0977160509', 'dangtranmanh051187@gmail.com', 'ghi chú giao hàng', NULL, '1505376806', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '1', 'DH_142', 'dia chi giao hàng khác', 'Thanh toán tiền mặt khi nhận hàng.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, '246912', '30000');
INSERT INTO `order` (`id`, `fullname`, `address`, `phone`, `email`, `note`, `item_order`, `time`, `show`, `mark`, `admin_note`, `province`, `district`, `ward`, `user_id`, `status`, `view`, `code`, `address2`, `startplaces`, `finishplace`, `mobile`, `fax`, `hot`, `startime`, `endtime`, `home`, `other_note`, `code_sale`, `price_sale`, `approved`, `total_price`, `price_ship`) VALUES ('3', 'dang tran manh', 'so nha 44 ngõ 28 thôn trung', '0977160509', 'dangtranmanh051187@gmail.com', 'ghi chú về đơn hàng mới', NULL, '1505383742', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '1', 'DH_143', 'dia chỉ giao hàng khác', 'Nhận hàng và thanh toán tại GIMME', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, '1481478', '30000');
INSERT INTO `order` (`id`, `fullname`, `address`, `phone`, `email`, `note`, `item_order`, `time`, `show`, `mark`, `admin_note`, `province`, `district`, `ward`, `user_id`, `status`, `view`, `code`, `address2`, `startplaces`, `finishplace`, `mobile`, `fax`, `hot`, `startime`, `endtime`, `home`, `other_note`, `code_sale`, `price_sale`, `approved`, `total_price`, `price_ship`) VALUES ('5', 'nguyễn văn đạt', '42 le quang đạo', '0977160509', 'dangtranmanh051187@gmail.com', 'ghi chú đơn hàng', NULL, '1505441259', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '1', 'DH_155', 'địa chỉ nhận hàng tây tựu từ liêm hà nội', 'Nhận hàng và thanh toán tại Thương mại thủ đô', NULL, '0912345678', NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, '1363330', '30000');
INSERT INTO `order` (`id`, `fullname`, `address`, `phone`, `email`, `note`, `item_order`, `time`, `show`, `mark`, `admin_note`, `province`, `district`, `ward`, `user_id`, `status`, `view`, `code`, `address2`, `startplaces`, `finishplace`, `mobile`, `fax`, `hot`, `startime`, `endtime`, `home`, `other_note`, `code_sale`, `price_sale`, `approved`, `total_price`, `price_ship`) VALUES ('6', 'nguyễn văn sáng ', 'dia chi moi', '0988183859', 'dangtranmanh051187@gmail.com', 'ghi chú đơn hàng', NULL, '1505525196', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '1', 'DH_166', '', 'Thanh toán tiền mặt khi nhận hàng.', NULL, '0912345676', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', '0');
INSERT INTO `order` (`id`, `fullname`, `address`, `phone`, `email`, `note`, `item_order`, `time`, `show`, `mark`, `admin_note`, `province`, `district`, `ward`, `user_id`, `status`, `view`, `code`, `address2`, `startplaces`, `finishplace`, `mobile`, `fax`, `hot`, `startime`, `endtime`, `home`, `other_note`, `code_sale`, `price_sale`, `approved`, `total_price`, `price_ship`) VALUES ('7', 'Vân', 'ssssasa', '0982255552', 'admin', 'sâsa', NULL, '1505982320', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '1', 'DH_217', 'asaas', 'Thanh toán tiền mặt khi nhận hàng.', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '4967920', '30000');
INSERT INTO `order` (`id`, `fullname`, `address`, `phone`, `email`, `note`, `item_order`, `time`, `show`, `mark`, `admin_note`, `province`, `district`, `ward`, `user_id`, `status`, `view`, `code`, `address2`, `startplaces`, `finishplace`, `mobile`, `fax`, `hot`, `startime`, `endtime`, `home`, `other_note`, `code_sale`, `price_sale`, `approved`, `total_price`, `price_ship`) VALUES ('8', 'Vân', 'đsd', '0982255552', 'buivananh.th@gmail.com', 'sáasas', NULL, '1505984710', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '1', 'DH_218', 'sâsaas', 'Thanh toán tiền mặt khi nhận hàng.', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '3733698', '30000');
INSERT INTO `order` (`id`, `fullname`, `address`, `phone`, `email`, `note`, `item_order`, `time`, `show`, `mark`, `admin_note`, `province`, `district`, `ward`, `user_id`, `status`, `view`, `code`, `address2`, `startplaces`, `finishplace`, `mobile`, `fax`, `hot`, `startime`, `endtime`, `home`, `other_note`, `code_sale`, `price_sale`, `approved`, `total_price`, `price_ship`) VALUES ('9', 'Vân', 'qâssaas', '0989339814', 'admin', '', NULL, '1512032466', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '1', 'DH_309', '', 'Thanh toán tiền mặt khi nhận hàng.', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '140000', '0');


#
# TABLE STRUCTURE FOR: order_item
#

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` int(50) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `t_option` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `initierary` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_start` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotel` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `person` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_end` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `pro_dir` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `alias` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('1', '2', '5', '2', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('2', '3', '5', '2', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '246912', NULL, 'sản phâm mới  của tôi', '123456', 'san-pham-moi-cua-toi', 'detail-copy-3.png');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('3', '3', '4', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234566', NULL, 'Quần áo bảo hộ kaky màu xanh dương', '1234566', 'quan-ao-bao-ho-kaky-mau-xanh-duong', 'quan-ao-kaky-mau-xanh-duong.png');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('4', '5', '5', '2', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '246912', '10092017', 'sản phâm mới  của tôi', '123456', 'san-pham-moi-cua-toi', 'detail-copy-3.png');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('5', '5', '4', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234566', '10092017', 'Quần áo bảo hộ kaky màu xanh dương', '1234566', 'quan-ao-bao-ho-kaky-mau-xanh-duong', 'quan-ao-kaky-mau-xanh-duong.png');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('6', '6', '5', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123456', '10092017', 'sản phâm mới  của tôi', '123456', 'san-pham-moi-cua-toi', 'detail-copy-3.png');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('7', '7', '4', '3', '1500000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3703698', '10092017', 'Quần áo bảo hộ kaky màu xanh dương', '1234566', 'quan-ao-bao-ho-kaky-mau-xanh-duong', 'quan-ao-kaky-mau-xanh-duong.png');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('8', '7', '3', '1', '1234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234222', '10092017', 'QUẦN ÁO KAKI MÀU GHI', '1234222', 'quan-ao-kaki-mau-ghi', 'quan-ao-kaky-mau-xanh-duong1.png');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('9', '8', '6', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '10092017', 'áo chất lượng khi thi công công trình', '0', 'ao-chat-luong-khi-thi-cong-cong-trinh', 'news2.png');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('10', '8', '4', '3', '1500000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3703698', '10092017', 'Quần áo bảo hộ kaky màu xanh dương', '1234566', 'quan-ao-bao-ho-kaky-mau-xanh-duong', 'quan-ao-kaky-mau-xanh-duong.png');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('11', '9', '28', '4', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120000', '30112017', 'Khoai lang', '30000', 'khoai-lang', '1458811020-khoai-lang-2.jpg');
INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `count`, `price`, `t_option`, `initierary`, `date_start`, `hotel`, `room`, `tour_type`, `person`, `date_end`, `subtotal`, `pro_dir`, `name`, `price_sale`, `alias`, `image`) VALUES ('12', '9', '30', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20000', '30112017', 'Quả măng cụt', '20000', 'qua-mang-cut', 'mang-cut.jpg');


#
# TABLE STRUCTURE FOR: p_images
#

CREATE TABLE `p_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `id_item` int(11) DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `url` char(200) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('9', '', '43', 'upload/img/products_multi/21.jpg', NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('10', '', '43', 'upload/img/products_multi/22.jpg', NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('11', 'anh so 1', '93', 'upload/img/products_multi/web.png', NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('13', 'anh 2', '92', 'upload/img/products_multi/logo1.png', NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('14', '', '92', 'upload/img/products_multi/logo-thep.jpg', NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('16', 'anh so 2', NULL, 'upload/img/products_multi/logo-thep1.jpg', NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('17', 'anh so 2', NULL, NULL, NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('18', 'anh so 123', NULL, 'upload/img/products_multi/logo.png', NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('19', 'anh cho 91', NULL, NULL, NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('20', 'anh cho 91', NULL, 'upload/img/products_multi/logo1.png', NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('22', 'anh so 1', '15', 'upload/img/products_multi/golf.png', NULL, '', NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('23', NULL, '93', 'upload/img/products_multi/giay-bet-nu-cuc-dep-2017-1509779416-06321602-ba37482ac44d7060ec4383460d6cec49-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('24', NULL, '94', 'upload/img/products_multi/giay-da-nam-1513654240-42513661-9472c1cd4938e1e30cdf5613ef926956-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('25', NULL, '95', 'upload/img/products_multi/giay-luoi-nam-sport-sieu-nhe-1509089650-70808581-284822f8215510444727605b7be84b4c-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('27', NULL, '99', 'upload/img/products_multi/giay-luoi-nu-giay-slip-on-giay-de-bang-giay-nu-thoi-trang-nu-dodaco-ddc2026-mh-10-bac-ha-1511344819-92984812-44b464835378c3965f6d18074a1a105c-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('28', NULL, '100', 'upload/img/products_multi/giay-moi-nu-om-fashion-0169trang-1508913417-06851081-e18bf214aa0357888c18f92cda908783-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('29', NULL, '101', 'upload/img/products_multi/giay-nam-dang-han-quoc-1516874863-94200433-25137f5aab9af751600b96ead0681c1c-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('30', NULL, '102', 'upload/img/products_multi/giay-nam-thoi-trang-nam-cao-cap-pettino-gv08-den-1506650409-0893705-00cf5b7c7df8d25f40d489e3ba02e82f-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('31', NULL, '103', 'upload/img/products_multi/giay-sneaker-nam-giay-the-thao-nam-mando-giay-thoi-trang-nam-gd07-trang-1514189407-25334751-c78be32e2bdd853b51c566ee202ad56a-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('32', NULL, '104', 'upload/img/products_multi/giay-sneaker-thoi-trang-nam-alami-gtt321-xam-1513074624-66186091-94b373b3bc515e12307b65cc3c60d3db-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('33', NULL, '105', 'upload/img/products_multi/giay-the-thao-chay-bo-sneaker-nam-sanh-dieu-tk-01-cam-1513150233-80544362-9f227ab1438b943881a05d6509f07592-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('34', NULL, '106', 'upload/img/products_multi/giay-the-thao-nam-nike-zoom-chat-xin-rat-em-chan-1516950304-06674533-e70562ef39f85034760ce7ce876b3d44-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('35', NULL, '107', 'upload/img/products_multi/giay-the-thao-nam-sieu-nhe-kieu-dang-cao-cap-1515741021-47413213-78602464cdf42e49fe137b15dfa7ca09-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('36', NULL, '108', 'upload/img/products_multi/giay-thoi-trang-nu-don-de-1510205418-92852612-9386c4c2154dc4fbb8aa88f82279ff69-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('37', NULL, '109', 'upload/img/products_multi/giay-vai-nam-1507300387-82479951-4b2ba103eceb24f1fd2de8d58eed98d0-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('38', NULL, '110', 'upload/img/products_multi/giay-vai-nam-cao-cap-1513740674-87769661-562da0b84934287f8e4b8b596b6db956-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('39', NULL, '99', 'upload/img/products_multi/giay-luoi-nu-giay-slip-on-giay-de-bang-giay-nu-thoi-trang-nu-dodaco-ddc2026-mh-9-xanh-ke-to-1511344821-35094812-f7067c37e62eb5c02305bc11f337a645-catalog_233.jpg', NULL, NULL, NULL);
INSERT INTO `p_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('41', NULL, '97', 'upload/img/products_multi/giay-luoi-nu-giay-slip-on-giay-de-bang-giay-nu-thoi-trang-nu-dodaco-ddc1835-trang-1514403605-0324805-45b1f7bacf50b5c187550a72fe54e880-catalog_233.jpg', NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: places
#

CREATE TABLE `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `lang` char(10) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `places` (`id`, `name`, `description`, `lang`) VALUES ('3', 'Osaka', '', NULL);
INSERT INTO `places` (`id`, `name`, `description`, `lang`) VALUES ('2', 'Tokyo', '', NULL);
INSERT INTO `places` (`id`, `name`, `description`, `lang`) VALUES ('4', 'Kanazawa', '', NULL);
INSERT INTO `places` (`id`, `name`, `description`, `lang`) VALUES ('5', 'Shirakawa-go', '', NULL);
INSERT INTO `places` (`id`, `name`, `description`, `lang`) VALUES ('6', 'Nagano', '', NULL);
INSERT INTO `places` (`id`, `name`, `description`, `lang`) VALUES ('7', 'Kobe', '', NULL);
INSERT INTO `places` (`id`, `name`, `description`, `lang`) VALUES ('8', 'Hakuba', '', NULL);


#
# TABLE STRUCTURE FOR: pro_size
#

CREATE TABLE `pro_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `alias` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `lang` char(10) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: pro_values
#

CREATE TABLE `pro_values` (
  `pro_id` int(11) DEFAULT NULL,
  `attr_id` int(11) DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product
#

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `style` int(11) DEFAULT NULL,
  `id_value` int(11) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `home` tinyint(1) DEFAULT NULL,
  `focus` tinyint(1) DEFAULT NULL,
  `coupon` tinyint(1) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `price` int(11) DEFAULT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `description_seo` text COLLATE utf8_unicode_ci,
  `location` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `note` text COLLATE utf8_unicode_ci,
  `like` int(11) DEFAULT '0',
  `order` decimal(21,0) DEFAULT '0',
  `category_id` int(11) DEFAULT NULL,
  `caption_1` text COLLATE utf8_unicode_ci,
  `caption_2` text COLLATE utf8_unicode_ci,
  `locale` int(11) DEFAULT NULL,
  `bought` int(11) DEFAULT '0',
  `dksudung` text COLLATE utf8_unicode_ci,
  `sort` int(10) DEFAULT NULL,
  `quantity` int(11) DEFAULT '0',
  `counter` int(11) DEFAULT '0',
  `lang` char(10) COLLATE utf8_unicode_ci DEFAULT 'vi',
  `destination` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` int(8) DEFAULT NULL,
  `tags` text COLLATE utf8_unicode_ci,
  `pro_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `multi_image` text COLLATE utf8_unicode_ci,
  `img_dir` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `quaranty` tinyint(3) DEFAULT NULL,
  `tinhtrang` tinyint(1) DEFAULT NULL,
  `group_attribute_id` int(11) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `option_id` int(11) DEFAULT NULL,
  `button_color1` int(11) NOT NULL,
  `config_pro` text COLLATE utf8_unicode_ci NOT NULL,
  `config_pro_content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product` (`id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`, `home`, `focus`, `coupon`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `location`, `title_seo`, `keyword_seo`, `detail`, `note`, `like`, `order`, `category_id`, `caption_1`, `caption_2`, `locale`, `bought`, `dksudung`, `sort`, `quantity`, `counter`, `lang`, `destination`, `time`, `tags`, `pro_dir`, `multi_image`, `img_dir`, `status`, `quaranty`, `tinhtrang`, `group_attribute_id`, `color`, `size`, `user_id`, `option_id`, `button_color1`, `config_pro`, `config_pro_content`) VALUES ('92', NULL, NULL, '0', 'sản phẩm mới', NULL, 'san-pham-moi', 'tc-4.png', '1', NULL, '1', '1', NULL, '1', '300000', '200000', '', '', NULL, '', '', NULL, NULL, '0', '0', '26', NULL, NULL, '0', NULL, NULL, '50', '0', NULL, 'en', NULL, '1517642394', '', '03022018', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, '0', 'null', '');
INSERT INTO `product` (`id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`, `home`, `focus`, `coupon`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `location`, `title_seo`, `keyword_seo`, `detail`, `note`, `like`, `order`, `category_id`, `caption_1`, `caption_2`, `locale`, `bought`, `dksudung`, `sort`, `quantity`, `counter`, `lang`, `destination`, `time`, `tags`, `pro_dir`, `multi_image`, `img_dir`, `status`, `quaranty`, `tinhtrang`, `group_attribute_id`, `color`, `size`, `user_id`, `option_id`, `button_color1`, `config_pro`, `config_pro_content`) VALUES ('111', NULL, NULL, NULL, 'Hyundai Elantra Sport 2018', NULL, 'hyundai-elantra-sport-2018', 'elantra-sport.png', NULL, '1', '1', NULL, NULL, '1', '0', '0', '<p>Hyundai Elantra Sport l&agrave; một d&ograve;ng xe mới về thị trường Việt v&agrave;o đầu năm 2018. Tuy nhi&ecirc;n cớn sốt về xe tạo ra ngay từ khi Hyundai tr&igrave;nh l&agrave;ng mẫu xe hạng C n&agrave;y th&igrave; kh&ocirc;ng ai c&oacute; thể phủ nhận. Với thiết kế trẻ trung năng động, nội thất tiện nghi sang trọng. Đ&aacute;nh đ&uacute;ng t&acirc;m l&yacute; người Việt trong những năm mới đ&acirc;y.</p>\r\n', '', NULL, '', '', NULL, NULL, '0', '0', '27', NULL, NULL, NULL, NULL, NULL, '51', '0', NULL, 'vi', NULL, '1519704497', '', '27022018', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2', NULL, '0', '[{\"content\":\"<p style=\\\"text-align:justify\\\"><strong><span style=\\\"font-size:14px\\\">Elantra Sport 2018 thi\\u1ebft k\\u1ebf \\u0111\\u1ebfn t\\u1eeb t\\u01b0\\u01a1ng lai c\\u1ee7a Hyundai.<\\/span><\\/strong><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:center\\\"><span style=\\\"font-size:14px\\\"><img alt=\\\"\\\" src=\\\"\\/upload\\/images\\/elantra-Sport.png\\\" style=\\\"height:525px; width:700px\\\" \\/><br \\/>\\r\\nElantra Sport l&agrave; phi&ecirc;n b\\u1ea3n th\\u1ec3 thao c\\u1ee7a m\\u1eabu Hyundai Elantra. Xe \\u0111\\u01b0\\u1ee3c ch&iacute;nh th\\u1ee9c ra m\\u1eaft v&agrave;o \\u0111&acirc;u n\\u0103m 2018 \\u0111\\u01b0\\u1ee3c l\\u1eafp r&aacute;p v&agrave; ph&acirc;n ph\\u1ed1i t\\u1ea1i Vi\\u1ec7t Nam. V\\u1edbi ng&ocirc;n ng\\u1eef thi\\u1ebft k\\u1ebf quen thu\\u1ed9c &rdquo; \\u0110i&ecirc;u kh\\u1eafc d&ograve;ng ch\\u1ea3y 2.0 &ldquo;. Xe s\\u1edf h\\u1eefu ngo\\u1ea1i h&igrave;nh \\u0111\\u1eb9p m\\u1eaft phong c&aacute;ch Sport. D&ograve;ng xe sinh ra \\u0111\\u1ec3 h\\u01b0\\u1edbng \\u0111\\u1ebfn gi\\u1edbi tr\\u1ebb nhi\\u1ec1u h\\u01a1n, h\\u1ee9a h\\u1eb9n d&ograve;ng xe s\\u1ebd t\\u1ea1o n&ecirc;n c\\u01a1n s\\u1ed1t trong ph&acirc;n kh&uacute;c.<\\/span><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify\\\"><span style=\\\"font-size:14px\\\">V\\u1edbi phi&ecirc;n b\\u1ea3n m\\u1edbi n&agrave;y Hyundai \\u0111&atilde; trang b\\u1ecb cho xe h&agrave;ng lo\\u1ea1t nh\\u1eefng ti\\u1ec7n nghi m\\u1edbi m\\u1ebb cho xe. V\\u1edbi m\\u1ee9c gi&aacute; 729 \\u0111\\u01b0\\u1ee3c b&aacute;o gi&aacute; th&igrave; \\u0111&acirc;y c\\u0169ng kh&ocirc;ng ph\\u1ea3i l&agrave; m\\u1ed9t m\\u1ee9c gi&aacute; qu&aacute; cao. So v\\u1edbi c&aacute;c \\u0111\\u1ed1i th\\u1ee7 c&ugrave;ng ph&acirc;n kh&uacute;c nh\\u01b0 Mazda 3, Toyota Corola Altis,&hellip; Th&igrave; th\\u1ef1c s\\u1ef1 gi&aacute; 729 tri\\u1ec7u l&agrave; kh&aacute; \\u1ed5n v\\u1edbi ph&acirc;n kh&uacute;c.<\\/span><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:center\\\"><span style=\\\"font-size:14px\\\"><img alt=\\\"\\\" src=\\\"\\/upload\\/images\\/elantra-2.jpg\\\" style=\\\"height:394px; width:700px\\\" \\/><\\/span><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:center\\\">&nbsp;<\\/p>\\r\\n\",\"name\":\"Chi ti\\u1ebft s\\u1ea3n ph\\u1ea9m\",\"type\":\"textarea\",\"sort\":\"\"},{\"content\":\"\",\"name\":\"th\\u00f4ng s\\u1ed1 k\\u1ef9 thu\\u1eadt\",\"type\":\"textarea\",\"sort\":\"2\"},{\"content\":\"\",\"name\":\"H\\u01b0\\u1edbng d\\u1eabn mua h\\u00e0ng\",\"type\":\"int\",\"sort\":\"3\"}]', '');
INSERT INTO `product` (`id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`, `home`, `focus`, `coupon`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `location`, `title_seo`, `keyword_seo`, `detail`, `note`, `like`, `order`, `category_id`, `caption_1`, `caption_2`, `locale`, `bought`, `dksudung`, `sort`, `quantity`, `counter`, `lang`, `destination`, `time`, `tags`, `pro_dir`, `multi_image`, `img_dir`, `status`, `quaranty`, `tinhtrang`, `group_attribute_id`, `color`, `size`, `user_id`, `option_id`, `button_color1`, `config_pro`, `config_pro_content`) VALUES ('112', NULL, NULL, NULL, 'Hyundai i20 Active 2018', NULL, 'hyundai-i20-active-2018', 'i20-1.png', NULL, '1', '1', NULL, NULL, '1', '0', '0', '<p>Mạnh mẽ, sắc sảo, năng động, nhỏ gọn l&agrave; những từ mi&ecirc;u tả cho Hyundai i20 Active 2018. Đ&acirc;y l&agrave; đứa con do Hyundai sản xuất. Với k&iacute;ch thước tổng thể 3995 x 1760 x 1555 (mm) chiếc xe n&agrave;y đặc biệt ph&ugrave; hợp với c&aacute;c đường đ&ocirc; thị. Vận chuyển h&agrave;ng h&oacute;a cũng rất linh hoạt, đưa v&agrave;o giai điệu cuộc sống của Anh/chị những cảm x&uacute;c mới.</p>\r\n', '', NULL, '', '', NULL, NULL, '0', '0', '27', NULL, NULL, NULL, NULL, NULL, '52', '0', NULL, 'vi', NULL, '1519704619', '', '27022018', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2', NULL, '0', '[{\"content\":\"<p style=\\\"text-align:justify\\\"><span style=\\\"font-size:14px\\\">\\u0110&acirc;y l&agrave; m\\u1ee9c gi&aacute; kh&aacute; h\\u1ea5p d\\u1eabn, ph&ugrave; h\\u1ee3p v\\u1edbi t&uacute;i ti\\u1ec1n ng\\u01b0\\u1eddi Vi\\u1ec7t. \\u0110\\u01b0\\u1ee3c thi\\u1ebft k\\u1ebf theo ki\\u1ec3u \\u0111i&ecirc;u kh\\u1eafc d&ograve;ng ch\\u1ea3y c\\u1ee7a Huyndai chi\\u1ebfc xe \\u0111&atilde; thu h&uacute;t m\\u1ecdi &aacute;nh nh&igrave;n. Ki\\u1ec3u d&aacute;ng xe ph&ugrave; h\\u1ee3p v\\u1edbi m\\u1ecdi gia \\u0111&igrave;nh v&agrave; \\u0111\\u1eb7c bi\\u1ec7t l&agrave; ni\\u1ec1m t\\u1ef1 h&agrave;o cho ph&aacute;i n\\u1eef. Kh&aacute;ch h&agrave;ng c&oacute; th\\u1ec3 t\\u1eadu xe n&agrave;y v\\u1ec1 theo h&igrave;nh th\\u1ee9c tr\\u1ea3 g&oacute;p v\\u1edbi m\\u1ee9c l&atilde;i su\\u1ea5t 7.5% v\\u1edbi th\\u1eddi h\\u1ea1n t\\u1ed1i \\u0111a l&ecirc;n \\u0111\\u1ebfn 7 n\\u0103m.<\\/span><\\/p>\\r\\n\",\"name\":\"Chi ti\\u1ebft s\\u1ea3n ph\\u1ea9m\",\"type\":\"textarea\",\"sort\":\"\"},{\"content\":\"\",\"name\":\"th\\u00f4ng s\\u1ed1 k\\u1ef9 thu\\u1eadt\",\"type\":\"textarea\",\"sort\":\"2\"},{\"content\":\"\",\"name\":\"H\\u01b0\\u1edbng d\\u1eabn mua h\\u00e0ng\",\"type\":\"int\",\"sort\":\"3\"}]', '');
INSERT INTO `product` (`id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`, `home`, `focus`, `coupon`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `location`, `title_seo`, `keyword_seo`, `detail`, `note`, `like`, `order`, `category_id`, `caption_1`, `caption_2`, `locale`, `bought`, `dksudung`, `sort`, `quantity`, `counter`, `lang`, `destination`, `time`, `tags`, `pro_dir`, `multi_image`, `img_dir`, `status`, `quaranty`, `tinhtrang`, `group_attribute_id`, `color`, `size`, `user_id`, `option_id`, `button_color1`, `config_pro`, `config_pro_content`) VALUES ('113', NULL, NULL, NULL, 'Hyundai Starex 2018', NULL, 'hyundai-starex-2018', 'starex-moi-nhat.png', NULL, '1', '1', NULL, NULL, '1', '0', '0', '<p>Hyundai Starex 2018 l&agrave; một d&ograve;ng xe kh&aacute; th&ocirc;ng dụng tr&ecirc;n thị trường nhờ v&agrave;o khả năng vận h&agrave;nh tuyệt vời của n&oacute;. sự đa dụng của xe đến từ khả năng vận h&agrave;nh vượt trội. V&agrave; đến từ khả năng hoạt động của xe. Từ xe du lịch, xe dịch vụ, xe gia đ&igrave;nh đến cả xe cứu thương. Khi ra đường kh&ocirc;ng kh&oacute; để bạn c&oacute; thể bắt gặp một chiếc Starex ngo&agrave;i đường.</p>\r\n', '', NULL, '', '', NULL, NULL, '0', '0', '27', NULL, NULL, NULL, NULL, NULL, '53', '0', NULL, 'vi', NULL, '1519704665', '', '27022018', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2', NULL, '0', '[{\"content\":\"<p>Hyundai Starex 2018 l&agrave; m\\u1ed9t d&ograve;ng xe kh&aacute; th&ocirc;ng d\\u1ee5ng tr&ecirc;n th\\u1ecb tr\\u01b0\\u1eddng nh\\u1edd v&agrave;o kh\\u1ea3 n\\u0103ng v\\u1eadn h&agrave;nh tuy\\u1ec7t v\\u1eddi c\\u1ee7a n&oacute;. s\\u1ef1 \\u0111a d\\u1ee5ng c\\u1ee7a xe \\u0111\\u1ebfn t\\u1eeb kh\\u1ea3 n\\u0103ng v\\u1eadn h&agrave;nh v\\u01b0\\u1ee3t tr\\u1ed9i. V&agrave; \\u0111\\u1ebfn t\\u1eeb kh\\u1ea3 n\\u0103ng ho\\u1ea1t \\u0111\\u1ed9ng c\\u1ee7a xe. T\\u1eeb xe du l\\u1ecbch, xe d\\u1ecbch v\\u1ee5, xe gia \\u0111&igrave;nh \\u0111\\u1ebfn c\\u1ea3 xe c\\u1ee9u th\\u01b0\\u01a1ng. Khi ra \\u0111\\u01b0\\u1eddng kh&ocirc;ng kh&oacute; \\u0111\\u1ec3 b\\u1ea1n c&oacute; th\\u1ec3 b\\u1eaft g\\u1eb7p m\\u1ed9t chi\\u1ebfc Starex ngo&agrave;i \\u0111\\u01b0\\u1eddng.<\\/p>\\r\\n\",\"name\":\"Chi ti\\u1ebft s\\u1ea3n ph\\u1ea9m\",\"type\":\"textarea\",\"sort\":\"\"},{\"content\":\"\",\"name\":\"th\\u00f4ng s\\u1ed1 k\\u1ef9 thu\\u1eadt\",\"type\":\"textarea\",\"sort\":\"2\"},{\"content\":\"\",\"name\":\"H\\u01b0\\u1edbng d\\u1eabn mua h\\u00e0ng\",\"type\":\"int\",\"sort\":\"3\"}]', '');
INSERT INTO `product` (`id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`, `home`, `focus`, `coupon`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `location`, `title_seo`, `keyword_seo`, `detail`, `note`, `like`, `order`, `category_id`, `caption_1`, `caption_2`, `locale`, `bought`, `dksudung`, `sort`, `quantity`, `counter`, `lang`, `destination`, `time`, `tags`, `pro_dir`, `multi_image`, `img_dir`, `status`, `quaranty`, `tinhtrang`, `group_attribute_id`, `color`, `size`, `user_id`, `option_id`, `button_color1`, `config_pro`, `config_pro_content`) VALUES ('114', NULL, NULL, NULL, 'ACURA MDX 2007', NULL, 'acura-mdx-2007', 'a1.jpg', NULL, '1', '1', NULL, '6', '1', '0', '0', '<p>Acura MDX 3.7AT, sản xuất 2007, xe nhập Canada.&nbsp;<br />\r\n- M&aacute;y m&oacute;c gầm bệ chắc chắn.&nbsp;<br />\r\n- Xe trang bị động cơ m&aacute;y xăng 3.7L,&nbsp;<br />\r\n- Xi nhan gương, gương k&iacute;nh chỉnh điện, gập điện, t&uacute;i kh&iacute;, điều ho&agrave; tự động.&nbsp;<br />\r\n- V&ocirc; lăng t&iacute;ch hợp, tay l&aacute;i trợ lực, phanh ABS,&nbsp;<br />\r\n- M&agrave;n h&igrave;nh DVD tr&ecirc;n trần, &acirc;m thanh DVD/CD/AM/FM, v&agrave;nh đ&uacute;c, cảm biến, camera l&ugrave;i, cốp điện, c&ugrave;ng một số tiện &iacute;ch,...</p>\r\n', '', NULL, '', '', NULL, NULL, '0', '0', '28', NULL, NULL, NULL, NULL, NULL, '54', '0', NULL, 'vi', NULL, '1519704928', '', '27022018', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2', NULL, '0', '[{\"content\":\"<p style=\\\"text-align:justify\\\"><span style=\\\"font-size:14px\\\">Acura MDX 3.7AT, s\\u1ea3n xu\\u1ea5t 2007, xe nh\\u1eadp Canada.&nbsp;<br \\/>\\r\\n- M&aacute;y m&oacute;c g\\u1ea7m b\\u1ec7 ch\\u1eafc ch\\u1eafn.&nbsp;<br \\/>\\r\\n- Xe trang b\\u1ecb \\u0111\\u1ed9ng c\\u01a1 m&aacute;y x\\u0103ng 3.7L,&nbsp;<br \\/>\\r\\n- Xi nhan g\\u01b0\\u01a1ng, g\\u01b0\\u01a1ng k&iacute;nh ch\\u1ec9nh \\u0111i\\u1ec7n, g\\u1eadp \\u0111i\\u1ec7n, t&uacute;i kh&iacute;, \\u0111i\\u1ec1u ho&agrave; t\\u1ef1 \\u0111\\u1ed9ng.&nbsp;<br \\/>\\r\\n- V&ocirc; l\\u0103ng t&iacute;ch h\\u1ee3p, tay l&aacute;i tr\\u1ee3 l\\u1ef1c, phanh ABS,&nbsp;<br \\/>\\r\\n- M&agrave;n h&igrave;nh DVD tr&ecirc;n tr\\u1ea7n, &acirc;m thanh DVD\\/CD\\/AM\\/FM, v&agrave;nh \\u0111&uacute;c, c\\u1ea3m bi\\u1ebfn, camera l&ugrave;i, c\\u1ed1p \\u0111i\\u1ec7n, c&ugrave;ng m\\u1ed9t s\\u1ed1 ti\\u1ec7n &iacute;ch,...<\\/span><\\/p>\\r\\n\",\"name\":\"Chi ti\\u1ebft s\\u1ea3n ph\\u1ea9m\",\"type\":\"textarea\",\"sort\":\"\"},{\"content\":\"\",\"name\":\"th\\u00f4ng s\\u1ed1 k\\u1ef9 thu\\u1eadt\",\"type\":\"textarea\",\"sort\":\"2\"},{\"content\":\"\",\"name\":\"H\\u01b0\\u1edbng d\\u1eabn mua h\\u00e0ng\",\"type\":\"int\",\"sort\":\"3\"}]', '');
INSERT INTO `product` (`id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`, `home`, `focus`, `coupon`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `location`, `title_seo`, `keyword_seo`, `detail`, `note`, `like`, `order`, `category_id`, `caption_1`, `caption_2`, `locale`, `bought`, `dksudung`, `sort`, `quantity`, `counter`, `lang`, `destination`, `time`, `tags`, `pro_dir`, `multi_image`, `img_dir`, `status`, `quaranty`, `tinhtrang`, `group_attribute_id`, `color`, `size`, `user_id`, `option_id`, `button_color1`, `config_pro`, `config_pro_content`) VALUES ('115', NULL, NULL, NULL, 'ACURA MDX 2007', NULL, 'acura-mdx-20071', 'a21.jpg', NULL, '1', '1', NULL, NULL, '1', '0', '0', '<p>Cần b&aacute;n xe Acura MDX SUV/Crossover AWD (3.7L 6cyl 5A) &nbsp;m&agrave;u x&aacute;m, sản xuất năm 2007 đ&atilde; đi được 46,000 km. Xe thuộc ph&acirc;n kh&uacute;c SUV/Crossover, 7 chỗ ngồi, 5 cửa, động cơ xăng 3.7L, kh&ocirc;ng tăng &aacute;p, sử dụng hộp số tự động 6 cấp với hệ dẫn động 4 b&aacute;nh.&nbsp;<br />\r\nHệ thống an to&agrave;n bao gồm chống b&oacute; cứng phanh (ABS), ph&acirc;n bố lực phanh điện tử (EBD), điều khiển h&agrave;nh tr&igrave;nh.&nbsp;<br />\r\nNgo&agrave;i ra xe c&ograve;n c&oacute; cửa sổ trời, ... c&ugrave;ng nhiều tiện &iacute;ch v&agrave; c&ocirc;ng nghệ ti&ecirc;n tiến kh&aacute;c.</p>\r\n', '', NULL, '', '', NULL, NULL, '0', '0', '28', NULL, NULL, NULL, NULL, NULL, '55', '0', NULL, 'vi', NULL, '1519705299', '', '27022018', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2', NULL, '0', '[{\"content\":\"<p>C\\u1ea7n b&aacute;n xe Acura MDX SUV\\/Crossover AWD (3.7L 6cyl 5A) &nbsp;m&agrave;u x&aacute;m, s\\u1ea3n xu\\u1ea5t n\\u0103m 2007 \\u0111&atilde; \\u0111i \\u0111\\u01b0\\u1ee3c 46,000 km. Xe thu\\u1ed9c ph&acirc;n kh&uacute;c SUV\\/Crossover, 7 ch\\u1ed7 ng\\u1ed3i, 5 c\\u1eeda, \\u0111\\u1ed9ng c\\u01a1 x\\u0103ng 3.7L, kh&ocirc;ng t\\u0103ng &aacute;p, s\\u1eed d\\u1ee5ng h\\u1ed9p s\\u1ed1 t\\u1ef1 \\u0111\\u1ed9ng 6 c\\u1ea5p v\\u1edbi h\\u1ec7 d\\u1eabn \\u0111\\u1ed9ng 4 b&aacute;nh.&nbsp;<br \\/>\\r\\nH\\u1ec7 th\\u1ed1ng an to&agrave;n bao g\\u1ed3m ch\\u1ed1ng b&oacute; c\\u1ee9ng phanh (ABS), ph&acirc;n b\\u1ed1 l\\u1ef1c phanh \\u0111i\\u1ec7n t\\u1eed (EBD), \\u0111i\\u1ec1u khi\\u1ec3n h&agrave;nh tr&igrave;nh.&nbsp;<br \\/>\\r\\nNgo&agrave;i ra xe c&ograve;n c&oacute; c\\u1eeda s\\u1ed5 tr\\u1eddi, ... c&ugrave;ng nhi\\u1ec1u ti\\u1ec7n &iacute;ch v&agrave; c&ocirc;ng ngh\\u1ec7 ti&ecirc;n ti\\u1ebfn kh&aacute;c.<\\/p>\\r\\n\",\"name\":\"Chi ti\\u1ebft s\\u1ea3n ph\\u1ea9m\",\"type\":\"textarea\",\"sort\":\"\"},{\"content\":\"\",\"name\":\"th\\u00f4ng s\\u1ed1 k\\u1ef9 thu\\u1eadt\",\"type\":\"textarea\",\"sort\":\"2\"},{\"content\":\"\",\"name\":\"H\\u01b0\\u1edbng d\\u1eabn mua h\\u00e0ng\",\"type\":\"int\",\"sort\":\"3\"}]', '');
INSERT INTO `product` (`id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`, `home`, `focus`, `coupon`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `location`, `title_seo`, `keyword_seo`, `detail`, `note`, `like`, `order`, `category_id`, `caption_1`, `caption_2`, `locale`, `bought`, `dksudung`, `sort`, `quantity`, `counter`, `lang`, `destination`, `time`, `tags`, `pro_dir`, `multi_image`, `img_dir`, `status`, `quaranty`, `tinhtrang`, `group_attribute_id`, `color`, `size`, `user_id`, `option_id`, `button_color1`, `config_pro`, `config_pro_content`) VALUES ('116', NULL, NULL, NULL, 'ACURA ILX PREMIUM 2016', NULL, 'acura-ilx-premium-2016', 'a41.jpg', NULL, '1', '1', NULL, '12', '1', '0', '0', '<p>&nbsp;Acura ILX Premium sản xuất 2015 Model 2016 ( MẪU MỚI )&nbsp;<br />\r\n* Xe một đời chủ, mới chạy được 10,000 mile, đăng k&yacute; lần đầu 11/2016</p>\r\n\r\n<p>&nbsp;* Xe c&oacute; bảo hiểm 2 chiều<br />\r\n&nbsp;* Xe c&ograve;n mới tinh nội thất lung linh. Bao kiểm tra c&aacute;c kiểu...<br />\r\n&nbsp;* Động cơ 2.4L sản sinh ra c&ocirc;ng suất 201 m&atilde; lực, tăng tốc từ 0-100km/h trong v&ograve;ng 6.9 gi&acirc;y. Động cơ mạnh mẽ nằm trong chiếc sedan cở nhỏ của Acura ILX 2016 n&agrave;y.&nbsp;</p>\r\n\r\n<p>* Hoạt động hộp số tự động 8 cấp chuyển số nhanh v&agrave; ch&iacute;nh x&aacute;c nhờ vậy khả năng tiết kiệm nhi&ecirc;n liệu tốt.&nbsp;<br />\r\n* Đ&egrave;n pha Full LED 5 BI c&ocirc;ng nghệ cao, đ&egrave;n xi nhan v&agrave; sương m&ugrave; trang bị đều l&agrave; đ&egrave;n LED&nbsp;</p>\r\n\r\n<p>* M&agrave;n h&igrave;nh hiển thị th&ocirc;ng tin 8 inch 3D Navigation&nbsp;<br />\r\n* Hệ thống &acirc;m thanh 7 loa,Ghế da, nhớ ghế 2 vị tr&iacute;, hệ thống 8 t&uacute;i kh&iacute;</p>\r\n', '', NULL, '', '', NULL, NULL, '0', '0', '28', NULL, NULL, NULL, NULL, NULL, '56', '0', NULL, 'vi', NULL, '1519705429', '', '27022018', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2', NULL, '0', '[{\"content\":\"<p>&nbsp;Acura ILX Premium s\\u1ea3n xu\\u1ea5t 2015 Model 2016 ( M\\u1eaaU M\\u1edaI )&nbsp;<br \\/>\\r\\n* Xe m\\u1ed9t \\u0111\\u1eddi ch\\u1ee7, m\\u1edbi ch\\u1ea1y \\u0111\\u01b0\\u1ee3c 10,000 mile, \\u0111\\u0103ng k&yacute; l\\u1ea7n \\u0111\\u1ea7u 11\\/2016<\\/p>\\r\\n\\r\\n<p>&nbsp;* Xe c&oacute; b\\u1ea3o hi\\u1ec3m 2 chi\\u1ec1u<br \\/>\\r\\n&nbsp;* Xe c&ograve;n m\\u1edbi tinh n\\u1ed9i th\\u1ea5t lung linh. Bao ki\\u1ec3m tra c&aacute;c ki\\u1ec3u...<br \\/>\\r\\n&nbsp;* \\u0110\\u1ed9ng c\\u01a1 2.4L s\\u1ea3n sinh ra c&ocirc;ng su\\u1ea5t 201 m&atilde; l\\u1ef1c, t\\u0103ng t\\u1ed1c t\\u1eeb 0-100km\\/h trong v&ograve;ng 6.9 gi&acirc;y. \\u0110\\u1ed9ng c\\u01a1 m\\u1ea1nh m\\u1ebd n\\u1eb1m trong chi\\u1ebfc sedan c\\u1edf nh\\u1ecf c\\u1ee7a Acura ILX 2016 n&agrave;y.&nbsp;<\\/p>\\r\\n\\r\\n<p>* Ho\\u1ea1t \\u0111\\u1ed9ng h\\u1ed9p s\\u1ed1 t\\u1ef1 \\u0111\\u1ed9ng 8 c\\u1ea5p chuy\\u1ec3n s\\u1ed1 nhanh v&agrave; ch&iacute;nh x&aacute;c nh\\u1edd v\\u1eady kh\\u1ea3 n\\u0103ng ti\\u1ebft ki\\u1ec7m nhi&ecirc;n li\\u1ec7u t\\u1ed1t.&nbsp;<br \\/>\\r\\n* \\u0110&egrave;n pha Full LED 5 BI c&ocirc;ng ngh\\u1ec7 cao, \\u0111&egrave;n xi nhan v&agrave; s\\u01b0\\u01a1ng m&ugrave; trang b\\u1ecb \\u0111\\u1ec1u l&agrave; \\u0111&egrave;n LED&nbsp;<\\/p>\\r\\n\\r\\n<p>* M&agrave;n h&igrave;nh hi\\u1ec3n th\\u1ecb th&ocirc;ng tin 8 inch 3D Navigation&nbsp;<br \\/>\\r\\n* H\\u1ec7 th\\u1ed1ng &acirc;m thanh 7 loa,Gh\\u1ebf da, nh\\u1edb gh\\u1ebf 2 v\\u1ecb tr&iacute;, h\\u1ec7 th\\u1ed1ng 8 t&uacute;i kh&iacute;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\",\"name\":\"Chi ti\\u1ebft s\\u1ea3n ph\\u1ea9m\",\"type\":\"textarea\",\"sort\":\"\"},{\"content\":\"\",\"name\":\"th\\u00f4ng s\\u1ed1 k\\u1ef9 thu\\u1eadt\",\"type\":\"textarea\",\"sort\":\"2\"},{\"content\":\"\",\"name\":\"H\\u01b0\\u1edbng d\\u1eabn mua h\\u00e0ng\",\"type\":\"int\",\"sort\":\"3\"}]', '');


#
# TABLE STRUCTURE FOR: product_brand
#

CREATE TABLE `product_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `alias` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `women` tinyint(1) DEFAULT NULL,
  `men` tinyint(1) DEFAULT NULL,
  `focus` tinyint(1) DEFAULT NULL,
  `title_seo` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `description_seo` text CHARACTER SET latin1,
  `keyword` text CHARACTER SET latin1,
  `sort` int(11) DEFAULT NULL,
  `lang` char(10) CHARACTER SET latin1 DEFAULT NULL,
  `gender` tinyint(1) DEFAULT '1',
  `view` tinyint(1) DEFAULT NULL,
  `home` tinyint(1) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('10', NULL, 'Chanel', 'upload/img/tải_xuống_(1).png', 'chanel', '', '0', '1', '0', NULL, NULL, NULL, '1', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('11', NULL, 'puma', 'upload/img/images_(13).jpg', 'puma', '', NULL, NULL, '1', NULL, NULL, NULL, '16', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('13', NULL, 'Lanvin', 'upload/img/th17.png', 'lanvin', '', '0', '0', '0', NULL, NULL, NULL, '4', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('14', NULL, 'H&M', 'upload/img/tải_xuống_(2).png', 'hm', '', '0', '1', '0', NULL, NULL, NULL, '5', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('15', NULL, 'Nike', 'upload/img/tải_xuống_(1).jpg', 'nike', '', '0', '0', '1', NULL, NULL, NULL, '6', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('20', NULL, 'Valentino', 'upload/img/tải_xuống_(6).png', 'valentino', '', '0', '0', '0', NULL, NULL, NULL, '7', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('21', NULL, 'Zaza', 'upload/img/tải_xuống_(4).png', 'zaza', '', '0', '0', '0', NULL, NULL, NULL, '8', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('22', NULL, 'Gucci', 'upload/img/images_(4).jpg', 'gucci', '', NULL, NULL, NULL, NULL, NULL, NULL, '15', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('23', NULL, 'Armani', 'upload/img/th4.png', 'armani', '', '0', '0', '0', NULL, NULL, NULL, '1', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('24', NULL, 'Bebe', 'upload/img/8307969_orig.jpg', 'bebe', '', '0', '0', '0', NULL, NULL, NULL, '11', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('32', NULL, 'Dior', 'upload/img/images_(14).jpg', 'dior', '', '0', '0', '0', NULL, NULL, NULL, '12', 'vi', '1', NULL, NULL, NULL);
INSERT INTO `product_brand` (`id`, `parent_id`, `name`, `image`, `alias`, `description`, `women`, `men`, `focus`, `title_seo`, `description_seo`, `keyword`, `sort`, `lang`, `gender`, `view`, `home`, `hot`) VALUES ('33', NULL, 'Mango', 'upload/img/th7.png', 'mango', '', NULL, NULL, NULL, NULL, NULL, NULL, '14', 'vi', '1', NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: product_category
#

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `title_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keyword_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description_seo` text CHARACTER SET utf8,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `home` tinyint(1) DEFAULT NULL,
  `sort` int(3) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `coupon` tinyint(1) DEFAULT NULL,
  `focus` tinyint(1) DEFAULT NULL,
  `lang` char(10) CHARACTER SET utf8 DEFAULT '1',
  `gender` tinyint(1) DEFAULT NULL,
  `banner` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product_category` (`id`, `user`, `name`, `title_seo`, `keyword_seo`, `description_seo`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `coupon`, `focus`, `lang`, `gender`, `banner`) VALUES ('26', NULL, 'danh mục 1', '', NULL, '', NULL, 'danh-muc-1', '0', '', NULL, '16', NULL, NULL, NULL, 'en', NULL, NULL);
INSERT INTO `product_category` (`id`, `user`, `name`, `title_seo`, `keyword_seo`, `description_seo`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `coupon`, `focus`, `lang`, `gender`, `banner`) VALUES ('27', NULL, 'hyundai', '', NULL, '', 'upload/img/category/hyundai.jpg', 'hyundai', '0', '', '1', '17', NULL, NULL, '1', 'vi', NULL, NULL);
INSERT INTO `product_category` (`id`, `user`, `name`, `title_seo`, `keyword_seo`, `description_seo`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `coupon`, `focus`, `lang`, `gender`, `banner`) VALUES ('28', NULL, 'acura', '', NULL, '', 'upload/img/category/acura.jpg', 'acura', '0', '', '1', '18', NULL, NULL, '1', 'vi', NULL, NULL);
INSERT INTO `product_category` (`id`, `user`, `name`, `title_seo`, `keyword_seo`, `description_seo`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `coupon`, `focus`, `lang`, `gender`, `banner`) VALUES ('29', NULL, 'toyota', '', NULL, '', 'upload/img/category/toyota.jpg', 'toyota', '0', '', '1', '19', NULL, NULL, '1', 'vi', NULL, NULL);


#
# TABLE STRUCTURE FOR: product_color
#

CREATE TABLE `product_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lang` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('2', '#31859b', 'Màu xanh lam', 'màu xanh lam', 'vi', NULL, '3', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('3', '#000000', 'Màu đen', 'màu đen', 'vi', NULL, '4', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('4', '#ff0000', 'Màu đỏ', 'màu đỏ', 'vi', NULL, '5', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('5', '#7030a0', 'Màu tím', 'màu tím', 'vi', NULL, '6', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('6', '#f79646', 'Màu cam', 'màu cam', 'vi', NULL, '7', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('7', '#ffffff', 'Màu Trắng', 'màu trắng', 'vi', NULL, '8', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('8', '#d99694', 'màu hồng', '', 'vi', NULL, '9', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('9', '#7f7f7f', 'màu ghi', 'màu ghi', 'vi', NULL, '10', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('10', '#ffc000', 'màu ánh vàng', 'màu ánh vàng', 'vi', NULL, '11', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('11', '#974806', 'màu nâu', 'màu nâu', 'vi', NULL, '12', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('12', '#4f6128', 'màu xanh xám', 'màu xanh xám', 'vi', NULL, '13', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('13', '#d8d8d8', 'Màu ánh bạc', 'màu ánh bạc', 'vi', NULL, '14', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('16', '#5f497a', 'tím', '', 'vi', NULL, '15', NULL);
INSERT INTO `product_color` (`id`, `color`, `name`, `description`, `lang`, `image`, `sort`, `parent_id`) VALUES ('17', '#fdeada', 'Màu nude', '<p>m&agrave;u nude</p>\r\n', 'vi', NULL, '2', NULL);


#
# TABLE STRUCTURE FOR: product_img
#

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `multi_image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `img_dir` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_color` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_locale
#

CREATE TABLE `product_locale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `sort` tinyint(1) DEFAULT NULL,
  `description` text CHARACTER SET latin1,
  `lang` char(10) CHARACTER SET latin1 DEFAULT NULL,
  `alias` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `title_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product_locale` (`id`, `name`, `image`, `sort`, `description`, `lang`, `alias`, `title_seo`, `description_seo`, `keyword`, `parent_id`) VALUES ('4', 'Ấn Độ', NULL, '2', '', 'vi', 'an-do', NULL, NULL, NULL, NULL);
INSERT INTO `product_locale` (`id`, `name`, `image`, `sort`, `description`, `lang`, `alias`, `title_seo`, `description_seo`, `keyword`, `parent_id`) VALUES ('5', 'Thái Lan', NULL, '3', '', 'vi', 'thai-lan', NULL, NULL, NULL, NULL);
INSERT INTO `product_locale` (`id`, `name`, `image`, `sort`, `description`, `lang`, `alias`, `title_seo`, `description_seo`, `keyword`, `parent_id`) VALUES ('6', 'Đài Loan', NULL, '4', '', 'vi', 'dai-loan', NULL, NULL, NULL, NULL);
INSERT INTO `product_locale` (`id`, `name`, `image`, `sort`, `description`, `lang`, `alias`, `title_seo`, `description_seo`, `keyword`, `parent_id`) VALUES ('7', 'Trung Quốc', NULL, '5', '', 'vi', 'trung-quoc', NULL, NULL, NULL, NULL);
INSERT INTO `product_locale` (`id`, `name`, `image`, `sort`, `description`, `lang`, `alias`, `title_seo`, `description_seo`, `keyword`, `parent_id`) VALUES ('8', 'Anh', NULL, '6', '', 'vi', 'anh', NULL, NULL, NULL, NULL);
INSERT INTO `product_locale` (`id`, `name`, `image`, `sort`, `description`, `lang`, `alias`, `title_seo`, `description_seo`, `keyword`, `parent_id`) VALUES ('9', 'Pháp', NULL, '7', '', 'vi', 'phap', NULL, NULL, NULL, NULL);
INSERT INTO `product_locale` (`id`, `name`, `image`, `sort`, `description`, `lang`, `alias`, `title_seo`, `description_seo`, `keyword`, `parent_id`) VALUES ('10', 'Mỹ', NULL, '8', '', 'vi', 'my', NULL, NULL, NULL, NULL);
INSERT INTO `product_locale` (`id`, `name`, `image`, `sort`, `description`, `lang`, `alias`, `title_seo`, `description_seo`, `keyword`, `parent_id`) VALUES ('11', 'Nhật', NULL, '10', '', 'vi', 'nhat', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: product_old
#

CREATE TABLE `product_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hot` tinyint(1) NOT NULL,
  `home` tinyint(1) NOT NULL,
  `focus` tinyint(1) NOT NULL,
  `coupon` tinyint(1) NOT NULL,
  `mostview` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_seo` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `like` int(11) NOT NULL DEFAULT '0',
  `origin` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `color` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `size` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL,
  `caption_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_price
#

CREATE TABLE `product_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `from_price` int(11) DEFAULT NULL,
  `to_price` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `lang` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product_price` (`id`, `name`, `from_price`, `to_price`, `sort`, `lang`) VALUES ('1', 'Dưới 100.000 đ', '0', '100000', '1', 'vi');
INSERT INTO `product_price` (`id`, `name`, `from_price`, `to_price`, `sort`, `lang`) VALUES ('3', '200.000 - 400.000 đ', '200000', '400000', '2', 'vi');
INSERT INTO `product_price` (`id`, `name`, `from_price`, `to_price`, `sort`, `lang`) VALUES ('4', '400.000 - 500.000 đ', '400000', '500000', '3', 'vi');
INSERT INTO `product_price` (`id`, `name`, `from_price`, `to_price`, `sort`, `lang`) VALUES ('5', '500.000 - 1000.000 đ', '500000', '1000000', '4', 'vi');
INSERT INTO `product_price` (`id`, `name`, `from_price`, `to_price`, `sort`, `lang`) VALUES ('6', '1000000 - 2000000đ', '1000000', '2000000', '5', 'vi');
INSERT INTO `product_price` (`id`, `name`, `from_price`, `to_price`, `sort`, `lang`) VALUES ('9', 'Trên 2000000đ', '2000000', '3000000', '6', 'vi');


#
# TABLE STRUCTURE FOR: product_size
#

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sort` int(11) NOT NULL,
  `lang` varchar(100) CHARACTER SET latin1 NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('1', 'XL', '', '15', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('2', 'M', '', '13', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('3', 'XS', '', '12', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('4', 'L', '', '14', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('5', 'S', '', '11', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('6', 'XXL', '', '16', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('7', '34', '', '1', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('8', '35', '', '2', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('9', '36', '', '3', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('10', '37', '', '4', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('11', '38', '', '5', 'vi', NULL);
INSERT INTO `product_size` (`id`, `name`, `size`, `sort`, `lang`, `parent_id`) VALUES ('12', '39', '', '6', 'vi', NULL);


#
# TABLE STRUCTURE FOR: product_tag
#

CREATE TABLE `product_tag` (
  `product_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `lang` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tag` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `alias` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`product_tag_id`),
  KEY `product_id` (`product_id`),
  KEY `language_id` (`lang`),
  KEY `tag` (`tag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_to_brand
#

CREATE TABLE `product_to_brand` (
  `brand_id` int(11) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_to_category
#

CREATE TABLE `product_to_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=334 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product_to_category` (`id`, `id_product`, `id_category`) VALUES ('302', '92', '26');
INSERT INTO `product_to_category` (`id`, `id_product`, `id_category`) VALUES ('328', '111', '27');
INSERT INTO `product_to_category` (`id`, `id_product`, `id_category`) VALUES ('329', '112', '27');
INSERT INTO `product_to_category` (`id`, `id_product`, `id_category`) VALUES ('330', '113', '27');
INSERT INTO `product_to_category` (`id`, `id_product`, `id_category`) VALUES ('331', '114', '28');
INSERT INTO `product_to_category` (`id`, `id_product`, `id_category`) VALUES ('332', '115', '28');
INSERT INTO `product_to_category` (`id`, `id_product`, `id_category`) VALUES ('333', '116', '28');


#
# TABLE STRUCTURE FOR: product_to_color
#

CREATE TABLE `product_to_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('67', '5', '2');
INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('68', '5', '3');
INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('69', '5', '4');
INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('70', '5', '5');
INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('71', '5', '6');
INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('72', '5', '7');
INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('75', '3', '2');
INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('76', '3', '3');
INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('79', '4', '2');
INSERT INTO `product_to_color` (`id`, `id_product`, `id_color`) VALUES ('81', '8', '3');


#
# TABLE STRUCTURE FOR: product_to_option
#

CREATE TABLE `product_to_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_to_season
#

CREATE TABLE `product_to_season` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) DEFAULT NULL,
  `id_season` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: product_to_size
#

CREATE TABLE `product_to_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `note` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product_to_size` (`id`, `id_product`, `id_size`, `note`) VALUES ('1', '120', '1', '');


#
# TABLE STRUCTURE FOR: project
#

CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `lat` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `lng` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `districtid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `project` (`id`, `name`, `lat`, `lng`, `districtid`) VALUES ('1', '13B Conic Phong Phú', '10.71240234375', '106.64177703857', '1');
INSERT INTO `project` (`id`, `name`, `lat`, `lng`, `districtid`) VALUES ('2', '13D Asia Phú Mỹ', '10.705533027649', '106.64806365967', '1');


#
# TABLE STRUCTURE FOR: province
#

CREATE TABLE `province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('1', 'Hồ Chí Minh', 'SG', '20000', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('2', 'Hà Nội', 'HN', '30000', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('3', 'Đà Nẵng', 'DDN', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('4', 'Bình Dương', 'BD', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('5', 'Đồng Nai', 'DNA', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('6', 'Khánh Hòa', 'KH', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('7', 'Hải Phòng', 'HP', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('8', 'Long An', 'LA', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('9', 'Quảng Nam', 'QNA', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('10', 'Bà Rịa Vũng Tàu', 'VT', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('11', 'Đắk Lắk', 'DDL', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('12', 'Cần Thơ', 'CT', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('13', 'Bình Thuận  ', 'BTH', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('14', 'Lâm Đồng', 'LDD', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('15', 'Thừa Thiên Huế', 'TTH', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('16', 'Kiên Giang', 'KG', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('17', 'Bắc Ninh', 'BN', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('18', 'Quảng Ninh', 'QNI', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('19', 'Thanh Hóa', 'TH', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('20', 'Nghệ An', 'NA', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('21', 'Hải Dương', 'HD', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('22', 'Gia Lai', 'GL', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('23', 'Bình Phước', 'BP', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('24', 'Hưng Yên', 'HY', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('25', 'Bình Định', 'BDD', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('26', 'Tiền Giang', 'TG', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('27', 'Thái Bình', 'TB', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('28', 'Bắc Giang', 'BG', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('29', 'Hòa Bình', 'HB', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('30', 'An Giang', 'AG', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('31', 'Vĩnh Phúc', 'VP', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('32', 'Tây Ninh', 'TNI', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('33', 'Thái Nguyên', 'TN', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('34', 'Lào Cai', 'LCA', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('35', 'Nam Định', 'NDD', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('36', 'Quảng Ngãi', 'QNG', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('37', 'Bến Tre', 'BTR', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('38', 'Đắk Nông', 'DNO', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('39', 'Cà Mau', 'CM', '120000', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('40', 'Vĩnh Long', 'VL', '3', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('41', 'Ninh Bình', 'NB', '320', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('42', 'Phú Thọ', 'PT', '25', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('43', 'Ninh Thuận', 'NT', '120000', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('44', 'Phú Yên', 'PY', '123456', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('45', 'Hà Nam', 'HNA', '40000', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('46', 'Hà Tĩnh', 'HT', '12000', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('47', 'Đồng Tháp', 'DDT', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('48', 'Sóc Trăng', 'ST', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('49', 'Kon Tum', 'KT', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('50', 'Quảng Bình', 'QB', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('51', 'Quảng Trị', 'QT', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('52', 'Trà Vinh', 'TV', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('53', 'Hậu Giang', 'HGI', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('54', 'Sơn La', 'SL', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('55', 'Bạc Liêu', 'BL', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('56', 'Yên Bái', 'YB', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('57', 'Tuyên Quang', 'TQ', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('58', 'Điện Biên', 'DDB', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('59', 'Lai Châu', 'LCH', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('60', 'Lạng Sơn', 'LS', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('61', 'Hà Giang', 'HG', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('62', 'Bắc Kạn', 'BK', '0', NULL);
INSERT INTO `province` (`id`, `name`, `code`, `price`, `sort`) VALUES ('63', 'Cao Bằng', 'CB', '0', NULL);


#
# TABLE STRUCTURE FOR: questions
#

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sanpham` int(11) DEFAULT NULL,
  `comment` text CHARACTER SET utf8,
  `flg` int(11) DEFAULT NULL,
  `reply` int(11) DEFAULT NULL,
  `review` tinyint(1) DEFAULT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('13', '5', 'hhhhggg', NULL, '0', NULL, 'sieuwebqt', 'dangtranmanh@gmail.com', '1505724581', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('14', '5', 'hhhhggg', NULL, '0', NULL, 'sieuwebqt', 'dangtranmanh@gmail.com', '1505724675', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('15', '5', 'noi dung', NULL, '0', NULL, 'nguyen đát', 'dat@gmail.com', '1505725003', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('16', '5', 'noi dung câu hỏi', NULL, '0', NULL, 'tran manh', 'tranmanh@gmail.com', '1505725440', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('17', '5', 'noi dung cua toi', NULL, '0', NULL, 'khowebqts', 'tranmanh@gmail.com', '1505725631', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('18', '5', 'noi dung', NULL, '0', '1', 'tranmanh', 'tranmanh@gmail.com', '1505725689', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('19', '5', 'noi dung', NULL, '0', '1', 'sieuwebqt', 'tranmanh@gmail.com', '1505725843', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('20', '5', 'noi dung', NULL, '0', '1', 'sieuwebqt', 'tranmanh@gmail.com', '1505725878', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('21', '5', 'noi dung', NULL, '0', '1', 'sieuwebqt', 'tranmanh@gmail.com', '1505725928', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('22', '5', 'noi dung câu hỏi', NULL, '0', '1', 'tranmanh', 'dangtranmanh@gmail.com', '1505726276', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('23', '5', 'noi dung cau tra loi', NULL, '21', '1', 'van đạt', 'dat@gmail.com', '1505726568', NULL);
INSERT INTO `questions` (`id`, `id_sanpham`, `comment`, `flg`, `reply`, `review`, `user_name`, `user_email`, `time`, `date`) VALUES ('24', '4', 'sâssa', NULL, '0', '1', 'Vân', 'buivananh.th@gmail.com', '1505981779', NULL);


#
# TABLE STRUCTURE FOR: raovat
#

CREATE TABLE `raovat` (
  `home` tinyint(1) DEFAULT NULL,
  `focus` tinyint(1) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `price` int(11) DEFAULT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `description_seo` text COLLATE utf8_unicode_ci,
  `title_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `note` text COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `caption_1` text COLLATE utf8_unicode_ci,
  `caption_2` text COLLATE utf8_unicode_ci,
  `locale` int(11) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  `quantity` int(11) DEFAULT '0',
  `lang` char(10) COLLATE utf8_unicode_ci DEFAULT 'vi',
  `caption_3` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` int(8) DEFAULT NULL,
  `tags` text COLLATE utf8_unicode_ci,
  `raovat_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `multi_image` text COLLATE utf8_unicode_ci,
  `img_dir` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tinhtrang` tinyint(1) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `style` int(11) DEFAULT NULL,
  `id_value` int(11) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `raovat` (`home`, `focus`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `title_seo`, `keyword_seo`, `detail`, `note`, `category_id`, `caption_1`, `caption_2`, `locale`, `sort`, `quantity`, `lang`, `caption_3`, `time`, `tags`, `raovat_dir`, `multi_image`, `img_dir`, `status`, `tinhtrang`, `user_id`, `id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`) VALUES ('1', NULL, '0', '1', '0', '0', '<p>n&ocirc;i dung m&ocirc; ta</p>\r\n', '', '', '', '<p>noi dung chi tiet</p>\r\n', NULL, NULL, NULL, '<p>noi dung phu</p>\r\n', '0', '1', '0', 'vi', NULL, '1504065201', NULL, NULL, NULL, NULL, '0', NULL, '620', '1', NULL, NULL, '0', 'bán nhà tai hà nội', '', 'ban-nha-tai-ha-noi', NULL, NULL);
INSERT INTO `raovat` (`home`, `focus`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `title_seo`, `keyword_seo`, `detail`, `note`, `category_id`, `caption_1`, `caption_2`, `locale`, `sort`, `quantity`, `lang`, `caption_3`, `time`, `tags`, `raovat_dir`, `multi_image`, `img_dir`, `status`, `tinhtrang`, `user_id`, `id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`) VALUES ('1', NULL, '0', '1', '12424334', '12332342', '<p>n&ocirc;i dung m&ocirc; ta</p>\r\n', '', '', '', '<p>noi dung chi tiet</p>\r\n', NULL, '29', NULL, '<p>noi dung phu</p>\r\n', '6', '2', '0', 'vi', NULL, '1504068779', NULL, '30082017', NULL, NULL, '0', NULL, '620', '2', NULL, NULL, '14', 'bán nhà tai hà nội đường số 237', '', 'ban-nha-tai-ha-noi-duong-so-237', 'db652781fa07e94e75c9023c9de373cf.jpg', NULL);
INSERT INTO `raovat` (`home`, `focus`, `view`, `active`, `price`, `price_sale`, `description`, `description_seo`, `title_seo`, `keyword_seo`, `detail`, `note`, `category_id`, `caption_1`, `caption_2`, `locale`, `sort`, `quantity`, `lang`, `caption_3`, `time`, `tags`, `raovat_dir`, `multi_image`, `img_dir`, `status`, `tinhtrang`, `user_id`, `id`, `style`, `id_value`, `brand`, `name`, `code`, `alias`, `image`, `hot`) VALUES ('1', '1', '12', '1', '1234566', '1234333', '<p>n&ocirc;i dung m&ocirc; ta</p>\r\n', '', '', '', '<p>noi dung chi tiet</p>\r\n', NULL, '28', NULL, '<p>noi dung phu</p>\r\n', '5', '3', '0', 'vi', NULL, '1516353599', NULL, '30082017', NULL, NULL, '0', NULL, NULL, '3', NULL, NULL, '10', 'bán nhà tai hà nội viet nam', '', 'ban-nha-tai-ha-noi-viet-nam', '766564be313697c3bdae612b28a89d0a.jpg', '1');


#
# TABLE STRUCTURE FOR: raovat_category
#

CREATE TABLE `raovat_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `home` tinyint(1) DEFAULT '0',
  `sort` int(3) DEFAULT '0',
  `hot` tinyint(1) DEFAULT '0',
  `focus` tinyint(1) DEFAULT '0',
  `lang` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keyword_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description_seo` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('20', 'Điện thoại, viễn thông ', 'upload/img/phone.png', 'dien-thoai-vien-thong', '0', '                                                                                                                                                                                                            ', '0', '1', '0', '0', 'vi', NULL, NULL, NULL);
INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('27', 'Ô tô, xe máy, xe đạp', 'upload/img/oto.png', 'o-to-xe-may-xe-dap', '0', '', '0', '0', '0', '0', 'vi', NULL, NULL, NULL);
INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('28', 'Xây dựng, công nghiệp', 'upload/img/connghiep.png', 'xay-dung-cong-nghiep', '0', '                                                                                                                                        ', '0', '0', '0', '0', 'vi', NULL, NULL, NULL);
INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('29', 'Thời trang, phụ kiện', 'upload/img/thoitrang.png', 'thoi-trang-phu-kien', '0', '', '0', '0', '0', '0', 'vi', NULL, NULL, NULL);
INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('30', 'Mẹ & Bé', 'upload/img/me_be.png', 'me-be', '0', '', '0', '0', '0', '0', 'vi', NULL, NULL, NULL);
INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('31', 'Sức khỏe, sắc đẹp', 'upload/img/suckhoe.png', 'suc-khoe-sac-dep', '0', '', '0', '0', '0', '0', 'vi', NULL, NULL, NULL);
INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('33', 'Nội thất, ngoại thất', 'upload/img/noithat.png', 'noi-that-ngoai-that', '0', '', '0', '0', '0', '0', 'vi', NULL, NULL, NULL);
INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('34', 'Sách, đồ văn phòng', 'upload/img/sach.png', 'sach-do-van-phong', '0', '', '0', '0', '0', '0', 'vi', NULL, NULL, NULL);
INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('35', 'Hoa, quà tặng, đồ chơi', 'upload/img/qua_tang.png', 'hoa-qua-tang-do-choi', '0', '', '0', '0', '0', '0', 'vi', NULL, NULL, NULL);
INSERT INTO `raovat_category` (`id`, `name`, `image`, `alias`, `parent_id`, `description`, `home`, `sort`, `hot`, `focus`, `lang`, `title_seo`, `keyword_seo`, `description_seo`) VALUES ('42', 'Khác', '', 'khac', '0', '', '0', '2', '1', '1', 'vi', '', NULL, '');


#
# TABLE STRUCTURE FOR: raovat_images
#

CREATE TABLE `raovat_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `id_item` int(11) DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `url` char(200) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `raovat_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('1', NULL, '3', 'upload/img/raovats_multi/f46482c87ab814e5d5ea59819e568564.jpg', NULL, NULL, NULL);
INSERT INTO `raovat_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('2', NULL, '3', 'upload/img/raovats_multi/f4b467b6d383eb5d6062b2fa9c9c0708.jpg', NULL, NULL, NULL);
INSERT INTO `raovat_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('3', NULL, '3', 'upload/img/raovats_multi/e86f742e7d986de26413443600fa8535.jpg', NULL, NULL, NULL);
INSERT INTO `raovat_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('4', NULL, '3', 'upload/img/raovats_multi/d640c2db815fbba330306bdbdc9e9326.jpg', NULL, NULL, NULL);
INSERT INTO `raovat_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('5', NULL, '2', 'upload/img/raovats_multi/3915f302b19fa28fc4001d6a66238681.jpg', NULL, NULL, NULL);
INSERT INTO `raovat_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('6', NULL, '2', 'upload/img/raovats_multi/866917b6bab0b8c3eeb0f52f45efd867.jpg', NULL, NULL, NULL);
INSERT INTO `raovat_images` (`id`, `name`, `id_item`, `image`, `url`, `link`, `sort`) VALUES ('7', NULL, '2', 'upload/img/raovats_multi/a8f9dbaa6c627b3a47a0f442cbe0c1ab.jpg', NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: raovat_tag
#

CREATE TABLE `raovat_tag` (
  `raovat_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `raovat_id` int(11) NOT NULL,
  `lang` varchar(11) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `alias` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`raovat_tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: raovat_to_category
#

CREATE TABLE `raovat_to_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_raovat` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `raovat_to_category` (`id`, `id_raovat`, `id_category`) VALUES ('18', '3', '27');
INSERT INTO `raovat_to_category` (`id`, `id_raovat`, `id_category`) VALUES ('19', '3', '28');
INSERT INTO `raovat_to_category` (`id`, `id_raovat`, `id_category`) VALUES ('26', '2', '27');
INSERT INTO `raovat_to_category` (`id`, `id_raovat`, `id_category`) VALUES ('27', '2', '28');
INSERT INTO `raovat_to_category` (`id`, `id_raovat`, `id_category`) VALUES ('28', '2', '29');


#
# TABLE STRUCTURE FOR: resources
#

CREATE TABLE `resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `resource` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `icon` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `active` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('10', '0', 'product', 'Quản lý sản phẩm', NULL, '3', 'fa-bars', '', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('11', '10', 'products', 'Danh sách sản phẩm', NULL, '1', 'fa-files-o', 'vnadmin/product/products', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('13', '116', 'listColor', 'Màu sắc', NULL, '3', 'fa-circle-o', 'vnadmin/product_color/listColor', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('14', '116', 'listprice', 'Khoảng giá', NULL, '4', 'fa-circle-o', 'vnadmin/product_price/listprice', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('15', '116', 'listOption', 'Kích thước', NULL, '5', 'fa-circle-o', 'vnadmin/options/listOption', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('17', '0', 'menu', 'Quản lý menu', NULL, '7', 'fa-bars', 'vnadmin/menu/menulist', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('18', '10', 'category_pro', 'Danh mục sản phẩm', NULL, '2', 'fa-files-o', 'vnadmin/product/categories', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('19', '173', 'comments', 'Đánh giá bình luận', NULL, '3', 'fa-comments-o', 'vnadmin/comment/comments', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('20', '173', 'questions', 'Danh sách hỏi đáp', NULL, '4', 'fa-question-circle', 'vnadmin/comment/questions', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('22', '174', 'listpro', 'Thẻ tags sản phẩm', NULL, '5', 'fa-tag', 'vnadmin/tag/listpro', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('25', '0', 'news', 'Quản lý tin bài', NULL, '6', 'fa-newspaper-o', '', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('26', '25', 'newslist', 'Danh sách tin', NULL, '1', 'fa-file-text-o', 'vnadmin/news/newslist', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('28', '25', 'tagsnews', 'Tags tin tức', NULL, '3', 'fa fa-tag', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('29', '0', 'media', 'Quản lý media', NULL, '1', 'fa-picture-o', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('30', '29', 'listAll', 'Danh sách media', NULL, '1', 'fa-file-image-o', 'vnadmin/media/listAll', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('31', '25', 'categories', 'Danh mục tin', NULL, '2', 'fa-newspaper-o', 'vnadmin/news/categories', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('32', '29', 'categories', 'Danh mục media', NULL, '2', 'fa-file-image-o', 'vnadmin/media/categories', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('33', '0', 'users', 'Quản lý thành viên', NULL, '16', 'fa-users', '', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('34', '33', 'smslist', 'Tin Nhắn SMS', NULL, '6', 'fa-commenting-o', 'vnadmin/users/smslist', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('39', '0', 'pages', 'Quản lý nội dung', NULL, '9', 'fa-file-o', 'vnadmin/pages/pagelist', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('40', '0', 'video', 'Quản Lý Video', NULL, '2', 'fa-video-camera', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('42', '40', 'listAll', 'Danh sách video', NULL, '1', 'fa-file-video-o', 'vnadmin/video/listAll', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('43', '40', 'category_video', 'Danh mục video', NULL, '2', 'fa-video-camera', 'vnadmin/video/categories', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('44', '107', 'listraovat', 'Danh sách rao vặt', NULL, '1', 'fa-files-o', 'vnadmin/raovat/listraovat', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('49', '107', 'categories', 'Danh mục rao vặt', NULL, '2', 'fa-files-o', 'vnadmin/raovat/categories', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('53', '0', 'imageupload', 'Quản lý banner', NULL, '8', 'fa-file-image-o', 'vnadmin/imageupload/banners', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('54', '162', 'listWard', 'Quản lý phường xã', NULL, '3', 'fa-map-signs', 'vnadmin/province/listWard', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('56', '162', 'listDistric', 'Quản lý quận huyện', NULL, '2', 'fa-map-marker', 'vnadmin/province/listDistric', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('57', '162', 'street', 'Quản lý đường phố', NULL, '4', 'fa-road', 'vnadmin/province/listStreet', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('58', '97', 'soldout', 'danh sách hết hàng', NULL, '1', 'fa-circle-o', 'admin/report/soldout', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('63', '10', 'cat_add', 'Thêm - Sửa danh mục sp', NULL, '9', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('64', '95', 'maps', 'Cấu hình bản đồ Maps', NULL, '1', ' fa-map-o', 'vnadmin/admin/bando_map', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('65', '10', 'add', 'Thêm -Sửa sản phẩm', NULL, '7', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('66', '17', 'delete', 'Xóa menu', NULL, '2', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('67', '10', 'delete_once', 'Xóa sản phẩm', NULL, '8', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('95', '0', 'admin', 'Hệ thống', NULL, '17', 'fa-gears text-red', '', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('96', '95', 'site_option', 'Cấu hình hệ thống', NULL, '0', 'fa-circle-o text-red', 'vnadmin/admin/site_option', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('97', '0', 'report', 'Báo cáo-Thống kê', NULL, '19', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('98', '104', 'listProvince', 'Phí vận chuyển', NULL, '3', 'fa-truck', 'vnadmin/order/listProvince', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('99', '90', 'categories', 'Danh mục share', NULL, '0', NULL, NULL, NULL);
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('100', '90', 'cat_add', 'Thêm danh mục share', NULL, '0', NULL, NULL, NULL);
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('101', '90', 'cat_edit', 'Sửa danh mục share', NULL, '0', NULL, NULL, NULL);
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('102', '90', 'delete_cat', 'Xóa danh mục share', NULL, '0', NULL, NULL, NULL);
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('103', '97', 'bestsellers', 'Hàng bán chạy', NULL, '2', 'fa-circle-o', 'admin/report/bestsellers', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('104', '0', 'order', 'Quản lý giỏ hàng', NULL, '4', 'fa-shopping-cart', '', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('105', '104', 'orders', 'Danh sách đặt hàng', NULL, '1', 'fa-cart-arrow-down', 'vnadmin/order/orders', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('106', '104', 'listSale', 'Mã giảm giá', NULL, '2', 'fa-files-o', 'vnadmin/order/listSale', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('107', '0', 'raovat', 'Quản lý rao vặt', NULL, '13', 'fa-bars', '', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('108', '0', 'inuser', 'Ý kiến khách hàng', NULL, '0', 'fa-user-plus', 'vnadmin/inuser/categories', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('109', '107', 'tagtinrao', 'Tags tin rao', NULL, '3', 'fa-tag', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('110', '0', 'email', 'Quản lý email', NULL, '14', ' fa-envelope-o ', 'vnadmin/email/emails', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('111', '0', 'support', 'Hỗ trợ  trực tuyến', NULL, '15', 'fa-life-ring', 'vnadmin/support/listSuport', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('112', '95', 'store_shopping', 'Chuỗi cửa hàng', NULL, '5', 'fa-files-o', 'vnadmin/store/Ds_shopping', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('113', '116', 'listBrand', 'Thương hiệu', NULL, '1', 'fa-circle-o', 'vnadmin/product_brand/listBrand', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('114', '116', 'listLocale', 'Xuất sứ', NULL, '2', 'fa-circle-o', 'vnadmin/locale/listLocale', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('115', '0', 'contact', 'Quản lý liên hệ', NULL, '10', 'fa-bars', 'vnadmin/contact/contacts', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('116', '0', 'attribute', 'Thuộc tính sản phẩm', NULL, '5', 'fa-bars', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('117', '108', 'cate_add', 'Thêm và Sửa', NULL, '2', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('118', '108', 'delete_cat_once', 'Xóa', NULL, '3', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('119', '108', 'categories', 'ý kiến khách hàng', NULL, '1', 'fa-files-o', 'vnadmin/inuser/categories', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('120', '17', 'addmenu', 'Thêm - Sửa menu', NULL, '0', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('121', '10', 'del_cat_once', 'Xóa danh mục sp', NULL, '10', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('122', '29', 'add', 'Thêm -Sửa media', NULL, '3', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('123', '29', 'delete_once', 'Xóa media', NULL, '4', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('124', '29', 'cat_add', 'Thêm - Sửa danh mục media', NULL, '5', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('125', '29', 'del_cat_once', 'Xóa danh mục media', NULL, '6', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('126', '40', 'add', 'Thêm sửa video', NULL, '3', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('127', '40', 'delete_once', 'Xóa video', NULL, '4', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('128', '40', 'cat_add', 'Thêm danh mục video', NULL, '5', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('129', '40', 'del_cat_once', 'Xóa danh mục video', NULL, '6', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('130', '10', 'delete_once_question', 'Xóa hỏi đáp', NULL, '12', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('131', '10', 'delete_once_comment', 'Xóa bình luận', NULL, '11', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('132', '104', 'delete_once_orders', 'Xóa đơn hàng', NULL, '4', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('133', '104', 'addSale', 'Thêm - Sửa mã giảm giá', NULL, '5', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('134', '104', 'del_once_sale', 'Xóa mã giảm giá', NULL, '6', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('135', '116', 'addbrand', 'Thêm - Sửa thương hiệu', NULL, '6', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('136', '116', 'delete_brand_once', 'Xóa thương hiệu', NULL, '7', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('137', '116', 'addlocale', 'Thêm - Sửa xuất sứ', NULL, '7', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('138', '116', 'delete_locale_once', 'Xóa xuất sứ', NULL, '8', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('139', '116', 'addcolor', 'Thêm - Sửa màu sắc', NULL, '9', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('140', '116', 'delete_color_once', 'Xóa màu sắc', NULL, '10', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('141', '116', 'addprice', 'Thêm - Sửa khoản giá', NULL, '11', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('142', '116', 'delete_price_once', 'Xóa khoảng giá', NULL, '12', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('143', '116', 'addoption', 'Thêm - Sửa kích thước', NULL, '12', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('144', '116', 'delete_option_once', 'Xóa kích thước', NULL, '13', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('145', '25', 'addnews', 'Thêm - Sửa tin tức', NULL, '4', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('146', '25', 'delete_once_news', 'Xóa tin tức', NULL, '5', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('147', '25', 'cat_add_news', 'Thêm - Sửa danh mục tin', NULL, '6', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('148', '25', 'del_catnews_once', 'Xóa danh mục tin', NULL, '7', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('149', '53', 'addbanner', 'Thêm - Sửa banner', NULL, '1', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('150', '53', 'delete_Banner_once', 'Xóa banner', NULL, '2', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('151', '39', 'addpage', 'Thêm - Sửa nội dung', NULL, '1', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('152', '39', 'delete_page_once', 'Xóa nội dung', NULL, '2', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('153', '115', 'delete', 'Xóa liên hệ', NULL, '1', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('154', '107', 'add', 'Thêm - Sửa rao vặt', NULL, '4', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('155', '107', 'delete_raovat_once', 'Xóa tin rao', NULL, '5', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('156', '107', 'cat_add', 'Thêm - Sửa danh mục tin rao', NULL, '6', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('157', '107', 'del_cattinrao_once', 'Xóa danh mục tin rao', NULL, '7', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('158', '110', 'delete', 'Xóa email', NULL, '1', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('159', '111', 'add', 'Thêm - Sửa hỗ trợ trực tuyến', NULL, '1', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('160', '111', 'delete_support_once', 'Xóa hỗ trợ trực tuyến', NULL, '2', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('161', '33', 'delete_users_once', 'Xóa thành viên', NULL, '1', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('162', '0', 'province', 'Danh sách quan huyện', NULL, '18', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('163', '33', 'add_users', 'Thêm thành viên quan trị', NULL, '1', '', 'vnadmin/users/add_users', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('164', '33', 'delete_users_once', 'Xóa thành viên quản trị', NULL, '10', '', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('165', '33', 'listuser_admin', 'Danh sách tài khoản quản trị', NULL, '0', '', 'vnadmin/users/listuser_admin', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('166', '33', 'listusers', 'Danh sách thành viên', NULL, '0', '', 'vnadmin/users/listusers', '1');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('167', '17', 'menulist', 'Danh sách menu', NULL, '1', '', 'vnadmin/menu/menulist', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('168', '53', 'banners', 'Danh sách banner', NULL, '0', '', 'vnadmin/imageupload/banners', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('169', '39', 'pagelist', 'Danh sách nội dung', NULL, '0', '', 'vnadmin/pages/pagelist', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('170', '110', 'emails', 'Danh sách email', NULL, '0', '', 'vnadmin/email/emails', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('171', '115', 'contacts', 'Danh sách liên hệ', NULL, '0', '', 'vnadmin/contact/contacts', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('172', '111', 'listSuport', 'Danh sách support', NULL, '0', '', 'vnadmin/support/listSuport', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('173', '0', 'comment', 'Quản lý bình luận', NULL, '7', 'fa-comments-o', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('174', '0', 'tag', 'Quản lý thẻ tag', NULL, '6', 'fa-tags', '', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('175', '174', 'listnew', 'Thẻ tags tin tức', NULL, '2', 'fa-tag', 'vnadmin/tag/listnew', '0');
INSERT INTO `resources` (`id`, `parent_id`, `resource`, `name`, `description`, `sort`, `icon`, `alias`, `active`) VALUES ('177', '95', 'setup_product', ' Cấu hình sản phẩm', NULL, '20', 'fa-gears', 'vnadmin/admin/setup_product', '1');


#
# TABLE STRUCTURE FOR: site_log
#

CREATE TABLE `site_log` (
  `site_log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_of_visits` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `requested_url` tinytext CHARACTER SET utf8,
  `referer_page` tinytext CHARACTER SET utf8,
  `page_name` tinytext CHARACTER SET utf8,
  `query_string` tinytext CHARACTER SET utf8,
  `user_agent` tinytext CHARACTER SET utf8,
  `is_unique` tinyint(1) DEFAULT '0',
  `access_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `visits_count` int(11) DEFAULT '0',
  PRIMARY KEY (`site_log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=400 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('399', '1', '118.70.74.179', '/pm_qts/pm/xuat-web', 'http://websiteqts.com/pm_qts//pm/header_footer', 'pm/xuat_web', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:31:44', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('398', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:35', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('397', '1', '118.70.74.179', '/pm_qts/pm/check-show-view-home', 'http://websiteqts.com/pm_qts//pm/header_footer', 'home/check_show_view_home', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:34', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('396', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:33', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('395', '1', '118.70.74.179', '/pm_qts/pm/check-show-view-home', 'http://websiteqts.com/pm_qts//pm/header_footer', 'home/check_show_view_home', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:32', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('394', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:30', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('393', '1', '118.70.74.179', '/pm_qts/pm/menu_image', 'http://websiteqts.com/pm_qts//pm/header_footer', 'Home/get_view_khoi', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:30', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('392', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:22', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('391', '1', '118.70.74.179', '/pm_qts/pm/update-slide', 'http://websiteqts.com/pm_qts//pm/header_footer', 'banner/update_slide', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:21', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('390', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:19', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('388', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:14', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('389', '1', '118.70.74.179', '/pm_qts/pm/update-image', 'http://websiteqts.com/pm_qts//pm/header_footer', 'Header_footer/update_image_theme', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:19', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('386', '1', '118.70.74.179', '/pm_qts/', '', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:04', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('387', '1', '118.70.74.179', '/pm_qts/pm/menu_image', 'http://websiteqts.com/pm_qts//pm/header_footer', 'Home/get_view_khoi', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:14', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('385', '1', '118.70.74.179', '/pm_qts/pm/container_config', 'http://websiteqts.com/pm_qts//pm/header_footer', 'khung/container_config', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:30:01', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('384', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts//pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:55', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('383', '1', '118.70.74.179', '/pm_qts//pm/header_footer', 'http://websiteqts.com/pm_qts/pm/setup_home', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:55', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('382', '1', '118.70.74.179', '/pm_qts/pm/chonkhoi_content', 'http://websiteqts.com/pm_qts/pm/setup_home', 'pm/chonkhoi_content', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:54', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('381', '1', '118.70.74.179', '/pm_qts/pm/setup_home', 'http://websiteqts.com/pm_qts/pm', 'Home/index', 'me', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:52', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('380', '1', '118.70.74.179', '/pm_qts/pm/chon_khung', 'http://websiteqts.com/pm_qts/pm', 'Khung/chon_khung', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:51', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('379', '1', '118.70.74.179', '/pm_qts/pm', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Pm/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:50', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('378', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:37', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('377', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:36', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('376', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:12', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('375', '1', '118.70.74.179', '/pm_qts/pm/update-image', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/update_image_theme', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:29:11', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('373', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:26:21', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('374', '1', '118.70.74.179', '/pm_qts/modal/login', 'http://websiteqts.com/pm_qts/', 'modal/login', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:27:43', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('372', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts/pm', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:26:20', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('371', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:25:41', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('370', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:25:41', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('369', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:24:29', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('368', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:24:29', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('367', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:24:19', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('366', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts/pm', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:24:19', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('277', '1', '118.70.74.179', '/pm_qts/', '', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:16:22', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('278', '1', '118.70.74.179', '/pm_qts/pm', '', 'Pm/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:16:25', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('279', '1', '118.70.74.179', '/pm_qts/pm/reset-code', 'http://websiteqts.com/pm_qts/pm', 'pm/reset_code', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:16:28', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('280', '1', '118.70.74.179', '/pm_qts/', '', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:16:30', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('281', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts/pm', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:16:32', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('282', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:16:33', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('283', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:16:48', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('284', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:16:49', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('285', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:17:04', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('286', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:17:05', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('287', '1', '118.70.74.179', '/pm_qts/pm/update-image', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/update_image_theme', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:17:37', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('288', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 09:17:38', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('289', NULL, '118.70.74.179', '/pm_qts/', '', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:31:02', '1');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('290', '1', '118.70.74.179', '/pm_qts/pm', '', 'Pm/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:31:06', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('291', '1', '118.70.74.179', '/pm_qts/pm/reset-code', 'http://websiteqts.com/pm_qts/pm', 'pm/reset_code', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:31:10', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('292', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts/pm', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:31:13', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('293', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:31:14', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('294', NULL, '150.70.188.168', '/pm_qts/', '', 'home/index', '', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '0', '2018-03-28 16:32:04', '1');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('295', '1', '118.70.74.179', '/pm_qts/pm/reset-code', 'http://websiteqts.com/pm_qts/pm/header_footer', 'pm/reset_code', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:33:09', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('296', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:33:10', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('297', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts/pm', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:03', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('298', '1', '118.70.74.179', '/pm_qts/pm', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Pm/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:07', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('299', '1', '118.70.74.179', '/pm_qts/pm/chon_khung', 'http://websiteqts.com/pm_qts/pm', 'Khung/chon_khung', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:09', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('300', '1', '118.70.74.179', '/pm_qts/pm/setup_home', 'http://websiteqts.com/pm_qts/pm', 'Home/index', 'me', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:09', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('301', '1', '118.70.74.179', '/pm_qts/pm/chonkhoi_content', 'http://websiteqts.com/pm_qts/pm/setup_home', 'pm/chonkhoi_content', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:11', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('302', '1', '118.70.74.179', '/pm_qts//pm/header_footer', 'http://websiteqts.com/pm_qts/pm/setup_home', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:12', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('303', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts//pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:13', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('304', '1', '118.70.74.179', '/pm_qts/pm/reset-code', 'http://websiteqts.com/pm_qts//pm/header_footer', 'pm/reset_code', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:16', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('305', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:16', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('306', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts//pm/header_footer', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:18', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('307', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:18', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('308', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:56', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('309', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:42:57', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('310', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:43:04', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('311', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:43:04', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('312', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:43:09', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('313', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:43:09', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('314', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:43:20', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('315', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:43:20', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('316', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:52:53', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('317', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:52:53', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('318', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts//pm/header_footer', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:53:16', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('319', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:53:17', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('320', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:57:58', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('321', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:57:58', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('322', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts//pm/header_footer', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:58:00', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('323', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:58:01', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('324', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:58:05', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('325', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:58:05', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('326', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:58:08', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('327', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:58:08', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('328', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts//pm/header_footer', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:58:50', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('329', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:58:50', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('330', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:59:07', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('331', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:59:07', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('332', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:59:35', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('333', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:59:35', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('334', '1', '118.70.74.179', '/pm_qts/danh-muc/rau-cu-qua.html', 'http://websiteqts.com/pm_qts/', 'products/pro_bycategory', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:59:45', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('335', '1', '118.70.74.179', '/pm_qts/404_override', 'http://websiteqts.com/pm_qts/', 'error/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:59:45', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('336', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/404_override', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 16:59:49', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('337', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:00:20', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('338', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:00:20', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('339', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:01:08', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('340', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:01:08', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('341', '1', '118.70.74.179', '/pm_qts/modal/login', 'http://websiteqts.com/pm_qts/', 'modal/login', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:01:09', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('342', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:01:17', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('343', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:03:51', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('344', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:03:51', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('345', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:03:55', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('346', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:03:55', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('347', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts//pm/header_footer', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:04:34', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('348', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:04:35', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('349', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:04:40', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('350', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:04:40', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('351', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:05:20', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('352', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:05:20', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('353', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts//pm/header_footer', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:05:23', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('354', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:05:24', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('355', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:15:51', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('356', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/404_override', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:15:52', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('357', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:16:15', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('358', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/404_override', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:16:35', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('359', '1', '118.70.74.179', '/pm_qts/pm/coppy', 'http://websiteqts.com/pm_qts/pm/header_footer', 'Header_footer/coppy_paste_value', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:17:15', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('360', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-28 17:17:15', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('361', NULL, '118.70.74.179', '/pm_qts/', '', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:13:57', '1');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('362', '1', '118.70.74.179', '/pm_qts/pm', '', 'Pm/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:14:42', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('363', '1', '118.70.74.179', '/pm_qts/pm/header_footer', 'http://websiteqts.com/pm_qts/pm', 'Header_footer/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:14:51', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('364', '1', '118.70.74.179', '/pm_qts/', 'http://websiteqts.com/pm_qts/pm/header_footer', 'home/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:14:51', '0');
INSERT INTO `site_log` (`site_log_id`, `no_of_visits`, `ip_address`, `requested_url`, `referer_page`, `page_name`, `query_string`, `user_agent`, `is_unique`, `access_date`, `visits_count`) VALUES ('365', '1', '118.70.74.179', '/pm_qts/vnadmin', '', 'defaults/index', '', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '0', '2018-03-29 09:24:01', '0');


#
# TABLE STRUCTURE FOR: site_option
#

CREATE TABLE `site_option` (
  `id` int(11) NOT NULL,
  `coppy_right` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `site_name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `slogan` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `link_instagram` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `site_logo` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `site_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `site_title_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `site_keyword` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `site_keyword_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `site_description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `link_sky` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `link_printer` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `link_linkedin` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `site_email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `site_fanpage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `site_video` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `WM_text` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `WM_color` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `WM_size` int(10) DEFAULT NULL,
  `hotline1` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `hotline2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `hotline3` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `address` text CHARACTER SET utf8,
  `link_tt` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `favicon` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `company_name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `shipping` text CHARACTER SET utf8,
  `site_promo` text CHARACTER SET utf8,
  `thanhtoan_tienmat` text CHARACTER SET utf8,
  `thanhtoan_chuyenkhoan` text CHARACTER SET utf8,
  `hdfMap` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `map_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `map_adrdress` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `map_phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dia_chi_timkiem` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lang` char(10) CHARACTER SET utf8 DEFAULT '1',
  `link_gg` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_youtube` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `face_id` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timeopen` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `chat` text CHARACTER SET utf8,
  `site_logo_footer` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `map_iframe` text CHARACTER SET utf8 NOT NULL,
  `input_text_1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map_footer` text COLLATE utf8_unicode_ci NOT NULL,
  `config_pro` text COLLATE utf8_unicode_ci NOT NULL,
  `config_pro_content` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(3) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `site_option` (`id`, `coppy_right`, `site_name`, `slogan`, `link_instagram`, `site_logo`, `site_title`, `site_title_en`, `site_keyword`, `site_keyword_en`, `site_description`, `link_sky`, `link_printer`, `link_linkedin`, `site_email`, `site_fanpage`, `site_video`, `WM_text`, `WM_color`, `WM_size`, `hotline1`, `hotline2`, `hotline3`, `address`, `link_tt`, `favicon`, `company_name`, `shipping`, `site_promo`, `thanhtoan_tienmat`, `thanhtoan_chuyenkhoan`, `hdfMap`, `map_title`, `map_adrdress`, `map_phone`, `dia_chi_timkiem`, `lang`, `link_gg`, `link_youtube`, `face_id`, `timeopen`, `chat`, `site_logo_footer`, `map_iframe`, `input_text_1`, `domain`, `map_footer`, `config_pro`, `config_pro_content`, `active`) VALUES ('1', 'Bản quyền thuộc về Công ty TNHH gỗ Đại Long | Thiết kế bởi QTS', 'CÔNG TY CỔ PHẦN CÔNG NGHỆ QTS', 'KPIMEX IMPORT EXPORT & TRADING CO., LTD', NULL, 'upload/img/logo/logo7.png', 'CÔNG TY CỔ PHẦN CÔNG NGHỆ QTS VIỆT NAM', NULL, '', '0', '', NULL, NULL, NULL, ' thudoct@gmail.com', NULL, 'uI2wcf05wq0', NULL, NULL, NULL, '0975 195 112', NULL, NULL, NULL, NULL, 'upload/img/logo/logo8.png', NULL, '<p>Địa chỉ: : Số 8, Thi&ecirc;n Đức, Y&ecirc;n Vi&ecirc;n, Gia L&acirc;m, H&agrave; Nội.<br />\r\nĐiện thoại: 043 9611 911 - 0982 629 134 - 0979 701 999<br />\r\nEmail: <a href=\"\">Info@noithatphuan.com.vn</a> - <a href=\"\">Https://noithatphuan.com.vn</a><br />\r\nM&atilde; số thuế: 0106288684<br />\r\nNg&agrave;y cấp: 22/08/2013 Nơi cấp: Chi cục Thuế Huyện Gia L&acirc;m<br />\r\nNgười đại diện: &Ocirc;ng Tạ Tuấn Hiệp - Chức vụ: Gi&aacute;m đốc</p>\r\n', NULL, NULL, NULL, '(21.0137956, 105.76945469999998)', 'Công ty cổ phần dịch vụ & thương mại Thủ Đô', 'Số 58 Phố Duy Tân – Dịch Vọng Hậu – Cầu Giấy - HN', ' 0984086608', '42 Lê Quang đạo, Nam Từ Liêm', 'vi', NULL, 'https://www.youtube.com/channel/UCHXYopwqVJ9u4_EnUCmhkHQ', NULL, 'liên hệ để được hỗ trợ ưu đãi tốt nhất tại FIONA VIỆT TRÌ', NULL, 'upload/img/logo/Logo_doctors1.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14896.112114794629!2d105.76454397273433!3d21.031564475947746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454bab8c5e73b%3A0x15f3308da6ba66c4!2zTeG7uSDEkMOsbmggMiwgVOG7qyBMacOqbSwgSGFub2ksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1510635467740\" width=\"100%\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, 'websiteqts.com', '<div id=\"fb-root\"></div>\r\n\r\n<script>(function(d, s, id) {\r\n\r\n  var js, fjs = d.getElementsByTagName(s)[0];\r\n\r\n  if (d.getElementById(id)) return;\r\n\r\n  js = d.createElement(s); js.id = id;\r\n\r\n  js.src = \"//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=126821687974504\";\r\n\r\n  fjs.parentNode.insertBefore(js, fjs);\r\n\r\n}(document, \'script\', \'facebook-jssdk\'));</script>', '[]', '[{\"content\":\"\",\"name\":\"Chi ti\\u1ebft s\\u1ea3n ph\\u1ea9m\",\"type\":\"textarea\",\"sort\":\"\"},{\"content\":\"\",\"name\":\"th\\u00f4ng s\\u1ed1 k\\u1ef9 thu\\u1eadt\",\"type\":\"textarea\",\"sort\":\"2\"},{\"content\":\"\",\"name\":\"H\\u01b0\\u1edbng d\\u1eabn mua h\\u00e0ng\",\"type\":\"int\",\"sort\":\"3\"}]', '1');
INSERT INTO `site_option` (`id`, `coppy_right`, `site_name`, `slogan`, `link_instagram`, `site_logo`, `site_title`, `site_title_en`, `site_keyword`, `site_keyword_en`, `site_description`, `link_sky`, `link_printer`, `link_linkedin`, `site_email`, `site_fanpage`, `site_video`, `WM_text`, `WM_color`, `WM_size`, `hotline1`, `hotline2`, `hotline3`, `address`, `link_tt`, `favicon`, `company_name`, `shipping`, `site_promo`, `thanhtoan_tienmat`, `thanhtoan_chuyenkhoan`, `hdfMap`, `map_title`, `map_adrdress`, `map_phone`, `dia_chi_timkiem`, `lang`, `link_gg`, `link_youtube`, `face_id`, `timeopen`, `chat`, `site_logo_footer`, `map_iframe`, `input_text_1`, `domain`, `map_footer`, `config_pro`, `config_pro_content`, `active`) VALUES ('2', NULL, 'JSC polygon media', '', NULL, 'upload/img/logo4.png', '', NULL, '', '0', '', '0', NULL, NULL, 'hanhnh@polygonmedia.vn', '', 'uI2wcf05wq0', '', '', '0', '', '', '0', '', '', '0', NULL, '', '', NULL, NULL, '(21.0218044, 105.79087200000004)', 'Công ty', '', '', 'Yên hòa', 'en', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '1');
INSERT INTO `site_option` (`id`, `coppy_right`, `site_name`, `slogan`, `link_instagram`, `site_logo`, `site_title`, `site_title_en`, `site_keyword`, `site_keyword_en`, `site_description`, `link_sky`, `link_printer`, `link_linkedin`, `site_email`, `site_fanpage`, `site_video`, `WM_text`, `WM_color`, `WM_size`, `hotline1`, `hotline2`, `hotline3`, `address`, `link_tt`, `favicon`, `company_name`, `shipping`, `site_promo`, `thanhtoan_tienmat`, `thanhtoan_chuyenkhoan`, `hdfMap`, `map_title`, `map_adrdress`, `map_phone`, `dia_chi_timkiem`, `lang`, `link_gg`, `link_youtube`, `face_id`, `timeopen`, `chat`, `site_logo_footer`, `map_iframe`, `input_text_1`, `domain`, `map_footer`, `config_pro`, `config_pro_content`, `active`) VALUES ('3', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '0', '0', '0', '1', '0', '1', '0', '0', '0', '1', '0', '0', '0', '0', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', 'config', '0', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1', '0');
INSERT INTO `site_option` (`id`, `coppy_right`, `site_name`, `slogan`, `link_instagram`, `site_logo`, `site_title`, `site_title_en`, `site_keyword`, `site_keyword_en`, `site_description`, `link_sky`, `link_printer`, `link_linkedin`, `site_email`, `site_fanpage`, `site_video`, `WM_text`, `WM_color`, `WM_size`, `hotline1`, `hotline2`, `hotline3`, `address`, `link_tt`, `favicon`, `company_name`, `shipping`, `site_promo`, `thanhtoan_tienmat`, `thanhtoan_chuyenkhoan`, `hdfMap`, `map_title`, `map_adrdress`, `map_phone`, `dia_chi_timkiem`, `lang`, `link_gg`, `link_youtube`, `face_id`, `timeopen`, `chat`, `site_logo_footer`, `map_iframe`, `input_text_1`, `domain`, `map_footer`, `config_pro`, `config_pro_content`, `active`) VALUES ('4', 'coppy right', 'tên đơn vị', 'slogan', 'Instagram', NULL, 'Tiêu đề website', NULL, NULL, NULL, NULL, 'link skype', 'link printer', 'link linkedin', NULL, 'fanpage facebook', 'Video (Youtube)', 'Chữ Nổi Warter Mark', 'Màu Chữ (Hex Color VD : #ed1c2', '1', 'điện thoại', 'fax', 'điên thoại bàn', 'địa chỉ', 'link twester', NULL, NULL, 'giao hàng', 'khuyến mại', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'conf_text', 'link google', NULL, 'id ap facebook', 'thời gian mở cửa', 'mã chát online', 'logo chân trang', 'Mã nhúng bản đồ chân trang', 'mã số thuê', 'tên miền', 'mã nhúng javascript', '', '', '0');


#
# TABLE STRUCTURE FOR: staticpage
#

CREATE TABLE `staticpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang` char(10) COLLATE utf8_unicode_ci DEFAULT '1',
  `home` tinyint(1) DEFAULT '0',
  `hot` tinyint(1) DEFAULT NULL,
  `focus` tinyint(1) DEFAULT NULL,
  `contact_page` tinyint(1) DEFAULT '0',
  `title_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `page_footer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `staticpage` (`id`, `name`, `alias`, `description`, `content`, `image`, `lang`, `home`, `hot`, `focus`, `contact_page`, `title_seo`, `keyword_seo`, `description_seo`, `parent_id`, `page_footer`) VALUES ('31', 'Giới Thiệu', 'gioi-thieu', '<p>C&ocirc;ng ty Cổ phần C&ocirc;ng nghệ QTS Việt Nam (QTS) l&agrave; nh&agrave; cung cấp dịch vụ c&ocirc;ng nghệ th&ocirc;ng tin chuy&ecirc;n nghiệp v&agrave; đội ngũ chuy&ecirc;n gia cao cấp. QTS Việt Nam l&agrave; một trong những đơn vị</p>\r\n', '', 'upload/img/pages/avt.png', 'vi', '1', '1', '1', '0', '', '', '', '0', '1');
INSERT INTO `staticpage` (`id`, `name`, `alias`, `description`, `content`, `image`, `lang`, `home`, `hot`, `focus`, `contact_page`, `title_seo`, `keyword_seo`, `description_seo`, `parent_id`, `page_footer`) VALUES ('32', 'Mua từ xa', 'mua-tu-xa', '', '', NULL, 'vi', '1', NULL, NULL, '0', '', '', '', '0', '0');
INSERT INTO `staticpage` (`id`, `name`, `alias`, `description`, `content`, `image`, `lang`, `home`, `hot`, `focus`, `contact_page`, `title_seo`, `keyword_seo`, `description_seo`, `parent_id`, `page_footer`) VALUES ('33', 'Chứng nhận', 'chung-nhan', '', '', NULL, 'vi', '1', NULL, NULL, '0', '', '', '', '0', '0');
INSERT INTO `staticpage` (`id`, `name`, `alias`, `description`, `content`, `image`, `lang`, `home`, `hot`, `focus`, `contact_page`, `title_seo`, `keyword_seo`, `description_seo`, `parent_id`, `page_footer`) VALUES ('34', 'Đại lý', 'dai-ly', '', '', NULL, 'vi', '1', NULL, NULL, '0', '', '', '', '0', '0');


#
# TABLE STRUCTURE FOR: street
#

CREATE TABLE `street` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `pre` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `districtid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: support_online
#

CREATE TABLE `support_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yahoo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `skype` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `image` varchar(70) CHARACTER SET utf8 DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `support_online` (`id`, `yahoo`, `phone`, `skype`, `email`, `name`, `active`, `image`, `type`, `address`) VALUES ('19', 'https://id.zalo.me/account/login?continue=https%3A', '0936236786', 'skype_trantrung', 'trunag123@gmail.com', 'Mr Trung', '1', NULL, '2', 'abc');
INSERT INTO `support_online` (`id`, `yahoo`, `phone`, `skype`, `email`, `name`, `active`, `image`, `type`, `address`) VALUES ('20', 'yahoo_tranmanh', '0977160509', 'https://www.facebook.com/', 'tranmanh@gmail.com', 'đặng trần mạnh', '1', NULL, '0', '');


#
# TABLE STRUCTURE FOR: tags
#

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `title_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tags_news
#

CREATE TABLE `tags_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `title_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_seo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tags_to_news
#

CREATE TABLE `tags_to_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_raovat` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tags_to_product
#

CREATE TABLE `tags_to_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tags` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: thong_ke_online
#

CREATE TABLE `thong_ke_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_date` int(11) NOT NULL,
  `today` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('37', '1517850000', '0');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('38', '1517936400', '1');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('39', '1518022800', '29');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('40', '1518109200', '20');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('41', '1519578000', '9');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('42', '1519664400', '15');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('43', '1519750800', '5');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('44', '1521046800', '55');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('45', '1521133200', '9');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('46', '1521219600', '233');
INSERT INTO `thong_ke_online` (`id`, `access_date`, `today`) VALUES ('47', '1522256400', '4');


#
# TABLE STRUCTURE FOR: user_sms
#

CREATE TABLE `user_sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smsid` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8,
  `result` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `error` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `comment` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('5', '1130b1db-ffcb-477b-862b-040e60174a888', '76', '0974901590', 'Mã Kích Hoạt SMS : 5950ac70440c6', '100', '0', NULL, NULL, '2017-06-26 13:40:48');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('6', '3141f19d-e25d-46fb-9cff-9c1cdd3371fb8', '76', '0974901590', 'abc test gửi lại', '100', '0', NULL, 'gửi lại', '2017-06-26 13:41:39');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('7', NULL, '610', '0986839102', 'Mã Kích Hoạt SMS : 5954a8af5779f', '103', '0', 'Balance not enough to send message', NULL, '2017-06-29 14:13:53');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('8', NULL, '611', '0986839102', 'Mã Kích Hoạt SMS : 5954a9ed7f497', '103', '0', 'Balance not enough to send message', NULL, '2017-06-29 14:19:09');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('9', NULL, '612', '0965986385', 'Mã Kích Hoạt SMS : 5954b39739ebb', '103', '0', 'Balance not enough to send message', NULL, '2017-06-29 15:00:23');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('10', NULL, '613', '01649962597', 'Mã Kích Hoạt SMS : 5955bbaedda8d', '103', '0', 'Balance not enough to send message', NULL, '2017-06-30 09:47:11');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('11', NULL, '614', '987654321', 'Mã Kích Hoạt SMS : 595606e747183', '103', '0', 'Balance not enough to send message', NULL, '2017-06-30 15:08:07');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('12', NULL, '615', '324234234', 'Mã Kích Hoạt SMS : 5956074367a46', '99', '0', 'Phone not valid:324234234', NULL, '2017-06-30 15:09:39');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('13', NULL, '616', '0915460000', 'Mã Kích Hoạt SMS : 595a22e73caf4', '103', '0', 'Balance not enough to send message', NULL, '2017-07-03 17:56:39');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('14', NULL, '617', '01649962597', 'Mã Kích Hoạt SMS : 595ae9294eb32', '103', '0', 'Balance not enough to send message', NULL, '2017-07-04 08:02:33');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('15', NULL, '618', '0985088848', 'Mã Kích Hoạt SMS : 595b3b0287471', '103', '0', 'Balance not enough to send message', NULL, '2017-07-04 13:51:46');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('16', NULL, '619', '0985088848', 'Mã Kích Hoạt SMS : 595c4381c1481', '103', '0', 'Balance not enough to send message', NULL, '2017-07-05 08:40:19');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('17', NULL, '620', '0986126561', 'Mã Kích Hoạt SMS : 595f3520d9e2e', '103', '0', 'Balance not enough to send message', NULL, '2017-07-07 14:15:45');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('18', NULL, '621', '0987999947', 'Mã Kích Hoạt SMS : 5960999273327', '103', '0', 'Balance not enough to send message', NULL, '2017-07-08 15:36:34');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('19', NULL, '622', '0869118060', 'Mã Kích Hoạt SMS : 59638b308df68', '103', '0', 'Balance not enough to send message', NULL, '2017-07-10 21:12:00');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('20', NULL, '623', '0983003484', 'Mã Kích Hoạt SMS : 59661988955c0', '103', '0', 'Balance not enough to send message', NULL, '2017-07-12 19:43:52');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('21', NULL, '624', '01652724972', 'Mã Kích Hoạt SMS : 5966e56f21617', '103', '0', 'Balance not enough to send message', NULL, '2017-07-13 10:13:51');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('22', NULL, '625', '09164278201', 'Mã Kích Hoạt SMS : 59697ab70dbfb', '99', '0', 'Phone not valid:09164278201', NULL, '2017-07-15 09:15:19');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('23', NULL, '626', '0964278201', 'Mã Kích Hoạt SMS : 59697b7e356e4', '103', '0', 'Balance not enough to send message', NULL, '2017-07-15 09:18:38');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('24', NULL, '627', '09642728201', 'Mã Kích Hoạt SMS : 59697cba3fe16', '99', '0', 'Phone not valid:09642728201', NULL, '2017-07-15 09:23:54');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('25', NULL, '628', '0964278201', 'Mã Kích Hoạt SMS : 5969ae9b73f4e', '103', '0', 'Balance not enough to send message', NULL, '2017-07-15 12:56:43');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('26', NULL, '629', '0975279573', 'Mã Kích Hoạt SMS : 5972f6b2ed53b', '103', '0', 'Balance not enough to send message', NULL, '2017-07-22 13:54:43');
INSERT INTO `user_sms` (`id`, `smsid`, `userid`, `phone`, `content`, `result`, `count`, `error`, `comment`, `create_at`) VALUES ('27', NULL, '630', '01648464081', 'Mã Kích Hoạt SMS : 5974f19ddd13a', '103', '0', 'Balance not enough to send message', NULL, '2017-07-24 01:57:34');


#
# TABLE STRUCTURE FOR: users
#

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `md5_id` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(35) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(35) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `use_salt` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `shop_name` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `avt_dir` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `avatar` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `use_logo` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `block` tinyint(3) unsigned DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` int(1) unsigned DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `address_province` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `address_district` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `address_ward` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `use_mobile` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `use_face` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `use_yahoo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `use_skype` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `use_group` int(3) unsigned DEFAULT NULL,
  `active` int(1) unsigned DEFAULT NULL,
  `use_key` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `smskey` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `token` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `deleted` tinyint(3) unsigned DEFAULT NULL,
  `use_regisdate` int(11) unsigned DEFAULT NULL,
  `use_enddate` int(11) unsigned DEFAULT NULL,
  `lastest_login` int(11) unsigned DEFAULT NULL,
  `signup_date` int(11) DEFAULT NULL,
  `lever` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=645 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('2', NULL, 'admin', 'admin', 'daibkz@gmail.com', 'c26be8aaf53b15054896983b43eb6a65', 'Admin', 'Wm8KT06E', NULL, NULL, NULL, NULL, NULL, '0000-00-00', '1', 'Ninh Binh', '66', NULL, NULL, '0986839102', NULL, 'dainguyen', '', '4', '1', '9671508f22c9982fbac60ffc130f9b7811ec2b4d7f6e9f253679a3b950a3f5c8', NULL, NULL, NULL, '1498496400', '1814029200', '1522290245', NULL, '2');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('617', '5d44ee6f2c3f71b73125876103c8f6c4', 'taikhoan', '01649962597', 'cauhai.1297@gmail.com', 'ab77a83b110f3517f746938bf49d0ae3', 'Nguyễn Văn Hải', NULL, NULL, '04072017', '986bc2226881542276ecf99e72443fc7.jpg', NULL, '0', NULL, NULL, 'Số 38 - Đường Dương Khuê ', '01', '005', '00163', NULL, NULL, NULL, NULL, NULL, '1', NULL, '595ae9294eb32', '2d9228de1d6c18ad3ab56b2a0c6d2def', '0', '1499130153', NULL, '1500969769', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('620', 'b73dfe25b4b8714c029b37a6ad3006fa', 'taikhoan', '0986126561', 'hungvu258@gmail.com', 'a9f1ea798b9bcdcf0573dad7af97cbe0', 'Vũ Văn Hùng', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '595f3520d9e2e', '86054560b15b889346283a906596eaa6', '0', '1499411744', NULL, '1499411806', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('612', 'f76a89f0cb91bc419542ce9fa43902dc', 'ĐẶNG VĂN ĐIỀN', '0965986385', 'cauvan1995@gmail.com', 'c26be8aaf53b15054896983b43eb6a65', 'ĐẶNG VĂN ĐIỀN', '-h01K8w3', NULL, '03072017', 'ad29f13d8e28e7cabeaf257192385ba6.png', NULL, '0', NULL, '1', 'Số 36 Dương Khuê', '01', '005', '00163', NULL, NULL, NULL, NULL, '4', '1', 'c51519f1ba3de1da58ef5bd2850861e5bf233a4b55eec27fdef32357a98b7205', '5954b39739ebb', '36fb0bab89277945551398212d0c1d8e', '0', '1499619600', '2067613200', '1504604112', '2017', '1');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('619', 'cdc0d6e63aa8e41c89689f54970bb35f', 'taikhoan', '0985088848', 'ngoc.dbsk@gmail.com', 'acb4798109c61257851f53f7521d8a4f', 'Đỗ Thị Ngọc', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '595c4381c1481', 'cd3c498d71a8889eebe96ed5946df7a3', '0', '1499218817', NULL, '1499503366', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('616', '7750ca3559e5b8e1f44210283368fc16', 'taikhoan', '0915460000', 'ktviet.com.vn@gmail.com', '6140c8871dd9df0c091760c83d3562a7', 'Kỹ thuật việt', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'Số 38 Đường Dương Khuê ', '01', '005', '00163', NULL, NULL, NULL, NULL, NULL, '1', NULL, '595a22e73caf4', 'd04eedd402adbee246d22bd05a16d82f', '0', '1499079399', NULL, '1501031009', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('621', '85fc37b18c57097425b52fc7afbb6969', 'taikhoan', '0987999947', 'ktviet.com.vn@gmail.com', '6140c8871dd9df0c091760c83d3562a7', 'aalo.vn', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '5960999273327', '9652a76f8510d397d571651a98234986', '0', '1499502994', NULL, '1500945384', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('622', '3871bd64012152bfb53fdf04b401193f', 'taikhoan', '0869118060', 'Sales@maytinhtruongson.com.vn', '29ac98cd17193f4ce1fe80017bff7cb8', 'Phan Văn Trường', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '59638b308df68', 'f082409b697ee95fbd373f4078ade2e3', '0', '1499695920', NULL, NULL, NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('623', 'a733fa9b25f33689e2adbe72199f0e62', 'taikhoan', '0983003484', 'cunhue@gmail.com', '3c31d5cf8058f39ef8ed267658fcae11', 'Nguyễn Trọng Hiền', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '59661988955c0', 'd89f5465c4496ea3cfe6a7f3b57c365a', '0', '1499863432', NULL, '1499863576', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('629', '051e4e127b92f5d98d3c79b195f2b291', 'taikhoan', '0975279573', 'vietbk193@gmail.com', 'f1160b722eceefca344715db03d1c66b', 'Ma Thế Việt', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '5972f6b2ed53b', '4cd25c877db0de884d1dcf85f1211fc6', '0', '1500706482', NULL, '1500706576', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('628', '42e77b63637ab381e8be5f8318cc28a2', 'taikhoan', '0964278201', 'nguyenvantrisahara@gmail.com', 'ef9468922149cf75765bab2d348d64aa', 'Nguyễn Văn Trí', NULL, NULL, '21072017', '6c92927ea9071ce920efcc34f6f732c2.jpg', NULL, '0', NULL, NULL, '52 Đường Lê Quang Đạo Quận Nam Từ Liêm', '01', '019', '00592', NULL, NULL, NULL, NULL, NULL, '0', NULL, '5969ae9b73f4e', '878cbe26fbc949c65aaf15d3ba3019b9', '0', '1500098203', NULL, '1500686349', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('643', '9b698eb3105bd82528f23d0c92dedfc0', 'taikhoan', '0977160509', 'kythuatqts@gmail.com', '6054ab63b50061d8bc40e6433e2958d3', 'test qts', 'farc5l8U', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '65fe406241980fee4234747606fbb0fcbfb927eb021f16a5de230d9a36629012', NULL, '5689741d0d7c9a3824d297446fe57f9a', NULL, '1506272400', NULL, '1506333363', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('644', '8c7bbbba95c1025975e548cee86dfadc', 'taikhoan', '0985554522', 'Vananh@gmail.com', 'cdb6962bc528e37a4b44d77bba500f71', 'Vân', '20X-efY5', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '09c7375321d2ce9a405e4c1606850ccdb7413aed9db60ec941a374a31c42f129', NULL, '418873c9025d4b7ea6037b649101bd67', NULL, '1506272400', NULL, '1506330986', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('638', '4c27cea8526af8cfee3be5e183ac9605', 'taikhoan', '0982255552', 'buivananh.th@gmail.com', '01b080fe7398c4c669be0be9cd78792d', 'Vân', '9SZDFmt3', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '09c7375321d2ce9a405e4c1606850ccdb7413aed9db60ec941a374a31c42f129', NULL, '553048f16cca9be3bbd6cf0ea897dd39', NULL, '1505926800', NULL, '1506331171', NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('639', '0f96613235062963ccde717b18f97592', 'taikhoan', '0982255552', 'Van@gmail.com', 'c26be8aaf53b15054896983b43eb6a65', 'Vân anh', 'S3phkf4r', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '6760ca72cfe94cd737b7a804b6f415f2d28ed2339429656e2fb086e47312517d', NULL, 'aec76ec422606554a14edd7ff28cee3f', NULL, '1505926800', NULL, NULL, NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('640', '4ffce04d92a4d6cb21c1494cdfcd6dc1', 'taikhoan', '0982221989', 'cskhqts@gmail.com', '2a810c88e3cb947e85bbab2728102f0d', 'Test', 'K7Un7sVB', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '9afeb87c5bfc4b34fc5741ceb2fa3f551bfebd97824d343e4ea4717935810b40', NULL, '2d9e84fec0ac40a1ee3220abb13714f3', NULL, '1505926800', NULL, NULL, NULL, '0');
INSERT INTO `users` (`id`, `md5_id`, `username`, `phone`, `email`, `password`, `fullname`, `use_salt`, `shop_name`, `avt_dir`, `avatar`, `use_logo`, `block`, `birthday`, `sex`, `address`, `address_province`, `address_district`, `address_ward`, `use_mobile`, `use_face`, `use_yahoo`, `use_skype`, `use_group`, `active`, `use_key`, `smskey`, `token`, `deleted`, `use_regisdate`, `use_enddate`, `lastest_login`, `signup_date`, `lever`) VALUES ('641', '67e103b0761e60683e83c559be18d40c', 'taikhoan', '0977160509', 'nguyendat@gmail.com', 'c26be8aaf53b15054896983b43eb6a65', 'nguyễn đát', 't1ZY5jt3', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '9219376c8a5e99a4a559fc74630803f87e49ecd18bcca1668c7623ef80ea7c5e', NULL, '57a4c36d67bf3e23971f7bdecec4f7a5', NULL, '1506272400', NULL, NULL, NULL, '0');


#
# TABLE STRUCTURE FOR: video
#

CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `link_video` text CHARACTER SET utf8,
  `title_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keyword_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lang` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `home` tinyint(1) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `focus` tinyint(1) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `image` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `alias` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `video` (`id`, `name`, `description`, `link_video`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `category_id`, `home`, `hot`, `focus`, `sort`, `image`, `active`, `alias`) VALUES ('1', 'video cho em gần anh thêm chút nữa', '<p>n&ocirc;i dung video h&aacute;t rất hay nh&eacute;</p>\r\n', 'OcpO-cjIKYM', '', '', '', 'vi', '3', '1', NULL, NULL, '1', 'upload/img/video/dia-diem-du-lich-5.jpg', '1', 'video-cho-em-gan-anh-them-chut-nua');
INSERT INTO `video` (`id`, `name`, `description`, `link_video`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `category_id`, `home`, `hot`, `focus`, `sort`, `image`, `active`, `alias`) VALUES ('2', 'Bài hát giành cho người đang yêu', '<p>nội dung m&ocirc; tả</p>\r\n', 'EcgL7jBEclc', '', '', '', 'vi', '5', '1', NULL, '1', '2', 'upload/img/video/dia-diem-du-lich-3.jpg', '1', 'bai-hat-gianh-cho-nguoi-dang-yeu');


#
# TABLE STRUCTURE FOR: video_category
#

CREATE TABLE `video_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `alias` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `home` tinyint(1) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `focus` tinyint(1) DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `title_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description_seo` text CHARACTER SET utf8,
  `keyword_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lang` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `video_category` (`id`, `name`, `alias`, `sort`, `home`, `hot`, `focus`, `image`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `description`, `parent_id`) VALUES ('3', 'Danh mục video của năm', 'danh-muc-video-cua-nam', '1', '1', NULL, NULL, 'upload/img/video/dia-diem-du-lich-4.jpg', '', '', NULL, 'vi', '<p>nội dung m&ocirc; tả</p>\r\n', NULL);
INSERT INTO `video_category` (`id`, `name`, `alias`, `sort`, `home`, `hot`, `focus`, `image`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `description`, `parent_id`) VALUES ('4', 'danh mục video của năm 2018', 'danh-muc-video-cua-nam-2018', '2', '1', '1', NULL, 'upload/img/video/dia-diem-du-lich-41.jpg', '', '', NULL, 'vi', '<p>nội dung m&ocirc; tả</p>\r\n', NULL);
INSERT INTO `video_category` (`id`, `name`, `alias`, `sort`, `home`, `hot`, `focus`, `image`, `title_seo`, `description_seo`, `keyword_seo`, `lang`, `description`, `parent_id`) VALUES ('5', 'video năm 2019', 'video-nam-2019', '3', '1', NULL, NULL, NULL, '', '', NULL, 'vi', '<p>n&ocirc;i dung m&ocirc; tả</p>\r\n', '3');


#
# TABLE STRUCTURE FOR: ward
#

CREATE TABLE `ward` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `pre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `districtid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: wishlist
#

CREATE TABLE `wishlist` (
  `pro_id` decimal(21,0) DEFAULT NULL,
  `user_id` decimal(21,0) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

