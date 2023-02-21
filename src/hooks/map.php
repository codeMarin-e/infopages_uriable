<?php

use Marinar\InfopagesUriable\MarinarInfopagesUriable;

$packageDir = MarinarInfopagesUriable::getPackageMainDir();
return [
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'config','marinar_infopages.php']) => [
        "// @HOOK_INFOPAGES_CONFIGS_ADDONS" => "\t\t\\Marinar\\InfopagesUriable\\MarinarInfopagesUriable::class, \n",
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'config','marinar_uriable.php']) => [
        "// @HOOK_CONFIGS_ADDONS" => "\t\t\\Marinar\\InfopagesUriable\\MarinarInfopagesUriable::class, \n",
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'app', 'Models', 'Infopage.php']) => [
        "// @HOOK_TRAITS" => "\tuse \\App\\Traits\\InfopagesUriableTrait; \n",
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'app', 'Models', 'Uri.php']) => [
        "// @HOOK_URIABLE_CLASSES" => "\t\t\App\Models\Infopage::class => 'admin/infopages/infopage.uri_type', \n",
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'lang', 'en', 'admin', 'infopages', 'infopage.php']) => [
        "// @HOOK_INFOPAGE_LANG" => "\t'uri_type' => 'Infopage', \n",
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'resources', 'views', 'admin', 'infopages', 'infopage.blade.php']) => [
        "{{-- @HOOK_INFOPAGE_AFTER_CONTENT --}}" => implode(DIRECTORY_SEPARATOR, [$packageDir, 'hooks', 'HOOK_INFOPAGE_AFTER_CONTENT.blade.php']),
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'app', 'Http', 'Controllers', 'Admin', 'InfopageController.php']) => [
        "// @HOOK_INFOPAGES_STORE_END" => implode(DIRECTORY_SEPARATOR, [$packageDir, 'hooks', 'HOOK_INFOPAGES_STORE_END.php']),
        "// @HOOK_INFOPAGES_UPDATE_END" => implode(DIRECTORY_SEPARATOR, [$packageDir, 'hooks', 'HOOK_INFOPAGES_STORE_END.php']),
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'app', 'Http', 'Requests', 'Admin', 'InfopageRequest.php']) => [
        "// @HOOK_INFOPAGE_REQUEST_RULES" => implode(DIRECTORY_SEPARATOR, [$packageDir, 'hooks', 'HOOK_INFOPAGE_REQUEST_RULES.php']),
        "// @HOOK_INFOPAGE_REQUEST_MESSAGES" => implode(DIRECTORY_SEPARATOR, [$packageDir, 'hooks', 'HOOK_INFOPAGE_REQUEST_MESSAGES.php']),
        "// @HOOK_INFOPAGE_REQUEST_AFTER_VALIDATED" => implode(DIRECTORY_SEPARATOR, [$packageDir, 'hooks', 'HOOK_INFOPAGE_REQUEST_AFTER_VALIDATED.php']),
    ],
];
