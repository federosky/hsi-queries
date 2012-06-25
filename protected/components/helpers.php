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

function formatTimeEnlapsed( $time_enlapsed )
{
	$formatted = '0\'0\'\'0';
	if( !empty($time_enlapsed) )
	{
		$part3 = substr($time_enlapsed,-3);
		$part2 = substr($time_enlapsed,-5,2);
		$part1 = substr($time_enlapsed,0,-5);

		$formatted = $part1.'\''.$part2.'\'\''.$part3;
	}
	return $formatted;
}