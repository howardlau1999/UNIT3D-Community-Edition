<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserMade600Uploads extends Achievement
{
    /*
     * The achievement name
     */
    public $name = __('achievements.user-made-600-uploads-name');

    /*
     * A small description for the achievement
     */
    public $description = __('achievements.user-made-600-uploads-desc');

    /*
     * The amount of "points" this user need to obtain in order to complete this achievement
     */
    public $points = 600;
}
