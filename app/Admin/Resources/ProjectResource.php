<?php

namespace App\Admin\Resources;

use App\Enum\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Date;
use MoonShine\Fields\Enum;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use VI\MoonShineSpatieMediaLibrary\Fields\MediaLibrary;

class ProjectResource extends Resource
{
	public static string $model = Project::class;
	public static string $title = 'Проекты';
    public static string $subTitle = 'Управление проектами';
    public string $titleField = 'title';
    public static int $itemsPerPage = 3;

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Grid::make([
                Column::make([
                    Block::make('Информация', [
                        MediaLibrary::make('Медиа', 'cover')
                            ->removable()
                            ->multiple(),
                        BelongsTo::make('автор', 'user_id', 'name')
                            ->searchable()
                            ->sortable(),
                        BelongsTo::make('категория', 'category_id', 'name')
                            ->searchable()
                            ->sortable(),
                        Text::make('Название', 'title'),
                        TinyMce::make('Описание', 'description')
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
                        Url::make('web_link')
                            ->hideOnIndex()
                            ->nullable(),
                        Url::make('git_link')
                            ->hideOnIndex()
                            ->nullable(),
                        Enum::make('Статус', 'status')->attach(StatusEnum::class),
                        Date::make('Дата создания', 'created_at')
                            ->format('y.m.d')
                            ->sortable(),
                        Date::make('Дата изменения', 'updated_at')
                            ->format('y.m.d')
                            ->sortable()
                            ->hideOnIndex()
                    ])
                ])
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
