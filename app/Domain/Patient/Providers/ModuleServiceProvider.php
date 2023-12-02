<?php

namespace App\Domain\Patient\Providers;

use App\Domain\Patient\Models\Patient;
use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Patient::class
    ];
}
