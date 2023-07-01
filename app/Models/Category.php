<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Category
 *
 * @property int $id
 * @property int $order
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|Project[] $projects
 *
 * @package App\Models
 */
class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $casts = [
        'order' => 'int'
    ];

    protected $fillable = [
        'order',
        'name'
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
