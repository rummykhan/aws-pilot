<?php

namespace App\Models;

use App\Data\EnvironmentStage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

/**
 * Class Environment
 * @package App\Models
 *
 * @property int $id
 *
 * @property string $name
 * @property string $stage
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property string $deleted_at
 *
 * @property Server[]|Collection $servers
 */
class Environment extends Model
{
    protected $table = 'environments';

    use SoftDeletes;

    public function servers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Server::class, 'environmentId', 'id');
    }
}
