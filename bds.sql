-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 15, 2019 lúc 04:05 AM
-- Phiên bản máy phục vụ: 5.7.23
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bds`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `area`
--

INSERT INTO `area` (`id`, `name`) VALUES
(1, '0 - 100m2'),
(2, '100m2 - 500m2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `cate_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `image`, `cate_id`) VALUES
(1, 'Hỗ Trợ Pháp Lý Cho Người Mua Nhà Đất', '<blockquote>\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"color:#2980b9\"><strong>Chuy&ecirc;n mục Hỗ trợ Ph&aacute;p l&yacute; cho người mua bất động sản l&agrave; chuy&ecirc;n mục của trang www.nhontrachdatnen.com nhằm đồng h&agrave;nh c&ugrave;ng người mua nh&agrave;/đất tại Nhơn Trạch &ndash; Đồng Nai, nhận diện những rủi ro v&agrave; cung cấp cho họ những giải ph&aacute;p ho&agrave;n to&agrave;n miễn ph&iacute; cho những giao dịch th&agrave;nh c&ocirc;ng! Cho một thị trường bất động sản an to&agrave;n, chất lượng!</strong></span></span></span></p>\r\n</blockquote>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"color:#2980b9\"><strong>1. THỰC TRẠNG VỀ PH&Aacute;P L&Yacute; CỦA NGƯỜI ĐI MUA BẤT ĐỘNG SẢN?</strong></span><br />\r\nC&oacute; thể n&oacute;i rằng, thời gian vừa qua, người mua bất động sản tại Nhơn Trạch - Đồng Nai n&oacute;i ri&ecirc;ng v&agrave; Việt Nam n&oacute;i chung thật nhiều bất cập:&nbsp;<br />\r\n* Nỗi khổ của Người Mua nh&agrave;, đất &ndash; Người ngh&egrave;o / gi&agrave;u cũng kh&oacute;c!<br />\r\n*&nbsp;&nbsp;Kh&ocirc;ng chỉ l&agrave; chung cư m&agrave; c&aacute;c dự &aacute;n đất nền, condotel, nh&agrave; ở ri&ecirc;ng lẻ, nh&agrave; ở h&igrave;nh th&agrave;nh trong tương lai cũng tiềm ẩn rất nhiều rủi ro, để rồi Người Mua nh&agrave; phải thốt l&ecirc;n &ldquo;đ&uacute;ng l&agrave; h&ecirc;n xui, chứ biết sao giờ?!&rdquo;.<br />\r\n*&nbsp;Chưa bao giờ như l&uacute;c n&agrave;y Người Mua bất động sản lại &ldquo;rất cần&rdquo; v&agrave; &ldquo;kh&aacute;t&rdquo; nhu cầu được bảo vệ đến như vậy.<br />\r\n*&nbsp;&ldquo;Đ&aacute;nh tiếng l&agrave; chung cư cao cấp&rdquo; nhưng sống lại &ldquo;thấp cấp&rdquo; để rồi: đ&ecirc;m bị &ldquo;l&ugrave;a&rdquo; dậy, ng&agrave;y th&igrave; bị cắt nước, đang y&ecirc;n đang l&agrave;nh th&igrave; bị xiết nợ, thậm ch&iacute; nh&agrave; đang ở th&igrave; bị ph&aacute;t m&atilde;i!<br />\r\n&ldquo;Nh&agrave; gi&agrave;u bỏ bạc tỷ mua condotel: kh&ocirc;ng biết chơi dễ cầm dao đằng lưỡi&rdquo;, đ&oacute; l&agrave; ph&aacute;t biểu của b&aacute;o D&acirc;n Tr&iacute; khi n&oacute;i về loại h&igrave;nh kinh doanh n&agrave;y.<br />\r\n<em><strong>Chuy&ecirc;n mục hỗ trợ ph&aacute;p l&yacute; cho người mua bất động sản tại Nhơn Trạch của ch&uacute;ng t&ocirc;i nhằm mục đ&iacute;ch cung cấp th&ocirc;ng tin, định hướng kh&aacute;ch hang để giảm thiểu những rủi ro&nbsp; v&agrave; bất cập n&oacute;i tr&ecirc;n.</strong></em><br />\r\n<br />\r\n<span style=\"color:#2980b9\"><strong>2. HỖ TRỢ PH&Aacute;P L&Yacute; CHO NGƯỜI&nbsp; MUA BẤT ĐỘNG SẢN TẠI NHƠN TRẠCH</strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Với một loạt vi phạm của c&aacute;c chủ đầu tư v&agrave; sai phạm của một loạt c&aacute;c s&agrave;n giao dịch bất động sản, c&ugrave;ng mu&ocirc;n tr&ugrave;ng rủi ro ph&aacute;t sinh trong qu&aacute; tr&igrave;nh giao dịch (bao gồm nhưng kh&ocirc;ng giới hạn c&aacute;c vụ lừa đảo đến từ c&aacute;c b&ecirc;n hữu quan trong bất động sản). Người Mua bất động sản đang &ldquo;rất cần&rdquo; v&agrave; &ldquo;kh&aacute;t&rdquo; nhu cầu được bảo vệ.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Chuy&ecirc;n mục Hỗ trợ Ph&aacute;p l&yacute; cho người mua bất động sản l&agrave; chuy&ecirc;n mục của trang <a href=\"http://www.nhontrachdatnen.com\">www.nhontrachdatnen.com</a> &nbsp;nhằm đồng h&agrave;nh c&ugrave;ng người mua nh&agrave;/đất tại Nhơn Trạch &ndash; Đồng Nai, nhận diện những rủi ro v&agrave; cung cấp cho họ những giải ph&aacute;p ho&agrave;n to&agrave;n miễn ph&iacute; cho những giao dịch th&agrave;nh c&ocirc;ng! Cho một thị trường bất động sản &ldquo;sạch&rdquo; đầy chất lượng!<br />\r\n<strong>*&nbsp;Bao nhi&ecirc;u người trong số Qu&yacute; Vị hoặc người th&acirc;n của Qu&yacute; Vị đ&atilde; gặp trường hợp như tr&ecirc;n?<br />\r\n*&nbsp;Bao nhi&ecirc;u người trong Qu&yacute; Vị đang cần được c&aacute;c Luật gia , Luật sư v&agrave; chuy&ecirc;n gia của ch&uacute;ng t&ocirc;i gi&uacute;p đỡ?<br />\r\n*&nbsp;Bao nhi&ecirc;u người trong số Qu&yacute; Vị muốn được bảo vệ để loại bỏ c&aacute;c rủi ro tr&ecirc;n?</strong></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"color:#2980b9\"><strong>3. ĐĂNG K&Yacute; ĐỂ ĐƯỢC TƯ VẤN MIỄN PH&Iacute; TỪ LUẬT SƯ:</strong></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"color:#2980b9\"><strong><img alt=\"\" src=\"/uploads/images/b%E1%BA%A3o%20v%E1%BB%87%20ng%C6%B0%E1%BB%9Di%20mua%20b%E1%BA%A5t%20%C4%91%E1%BB%99ng%20s%E1%BA%A3n.jpg\" style=\"height:324px; width:540px\" /></strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><em><strong>Với phạm vi hoạt động tại Nhơn Trạch - Đồng Nai, n&ecirc;n ch&uacute;ng t&ocirc;i cung cấp c&aacute;c th&ocirc;ng tin v&agrave; hỗ trợ cho người mua bất động sản tại Nhơn Trạch. Ch&uacute;ng t&ocirc;i l&agrave; đơn vị cung cấp th&ocirc;ng tin đến kh&aacute;ch h&agrave;ng, n&ecirc;n c&aacute;c kết quả tư vấn v&agrave; hỗ trợ của ch&uacute;ng t&ocirc;i mang t&iacute;nh trung lập, kh&aacute;ch quan.<br />\r\n<br />\r\nQuyền lợi nhận được khi đăng k&yacute; tư vấn ( ho&agrave;n to&agrave;n miễn ph&iacute;):</strong></em><br />\r\n1. Được c&aacute;c Luật Gia, Luật Sư v&agrave; c&aacute;c Chuy&ecirc;n Gia của ch&uacute;ng t&ocirc;i hỗ trợ r&agrave; so&aacute;t hợp đồng v&agrave; c&aacute;c thỏa thuận ph&aacute;t sinh trong qu&aacute; tr&igrave;nh giao dịch giữa c&aacute;c b&ecirc;n.<br />\r\n2. Kiểm tra tr&aacute;ch nhiệm thực hiện hợp đồng/ thỏa thuận tr&ecirc;n thực tế so với nội dung thỏa thuận.<br />\r\n3. Ph&aacute;t hiện c&aacute;c &ldquo;bẫy rủi ro&rdquo; m&agrave; Qu&yacute; Vị hoặc người th&acirc;n đang gặp phải trong qu&aacute; tr&igrave;nh giao dịch.<br />\r\n4. Cảnh b&aacute;o c&aacute;c nguy cơ rủi ro v&agrave; c&aacute;c tổn thất tương lai cho Người Mua bất động sản c&oacute; thể ph&aacute;t sinh trong giao dịch<br />\r\n5. Cung cấp c&aacute;c giải ph&aacute;p để giảm thiểu rủi ro, tăng cường h&agrave;nh lang ph&aacute;p l&yacute; cho Người Mua.<br />\r\n6. Cung cấp c&aacute;c giải ph&aacute;p để bảo vệ Người Mua.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Đối với c&aacute;c trường hợp chưa được Ban Quản Trị Chương Tr&igrave;nh x&eacute;t duyệt hỗ trợ (căn cứ thời gian đăng k&yacute; của Qu&yacute; Vị, căn cứ t&iacute;nh chất v&agrave; sự ưu ti&ecirc;n của từng sự vụ hoặc số lượng đăng k&yacute; qu&aacute; tải sớm) trong chương tr&igrave;nh n&agrave;y, ch&uacute;ng t&ocirc;i vẫn bảo lưu hồ sơ của Qu&yacute; Vị cho c&aacute;c chiến dịch kh&aacute;c. Hoặc h&atilde;y vui l&ograve;ng li&ecirc;n hện trực tiếp với ch&uacute;ng t&ocirc;i tại địa chỉ : <a href=\"http://www.nhontrachdatnen.com\">www.nhontrachdatnen.com</a><br />\r\n<br />\r\n<em><strong>&ndash; Nếu bạn cần hỗ trợ, h&atilde;y đăng k&yacute; để được c&aacute;c Luật gia, Luật Sư v&agrave; Chuy&ecirc;n Gia của ch&uacute;ng t&ocirc;i gi&uacute;p đỡ! Điền form đăng k&yacute; dưới đ&acirc;y, Luật sư v&agrave; đội ngũ tư vấn&nbsp;của ch&uacute;ng t&ocirc;i sẽ gọi cho bạn!</strong></em></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><em><strong><iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLScZ4NZ----IdCHVZGFQ-OLAmdL_9OoQrIzrDHOyHUTONarqDg/viewform?embedded=true\" width=\"640\" height=\"1563\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Đang tải...</iframe></strong></em></span></span></p>\r\n', 'ho-tro-phap-ly-nguoi-mua-1546928512.png', 2),
(2, 'HỖ TRỢ TÀI CHÍNH CHO BÊN BÁN', '<blockquote>\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\"><strong>Dịch vụ hỗ trợ t&agrave;i ch&iacute;nh cho b&ecirc;n B&aacute;n đầu ti&ecirc;n tại www.nhontrachdatnen.com l&agrave; dịch vụ ĐẶT CỌC - ỦY TH&Aacute;C B&Aacute;N.<br />\r\nHỗ trợ t&agrave;i ch&iacute;nh cho b&ecirc;n B&aacute;n l&agrave; dịch vụ duy nhất v&agrave; đầu ti&ecirc;n tại Nhơn Trạch - Đồng Nai, nhằm gi&uacute;p b&ecirc;n B&aacute;n c&oacute; khoản t&agrave;i ch&iacute;nh nhanh ch&oacute;ng v&agrave; giao dịch t&agrave;i sản của b&ecirc;n B&aacute;n được đảm bảo an to&agrave;n, kh&ocirc;ng bị &eacute;p gi&aacute; bởi yếu tố thị trường v&agrave; thời điểm giao dịch.&nbsp;</strong></span></span></p>\r\n</blockquote>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<br />\r\n<span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\"><strong>1. HỖ TRỢ T&Agrave;I CH&Iacute;NH CHO B&Ecirc;N B&Aacute;N - DỊCH VỤ ĐẶT CỌC - ỦY TH&Aacute;C B&Aacute;N</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\">Hiện tại &nbsp;chủ t&agrave;i sản bất động sản nh&agrave;/ đất c&oacute; nhu cầu cần b&aacute;n nhanh, c&oacute; thể sử dụng dịch vụ ĐẶT CỌC - ỦY TH&Aacute;C B&Aacute;N cho <a href=\"http://www.nhontrachdatnen.com\">www.nhontrachdatnen.com</a>. Đ&acirc;y l&agrave; dịch vụ mới v&agrave; cực kỳ ưu việt, chỉ &aacute;p dụng tại Nhơn Trạch, Đồng Nai. Với nhu cầu t&agrave;i ch&iacute;nh gấp, thay v&igrave; lựa chọn việc đi cầm giấy tờ nh&agrave; đất tại c&aacute;c địa chỉ kh&ocirc;ng đủ uy t&iacute;n chứa đựng rất nhiều rủi ro cho người đi vay, hoặc chờ đợi hồ sơ vay vốn tại Ng&acirc;n h&agrave;ng th&igrave; qu&aacute; phức tạp v&agrave; mất nhiều thời gian, hoặc phải b&aacute;n t&agrave;i sản với gi&aacute; rẻ v&igrave; chưa t&igrave;m được người mua ph&ugrave; hợp trong thời gian gấp g&aacute;p.. Thấu hiểu điều đ&oacute;, <a href=\"http://www.nhontrachdatnen.com\">www.nhontrachdatnen.com</a>&nbsp; cung cấp dịch vụ &nbsp;ĐẶT CỌC - ỦY TH&Aacute;C B&Aacute;N cho c&aacute;c chủ t&agrave;i sản nh&agrave;/đất, đ&acirc;y l&agrave; giải ph&aacute;p để c&oacute; khoản t&agrave;i ch&iacute;nh nhanh ch&oacute;ng v&agrave; bảo đảm, đồng thời c&oacute; thể giao dịch t&agrave;i sản nh&agrave;/đất với gi&aacute; cả ph&ugrave; hợp m&agrave; kh&ocirc;ng bị &eacute;p gi&aacute;.</span></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\"><strong>2. Thủ tục ĐẶT CỌC - ỦY TH&Aacute;C B&Aacute;N </strong>của ch&uacute;ng t&ocirc;i rất nhanh ch&oacute;ng, v&igrave; bạn kh&ocirc;ng cần chứng minh khả năng t&agrave;i ch&iacute;nh/ mục đ&iacute;ch sử dụng vốn v&agrave; c&aacute;c thủ tục rườm r&agrave; kh&aacute;c như giao dịch với Ng&acirc;n h&agrave;ng.</span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\"><img alt=\"\" src=\"/uploads/images/huyen%20cap%20so%20do%20co%20dung%20luat%20phap%20khong.jpg\" style=\"height:400px; width:650px\" /></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\"><strong>3.&nbsp;Quy tr&igrave;nh của ch&uacute;ng t&ocirc;i cho 1 hồ sơ chỉ tối đa 2 ng&agrave;y l&agrave;m việc:</strong><br />\r\n1. Đăng k&yacute; tại <a href=\"http://www.nhontrachdatnen.com\">www.nhontrachdatnen.com</a>&nbsp; hoặc gửi hồ sơ nh&agrave; đất qua <a href=\"mailto:nhontrachdatnen222@gmail.com\">nhontrachdatnen222@gmail.com</a><br />\r\n2.&nbsp;Bộ phận thẩm định sẽ li&ecirc;n hệ với kh&aacute;ch h&agrave;ng đ&atilde; đăng k&yacute;<br />\r\n3.&nbsp;Hồ sơ hợp lệ sẽ b&aacute;o gi&aacute; trong 24h v&agrave; chuẩn bị sẵn hợp đồng đặt cọc&nbsp; - ủy th&aacute;c b&aacute;n cho kh&aacute;ch h&agrave;ng.<br />\r\n4.&nbsp;Hẹn giờ ph&ugrave; hợp để tiến h&agrave;nh thủ tục cần thiết tại C&ocirc;ng ty hoặc Ph&ograve;ng c&ocirc;ng chứng gần nhất<br />\r\n5.&nbsp;Kh&aacute;ch h&agrave;ng sẽ nhận giải ng&acirc;n tiền mặt hoặc chuyển khoản ngay sau khi k&yacute; v&agrave; b&agrave;n giao đầy đủ giấy tờ.</span></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\"><strong>4. Ưu điểm vượt trội: </strong><br />\r\n-&nbsp;Nh&agrave; đất được được định gi&aacute; định gi&aacute; theo đ&uacute;ng gi&aacute; thị trường v&agrave; đặt cọc tối đa 30% gi&aacute; trị t&agrave;i sản.<br />\r\n-&nbsp;Chỉ 1 ph&uacute;t đăng k&yacute;, nhận ngay h&agrave;ng tỷ đồng. Trải nghiệm ngay dịch vụ hỗ trợ t&agrave;i ch&iacute;nh cho b&ecirc;n B&aacute;n của <a href=\"http://www.nhontrachdatnen.com\">www.nhontrachdatnen.com</a> .</span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\"><strong>ĐIỀN FORM ĐĂNG K&Yacute; ĐỂ ĐƯỢC HỖ TRỢ NGAY<br />\r\n<br />\r\n<iframe frameborder=\"0\" height=\"1531\" src=\"https://docs.google.com/forms/d/e/1FAIpQLScSOZePqbTx-S1iK7tNr8Fzvz6J_rgmISOxzRfkBRN5-o3bog/viewform?embedded=true\" width=\"640\">Đang tải...</iframe></strong></span></span><br />\r\n&nbsp;</p>\r\n', 'ho-tro-phap-ly-nguoi-ban-1-1546932175.jpg', 3),
(3, 'Sốt Đất Nhơn Trạch Tăng Giá Phi Mã Thật Hay Ảo?', '<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Sốt Đất Nhơn Trạch Tăng Gi&aacute; 40-50%. Nh&agrave; Đầu Tư Đổ Về Nhơn Trạch (Đồng Nai)</span></span></p>\r\n\r\n<blockquote>\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Trong một năm qua, gi&aacute; đất tại Nhơn Trạch (Đồng Nai) li&ecirc;n tục nhảy m&uacute;a.&nbsp;Theo ghi nhận của một số c&ocirc;ng ty nghi&ecirc;n cứu thị trường mức tăng gấp đ&ocirc;i so với năm ngo&aacute;i.&nbsp;Thậm ch&iacute; c&oacute; giai đoạn <strong>thị trường bất động sản Nhơn Trạch</strong>&nbsp;c&ograve;n l&ecirc;n &quot;cơn sốt&quot; khiến nhiều nh&agrave; đầu tư đổ x&ocirc; về khu vực n&agrave;y kiếm lời.</span></span></p>\r\n</blockquote>\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Sốt đất Nhơn Trạch, gi&aacute; nh&agrave; đất Nhơn Trạch tăng phi m&atilde;.</strong></span></span><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Khảo s&aacute;t thị trường Nhơn Trạch trung tuần th&aacute;ng 10/2018, kh&ocirc;ng kh&iacute; giao dịch nh&agrave; đất s&ocirc;i nổi hiện r&otilde; tại c&aacute;c ph&ograve;ng c&ocirc;ng chứng mua b&aacute;n. Đ&acirc;y l&agrave; khu vực chứng kiến sự &quot;n&oacute;ng sốt&quot; về gi&aacute; c&ugrave;ng với khu Đ&ocirc;ng Tp.HCM giai đoạn đầu năm 2018.<br />\r\nTuy nhi&ecirc;n, nếu khu Đ&ocirc;ng đ&atilde; &quot;hạ nhiệt&quot; th&igrave; Nhơn Trạch vẫn đang chứng kiến d&ograve;ng tiền đầu tư đổ về đ&acirc;y, đặc biệt l&agrave; ph&acirc;n kh&uacute;c đất nền, nh&agrave; phố.&nbsp;</span></span>\r\n\r\n<h3 style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"Sốt Đất Nhơn Trạch Tăng Giá 40-50%\" src=\"/doan/public/uploads/duan/sot-dat-nhon-trach-tang-gia.jpg\" style=\"height:333px; width:550px\" /></span></span></h3>\r\n\r\n<div style=\"text-align:center\"><em><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Sốt Đất Nhơn Trạch Do Hạ Tầng Được Đầu Tư</span></span></em></div>\r\n<br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Theo b&aacute;o c&aacute;o mới đ&acirc;y của DKRA Việt Nam, gi&aacute; đất nền tại khu vực Nhơn Trạch biến động kh&aacute; mạnh từ qu&yacute; 1/2018 đến nay. </span></span>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#e74c3c\"><strong><em><u>Qu&yacute; 1/2018</u></em></strong></span> mặt bằng gi&aacute; trung b&igrave;nh đất nền dao động khoảng <strong><em>6-12 triệu đồng/m2</em></strong>.</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Những khu vực <em>đường lớn</em>, d&acirc;n cư đ&ocirc;ng gi&aacute; chạm mốc <em><strong>13-15 triệu đồng/m2</strong></em>.&nbsp;</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#e74c3c\"><em><strong><u>Đến qu&yacute; 2/2018</u></strong></em></span>,&nbsp;mức gi&aacute; đất nền tại Nhơn Trạch tăng l&ecirc;n <strong>20 triệu đồng/m2</strong>.&nbsp;</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Những dự &aacute;n nằm ở mặt tiền c&aacute;c tuyến đường lớn hay c&aacute;c <em>vị tr&iacute; dự kiến x&acirc;y cầu</em> nối với Tp.HCM gi&aacute; c&oacute; thể vọt l&ecirc;n <em><strong>35-40 triệu đồng/m2</strong>.</em></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Gi&aacute; đất Nhơn Trạch hiện nay, theo t&igrave;m hiểu, c&aacute;c &quot;c&ograve;&quot; <em>đất tại địa phương</em> đ&atilde; ch&agrave;o mời kh&aacute;ch h&agrave;ng đầu tư với mức từ <strong>50 triệu đồng/m2</strong> ở những l&ocirc; đất mặt tiền đường Trần Ph&uacute;, Nhơn Trạch.&nbsp;</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Mức độ tăng gi&aacute; ở c&aacute;c <em>dự &aacute;n nh&agrave; phố</em> tại Nhơn Trạch đạt khoảng <strong>20-25%/năm</strong></span></span></li>\r\n</ul>\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Đ&atilde; cho thấy, sốt đất tại Nhơn Trạch c&oacute; tốc độ tăng gi&aacute; kh&aacute; mạnh mẽ từ đầu năm đến nay. Nếu so với c&ugrave;ng thời điểm năm ngo&aacute;i, <strong>gi&aacute; đất nền tại Nhơn Trạch ghi nhận đ&atilde; tăng từ 40-50% (t&ugrave;y vị tr&iacute;).</strong></span></span><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Khảo s&aacute;t một số dự &aacute;n tr&ecirc;n địa b&agrave;n cho thấy, mức độ tăng gi&aacute; theo đợt/năm kh&aacute; cao, thậm ch&iacute; ở một số dự &aacute;n, bi&ecirc;n độ tăng gi&aacute; c&ograve;n nhanh hơn khu Đ&ocirc;ng Tp.HCM.</span></span><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Với ph&acirc;n kh&uacute;c n&agrave;y th&igrave; ngo&agrave;i lượng kh&aacute;ch mua từ Tp.HCM th&igrave; đa số l&agrave; người d&acirc;n Nhơn Trạch mua để ở hoặc chuyển nhượng lại. C&oacute; một số lượng kh&aacute;ch h&agrave;ng l&agrave;m việc tại Q.2, Q.9 cũng &quot;xuống tiền&quot; ở đ&acirc;y để ở v&agrave; di chuyển khoảng 20-30 ph&uacute;t đi l&agrave;m.</span></span><br />\r\n&nbsp;\r\n<h2><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Sốt đất Nhơn Trạch do Đ&acirc;u? Nh&agrave; đầu tư t&igrave;m g&igrave; ở thị trường Nhơn Trạch?</strong></span></span></h2>\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Thực tế thị trường cho thấy, nh&agrave; đầu tư đang c&oacute; xu hướng &quot;dạt&quot; về khu ven để đầu tư bất động sản. Đặc biệt giai đoạn cuối năm xu hướng n&agrave;y sẽ c&agrave;ng tăng mạnh mẽ.<br />\r\nThậm ch&iacute;, những người l&agrave;m việc ở S&agrave;i G&ograve;n sẵn s&agrave;ng về Bi&ecirc;n H&ograve;a, Nhơn Trạch (Đồng Nai), Dĩ An, Thuận An (B&igrave;nh Dương)&hellip; để sở hữu nh&agrave; ở v&agrave; chấp nhận di chuyển đoạn đường đi l&agrave;m v&igrave; c&aacute;c dự &aacute;n được quy hoạch kh&eacute;p k&iacute;n, gi&aacute; mềm hơn Tp.HCM.</span></span>\r\n\r\n<blockquote>\r\n<p><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">L&yacute; giải về điều n&agrave;y, giới chuy&ecirc;n m&ocirc;n cho rằng khu vực Nhơn Trạch (Đồng Nai) thời điểm n&agrave;y đang c&oacute; lợi thế r&otilde; n&eacute;t về hạ tầng khiến dự &aacute;n BĐS li&ecirc;n tục ăn theo. Mới nhất l&agrave; việc sẽ khởi c&ocirc;ng x&acirc;y dựng cầu C&aacute;t L&aacute;i (dự kiến ho&agrave;n th&agrave;nh trước 2020), nối Nhơn Trạch với Tp.HCM. Th&ocirc;ng tin n&agrave;y ngay lập tức khiến gi&aacute; v&agrave; giao dịch tại Nhơn Trạch biến động. NĐT c&oacute; xu hướng nhắm đến thị trường nơi đ&acirc;y như một nơi c&oacute; khả năng sinh lời tốt trong tương lai trước bối cảnh <strong>đất nền ngoại &ocirc; Tp.HCM dần hết h&agrave;ng.</strong></span></span></p>\r\n</blockquote>\r\n&nbsp;\r\n\r\n<h3 style=\"text-align:center\"><img alt=\"\" src=\"/doan/public/uploads/duan/sot-dat-nhon-trach.jpg\" style=\"height:413px; width:550px\" /></h3>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><em><span style=\"font-size:16px\">Hạ Tầng Nhơn Trạch Được Đầu Tư B&agrave;i Bản</span></em></span></div>\r\n<br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Đầu tư hạ tầng do ch&iacute;nh phủ ph&ecirc; duyệt ch&iacute;nh l&agrave; yếu tố cốt l&otilde;i ph&aacute;t triển bất động sản Nhơn Trạch.</span></span>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Nhơn Trạch gi&aacute;p ranh s&acirc;n bay Quốc tế Long Th&agrave;nh. Để ph&aacute;t triển to&agrave;n diện s&acirc;n bay, nhiều dự &aacute;n hạ tầng giao th&ocirc;ng đ&atilde; v&agrave; đang được triển khai để nối từ Tp.HCM về Long Th&agrave;nh. </span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Với lợi thế nằm giữa Tp.HCM - Long Th&agrave;nh, tất cả c&aacute;c c&ocirc;ng tr&igrave;nh giao th&ocirc;ng đều đi qua địa phận Nhơn Trạch được xem l&agrave; lợi thế để ph&aacute;t triển BĐS nơi đ&acirc;y.</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Đồng thời, Nhơn Trạch l&agrave; nơi tập trung ph&aacute;t triển c&ocirc;ng nghiệp trọng điểm của khu vực ph&iacute;a Nam khi c&oacute; tới 8 KCN, 2 cụm c&ocirc;ng nghiệp thu h&uacute;t đến 120.000 chuy&ecirc;n gia, lao động đến sinh sống v&agrave; l&agrave;m việc, tạo n&ecirc;n nhu cầu rất lớn về nh&agrave; ở cho c&aacute;c đối tượng n&agrave;y.&nbsp;</span></span></li>\r\n</ul>\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Yếu tố thứ 2 kh&ocirc;ng k&egrave;m phần quan trọng, đ&oacute; ch&iacute;nh l&agrave; gi&aacute; mềm. Đ&acirc;y ch&iacute;nh l&agrave; thế mạnh của c&aacute;c dự &aacute;n bất động sản v&ugrave;ng ven S&agrave;i G&ograve;n. Gi&aacute; đất Nhơn Trạch hiện nay, so với khu ven Tp.HCM th&igrave; vẫn c&ograve;n kh&aacute; mềm. Được xem l&agrave; lợi thế để NĐT bỏ tiền v&agrave;o.<br />\r\n<br />\r\nTheo c&aacute;c NĐT, chỉ c&aacute;ch Q.2 v&agrave; Q.9 một con s&ocirc;ng, nhưng mặt bằng gi&aacute; tại Nhơn Trạch hiện thấp hơn nhiều mặc d&ugrave; đ&atilde; tăng kh&aacute; mạnh trong 1 năm qua. Điều n&agrave;y mở ra cơ hội lớn cho c&aacute;c nh&agrave; đầu tư khi tham gia v&agrave;o thị trường BĐS thời điểm n&agrave;y.</span></span><br />\r\n<br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Theo t&igrave;m hiểu, được biết, hiện nay nhiều dự &aacute;n ở Nhơn Trạch vẫn bị gắn m&aacute;c &quot;dự &aacute;n ma&quot; v&igrave; kh&ocirc;ng c&oacute; người ở, nhưng thực tế thị trường cho thấy, nhiều khu d&acirc;n cư quy hoạch b&agrave;i bản hiện nay đ&atilde; c&oacute; cư d&acirc;n về ở đ&ocirc;ng đ&uacute;c.&nbsp;</span></span><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Nếu trước đ&acirc;y một số dự &aacute;n nh&agrave; thấp tầng b&aacute;n xong nhưng kh&ocirc;ng c&oacute; người đến ở l&agrave; do sản phẩm chủ yếu b&aacute;n cho NĐT Tp.HCM v&agrave; l&acirc;n cận, họ mua để lướt s&oacute;ng ch&iacute;nh. Hiện tại thị trường nơi đ&acirc;y chứng kiến sức mua kh&aacute; đa dạng, trong đ&oacute; tập trung ở nhu cầu ở thực, đặc biệt ph&acirc;n kh&uacute;c nh&agrave; phố li&ecirc;n kế được quy hoạch kh&eacute;p k&iacute;n trong khu d&acirc;n cư.</span></span><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Theo c&aacute;c chuy&ecirc;n gia nh&agrave; đất, BĐS Nhơn Trạch chưa c&oacute; dấu hiệu hạ nhiệt đến thời điểm cuối năm 2018 v&agrave; trong thời gian tới.</span></span>\r\n\r\n<h2><br />\r\n&nbsp;</h2>\r\n\r\n<h2><strong><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Gi&aacute; đất nền Nhơn Trạch mới nhất được cập nhật tr&ecirc;n hệ thống tin đăng</span></span></strong></h2>\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#444b59\">Gi&aacute; đất Nhơn Trạch được thống k&ecirc; từ gi&aacute; b&aacute;n sản phẩm tại k&ecirc;nh đăng tin ch&iacute;nh chủ mua b&aacute;n đất Nhơn Trạch:</span></span></span>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#444b59\">Gi&aacute; đất&nbsp;đường L&yacute; Th&aacute;i Tổ, Phan Văn Đ&aacute;ng thuộc x&atilde; Ph&uacute; Hữu đ&atilde; tăng từ 8.5 triệu đồng/m2. Giao động trong khoảng từ&nbsp;10 &ndash; 10.5 triệu đồng/m2.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"color:#444b59\"><span style=\"font-family:harmonia,Arial,Helvetica,sans-serif\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Gi&aacute; đất Đại Phước Nhơn Trạch tăng từ 7 triệu đồng/m2 l&ecirc;n 8.5 - 9 triệu đồng/m2.</span></span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"color:#444b59\"><span style=\"font-family:harmonia,Arial,Helvetica,sans-serif\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Theo sau l&agrave; gi&aacute; đất x&atilde; Ph&uacute; Hội tăng từ 6.5 triệu đồng/m2 l&ecirc;n 8.5 - 9 triệu đồng/m2 trong v&ograve;ng 3 th&aacute;ng.</span></span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"color:#444b59\"><span style=\"font-family:harmonia,Arial,Helvetica,sans-serif\"><span style=\"font-family:Arial,Helvetica,sans-serif\">V&agrave; cuối c&ugrave;ng l&agrave; x&atilde; Ph&uacute; Đ&ocirc;ng với mức gi&aacute; đất tăng từ 6.5 triệu đồng/m2 l&ecirc;n 8.5 triệu đồng/m2.</span></span></span></span></li>\r\n</ul>\r\n<br />\r\n<span style=\"font-size:18px\"><span style=\"color:#444b59\"><span style=\"font-family:harmonia,Arial,Helvetica,sans-serif\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Tham khảo gi&aacute; đất Nhơn Trạch tại <a href=\"https://nhontrachdatnen.com/\">www.nhontrachdatnen.com</a>. K&ecirc;nh th&ocirc;ng tin rao b&aacute;n đất ch&iacute;nh chủ với c&aacute;c sản phẩm ch&iacute;nh chủ đăng b&aacute;n.<br />\r\nHỗ trợ đăng tin mua b&aacute;n cho nh&agrave; đầu tư, người t&igrave;m mua đất định cư...<br />\r\nHotline:&nbsp;</span></span></span></span><span style=\"font-size:16px\"><a href=\"http://tel:0945555752/\"><strong>094 5555 752</strong></a></span><span style=\"font-size:18px\"><span style=\"color:#444b59\"><span style=\"font-family:harmonia,Arial,Helvetica,sans-serif\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp;để được tư vấn trực tiếp.</span></span></span></span>', 'sot-dat-nhon-trach-tang-gia-1545446843.jpg', 1),
(4, 'Thị trường đất nền TP.HCM có dấu hiệu hạ nhiệt', 'Kh&ocirc;ng c&ograve;n s&ocirc;i động như c&aacute;ch đ&acirc;y v&agrave;i tuần, giới đầu tư, m&ocirc;i giới đất nền đang chuyển sang thăm d&ograve;, &aacute;n binh bất động sau một loạt chỉ thị của th&agrave;nh phố nhằm chấn chỉnh t&igrave;nh trạng sốt đất ảo thời gian qua.\r\n<h3><br />\r\nHoạt động d&egrave; chừng</h3>\r\n<br />\r\nNgay sau khi UBND TP.HCM x&aacute;c nhận th&ocirc;ng tin một số huyện v&ugrave;ng ven như B&igrave;nh Ch&aacute;nh, Nh&agrave; B&egrave;, H&oacute;c M&ocirc;n chưa đủ điều kiện để l&ecirc;n quận, đồng thời c&oacute; những chỉ đạo y&ecirc;u cầu chấn chỉnh t&igrave;nh trạng c&ograve; đất thổi gi&aacute;, g&acirc;y sốt đất nền th&igrave; thị trường ph&acirc;n kh&uacute;c n&agrave;y bắt đầu c&oacute; dấu hiệu giảm nhiệt. Giới đầu tư, c&ograve; đất chuyển sang trạng th&aacute;i thăm d&ograve; thị trường thay v&igrave; giao dịch nhộn nhịp như l&uacute;c trước.<br />\r\n<br />\r\nGhi nhận tại quận 9 những ng&agrave;y gần đ&acirc;y, giao dịch đất nền đ&atilde; trầm lắng. Dọc c&aacute;c tuyến đường như Nguyễn Duy Trinh, L&atilde; Xu&acirc;n Oai, L&ograve; Lu, Nguyễn Xiển&hellip; t&igrave;nh trạng m&ocirc;i giới tụ th&agrave;nh nh&oacute;m, tr&agrave;n ra đường để ch&agrave;o mời kh&aacute;ch mua đất kh&ocirc;ng c&ograve;n t&aacute;i diễn. C&aacute;c qu&aacute;n caf&eacute; ven đường cũng thưa vắng b&oacute;ng nh&acirc;n vi&ecirc;n m&ocirc;i giới, c&aacute;c bảng quảng c&aacute;o cũng xuất hiện &iacute;t hơn.<br />\r\n<br />\r\nKhu vực v&ograve;ng xoay Nguyễn Duy Trinh (dưới ch&acirc;n cầu vượt cao tốc Long Th&agrave;nh &ndash; Giầu D&acirc;y) c&aacute;ch đ&acirc;y v&agrave;i tuần l&uacute;c n&agrave;o cũng c&oacute; v&agrave;i nh&oacute;m nh&acirc;n vi&ecirc;n m&ocirc;i giới tụ tập th&igrave; nay cũng chỉ một hai người đứng trực.<br />\r\n<br />\r\nMột nh&acirc;n vi&ecirc;n m&ocirc;i giới khu vực n&agrave;y cho biết, khoảng 1 tuần trở lại đ&acirc;y t&igrave;nh h&igrave;nh giao dịch, kh&aacute;ch hỏi mua đất nền giảm hẳn. Chủ yếu người đến hỏi để nắm th&ocirc;ng tin, thăm d&ograve; t&igrave;nh h&igrave;nh chứ kh&ocirc;ng xuống tiền ngay như l&uacute;c trước.<br />\r\n<br />\r\nTuy nhi&ecirc;n, theo nh&acirc;n vi&ecirc;n n&agrave;y, gi&aacute; b&aacute;n chưa bị t&aacute;c động nhiều, vẫn giữ mức tương đối so với l&uacute;c trước. Cụ thể, gi&aacute; đất mặt tiền đường Bưng &Ocirc;ng Tho&agrave;n vẫn đang ở mức tr&ecirc;n 30 triệu/m2, đường L&ograve; Lu, L&atilde; Xu&acirc;n Oai vẫn giao động từ 18 &ndash; 22 triệu/m2. &nbsp;<br />\r\n<br />\r\n&ldquo;Mặc d&ugrave; c&oacute; ảnh hưởng từ những quyết định của th&agrave;nh phố, nhưng gi&aacute; b&aacute;n vẫn chưa bị t&aacute;c động nhiều. Hiện nh&agrave; đầu tư đang c&oacute; động th&aacute;i găm h&agrave;ng, chờ t&igrave;nh h&igrave;nh sắp tới sẽ c&oacute; quyết định bung h&agrave;ng hay kh&ocirc;ng&rdquo;, người n&agrave;y cho biết.<br />\r\n<br />\r\nTại c&aacute;c khu vực của huyện B&igrave;nh Ch&aacute;nh, Nh&agrave; B&egrave; t&igrave;nh h&igrave;nh mua b&aacute;n đất nền cũng lắng xuống. Đặc biệt, t&igrave;nh trạng người người l&agrave;m c&ograve; đất, nh&agrave; nh&agrave; l&agrave;m c&ograve; đất cũng kh&ocirc;ng c&ograve;n t&aacute;i diễn nhiều như c&aacute;ch đ&acirc;y v&agrave;i tuần.<br />\r\n<br />\r\nChủ một qu&aacute;n nước tr&ecirc;n đường Nữ D&acirc;n C&ocirc;ng. x&atilde; Vĩnh Lộc A, huyện B&igrave;nh Ch&aacute;nh, cho biết, c&aacute;ch đ&acirc;y &iacute;t tuần qu&aacute;n của b&agrave; &ldquo;ăn n&ecirc;n l&agrave;m ra&rdquo; v&igrave; được nhiều c&ograve; đất chọn l&agrave;m &ldquo;văn ph&ograve;ng&rdquo; nơi gặp gỡ kh&aacute;ch h&agrave;ng. Tuy nhi&ecirc;n, mấy ng&agrave;y gần đ&acirc;y th&igrave; thưa vắng hẳn.<br />\r\n<br />\r\n&ldquo;Trước đ&acirc;y, nhiều người đến hỏi đất v&igrave; c&oacute; th&ocirc;ng tin B&igrave;nh Ch&aacute;nh sẽ được l&ecirc;n quận nhưng giờ th&igrave; kh&ocirc;ng c&ograve;n nhiều nữa. Việc c&ocirc;ng an sẽ điều tra những c&ograve; đất tung th&ocirc;ng tin, thổi gi&aacute; đất cũng khiến nhiều người hạn chế hơn. Nhưng quan trọng nhất, giới c&ograve; đất đang chờ đợi, xem x&eacute;t t&acirc;m l&yacute; của người mua&rdquo;, một m&ocirc;i giới nh&agrave; đất chia sẻ.\r\n<h3><br />\r\nChưa khẳng định gi&aacute; đất sẽ giảm</h3>\r\n<br />\r\nTheo đ&aacute;nh gi&aacute; của nhiều chuy&ecirc;n gia bất động sản, những chỉ đạo của th&agrave;nh phố về c&ocirc;ng khai th&ocirc;ng tin quy hoạch, hạ tầng đang t&aacute;c động t&iacute;ch cực l&ecirc;n thị trường đất nền. Động th&aacute;i n&agrave;y đ&atilde; l&agrave;m g&atilde;y &ldquo;cần trục&rdquo; đẩy gi&aacute; của giới đầu nậu, thổi gi&aacute;, thao t&uacute;ng thị trường suốt thời gian qua. Đồng thời, c&oacute; thể sẽ tạo n&ecirc;n mặt bằng gi&aacute; mới, s&aacute;t với thực tế, tạo điều kiện cho người mua, đặc biệt l&agrave; người mua ở thực.<br />\r\n<br />\r\n&Ocirc;ng V&otilde; Hữu Khoa, Tổng gi&aacute;m đốc C&ocirc;ng ty CP Đại Ph&uacute;c Land cho biết, những chỉ đạo mới đ&acirc;y của th&agrave;nh phố l&agrave; ho&agrave;n to&agrave;n cần thiết. Gi&aacute; đất tăng trong thời gian vừa qua c&oacute; nhiều nguy&ecirc;n do, trong đ&oacute; việc một số khu vực c&oacute; hạ tầng, giao th&ocirc;ng được đầu tư ho&agrave;n thiện l&agrave;m gi&aacute; đất tăng l&agrave; ch&iacute;nh đ&aacute;ng. Tuy nhi&ecirc;n, mức tăng gi&aacute; trong những khu vực n&agrave;y cũng kh&aacute;c nhau.<br />\r\n<br />\r\nPhần lớn c&ograve;n lại gi&aacute; đất tăng ảo l&agrave; c&oacute; sự nh&uacute;ng tay của giới c&ograve; đất, những đầu nậu. &ldquo;Việc ch&iacute;nh quyền địa phương một số quận huyện dễ d&atilde;i trong việc cấp ph&eacute;p chuyển mục đ&iacute;ch sử dụng đất đ&atilde; tạo điều kiện cho những người l&agrave;m bất động sản nhỏ lẻ đều tham gia được thị trường. Nh&oacute;m đối tượng n&agrave;y sau khi c&oacute; đất th&igrave; tạo n&ecirc;n những dự &aacute;n k&eacute;m chất lượng, kh&ocirc;ng đảm bảo quy chuẩn, g&acirc;y khan hiếm đất v&agrave; tạo n&ecirc;n c&aacute;c cơn sốt&rdquo;, &ocirc;ng Khoa ph&acirc;n t&iacute;ch.<br />\r\n<br />\r\nN&oacute;i về khả năng gi&aacute; đất sẽ giảm, &ocirc;ng Khoa cho rằng điều n&agrave;y phụ thuộc v&agrave;o khả năng t&agrave;i ch&iacute;nh của giới đầu tư gom đất. Nếu những người ngắn vốn, vay ng&acirc;n h&agrave;ng chịu &aacute;p lực về l&atilde;i vay th&igrave; c&oacute; thể sắp tới họ sẽ bung h&agrave;ng, chấp nhận gi&aacute; thấp hơn. Ngược lại, những người trường vốn, t&agrave;i ch&iacute;nh mạnh họ kh&ocirc;ng muốn hạ gi&aacute; để chịu lỗ th&igrave; sẽ găm h&agrave;ng chờ thời cơ, c&oacute; thể một hoặc v&agrave;i năm nữa khi thị trường tốt hơn sẽ b&aacute;n ra.<br />\r\n<br />\r\n&ldquo;Do đ&oacute;, sắp tới gi&aacute; c&oacute; thể điều chỉnh, kh&ocirc;ng tăng &agrave;o ạt như trước nữa nhưng giảm th&igrave; c&oacute; thể l&agrave; kh&ocirc;ng giảm&rdquo;, &ocirc;ng Khoa n&oacute;i.<br />\r\n<br />\r\nĐồng quan điểm, &ocirc;ng Nguyễn Văn Đực, Gi&aacute;m đốc C&ocirc;ng ty Địa ốc Đất L&agrave;nh cho rằng, những chỉ đạo của th&agrave;nh phố tuy hơi chậm nhưng cần thiết để siết lại t&igrave;nh trạng sốt đất ảo do giới đầu cơ, co đất tạo n&ecirc;n thời gian qua.<br />\r\n<br />\r\nTuy nhi&ecirc;n, &ocirc;ng Đực cho biết, đ&acirc;y kh&ocirc;ng phải l&agrave; chuyện ng&agrave;y một ng&agrave;y hai, nếu kh&ocirc;ng c&oacute; những biện ph&aacute;p quyết liệt v&agrave; l&acirc;u d&agrave;i th&igrave; t&igrave;nh trạng sốt đất sẽ chỉ x&igrave; trong một thời gian ngắn rồi sẽ sốt lại, gi&aacute; lại được n&acirc;ng l&ecirc;n, v&agrave; hậu quả sẽ đổ hết l&ecirc;n đầu của người mua.<br />\r\n<br />\r\nCh&uacute;ng t&ocirc;i sẽ tiếp tục cập nhật t&igrave;nh h&igrave;nh.', 'du-an-thao-dien-sapphire-1497757936.jpg', 4),
(5, 'Đất Sài Gòn hạ nhiệt thì ở Hà Nội môi giới lại đẩy giá lên cao', 'Sau cơn sốt đất diễn ra trong mấy th&aacute;ng trở lại đ&acirc;y, hiện giao dịch tr&ecirc;n thị trường đất nền ở một số quận huyện v&ugrave;ng ven đ&atilde; chững lại. Những người mới mua c&aacute;ch đ&acirc;y v&agrave;i th&aacute;ng đang kh&oacute; khăn để tho&aacute;t h&agrave;ng.\r\n<h3><br />\r\nLoại bỏ c&ograve; đất l&agrave;m ăn chộp giựt</h3>\r\n<br />\r\nTrong cơn sốt đất v&ugrave;ng ven tại TP.HCM trong thời gian gần đ&acirc;y, quận 9 được xem l&agrave; điểm n&oacute;ng &nbsp;cả về mức độ tăng gi&aacute;, cũng như tần suất chạm mặt với c&ograve; đất. Dọc theo trục đường Nguyễn Duy Trinh, Đỗ Xu&acirc;n Hợp, Li&ecirc;n Phường, Bưng &Ocirc;ng Tho&agrave;n, L&atilde; Xu&acirc;n Oai, Đ&ocirc;ng Tăng Long&hellip; đ&acirc;u đ&acirc;u cũng thấy m&ocirc;i giới nh&agrave; đất.<br />\r\n<br />\r\nGiờ đ&acirc;y, số lượng người tham gia v&agrave;o cơn sốt gi&aacute; n&agrave;y bao gồm cả c&ograve; đất v&agrave; kh&aacute;ch h&agrave;ng đều giảm nhiệt. Nếu trước đ&acirc;y, cứ v&agrave;i chục m&eacute;t lại c&oacute; một nh&oacute;m người đứng ch&agrave;o h&agrave;ng, giới thiệu khu đất n&agrave;y, miếng đất kia th&igrave; nay c&ograve; đất thưa thớt hẳn.\r\n<div style=\"text-align:center\"><img alt=\"dat nen quan 9 giam nhiet\" src=\"/doan/public/uploads/images/dat%20nen%20quan%209%20chung%20lai.jpg\" style=\"height:349px; width:465px\" /></div>\r\n<br />\r\nĐơn cử, như gi&aacute; đất tại dự &aacute;n gồm khoảng hơn 40 nền, nằm ngay tr&ecirc;n trục đường Li&ecirc;n Phường, đoạn c&aacute;ch đường V&agrave;nh Đai 2 chỉ 500m, xung quanh gần rất nhiều dự &aacute;n nh&agrave; phố, biệt thự &nbsp;như Villa Park, Lucasta, Mega Ruby, Mega Residence&hellip; c&aacute;ch đ&acirc;y chừng 2 th&aacute;ng được c&ograve; đất h&eacute;t với gi&aacute; 57 triệu đồng/m2. Nhưng cũng tại vị tr&iacute; n&agrave;y trong s&aacute;ng ng&agrave;y 24-5 đ&atilde; giảm nhẹ xuống c&ograve;n 56 triệu đồng/m2 đối với c&aacute;c l&ocirc; mặt tiền.<br />\r\n<br />\r\nTương tự những l&ocirc; đất trong khu vực đường Bưng &Ocirc;ng Tho&agrave;n, c&ugrave;ng thời điểm th&aacute;ng trước được nh&acirc;n vi&ecirc;n m&ocirc;i giới ch&agrave;o b&aacute;n với gi&aacute; khoảng 30 triệu đồng/m2 chưa ra sổ, th&igrave; nay hạ xuống khoảng 28,5-29 triệu đồng/m2.<br />\r\n<br />\r\nAnh Tấn, một nh&acirc;n vi&ecirc;n m&ocirc;i giới cho biết: C&aacute;c giao dịch đ&atilde; chững lại rất nhiều. Những người mua c&aacute;ch đ&acirc;y chừng 8-9 th&aacute;ng th&igrave; vẫn c&oacute; lời, song những ai đầu tư theo kiểu lướt s&oacute;ng, mua c&aacute;ch đ&acirc;y khoảng 2 th&aacute;ng m&agrave; giờ muốn b&aacute;n cũng kh&ocirc;ng dễ. Bởi t&acirc;m l&yacute; kh&aacute;ch h&agrave;ng giờ đ&acirc;y lại chờ đợi gi&aacute; sẽ giảm nữa.<br />\r\n<br />\r\n&Ocirc;ng Trần B&igrave;nh, nh&agrave; ở quận quận 2, một nh&agrave; đầu tư bất động sản cho rằng: Đầu tư bất động sản kh&ocirc;ng giống như v&agrave;ng, hay đ&ocirc;la, cứ muốn b&aacute;n l&agrave; c&oacute; người mua ngay. Nếu đầu tư theo kiểu t&acirc;m l&yacute; đ&aacute;m đ&ocirc;ng th&igrave; rất dễ &ldquo;chết&rdquo; nhưng nếu lựa chọn l&ocirc; đất tại những nơi c&oacute; kết nối hạ tầng ph&aacute;t triển, c&oacute; nhiều dự &aacute;n lớn xung quanh&hellip; th&igrave; vẫn c&oacute; cơ hội để gia tăng gi&aacute; trị.\r\n<h3><br />\r\nM&ocirc;i giới H&agrave; Nội giở tr&ograve; h&eacute;t gi&aacute;</h3>\r\n<br />\r\nNếu như cơn sốt ở TP HCM đ&atilde; bắt đầu hạ nhiệt th&igrave; tại H&agrave; Nội m&ocirc;i giới vẫn đang miệt m&agrave;i đẩy gi&aacute; đất. Đơn cử như tại dự &aacute;n Thanh H&agrave; Cienco 5, nhiều người c&oacute; nhu cầu b&aacute;n đất nền liền kề tại đ&acirc;y đang rao b&aacute;n 18 - 24 triệu đồng/m2 t&ugrave;y l&ocirc;. Tại một số vị tr&iacute; đẹp, gi&aacute; đất được đẩy l&ecirc;n đến 31 triệu đồng/m2. Nhưng theo lời anh Ng&ocirc; Văn Long, chủ một tin rao vặt đất tại Thanh H&agrave; Cienco 5, kh&aacute;ch hầu như đều trả gi&aacute; thấp hơn mức rao b&aacute;n nhiều. V&igrave; vậy, rao tin cả v&agrave;i th&aacute;ng nhưng anh vẫn chưa b&aacute;n được mảnh đất diện t&iacute;ch hơn 80m2 của m&igrave;nh.<br />\r\n<br />\r\nTheo t&igrave;m hiểu, gi&aacute; đất dự &aacute;n Thanh H&agrave; Cienco 5 đang bị đẩy l&ecirc;n kh&aacute; mạnh. C&oacute; khu vực rao gi&aacute; gấp 1,5 - 2 lần so với gi&aacute; tr&ecirc;n hợp đồng mua b&aacute;n ban đầu. Thậm ch&iacute; một số người l&agrave;m m&ocirc;i giới tại văn ph&ograve;ng nh&agrave; đất quanh khu vực n&agrave;y b&aacute;o gi&aacute; 50 - 55 triệu đồng/m2 (gi&aacute; hợp đồng 24 triệu đồng/m2 cho l&ocirc; đẹp cạnh đường). C&ograve;n khu vực gần hồ, đất đang được đẩy l&ecirc;n mức gi&aacute; khoảng 25 - 28 triệu đồng/m2 so với gi&aacute; hợp đồng 16 triệu đồng/m2.<br />\r\n<br />\r\nM&ocirc;i giới t&ecirc;n Xu&acirc;n cho biết, nếu nh&agrave; đầu tư kh&ocirc;ng quyết nhanh, gi&aacute; đất c&ograve;n tăng l&ecirc;n từng ng&agrave;y. Nhằm thuyết phục kh&aacute;ch &quot;xuống tiền&quot;, c&ograve; đất n&agrave;y đưa ra một số chi&ecirc;u thức hết sức hiệu quả l&agrave; mua b&aacute;n sang tay nhanh hưởng ch&ecirc;nh lệch. Xu&acirc;n ph&acirc;n t&iacute;ch: &quot;Đ&aacute;ng ra phải v&agrave;o ngay 50% tổng gi&aacute; trị hợp đồng nhưng c&oacute; thể xin l&ugrave;i đ&oacute;ng 2/3 với l&yacute; do phải xoay tiền. Trong thời gian chờ đ&oacute;ng tiếp số c&ograve;n lại sẽ t&igrave;m c&aacute;ch đẩy đi với gi&aacute; cao hơn, cũng ăn ch&ecirc;nh được một khoản.<br />\r\n<br />\r\nTuy nhi&ecirc;n tr&ecirc;n thực tế mọi chuyện kh&ocirc;ng &quot;dễ ăn&quot; như vậy. Một người mua đất đang bị &quot;sa lầy&quot; v&igrave; chi&ecirc;u thức n&agrave;y cho hay, việc đẩy h&agrave;ng đi rất kh&oacute; khăn bởi nh&agrave; đầu tư n&agrave;o c&oacute; ch&uacute;t kinh nghiệm th&igrave; đều biết l&agrave; đất ở đ&acirc;y đang bị thổi gi&aacute;, giao dịch thật kh&ocirc;ng c&oacute; nhiều.<br />\r\n<br />\r\nKh&ocirc;ng &iacute;t nh&agrave; đầu tư đến thăm mua đất tại dự &aacute;n n&agrave;y cũng thuộc đội qu&acirc;n &quot;thổi gi&aacute;&quot;. Khi biết ch&uacute;ng t&ocirc;i c&oacute; nhu cầu &quot;lướt s&oacute;ng&quot; đất tại Thanh H&agrave; Cienco 5, một nh&agrave; đầu tư giới thiệu t&ecirc;n Tuấn Anh cho biết, nếu ngại mua đơn lẻ, c&oacute; thể gom tiền chung với một số người kh&aacute;c, sau đ&oacute; c&ugrave;ng nhau thổi gi&aacute;. Đến mức hợp l&yacute; l&agrave; c&ugrave;ng bảo nhau chốt, đẩy đi, thu tiền về.<br />\r\n<br />\r\nĐiều đ&aacute;ng n&oacute;i l&agrave; mặc d&ugrave; gi&aacute; bị thổi tăng v&ugrave;n vụt, nhưng hạ tầng dự &aacute;n n&agrave;y hầu như chưa c&oacute; g&igrave;. Đến nay, dự &aacute;n vẫn mới chỉ c&oacute; 3 t&ograve;a nh&agrave; ho&agrave;n thiện, hạ tầng c&acirc;y xanh chưa c&oacute;. Phần hồ theo như thiết kế cũng chưa c&oacute; nhưng gi&aacute; b&aacute;n đ&atilde; bị đội l&ecirc;n gấp 1,5 - 2 lần so với gi&aacute; v&agrave;o hợp đồng. Trước đ&oacute;, dự &aacute;n n&agrave;y c&oacute; kh&aacute; nhiều tai tiếng. Đơn cử, v&agrave;o th&aacute;ng 6/2016, cơ quan an ninh điều tra thuộc Bộ C&ocirc;ng an đ&atilde; y&ecirc;u cầu dừng hoạt động huy động vốn li&ecirc;n quan kinh doanh bất động sản thuộc dự &aacute;n n&agrave;y. Được biết, nhiều năm liền, dự &aacute;n cũng li&ecirc;n quan đến tranh chấp, kiện c&aacute;o, kh&ocirc;ng đưa v&agrave;o hoạt động. B&ecirc;n cạnh Thanh H&agrave; Cieco 5, đất ở một số khu vực kh&aacute;c tại H&agrave; Nội cũng bị &quot;thổi gi&aacute;&quot; mạnh như ở P. Dương Nội (Q.H&agrave; Đ&ocirc;ng) điểm gần dự &aacute;n Trung t&acirc;m thương mại Aeon Mall sắp đầu tư, P. Mỗ Lao (Q.H&agrave; Đ&ocirc;ng), khu đ&ocirc; thị Văn Ph&uacute; (Q.H&agrave; Đ&ocirc;ng)...\r\n<div style=\"text-align:right\"><br />\r\n<em>Theo NLĐ</em></div>\r\n', 'cac-nha-dau-tu-dat-vao-vung-ven-sai-gon-lo-nang-1496251228-1496307733-1497628566.jpg', 4);
INSERT INTO `articles` (`id`, `title`, `description`, `image`, `cate_id`) VALUES
(6, 'Dự Án Cầu Cát Lái Khi Nào Khởi Công Xây Dựng?', '<p><span style=\"font-size:18px\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\">Sắp x&acirc;y cầu C&aacute;t L&aacute;i nối Đồng Nai với TP.HCM</span></strong></span></p>\r\n\r\n<blockquote>\r\n<p><br />\r\n<span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Dự &aacute;n cầu C&aacute;t L&aacute;i được đẩy nhanh, th&agrave;nh phố Nhơn Trạch c&oacute; cơ hội hồi sinh<br />\r\nĐồng Nai v&agrave; TP.HCM đ&atilde; c&oacute; cuộc họp b&agrave;n việc thực hiện x&acirc;y cầu C&aacute;t L&aacute;i, nối huyện Nhơn Trạch, tỉnh Đồng Nai với quận 2, TP.HCM v&agrave; bước đầu đưa ra quyết định Đồng Nai thực hiện dự &aacute;n.</span></span></p>\r\n</blockquote>\r\n\r\n<div style=\"text-align:center\"><br />\r\n<span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"dự án cầu cát lái khi nào khởi công\" src=\"/doan/public/uploads/duan/du-an-cau-cat-lai-khi-nao-khoi-cong.jpg\" style=\"height:367px; width:550px\" /><br />\r\nQuy Hoạch Cầu C&aacute;t L&aacute;i Với Tổng Vốn 7.730 Tỷ Đồng</span></span></div>\r\n<br />\r\n<span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Ng&agrave;y 29-8, l&atilde;nh đạo tỉnh Đồng Nai l&agrave;m vi&ecirc;̣c với c&aacute;c sở, ng&agrave;nh v&agrave; huy&ecirc;̣n Nhơn Trạch v&ecirc;̀ dự &aacute;n khu trung t&acirc;m th&agrave;nh ph&ocirc;́ mới Nhơn Trạch.<br />\r\n<br />\r\nQua đ&oacute; Chủ tịch UBND tỉnh Đồng Nai, &Ocirc;ng Đinh Quốc Th&aacute;i đ&atilde; y&ecirc;u c&acirc;̀u sở K&ecirc;́ hoạch - Đ&acirc;̀u tư ph&ocirc;́i hợp với c&aacute;c sở, ng&agrave;nh r&agrave; so&aacute;t lại dự &aacute;n. Tiến h&agrave;nh b&ocirc;̉ sung v&agrave; ho&agrave;n thi&ecirc;̣n gấp r&uacute;t h&ocirc;̀ sơ ho&agrave;n thi&ecirc;̣n đ&ecirc;̉ sớm tr&igrave;nh Thủ tướng ph&ecirc; duy&ecirc;̣t v&agrave; thực hi&ecirc;̣n.</span></span>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Đồng Thời l&atilde;nh đạo Đồng Nai v&agrave; TP.HCM đ&atilde; c&oacute; cuộc họp b&agrave;n việc thực hiện x&acirc;y cầu C&aacute;t L&aacute;i, nối huyện Nhơn Trạch, tỉnh Đồng Nai với quận 2, TP.HCM. Cuộc họp đ&atilde; c&oacute; bước đầu đưa ra quyết định Đồng Nai thực hiện dự &aacute;n.<br />\r\n<br />\r\nTheo h&ocirc;̀ sơ đ&ecirc;̀ nghị quy&ecirc;́t định chủ trương đ&acirc;̀u tư, <strong><em>dự &aacute;n cầu C&aacute;t L&aacute;i</em></strong> c&oacute; t&ocirc;̉ng mức đ&acirc;̀u tư khoảng <strong><em>7.730 tỷ đ&ocirc;̀ng</em></strong>, trong đ&oacute; v&ocirc;́n vay t&iacute;n dụng thương mại g&acirc;̀n 5.300 tỷ đ&ocirc;̀ng c&ograve;n lại l&agrave; v&ocirc;́n của chủ đ&acirc;̀u tư.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Dự &aacute;n khu trung t&acirc;m th&agrave;nh ph&ocirc;́ mới Nhơn Trạch c&oacute; t&ocirc;̉ng di&ecirc;̣n t&iacute;ch hơn 600 ha dự kiến thực hiện trong v&ograve;ng 8 năm. H&ocirc;̀ sơ dự &aacute;n hi&ecirc;̣n đ&atilde; tr&igrave;nh l&acirc;́y &yacute; ki&ecirc;́n c&aacute;c b&ocirc;̣, ng&agrave;nh th&acirc;̉m định.<br />\r\n<br />\r\nTheo y&ecirc;u c&acirc;̀u của c&aacute;c b&ocirc;̣, ng&agrave;nh th&igrave; phải th&acirc;̉m định v&ecirc;̀ năng lực t&agrave;i ch&iacute;nh của chủ đ&acirc;̀u tư đ&ecirc;̀ xu&acirc;́t, dự &aacute;n phải c&oacute; khung ch&iacute;nh s&aacute;ch b&ocirc;̀i thường h&ocirc;̃ trợ t&aacute;i định cư, những khu đ&acirc;́t trong dự &aacute;n c&oacute; gi&aacute; trị thương mại cao ti&ecirc;́n h&agrave;nh đ&acirc;́u th&acirc;̀u, vi&ecirc;̣c thu h&ocirc;̀i đ&acirc;́t chỉ được thực hi&ecirc;̣n sau khi ho&agrave;n th&agrave;nh x&acirc;y dựng nh&agrave; ở hoặc cơ sở hạ t&acirc;̀ng của khu t&aacute;i định cư...</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Tại cuộc họp, &ocirc;ng Trần Văn Vĩnh, Ph&oacute; chủ tịch UBND tỉnh&nbsp;Đồng Nai, đề nghị để tỉnh n&agrave;y nhận tr&aacute;ch nhiệm x&acirc;y cầu C&aacute;t L&aacute;i. V&igrave; &ocirc;ng cho rằng địa phương cần k&iacute;p việc x&acirc;y cầu hơn, n&ecirc;n muốn đứng ra chủ tr&igrave; thực hiện dự &aacute;n.<br />\r\n<br />\r\n&Ocirc;ng Nguyễn Văn T&aacute;m, Ph&oacute; gi&aacute;m đốc Sở Giao th&ocirc;ng Vận tải TP.HCM, t&aacute;n th&agrave;nh với đề xuất n&agrave;y. Hiện tại&nbsp;TP.HCM chưa thể tập trung nguồn kinh ph&iacute; do nhiều hạn mục đang cần triển khai. Do đ&oacute; Tp HCM sẽ&nbsp;kh&oacute; triển khai nhanh n&ecirc;n nếu <strong>để Đồng Nai chủ tr&igrave; thực hiện dự &aacute;n l&agrave; hợp l&yacute;.&nbsp;</strong></span></span><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Dự kiến c&ocirc;ng tr&igrave;nh c&oacute; thể bắt đầu khởi c&ocirc;ng từ năm 2020.</span></span><br />\r\n&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Đ&aacute;nh thức tiềm năng khu vực ph&iacute;a đ&ocirc;ng tỉnh Đồng Nai</span></span></strong></p>\r\n\r\n<blockquote>\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Dự &aacute;n s&acirc;n bay quốc tế Long Th&agrave;nh sắp được thực hiện, d&ugrave; c&oacute; hệ mạng lưới cao tốc đang ng&agrave;y c&agrave;ng kết nối nhiều nơi hơn nhưng khu vực ph&agrave; C&aacute;t L&aacute;i cũng kh&ocirc;ng thể chậm hiện đại h&oacute;a để c&oacute; thể bắt kịp tốc độ ph&aacute;t triển.</span></span></p>\r\n</blockquote>\r\n\r\n<p style=\"text-align:center\"><br />\r\n<span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"dự án cầu cát lái khi nào xây\" src=\"/doan/public/uploads/duan/du-an-cat-lai-khi-nao-xay.jpg\" style=\"height:414px; width:550px\" /><br />\r\nDự Kiến Dự &aacute;n Cầu C&aacute;t L&aacute;i Dự Khởi C&ocirc;ng X&acirc;y Dựng Năm 2020</span></span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Chưa kể ngo&agrave;i đ&aacute;nh thức tại chỗ tiềm năng khu vực, việc x&acirc;y cầu C&aacute;t L&aacute;i kết nối Đồng Nai- TP.HCM đồng thời c&ograve;n gi&uacute;p năng lực vận tải từ B&agrave; Rịa- Vũng T&agrave;u đến cả c&aacute;c tỉnh miền T&acirc;y tăng mạnh.&nbsp; C&ograve;n TP.HCM, hướng ph&aacute;t triển về ph&iacute;a Đ&ocirc;ng kh&ocirc;ng thể để c&oacute; một &quot;điểm l&ugrave;i&quot;.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Ph&agrave; C&aacute;t L&aacute;i đang đi về ph&iacute;a lạc hậu kh&ocirc;ng đ&aacute;p ứng được nhu cầu vận tải v&agrave; đi lại của người d&acirc;n. Điều n&agrave;y g&acirc;y ra nhiều bất cập tại giao th&ocirc;ng li&ecirc;n kết v&ugrave;ng, kẹt xe ng&aacute;n ngẩm.&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Khi nghe tin cầu C&aacute;t L&aacute;i c&oacute; thể sắp được triển khai, người d&acirc;n ở x&atilde; Ph&uacute; Hữu, huyện Nhơn Trạch rất vui mừng. Họ đ&atilde; qu&aacute; &quot;ng&aacute;n&quot; với cảnh &ugrave;n tắc giao th&ocirc;ng, việc chờ đợi qua ph&agrave; mỗi khi c&oacute; c&ocirc;ng chuyện, nhất l&agrave; v&agrave;o c&aacute;c dịp lễ, tết.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&quot;Ch&uacute;ng t&ocirc;i sống gần TP.HCM, gần đ&ocirc; thị mới Nhơn Trạch nhưng hiện vẫn l&agrave; v&ugrave;ng n&ocirc;ng th&ocirc;n. C&oacute; cầu, c&aacute;c x&atilde; v&ugrave;ng n&ocirc;ng th&ocirc;n n&agrave;y sẽ đổi kh&aacute;c&quot;- chị Mai, ngụ x&atilde; Ph&uacute; Hữu, n&oacute;i.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Đẩy nhanh tốc độ triển khai dự &aacute;n, tới đ&acirc;y, ng&agrave;nh chức năng Đồng Nai v&agrave; TP.HCM sẽ tiếp tục c&oacute; c&aacute;c cuộc trao đổi, thống nhất c&aacute;c phương &aacute;n x&acirc;y dựng, chọn nh&agrave; đầu tư, giải ph&oacute;ng mặt bằng.&nbsp;&nbsp;</span></span></p>\r\n', 'du-an-cau-cat-lai-1545464324.jpg', 1),
(7, 'Hỗ Trợ Pháp Lý Nhà Đất Cho Người Bán', '<div style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>Chuy&ecirc;n mục Hỗ trợ Ph&aacute;p l&yacute; cho người B&Aacute;N bất động sản l&agrave; chuy&ecirc;n mục của trang www.nhontrachdatnen.com.&nbsp;Đồng h&agrave;nh c&ugrave;ng chủ t&agrave;i sản nh&agrave;/đất tại Nhơn Trạch &ndash; Đồng Nai, chuẩn bị hồ sơ ph&aacute;p l&yacute; đầy đủ, tiếp cận người mua nhanh ch&oacute;ng v&agrave; giao dịch mua b&aacute;n an to&agrave;n, chất lượng</strong><br />\r\n<br />\r\nHiện nay, Người b&aacute;n BĐS chủ yếu l&agrave; c&aacute; nh&acirc;n nhỏ lẻ, việc để mỗi c&aacute; nh&acirc;n am hiểu về thị trường, gi&aacute; cả, kh&ocirc;ng bị b&aacute;n gi&aacute; qu&aacute; thấp so với thị trường, cũng như t&igrave;m kiếm đ&uacute;ng người mua c&oacute; nhu cầu thực sự, l&agrave; vấn đề hết sức nan giải. Chuy&ecirc;n mục hỗ trợ ph&aacute;p l&yacute; cho Người B&aacute;n ( hay n&oacute;i cụ thể l&agrave; c&aacute;c chủ t&agrave;i sản nh&agrave; đất nhỏ lẻ) của www.nhontrachdatnen.com l&agrave; chương tr&igrave;nh&nbsp;nhằm đồng h&agrave;nh c&ugrave;ng chủ t&agrave;i sản nh&agrave;/đất tại Nhơn Trạch &ndash; Đồng Nai, chuẩn bị hồ sơ ph&aacute;p l&yacute; đầy đủ, tiếp cận người mua nhanh ch&oacute;ng v&agrave; giao dịch mua b&aacute;n an to&agrave;n, chất lượng.&nbsp;</span></span>\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><em><strong>Với phạm vi hoạt động tại Nhơn Trạch - Đồng Nai, n&ecirc;n ch&uacute;ng t&ocirc;i cung cấp c&aacute;c th&ocirc;ng tin v&agrave; hỗ trợ cho người B&Aacute;N&nbsp;bất động sản tại Nhơn Trạch. Ch&uacute;ng t&ocirc;i l&agrave; đơn vị cung cấp th&ocirc;ng tin đến kh&aacute;ch h&agrave;ng, n&ecirc;n c&aacute;c kết quả tư vấn v&agrave; hỗ trợ của ch&uacute;ng t&ocirc;i mang t&iacute;nh trung lập, kh&aacute;ch quan.<br />\r\n<br />\r\n<img alt=\"\" src=\"/uploads/images/h%E1%BB%97%20tr%E1%BB%A3%20ph%C3%A1p%20l%C3%BD%20ng%C6%B0%E1%BB%9Di%20b%C3%A1n%201.jpg\" style=\"height:956px; width:1431px\" /><br />\r\n<br />\r\nQuyền lợi nhận được khi đăng k&yacute; tư vấn ( ho&agrave;n to&agrave;n miễn ph&iacute;):</strong></em><br />\r\n1. Chuy&ecirc;n gia tư vấn th&ocirc;ng tin gi&aacute; cả thị trường: Để c&oacute; gi&aacute; b&aacute;n ph&ugrave; hợp<br />\r\n2. Tư vấn nguồn kh&aacute;ch h&agrave;ng v&agrave; phương ph&aacute;p tiếp cận ph&ugrave; hợp<br />\r\n3.&nbsp;Được c&aacute;c Luật Gia, Luật Sư v&agrave; c&aacute;c Chuy&ecirc;n Gia của ch&uacute;ng t&ocirc;i hỗ trợ r&agrave; so&aacute;t hợp đồng v&agrave; c&aacute;c thỏa thuận ph&aacute;t sinh trong qu&aacute; tr&igrave;nh giao dịch giữa c&aacute;c b&ecirc;n.<br />\r\n4. Kiểm tra tr&aacute;ch nhiệm thực hiện hợp đồng/ thỏa thuận tr&ecirc;n thực tế so với nội dung thỏa thuận.<br />\r\n5.&nbsp;Cảnh b&aacute;o c&aacute;c nguy cơ rủi ro v&agrave; c&aacute;c tổn thất tương lai cho Người B&Aacute;N&nbsp;bất động sản c&oacute; thể ph&aacute;t sinh trong giao dịch<br />\r\n6. Tư vấn&nbsp;c&aacute;c giải ph&aacute;p giảm thiểu rủi ro v&agrave; giao dịch an to&agrave;n, nhanh ch&oacute;ng.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Đối với c&aacute;c trường hợp chưa được Ban Quản Trị Chương Tr&igrave;nh x&eacute;t duyệt hỗ trợ (căn cứ thời gian đăng k&yacute; của Qu&yacute; Vị, căn cứ t&iacute;nh chất v&agrave; sự ưu ti&ecirc;n của từng sự vụ hoặc số lượng đăng k&yacute; qu&aacute; tải sớm) trong chương tr&igrave;nh n&agrave;y, ch&uacute;ng t&ocirc;i vẫn bảo lưu hồ sơ của Qu&yacute; Vị cho c&aacute;c chiến dịch kh&aacute;c. Hoặc h&atilde;y vui l&ograve;ng li&ecirc;n hện trực tiếp với ch&uacute;ng t&ocirc;i tại địa chỉ :&nbsp;<a href=\"http://www.nhontrachdatnen.com/\">www.nhontrachdatnen.com</a><br />\r\n<em><strong>Điền form đăng k&yacute; dưới đ&acirc;y, Luật sư v&agrave; đội ngũ tư vấn&nbsp;của ch&uacute;ng t&ocirc;i sẽ gọi cho bạn!</strong></em></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><em><strong><iframe frameborder=\"0\" height=\"1563\" src=\"https://docs.google.com/forms/d/e/1FAIpQLScZ4NZ----IdCHVZGFQ-OLAmdL_9OoQrIzrDHOyHUTONarqDg/viewform?embedded=true\" width=\"640\">Đang tải...</iframe></strong></em></span></span></p>\r\n</div>\r\n', 'ho-tro-phap-ly-nguoi-ban-1546930322.jpg', 2),
(8, 'HỖ TRỢ TÀI CHÍNH CHO BÊN MUA', '<blockquote>\r\n<p><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>-&nbsp;Chỉ 1 ph&uacute;t đăng k&yacute;, hồ sơ cần thanh to&aacute;n của bạn về bất động sản sẽ được t&agrave;i trợ 80%. Trải nghiệm ngay dịch vụ hỗ trợ t&agrave;i ch&iacute;nh cho b&ecirc;n Mua của&nbsp;www.nhontrachdatnen.com&nbsp;.<br />\r\n-&nbsp;Nh&agrave; đất được được định gi&aacute; định gi&aacute; theo đ&uacute;ng gi&aacute; thị trường v&agrave; hỗ trợ tối đa 80% gi&aacute; trị t&agrave;i sản.<br />\r\nƯu điểm vượt trội về dịch vụ hỗ trợ t&agrave;i ch&iacute;nh cho người mua tại www.nhontrachdatnen.com</strong></span></span></p>\r\n</blockquote>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>1. HỖ TRỢ T&Agrave;I CH&Iacute;NH CHO B&Ecirc;N B&Aacute;N - DỊCH VỤ ĐẶT CỌC - ỦY TH&Aacute;C B&Aacute;N</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Hiện tại &nbsp;kh&aacute;ch h&agrave;ng muốn mua Bất Động Sản tại c&aacute;c đơn vị li&ecirc;n kết của www.nhontrachdatnen.com sẽ được hỗ trợ t&agrave;i ch&iacute;nh nhanh, đảm bảo bằng&nbsp;t&agrave;i sản bất động sản nh&agrave;/ đất dự định mua. Đ&acirc;y l&agrave; dịch vụ mới v&agrave; cực kỳ ưu việt, chỉ &aacute;p dụng tại Nhơn Trạch, Đồng Nai,&nbsp;l&agrave; giải ph&aacute;p để c&oacute; khoản t&agrave;i ch&iacute;nh nhanh ch&oacute;ng, c&oacute; thể giao dịch t&agrave;i sản nh&agrave;/đất ngay lập tức</span></span><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>2. Thủ tục&nbsp;</strong>của ch&uacute;ng t&ocirc;i rất nhanh ch&oacute;ng, v&igrave; bạn kh&ocirc;ng cần chứng minh khả năng t&agrave;i ch&iacute;nh/ mục đ&iacute;ch sử dụng vốn v&agrave; c&aacute;c thủ tục rườm r&agrave; kh&aacute;c như giao dịch với Ng&acirc;n h&agrave;ng.</span></span><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>3.&nbsp;Quy tr&igrave;nh của ch&uacute;ng t&ocirc;i cho 1 hồ sơ chỉ tối đa 2 ng&agrave;y l&agrave;m việc:</strong><br />\r\n1. Đăng k&yacute; tại&nbsp;<a href=\"http://www.nhontrachdatnen.com/\">www.nhontrachdatnen.com</a>&nbsp; hoặc gửi hồ sơ&nbsp;qua&nbsp;<a href=\"mailto:nhontrachdatnen222@gmail.com\">nhontrachdatnen222@gmail.com</a><br />\r\n2.&nbsp;Bộ phận thẩm định sẽ li&ecirc;n hệ với kh&aacute;ch h&agrave;ng đ&atilde; đăng k&yacute;<br />\r\n3.&nbsp;Hồ sơ hợp lệ sẽ b&aacute;o gi&aacute; trong 24h v&agrave; chuẩn bị sẵn hợp đồng vay vốn cho kh&aacute;ch h&agrave;ng.<br />\r\n4.&nbsp;Hẹn giờ ph&ugrave; hợp để tiến h&agrave;nh thủ tục cần thiết tại C&ocirc;ng ty hoặc Ph&ograve;ng c&ocirc;ng chứng gần nhất<br />\r\n5. Đại diện kh&aacute;ch h&agrave;ng thanh to&aacute;n tiền mặt hoặc chuyển khoản cho b&ecirc;n b&aacute;n.</span></span><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>4. Ưu điểm vượt trội:&nbsp;</strong><br />\r\n-&nbsp;Nh&agrave; đất được được định gi&aacute; định gi&aacute; theo đ&uacute;ng gi&aacute; thị trường v&agrave; hỗ trợ tối đa 80% gi&aacute; trị t&agrave;i sản.<br />\r\n-&nbsp;Chỉ 1 ph&uacute;t đăng k&yacute;, hồ sơ cần thanh to&aacute;n của bạn về bất động sản sẽ được t&agrave;i trợ 80%. Trải nghiệm ngay dịch vụ hỗ trợ t&agrave;i ch&iacute;nh cho b&ecirc;n Mua của&nbsp;<a href=\"http://www.nhontrachdatnen.com/\">www.nhontrachdatnen.com</a>&nbsp;.</span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>ĐIỀN FORM ĐĂNG K&Yacute; ĐỂ ĐƯỢC HỖ TRỢ NGAY<br />\r\n<br />\r\n<iframe frameborder=\"0\" height=\"1531\" src=\"https://docs.google.com/forms/d/e/1FAIpQLScSOZePqbTx-S1iK7tNr8Fzvz6J_rgmISOxzRfkBRN5-o3bog/viewform?embedded=true\" width=\"640\">Đang tải...</iframe></strong></span></span></p>\r\n', 'ho-tro-phap-ly-nguoi-ban-1546930322.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles_cate`
--

DROP TABLE IF EXISTS `articles_cate`;
CREATE TABLE IF NOT EXISTS `articles_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `articles_cate`
--

INSERT INTO `articles_cate` (`id`, `name`, `status`) VALUES
(1, 'Phân tích thị trường', 1),
(2, 'Hỗ trợ pháp lý', 1),
(3, 'Hỗ trợ tài chính', 1),
(4, 'Tin thị trường', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `image`, `status`) VALUES
(1, 'slide-03-1540263778.jpg', 0),
(2, 'slide-4-1540470175.jpg', 0),
(3, 'z1130591308920-850c6f42510be3501b53338ae03cc77d-1540263786.jpg', 0),
(4, 'banner-trai-1540388339.jpg', 1),
(5, 'banner-phai-1540388353.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Hồ Chí Minh'),
(2, 'Đồng Nai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `custom_link`
--

DROP TABLE IF EXISTS `custom_link`;
CREATE TABLE IF NOT EXISTS `custom_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_text` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `custom_link`
--

INSERT INTO `custom_link` (`id`, `link_text`, `link_url`) VALUES
(1, 'Tư Vấn Pháp Lý Mua Bán Đất', 'https://nhontrachdatnen.com/tin-tuc/ho-tro-phap-ly'),
(2, 'Hỗ Trợ  Vay Mua Bất Động Sản', 'https://nhontrachdatnen.com/tin-tuc/ho-tro-tai-chinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `direction`
--

DROP TABLE IF EXISTS `direction`;
CREATE TABLE IF NOT EXISTS `direction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `direction`
--

INSERT INTO `direction` (`id`, `name`) VALUES
(1, 'Đông'),
(2, 'Tây'),
(3, 'Đông-Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `district`
--

INSERT INTO `district` (`id`, `name`, `city_id`) VALUES
(1, 'Quận 1', 1),
(2, 'Quận 2', 1),
(3, 'Quận 3', 1),
(4, 'Quận 4', 1),
(5, 'Quận 5', 1),
(6, 'Quận 6', 1),
(7, 'Quận 7', 1),
(8, 'Quận 8', 1),
(9, 'Quận 9', 1),
(10, 'Quận 10', 1),
(11, 'Quận 11', 1),
(12, 'Quận 12', 1),
(13, 'Cẩm Mỹ', 2),
(14, 'Định Quán', 2),
(15, 'Long Thành', 2),
(16, 'Nhơn Trạch', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `estate_type`
--

DROP TABLE IF EXISTS `estate_type`;
CREATE TABLE IF NOT EXISTS `estate_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `estate_type`
--

INSERT INTO `estate_type` (`id`, `name`, `type`) VALUES
(1, 'Bán Đất Nền Dự Án', 1),
(2, 'Bán Đất Thổ Cư', 1),
(3, 'Cho thuê cửa hàng, ki ốt', 2),
(4, 'Cho thuê kho, nhà xưởng, đất', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `landing_projects`
--

DROP TABLE IF EXISTS `landing_projects`;
CREATE TABLE IF NOT EXISTS `landing_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `landing_projects`
--

INSERT INTO `landing_projects` (`id`, `name`, `description`, `image`) VALUES
(1, 'ĐẤT NỀN TUYỆT ĐẸP VEN SÔNG PHƯỚC LÝ', '<div class=\"block-content\" style=\"padding-bottom:50px\"> 		<div class=\"tab-content\"> 						<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"About\"> 								<div class=\"page-block\"> 					<h2 class=\"\"><b>Giới thiệu về dự án đất nền tuyệt đẹp ven sông Phước Lý</b></h2>				<div class=\"page-content editor-content\"> 						<p style=\"text-align:justify\"><strong>Tọa lạc ngay trung tâm của xã Đại Phước, các tiện ích phải có cho một cuộc sống hiện đại đều không quá bán kính 600m, đây gần như là khu đất nền “tuyệt chủng” trên địa bàn xã Đại Phước, huyện Nhơn Trạch, tỉnh Đồng Nai.</strong></p>  <p style=\"text-align:justify\"><strong>Chủ đầu tư:&nbsp;</strong>Công ty BĐS Đông Sài Gòn.</p>  <p style=\"text-align:justify\"><strong>Hạ tầng</strong></p>  <ul> 	<li style=\"text-align: justify;\">Đường nội bộ trải nhựa.</li> 	<li style=\"text-align: justify;\">Hệ thống cấp nước.</li> 	<li style=\"text-align: justify;\">Hệ thống thoát nước</li> 	<li style=\"text-align: justify;\">Kè đá ven sông.</li> </ul>  <p style=\"text-align:justify\"><strong>Ưu điểm</strong></p>  <ul> 	<li style=\"text-align: justify;\">Mặt tiền đường, mặt tiền sông.</li> 	<li style=\"text-align: justify;\">Nằm tại trung tâm của khu dân cư hiện hữu lâu đời.</li> 	<li style=\"text-align: justify;\">Tiện ích ngoại khu như Điện-Đường-Trường-Trạm, chợ, phòng khám, hồ bơi, … chỉ có dư không có thiếu.</li> 	<li style=\"text-align: justify;\">Pháp lý minh bạch.</li> 	<li style=\"text-align: justify;\">03 tháng có ngay sổ hồng.</li> 	<li style=\"text-align: justify;\">Xây dựng tự do.</li> 	<li style=\"text-align: justify;\">Thanh khoản vô cùng tốt.</li> </ul>  <p style=\"text-align:justify\">Với phương thức thanh toán linh hoạt và được nhiều ngân hàng hỗ trợ cho vay, thực sự khu đất nền ven sông Phước Lý là một điểm đến không thể lý tưởng hơn cho cả nhà đầu tư và những gia đình mong muốn an cư lạc nghiệp.</p>  <p style=\"text-align:justify\">Đặc biệt:&nbsp;Thanh toán nhanh sẽ có chiết khấu vô cùng ưu đãi!</p> 					</div> 				</div> 							</div><!-- /tab-pane --> 			 						 					</div><!-- tab-content --> 	</div>', 'du-an-dat-nen-ven-song-phuoc-ly-1541180616.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `price`
--

INSERT INTO `price` (`id`, `name`) VALUES
(1, '0 - 300 triệu'),
(2, '300 triệu - 500 triệu'),
(3, '500 triệu - 1 tỷ'),
(4, 'Trên 1 tỷ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL,
  `estate_type_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `direction_id` int(11) NOT NULL,
  `area` varchar(100) NOT NULL,
  `area_unit_id` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `total_amount` decimal(10,0) NOT NULL,
  `amount_unit_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `lt` varchar(255) NOT NULL,
  `lg` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `type`, `estate_type_id`, `city_id`, `district_id`, `direction_id`, `area`, `area_unit_id`, `amount`, `total_amount`, `amount_unit_id`, `image`, `lt`, `lg`, `user_id`) VALUES
(1, 'Bán Đất Thổ Cư Mặt Tiền Đường Võ Thị Sáu Nhơn Trạch', '<strong>Th&ocirc;ng tin l&ocirc; đất thổ cư Nhơn Trạch mặt tiền V&otilde; Thị S&aacute;u, x&atilde; Ph&uacute; Đ&ocirc;ng:</strong><br />\r\n- Số tờ / Số thửa: 18/228<br />\r\n- Địa chỉ: X&atilde; Ph&uacute; Đ&ocirc;ng<br />\r\n- Diện t&iacute;ch: 1344 m2<br />\r\n- Đường hiện hữu: Đường V&otilde; Thị S&aacute;u<br />\r\n- Hướng đất: Hướng Đ&ocirc;ng Nam<br />\r\n<strong>Vị tr&iacute;:</strong><br />\r\n- C&aacute;ch đường H&ugrave;ng Vương 800m<br />\r\n- C&aacute;ch dự &aacute;n VINGROUP 800m<br />\r\n- Ngay khu d&acirc;n cư đ&ocirc;ng đ&uacute;c, hiện hữu, c&oacute; sẵn điện, nước m&aacute;y<br />\r\n- Ngay mặt tiền đường V&otilde; Thị S&aacute;u d&agrave;i 19m<br />\r\n- C&aacute;ch đường Q.2 &ndash; Nhơn Trạch 500m<br />\r\n<strong>Tiện &iacute;ch c&ocirc;ng cộng:</strong><br />\r\n- Trường học từ mẫu gi&aacute;o đến cấp 3 , chợ , UBND (b&aacute;n k&iacute;nh 1km)<br />\r\nMục đ&iacute;ch sử dụng tối ưu:<br />\r\n- Nh&agrave; vườn, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, biệt thự .<br />\r\n- Đầu tư sinh lợi nhuận cao<br />\r\n<strong>Gi&aacute;:</strong> 16.000.000 /m2<br />\r\n<strong>Li&ecirc;n hệ chủ: 02871 000 222</strong>', 1, 2, 2, 16, 3, '1344', '1', '16', '21504', '4', '29bf34c55a27b979e036-1546939475.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `unit`
--

DROP TABLE IF EXISTS `unit`;
CREATE TABLE IF NOT EXISTS `unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `unit`
--

INSERT INTO `unit` (`id`, `name`, `type`) VALUES
(1, 'm2', 'area'),
(2, 'triệu', 'amount'),
(3, 'tỷ', 'amount'),
(4, 'triệu/m2', 'amount');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype_id` int(11) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `usertype_id`, `remember_token`, `email`, `password`, `name`, `phone`) VALUES
(1, 2, 'aUbQHqLU6YBOjSyO8GDHLi5l4ZSoERuC48QTewxplNu4fCgePF0OnNxKG0f4', 'benvjp619@gmail.com', '$2y$10$yobtUy7H8wBeYavYOwyo6ebE4hFL4KE.pIXUAriYQTxV.qwGxJOCC', 'Sang Lai', '01207056873');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
