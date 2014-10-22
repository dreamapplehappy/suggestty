<?php 

class TopicTableSeeder extends Seeder {
    public function run()
    {
        DB::table('topics')->delete();
        
        $faker = Faker\Factory::create();

        for($i = 0;$i< 10;$i++){
            $topic = Topic::create(array(
                'title' => $faker->name,
                'body' => $faker->text,
                'user_id' => '1',
            ));
        }
    }
}
