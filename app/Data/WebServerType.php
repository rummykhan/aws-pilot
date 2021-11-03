<?php

namespace App\Data;

use App\Infrastructure\AppConstant;

abstract class WebServerType extends AppConstant
{
    const NGINX = 'NGINX';
    const HTTPD = 'HTTPD';
}
