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
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\InstalledFileManager; use App\Http\Controllers\Installer\Helpers\DatabaseManager; class UpdateController extends Controller { use \App\Http\Controllers\Installer\Helpers\MigrationsHelper; public function welcome() { return view("\151\156\163\x74\x61\x6c\154\x65\162\56\x75\160\144\x61\164\x65\56\167\145\x6c\x63\x6f\x6d\145"); } public function overview() { $migrations = $this->getMigrations(); $dbMigrations = $this->getExecutedMigrations(); return view("\151\x6e\x73\x74\141\154\x6c\145\162\56\x75\160\x64\141\x74\x65\56\x6f\166\x65\162\166\151\x65\167", ["\x6e\x75\x6d\142\x65\162\x4f\146\125\x70\144\x61\x74\145\x73\120\145\156\144\151\x6e\147" => count($migrations) - count($dbMigrations)]); } public function database() { $databaseManager = new DatabaseManager(); $response = $databaseManager->migrateAndSeed(); return redirect()->route("\x4c\141\x72\x61\166\145\154\125\x70\x64\141\x74\x65\162\72\72\146\x69\156\141\154")->with(["\x6d\145\x73\163\x61\147\x65" => $response]); } public function finish(InstalledFileManager $fileManager) { $fileManager->update(); return view("\151\156\x73\x74\141\x6c\154\145\162\56\x75\x70\x64\141\164\145\56\x66\151\156\151\163\x68\145\x64"); } }
