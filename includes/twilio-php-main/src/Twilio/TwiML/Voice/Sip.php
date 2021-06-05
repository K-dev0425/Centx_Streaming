<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Sip extends TwiML {
    /**
     * Sip constructor.
     *
     * @param string $sipUrl SIP URL
     * @param array $attributes Optional attributes
     */
    public function __construct($sipUrl, $attributes = []) {
        parent::__construct('Sip', $sipUrl, $attributes);
    }

    /**
     * Add Username attribute.
     *
     * @param string $username SIP Username
     */
    public function setUsername($username): self {
        return $this->setAttribute('username', $username);
    }

    /**
     * Add Password attribute.
     *
     * @param string $password SIP Password
     */
    public function setPassword($password): self {
        return $this->setAttribute('password', $password);
    }

    /**
     * Add Url attribute.
     *
     * @param string $url Action URL
     */
    public function setUrl($url): self {
        return $this->setAttribute('url', $url);
    }

    /**
     * Add Method attribute.
     *
     * @param string $method Action URL method
     */
    public function setMethod($method): self {
        return $this->setAttribute('method', $method);
    }

    /**
     * Add StatusCallbackEvent attribute.
     *
     * @param string[] $statusCallbackEvent Status callback events
     */
    public function setStatusCallbackEvent($statusCallbackEvent): self {
        return $this->setAttribute('statusCallbackEvent', $statusCallbackEvent);
    }

    /**
     * Add StatusCallback attribute.
     *
     * @param string $statusCallback Status callback URL
     */
    public function setStatusCallback($statusCallback): self {
        return $this->setAttribute('statusCallback', $statusCallback);
    }

    /**
     * Add StatusCallbackMethod attribute.
     *
     * @param string $statusCallbackMethod Status callback URL method
     */
    public function setStatusCallbackMethod($statusCallbackMethod): self {
        return $this->setAttribute('statusCallbackMethod', $statusCallbackMethod);
    }
}