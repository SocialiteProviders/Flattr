<?php
namespace SocialiteProviders\Flattr;

use SocialiteProviders\Manager\SocialiteWasCalled;

class FlattrExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('flattr', __NAMESPACE__.'\Provider');
    }
}
