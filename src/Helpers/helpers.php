<?php

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
if(!function_exists('cd_naradmin'))
{

	function cd_naradmin()
	{
		return app('naradmin');
	}

}
if(!function_exists('cd_naradmin_tag'))
{

	/**
	 * Return this packge tag
	 * @return string
	 */
	function cd_naradmin_tag()
	{
		return 'naradmin';
	}

}
if(!function_exists('cd_naradmin_template'))
{

	/**
	 * Return this packge template
	 * @return string
	 */
	function cd_naradmin_template()
	{
		return cd_naradmin_tag() . '::templates.' . cd_template() . '.template';
	}

}
if(!function_exists('cd_naradmin_view_name'))
{

	/**
	 * Return this package view name
	 * view(cd_naradmin_view_name('view-name')) = nhr::view-name
	 * @param string $view The View Name
	 * @return string
	 */
	function cd_naradmin_view_name($view)
	{
		return cd_naradmin_tag() . '::templates.' . cd_template() . '.' . $view;
	}

}
if(!function_exists('cd_naradmin_asset'))
{

	/**
	 * Return the public path to an asset.
	 * 	path to return is relative to package template folder.
	 * 	If you want to return an asset relative to the public folder,
	 * 	use larvel's asset() instead
	 * @param string $asset The asset
	 * @return string
	 */
	function cd_naradmin_asset($asset = null)
	{
		$pathToAssets = env('CD_ASSETSPATH', false);
		if(!empty($pathToAssets))
		{
			return fixDoubleSlash($pathToAssets . '/' . $asset);
		}
		return asset('assets') . '/' . fixDoubleSlash(cd_naradmin_tag() . '/templates/' . cd_template() . '/' . $asset);
	}

}

