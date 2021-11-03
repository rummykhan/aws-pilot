<?php

namespace App\Data;

use App\Infrastructure\AppConstant;

abstract class ServerType extends AppConstant
{
    const UBUNTU = 'UBUNTU';
    const FEDORA = 'FEDORA';
    const REDHAT = 'REDHAT';
    const AMI = 'AMI';
}
