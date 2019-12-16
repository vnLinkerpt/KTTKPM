<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'kttkpm' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C*ZXlw288Ty&MTubiap0!zoMi?!5^Ud~,s/x>BUNcoGS$)~CD;%TRw0JK<B`<f]=' );
define( 'SECURE_AUTH_KEY',  '%.tvKktORFuIXvTaeB<PR1wS*km!X_/j:ZLu[G:IlgxD-$uAJ6ZO6b_n!of(LGFo' );
define( 'LOGGED_IN_KEY',    'cbDm{fW/(Y[S^uzo2KH))lc_/ER]m7NHpLg1Jki6^baj~0l(.Ua`^9xw*#ytmd(1' );
define( 'NONCE_KEY',        ' 2_v=1.CnboMH6B{sZ358kGQydL|G 6 [.r-PlA)*,#*b$gON{N4Y0_0tE4JR7^u' );
define( 'AUTH_SALT',        'Q@72aX>>O+7j `lByklG#_:eB=&sh*kZ4om^`>AhdGHgFf-7^Kfm4&i]EVe ]f2&' );
define( 'SECURE_AUTH_SALT', '127GNCwYVf6sx{thQ%63>imHuM}7CzB?t&Au-Ei^f|CXLv>S3G?T9_]SvqyAS7p:' );
define( 'LOGGED_IN_SALT',   '2QKO^6D>B^(*<:+P;Ukij@$ 34*@38q4pIY_(ymkW#nq)iC:Z_4tA%QY$-`Oj)0S' );
define( 'NONCE_SALT',       '8kgBPH$@N]x6( yH=Ly<UM[r74 G<RD&`NDcoKdga?H(NE%.1Ey3|)oTB6o#g1M#' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
