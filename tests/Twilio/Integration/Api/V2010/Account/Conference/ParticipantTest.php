<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Api\V2010\Account\Conference;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class ParticipantTest extends HolodeckTestCase {
    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants/CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.json'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": null,
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": false,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": true,
                "call_sid_to_coach": "CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb",
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testFetchByLabelResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": "customer",
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": false,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": true,
                "call_sid_to_coach": "CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb",
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants/CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.json'
        ));
    }

    public function testMuteParticipantResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": null,
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": true,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": false,
                "call_sid_to_coach": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testMuteParticipantByLabelResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": "customer",
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": true,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": false,
                "call_sid_to_coach": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testModifyParticipantResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": null,
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": false,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": true,
                "call_sid_to_coach": "CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb",
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testModifyParticipantByLabelResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": "customer",
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": false,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": true,
                "call_sid_to_coach": "CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb",
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->participants->create("+15017122661", "+15558675310");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['From' => "+15017122661", 'To' => "+15558675310", ];

        $this->assertRequest(new Request(
            'post',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants.json',
            null,
            $values
        ));
    }

    public function testCreateWithSidResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": "customer",
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": false,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": false,
                "call_sid_to_coach": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants->create("+15017122661", "+15558675310");

        $this->assertNotNull($actual);
    }

    public function testCreateWithFriendlyNameResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": "customer",
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": false,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": false,
                "call_sid_to_coach": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants->create("+15017122661", "+15558675310");

        $this->assertNotNull($actual);
    }

    public function testCreateWithSidAsCoachResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": null,
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": false,
                "hold": false,
                "status": "queued",
                "start_conference_on_enter": true,
                "coaching": false,
                "call_sid_to_coach": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants->create("+15017122661", "+15558675310");

        $this->assertNotNull($actual);
    }

    public function testCreateWithNonE164NumberResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": null,
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": false,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": false,
                "call_sid_to_coach": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants->create("+15017122661", "+15558675310");

        $this->assertNotNull($actual);
    }

    public function testCreateWithFriendlyNameByocResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": null,
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                "end_conference_on_exit": false,
                "muted": false,
                "hold": false,
                "status": "complete",
                "start_conference_on_enter": true,
                "coaching": false,
                "call_sid_to_coach": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants->create("+15017122661", "+15558675310");

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants/CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.json'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testDeleteByLabelResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->participants->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants.json'
        ));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "participants": [],
                "first_page_uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants.json?Hold=True&PageSize=50&Page=0",
                "next_page_uri": null,
                "previous_page_uri": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants.json?Hold=True&PageSize=50&Page=0",
                "page": 0,
                "page_size": 50,
                "end": 0,
                "start": 0
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "participants": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "label": null,
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "Sat, 19 Feb 2011 21:07:19 +0000",
                        "date_updated": "Sat, 19 Feb 2011 21:07:19 +0000",
                        "end_conference_on_exit": false,
                        "muted": true,
                        "hold": false,
                        "status": "connected",
                        "start_conference_on_enter": true,
                        "coaching": true,
                        "call_sid_to_coach": "CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb",
                        "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
                    },
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb",
                        "label": null,
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                        "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                        "end_conference_on_exit": false,
                        "muted": true,
                        "hold": false,
                        "status": "connected",
                        "start_conference_on_enter": true,
                        "coaching": false,
                        "call_sid_to_coach": null,
                        "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb.json"
                    }
                ],
                "first_page_uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants.json?Muted=true&PageSize=2&Page=0",
                "next_page_uri": null,
                "previous_page_uri": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants.json?Muted=true&PageSize=2&Page=0",
                "page": 0,
                "page_size": 2,
                "start": 0,
                "end": 1
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testReadNextResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "participants": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAcccccccccccccccccccccccccccccccc",
                        "label": null,
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "Thu, 17 Feb 2011 21:07:19 +0000",
                        "date_updated": "Thu, 17 Feb 2011 21:07:19 +0000",
                        "end_conference_on_exit": false,
                        "muted": true,
                        "hold": false,
                        "status": "connected",
                        "start_conference_on_enter": true,
                        "coaching": false,
                        "call_sid_to_coach": null,
                        "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAcccccccccccccccccccccccccccccccc.json"
                    },
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAdddddddddddddddddddddddddddddddd",
                        "label": null,
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "Wed, 16 Feb 2011 21:07:19 +0000",
                        "date_updated": "Wed, 16 Feb 2011 21:07:19 +0000",
                        "end_conference_on_exit": false,
                        "muted": true,
                        "hold": false,
                        "status": "connected",
                        "start_conference_on_enter": true,
                        "coaching": false,
                        "call_sid_to_coach": null,
                        "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAdddddddddddddddddddddddddddddddd.json"
                    }
                ],
                "first_page_uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants.json?Muted=true&PageSize=2&Page=0",
                "next_page_uri": null,
                "previous_page_uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants.json?Muted=true&PageSize=2&Page=0&PageToken=PBCPcccccccccccccccccccccccccccccccc",
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants.json?Muted=true&PageSize=2&Page=1&PageToken=PACPbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb",
                "page": 1,
                "page_size": 2,
                "start": 2,
                "end": 3
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants->read();

        $this->assertNotNull($actual);
    }

    public function testReadPreviousResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "participants": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "label": null,
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "Sat, 19 Feb 2011 21:07:19 +0000",
                        "date_updated": "Sat, 19 Feb 2011 21:07:19 +0000",
                        "end_conference_on_exit": false,
                        "muted": true,
                        "hold": false,
                        "status": "connected",
                        "start_conference_on_enter": true,
                        "coaching": true,
                        "call_sid_to_coach": "CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb",
                        "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
                    },
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb",
                        "label": null,
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "Fri, 18 Feb 2011 21:07:19 +0000",
                        "date_updated": "Fri, 18 Feb 2011 21:07:19 +0000",
                        "end_conference_on_exit": false,
                        "muted": true,
                        "hold": false,
                        "status": "connected",
                        "start_conference_on_enter": true,
                        "coaching": false,
                        "call_sid_to_coach": null,
                        "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CAbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb.json"
                    }
                ],
                "first_page_uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants.json?Muted=true&PageSize=2&Page=0",
                "next_page_uri": null,
                "previous_page_uri": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants.json?Muted=true&PageSize=2&Page=0&PageToken=PBCPcccccccccccccccccccccccccccccccc",
                "page": 0,
                "page_size": 2,
                "start": 0,
                "end": 1
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->participants->read();

        $this->assertNotNull($actual);
    }
}