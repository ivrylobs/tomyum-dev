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
 namespace App\Http\Controllers\Installer; use Exception; use Illuminate\Support\Facades\DB; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\DatabaseManager; class DatabaseController extends Controller { private $databaseManager; public function __construct(DatabaseManager $databaseManager) { $this->databaseManager = $databaseManager; } public function database() { if ($this->checkDatabaseConnection()) { goto e_Q5R; } return redirect()->back()->withErrors(["\x64\141\164\141\x62\x61\163\145\x5f\143\157\156\x6e\145\x63\164\151\157\156" => trans("\151\x6e\163\164\141\x6c\154\145\162\x5f\x6d\x65\x73\x73\141\x67\145\163\56\x65\156\166\x69\x72\x6f\x6e\x6d\145\156\x74\x2e\167\x69\172\141\162\144\x2e\x66\x6f\x72\155\56\x64\142\137\143\157\x6e\156\145\x63\164\151\157\x6e\137\x66\x61\x69\154\x65\x64")]); e_Q5R: ini_set("\155\141\170\x5f\x65\170\x65\143\x75\x74\x69\157\x6e\137\x74\151\155\145", 600); $response = $this->databaseManager->migrateAndSeed(); return redirect()->route("\x49\156\163\x74\141\x6c\154\x65\162\56\x66\x69\x6e\x61\154")->with(["\155\145\163\x73\x61\x67\x65" => $response]); } private function checkDatabaseConnection() { try { DB::connection()->getPdo(); return true; } catch (Exception $e) { return false; } } }
