<?php
namespace GDO\Poll;

use GDO\Core\GDO_Module;

final class Module_Poll extends GDO_Module
{
	public $module_priority = 40;
	
	public function getClasses()
	{
		return array(
			"GDO\\Poll\GDO_Poll",
			"GDO\\Poll\GDO_Choice",
			"GDO\\Poll\GDO_Answer",
		);
	}
}
