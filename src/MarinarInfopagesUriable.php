<?php
namespace Marinar\InfopagesUriable;

use Marinar\InfopagesUriable\Database\Seeders\MarinarInfopagesUriableInstallSeeder;

class MarinarInfopagesUriable {

    public static function getPackageMainDir() {
        return __DIR__;
    }

    public static function injects() {
        return MarinarInfopagesUriableInstallSeeder::class;
    }
}
