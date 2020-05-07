<?php
namespace LaravelFrontendPresets\TablerPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;

class TablerPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('tabler', function ($command) {
            TablerPreset::install();

            $command->info('Tabler scaffolding installed successfully.');

            if ($command->option('auth')) {
                TablerPreset::installAuth();

                $command->info('Tabler auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
