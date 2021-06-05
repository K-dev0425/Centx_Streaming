<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Conversations\V1\Service\Configuration;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $accountSid
 * @property string $chatServiceSid
 * @property array $newMessage
 * @property array $addedToConversation
 * @property array $removedFromConversation
 * @property bool $logEnabled
 * @property string $url
 */
class NotificationInstance extends InstanceResource {
    /**
     * Initialize the NotificationInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $chatServiceSid The unique string that identifies the resource
     */
    public function __construct(Version $version, array $payload, string $chatServiceSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'chatServiceSid' => Values::array_get($payload, 'chat_service_sid'),
            'newMessage' => Values::array_get($payload, 'new_message'),
            'addedToConversation' => Values::array_get($payload, 'added_to_conversation'),
            'removedFromConversation' => Values::array_get($payload, 'removed_from_conversation'),
            'logEnabled' => Values::array_get($payload, 'log_enabled'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['chatServiceSid' => $chatServiceSid, ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return NotificationContext Context for this NotificationInstance
     */
    protected function proxy(): NotificationContext {
        if (!$this->context) {
            $this->context = new NotificationContext($this->version, $this->solution['chatServiceSid']);
        }

        return $this->context;
    }

    /**
     * Update the NotificationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return NotificationInstance Updated NotificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): NotificationInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Fetch the NotificationInstance
     *
     * @return NotificationInstance Fetched NotificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): NotificationInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Conversations.V1.NotificationInstance ' . \implode(' ', $context) . ']';
    }
}