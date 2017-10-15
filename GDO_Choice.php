<?php
namespace GDO\Poll;

use GDO\Core\GDO;
use GDO\DB\GDT_Object;
use GDO\DB\GDT_AutoInc;
use GDO\UI\GDT_Title;

final class GDO_Choice extends GDO
{
	public function gdoColumns()
	{
		return array(
			GDT_AutoInc::make('choice_id'),
			GDT_Object::make('choice_poll')->table(GDO_Poll::table())->index()->notNull(),
			GDT_Title::make('choice_text')->notNull(),
		);
	}

	
}
