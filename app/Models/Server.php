<?php

namespace App\Models;

use App\Data\EnvironmentStage;
use App\Data\ServerType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Server
 * @package App\Models
 *
 * @property int $id
 *
 * @property string $name
 * @property string $type
 * @property string $permissionFilePath
 * @property string $loginUser
 * @property integer $environmentId
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property string $deleted_at
 *
 * @property Environment $environment
 */
class Server extends Model
{
    protected $table = 'servers';

    use SoftDeletes;

    public function environment(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Environment::class, 'environmentId', 'id');
    }
}
