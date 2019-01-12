<?php

use App\Reply;
use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Lorem ipsum dolor sit amet, purto invenire id qui. Equidem delicata expetendis usu ea. Nostro instructior ei mei, ignota iuvaret epicurei et vis, quod noster instructior his ex. His fuisset disputando ea.'
        ];

        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'content' => 'Lorem ipsum dolor sit amet, purto invenire id qui. Equidem delicata expetendis usu ea. Nostro instructior ei mei, ignota iuvaret epicurei et vis, quod noster instructior his ex. His fuisset disputando ea.'
        ];

        $r3 = [
            'user_id' => 2,
            'discussion_id' => 3,
            'content' => 'Lorem ipsum dolor sit amet, purto invenire id qui. Equidem delicata expetendis usu ea. Nostro instructior ei mei, ignota iuvaret epicurei et vis, quod noster instructior his ex. His fuisset disputando ea.'
        ];

        $r4 = [
            'user_id' => 4,
            'discussion_id' => 4,
            'content' => 'Lorem ipsum dolor sit amet, purto invenire id qui. Equidem delicata expetendis usu ea. Nostro instructior ei mei, ignota iuvaret epicurei et vis, quod noster instructior his ex. His fuisset disputando ea.'
        ];

        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
    }
}
