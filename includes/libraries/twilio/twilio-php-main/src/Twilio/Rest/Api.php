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
use Twilio\Rest\Api\V2010;

/**
 * @property \Twilio\Rest\Api\V2010 $v2010
 * @property \Twilio\Rest\Api\V2010\AccountList $accounts
 * @property \Twilio\Rest\Api\V2010\AccountContext $account
 * @property \Twilio\Rest\Api\V2010\Account\AddressList $addresses
 * @property \Twilio\Rest\Api\V2010\Account\ApplicationList $applications
 * @property \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList $authorizedConnectApps
 * @property \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList $availablePhoneNumbers
 * @property \Twilio\Rest\Api\V2010\Account\BalanceList $balance
 * @property \Twilio\Rest\Api\V2010\Account\CallList $calls
 * @property \Twilio\Rest\Api\V2010\Account\ConferenceList $conferences
 * @property \Twilio\Rest\Api\V2010\Account\ConnectAppList $connectApps
 * @property \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList $incomingPhoneNumbers
 * @property \Twilio\Rest\Api\V2010\Account\KeyList $keys
 * @property \Twilio\Rest\Api\V2010\Account\MessageList $messages
 * @property \Twilio\Rest\Api\V2010\Account\NewKeyList $newKeys
 * @property \Twilio\Rest\Api\V2010\Account\NewSigningKeyList $newSigningKeys
 * @property \Twilio\Rest\Api\V2010\Account\NotificationList $notifications
 * @property \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList $outgoingCallerIds
 * @property \Twilio\Rest\Api\V2010\Account\QueueList $queues
 * @property \Twilio\Rest\Api\V2010\Account\RecordingList $recordings
 * @property \Twilio\Rest\Api\V2010\Account\SigningKeyList $signingKeys
 * @property \Twilio\Rest\Api\V2010\Account\SipList $sip
 * @property \Twilio\Rest\Api\V2010\Account\ShortCodeList $shortCodes
 * @property \Twilio\Rest\Api\V2010\Account\TokenList $tokens
 * @property \Twilio\Rest\Api\V2010\Account\TranscriptionList $transcriptions
 * @property \Twilio\Rest\Api\V2010\Account\UsageList $usage
 * @property \Twilio\Rest\Api\V2010\Account\ValidationRequestList $validationRequests
 * @method \Twilio\Rest\Api\V2010\Account\AddressContext addresses(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ApplicationContext applications(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppContext authorizedConnectApps(string $connectAppSid)
 * @method \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryContext availablePhoneNumbers(string $countryCode)
 * @method \Twilio\Rest\Api\V2010\Account\CallContext calls(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ConferenceContext conferences(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ConnectAppContext connectApps(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext incomingPhoneNumbers(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\KeyContext keys(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\MessageContext messages(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\NotificationContext notifications(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdContext outgoingCallerIds(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\QueueContext queues(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\RecordingContext recordings(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\SigningKeyContext signingKeys(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ShortCodeContext shortCodes(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\TranscriptionContext transcriptions(string $sid)
 * @method \Twilio\Rest\Api\V2010\AccountContext accounts(string $sid)
 */
class Api extends Domain {
    protected $_v2010;

    /**
     * Construct the Api Domain
     *
     * @param Client $client Client to communicate with Twilio
     */
    public function __construct(Client $client) {
        parent::__construct($client);

        $this->baseUrl = 'https://api.twilio.com';
    }

