<?php

namespace App\Data;

use App\Infrastructure\AppConstant;

abstract class EnvironmentStage extends AppConstant
{
    const BETA = 'BETA';
    const STAGING = 'STAGING';
    const PROD = 'PROD';
}
