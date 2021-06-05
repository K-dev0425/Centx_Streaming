<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Supersim\V1\NetworkAccessProfile;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class NetworkAccessProfileNetworkContext extends InstanceContext {
    /**
     * Initialize the NetworkAccessProfileNetworkContext
     *
     * @param Version $version Version that contains the resource
     * @param string $networkAccessProfileSid The unique string that identifies the
     *                                        Network Access Profile resource
     * @param string $sid The SID of the resource to fetch
     */
    public function __construct(Version $version, $networkAccessProfileSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['networkAccessProfileSid' => $networkAccessProfileSid, 'sid' => $sid, ];

        $this->uri = '/NetworkAccessProfiles/' . \rawurlencode($networkAccessProfileSid) . '/Networks/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the NetworkAccessProfileNetworkInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the NetworkAccessProfileNetworkInstance
     *
     * @return NetworkAccessProfileNetworkInstance Fetched
     *                                             NetworkAccessProfileNetworkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): NetworkAccessProfileNetworkInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new NetworkAccessProfileNetworkInstance(
            $this->version,
            $payload,
            $this->solution['networkAccessProfileSid'],
            $this->solution['sid']
        );
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
        return '[Twilio.Supersim.V1.NetworkAccessProfileNetworkContext ' . \implode(' ', $context) . ']';
    }
}