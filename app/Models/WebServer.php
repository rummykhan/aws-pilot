<?php

namespace App\Models;

use App\Data\EnvironmentStage;
use App\Data\ServerType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WebServer
 * @package App\Models
 *
 * @property int $id
 *
 * @property string $name
 * @property string $type
 * @property string $absoluteBasePath
 * @property string $serverId
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property string $deleted_at
 *
 * @property Server $server
 */
class WebServer extends Model
{
    protected $table = 'webServers';

    use SoftDeletes;

    public function server(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Server::class, 'serverId', 'id');
    }
}
