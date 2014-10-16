<?php if (!defined('BASEPATH')) exit('Not direct script access allowed');

class Utils
{

	public function __construct()
	{
	}

	public function displayAllContentsForOneEpisode($full_content)
	{
		foreach ($full_content as $key => $value) {
			echo $value['full_content'];
		}
	}
}