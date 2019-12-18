<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Wireless\V1;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class RatePlanTest extends HolodeckTestCase {
    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->wireless->v1->ratePlans->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://wireless.twilio.com/v1/RatePlans'
        ));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://wireless.twilio.com/v1/RatePlans?PageSize=50&Page=0",
                    "key": "rate_plans",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://wireless.twilio.com/v1/RatePlans?PageSize=50&Page=0"
                },
                "rate_plans": []
            }
            '
        ));

        $actual = $this->twilio->wireless->v1->ratePlans->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://wireless.twilio.com/v1/RatePlans?PageSize=50&Page=0",
                    "key": "rate_plans",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://wireless.twilio.com/v1/RatePlans?PageSize=50&Page=0"
                },
                "rate_plans": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "unique_name": "unique_name",
                        "data_enabled": true,
                        "data_limit": 1000,
                        "data_metering": "payg",
                        "date_created": "2019-07-30T20:00:00Z",
                        "date_updated": "2019-07-30T20:00:00Z",
                        "friendly_name": "friendly_name",
                        "messaging_enabled": true,
                        "voice_enabled": true,
                        "national_roaming_enabled": true,
                        "national_roaming_data_limit": 1000,
                        "international_roaming": [
                            "data",
                            "messaging",
                            "voice"
                        ],
                        "international_roaming_data_limit": 1000,
                        "sid": "WPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "usage_notification_method": "POST",
                        "usage_notification_url": "https://callback.com",
                        "data_limit_strategy": "block",
                        "url": "https://wireless.twilio.com/v1/RatePlans/WPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->wireless->v1->ratePlans->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->wireless->v1->ratePlans("WPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://wireless.twilio.com/v1/RatePlans/WPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "unique_name": "unique_name",
                "data_enabled": true,
                "data_limit": 1000,
                "data_metering": "payg",
                "date_created": "2019-07-30T20:00:00Z",
                "date_updated": "2019-07-30T20:00:00Z",
                "friendly_name": "friendly_name",
                "messaging_enabled": true,
                "voice_enabled": true,
                "national_roaming_enabled": true,
                "national_roaming_data_limit": 1000,
                "international_roaming": [
                    "data",
                    "messaging",
                    "voice"
                ],
                "international_roaming_data_limit": 1000,
                "sid": "WPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "usage_notification_method": "POST",
                "usage_notification_url": "https://callback.com",
                "data_limit_strategy": "block",
                "url": "https://wireless.twilio.com/v1/RatePlans/WPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->wireless->v1->ratePlans("WPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->wireless->v1->ratePlans->create();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://wireless.twilio.com/v1/RatePlans'
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "unique_name": "unique_name",
                "data_enabled": true,
                "data_limit": 1000,
                "data_limit_strategy": "block",
                "data_metering": "payg",
                "date_created": "2019-07-30T20:00:00Z",
                "date_updated": "2019-07-30T20:00:00Z",
                "friendly_name": "friendly_name",
                "messaging_enabled": true,
                "voice_enabled": true,
                "national_roaming_enabled": true,
                "national_roaming_data_limit": 1000,
                "international_roaming": [
                    "data",
                    "messaging",
                    "voice"
                ],
                "international_roaming_data_limit": 1000,
                "sid": "WPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "usage_notification_method": "POST",
                "usage_notification_url": "https://callback.com",
                "url": "https://wireless.twilio.com/v1/RatePlans/WPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->wireless->v1->ratePlans->create();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->wireless->v1->ratePlans("WPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://wireless.twilio.com/v1/RatePlans/WPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "unique_name": "unique_name",
                "data_enabled": true,
                "data_limit": 1000,
                "data_metering": "payg",
                "date_created": "2019-07-30T20:00:00Z",
                "date_updated": "2019-07-30T20:00:00Z",
                "friendly_name": "friendly_name",
                "messaging_enabled": true,
                "voice_enabled": true,
                "national_roaming_enabled": true,
                "national_roaming_data_limit": 1000,
                "international_roaming": [
                    "data",
                    "messaging",
                    "voice"
                ],
                "international_roaming_data_limit": 1000,
                "sid": "WPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "usage_notification_method": "POST",
                "usage_notification_url": "https://callback.com",
                "data_limit_strategy": "block",
                "url": "https://wireless.twilio.com/v1/RatePlans/WPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->wireless->v1->ratePlans("WPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->wireless->v1->ratePlans("WPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://wireless.twilio.com/v1/RatePlans/WPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->wireless->v1->ratePlans("WPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }
}