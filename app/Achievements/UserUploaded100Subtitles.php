<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserUploaded100Subtitles extends Achievement
{
    /*
     * The achievement name
     */
    public $name = __('achievements.user-uploaded-100-subtitles-name');

    /*
     * A small description for the achievement
     */
    public $description = __('achievements.user-uploaded-100-subtitles-desc');

    /*
    * The amount of "points" this user need to obtain in order to complete this achievement
    */
    public $points = 100;
}
