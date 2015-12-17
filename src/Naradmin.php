<?php

namespace Claremontdesign\Naradmin;

/**
 * Dx
 *
 * @link http://dennesabing.com
 * @author Dennes B Abing <dennes.b.abing@gmail.com>
 * @license proprietary
 * @copyright Copyright (c) 2015 ClaremontDesign/MadLabs-Dx
 * @version 0.0.0.1
 * @since Dec 17, 2015 1:43:45 PM
 * @file routes.php
 * @project Claremontdesign
 * @package Naradmin
 */
use Claremontdesign\Cdbase\Cdbase;

class Naradmin extends Cdbase
{

	/**
	 * Return the configuration file
	 */
	public function config()
	{
		return [
			__DIR__ . '/../config/config.php',
		];
	}

}
