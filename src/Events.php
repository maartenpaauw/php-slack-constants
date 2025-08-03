<?php

declare(strict_types=1);

namespace Maartenpaauw\Slack\Constants;

use Deprecated;
use ReflectionAttribute;
use ReflectionEnumBackedCase;

enum Events: string
{
    /**
     * Subscribe to only the message events that mention your app or bot
     *
     * @see https://api.slack.com/events/app_mention
     */
    #[API]
    case AppMention = 'app_mention';

    /**
     * Indicates your app's event subscriptions are being rate limited
     *
     * @see https://api.slack.com/events/app_rate_limited
     */
    #[API]
    case AppRateLimited = 'app_rate_limited';

    /**
     * User requested an app
     *
     * @see https://api.slack.com/events/app_requested
     */
    #[API]
    case AppRequested = 'app_requested';

    /**
     * Your Slack app was uninstalled
     *
     * @see https://api.slack.com/events/app_uninstalled
     */
    #[API]
    case AppUninstalled = 'app_uninstalled';

    /**
     * User has uninstalled an app
     *
     * @see https://api.slack.com/events/app_uninstalled_team
     */
    #[API]
    case AppUninstalledTeam = 'app_uninstalled_team';

    /**
     * The context changed while an AI assistant thread was visible
     *
     * @see https://api.slack.com/events/assistant_thread_context_changed
     */
    #[API]
    case AssistantThreadContextChanged = 'assistant_thread_context_changed';

    /**
     * An AI assistant thread was started
     *
     * @see https://api.slack.com/events/assistant_thread_started
     */
    #[API]
    case AssistantThreadStarted = 'assistant_thread_started';

    /**
     * A bot user was added
     *
     * @see https://api.slack.com/events/bot_added
     */
    #[RTM]
    case BotAdded = 'bot_added';

    /**
     * A bot user was changed
     *
     * @see https://api.slack.com/events/bot_changed
     */
    #[RTM]
    case BotChanged = 'bot_changed';

    /**
     * A Call was rejected
     *
     * @see https://api.slack.com/events/call_rejected
     */
    #[API]
    case CallRejected = 'call_rejected';

    /**
     * A channel was archived
     *
     * @see https://api.slack.com/events/channel_archive
     */
    #[API] #[RTM]
    case ChannelArchive = 'channel_archive';

    /**
     * A channel was created
     *
     * @see https://api.slack.com/events/channel_created
     */
    #[API] #[RTM]
    case ChannelCreated = 'channel_created';

    /**
     * A channel was deleted
     *
     * @see https://api.slack.com/events/channel_deleted
     */
    #[API] #[RTM]
    case ChannelDeleted = 'channel_deleted';

    /**
     * Bulk updates were made to a channel's history
     *
     * @see https://api.slack.com/events/channel_history_changed
     */
    #[API] #[RTM]
    case ChannelHistoryChanged = 'channel_history_changed';

    /**
     * A channel ID changed
     *
     * @see https://api.slack.com/events/channel_id_changed
     */
    #[API]
    case ChannelIdChanged = 'channel_id_changed';

    /**
     * You joined a channel
     *
     * @see https://api.slack.com/events/channel_joined
     */
    #[RTM]
    case ChannelJoined = 'channel_joined';

    /**
     * A channel has been shared with an external workspace
     *
     * @see https://api.slack.com/events/channel_shared
     */
    #[API]
    case ChannelShared = 'channel_shared';

    /**
     * A custom emoji has been added or changed
     *
     * @see https://api.slack.com/events/emoji_changed
     */
    #[API] #[RTM]
    case EmojiChanged = 'emoji_changed';

    /**
     * An enterprise grid migration has finished on an external workspace
     *
     * @see https://api.slack.com/events/external_org_migration_finished
     */
    #[RTM]
    case ExternalOrgMigrationFinished = 'external_org_migration_finished';

    /**
     * An enterprise grid migration has started on an external workspace
     *
     * @see https://api.slack.com/events/external_org_migration_started
     */
    #[RTM]
    case ExternalOrgMigrationStarted = 'external_org_migration_started';

    /**
     * You manually updated your presence
     *
     * @see https://api.slack.com/events/manual_presence_change
     */
    #[RTM]
    case ManualPresenceChange = 'manual_presence_change';

    /**
     * A user joined a public channel, private channel or MPDM
     *
     * @see https://api.slack.com/events/member_joined_channel
     */
    #[API] #[RTM]
    case MemberJoinedChannel = 'member_joined_channel';

    /**
     * A message was sent to a channel
     *
     * @see https://api.slack.com/events/message
     */
    #[API] #[RTM]
    case Message = 'message';

    /**
     * A message was posted to a channel
     *
     * @see https://api.slack.com/events/message.channels
     */
    #[API]
    case MessageChannels = 'message.channels';

    /**
     * A message was posted to a private channel
     *
     * @see https://api.slack.com/events/message.groups
     */
    #[API]
    case MessageGroups = 'message.groups';

    /**
     * A message was posted to a direct message conversation
     *
     * @see https://api.slack.com/events/message.im
     */
    #[API]
    case MessageIm = 'message.im';

    /**
     * A message was posted to a multiparty direct message
     *
     * @see https://api.slack.com/events/message.mpim
     */
    #[API]
    case MessageMpim = 'message.mpim';

