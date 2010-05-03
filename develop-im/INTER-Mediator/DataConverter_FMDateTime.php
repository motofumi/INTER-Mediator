<?php
/*
 * INTER-Mediator Ver.@@@@2@@@@ Released @@@@1@@@@
 * 
 *   by Masayuki Nii  msyk@msyk.net Copyright (c) 2010 Masayuki Nii, All rights reserved.
 * 
 *   This project started at the end of 2009.
 *   INTER-Mediator is supplied under MIT License.
 */
require_once( 'operation_common.php' );

class DataConverter_FMDateTime	{
	
	var $tz = 'Asia/Tokyo';		// Should be custimizable.

	var $useMbstring;
	var $fmtNum;

	/**
	 * 
	 * @param integer $format 
	 * @return unknown_type
	 */
	function __construct( $format = '' )	{
		$this->fmt = $format;
		$this->useMbstring = setLocaleAsBrowser( LC_TIME );
		date_default_timezone_set( $this->tz );
	}

	function converterFromDBtoUser( $str )	{
		$sp = strpos ( $str , ' ' );
		$slash = substr_count ( $str , '/' );
		$colon = substr_count ( $str , ':' );
		$dtObj = false;
		if ( ( $sp !== FALSE ) && ( $slash == 2 ) && ( $colon == 2 ) )	{
			$sep = explode( ' ', $str );
			$comp = explode( '/', $sep[0] );
			$dtObj = new DateTime( $comp[2] . '-' . $comp[0] . '-' . $comp[1] . ' ' . $sep[1] );
			$fmt = '%x %T';
		} elseif ( ( $sp === FALSE ) && ( $slash == 2 ) && ( $colon == 0 ) )	{
			$comp = explode( '/', $str );
			$dtObj = new DateTime( $comp[2] . '-' . $comp[0] . '-' . $comp[1] );
			$fmt = '%x';
		} elseif ( ( $sp === FALSE ) && ( $slash == 0 ) && ( $colon == 2 ) )	{
			$dtObj = new DateTime( $str );
			$fmt = '%T';
		}
		if ( $dtObj === false )	{	return $str;	}
		return strftime( ($this->fmt=='')?$fmt:$this->fmt, $dtObj->format('U') );
	}

	function converterFromUserToDB( $str )	{
		$dtAr = date_parse( $str );
		if ( $dtAr === false )	return $str;
		$dt = '';
		if ( $dtAr['year'] !== false && $dtAr['hour'] !== false )
			$dt = "{$dtAr['month']}/{$dtAr['day']}/{$dtAr['year']} {$dtAr['hour']}:{$dtAr['minute']}:{$dtAr['second']}";
		else if ( $dtAr['year'] !== false )
			$dt = "{$dtAr['month']}/{$dtAr['day']}/{$dtAr['year']}";
		else if ( $dtAr['hour'] !== false )
			$dt = "{$dtAr['hour']}:{$dtAr['minute']}:{$dtAr['second']}";
		return $dt;
	}

}
?>
