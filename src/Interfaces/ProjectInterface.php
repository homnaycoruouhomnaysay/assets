<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/4/18
 * Time: 14:55
 */

namespace nguyenanhung\Assets\Interfaces;

/**
 * Interface ProjectInterface
 *
 * @package   nguyenanhung\Assets\Interfaces
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface ProjectInterface
{
	const VERSION = '1.0.2';
	const LAST_MODIFIED = '2024-03-05';
	const AUTHOR_NAME = 'Hung Nguyen';
	const AUTHOR_EMAIL = 'dev@nguyenanhung.com';
	const PROJECT_NAME = 'Assets Manager';
	const TIMEZONE = 'Asia/Ho_Chi_Minh';
	const API_ERROR_CODE = 3;
	const API_CONTENT_HAS_UPDATE = 0;
	const EXIT_SUCCESS = 0; // no errors
	const EXIT_ERROR = 1; // generic error
	const EXIT_CONFIG = 3; // configuration error
	const EXIT_UNKNOWN_FILE = 4; // file not found
	const EXIT_UNKNOWN_CLASS = 5; // unknown class
	const EXIT_UNKNOWN_METHOD = 6; // unknown class member
	const EXIT_USER_INPUT = 7; // invalid user input
	const EXIT_DATABASE = 8; // database error
	const EXIT__AUTO_MIN = 9; // lowest automatically-assigned error code
	const EXIT__AUTO_MAX = 125; // highest automatically-assigned error code
	const USE_BENCHMARK = TRUE;
	const USE_DEBUG = FALSE;

	/**
	 * Hàm lấy thông tin phiên bản Package
	 *
	 * @return mixed|string Current Project Version, VD: 0.1.0
	 * @author  : 713uk13m <dev@nguyenanhung.com>
	 * @time    : 10/13/18 15:12
	 *
	 */
	public function getVersion();
}
