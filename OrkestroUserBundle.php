<?php

namespace Orkestro\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OrkestroUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
