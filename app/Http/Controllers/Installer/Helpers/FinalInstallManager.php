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
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Support\Facades\Artisan; use Symfony\Component\Console\Output\BufferedOutput; class FinalInstallManager { public function runFinal() { $outputLog = new BufferedOutput(); $this->generateKey($outputLog); $this->publishVendorAssets($outputLog); return $outputLog->fetch(); } private static function generateKey($outputLog) { try { if (!config("\151\156\x73\x74\x61\154\x6c\145\162\x2e\x66\x69\156\x61\x6c\x2e\x6b\x65\x79")) { goto Zeo5X; } Artisan::call("\153\x65\x79\x3a\x67\145\156\145\x72\141\x74\145", ["\x2d\55\x66\157\x72\x63\145" => true], $outputLog); Zeo5X: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function publishVendorAssets($outputLog) { try { if (!config("\x69\156\x73\164\x61\x6c\x6c\x65\162\56\x66\x69\x6e\x61\x6c\x2e\160\165\142\154\x69\163\150")) { goto lPnJC; } Artisan::call("\x76\x65\x6e\x64\x6f\x72\x3a\x70\165\x62\154\x69\163\x68", ["\x2d\55\141\154\x6c" => true], $outputLog); lPnJC: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function response($message, $outputLog) { return ["\163\x74\x61\164\x75\x73" => "\x65\x72\162\x6f\162", "\155\x65\163\163\x61\x67\145" => $message, "\144\142\117\x75\164\160\x75\164\x4c\157\x67" => $outputLog->fetch()]; } }
