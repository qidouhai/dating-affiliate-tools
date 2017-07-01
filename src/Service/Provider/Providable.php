<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Service\Provider;

interface Providable
{
    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return string
     */
    public function getFormAction();
}