<?php

declare(strict_types=1);

namespace Maartenpaauw\Slack\Constants\Tests;

use Maartenpaauw\Slack\Constants\Interactions;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(className: Interactions::class)]
final class InteractionsTest extends TestCase
{
    #[Test]
    public function it_has_a_value_for_every_interaction_payload_type(): void
    {
        self::assertSame(expected: 'block_actions', actual: Interactions::BlockActions->value);
        self::assertSame(expected: 'block_suggestion', actual: Interactions::BlockSuggestion->value);
        self::assertSame(expected: 'dialog_cancellation', actual: Interactions::DialogCancellation->value);
        self::assertSame(expected: 'dialog_submission', actual: Interactions::DialogSubmission->value);
        self::assertSame(expected: 'dialog_suggestion', actual: Interactions::DialogSuggestion->value);
        self::assertSame(expected: 'interactive_message', actual: Interactions::InteractiveMessage->value);
        self::assertSame(expected: 'message_action', actual: Interactions::MessageAction->value);
        self::assertSame(expected: 'shortcut', actual: Interactions::Shortcut->value);
        self::assertSame(expected: 'view_closed', actual: Interactions::ViewClosed->value);
        self::assertSame(expected: 'view_submission', actual: Interactions::ViewSubmission->value);
    }
}
