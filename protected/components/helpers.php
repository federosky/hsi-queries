<?php
/**
 * Common utility functions
 */

/**
 * Format weight to print, switching decimals for fraction part
 * @param String $weight
 */
function formatWeight($weight)
{
	$pieces = explode('.', $weight);
	if( count($pieces) > 1 )
	{
		$weight = $pieces[0].'&frac12';
	}
	return $weight;
}

/**
 * Formats race enlapse time,
 * @param mixed $time_enlapsed
 */
function formatTimeEnlapsed( $time_enlapsed )
{
	$formatted = '0\'0\'\'0';
	if( !empty($time_enlapsed) )
	{
		if( is_numeric($time_enlapsed) )
		{
			$part3 = substr($time_enlapsed,-3);
			$part2 = substr($time_enlapsed,-5,2);
			$part1 = substr($time_enlapsed,0,-5);
	
			$formatted = $part1.'\''.$part2.'\'\''.$part3;
		}
		else $formatted = $time_enlapsed;
	}
	return $formatted;
}