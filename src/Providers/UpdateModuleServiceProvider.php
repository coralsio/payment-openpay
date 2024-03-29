<?php

namespace Corals\Modules\Payment\Openpay\Providers;

use Corals\Foundation\Providers\BaseUpdateModuleServiceProvider;

class UpdateModuleServiceProvider extends BaseUpdateModuleServiceProvider
{
    protected $module_code = 'corals-payment-openpay';
    protected $batches_path = __DIR__ . '/../update-batches/*.php';
}
