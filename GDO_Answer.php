<?php
namespace GDO\Poll;

use GDO\Core\GDO;
use GDO\User\GDT_User;
use GDO\DB\GDT_Object;
use GDO\DB\GDT_CreatedAt;

final class GDO_Answer extends GDO
{
	public function gdoColumns()
	{
		return array(
			GDT_User::make('answer_user')->primary(),
			GDT_Object::make('answer_choice')->primary()->table(GDO_Choice::table()),
			GDT_CreatedAt::make('answer_created'),
		);
	}

	
}
