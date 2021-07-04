<?php

namespace App\Helpers;
use Carbon\Carbon;

class Help
{
	public static function convertDateTimeToSeconds($datetime) {
		$time = explode(' ', $datetime)[1];
		$d = explode(':', $time);
		$seconds = ($d[0] * 3600) + ($d[1] * 60) + $d[2];
		return $seconds;
	}

}
 ?>