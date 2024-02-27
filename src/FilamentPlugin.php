<?php

namespace AdminKit\SocialMedias;

use Filament\Contracts\Plugin;
use Filament\Panel;
use AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-social-medias';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            SocialMediaResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
