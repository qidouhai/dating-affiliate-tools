<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Service\Provicer\TAC;

use DAT\Service\Identifier\Affiliate as AffiliateId;
use DAT\Service\Provider\Providable;

class EveFlirt implements Providable
{
    const FORM_URL = 'http://';
    const FORM_ACTION_URI = '/register/';

    const EMAIL_FIELD = '';
    const USERNAME_FIELD = '';
    const NAME_FIELD = '';

    /** @var Affiliate */
    private $affiliateId;

    /**
     * @param AffiliateId $affiliateId
     */
    public function __construct(AffiliateId $affiliateId)
    {
        $this->affiliateId = $affiliateId;
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {
        return self::FORM_URL . $this->affiliateId->getValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormAction()
    {
        return self::FORM_ACTION_URI;
    }
}