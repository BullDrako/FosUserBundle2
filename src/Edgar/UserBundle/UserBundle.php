<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 3/12/15
 * Time: 19:50
 */

namespace Edgar\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
class UserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
