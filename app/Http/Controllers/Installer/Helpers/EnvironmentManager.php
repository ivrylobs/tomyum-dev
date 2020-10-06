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
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Http\Request; class EnvironmentManager { private $envPath; private $envExamplePath; public function __construct() { $this->envPath = base_path("\x2e\145\156\166"); $this->envExamplePath = base_path("\56\x65\156\166\x2e\145\x78\141\155\160\x6c\145"); } public function getEnvContent() { if (file_exists($this->envPath)) { goto JtEoy; } if (file_exists($this->envExamplePath)) { goto ftHfv; } touch($this->envPath); goto XCv4k; ftHfv: copy($this->envExamplePath, $this->envPath); XCv4k: JtEoy: return file_get_contents($this->envPath); } public function getEnvPath() { return $this->envPath; } public function getEnvExamplePath() { return $this->envExamplePath; } public function saveFileClassic(Request $input) { $message = trans("\151\x6e\163\164\x61\x6c\x6c\145\x72\x5f\155\145\x73\163\141\147\x65\x73\x2e\145\x6e\166\151\162\157\x6e\x6d\145\x6e\164\56\x73\x75\143\143\145\163\163"); try { file_put_contents($this->envPath, $input->get("\145\x6e\x76\103\157\x6e\146\151\x67")); } catch (Exception $e) { $message = trans("\x69\156\x73\x74\x61\x6c\x6c\145\x72\137\155\x65\163\x73\141\147\145\x73\56\145\156\166\x69\x72\x6f\x6e\x6d\145\156\164\56\x65\162\162\x6f\162\x73"); } return $message; } }