    /**
     * @return V2010 Version v2010 of api
     */
    protected function getV2010(): V2010 {
        if (!$this->_v2010) {
            $this->_v2010 = new V2010($this);
        }
        return $this->_v2010;
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

    /**
     * @return \Twilio\Rest\Api\V2010\AccountContext Account provided as the
     *                                               authenticating account
     */
    protected function getAccount(): \Twilio\Rest\Api\V2010\AccountContext {
        return $this->v2010->account;
    }

    protected function getAccounts(): \Twilio\Rest\Api\V2010\AccountList {
        return $this->v2010->accounts;
    }

    /**
     * @param string $sid Fetch by unique Account Sid
     */
    protected function contextAccounts(string $sid): \Twilio\Rest\Api\V2010\AccountContext {
        return $this->v2010->accounts($sid);
    }

    protected function getAddresses(): \Twilio\Rest\Api\V2010\Account\AddressList {
        return $this->v2010->account->addresses;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextAddresses(string $sid): \Twilio\Rest\Api\V2010\Account\AddressContext {
        return $this->v2010->account->addresses($sid);
    }

    protected function getApplications(): \Twilio\Rest\Api\V2010\Account\ApplicationList {
        return $this->v2010->account->applications;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextApplications(string $sid): \Twilio\Rest\Api\V2010\Account\ApplicationContext {
        return $this->v2010->account->applications($sid);
    }

    protected function getAuthorizedConnectApps(): \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList {
        return $this->v2010->account->authorizedConnectApps;
    }

    /**
     * @param string $connectAppSid The SID of the Connect App to fetch
     */
    protected function contextAuthorizedConnectApps(string $connectAppSid): \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppContext {
        return $this->v2010->account->authorizedConnectApps($connectAppSid);
    }

    protected function getAvailablePhoneNumbers(): \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList {
        return $this->v2010->account->availablePhoneNumbers;
    }

    /**
     * @param string $countryCode The ISO country code of the country to fetch
     *                            available phone number information about
     */
    protected function contextAvailablePhoneNumbers(string $countryCode): \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryContext {
        return $this->v2010->account->availablePhoneNumbers($countryCode);
    }

    protected function getBalance(): \Twilio\Rest\Api\V2010\Account\BalanceList {
        return $this->v2010->account->balance;
    }

    protected function getCalls(): \Twilio\Rest\Api\V2010\Account\CallList {
        return $this->v2010->account->calls;
    }

    /**
     * @param string $sid The SID of the Call resource to fetch
     */
    protected function contextCalls(string $sid): \Twilio\Rest\Api\V2010\Account\CallContext {
        return $this->v2010->account->calls($sid);
    }

    protected function getConferences(): \Twilio\Rest\Api\V2010\Account\ConferenceList {
        return $this->v2010->account->conferences;
    }

    /**
     * @param string $sid The unique string that identifies this resource
     */
    protected function contextConferences(string $sid): \Twilio\Rest\Api\V2010\Account\ConferenceContext {
        return $this->v2010->account->conferences($sid);
    }

    protected function getConnectApps(): \Twilio\Rest\Api\V2010\Account\ConnectAppList {
        return $this->v2010->account->connectApps;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextConnectApps(string $sid): \Twilio\Rest\Api\V2010\Account\ConnectAppContext {
        return $this->v2010->account->connectApps($sid);
    }

    protected function getIncomingPhoneNumbers(): \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList {
        return $this->v2010->account->incomingPhoneNumbers;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextIncomingPhoneNumbers(string $sid): \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext {
        return $this->v2010->account->incomingPhoneNumbers($sid);
    }

    protected function getKeys(): \Twilio\Rest\Api\V2010\Account\KeyList {
        return $this->v2010->account->keys;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextKeys(string $sid): \Twilio\Rest\Api\V2010\Account\KeyContext {
        return $this->v2010->account->keys($sid);
    }

    protected function getMessages(): \Twilio\Rest\Api\V2010\Account\MessageList {
        return $this->v2010->account->messages;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextMessages(string $sid): \Twilio\Rest\Api\V2010\Account\MessageContext {
        return $this->v2010->account->messages($sid);
    }

    protected function getNewKeys(): \Twilio\Rest\Api\V2010\Account\NewKeyList {
        return $this->v2010->account->newKeys;
    }

    protected function getNewSigningKeys(): \Twilio\Rest\Api\V2010\Account\NewSigningKeyList {
        return $this->v2010->account->newSigningKeys;
    }

    protected function getNotifications(): \Twilio\Rest\Api\V2010\Account\NotificationList {
        return $this->v2010->account->notifications;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextNotifications(string $sid): \Twilio\Rest\Api\V2010\Account\NotificationContext {
        return $this->v2010->account->notifications($sid);
    }

    protected function getOutgoingCallerIds(): \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList {
        return $this->v2010->account->outgoingCallerIds;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextOutgoingCallerIds(string $sid): \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdContext {
        return $this->v2010->account->outgoingCallerIds($sid);
    }

    protected function getQueues(): \Twilio\Rest\Api\V2010\Account\QueueList {
        return $this->v2010->account->queues;
    }

    /**
     * @param string $sid The unique string that identifies this resource
     */
    protected function contextQueues(string $sid): \Twilio\Rest\Api\V2010\Account\QueueContext {
        return $this->v2010->account->queues($sid);
    }

    protected function getRecordings(): \Twilio\Rest\Api\V2010\Account\RecordingList {
        return $this->v2010->account->recordings;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextRecordings(string $sid): \Twilio\Rest\Api\V2010\Account\RecordingContext {
        return $this->v2010->account->recordings($sid);
    }

    protected function getSigningKeys(): \Twilio\Rest\Api\V2010\Account\SigningKeyList {
        return $this->v2010->account->signingKeys;
    }

    /**
     * @param string $sid The sid
     */
    protected function contextSigningKeys(string $sid): \Twilio\Rest\Api\V2010\Account\SigningKeyContext {
        return $this->v2010->account->signingKeys($sid);
    }

    protected function getSip(): \Twilio\Rest\Api\V2010\Account\SipList {
        return $this->v2010->account->sip;
    }

    protected function getShortCodes(): \Twilio\Rest\Api\V2010\Account\ShortCodeList {
        return $this->v2010->account->shortCodes;
    }

    /**
     * @param string $sid The unique string that identifies this resource
     */
    protected function contextShortCodes(string $sid): \Twilio\Rest\Api\V2010\Account\ShortCodeContext {
        return $this->v2010->account->shortCodes($sid);
    }

    protected function getTokens(): \Twilio\Rest\Api\V2010\Account\TokenList {
        return $this->v2010->account->tokens;
    }

    protected function getTranscriptions(): \Twilio\Rest\Api\V2010\Account\TranscriptionList {
        return $this->v2010->account->transcriptions;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextTranscriptions(string $sid): \Twilio\Rest\Api\V2010\Account\TranscriptionContext {
        return $this->v2010->account->transcriptions($sid);
    }

    protected function getUsage(): \Twilio\Rest\Api\V2010\Account\UsageList {
        return $this->v2010->account->usage;
    }

    protected function getValidationRequests(): \Twilio\Rest\Api\V2010\Account\ValidationRequestList {
        return $this->v2010->account->validationRequests;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Api]';
    }
}