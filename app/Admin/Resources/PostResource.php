<?php

namespace App\Admin\Resources;

use App\Enum\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Date;
use MoonShine\Fields\Enum;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use VI\MoonShineSpatieMediaLibrary\Fields\MediaLibrary;

class PostResource extends Resource
{
	public static string $model = Post::class;
	public static string $title = 'Посты';
    public static string $subTitle='Управление постами';
    public  string $titleField = 'title';
    public static int $itemsPerPage = 3;

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Grid::make([
                Column::make([
                    Block::make('Информация', [
                        BelongsTo::make('Автор', 'user_id', 'name')
                            ->searchable()
                            ->sortable(),
                        Text::make('Заголовок', 'title'),
                        Enum::make('Статус', 'status')->attach(StatusEnum::class),
                        Date::make('Дата создания', 'created_at')
                            ->format('y.m.d')
                            ->sortable(),
                        Date::make('Дата изменения', 'updated_at')
                            ->format('y.m.d')
                            ->sortable()
                            ->hideOnIndex()

                    ])
                ])->columnSpan(6),
                Column::make([
                    Block::make('Содержание', [
                        MediaLibrary::make('Медиа', 'p-image')
                            ->multiple()
                            ->removable(),
                        TinyMce::make('Содержание', 'body')
                            // Переопределить набор плагинов
                            ->plugins('anchor autoresize image link fullscreen preview visualblocks')
                            // Переопределить набор toolbar
                            ->toolbar('undo redo | blocks fontfamily fontsize | link image media | fullscreen preview visualblocks')
                            // Теги
                            ->mergeTags([
                                ['value' => 'tag', 'title' => 'Title']
                            ])
                            // Переопределение текущей локали
                            ->locale('ru')
                            ->hideOnIndex(),
                    ])
                ])->columnSpan(6)
            ])
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
