<?php

namespace App\Providers;

use App\Admin\Resources\CategoryResource;
use App\Admin\Resources\PostResource;
use App\Admin\Resources\ProjectResource;
use App\Admin\Resources\RoleResource;
use App\Admin\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
//            MenuGroup::make('moonshine::ui.resource.system', [
//                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
//                    ->translatable()
//                    ->icon('users'),
//                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
//                    ->translatable()
//                    ->icon('bookmark'),
//            ])->translatable(),
            MenuGroup::make('Система', [
                MenuItem::make('Пользователи', new UserResource())
                    ->badge(fn() => User::query()->count())
                    ->icon('users'),
                MenuItem::make('Роли', new RoleResource())
                    ->icon('heroicons.academic-cap')
            ])->icon('heroicons.cog-8-tooth'),

            MenuGroup::make('Контент', [
                MenuItem::make('Категории', new CategoryResource())
                    ->icon('heroicons.document-text'),
                MenuItem::make('Проекты', new ProjectResource())
                    ->icon('heroicons.computer-desktop'),
                MenuItem::make('Посты', new PostResource())
                    ->icon('heroicons.photo')
            ])->icon('heroicons.newspaper'),
            MenuGroup::make('Заказы', [

            ])->icon('heroicons.clipboard-document-list')

        ]);
    }
}
