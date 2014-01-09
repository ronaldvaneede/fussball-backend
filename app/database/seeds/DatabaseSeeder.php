<?php

use Fussball\Match;
use Fussball\Score;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('MatchTableSeeder');
        $this->command->info('Match table seeded!');

        $this->call('ScoreTableSeeder');
        $this->command->info('Score table seeded!');
	}

}

class MatchTableSeeder extends Seeder {

    public function run()
    {
        DB::table('matches')->delete();

        Match::create(array('name' => 'match 1', 'status' => 'open'));
        Match::create(array('name' => 'match 2', 'status' => 'playing'));
        Match::create(array('name' => 'match 3', 'status' => 'finished'));
        Match::create(array('name' => 'match 4', 'status' => 'closed'));
    }

}

class ScoreTableSeeder extends Seeder {

    public function run()
    {
        DB::table('scores')->delete();

        Score::create(array('match_id' => '1', 'team' => 'red'));
        Score::create(array('match_id' => '1', 'team' => 'red'));
        Score::create(array('match_id' => '1', 'team' => 'blue'));
        Score::create(array('match_id' => '1', 'team' => 'red'));
        Score::create(array('match_id' => '1', 'team' => 'blue'));
        Score::create(array('match_id' => '1', 'team' => 'blue'));
        Score::create(array('match_id' => '1', 'team' => 'red'));

        Score::create(array('match_id' => '2', 'team' => 'red'));
        Score::create(array('match_id' => '2', 'team' => 'red'));
        Score::create(array('match_id' => '2', 'team' => 'blue'));
        Score::create(array('match_id' => '2', 'team' => 'red'));
        Score::create(array('match_id' => '2', 'team' => 'blue'));
        Score::create(array('match_id' => '2', 'team' => 'blue'));
        Score::create(array('match_id' => '2', 'team' => 'red'));

        Score::create(array('match_id' => '3', 'team' => 'red'));
        Score::create(array('match_id' => '3', 'team' => 'red'));
        Score::create(array('match_id' => '3', 'team' => 'blue'));
        Score::create(array('match_id' => '3', 'team' => 'red'));
        Score::create(array('match_id' => '3', 'team' => 'blue'));
        Score::create(array('match_id' => '3', 'team' => 'blue'));
        Score::create(array('match_id' => '3', 'team' => 'red'));

        Score::create(array('match_id' => '4', 'team' => 'red'));
        Score::create(array('match_id' => '4', 'team' => 'red'));
        Score::create(array('match_id' => '4', 'team' => 'blue'));
        Score::create(array('match_id' => '4', 'team' => 'red'));
        Score::create(array('match_id' => '4', 'team' => 'blue'));
        Score::create(array('match_id' => '4', 'team' => 'blue'));
        Score::create(array('match_id' => '4', 'team' => 'red'));
    }

}