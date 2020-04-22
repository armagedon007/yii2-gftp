<?php

namespace gftp;

use yii\base\BaseObject;

/**
 * FTP file descriptor.
 *
 * @author Herve Guenot
 * @link http://www.guenot.info
 * @copyright Copyright &copy; 2012 Herve Guenot
 * @license GNU LESSER GPL 3
 * @version 1.0
 */
class FtpFile extends BaseObject {
	public $isDir;
	public $rights;
	public $user;
	public $group;
	public $size;
	public $mdTime;
	public $filename;
}
