<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Bulkexports\V1;

/**
 * @property \Twilio\Rest\Bulkexports\V1 $v1
 * @property \Twilio\Rest\Bulkexports\V1\ExportList $exports
 * @property \Twilio\Rest\Bulkexports\V1\ExportConfigurationList $exportConfiguration
 * @method \Twilio\Rest\Bulkexports\V1\ExportContext exports(string $resourceType)
 * @method \Twilio\Rest\Bulkexports\V1\ExportConfigurationContext exportConfiguration(string $resourceType)
 */
class Bulkexports extends Domain {
    protected $_v1;

    /**
     * Construct the Bulkexports Domain
     *
     * @param Client $client Client to communicate with Twilio
     */
    public function __construct(Client $client) {
        parent::__construct($client);

        $this->baseUrl = 'https://bulkexports.twilio.com';
    }

    /**
     * @return V1 Version v1 of bulkexports
     */
    protected function getV1(): V1 {
        if (!$this->_v1) {
            $this->_v1 = new V1($this);
        }
        return $this->_v1;
    }

    /**
     * Magic getter to lazy load version
     *
     * @param string $name Version to return
     * @return \Twilio\Version The requested version
     * @throws TwilioException For unknown versions
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown version ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments) {
        $method = 'context' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return \call_user_func_array([$this, $method], $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    protected function getExports(): \Twilio\Rest\Bulkexports\V1\ExportList {
        return $this->v1->exports;
    }

    /**
     * @param string $resourceType The type of communication – Messages, Calls
     */
    protected function contextExports(string $resourceType): \Twilio\Rest\Bulkexports\V1\ExportContext {
        return $this->v1->exports($resourceType);
    }

    protected function getExportConfiguration(): \Twilio\Rest\Bulkexports\V1\ExportConfigurationList {
        return $this->v1->exportConfiguration;
    }

    /**
     * @param string $resourceType The type of communication – Messages, Calls
     */
    protected function contextExportConfiguration(string $resourceType): \Twilio\Rest\Bulkexports\V1\ExportConfigurationContext {
        return $this->v1->exportConfiguration($resourceType);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Bulkexports]';
    }
}