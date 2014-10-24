<?php 

class ReplyTableSeeder extends Seeder {
    public function run()
    {
        DB::table('replies')->delete();

        $faker = Faker\Factory::create();

        for($i= 0; $i<10;$i++){
            $reply = Reply::create([
                'body' => $faker->text,
                'user_id' => '1',
                'topic_id' => '1',
            ]);
        }

    }
}
