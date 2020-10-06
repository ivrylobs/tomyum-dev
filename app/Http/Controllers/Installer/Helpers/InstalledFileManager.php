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
 namespace App\Http\Controllers\Installer\Helpers; class InstalledFileManager { public function create() { $installedLogFile = storage_path("\151\156\163\164\141\154\x6c\145\x64"); $dateStamp = date("\131\57\155\x2f\144\40\x68\x3a\151\72\163\x61"); if (!file_exists($installedLogFile)) { goto X2ZOR; } $message = trans("\x69\x6e\163\x74\141\x6c\x6c\x65\x72\x5f\155\x65\x73\x73\141\147\x65\x73\56\x75\160\x64\141\x74\145\x72\x2e\154\157\147\x2e\163\165\143\143\145\163\163\137\x6d\x65\163\163\x61\x67\x65") . $dateStamp; file_put_contents($installedLogFile, $message . PHP_EOL, FILE_APPEND | LOCK_EX); goto NSWrq; X2ZOR: $message = trans("\151\x6e\163\x74\141\154\x6c\x65\x72\x5f\155\x65\x73\x73\141\147\x65\163\56\151\156\x73\164\141\154\154\145\144\56\x73\165\143\x63\145\163\x73\137\x6c\157\x67\137\x6d\x65\163\163\141\x67\x65") . $dateStamp . "\12"; file_put_contents($installedLogFile, $message); NSWrq: return $message; } public function update() { return $this->create(); } }
