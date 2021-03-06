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
            'Fussball\Storage\Match\MatchRepositoryInterface', 'Fussball\Storage\Match\EloquentMatchRepository'
        );

        $this->app->bind(
            'Fussball\Storage\Score\ScoreRepositoryInterface', 'Fussball\Storage\Score\EloquentScoreRepository'
        );
    }
}