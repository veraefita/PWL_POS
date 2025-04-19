<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    protected $table = 'm_level';
    protected $primaryKey = 'level_id';
    protected $fillable = ['level_kode', 'level_name']; //Foreign key

    public function users(): HasMany
    {
        return $this->hasMany(related: UserModel::class, foreignKey: 'level_id', localKey: 'level_id');
    }
}