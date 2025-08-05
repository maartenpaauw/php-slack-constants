<?php

declare(strict_types=1);

use Maartenpaauw\Slack\Constants\Scopes;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(className: Scopes::class)]
final class ScopesTest extends TestCase
{
    #[Test]
    public function it_should_know_context_based_on_attributes(): void
    {
        self::assertFalse(Scopes::Admin->supportsApplicationLevelTokens());
        self::assertFalse(Scopes::Admin->supportsBotTokens());
        self::assertFalse(Scopes::Admin->supportsConfigurationTokens());
        self::assertTrue(Scopes::Admin->supportsUserTokens());

        self::assertFalse(Scopes::AppConfigurationsRead->supportsApplicationLevelTokens());
        self::assertTrue(Scopes::AppConfigurationsRead->supportsBotTokens());
        self::assertTrue(Scopes::AppConfigurationsRead->supportsConfigurationTokens());
        self::assertTrue(Scopes::AppConfigurationsRead->supportsUserTokens());

        self::assertFalse(Scopes::AppMentionsRead->supportsApplicationLevelTokens());
        self::assertTrue(Scopes::AppMentionsRead->supportsBotTokens());
        self::assertFalse(Scopes::AppMentionsRead->supportsConfigurationTokens());
        self::assertFalse(Scopes::AppMentionsRead->supportsUserTokens());

        self::assertTrue(Scopes::AuthorizationsRead->supportsApplicationLevelTokens());
        self::assertFalse(Scopes::AuthorizationsRead->supportsBotTokens());
        self::assertFalse(Scopes::AuthorizationsRead->supportsConfigurationTokens());
        self::assertFalse(Scopes::AuthorizationsRead->supportsUserTokens());

        self::assertFalse(Scopes::BookmarksRead->supportsApplicationLevelTokens());
        self::assertTrue(Scopes::BookmarksRead->supportsBotTokens());
        self::assertFalse(Scopes::BookmarksRead->supportsConfigurationTokens());
        self::assertTrue(Scopes::BookmarksRead->supportsUserTokens());
    }

    #[Test]
    public function it_lists_all_application_level_token_scopes(): void
    {
        foreach (Scopes::applicationLevelTokenScopes() as $scope) {
            self::assertTrue(condition: $scope->supportsApplicationLevelTokens());
        }
    }

    #[Test]
    public function it_lists_all_bot_token_scopes(): void
    {
        foreach (Scopes::botTokenScopes() as $scope) {
            self::assertTrue(condition: $scope->supportsBotTokens());
        }
    }

    #[Test]
    public function it_lists_all_configuration_token_scopes(): void
    {
        foreach (Scopes::configurationTokenScopes() as $scope) {
            self::assertTrue(condition: $scope->supportsConfigurationTokens());
        }
    }

    #[Test]
    public function it_lists_all_user_token_scopes(): void
    {
        foreach (Scopes::userTokenScopes() as $scope) {
            self::assertTrue(condition: $scope->supportsUserTokens());
        }
    }
}
