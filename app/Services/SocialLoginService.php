<?php
namespace App\Services;

use App\Repositories\UserRepository;

class SocialLoginService {

    use UserRepository;

    /**
     * Store the user if the user is not exist in storage. 
     * Otherwise We set the user logging.   
     */
    public function processCallback($platform) {
        $user = $this->getUserFromFlatform($platform);
        if(!$user) return false;
        $sysUser = $this->getFirstOrNew($user);
        $this->loginUsingIdFlatform($sysUser->facebook_id);
        return true;
    }
}