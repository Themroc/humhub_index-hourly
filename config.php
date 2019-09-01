<?php

use humhub\commands\CronController;
use themroc\humhub\modules\index_hourly\Module;

return [
	'id' => 'index_hourly',
	'class' => Module::class,
	'namespace' => 'themroc\humhub\modules\index_hourly',
	'events' => [
		[ CronController::class, CronController::EVENT_ON_HOURLY_RUN, [ Module::class, 'onCron'] ],
	],
];
