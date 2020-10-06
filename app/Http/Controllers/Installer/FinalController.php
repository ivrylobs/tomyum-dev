<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.1   |
    |              on 2020-10-01 12:50:29              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\DatabaseManager; use App\Http\Controllers\Installer\Helpers\EnvironmentManager; use App\Http\Controllers\Installer\Helpers\FinalInstallManager; use App\Http\Controllers\Installer\Helpers\InstalledFileManager; class FinalController extends Controller { public function final(FinalInstallManager $finalInstall, EnvironmentManager $environment) { $finalMessages = $finalInstall->runFinal(); $finalEnvFile = $environment->getEnvContent(); return view("\151\156\163\x74\x61\154\x6c\145\162\x2e\146\151\156\x69\x73\x68\x65\x64", compact("\146\151\x6e\x61\x6c\115\145\163\163\141\147\x65\163", "\146\x69\156\x61\x6c\x45\156\x76\x46\x69\x6c\x65")); } public function seedDemo(DatabaseManager $databaseManager) { $response = $databaseManager->seedDemoData(); return redirect()->route("\111\x6e\163\x74\x61\x6c\x6c\x65\x72\56\146\x69\x6e\151\x73\150"); } public function finish(InstalledFileManager $fileManager) { $finalStatusMessage = $fileManager->update(); return redirect()->to(config("\x69\156\x73\164\x61\x6c\154\145\x72\56\162\x65\144\151\162\x65\143\164\x55\162\154"))->with("\x6d\145\x73\x73\141\147\145", $finalStatusMessage); } }
