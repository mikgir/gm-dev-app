<?php

namespace App\Admin\Resources;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Date;
use MoonShine\Fields\Email;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use Spatie\Permission\Traits\HasRoles;
use VI\MoonShineSpatieMediaLibrary\Fields\MediaLibrary;

class UserResource extends Resource
{
    use HasRoles;

    public static string $model = User::class;
    public static string $title = 'Пользователи';
    public static string $subTitle = 'Управление пользователями';
    public string $titleField = 'name';
    public static int $itemsPerPage = 5;

    public function query(): Builder
    {
        return User::with([
            'roles',
            'permissions',
            'media',
        ]);
    }

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Grid::make([
                Column::make([
                    Block::make('Информация',[
                        MediaLibrary::make('Аватар', 'avatars')
                            ->removable(),
                        Text::make('Имя', 'name'),
                        Email::make('email'),
                        Date::make('Дата регистрации', 'created_at')
                            ->sortable()
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
