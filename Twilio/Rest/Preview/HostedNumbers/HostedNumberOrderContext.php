<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\HostedNumbers;

use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class HostedNumberOrderContext extends InstanceContext {
    /**
     * Initialize the HostedNumberOrderContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $sid HostedNumberOrder sid.
     * @return \Twilio\Rest\Preview\HostedNumbers\HostedNumberOrderContext 
     */
    public function __construct(Version $version, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array(
            'sid' => $sid,
        );

        $this->uri = '/HostedNumberOrders/' . rawurlencode($sid) . '';
    }

    /**
     * Fetch a HostedNumberOrderInstance
     * 
     * @return HostedNumberOrderInstance Fetched HostedNumberOrderInstance
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new HostedNumberOrderInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }

    /**
     * Deletes the HostedNumberOrderInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Update the HostedNumberOrderInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return HostedNumberOrderInstance Updated HostedNumberOrderInstance
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'FriendlyName' => $options['friendlyName'],
            'UniqueName' => $options['uniqueName'],
            'Email' => $options['email'],
            'CcEmails' => $options['ccEmails'],
            'Status' => $options['status'],
            'VerificationCode' => $options['verificationCode'],
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new HostedNumberOrderInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.HostedNumbers.HostedNumberOrderContext ' . implode(' ', $context) . ']';
    }
}