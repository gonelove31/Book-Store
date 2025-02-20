-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 09, 2023 lúc 09:40 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_nhom14`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booktype`
--
CREATE DATABASE db_BookShop
GO
USE db_BookShop
GO 

CREATE TABLE booktype (
  BookTypeID int PRIMARY KEY IDENTITY(1,1),
  BookTypeName nvarchar(255) NOT NULL
) 

--
-- Đang đổ dữ liệu cho bảng `booktype`
--

INSERT INTO `booktype` (`BookTypeID`, `BookTypeName`) VALUES
(1, 'Sách kỹ năng sống'),
(2, 'Sách Văn Học'),
(3, 'Sách Kinh Tế'),
(4, 'Sách Công Nghệ Thông Tin'),
(5, 'Sách Tâm Lý-Giới Tính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `CartID` int(11) NOT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `SoLuongMua` int(11) NOT NULL,
  `TimeOder` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`CartID`, `ProductID`, `UserID`, `SoLuongMua`, `TimeOder`) VALUES
(3, 501, 2, 3, '2023-08-30 06:57:30'),
(4, 501, 2, 3, '2023-08-30 06:58:12'),
(5, 503, 2, 1, '2023-08-30 06:58:23'),
(6, 101, 2, 1, '2023-08-30 11:44:35'),
(7, 100, 2, 1, '2023-08-30 11:58:30'),
(9, 101, 2, 0, '2023-08-30 12:03:30'),
(11, 101, 3, 1, '2023-08-30 12:10:16'),
(12, 100, 3, 1, '2023-08-30 12:10:36'),
(13, 100, 5, 1, '2023-09-10 02:03:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--



--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`stt`, `ProductID`, `ProductName`, `Price`, `Description`, `PublishingCompany`, `IssuingCompany`, `PageCounts`, `CoverType`, `OldPrice`, `BookTypeID`, `ShopID`, `Star`, `sellNumber`, `Image`) VALUES
(1, 100, 'Kế Toán Vỉa Hè', 179, ' Đã bao lần bạn cầm trên tay bảng báo cáo tài chính doanh nghiệp của mình, nhưng chẳng thể nào hiểu nổi? \r\n\r\nKế toán và tài chính là nỗi đau chung của rất nhiều doanh nghiệp nhỏ. Ngôn ngữ tài chính dường như là điều bí ẩn nhất của thế giới. Vô số tính toán và ý đồ được cài cắm sau các con số, mà thậm chí người kinh doanh nhiều năm cũng không thể nào bóc tách nổi.\r\nNếu bạn vẫn cảm thấy mù mờ với bảng báo cáo tài chính của mình thì thật là đáng tiếc. Tài chính được xem như là ngôn ngữ của kinh doanh. Bảng kế toán sẽ cho bạn biết được doanh nghiệp của mình lời hay lỗ, trả lời câu hỏi vì sao trông bạn có vẻ đang ăn nên làm ra, nhưng két sắt công ty không có lấy một đồng.\r\n\r\nQuyển sách mang đến cho bạn:\r\n\r\nKiến thức căn bản về kế toán doanh nghiệp.\r\nPhân biệt 3 loại báo cáo tài chính quan trọng nhất.\r\nPhân tích chức năng của mỗi loại báo cáo trong quản trị doanh nghiệp.\r\nHiểu và tự lập được bảng cân đối kế toán, báo cáo kết quả kinh doanh, báo cáo luân chuyển tiền tệ.\r\nĐánh giá sơ bộ được sức khỏe tài chính của doanh nghiệp thông qua 3 báo cáo tài chính trên.\r\nBạn càng am hiểu sớm kế toán và báo cáo tài chính, càng có lợi cho công việc kinh doanh lâu dài.', 'Nhà Xuất Bản Thế Giới', 'Công ty TNHH Truyền Thông Giver', 268, 'Bìa mềm', 199, 3, 1, 5, 4740, 'db4f09b6ee8bc317f097ebcca1933a2d.png.webp'),
(2, 101, 'Ai Tăng Lương Cho Bạn?', 155, ' Quyển sách mang đến cho bạn:\r\n\r\nBí quyết tăng lương trong thời gian ngắn nhất\r\nPhương pháp thăng tiến bất kể xuất phát điểm\r\nTư duy teamwork hiệu quả để thoát khỏi nỗi ám ảnh mang tên gánh team, căn bệnh nan y “ủa em tưởng\", cách giao tiếp hiệu quả trong công việc \r\nBí quyết nhảy việc khôn ngoan và chọn được công ty “chân ái\"\r\nCách xác định động lực thật sự để có được niềm vui và hạnh phúc trong công việc \r\n3 bí quyết thăng tiến trong công việc, 3 bảng tự đánh giá và 3 công cụ giúp bạn tháo gỡ mọi vấn đề\r\nMong rằng quyển sách sẽ nhanh chóng đến được tay những người đang cần nó!', '	Nhà Xuất Bản Thế Giới', 'Công ty TNHH Truyền Thông Giver', 254, 'Bìa mềm', 199, 3, 1, 4, 127, '89f010523944c557aae47aef4940c8c4.png.webp'),
(3, 102, 'Quyền Lực Của Địa Lý', 203, 'Tim Marshall đã nhận xét rất xác đáng rằng: \"Các đế chế nổi lên rồi suy tàn. Các liên minh hình thành rồi tan rã. Thời kỳ hòa bình ở châu Âu sau các cuộc chiến của Napoleon kéo dài khoảng sáu mươi năm; ảo vọng Bá chủ nghìn năm của Đức quốc xã cũng chỉ tồn tại hơn một thập niên. Cho nên không thể biết được chính xác cán cân quyền lực sẽ thay đổi như thế nào trong những năm tớ\"\r\n\r\nVà \"những nền kinh tế và địa chính trị khổng lồ sẽ tiếp tục có sức ảnh hưởng lớn đến các vấn đề toàn cầu\", vì vậy mà trong cuốn sách bán chạy Những tù nhân địa lý của mình, Tim Marshall đã đề cập đến các cường quốc có ảnh hưởng đến chính trị toàn cầu như Mỹ, Nga, Trung Quốc, EU, Ấn Độ\r\n\r\nTuy thế, các quốc gia nhỏ hơn cũng đóng một vai trò quan trọng, vì địa chính trị liên quan đến các đồng minh, và với trật tự thế giới đang thay đổi không ngừng, các cường quốc lớn cần lôi kéo các nước nhỏ về phe mình và ngược lại. Quyền lực của địa lý sẽ đề cập đến vai trò, vị thế của quốc gia và vùng lãnh thổ nhỏ hơn đó.\r\n\r\nChúng ta sẽ thấy, liệu Thổ Nhĩ Kỳ, Ả Rập Saudi và Anh có cơ hội nào để giành lấy quyền lực trong tương lai hay không?\r\n\r\nCó cách gì hóa giải được những rắc rối ở vùng Sahel để ngăn chặn cuộc khủng hoảng tị nạn tiếp theo cho châu Âu không?\r\n\r\nVà không chỉ giới hạn ở \"lãnh địa trần gian\", cuộc đua chính trị trong kỷ nguyên này sẽ còn vượt cả vào vũ trụ, khi nhiều quốc gia tuyên bố chủ quyền không gian ở ngoài hành tinh. Và liệu bầu không gian của Trái Đất có trở thành chiến trường tiếp theo của thế giới?', 'Nhà Xuất Bản Phụ Nữ', 'Nhã Nam', 559, 'Bìa mềm', 280, 3, 2, 5, 3221, 'db72a8050a15d86d8102cd21ab1d8b11.jpg.webp'),
(4, 103, 'Sách Nghĩ Giàu Và Làm Giàu', 82, ' \"Think and Grow Rich –Nghĩ giàu và Làm giàu là một trong những cuốn sách bán chạy nhất mọi thời đại. Đã hơn 60 triệu bản được phát hành với gần trăm ngôn ngữ trên toàn thế giới và được công nhận là cuốn sách tạo ra nhiều triệu phú, một cuốn sách truyền cảm hứng thành công nhiều hơn bất cứ cuốn sách kinh doanh nào trong lịch sử.\r\n\r\nTác phẩm này đã giúp tác giả của nó, Napoleon Hill, được tôn vinh bằng danh hiệu “người tạo ra những nhà triệu phú”. Đây cũng là cuốn sách hiếm hoi được đứng trong top của rất nhiều bình chọn theo nhiều tiêu chí khác nhau - bình chọn của độc giả, của giới chuyên môn, của báo chí. Lý do để Think and Grow Rich - Nghĩ giàu và làm giàu có được vinh quang này thật hiển nhiên và dễ hiểu: Bằng việc đọc và áp dụng những phương pháp đơn giản, cô đọng này vào đời sống của mỗi cá nhân mà đã có hàng ngàn người trên thế giới trở thành triệu phú và thành công bền vững.\r\n\r\nĐiều thú vị nhất là các bí quyết này có thể được hiểu và áp dụng bởi bất kỳ một người bình thường nào, hoạt động trong bất cứ lĩnh vực nào. Qua hơn 70 năm tồn tại, những đúc kết về thành công của Napoleon Hill đến nay vẫn không hề bị lỗi thời, ngược lại, thời gian chính là minh chứng sống động cho tính đúng đắn của những bí quyết mà ông chia sẻ.\r\n\r\nSinh ra trong một gia đình nghèo vùng Tây Virginia, con đường thành công của Napoleon Hill cũng trải qua nhiều thăng trầm. Khởi đầu bằng chân cộng tác viên cho một tờ báo địa phương lúc 15 tuổi, đến năm 19 tuổi Hill trở thành nhà quản lý mỏ than trẻ tuổi nhất, sau đó bỏ ngang để theo đuổi ngành luật. Napoleon Hill còn kinh qua nhiều nghề như kinh doanh gỗ, xe hơi, viết báo về kinh doanh…\r\n\r\nĐó là những công việc ông từng nếm trải trước khi 25 tuổi! Song khác với những người thành đạt khác, ông cẩn thận phân tích từng sự kiện trọng đại trong đời mình, rút ra những bài học, rồi tiếp tục rút gọn chúng thành các nguyên tắc căn bản, tổ chức các nguyên tắc ấy thành triết lý sống và rèn luyệ\r\n\r\nCơ hội đặc biệt đã đến với Hill trong một lần phỏng vấn để viết về chân dung Andrew Carnegie - ông “vua thép” huyền thoại của Mỹ đã đi lên từ hai bàn tay trắng. Từ lần phỏng vấn đó, Napoleon Hill có dịp tiếp cận với những con người thành đạt và có quyền lực nhất tại Mỹ để tìm hiểu và học hỏi những bí quyết thành công của họ, trong thế so sánh và kiểm chứng với những công thức thành công của Andrew Carnegie. Ông muốn qua đó có thể đúc kết và viết nên một cuốn sách ghi lại những bí quyết giúp các cá nhân bình thường thành những người thành công trong xã hội.\r\n\r\nĐể thực hiện cuốn sách này, Napoleon Hill dành hầu như toàn bộ thời gian và công sức trong suốt gần ba mươi năm để phỏng vấn hơn 500 người nổi tiếng và thành công nhất trong nhiều lĩnh vực khác nhau, cùng hàng ngàn doanh nhân khác - cả những kẻ thất bại và những người thành công. Kết quả của những nghiên cứu không mệt mỏi đó là Think and Grow Rich - Nghĩ giàu và làm giàu - công thức, hay “cẩm nang” để trở thành vượt trội và được xã hội nể trọng.\r\n\r\nCuốn sách cũng đưa Napoleon Hill vào danh sách một trong những tác giả có tác phẩm bán chạy nhất thế giới từ trước đến nay. Được viết ra từ vô số những câu chuyện có thật, tác phẩm có một sức thuyết phục và lay động rất lớn. Bạn không chỉ được biết bí quyết về sự thành công của các tên tuổi như Edison - nhà phát minh lỗi lạc mà thời gian rèn luyện trong trường học chỉ… vỏn vẹn 3 tháng; như Henry Ford - người bị coi là không có học vấn nhưng đã trở thành ông trùm trong nền công nghiệp xe hơi với một gia tài kếch xù… mà còn của rất nhiều cá nhân trong nhiều lĩnh vực khác nhau đã đi lên từ con số không.\r\n\r\nThink and Grow Rich - Nghĩ giàu và làm giàu là cuốn sách đầu tiên đưa ra triết lý thành đạt - một triết lý đầy đủ và toàn diện về thành công của cá nhân, đồng thời cung cấp cho bạn phương pháp để tạo một ý thức thành công cũng như đưa ra kế hoạch sơ bộ và chi tiết để đạt được thành công đó. Các bí quyết thành công được đề cập đến trong cuốn sách này có thể được đúc kết ngắn gọn: tất cả bắt nguồn từ cách nghĩ.\r\n\r\nDo đó, cuốn sách này không chỉ thay đổi những điều bạn nghĩ mà còn có thể thay đổi cả cách nghĩ của bạn; không dừng lại ở việc chỉ ra cho bạn thấy bạn phải làm gì mà còn vạch cho bạn biết phải làm điều đó như thế nào để đạt được khát vọng của mình. Ra mắt bạn đọc với phiên bản cao cấp lần này, cuốn sách thay đổi nhiều về hình thức thiết kế bìa cứng, màu nâu đen, chữ vàng ánh kim dập nổi sang trọng, tinh tế.', 'Nhà Xuất Bản Tổng hợp TP.HCM', 'First News - Trí Việt', 450, 'Bìa mềm', 110, 3, 3, 5, 303, 'f9b0354a17e600e8872de60c8e499bea.png.webp'),
(5, 104, 'Tư Duy Nhanh Và Chậm ', 186, ' Chúng ta thường tự cho rằng con người là sinh vật có lý trí mạnh mẽ, khi quyết định hay đánh giá vấn đề luôn kĩ lưỡng và lý tính.Nhưng sự thật là, dù bạn có cẩn trọng tới mức nào, thì trong cuộc sống hàng ngày hay trong vấn đề liên quan đến kinh tế, bạn vẫn có những quyết định dựa trên cảm tính chủ quan của mình. “Tư duy nhanh và chậm”, cuốn sách nổi tiếng tổng hợp tất cả nghiên cứu được tiến hành qua nhiều thập kỷ của nhà tâm lý học từng đạt giải Nobel Kinh tế Daniel Kahneman sẽ cho bạn thấy những sư hợp lý và phi lý trong tư duy của chính bạn.Cuốn sách được đánh giá là “kiệt tác” trong việc thay đổi hành vi của con người, Tư duy nhanh và chậm đã dành được vô số giải thưởng danh giá, lọt vào Top 11 cuốn sách kinh doanh hấp dẫn nhất.Đã có rất nhiều cuốn sách nói về tính hợp lý và phi lý của con người trong tư duy, trong việc đánh giá và ra quyết định, nhưng Tư duy nhanh và chậm được Tạp chí Tài chính Mỹ đánh giá là “kiệt tác”.Bạn nghĩ rằng bạn tư duy nhanh, hay chậm? Bạn tư duy và suy nghĩ theo lối “trông mặt bắt hình dong”, đánh giá mọi vật nhanh chóng bằng cảm quan, quyết định dựa theo cảm xúc hay tư duy một cách cẩn thận, chậm rãi nhưng logic hợp lý về một vấn đề. Tư duy nhanh và chậm sẽ đưa ra và lý giải hai hệ thống tư duy tác động đến con đường nhận thức của bạn.Kahneman gọi đó là: hệ thống 1 và hệ thống 2. Hệ thống 1, còn gọi là cơ chế nghĩ nhanh, tự động, thường xuyên được sử dụng, cảm tính, rập khuôn và tiềm thức. Hệ thống 2, còn gọi là cơ chế nghĩ chậm, đòi hỏi ít nỗ lực, ít được sử dụng, dùng logic có tính toán và ý thức.Trong một loạt thí nghiệm tâm lý mang tính tiên phong, Kahneman và Tversky chứng minh rằng, con người chúng ta thường đi đến quyết định theo cơ chế nghĩ nhanh hơn là ghĩ chậm. Phần lớn nội dung của cuốn sách chỉ ra những sai lầm của con người khi suy nghĩ theo hệ thống 1.   ', 'Nhà Xuất Bản Thế Giới', 'Công ty phát hành', 612, 'Bìa cứng', 250, 3, 3, 3, 1514, '4c1f39cca2b1dd8e6745129b51a47075.jpg.webp'),
(6, 105, 'Kinh Doanh Từ A Đến Z', 92, ' Cuốn sách Kinh doanh từ A đến Z của Alan C. Fox chứa đựng những kinh nghiệm tinh túy nhất được Alan đúc rút từ sự nghiệp kế toán, luật và bất động sản. Cuốn sách là toàn bộ tâm huyết mà Alan muốn chia sẻ về lợi ích của cách tư duy, từng câu từng chữ đều được chưng cất từ tri thức, thành công và thất bại của ông. Người đọc có thể sử dụng những kỹ năng cơ bản trong cuốn sách để đạt được thành công giống như ông. Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....      ', 'Nhà Xuất Bản ', '1980 Books', 420, 'Bìa mềm', 139, 3, 2, 4, 269, 'f07cf27df1c3fef3e7d39032f86d180a.png.webp'),
(7, 201, 'Sách Hiểu Về Trái Tim', 129, ' Xuất bản lần đầu tiên vào năm 2011, Hiểu Về Trái Tim trình làng cũng lúc với kỷ lục: cuốn sách có số lượng in lần đầu lớn nhất: 100.000 bản. Trung tâm sách kỷ lục Việt Nam công nhận kỳ tích ấy nhưng đến nay, con số phát hành của Hiểu về trái tim vẫn chưa có dấu hiệu chậm lại.\r\n\r\nLà tác phẩm đầu tay của nhà sư Minh Niệm, người sáng lập dòng thiền hiểu biết (Understanding Meditation), kết hợp giữa tư tưởng Phật giáo Đại thừa và Thiền nguyên thủy Vipassana, nhưng Hiểu Về Trái Tim không phải tác phẩm thuyết giáo về Phật pháp. Cuốn sách rất “đời” với những ưu tư của một người tu nhìn về cõi thế. Ở đó, có hạnh phúc, có đau khổ, có tình yêu, có cô đơn, có tuyệt vọng, có lười biếng, có yếu đuối, có buông xả… Nhưng, tất cả những hỉ nộ ái ố ấy đều được khoác lên tấm áo mới, một tấm áo tinh khiết và xuyên suốt, khiến người đọc khi nhìn vào, đều thấy mọi sự như nhẹ nhàng hơn…', 'Nhà Xuất Bản Tổng Hợp', 'First News - Trí Việt', 480, 'Bìa mềm', 169, 1, 2, 5, 1666, '5f6de4fae185d50a8df9c932fe2c8d95.jpg.webp'),
(8, 202, 'Kỷ Luật Tự Giác', 148, ' Theo bạn thì, thế nào là tự do?\r\n\r\nLà có thể nằm ườn trên ghế sô pha xem phim, ôm điện thoại lướt mạng cả ngày?\r\n\r\nHay là được ăn thoải mái các thể loại đồ ăn nhanh, trà sữa… bất chấp ảnh hưởng của chúng tới sức khỏe?\r\n\r\nTrời mưa thì tự cho phép bản thân nghỉ làm, thích đồ gì thì mua luôn đồ nấy, dù cho chưa đến cuối tháng đã hết sạch tiền?\r\n\r\nNhững điều trên trông thì có vẻ thoải mái thật đấy, nhưng dần dần bạn sẽ nhận ra cuộc sống của mình ngày càng mơ hồ, sợ sệt, bởi bạn không có SỰ LỰA CHỌN. Lãng phí thời gian, tiền bạc vô ích chỉ càng tạo nên sự chậm chạp trong tư duy, bệnh tật cho cơ thể và sự cằn cỗi trong tâm hồn mà thôi.\r\n\r\nKÝ LUẬT TỰ GIÁC, cuốn sách đã thành công chỉnh đốn lối sống của hàng triệu người trẻ Trung Quốc, sẽ giúp bạn hiểu: “Tự do” thực sự không phải là tùy theo ý thích, mà là tự mình làm chủ.\r\n\r\nCàng tự giác thì càng có nhiều quyền lựa chọn. Một ngày, hai ngày, hay thậm chí vài tháng chưa thấy gì, nhưng một năm, hai năm, 10 năm, 20 năm sau những người tự giác và những người không tự giác sẽ bước trên những con đường hoàn toàn khác nhau. Bởi vì người càng tự giác càng hiểu mình thực sự muốn gì, nên mới không cần lãng phí thời gian và sức lực vào những chuyện vô nghĩa.\r\n\r\nTheodore Roosevelt cũng từng nói: \"Có một kiểu phẩm chất có thể giúp chúng ta lột xác tỏa sáng trong cuộc đời bình thường. Phẩm chất đó không phải là tư chất trời cho, không phải nhờ giáo dục, cũng không phải IQ, mà là SỰ TỰ GIÁC\". 99% thành công trên thế giới này đều không phải là ngẫu nhiên. Phía sau hào quang luôn là sự kiên trì tự giác không ngừng nghỉ.\r\n\r\nKỶ LUẬT TỰ GIÁC là trao cho mình quyền đặt ra quy tắc trò chơi, còn lười biếng là trao quyền đặt quy tắc cho người khác. Bạn chọn cái nào?', 'Nhà Xuất Bản Thế Giới', 'Skybooks', 216, 'Bìa mềm', 199, 1, 2, 2, 97, '308986aa2c17293af227162874ad24a3.jpg.webp'),
(9, 203, 'Thao Túng Tâm Lý', 104, ' Trong cuốn “Thao túng tâm lý”, tác giả Shannon Thomas giới thiệu đến độc giả những hiểu biết liên quan đến thao túng tâm lý và lạm dụng tiềm ẩn.\r\n\r\n“Thao túng tâm lý” là một dạng của lạm dụng tâm lý. Cũng giống như lạm dụng tâm lý, thao túng tâm lý có thể xuất hiện ở bất kỳ môi trường nào, từ bất cứ đối tượng độc hại nào. Đó có thể là bố mẹ ruột, anh chị em ruột, người yêu, vợ hoặc chồng, sếp hay đồng nghiệp… của bạn. Với tính chất bí hiểm, âm thầm gây hại, thao túng, lạm dụng tâm lý làm tổn thương cảm xúc, lòng tự trọng, cuộc sống của mỗi nạn nhân. Những người từng bị lạm dụng tâm lý thường không thể miêu tả rõ ràng điều gì đã xảy ra với mình. Trong nhiều trường hợp, nạn nhân bị thao túng đến mức tự hỏi có phải họ là người có lỗi, thậm chí họ có phải là người độc hại trong mối quan hệ đó.\r\n\r\nHành vi của (những) kẻ lạm dụng giống như một trò chơi bí ẩn, tệ hại và lặp đi lặp lại, do một cá nhân hoặc một nhóm người thực hiện với nạn nhân. Những hành vi này được ngụy trang tài tình đến mức hành vi độc ác của họ diễn ra thường xuyên, nhưng không bị phát hiện.', 'Nhà Xuất Bản Dân Trí', '1980 Books', 328, 'Bìa cứng', 150, 1, 5, 5, 4569, 'ec88ab408c1997378344486c94dbac40.jpg.webp'),
(10, 204, 'Sách Đi Tìm Lẽ Sống', 166, ' Đi tìm lẽ sống của Viktor Frankl là một trong những quyển sách kinh điển của thời đại. Thông thường, nếu một quyển sách chỉ có một đoạn văn, một ý tưởng có sức mạnh thay đổi cuộc sống của một người, thì chỉ riêng điều đó cũng đã đủ để chúng ta đọc đi đọc lại và dành cho nó một chỗ trên kệ sách của mình. Quyển sách này có nhiều đoạn văn như thế.Trước hết, đây là quyển sách viết về sự sinh tồn. Giống như nhiều người Do Thái sinh sống tại Đức và Đông Âu khi ấy, vốn nghĩ rằng mình sẽ được an toàn trong những năm 1930, Frankl đã trải qua khoảng thời gian chịu nhiều nghiệt ngã trong trại tập trung và trại hủy diệt của Đức quốc xã. Điều kỳ diệu là ông đã sống sót, cụm từ “thép đã tôi thế đấy” có thể lột tả chính xác trường hợp này. Nhưng trong Đi tìm lẽ sống, tác giả ít đề cập đến những khó nhọc, đau thương, mất mát mà ông đã trải qua, thay vào đó ông viết về những nguồn sức mạnh đã giúp ông tồn tại. ', 'NXB Tổng Hợp Thành Phố Hồ Chí Minh', 'First News - Trí Việt', 224, 'Bìa mềm', 199, 1, 4, 3, 2234, '954d3a7b4d9f51348ed36d540506abf0.jpg.webp'),
(11, 205, 'Không Diệt Không Sinh Đừng Sợ Hãi ', 76, ' Nhiều người trong chúng ta tin rằng cuộc đời của ta bắt đầu từ lúc chào đời và kết thúc khi ta chết. Chúng ta tin rằng chúng ta tới từ cái Không, nên khi chết chúng ta cũng không còn lại gì hết. Và chúng ta lo lắng vì sẽ trở thành hư vô.\r\n\r\nBụt có cái hiểu rất khác về cuộc đời. Ngài hiểu rằng sống và chết chỉ là những ý niệm không có thực. Coi đó là sự thực, chính là nguyên do gây cho chúng ta khổ não. Bụt dạy không có sinh, không có diệt, không tới cũng không đi, không giống nhau cũng không khác nhau, không có cái ngã thường hằng cũng không có hư vô. Chúng ta thì coi là Có hết mọi thứ. Khi chúng ta hiểu rằng mình không bị hủy diệt thì chúng ta không còn lo sợ. Đó là sự giải thoát. Chúng ta có thể an hưởng và thưởng thức đời sống một cách mới mẻ.\r\n\r\nKhông diệt Không sinh Đừng sợ hãi là tựa sách được Thiền sư Thích Nhất Hạnh viết nên dựa trên kinh nghiệm của chính mình. Ở đó, Thầy Nhất Hạnh đã đưa ra một thay thế đáng ngạc nhiên cho hai triết lý trái ngược nhau về vĩnh cửu và hư không: “Tự muôn đời tôi vẫn tự do. Tử sinh chỉ là cửa ngõ ra vào, tử sinh là trò chơi cút bắt. Tôi chưa bao giờ từng sinh cũng chưa bao giờ từng diệt” và “Nỗi khổ lớn nhất của chúng ta là ý niệm về đến-đi, lui-tới.”\r\n\r\nĐược lặp đi lặp lại nhiều lần, Thầy khuyên chúng ta thực tập nhìn sâu để chúng ta hiểu được và tự mình nếm được sự tự do của con đường chính giữa, không bị kẹt vào cả hai ý niệm của vĩnh cửu và hư không. Là một thi sĩ nên khi giải thích về các sự trái ngược trong đời sống, Thầy đã nhẹ nhàng vén bức màn vô minh ảo tưởng dùm chúng ta, cho phép chúng ta (có lẽ lần đầu tiên trong đời) được biết rằng sự kinh hoàng về cái chết chỉ có nguyên nhân là các ý niệm và hiểu biết sai lầm của chính mình mà thôi.\r\n\r\nTri kiến về sống, chết của Thầy vô cùng vi tế và đẹp đẽ. Cũng như những điều vi tế, đẹp đẽ khác, cách thưởng thức hay nhất là thiền quán trong thinh lặng. Lòng nhân hậu và từ bi phát xuất từ suối nguồn thâm tuệ của Thiền sư Thích Nhất Hạnh là một loại thuốc chữa lành những vết thương trong trái tim chúng ta.\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 'Nhà Xuất Bản Thế Giới', 'Saigon Books', 225, 'Bìa mềm', 124, 1, 5, 5, 2341, '267e59580ba829ef33eb1999199dafd5.jpg.webp'),
(12, 206, 'Điềm Tĩnh Và Nóng Giận', 122, ' Trong cuộc sống thường ngày, chúng ta thường nổi giận vì nhiều nguyên do: công việc không suôn sẻ, chúng ta tức giận; bị người khác hiểu nhầm, chúng ta tức giận; thấy việc chướng tai gai mắt, chúng ta tức giận; không thể chấp nhận được dư luận xã hội, chúng ta tức giận. Thậm chí, chúng ta bực tức, cáu gắt, hờn dỗi, nhỏ nhen, uất ức vì thời tiết xấu, vì tiền lương thấp, vì nhà cửa bừa bộn, vì thái độ của người khác, vì những chuyện không may mà mình gặp phải. Dường như cuộc đời chúng ta là một chuỗi tức giận không hồi kết. Hãy thử tự hỏi bản thân: sau khi tức giận thì phiền não sẽ tan biến ư?\r\n\r\nDân gian vốn có câu “cả giận mất khôn”, Đức Phật cũng đã dạy “một ngọn lửa sân đốt cháy rừng công đức”. Cơn nóng giận có thể hủy diệt sức khỏe, sự nghiệp, tình cảm và hạnh phúc của chúng ta. Cơn giận khiến đầu óc ta bốc hỏa, kích động và lỗ mãng để rồi phạm phải những sai lầm không thể bù đắp. Nóng giận là trừng phạt bản thân bằng lỗi lầm của người khác, đánh cược hạnh phúc cả đời bằng một phút thiếu kiềm chế. Hầu hết những bất hạnh trong đời đều từ đó mà ra. Bởi thế, mỗi người chúng ta sống trong xã hội này đều cần rèn giũa cho mình một thái độ sống điềm tĩnh trước mọi điều.\r\n\r\nTiếp nối sự thành công sau cuốn sách “Thuận cho người lợi cho mình”, tác giả Tạ Quốc Kế tái ngộ với chúng ta qua cuốn sách Điềm tĩnh & nóng giận, tiếp tục truyền cảm hứng sống đẹp, sống có ích cho mọi người. Thông qua những câu chuyện cụ thể và thực tế, lời lẽ chân thành và đầy sức thuyết phục, độc giả sẽ có những phút giây đủ tĩnh lặng để nhìn nhận lại cảm xúc của bản thân, hiểu hơn về tác hại của nóng giận và học được cách làm sao để kiểm soát tâm trạng.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 'Nhà Xuất Bản Thế Giới', 'ĐẠO BẢNH BOOK', 322, 'bìa cứng', 199, 1, 3, 4, 123, '0675631bc561ba2ffe709475cfab8728.jpg.webp'),
(13, 301, 'Cây Cam Ngọt Của Tôi', 108, ' “Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng số một tác phẩm kinh điển của Brazil.”\r\n\r\n- Booklist\r\n\r\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.”\r\n\r\n- The National\r\n\r\nHãy làm quen với Zezé, cậu bé tinh nghịch siêu hạng đồng thời cũng đáng yêu bậc nhất, với ước mơ lớn lên trở thành nhà thơ cổ thắt nơ bướm. Chẳng phải ai cũng công nhận khoản “đáng yêu” kia đâu nhé. Bởi vì, ở cái xóm ngoại ô nghèo ấy, nỗi khắc khổ bủa vây đã che mờ mắt người ta trước trái tim thiện lương cùng trí tưởng tượng tuyệt vời của cậu bé con năm tuổi.\r\n\r\nCó hề gì đâu bao nhiêu là hắt hủi, đánh mắng, vì Zezé đã có một người bạn đặc biệt để trút nỗi lòng: cây cam ngọt nơi vườn sau. Và cả một người bạn nữa, bằng xương bằng thịt, một ngày kia xuất hiện, cho cậu bé nhạy cảm khôn sớm biết thế nào là trìu mến, thế nào là nỗi đau, và mãi mãi thay đổi cuộc đời cậu.\r\nMở đầu bằng những thanh âm trong sáng và kết thúc lắng lại trong những nốt trầm hoài niệm, Cây cam ngọt của tôi khiến ta nhận ra vẻ đẹp thực sự của cuộc sống đến từ những điều giản dị như bông hoa trắng của cái cây sau nhà, và rằng cuộc đời thật khốn khổ nếu thiếu đi lòng yêu thương và niềm trắc ẩn. Cuốn sách kinh điển này bởi thế không ngừng khiến trái tim người đọc khắp thế giới thổn thức, kể từ khi ra mắt lần đầu năm 1968 tại Brazil.', 'Nhà Xuất Bản Hội Nhà Văn', 'ĐẠO BẢNH BOOK', 211, 'Bìa mềm', 155, 2, 4, 4, 2111, '2a6154ba08df6ce6161c13f4303fa19e.jpg.webp'),
(14, 302, 'Ở Tiệm Bánh Ngày Mai', 84, ' Ở tiệm bánh Ngày Mai - Sắc màu nào tô điểm ngày mai?\r\n\r\n“Tại sao lại là tiệm bánh “Ngày Mai” thế?”\r\n\r\n“Vì nhìn xem, hôm nay mình đã chuẩn bị gì cho nó đâu nào!”\r\n\r\nChuyển mình từ series truyện tranh đời thường gây nhung nhớ - “Chuyện vặt của Múc”, cô nàng Múc dễ thương hài hước đã trở lại với cuốn sách hoàn toàn mới, không phải về những mẩu chuyện nhí nhố hàng ngày chúng ta từng quen thuộc, mà là về một tiệm bánh đặc biệt mang tên “Ngày Mai”. Tiệm bánh này không hề có câu chuyện nào để kể, cũng chỉ có duy nhất hai màu đen trắng, chính là bởi nó vẫn đang chờ đợi bạn tô điểm lên bằng những gam màu rực rỡ!\r\n\r\n“Ở tiệm bánh Ngày Mai” là một cuốn sách tô màu, với những trang sách vẽ về “Ngày Mai” - tiệm bánh xinh xắn của bạn và Múc: nếu như Múc dựng xây cửa tiệm bằng nét bút thì bạn là người tạo nên màu sắc riêng của “Ngày Mai”. Tiệm bánh sẽ mở cửa vào buổi sớm hay ban trưa? Giữa sắc vàng rực rỡ của nắng hạ hay màu xanh êm ả của trời thu? Nào là góc bếp gọn gàng ngay ngắn, nào là khay bánh nóng hổi mới ra lò, nào những chiếc ghế xinh xắn bên khung cửa sổ…, tiệm bánh “Ngày Mai” trong mắt bạn sẽ mang những sắc màu gì?\r\n\r\nCuốn sách tô màu này dành tặng bạn, cho những ngày u ám, cho những sắc xám đôi khi xuất hiện trong cuộc đời. Mỗi lúc ấy, hãy cầm lên những chiếc bút màu rực rỡ, tự mình tô điểm sắc màu cho “Ngày Mai”, lấp đầy cuốn sách bằng muôn vàn màu sắc của chính bạn! Mong rằng ở tiệm bánh nho nhỏ với cái tên đặc biệt này, bạn sẽ được tận hưởng những phút giây bình yên không muộn phiền.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 'Nhà Xuất Bản Dân Trí', 'SkyComics', 104, 'Bìa mềm', 112, 2, 4, 4, 215, '393ca9daeb0d7e28cc2e79c63ae69d65.jpg.webp'),
(15, 303, 'Ngôi Nhà Bên Bờ Biển Xanh Thẳm', 129, ' Ngôi Nhà Bên Bờ Biển Xanh Thẳm\r\n\r\n(The House in the Cerulean Sea – T.J.Klune)\r\n\r\nSách bán chạy của New York Times, USA Today và Washington Post.\r\n\r\nĐoạt giải thưởng Alex Awards 2021 - Giải thưởng hàng năm tôn vinh 10 cuốn sách viết cho người lớn có sức hấp dẫn đặc biệt.\r\n\r\nĐoạt giải thưởng RUSA Awards 2021 - Hạng mục tiểu thuyết giả tưởng.\r\n\r\nLọt danh sách \"Những cuốn sách được mong đợi nhất mùa xuân 2020\" của Publishers Weekly.\r\n\r\nLọt danh sách \"20 cuốn sách giả tưởng thú vị phải đọc\" của Book Riot.\r\n\r\nLinus Baker là một nhân viên công tác xã hội làm việc tại Sở Phụ Trách Thanh Thiếu Niên Nhiệm Màu. Anh nhận nhiệm vụ xác định xem sáu đứa trẻ “trông có vẻ nguy hiểm” và đang sinh sống tại đảo Marsyas liệu có khả năng mang đến ngày tận thế hay không.\r\n\r\nArthur Parnassus là chủ trại trẻ mồ côi. Anh là người yêu thương, quan tâm và sẽ làm bất cứ điều gì để bọn trẻ được an toàn, ngay cả khi điều đó có nghĩa là thế giới sẽ bùng cháy và những bí mật anh muốn giấu kín bị phơi bày.\r\n\r\nNgôi nhà bên bờ biển xanh thẳm là một cuốn sách nhẹ nhàng và ngọt ngào, chứa đựng những bài học đời thường mà đôi khi con người quên mất. Rằng những điều bất ngờ nhất, phù hợp nhất sẽ vô tình xuất hiện khi bạn không mong chờ nhất.\r\n\r\n“Nhà không phải lúc nào cũng là ngôi nhà nơi ta sống. Đó còn là những người chúng ta lựa chọn để ở bên…”', 'Nhà Xuất Bản Thế Giới', 'ĐẠO BẢNH BOOK', 640, 'bìa cứng', 178, 2, 3, 4, 345, '216624ab5e54d0f15d4ac3bfb6e968a7.jpg.webp'),
(16, 304, 'Hiệu Sách Nhỏ Ở Paris', 99, ' New York Times Bestseller\r\nA Barnes and Noble Best of 2015 Selection\r\nA LibraryReads Favorite of the Favorites Selection\r\n\r\nCuốn sách là câu chuyện về Monsieur Perdu, chủ tiệm sách bên bờ sông Seine, người tự gọi mình là dược sĩ văn chương. Nhờ giác quan đặc biệt của mình, ông có thể kê đơn cho độc giả chính xác những cuốn sách giúp họ vượt qua khó khăn trong cuộc sống. Chữa lành vết thương, hàn gắn trái tim người khác, song Monsieur Perdu lại không thể chữa cho chính mình, và trái tim ông vẫn luôn rỉ máu từ khi người yêu ông bỏ ra đi để lại một bức thư mà ông chưa từng mở ra. Rồi đến một ngày, ông đọc lá thư và quyết định khám phá kết cục của câu chuyện đời mình. Cùng với một tác giả sách bán chạy nhưng bị cấm xuất bản, và một đầu bếp người Ý thất tình, Perdu du hành dọc theo những dòng sông nước Pháp, cho chúng ta thấy rằng thế giới văn chương có thể đưa tâm hồn con người lên một cuộc du hành hàn gắn và chữa lành như thế nào.\r\n\r\nHiệu sách nhỏ ở Paris là một lá thư tình gửi đến sách, đến tất cả những người tin rằng sức mạnh của những câu chuyện có thể định hình cuộc sống của chúng ta.\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '	Nhà Xuất Bản Hà Nội', '	Nhã Nam', 452, 'Bìa mềm', 134, 2, 1, 5, 267, '8fcbd6abc1ac716d07b3593f9b97f53b.jpg.webp'),
(17, 305, 'Hoa Vẫn Nở Mỗi Ngày', 147, ' “Một tiểu thuyết đầy cảm xúc, một cuốn sách đưa ta đi từ tiếng cười đến những giọt nước mắt với các nhân vật hài hước và cuốn hút.”  – Ban giám khảo giải thưởng Prix des Maisons de la Presse.\r\n\r\nViolette Toussaint sống mà như chết. Người phụ nữ ấy bị mẹ đẻ bỏ rơi ngay khi vừa lọt lòng, tới lượt cô con gái nhỏ mà cô yêu thương nhất lại bỏ cô mà đi trong một tai nạn thảm khốc, rồi cả đến người chồng một ngày kia cũng không còn ở lại bên cô. Cuộc đời của một nhân viên gác chắn nơi ga xép với những chuyến tàu nhỏ mỗi ngày đến rồi đi hay của một người quản trang tại nghĩa trang tỉnh lẻ chuyên đón nhận người chết và chăm sóc các phần mộ tưởng chừng chỉ gắn chặt với mất mát, buồn đau, rồi úa tàn dần theo năm tháng. Nhưng sự sống là mầu nhiệm, hy vọng vẫn còn đó, hạnh phúc lại có dịp được hồi sinh khi hoa kia được thay nước, khi chính con người vẫn tin vào cuộc đời.\r\n\r\nMột câu chuyện sẽ ở lại lâu trong lòng độc giả. Nhẹ nhàng mà thấm thía. Bởi dẫu có lẽ không ít lần lấy đi nước mắt của người đọc, câu chuyện về tình yêu, tổn thương và hy vọng này cuối cùng sẽ để lại trong ta những cảm xúc tích cực, hạnh phúc cùng niềm mãn nguyện êm đềm một khi đã lật giở đến những trang cuối.', '	Nhà Xuất Bản Hà Nội', 'Nhã Nam', 532, 'Bìa cứng', 199, 2, 3, 1, 29, '963d63c3dca69a9e40094b7765d4a70c.jpg.webp'),
(18, 306, 'Thợ Xăm Ở Auschwitz', 116, ' Thợ xăm ở Auschwitz là một tài liệu khác thường, được công bố hơn bảy mươi năm sau những sự kiện nó thuật lại, và nó nhắc nhở chúng ta rằng có rất nhiều câu chuyện sẽ mãi mãi không bao giờ được kể. Nó cũng nhắc chúng ta nhớ rằng trong số nạn nhân lớn đến không tưởng tượng nổi của Holocaust, mỗi người đều là một cá nhân với một câu chuyện độc nhất vô nhị… Và câu chuyện này là một câu chuyện khác thường, thậm chí là so với những câu chuyện về Holocaust nói chung - bởi nó cảm động, thẳng thắn và nâng cánh cho tâm hồn, và dĩ nhiên nó là một cánh cửa sổ để nhìn vào sự kiện khủng khiếp bậc nhất trong lịch sử loài người. Heather Morris kể câu chuyện của Lale bằng lòng tự trọng và sự kiềm chế, không bao giờ để ý kiến riêng của mình xâm phạm vào, hay để cho câu chuyện tình yêu lấn át cái bối cảnh lớn hơn của sự dịch chuyển, sự tổn thương tâm lý và sự sống sót. Đây là câu chuyện về những thái cực trong hành vi của con người tồn tại song song với nhau: sự ác độc có tính toán bên cạnh những hành động vị tha và thôi thúc của tình yêu. Tôi khó mà hình dung được có ai đó không bị lôi cuốn, bị thách thức và cảm động khi đọc cuốn sách này. Tôi sẽ không chút ngại ngần mà giới thiệu cuốn sách này cho bất kỳ ai, dù cho họ đã từng đọc hàng trăm câu chuyện về Holocaust hay chưa từng đọc câu chuyện nào.\r\n\r\n- Graeme Simsion, tác giả của The Rosie Project, The Rosie Effect, The Best of Adam Sharp và Two Steps Forward', 'Nhà Xuất Bản Văn Học', 'Nhã Nam', 384, 'Bìa mềm', 177, 2, 4, 4, 2278, 'c2a6038dd7f55a9295164e88c152f424.jpg.webp'),
(27, 401, 'Lời giải bài tập Python cơ bản', 75, ' Cuốn sách Lời giải bài tập Python cơ bản của Thầy Bùi Việt Hà hiện đã có mặt tại Tủ sách CS4S.\r\n\r\nCuốn sách này bao gồm lời giải, đáp số, chương trình, hướng dẫn chi tiết  cho tất cả 354  bài tập của cuốn PYTHON_CƠ_BẢN đã được phát hành lần trước.\r\n\r\n- Bài tập của các chương sẽ được đánh số theo chương và số thứ tự bài.\r\n\r\n- Chương trình chi tiết giải một bài tập cụ thể sẽ luôn ghi rõ tên bài được giải ngay tại dòng đầu tiên của chương trình.\r\n\r\n- Trong sách chúng ta có thể phân biệt rõ ràng khuôn dạng thể hiện văn bản khác nhau giữa đề bài.\r\n\r\nPython là ngôn ngữ lập trình bậc cao khá dễ học, rất phù hợp để  học và dạy trong nhà trường phổ thông, vì thế Python sẽ đóng vai trò rất lớn trong môn Tin học, thời gian tới Python dự kiến sẽ được đưa vào Chương trình tin học lớp 10 trong Chương trình môn Tin học mới.\r\n\r\nPython là ngôn ngữ lập trình hiện được sử dụng nhiều nhất trong nghiên cứu và ứng dụng công nghệ mới hiện nay như Trí tuệ nhân tạo AI, In ternet vạn vật IoT, tính toán với số lớn (Big Data).\r\n\r\nHi vọng Bộ sách về Python cơ bản bao gồm lý thuyết, bài tập và lời giải sẽ có ích cho các Thầy cô giáo và học sinh trong việc tiếp cận nhanh đến ngôn ngữ lập trình hay và bổ ích này.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 'Đại Học Quốc Gia Hà Nội', 'Công ty TNHH Tin Học Và Nhà Trường', 144, 'Bìa mềm', 112, 4, 4, 3, 231, 'f2113a7e987e7a910410370e09187b3c.jpg.webp'),
(28, 402, 'Nhập môn thuật toán', 178, 'GIỚI THIỆU SÁCH NHẬP MÔN THUẬT TOÁN\r\n\r\nCuốn sách này được viết hướng đến người đọc là giáo viên và học sinh từ cấp THCS lớp 8 trở lên theo nội dung lõi của định hướng khoa học máy tính trong nhà trường: Thuật toán. Đây có lẽ là cuốn sách đầu tiên được viết theo hướng này với kiến thức nhập môn lý thuyết thuật toán dành cho lứa tuổi học sinh. Sau đây là tóm tắt nội dung sách.\r\n\r\nNội dung cuốn sách bao gồm các chương kiến thức sau:\r\n\r\nChương 1. Thuật toán là gì.\r\n\r\nChương 2. Tìm kiếm và sắp xếp. Thuật toán trâu bò.\r\n\r\nChương 3. Đệ quy.\r\n\r\nChương 4. Chia để trị.\r\n\r\nChương 5. Tham lam.\r\n\r\nChương 6. Quy hoạch động.\r\n\r\nChương 7. Một số cấu trúc dữ liệu cơ bản. Cấu trúc cây. Cây nhị phân tìm kiếm.\r\n\r\nChương 8. Một vài thuật toán đơn giản trên đồ thị.\r\n\r\nChương 9. Kỹ thuật duyệt vét cạn quay lui. ', 'Đại Học Quốc Gia Hà Nội', 'Công ty TNHH Tin Học Và Nhà Trường', 426, 'Bìa cứng', 215, 4, 1, 4, 677, '7dafc5262657832cdd11aa46b32ba027.jpg.webp'),
(29, 403, 'Lập Trình Java Căn Bản', 93, ' Cung cấp các kiến thức cơ bản về ngôn ngữ lập trình Java, kiến thức về lập trình hướng đối tượng, xử lý biệt lệ, lập trình đa luồng, lập trình from với swing và kết nối cơ sở dữ liệu với Java…\r\n\r\nLava là ngôn ngữ lập trình bậc cao, mạnh mẽ, bảo mật và là ngôn ngữ lập trình hướng đối tượng. Ngôn ngữ lập trình Java ra đời từ dự án của nhóm Green của Sun nhằm phát triển một ngôn ngữ cho các thiết bị số như tivi, điện thoại… James Gosling, Mike Sheridan, và Patrick Naughton khởi động dự án vào tháng 6 năm 1991, và chính thức công bố rộng rãi vào năm 1995.\r\n\r\nHiện nay, học phần lập trình Java căn bản đã được đưa vào chương trình giảng dạy ở các bậc học chương trình đào tạo cử nhân thông tin. Để tạo điều kiện thuận lợi về tài liệu học tập cho sinh viên, cuốn sách “Lập trình Java căn bản” được biên soạn nhằm cung cấp các kiến thức cơ bản về ngôn ngữ lập trình Java; kiến thức về lập trình hướng đối tượng, xử lý biệt lệ, lập trình đa luồng, các luồng vào/ra, lập trình Form với Swing và kết nối cơ sở dữ liệu (CSDL) với Java. Ngoài ra, cuốn sách còn cung cấp thêm các lớp tiện ích hỗ trợ lập trình cấu trúc dữ liệu trong ngôn ngữ lập trình Java.\r\n\r\nCuốn sách được trình bày gồm 8 chương:\r\n\r\nChương 1 - Giới thiệu ngôn ngữ lập trình Java: Giới thiệu lịch sử hình thành ngôn ngữ lập trình Java, các đặc trưng ngôn ngữ lập trình Java, các loại chương trình Java, các khái niệm cơ bản trong lập trình Java.\r\n\r\nChương 2 - Lập trình hướng đối tượng với Java: Giúp người học biết cách xây dựng lớp đối tượng trong Java, bao gồm cách xây dựng hàm khởi tạo, khai báo thuộc tính, xây dựng các phương thức cần thiết cho lớp và giới thiệu các quy ước đặt tên, giải thích các từ khóa trong lập trình Java.\r\n\r\nChương 3 - Lập trình hướng đối tượng nâng cao với Java: Giúp người học nắm được kỹ thuật lập trình nâng cao với Java, bao gồm kỹ thuật kế thừa trong lập trình Java, xây dựng lớp trừu tượng, phương thức trừu tượng, xây dựng Interface. Giới thiệu quan hệ giữa các đối tượng kế thừa trong lập trình Java.\r\n\r\nChương 4 - Lập trình đa tuyến với Java: Giới thiệu về kỹ thuật đa luồng và các phương pháp lập trình đa luồng bằng ngôn ngữ lập trình Java.\r\n\r\nChương 5 - Điều khiển biệt lệ và các lớp tiện ích: Giới thiệu quy trình  phương pháp xử lý biệt lệ đối với ngôn ngữ lập trình Java và giới thiệu một số lớp tiện ích thông dụng trong ngôn ngữ lập trình Java.\r\n\r\nChương 6 - Vào/Ra trong Java: Giới thiệu các luồng vào ra chuẩn trong Java được cung cấp bởi thư viện J và cách đọc ghi dữ liệu lên file.\r\n\r\nChương 7 - Lập trình giao diện với Swing: Giới thiệu các khái niệm về vật chứa (Container), các phần tử chứa trong vật chứa (Component), các cách bố trí các phần tử trong vật chứa (Layout), xử lý sự kiện trong lập trình giao diện với Swing.\r\n\r\nChương 8 - Làm việc với cơ sở dữ liệu: Giới thiệu phương pháp làm việc với CSDL trong Java, bao gồm: giới thiệu database URL, database driver, quy trình làm việc với CSDL trong Java.', 'Nhà Xuất Bản Xây Dựng', 'NXB Xây Dựng', 168, 'Bìa mềm', 124, 4, 5, 4, 675, '10dd5027458ca3ecfc6ef7c9e4e6cb6a.jpg.webp'),
(30, 404, ' Giáo Trình Ngôn Ngữ Lập Trình C++', 108, 'Giáo trình Ngôn ngữ lập trình C++ được biên soạn nhằm mục đích phục vụ cho sinh viên các ngành kỹ thuật đồng thời là cuốn giáo trình tham khảo cho các giảng viên trong lĩnh vực Công nghệ thông tin. Mục đích của giáo trình này cung cấp đầy đủ các kiến thức về lập chương trình trên máy tính bằng ngôn ngữ C++, sau khi tìm hiểu xon giáo trình này độc giả có thể học tiếp các môn học về lập trình chuyên sâu trong các lĩnh vực chuyên ngành như Vi xử lý - Vi điều khiển, Lập trình Java, ASP, Lập trình phần mềm các thiết bị di động , \r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng)..... ', 'Nhà Xuất Bản Khoa học và Kỹ thuật', 'Trung Tâm Phát Hành Sách Và Văn Hóa Phẩm Khoa Học ', 214, 'Bìa mềm', 145, 4, 3, 2, 456, '9f840550c93147f88cd10e1cf970acf8.jpg.webp'),
(31, 405, 'Lập Trình Với C#', 100, 'Lập Trình Với C#\r\n\r\nHướng dẫn người học từng bước lập trình với C#. Xây dựng ứng dụng trên Window Form.\r\nXây dựng ứng dụng, tạo hai trang web quản lý bán hàng và quản lý tuyển sinh với các hướng dẫn từng bước làm cơ sở cho việc thiết kế các trang web phức tạp hơn.\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng)..... ', '	Nhà Xuất Bản Thanh Niên', '	Công Ty TNHH Thương Mại STK', 392, 'Bìa mềm', 149, 4, 1, 3, 339, '2752f967bcf7283d9b36c4b8718c7bfe.jpg.webp'),
(32, 406, 'Tớ Học Lập Trình', 105, 'Cẩm nang hướng dẫn hoàn chỉnh và đơn giản nhất dành cho bạn trẻ bắt đầu học lập trình\r\nNgôn ngữ lập trình Scratch đặc biệt phù hợp cho bạn trẻ mới học, vì tính tương tác trực quan, đồ họa sống động, ra sản phẩm liền tay mà vẫn đảm bảo khoa học và liên thông tri thức sau này.\r\n\r\nChỉ cần nắm và kéo các khối lệnh đầy màu sắc có sẵn để lắp ghép thành một kịch bản điều khiển các đối tượng trên màn hình.\r\n\r\nKhông có những dòng lệnh logic khô cứng và dễ lỗi, những khái niệm kỹ thuật khó hiểu, những quy tắc luật lệ chằng chịt và mệt mỏi trong các ngôn ngữ lập trình kiểu người lớn.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng)..... ', '	Nhà Xuất Bản Thế Giới', '	Nhã Nam', 96, 'Bìa cứng', 166, 4, 1, 1, 33, 'aa4a13539bf029a861a652512a2221fa.jpg.webp'),
(33, 501, 'Sách - Bình Yên Trong Bão Tố', 200, 'Thông tin chi tiết về sách:\r\nCuốn sách này là tổng hợp 33 câu chuyện về 33 con người khác nhau đến từ mọi miền đất nước cũng như khắp nơi trên thế giới. Mỗi câu chuyện là một cuộc đời, ở đó có những khoảng trời bão giông nhưng cũng có những lúc bình yên lạ thường. Họ đã sống trong bão tố và cũng đã kịp chuyển mình để trở về với sự bình yên chân thật bên trong, cho dù đó vẫn còn là một hành trình dài nhưng cứ đi rồi sẽ tớ\r\nNhững con người đó bằng tất cả nghị lực phi thường của mình đã vượt lên số phận, vượt thoát khỏi nghịch cảnh để tìm về với chính mình, tìm về với con đường hạnh phúc chân chính.\r\n33 câu chuyện - 33 con người - 33 bài học - sẽ tiếp thêm sức mạnh cho mỗi chúng ta vượt qua những khó khăn bất tận của cuộc sống để làm chủ cuộc đời của chính mình.\r\n\"Hãy luôn mỉm cười khi ngày mới bắt đầu vì kể cả ngày đen tối nhất cũng sẽ qua khi bình minh ló rạng, cuộc sống giống như một chiếc gương phản chiếu sẽ mang đến cho ta kết quả tốt đẹp khi và chỉ khi ta chịu mỉm cười với nó.\" - Tuệ An\r\n Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 'Nhà Xuất Bản Hồng Đức', '	Hồng Đức', 268, 'Bìa mềm', 250, 5, 5, 5, 2243, 'a1da88519307cbcc3ab99eb79fca6c7c.jpg.webp'),
(34, 502, ' CHÂN DUNG CỦA LY HÔN', 155, 'Ly hôn không phải chỉ là lúc cặp vợ chồng ra tòa ký vào lá đơn chia tay. Ly hôn là cả một quá trình bao gồm sự rạn nứt mỗi quan hệ, thời điểm đổ vỡ và cuộc gom nhặt lại bản thân của mỗi cá nhân sau đó. Rất nhiều khi giai đoạn khốc liệt nhất là giai đoạn thứ ba.\r\nLy hôn trong xã hội hiện đại đã không còn là điều gì xa lạ, nhưng dường như ta mới biết đến nó hời hợt trên bề mặt. Chân dung của ly hôn là cuốn sách đầu tiên mang đến cái nhìn cận cảnh về ly hôn, kể lại những câu chuyện chân thực sắc nét từ nhiều góc độ, cho thấy những người cha đã vỡ vụn thế nào, những người mẹ đã chịu đựng điều gì, và ám ảnh nhất là những đứa trẻ – chúng đã xoay xở để sống või nõi dau ra sao.\r\nỞ phía khác, cuốn sách cũng chia sẻ những câu chuyện đầy xúc động. Ly hôn không phải là chấm hết, bằng tình yêu thương và lòng bao dung, bằng việc cùng nhìn vào những đứa trẻ để khép lại những tổn thương cũ, tất cả có thể cùng bước qua đổ vỡ. Hạnh phúc mới lấp lánh vẫn ở phía trước.\r\n***\r\nCHÂN DUNG CỦA LY HÔN – Cha mẹ và con hạnh phúc nào sau cuộc đổ vỡ? ', 'Nhà Xuất Bản Dân Trí', 'ĐẠO BẢNH BOOK', 234, 'Bìa mềm', 199, 5, 5, 5, 2311, 'b2928a61273b70a7fd902c5968b5c933.jpg.webp'),
(35, 503, 'Đi Tìm Tình Yêu', 90, 'Bông hồng nào cũng có gai,\r\n\r\ngiống như mỗi khó khăn đều có vinh quang đi kèm\r\n\r\n*****\r\nAi cũng đồng ý rằng tình yêu rất tuyệt vời, trừ những lúc tệ. Con người bị tình yêu trêu ngươi suốt cả đời – người ta kiếm tìm, cố gắng níu giữ, hay cố gắng quên đi.\r\nBiết bao nhiêu người trong chúng ta đã tốn cả đời để theo đuổi tình yêu, cảm giác được đồng thuận và sự trân trọng của những người xung quanh? Họ thử đủ các cách khác nhau để làm vừa lòng và gây ấn tượng với mọi người để có được tình yêu mà mình mong cầu. Họ cho rằng đó là lẽ sống.\r\n\r\nNỗ lực này tiếp diễn không ngừng và không ai thấy có điều gì bất thường cả.\r\n\r\nNhưng càng kỳ vọng vào tình yêu và sự chấp thuận của những người xung quanh, người ta càng cảm thấy thất vọng.\r\n\r\nĐi tìm tình yêu mang đến một cái nhìn gần gũi về sự hiệu quả và không hiệu quả trên con đường tìm kiếm tình yêu và sự đồng thuận. Cuốn sách sẽ giúp bạn tìm ra cách để hạnh phúc hơn trong tình yêu và ứng xử hiệu quả hơn trong các mối quan hệ mà không bị lôi kéo hay bị đánh lừa dưới bất cứ hình thức nào. Những mối quan hệ của bạn trong tình yêu, công việc và tình bạn sẽ trở nên tuyệt vời hơn.\r\n\r\nNếu bây giờ bạn đang đau khổ trên con đường mưu cầu tình yêu và sự đồng thuận vốn đầy trắc trở, bạn sẽ được giải thoát nếu làm theo những bài tập trong cuốn sách này. Những bài tập này hiệu quả nhất khi bạn đặt khát khao làm dịu cơn đau sang một bên (dù chỉ trong khoảnh khắc) và thực hành chúng với tinh thần tìm kiếm sự thật. Sự nhẹ nhõm sẽ đến rất nhanh nếu bạn thấy chân lý, không phải cho người khác mà cho chính bạn.\r\n\r\nĐi tìm tình yêu không phải là cẩm nang tư vấn. Cuốn sách này đưa ra những câu hỏi giúp bạn đối mặt với những giai đoạn trong cuộc đời mà từ trước đến giờ bạn chưa từng nghĩ đến. Sẽ rất thú vị nếu bạn áp dụng cách này để hiểu rõ bản thân, rồi ánh sáng và hạnh phúc tự nhiên sẽ đến với bạn. Tất cả những gì bạn phải làm là thành thật trả lời các câu hỏi trong cuốn sách này. Nếu câu trả lời xuất phát từ trái tim, bạn sẽ khám phá ra những gì mình luôn mong muốn và làm sao để đạt được chúng.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng)..... ', 'Nhà Xuất Bản Thế Giới', '	Saigon Books', 288, 'Bìa cứng', 145, 5, 3, 4, 1122, 'a5a7a90753536e5e1b1c7d4a12e2153c.jpg.webp'),
(36, 504, 'Kiên trì hay từ bỏ', 99, 'Mối quan hệ giữa chúng ta với công việc có thể được ví như một câu chuyện tình đầy cay đắng và gian truân. Chúng ta trao đi thời gian và sức lực để đổi lấy tiền bạc. Đối với ta, công việc thật tàn bạo, cực nhọc và chẳng mấy vui vẻ. Nhưng rồi chốn công sở lạnh lẽo trở thành vùng đất ấm áp. Mối quan hệ với công việc dần khởi sắc khi chúng ta có được kỹ năng mềm lẫn kỹ năng chuyên môn. Dần dần, công việc trở thành thứ duy nhất mà ta có. Đến một lúc nào đó, giật mình nhìn lại, chúng ta như đứng ở bên kia đỉnh dốc, chỉ chực chờ trượt xuống.\r\n\r\nĐã đến thời điểm biến ngày thứ Hai đầy mệt mỏi thành khởi đầu của hạnh phúc Love it or Leave it – KIÊN TRÌ hay TỪ BỎ. Được chắp bút bởi Samantha Clarke – diễn giả, nhà tư vấn chuyên nghiệp về lĩnh vực xây dựng sự nghiệp thành công và hạnh phúc trong công việc; cuốn sách hướng dẫn bạn cách thức để xây dựng mối quan hệ tốt đẹp giữa bản thân và công việc.\r\n\r\nThông qua hai phương pháp cùng các bài tập ứng dụng thực tiễn, cuốn sách giúp bạn tìm được niềm vui trong chính công việc mình làm, cho dù là làm thuê hay làm chủ. Đó là:\r\n\r\n- LOVE IT (Kiên trì): Tìm cách để hoàn thành tốt hơn, đạt được nhiều thành tựu hơn với công việc hiện tại, cải thiện mối quan hệ với công việc, tiếp thêm năng lượng cho tâm trạng hạnh phúc và nâng tầm giá trị của bạn.\r\n\r\n- LEAVE IT (Từ bỏ): Xác định hệ thống kỹ năng bạn có trong hiện tại, xây dựng chiến lược phát triển trong tương lai, cho dù đó là tìm kiếm một công việc mới, bắt đầu sự nghiệp hay thử nghiệm một ý tưởng kinh doanh khả thi…\r\n\r\nTrên hành trình tìm kiếm một công việc hạnh phúc, bạn cần chuẩn bị thật kỹ lưỡng. Hãy mở rộng trái tim để ánh sáng soi rọi những góc khuất tối tăm trong mối quan hệ với công việc và tìm ra sự thay đổi bạn hằng mong đợi. ', 'Nhà Xuất Bản Thế Giới', 'Công Ty TNHH Văn Hóa và Truyền Thông AZ Việt Nam', 255, 'Bìa mềm', 133, 5, 4, 3, 234, '53ba4b2f0245fbed9997bf5ce44e582b.jpg.webp'),
(37, 505, 'Hôn Nhân - Chuyện Thêm Và Bớt', 164, ' Hôn Nhân - Chuyện Thêm Và Bớt\r\n\r\nỞ thời điểm hiện tại, nếu chúng ta muốn tìm một cuốn sách nói về hạnh phúc gia đình, hoặc những cuốn sách viết về Phật giáo và tâm linh thì có lẽ không phải mất quá nhiều công sức; nhưng sẽ không hề đơn giản nếu tìm một cuốn cẩm nang về hạnh phúc gia đình qua cái nhìn từ bi, minh triết của giáo lý Phật pháp. Trên tinh thần chia sẻ quan điểm, cái nhìn của Phật giáo về đời sống hôn nhân, \"Hôn nhân – Chuyện thêm và bớt\" ra đời với mục đích đồng hành cùng quý vị trên con đường kiến tạo hạnh phúc gia đình ngay chính từ những giá trị cơ bản nhất, cốt lõi nhất và từ những câu chuyện thực tế, để tự thân mỗi người có thể tìm thấy chính mình và rút ra được giá trị thật của hạnh phúc trong hôn nhân; từ đấy biết cách dung hòa, gìn giữ và nuôi lớn tình yêu thương trong gia đình.\r\n\r\nBất kỳ ai sinh ra – lớn lên – trải qua tình yêu đều khát khao chạm đến hạnh phúc; nhưng cuộc sống có quá nhiều thay đổi, những giá trị về chuẩn mực đạo đức đang bị đảo lộn khiến con người hoang mang, đôi khi ta phải loay hoay tìm cách tháo gỡ những vướng mắc từ chính gia đình nhỏ của mình. Cuốn sách này ra đời như một lời chia sẻ với quý vị phương pháp chèo lái con thuyền hôn nhân vượt qua sóng gió đời thường, cùng nhau đi hết hành trình cuộc sống để cập bến hạnh phúc. Gia đình không chỉ là điểm tựa vững chắc của mỗi con người mà còn là thước đo giá trị hạnh phúc của xã hội. Thế nên xây dựng một gia đình ấm êm chính là từng bước xây dựng nên một xã hội ổn định, phồn thịnh.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 'Nhà Xuất Bản Văn Hóa - Văn Nghệ', 'Saigon Books', 245, 'Bìa cứng', 201, 5, 5, 5, 1289, '1142f40f1f80042dbb2de42b9396af86.jpg.webp');
INSERT INTO `products` (`stt`, `ProductID`, `ProductName`, `Price`, `Description`, `PublishingCompany`, `IssuingCompany`, `PageCounts`, `CoverType`, `OldPrice`, `BookTypeID`, `ShopID`, `Star`, `sellNumber`, `Image`) VALUES
(38, 506, 'Yêu Trong Tỉnh Thức', 234, 'Khi bạn thật sự yêu một ai đó, cái tôi của bạn sẽ tự động biến mất dần vì người đó. Vậy nên khi chúng ta yêu nhau, kết hôn mà cãi cọ nhau, tranh giành đúng sai, mâu thuẫn về những chuyện không đâu thì hãy tự hỏi xem liệu ta có đang yêu đối phương thật sự hay không? Chúng ta có đang tỉnh thức hay không?\r\n\r\nYêu trong tỉnh thức là tình yêu của những người trưởng thành. Sự trưởng thành không liên quan đến giàu nghèo, địa vị, hay tuổi tác, trưởng thành là khi ta làm chủ được chính mình, làm chủ được cảm xúc, có năng lực tự hạnh phúc với chính mình.\r\n\r\nSự trưởng thành không phải là biến đổi mình trở thành một ai khác mà chính là quay trở về với những phẩm chất thuần khiết tốt đẹp vốn có bên trong. Trưởng thành rồi thì hãy bước vào tình yêu bạn nhé, đừng lớn rồi mà lại cứ yêu đương như trẻ con sáng nắng chiều mưa giữa trưa giông bão đến tối lại bình thường. Yêu như vậy chẳng khác nào hai người cùng nhau đóng một vở kịch rồi đến lúc kịch tan hai diễn viên chính mỗi người rẽ một nơi.\r\n \r\nKhi yêu trong tỉnh thức, ta sẽ cần dừng lại những thói quen, đòi hỏi, mong muốn sở hữu người khác, đặt kì vọng quá lớn vào người khác vì tất cả những điều này đều tạo nên sự xung đột trong các mối quan hệ tình cảm, đặc biệt là tình yêu. Khi yêu trong tỉnh thức, chúng ta vẫn nhận biết rõ các giá trị vai trò của cả mình và người ấy. Để rồi trân trọng lẫn nhau, biết ơn và ngưỡng mộ nhau. Và hơn cả thế, khi lỡ gặp vấn đề trong một mối quan hệ, ta sẽ không bao giờ cảm thấy chết chìm trong mối quan hệ đó vì ta hiểu rõ rằng mình vẫn có giá trị và còn rất nhiều vai trò khác cần phải được lấp đầy.\r\n\r\nBắt đầu một tình yêu cũng giống như việc bạn gieo hạt và trồng cây vậy. Khi mới quen với một người thì mối quan hệ đó cũng đâu thể sau một đêm mà phát triển ngay thành tình yêu hay hôn nhân. Đã là cây thì chúng ta cần phải tưới nước, chăm bón mỗi ngày. Quan trọng là đều đặn mỗi ngày tưới tẩm một chút. Nếu lỡ hôm nay tưới cả gáo nước rồi vài ngày sau không tưới thì cây cũng chết. Bạn và người ấy sẽ cần quan tâm, chăm sóc cho nhau mỗi ngày có khi là từ những món đồ ăn vặt, những lời nói hỏi han ân cần hay là những sự giúp đỡ cho đối phương.', '	Nhà Xuất Bản Hồng Đức', 'ĐẠO BẢNH BOOK', 255, 'Bìa mềm', 299, 5, 5, 4, 1256, 'ace515bba35b064e858bb9036de81f95.png.webp'),
(39, 601, 'Tâm Lý Học Thành Công', 205, 'Tâm Lý Học Thành Công\r\n\r\nNhà tâm lý học nổi tiếng Carol S. Dweck sau nhiều thập niên nghiên cứu về thành công đã khám phá ra một ý tưởng thực sự mang tính đột phá – sức mạnh tư duy của chúng ta.\r\n\r\nCuốn sách sẽ cho bạn thấy không chỉ khả năng và tài trí mới mang lại thành công cho chúng ta, mà phần lớn do cách tiếp cận mục tiêu bằng lối tư duy nào. Việc tán dương trí thông minh và khả năng của con bạn không hề nuôi dưỡng lòng tự trọng và dẫn đến thành tựu, mà thậm chí còn phương hại đến thành công sau này. Với tư duy đứng đắn, chúng ta có thể tạo động lực cho con cái và giúp chúng phát triển trong trường học, cũng như đạt được mục tiêu của bản thân trong cuộc sống và sự nghiệp. Dweck đã giúp tất cả các bậc cha mẹ, giáo viên, CEO và vận động viên thấy một ý tưởng đơn giản về não bộ có thể tạo ra tình yêu học tập và sự kiên trì – cơ sở cho những thành tựu vĩ đại ở mọi lĩnh vực.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng)..... ', 'Nhà Xuất Bản Lao Động Xã Hội', 'Alphabooks', 480, 'Bìa cứng', 2258, 1, 5, 5, 4322, 'f1a1242d4b40788798179e94f16fe0bd.jpg.webp'),
(40, 602, 'Phân Tâm Học Nhập Môn', 156, 'Là một trong những công trình nổi tiếng và được phổ biến rộng rãi nhất của vị bác sĩ thần kinh người Áo gốc Do Thái Sigmund Freud. Mang tính dẫn nhập về phân tâm học, một học thuyết gây nhiều tranh cãi ngay từ thời điểm ra đời (cuối thế kỷ XIX), cuốn sách tập hợp 28 bài giảng của Freud, bao gồm những tri thức và cách tiếp cận căn bản của phân tâm học xung quanh các vấn đề vô thức, những giấc mơ, và các trạng thái bệnh lý thần kinh của con người. Qua công trình này, Freud củng cố và xác lập một phương pháp độc đáo trong nghiên cứu và trị liệu bệnh loạn thần kinh mà ông sáng tạo nên: trị bệnh thông qua thăm dò cõi vô thức của con người.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng)..... ', 'Nhà Xuất Bản Văn Học', 'Nhã Nam', 234, 'Bìa cứng', 199, 1, 1, 3, 432, '9bf2891509bcae066c618f71415b04a7.jpg.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sales`
--

CREATE TABLE `sales` (
  `SaleID` int(11) NOT NULL,
  `VoucherCode` varchar(255) NOT NULL,
  `VoucherCount` int(11) NOT NULL,
  `VoucherTime` date NOT NULL,
  `VoucherDiscount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sales`
--

INSERT INTO `sales` (`SaleID`, `VoucherCode`, `VoucherCount`, `VoucherTime`, `VoucherDiscount`) VALUES
(1, 'vc01', 20, '0000-00-00', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop`
--

CREATE TABLE Shop (
  FollowCount int NOT NULL,
  ShopID int PRIMARY KEY IDENTITY(1,1) ,
  NameShop varchar(255) NOT NULL,
  Rating float NOT NULL,
  shop_img varchar(255) NOT NULL
) 
CREATE TABLE Products (
  ProductId INT PRIMARY KEY IDENTITY(1,1),
  ProductName varchar(255) NOT NULL,
  Price DECIMAL(18, 2) NOT NULL,
  Description text NOT NULL,
  PublishingCompany nvarchar(255) NOT NULL ,
  IssuingCompany nvarchar(255) NOT NULL ,
  PageCounts int NOT NULL,
  CoverType varchar(255) NOT NULL,
  OldPrice DECIMAL(18, 2) NOT NULL ,
  BookTypeID int NOT NULL,
  ShopID int NOT NULL,
  Star int NOT NULL,
  sellNumber int NOT NULL,
  Image varchar(50) NOT NULL
  FOREIGN KEY (BookTypeID) REFERENCES BookType(BookTypeID),
  FOREIGN KEY (ShopID) REFERENCES Shop(ShopID)
)
--
-- Đang đổ dữ liệu cho bảng `shop`
--

INSERT INTO `shop` (`FollowCount`, `ShopID`, `NameShop`, `Rating`, `shop_img`) VALUES
(5, 1, 'GIVER Books', 4.8, 'e292d266ae6cde91c045c23e97ad05de.jpg.webp'),
(6.8, 2, 'TIKI Trading', 4.7, 'b52d0b8576680dc3666474ae31b091ec.jpg.webp'),
(6.5, 3, 'First New', 4.7, 'e292d266ae6cde91c045c23e97ad05de.jpg.webp'),
(7.8, 4, 'Trạm Đọc', 4.4, '0c5467a0e2d780425ef00f82f250443b.jpg.webp'),
(15.5, 5, 'ĐẠO BẢNH', 5, 'z4606811798263_d3a78f8b99230670963045eddbc13bf9.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE Users(
   UserId INT PRIMARY KEY IDENTITY(1,1), 
    UserName NVARCHAR(255) NOT NULL,
    UserEmail NVARCHAR(255) NOT NULL,
    UserPassword NVARCHAR(255) NOT NULL,
    UserRole NVARCHAR(50) NOT NULL,
	Gender BIT,
	AddressInfo NVARCHAR(MAX),
	PhoneNum VARCHAR (50)
);
CREATE TABLE Orders(
    OrderID INT PRIMARY KEY,
    UserId INT NOT NULL,
	NameOder nvarchar(50) not null,
	AddressOder nvarchar(50) not null,
	EmailOder nvarchar(50) not null,
	PhoneOder VARCHAR (50),
    CreatedAt DATETIME NOT NULL,
    Status INT NOT NULL,
    FOREIGN KEY (UserId) REFERENCES Users(UserId)
);
--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `phone`, `address`, `email`, `password`, `CartID`, `role`) VALUES
(2, 'admin', '1', 'address', 'admin@admin.com', 'admin', 0, b'1'),
(3, 'cuong', '123', 'BN', 'cuong@a.com', '123', 0, b'0'),
(4, 'test', '0123', 'HN', 'duongvandung2k3@gmail.com', '123', 0, b'0'),
(5, 'Dũng', '0123', 'Ha Noi, VN', 'cuoicuoi1000@gmail.com', '123', 0, b'0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booktype`
--
ALTER TABLE `booktype`
  ADD PRIMARY KEY (`BookTypeID`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `fk_cart_products` (`ProductID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD UNIQUE KEY `stt` (`stt`),
  ADD KEY `fk_products_shop` (`ShopID`),
  ADD KEY `fk_products_booktype` (`BookTypeID`);

--
-- Chỉ mục cho bảng `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SaleID`);

--
-- Chỉ mục cho bảng `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`ShopID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `idx_user_cart` (`CartID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booktype`
--
ALTER TABLE `booktype`
  MODIFY `BookTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `sales`
--
ALTER TABLE `sales`
  MODIFY `SaleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `fk_cart_products` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_booktype` FOREIGN KEY (`BookTypeID`) REFERENCES `booktype` (`BookTypeID`),
  ADD CONSTRAINT `fk_products_shop` FOREIGN KEY (`ShopID`) REFERENCES `shop` (`ShopID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
