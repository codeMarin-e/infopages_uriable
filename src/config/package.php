<?php
	return [
		'install' => [
            'php artisan db:seed --class="\Marinar\InfopagesUriable\Database\Seeders\MarinarInfopagesUriableInstallSeeder"',
		],
		'remove' => [
            'php artisan db:seed --class="\Marinar\InfopagesUriable\Database\Seeders\MarinarInfopagesUriableRemoveSeeder"',
        ]
	];
