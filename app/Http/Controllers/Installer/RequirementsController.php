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
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\RequirementsChecker; class RequirementsController extends Controller { protected $requirements; public function __construct(RequirementsChecker $checker) { $this->requirements = $checker; } public function requirements() { $phpSupportInfo = $this->requirements->checkPHPversion(config("\x69\x6e\163\x74\x61\x6c\x6c\x65\162\x2e\143\157\162\x65\56\155\x69\x6e\120\150\160\126\x65\162\163\x69\157\156"), config("\x69\x6e\x73\164\141\154\154\x65\162\x2e\x63\x6f\x72\145\56\x6d\x61\x78\x50\x68\160\x56\145\x72\x73\151\x6f\156")); $requirements = $this->requirements->check(config("\151\x6e\x73\x74\x61\x6c\x6c\145\162\x2e\x72\x65\x71\x75\x69\x72\145\155\x65\156\164\x73")); return view("\151\x6e\163\x74\x61\x6c\154\145\x72\56\162\145\161\165\151\162\x65\x6d\145\156\x74\x73", compact("\x72\x65\x71\165\151\x72\145\155\145\156\164\163", "\x70\x68\x70\x53\165\160\x70\x6f\162\x74\x49\x6e\x66\x6f")); } }
