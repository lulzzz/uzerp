<?php

/** 
 *	(c) 2017 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/

class MFCentreDowntimeCodeCollection extends DataObjectCollection
{
	
	protected $version = '$Revision: 1.3 $';
	
	public $field;
		
	function __construct($do = 'MFCentreDowntimeCode', $tablename = 'mf_centre_downtime_codes_overview')
	{
		
		parent::__construct($do, $tablename);
			
	}
	
}

// End of MFCentreDowntimeCodeCollection
