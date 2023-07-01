<?php

namespace App\Models;

use App\Enum\StatusEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


/**
 * Class Project
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property string $title
 * @property string $description
 * @property string $status
 * @property string $web_link
 * @property string $git_link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Category $category
 * @property User $user
 *
 * * @package App\Models
 *
 * */

class Project extends Model implements HasMedia
{

    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'projects';

    protected $casts = [
        'user_id' => 'int',
        'category_id' => 'int',
        'status' => StatusEnum::class
    ];

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'web_link',
        'git_link',
        'status',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param Media|null $media
     * @return void
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('cover')
            ->width(837)
            ->height(388);
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }

    public static function last()
    {
        return static::all()->last();
    }
}
