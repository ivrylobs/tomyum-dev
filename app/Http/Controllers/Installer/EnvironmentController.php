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
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use Illuminate\Http\Request; use Illuminate\Routing\Redirector; use App\Http\Controllers\Installer\Helpers\EnvironmentManager; use Validator; class EnvironmentController extends Controller { protected $EnvironmentManager; public function __construct(EnvironmentManager $environmentManager) { $this->EnvironmentManager = $environmentManager; } public function environmentMenu() { return view("\x69\156\163\164\141\154\154\145\162\56\145\x6e\166\x69\x72\x6f\x6e\x6d\x65\x6e\164"); } public function environmentWizard() { } public function environmentClassic() { $envConfig = $this->EnvironmentManager->getEnvContent(); return view("\151\x6e\163\164\x61\x6c\154\x65\x72\56\145\x6e\166\151\162\157\156\155\145\156\164\x2d\x63\x6c\141\163\163\x69\x63", compact("\x65\156\166\103\x6f\x6e\x66\x69\147")); } public function saveClassic(Request $input, Redirector $redirect) { $message = $this->EnvironmentManager->saveFileClassic($input); return $redirect->route("\111\x6e\x73\x74\141\x6c\154\145\x72\x2e\145\x6e\x76\x69\162\x6f\x6e\155\145\x6e\164\103\154\141\x73\x73\151\x63")->with(["\x6d\145\x73\163\x61\147\x65" => $message]); } }
