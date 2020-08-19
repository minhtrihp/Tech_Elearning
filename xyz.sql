-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2020 lúc 03:04 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xyz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `content`, `lesson_id`, `user_id`, `news_id`, `created_at`, `updated_at`) VALUES
(1, 'Bài này rất hay!', 1, 2, 1, '2020-04-20 02:21:27', NULL),
(2, '12noiDung', 2, 1, 2, NULL, NULL),
(3, '13noiDung', 3, 1, 3, NULL, NULL),
(4, '14noiDung', 4, 1, 4, NULL, NULL),
(5, '15noiDung', 5, 1, 5, NULL, NULL),
(6, '21noiDung', 1, 2, 2, NULL, NULL),
(7, '22noiDung', 2, 2, 4, NULL, NULL),
(8, '23noiDung', 3, 2, 6, NULL, NULL),
(9, '24noiDung', 4, 2, 8, NULL, NULL),
(10, '25noiDung', 5, 2, 10, NULL, NULL),
(11, '31noiDung', 1, 3, 3, NULL, NULL),
(12, '32noiDung', 2, 3, 6, NULL, NULL),
(13, '33noiDung', 3, 3, 9, NULL, NULL),
(14, '34noiDung', 4, 3, 12, NULL, NULL),
(15, '35noiDung', 5, 3, 15, NULL, NULL),
(16, '41noiDung', 1, 4, 4, NULL, NULL),
(17, '42noiDung', 2, 4, 8, NULL, NULL),
(18, '43noiDung', 3, 4, 12, NULL, NULL),
(19, '44noiDung', 4, 4, 16, NULL, NULL),
(20, '45noiDung', 5, 4, 20, NULL, NULL),
(21, '51noiDung', 1, 5, 5, NULL, NULL),
(22, '52noiDung', 2, 5, 10, NULL, NULL),
(23, '53noiDung', 3, 5, 15, NULL, NULL),
(24, '54noiDung', 4, 5, 20, NULL, NULL),
(25, '55noiDung', 5, 5, 25, NULL, NULL),
(26, '61noiDung', 1, 6, 6, NULL, NULL),
(27, '62noiDung', 2, 6, 12, NULL, NULL),
(28, '63noiDung', 3, 6, 18, NULL, NULL),
(29, '64noiDung', 4, 6, 24, NULL, NULL),
(30, '65noiDung', 5, 6, 30, NULL, NULL),
(31, '71noiDung', 1, 7, 7, NULL, NULL),
(32, '72noiDung', 2, 7, 14, NULL, NULL),
(33, '73noiDung', 3, 7, 21, NULL, NULL),
(34, '74noiDung', 4, 7, 28, NULL, NULL),
(35, '75noiDung', 5, 7, 35, NULL, NULL),
(36, '81noiDung', 1, 8, 8, NULL, NULL),
(37, '82noiDung', 2, 8, 16, NULL, NULL),
(38, '83noiDung', 3, 8, 24, NULL, NULL),
(39, '84noiDung', 4, 8, 32, NULL, NULL),
(40, '85noiDung', 5, 8, 40, NULL, NULL),
(41, '91noiDung', 1, 9, 9, NULL, NULL),
(42, '92noiDung', 2, 9, 18, NULL, NULL),
(43, '93noiDung', 3, 9, 27, NULL, NULL),
(44, '94noiDung', 4, 9, 36, NULL, NULL),
(45, '95noiDung', 5, 9, 45, NULL, NULL),
(46, '101noiDung', 1, 10, 10, NULL, NULL),
(47, '102noiDung', 2, 10, 20, NULL, NULL),
(48, '103noiDung', 3, 10, 30, NULL, NULL),
(49, '104noiDung', 4, 10, 40, NULL, NULL),
(50, '105noiDung', 5, 10, 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `course_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`course_id`, `name`, `describe`, `topic_id`, `user_id`, `created_at`, `updated_at`, `picture`) VALUES
(1, 'Lập trình PHP', 'Khóa học PHP cơ bản', 1, 2, NULL, NULL, '20.jpg'),
(2, 'Lập trình dotNet', 'Khóa học .Net MWC', 2, 2, NULL, NULL, '11.jpg'),
(3, 'Lập trình giao diện', 'Khóa học lập trình giao diện với windows form', 3, 2, NULL, NULL, 'winform.jpg'),
(4, 'Lập trình Java', 'Khóa học Java Web', 4, 1, NULL, NULL, 'javaweb.png'),
(5, 'Xử lý đồ họa', 'Xử lý ảnh', 5, 1, NULL, NULL, 'xulyanh.jpg'),
(6, 'Cơ sở dữ liệu', 'Các kiến thức cơ bản về cơ sở dữ liệu', 19, 1, NULL, NULL, 'data.png'),
(7, 'Bộ công cụ Office 365', 'Hướng dẫn sử dụng Office 365', 17, 1, NULL, NULL, 'MO.png'),
(8, 'Terminal Linux', 'Học sử dụng terminal với HDH Ubuntu', 18, 2, NULL, NULL, 'terminallnx.png'),
(9, 'Khóa học 9', 'Mô tả khóa học 9', 2, 1, NULL, NULL, '11.jpg'),
(10, 'Khóa học 10', 'Mô tả khóa học 10', 5, 3, NULL, NULL, '12.jpg'),
(14, 'Lập trình mạng với socket', 'Lập trình mạng với module socket trong Python', 20, 1, NULL, NULL, 'pt.png'),
(15, 'Khóa học 12', 'Mô tả khóa học 12', 1, 3, NULL, NULL, 'rB4zLV_13.jpg'),
(16, 'Khóa học 13', 'Mô tả khóa học 13', 1, 1, NULL, NULL, 'mcQvY1_15.jpg'),
(17, 'Khóa học 14', 'Mô tả khóa học 14', 17, 3, NULL, NULL, '15.jpg'),
(18, 'Khóa học mới thêm', '<p>aaaaaaaaaaaaaaaa</p>', 3, 3, NULL, NULL, 'dWwp8c_10.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_lesson`
--

CREATE TABLE `course_lesson` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_course_id` int(10) UNSIGNED NOT NULL,
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course_lesson`
--

INSERT INTO `course_lesson` (`id`, `user_course_id`, `lesson_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 5, 5, NULL, NULL),
(6, 6, 6, NULL, NULL),
(7, 7, 7, NULL, NULL),
(8, 8, 8, NULL, NULL),
(9, 9, 9, NULL, NULL),
(10, 10, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `content`, `user_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(1, '1noiDung', 2, 1, NULL, NULL),
(2, '2noiDung', 3, 2, NULL, NULL),
(3, '3noiDung', 4, 3, NULL, NULL),
(4, '4noiDung', 5, 4, NULL, NULL),
(5, '5noiDung', 6, 5, NULL, NULL),
(6, '6noiDung', 7, 6, NULL, NULL),
(7, '7noiDung', 8, 7, NULL, NULL),
(8, '8noiDung', 9, 8, NULL, NULL),
(9, '9noiDung', 10, 9, NULL, NULL),
(10, '10noiDung', 1, 10, NULL, NULL),
(11, '11noiDung', 2, 11, NULL, NULL),
(12, '12noiDung', 3, 12, NULL, NULL),
(13, '13noiDung', 4, 13, NULL, NULL),
(14, '14noiDung', 5, 14, NULL, NULL),
(15, '15noiDung', 6, 15, NULL, NULL),
(16, '16noiDung', 7, 16, NULL, NULL),
(17, '17noiDung', 8, 17, NULL, NULL),
(18, '18noiDung', 9, 18, NULL, NULL),
(19, '19noiDung', 10, 19, NULL, NULL),
(20, '20noiDung', 1, 20, NULL, NULL),
(21, '21noiDung', 2, 21, NULL, NULL),
(22, '22noiDung', 3, 22, NULL, NULL),
(23, '23noiDung', 4, 23, NULL, NULL),
(24, '24noiDung', 5, 24, NULL, NULL),
(25, '25noiDung', 6, 25, NULL, NULL),
(26, '26noiDung', 7, 26, NULL, NULL),
(27, '27noiDung', 8, 27, NULL, NULL),
(28, '28noiDung', 9, 28, NULL, NULL),
(29, '29noiDung', 10, 29, NULL, NULL),
(30, '30noiDung', 1, 30, NULL, NULL),
(31, '31noiDung', 2, 31, NULL, NULL),
(32, '32noiDung', 3, 32, NULL, NULL),
(33, '33noiDung', 4, 33, NULL, NULL),
(34, '34noiDung', 5, 34, NULL, NULL),
(35, '35noiDung', 6, 35, NULL, NULL),
(36, '36noiDung', 7, 36, NULL, NULL),
(37, '37noiDung', 8, 37, NULL, NULL),
(38, '38noiDung', 9, 38, NULL, NULL),
(39, '39noiDung', 10, 39, NULL, NULL),
(40, '40noiDung', 1, 40, NULL, NULL),
(41, '41noiDung', 2, 41, NULL, NULL),
(42, '42noiDung', 3, 42, NULL, NULL),
(43, '43noiDung', 4, 43, NULL, NULL),
(44, '44noiDung', 5, 44, NULL, NULL),
(45, '45noiDung', 6, 45, NULL, NULL),
(46, '46noiDung', 7, 46, NULL, NULL),
(47, '47noiDung', 8, 47, NULL, NULL),
(48, '48noiDung', 9, 48, NULL, NULL),
(49, '49noiDung', 10, 49, NULL, NULL),
(50, '50noiDung', 1, 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `name`, `describe`, `content`, `link`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Bài 1: Cài đặt XAMPP - VSCode và viết chương trình đầu tiên', '11moTa', '11noiDung', 'https://youtu.be/7nrICwDe3XQ', 1, NULL, NULL),
(2, 'Bài 2: Biến, hằng, kiểu dữ liệu và Toán tử trong PHP', '12moTa', '12noiDung', 'https://youtu.be/eiQs87waxzA', 1, NULL, NULL),
(3, 'Bài 3: Câu lệnh điều kiện trong PHP - Hàm isset và empty', '13moTa', '13noiDung', 'https://youtu.be/9KqlKiJ95rM', 1, NULL, NULL),
(4, 'Bài 4: Vòng lặp trong PHP - Mảng và Thao tác với mảng', '21moTa', '21noiDung', 'https://youtu.be/tKvGhcYDJUg', 1, NULL, NULL),
(5, 'Bài 5: Xây dựng hàm trong PHP', '22moTa', '22noiDung', 'https://youtu.be/wj1tGM3nRvk', 1, NULL, NULL),
(6, '23tenBaiGiang', '23moTa', '23noiDung', '23linkVideo', 2, NULL, NULL),
(7, '31tenBaiGiang', '31moTa', '31noiDung', '31linkVideo', 3, NULL, NULL),
(8, '32tenBaiGiang', '32moTa', '32noiDung', '32linkVideo', 3, NULL, NULL),
(9, '33tenBaiGiang', '33moTa', '33noiDung', '33linkVideo', 3, NULL, NULL),
(10, 'Bài 6: Đối tượng và lập trình hướng đối tượng trong PHP', '<p>41moTa</p>', '<p>41noiDung</p>', 'https://youtu.be/xNneIwtNe24', 1, NULL, NULL),
(11, '42tenBaiGiang', '42moTa', '42noiDung', '42linkVideo', 4, NULL, NULL),
(12, '43tenBaiGiang', '43moTa', '43noiDung', '43linkVideo', 4, NULL, NULL),
(13, '51tenBaiGiang', '51moTa', '51noiDung', '51linkVideo', 5, NULL, NULL),
(14, '52tenBaiGiang', '52moTa', '52noiDung', '52linkVideo', 5, NULL, NULL),
(15, '53tenBaiGiang', '53moTa', '53noiDung', '53linkVideo', 5, NULL, NULL),
(16, '61tenBaiGiang', '61moTa', '61noiDung', '61linkVideo', 6, NULL, NULL),
(17, '62tenBaiGiang', '62moTa', '62noiDung', '62linkVideo', 6, NULL, NULL),
(18, '63tenBaiGiang', '63moTa', '63noiDung', '63linkVideo', 6, NULL, NULL),
(19, '71tenBaiGiang', '71moTa', '71noiDung', '71linkVideo', 7, NULL, NULL),
(20, '72tenBaiGiang', '72moTa', '72noiDung', '72linkVideo', 7, NULL, NULL),
(21, '73tenBaiGiang', '73moTa', '73noiDung', '73linkVideo', 7, NULL, NULL),
(22, '81tenBaiGiang', '81moTa', '81noiDung', '81linkVideo', 8, NULL, NULL),
(23, '82tenBaiGiang', '82moTa', '82noiDung', '82linkVideo', 8, NULL, NULL),
(24, '83tenBaiGiang', '83moTa', '83noiDung', '83linkVideo', 8, NULL, NULL),
(25, '91tenBaiGiang', '91moTa', '91noiDung', '91linkVideo', 9, NULL, NULL),
(26, '92tenBaiGiang', '92moTa', '92noiDung', '92linkVideo', 9, NULL, NULL),
(27, '93tenBaiGiang', '93moTa', '93noiDung', '93linkVideo', 9, NULL, NULL),
(28, '101tenBaiGiang', '101moTa', '101noiDung', '101linkVideo', 10, NULL, NULL),
(29, '102tenBaiGiang', '102moTa', '102noiDung', '102linkVideo', 10, NULL, NULL),
(30, '103tenBaiGiang', '103moTa', '103noiDung', '103linkVideo', 10, NULL, NULL),
(36, 'bai giang moi', '<p>aaaaaaaaaaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaaaa</p>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_16_000726_createdatabase', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `name`, `describe`, `content`, `topic_id`, `user_id`, `created_at`, `updated_at`, `picture`) VALUES
(1, '6,000+ Website Themes & Templates HTML and CSS', 'Góc chia sẻ  - Dành cho các bạn lập trình Web', 'Góc chia sẻ  - Dành cho các bạn lập trBạn mới tập tọe học lập trình web và chưa biết cách thiết kế giao diện HTML/CSS như thế nào.<br/>Bạn đang học lập trình web nhưng chưa đủ kỹ năng cũng như chưa có kinh nghiệm để thiết kế 1 bộ giao diện hoàn chỉnh bắt mắt.<br/>Bạn đang làm lập trình web cho công ty nhưng giao diện hiện tại quá xấu và bạn muốn thay đổi 1 bộ giao diện mới đẹp hơn<br/>Bạn đang triển khai dự án web mà đau đầu về việc lựa chọn thiết kế giao diện</br>Web của mình.', 1, 4, '2020-05-20', NULL, 'WT.jpg'),
(2, 'Truy xuất dữ liệu windows form', 'Câu hỏi về Windows Form', 'Lập trình web PHP và MySQL đã trở thành những công cụ phát triển tốt nhất. Khi được phát triển chính xác, các ứng dụng có thể được xây dựng với khả năng sử dụng đơn giản và sạch sẽ, chức năng phức tạp, tốc độ, sức mạnh và khả năng mở rộng cho phát triển ứng dụng web và có thể được nhúng trong HTML.<br/>Trong thời đại công nghệ thông tin, sự tăng trưởng mạnh của các ứng dụng công nghệ cũng như các nền tảng công nghệ đòi hỏi con người không ngừng cập nhật  và tiếp thu những xu hướng mới. Cùng với đó,những người làm trong ngành IT cũng không ngừng nâng cao bản thân và xuất hiện những công việc mới để đáp ứng xã hội về công nghệ. IT support ra đời với mục đích hỗ trợ cho khách hàng, chia sẻ bớt công việc với team. Vậy IT Support là gì? Công việc của họ như thế nào?', 1, 1, '2020-06-01', NULL, 'cccc.jpg'),
(3, '13tenTinTuc', '13moTa', '13noiDung', 3, 1, NULL, NULL, ''),
(4, '14tenTinTuc', '14moTa', '14noiDung', 4, 1, NULL, NULL, ''),
(5, '15tenTinTuc', '15moTa', '15noiDung', 5, 1, NULL, NULL, ''),
(6, 'Đôi điều về mô hình MVC', 'Là một lập trình viên Web không thể không biết đến mô hình MVC', 'MVC là từ viết tắt của ‘Model View Controller’. Nó đại diện cho các nhà phát triển kiến ​​trúc áp dụng khi xây dựng các ứng dụng. Với kiến ​​trúc MVC, chúng ta xem xét cấu trúc ứng dụng liên quan đến cách luồng dữ liệu của ứng dụng của chúng ta hoạt động như thế nào.</br>\r\nDễ hiểu hơn, nó là mô hình phân bố source code thành 3 phần, mỗi thành phần có một nhiệm vụ riêng biệt và độc lập với các thành phần khác.</br>\r\nMô hình MVC được chia làm 3 lớp xử lý gồm Model – View – Controller :</br>\r\n- Model : là nơi chứa những nghiệp vụ tương tác với dữ liệu hoặc hệ quản trị cơ sở dữ liệu (mysql, mssql… ); nó sẽ bao gồm các class/function xử lý nhiều nghiệp vụ như kết nối database, truy vấn dữ liệu, thêm – xóa – sửa dữ liệu…</br>\r\n- View : là nới chứa những giao diện như một nút bấm, khung nhập, menu, hình ảnh… nó đảm nhiệm nhiệm vụ hiển thị dữ liệu và giúp người dùng tương tác với hệ thống.</br>\r\n- Controller : là nới tiếp nhận những yêu cầu xử lý được gửi từ người dùng, nó sẽ gồm những class/ function xử lý nhiều nghiệp vụ logic giúp lấy đúng dữ liệu thông tin cần thiết nhờ các nghiệp vụ lớp Model cung cấp và hiển thị dữ liệu đó ra cho người dùng nhờ lớp View.', 1, 2, '2020-06-03', NULL, 'mvc1.png'),
(7, '22tenTinTuc', '22moTa', '22noiDung', 2, 2, NULL, NULL, ''),
(8, '23tenTinTuc', '23moTa', '23noiDung', 3, 2, NULL, NULL, ''),
(9, '24tenTinTuc', '24moTa', '24noiDung', 4, 2, NULL, NULL, ''),
(10, '25tenTinTuc', '25moTa', '25noiDung', 5, 2, NULL, NULL, ''),
(11, 'HTML tưởng không ngon, ai ngờ ngon không tưởng', 'Kỹ năng đầu tiên mà bạn cần phải có là HTML (Ngôn ngữ đánh dấu siêu văn bản)', 'HTML tạo ra bộ xương của trang web hoặc một ứng dụng. Nó tạo ra các khối, các yếu tố như menu, hình ảnh, văn bản, video, bảng, đầu vào, v.v. Và thật may là bạn chỉ mất một thời gian không quá dài để làm quen với nó. Sau khoảng một tuần học tập và thực hành, bạn sẽ có thể tạo dự án đầu tiên trong HTML.</br>\r\nNhưng hãy nhớ rằng HTML không trang trí màu sắc và tất cả vẻ đẹp cho trang web, vì thế chúng ta lợi dụng sức mạnh của CSS và JavaScript cung cấp các hiệu ứng tuyệt đẹp cho trang web của bạn. Sau khi chứng kiến một số điều tuyệt vời mà CSS có thể làm, đã đến lúc HTML trở nên nổi bật!</br>\r\nNếu bạn muốn tìm hiểu sâu hơn và viết HTML của riêng mình, hãy bắt đầu với những ví dụ mã HTML đơn giản và dễ học này. Thật tuyệt vời khi bạn có thể làm được rất nhiều chỉ với HTML. Cùng nhau tìm hiểu nhé!', 1, 1, '2020-06-04', NULL, 'html.jpg'),
(12, '32tenTinTuc', '32moTa', '32noiDung', 2, 3, NULL, NULL, ''),
(13, '33tenTinTuc', '33moTa', '33noiDung', 3, 3, NULL, NULL, ''),
(14, '34tenTinTuc', '34moTa', '34noiDung', 4, 3, NULL, NULL, ''),
(15, '35tenTinTuc', '35moTa', '35noiDung', 5, 3, NULL, NULL, ''),
(16, 'Popup alert trong Javascript', 'Popup alert là gì thì chúng ta đã biết rồi phải không?', 'Nếu bạn nào lỡ quên thì mình nhắc nhẹ nó là hộp thông báo từ trình duyêt. Nó có các phương thức alert(), prompt() , confirm ấy, ở bài viết này thì mình sẽ đi sâu về thằng này một tí. Ngoài ra thì mình sẽ tự khởi tạo popup alert bởi vì cái hộp mặc định của trình duyệt nhìn rất chuối </br>\r\n\r\nPopup alert\r\nalert()</br>\r\nconfirm()</br> \r\n\r\nHộp xác nhận thường được sử dụng nếu bạn muốn người dùng xác minh hoặc chấp nhận điều gì đó. Khi hộp xác nhận bật lên, người dùng sẽ phải nhấp vào “OK” hoặc “No” để tiếp tục. Nếu người dùng nhấp vào “OK”, hộp sẽ trả về true . Nếu người dùng nhấp vào “Hủy”, hộp sẽ trả về false .', 1, 4, '2020-06-06', NULL, 'js.png'),
(17, '42tenTinTuc', '42moTa', '42noiDung', 2, 4, NULL, NULL, ''),
(18, '43tenTinTuc', '43moTa', '43noiDung', 3, 4, NULL, NULL, ''),
(19, '44tenTinTuc', '44moTa', '44noiDung', 4, 4, NULL, NULL, ''),
(20, '45tenTinTuc', '45moTa', '45noiDung', 5, 4, NULL, NULL, ''),
(21, 'Nâng skill lập trình PHP như thế nào', 'Là một lập trình viên thì ta luôn chú ý đến năng suất của sản phẩm.', '1. Nắm được nguyên tắc hoạt động của trình biên dịch:</br>\r\nCó lẽ phần này thì ai cũng biết nhưng tôi nghĩ cũng nên đưa ra vì nó rất là quan trọng, và hy vọng những bạn chưa hiểu nguyên tắc hoạt động sẽ nắm bắt được.</br>\r\nĐối với trình biên dịch một ngôn ngữ lập trình bất kỳ thì trình biên dịch luôn luôn dịch một file từ trên xuống dưới và từ trái qua phải. Giả sử bạn tạo 2 fiel a.php và b.php thì nếu bạn require b.php vào a.php thì lúc này trình biên dịch sẽ thực thi hết file b.php rồi mới dịch xuống dòng kế tiếp sau lệnh require ở file a.php.</br>\r\n\r\n2. Thuần thục các toán tử trong lập trình:</br>\r\nCác ngôn ngữ lập trình sẽ có những cách thể hiện toán tử khác nhau nhưng về bản chất thì toán tử thuộc về toán học nên nó không thể thay đổi, tức là cho dù bạn làm việc trên ngôn ngữ nào đi nữa thì nó vẫn là nó. Và đây cũng là tiền đề về kỹ năng lập trình cho các bạn.</br>\r\n\r\n3. Có tư duy lập trình tốt:</br>\r\nLà một lập trình viên thì ai cũng muốn mình có một cái đầu logic. Nhưng vấn đề này có thành hiện thực hay không thì nó phụ thuộc vào thiên phú trời cho và sự chăm chỉ của bạn.\r\n', 1, 5, '2020-06-10', NULL, '12343.jpg'),
(22, '52tenTinTuc', '52moTa', '52noiDung', 2, 5, NULL, NULL, ''),
(23, '53tenTinTuc', '53moTa', '53noiDung', 3, 5, NULL, NULL, ''),
(24, '54tenTinTuc', '54moTa', '54noiDung', 4, 5, NULL, NULL, ''),
(25, '55tenTinTuc', '55moTa', '55noiDung', 5, 5, NULL, NULL, ''),
(26, '61tenTinTuc', '61moTa', '61noiDung', 3, 6, NULL, NULL, ''),
(27, '62tenTinTuc', '62moTa', '62noiDung', 2, 6, NULL, NULL, ''),
(28, '63tenTinTuc', '63moTa', '63noiDung', 3, 6, NULL, NULL, ''),
(29, '64tenTinTuc', '64moTa', '64noiDung', 4, 6, NULL, NULL, ''),
(30, '65tenTinTuc', '65moTa', '65noiDung', 5, 6, NULL, NULL, ''),
(31, '71tenTinTuc', '71moTa', '71noiDung', 4, 7, NULL, NULL, ''),
(32, '72tenTinTuc', '72moTa', '72noiDung', 2, 7, NULL, NULL, ''),
(33, '73tenTinTuc', '73moTa', '73noiDung', 3, 7, NULL, NULL, ''),
(34, '74tenTinTuc', '74moTa', '74noiDung', 4, 7, NULL, NULL, ''),
(35, '75tenTinTuc', '75moTa', '75noiDung', 5, 7, NULL, NULL, ''),
(36, '81tenTinTuc', '81moTa', '81noiDung', 3, 8, NULL, NULL, ''),
(37, '82tenTinTuc', '82moTa', '82noiDung', 2, 8, NULL, NULL, ''),
(38, '83tenTinTuc', '83moTa', '83noiDung', 3, 8, NULL, NULL, ''),
(39, '84tenTinTuc', '84moTa', '84noiDung', 4, 8, NULL, NULL, ''),
(40, '85tenTinTuc', '85moTa', '85noiDung', 5, 8, NULL, NULL, ''),
(41, '91tenTinTuc', '91moTa', '91noiDung', 3, 9, NULL, NULL, ''),
(42, '92tenTinTuc', '92moTa', '92noiDung', 2, 9, NULL, NULL, ''),
(43, '93tenTinTuc', '93moTa', '93noiDung', 3, 9, NULL, NULL, ''),
(44, '94tenTinTuc', '94moTa', '94noiDung', 4, 9, NULL, NULL, ''),
(45, '95tenTinTuc', '95moTa', '95noiDung', 5, 9, NULL, NULL, ''),
(46, '101tenTinTuc', '101moTa', '101noiDung', 5, 10, NULL, NULL, ''),
(47, '102tenTinTuc', '102moTa', '102noiDung', 2, 10, NULL, NULL, ''),
(48, '103tenTinTuc', '103moTa', '103noiDung', 3, 10, NULL, NULL, ''),
(49, '104tenTinTuc', '104moTa', '104noiDung', 4, 10, NULL, NULL, ''),
(50, '105tenTinTuc', '105moTa', '105noiDung', 5, 10, NULL, NULL, ''),
(59, 'tin moi', 'aaaaaaaaaaa', 'aaaaaaaaaaa', 1, 1, '2020-05-20', NULL, 'v1KrrH_13.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `topics`
--

INSERT INTO `topics` (`topic_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lập trình Website', NULL, NULL),
(2, 'Lập trình .Net', NULL, NULL),
(3, 'Lập trình giao diện', NULL, NULL),
(4, 'Lập trình Java', NULL, NULL),
(5, 'Đồ họa', NULL, NULL),
(17, 'Tin học quản lý', NULL, NULL),
(18, 'Lập trình Linux', NULL, NULL),
(19, 'Lập trình cơ sở dữ liệu', NULL, NULL),
(20, 'Lập trình mạng', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `birthdate`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Trường An', '1751010001an@ou.edu.vn', NULL, '0password', '1999-06-18', 2, NULL, NULL, NULL),
(2, 'Hoàng Phạm Minh Trí', '1751010168tri@ou.edu.vn', NULL, '1password', '2020-05-15', 2, NULL, NULL, NULL),
(3, 'Giảng viên Trần Văn A', '2email', NULL, '2password', '2020-05-15', 1, NULL, NULL, NULL),
(4, 'Giảng viên Trần Văn B', '3email', NULL, '3password', '2020-05-15', 1, NULL, NULL, NULL),
(5, '4name', '4email', NULL, '4password', '2020-05-15', 0, NULL, NULL, NULL),
(6, '5name', '5email', NULL, '5password', '2020-05-15', 0, NULL, NULL, NULL),
(7, '6name', '6email', NULL, '6password', '2020-05-15', 0, NULL, NULL, NULL),
(8, '7name', '7email', NULL, '7password', '2020-05-15', 0, NULL, NULL, NULL),
(9, '8name', '8email', NULL, '8password', '2020-05-15', 0, NULL, NULL, NULL),
(10, '9name', '9email', NULL, '9password', '2020-05-15', 0, NULL, NULL, NULL),
(11, '10name', '10email', NULL, '10password', '2020-05-15', 0, NULL, NULL, NULL),
(12, 'ankg122', 'anmaster122@gmail.com', NULL, '$2y$10$84Xaxa.Ny6wN0l0pIKLuqusFcT8C8YNrn/Z5hybJHdheGiEkuNPW.', '1999-01-01', 1, NULL, '2020-06-04 23:14:38', '2020-06-04 23:14:38'),
(13, 'ankg123', 'anmaster123@gmail.com', NULL, '$2y$10$S.t9AtCOI84jiyOEA0SyvOObiplZG1YMX3w/2GAiXm39iBTszEUOq', '2000-01-01', 0, NULL, '2020-06-05 01:37:07', '2020-06-05 01:37:07'),
(14, 'giangvien', 'giangvien1@gmail.com', NULL, '$2y$10$im7L0xlrlh4/mV2Hlg4jQO/xmhWmhhCk5TsifpaHakVyawlk.iDym', '1999-01-01', 1, NULL, '2020-06-12 01:35:43', '2020-06-12 01:35:43'),
(15, 'hocvien1', 'giangvien2@gmail.com', NULL, '$2y$10$vtElAe9jzV6GB2kPrxMKi.YEUFfxpBQrfiQ46DhQ6PFGcR1CplTg.', '1999-01-01', 0, NULL, '2020-06-12 01:47:21', '2020-06-12 01:47:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_course`
--

CREATE TABLE `user_course` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_course`
--

INSERT INTO `user_course` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 10, NULL, NULL),
(2, 2, 9, NULL, NULL),
(3, 3, 8, NULL, NULL),
(4, 4, 7, NULL, NULL),
(5, 5, 6, NULL, NULL),
(6, 6, 5, NULL, NULL),
(7, 7, 4, NULL, NULL),
(8, 8, 3, NULL, NULL),
(9, 9, 2, NULL, NULL),
(10, 10, 1, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_lesson_id_foreign` (`lesson_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_news_id_foreign` (`news_id`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `courses_topic_id_foreign` (`topic_id`),
  ADD KEY `courses_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `course_lesson`
--
ALTER TABLE `course_lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_lesson_user_course_id_foreign` (`user_course_id`),
  ADD KEY `course_lesson_lesson_id_foreign` (`lesson_id`);

--
-- Chỉ mục cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `feedbacks_user_id_foreign` (`user_id`),
  ADD KEY `feedbacks_comment_id_foreign` (`comment_id`);

--
-- Chỉ mục cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `lessons_course_id_foreign` (`course_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_topic_id_foreign` (`topic_id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_course_course_id_foreign` (`course_id`),
  ADD KEY `user_course_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `course_lesson`
--
ALTER TABLE `course_lesson`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`),
  ADD CONSTRAINT `comments_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`),
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `course_lesson`
--
ALTER TABLE `course_lesson`
  ADD CONSTRAINT `course_lesson_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`),
  ADD CONSTRAINT `course_lesson_user_course_id_foreign` FOREIGN KEY (`user_course_id`) REFERENCES `user_course` (`id`);

--
-- Các ràng buộc cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`),
  ADD CONSTRAINT `feedbacks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`),
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `user_course_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
