<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserUploadedFirstSubtitle extends Achievement
{
    /*
     * The achievement name
     */
    public $name = __('achievements.user-uploaded-first-subtitle-name');

    /*
     * A small description for the achievement
     */
    public $description = __('achievements.user-uploaded-first-subtitle-desc');

    /*
    * A small description for the award
    */
    //public $award = "1000 Bonus Points";

    /*
    * Triggers whenever an Achiever unlocks this achievement
    */
    /*public function whenUnlocked($progress)
    {
        $achiever = $progress->achiever;

        $user = User::findOrFail($achiever->id);
        $user->seedbonus += 1000;
        $user->save();
    }*/
}
