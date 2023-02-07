<?php
    namespace Marinar\InfopagesUriable\Database\Seeders;

    use Illuminate\Database\Seeder;
    use Marinar\InfopagesUriable\MarinarInfopagesUriable;

    class MarinarInfopagesUriableInstallSeeder extends Seeder {

        use \Marinar\Marinar\Traits\MarinarSeedersTrait;

        public static function configure() {
            static::$packageName = 'marinar_infopages_uriable';
            static::$packageDir = MarinarInfopagesUriable::getPackageMainDir();
        }

        public function run() {
            if(!in_array(env('APP_ENV'), ['dev', 'local'])) return;

            $this->autoInstall();

            $this->refComponents->info("Done!");
        }

    }
