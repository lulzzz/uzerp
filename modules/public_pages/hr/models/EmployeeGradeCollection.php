<?php

/** 
 *	(c) 2017 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/

class EmployeeGradeCollection extends DataObjectCollection
{
	
	protected $version = '$Revision: 1.1 $';
	
	public function __construct($do = 'EmployeeGrade')
	{
		parent::__construct($do);
	}

}

// End of EmployeeGradeCollection
