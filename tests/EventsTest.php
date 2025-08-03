<?php

declare(strict_types=1);

namespace Maartenpaauw\Slack\Constants\Tests;

use Maartenpaauw\Slack\Constants\Events;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(className: Events::class)]
final class EventsTest extends TestCase
{
    #[Test]
    public function it_should_know_context_based_on_attributes(): void
    {
        self::assertTrue(condition: Events::AppMention->supportsEventsApi());
        self::assertFalse(condition: Events::AppMention->supportsRtmApi());

        self::assertFalse(condition: Events::BotAdded->supportsEventsApi());
        self::assertTrue(condition: Events::BotAdded->supportsRtmApi());

        self::assertTrue(condition: Events::ChannelArchive->supportsEventsApi());
        self::assertTrue(condition: Events::ChannelArchive->supportsRtmApi());
    }

    #[Test]
    public function it_lists_all_api_cases(): void
    {
        foreach (Events::api() as $event) {
            self::assertTrue(condition: $event->supportsEventsApi());
        }
    }

    #[Test]
    public function it_lists_all_rtm_cases(): void
    {
        foreach (Events::rtm() as $event) {
            self::assertTrue(condition: $event->supportsRtmApi());
        }
    }
}
