<?php namespace Fussball\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Fussball\Storage\Lobby\LobbyRepositoryInterface', 'Fussball\Storage\Lobby\EloquentLobbyRepository'
        );
    }
}