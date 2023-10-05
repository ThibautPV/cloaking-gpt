<?php

namespace RojekSeo;

class CloakingGPT {

    private $userAgent;
    private $ipAddress;

    public function __construct() {
        // Fetch user agent from the server variable, filtering out any unexpected data
        $this->userAgent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT', FILTER_SANITIZE_STRING);

        // Fetch IP address from the server variable, filtering out any unexpected data
        $this->ipAddress = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP);
    }

    /**
     * Check if the user agent matches the specified value
     * @return bool
     */
    private function isAllowedUserAgent(): bool
    {
        return $this->userAgent === 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot';
    }

    /**
     * Check if the IP address starts with the specified value
     * @return bool
     */
    private function isAllowedIpAddress(): bool
    {
        return strpos($this->ipAddress, '23.98.') === 0;
    }

    /**
     * Determine if the current request has access based on the user agent and IP address
     * @return bool
     */
    public function hasAccess(): bool
    {
        return $this->isAllowedUserAgent() && $this->isAllowedIpAddress();
    }
}

