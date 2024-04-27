<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Favorities extends Model
{
    use HasFactory;

    protected $table = 'favorities';

    protected $primaryKey = 'favorite_id';

    public $incrementing = true;

    protected $fillable = [
        'favorite_id',
        'favorite_name',
        'favorite_description',
    ];

    /**
     * Relationship many to many
     * @return HasMany
     */
    public function favorities(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