    /**
     * Message metadata was deleted
     *
     * @see https://api.slack.com/events/message_metadata_deleted
     */
    #[API]
    case MessageMetadataDeleted = 'message_metadata_deleted';

    /**
     * A pin was added to a channel
     *
     * @see https://api.slack.com/events/pin_added
     */
    #[API] #[RTM]
    case PinAdded = 'pin_added';

    /**
     * A member's presence changed
     *
     * @see https://api.slack.com/events/presence_change
     */
    #[RTM]
    case PresenceChange = 'presence_change';

    /**
     * Subscribe to presence events for the specified users
     *
     * @see https://api.slack.com/events/presence_sub
     */
    #[RTM]
    case PresenceSub = 'presence_sub';

    /**
     * A member has added an emoji reaction to an item
     *
     * @see https://api.slack.com/events/reaction_added
     */
    #[API] #[RTM]
    case ReactionAdded = 'reaction_added';

    /**
     * A member removed an emoji reaction
     *
     * @see https://api.slack.com/events/reaction_removed
     */
    #[API] #[RTM]
    case ReactionRemoved = 'reaction_removed';

    /**
     * Experimental
     *
     * @see https://api.slack.com/events/reconnect_url
     */
    #[RTM] #[Deprecated]
    case ReconnectUrl = 'reconnect_url';

    /**
     * Access to a set of resources was granted for your app
     *
     * @see https://api.slack.com/events/resources_added
     */
    #[API]
    case ResourcesAdded = 'resources_added';

    /**
     * Access to a set of resources was removed for your app
     *
     * @see https://api.slack.com/events/resources_removed
     */
    #[API]
    case ResourcesRemoved = 'resources_removed';

    /**
     * OAuth scopes were denied to your app
     *
     * @see https://api.slack.com/events/scope_denied
     */
    #[API]
    case ScopeDenied = 'scope_denied';

    /**
     * OAuth scopes were granted to your app
     *
     * @see https://api.slack.com/events/scope_granted
     */
    #[API]
    case ScopeGranted = 'scope_granted';

    /**
     * A shared channel invite was accepted
     *
     * @see https://api.slack.com/events/shared_channel_invite_accepted
     */
    #[API]
    case SharedChannelInviteAccepted = 'shared_channel_invite_accepted';

    /**
     * A shared channel invite was approved
     *
     * @see https://api.slack.com/events/shared_channel_invite_approved
     */
    #[API]
    case SharedChannelInviteApproved = 'shared_channel_invite_approved';

    /**
     * A shared channel invite was declined
     *
     * @see https://api.slack.com/events/shared_channel_invite_declined
     */
    #[API]
    case SharedChannelInviteDeclined = 'shared_channel_invite_declined';

    /**
     * A shared channel invite was sent to a Slack user
     *
     * @see https://api.slack.com/events/shared_channel_invite_received
     */
    #[API] #[RTM]
    case SharedChannelInviteReceived = 'shared_channel_invite_received';

    /**
     * A shared channel invite was requested
     *
     * @see https://api.slack.com/events/shared_channel_invite_requested
     */
    #[API]
    case SharedChannelInviteRequested = 'shared_channel_invite_requested';

    /**
     * A member has saved an item for later or starred an item
     *
     * @see https://api.slack.com/events/star_added
     */
    #[API] #[RTM]
    case StarAdded = 'star_added';

    /**
     * A new member has joined
     *
     * @see https://api.slack.com/events/team_join
     */
    #[API] #[RTM]
    case TeamJoin = 'team_join';

    /**
     * A member's data has changed
     *
     * @see https://api.slack.com/events/user_change
     */
    #[API] #[RTM]
    case UserChange = 'user_change';

    /**
     * User resource was denied to your app
     *
     * @see https://api.slack.com/events/user_resource_denied
     */
    #[API]
    case UserResourceDenied = 'user_resource_denied';

    public function supportsEventsApi(): bool
    {
        $reflection = new ReflectionEnumBackedCase(class: self::class, constant: $this->name);
        $attributes = $reflection->getAttributes();

        return array_any(
            $attributes,
            static fn (ReflectionAttribute $attribute): bool => $attribute->newInstance() instanceof API,
        );
    }

    public function supportsRtmApi(): bool
    {
        $reflection = new ReflectionEnumBackedCase(self::class, $this->name);
        $attributes = $reflection->getAttributes();

        return array_any(
            array: $attributes,
            callback: static fn (ReflectionAttribute $attribute): bool => $attribute->newInstance() instanceof RTM,
        );
    }

    public function isDeprecated(): bool
    {
        $reflection = new ReflectionEnumBackedCase(class: self::class, constant: $this->name);
        $attributes = $reflection->getAttributes();

        return array_any(
            array: $attributes,
            callback: static fn (ReflectionAttribute $attribute): bool => $attribute->newInstance() instanceof Deprecated,
        );
    }

    /**
     * @return Events[]
     */
    public static function api(): array
    {
        return array_filter(
            array: self::cases(),
            callback: static fn (Events $event): bool => $event->supportsEventsApi(),
        );
    }

    /**
     * @return Events[]
     */
    public static function rtm(): array
    {
        return array_filter(
            array: self::cases(),
            callback: static fn (Events $event): bool => $event->supportsRtmApi());
    }

    /**
     * @return Events[]
     */
    public static function deprecated(): array
    {
        return array_filter(
            array: self::cases(),
            callback: static fn (Events $event): bool => $event->isDeprecated());
    }
}
