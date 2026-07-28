<?php

declare(strict_types=1);

namespace Maartenpaauw\Slack\Constants;

use Deprecated;
use Maartenpaauw\Slack\Constants\Attributes\API;
use Maartenpaauw\Slack\Constants\Attributes\RTM;
use Maartenpaauw\Slack\Constants\Concerns\SupportsAttributes;

enum Events: string
{
    use SupportsAttributes;

    /**
     * The list of accounts a user is signed into has changed
     *
     * @see https://docs.slack.dev/reference/events/accounts_changed
     */
    #[RTM]
    case AccountsChanged = 'accounts_changed';

    /**
     * The context changed while an app was visible
     *
     * @see https://docs.slack.dev/reference/events/app_context_changed
     */
    #[API]
    case AppContextChanged = 'app_context_changed';

    /**
     * User has deleted an app
     *
     * @see https://docs.slack.dev/reference/events/app_deleted
     */
    #[API]
    case AppDeleted = 'app_deleted';

    /**
     * User clicked into your App Home
     *
     * @see https://docs.slack.dev/reference/events/app_home_opened
     */
    #[API]
    case AppHomeOpened = 'app_home_opened';

    /**
     * User has installed an app
     *
     * @see https://docs.slack.dev/reference/events/app_installed
     */
    #[API]
    case AppInstalled = 'app_installed';

    /**
     * Subscribe to only the message events that mention your app or bot
     *
     * @see https://docs.slack.dev/reference/events/app_mention
     */
    #[API]
    case AppMention = 'app_mention';

    /**
     * Indicates your app's event subscriptions are being rate limited
     *
     * @see https://docs.slack.dev/reference/events/app_rate_limited
     */
    #[API]
    case AppRateLimited = 'app_rate_limited';

    /**
     * User requested an app
     *
     * @see https://docs.slack.dev/reference/events/app_requested
     */
    #[API]
    case AppRequested = 'app_requested';

    /**
     * Your Slack app was uninstalled.
     *
     * @see https://docs.slack.dev/reference/events/app_uninstalled
     */
    #[API]
    case AppUninstalled = 'app_uninstalled';

    /**
     * User has uninstalled an app
     *
     * @see https://docs.slack.dev/reference/events/app_uninstalled_team
     */
    #[API]
    case AppUninstalledTeam = 'app_uninstalled_team';

    /**
     * The context changed while an AI assistant thread was visible
     *
     * @see https://docs.slack.dev/reference/events/assistant_thread_context_changed
     */
    #[API]
    case AssistantThreadContextChanged = 'assistant_thread_context_changed';

    /**
     * An AI assistant thread was started
     *
     * @see https://docs.slack.dev/reference/events/assistant_thread_started
     */
    #[API]
    case AssistantThreadStarted = 'assistant_thread_started';

    /**
     * A bot user was added
     *
     * @see https://docs.slack.dev/reference/events/bot_added
     */
    #[RTM]
    case BotAdded = 'bot_added';

    /**
     * A bot user was changed
     *
     * @see https://docs.slack.dev/reference/events/bot_changed
     */
    #[RTM]
    case BotChanged = 'bot_changed';

    /**
     * A Call was rejected
     *
     * @see https://docs.slack.dev/reference/events/call_rejected
     */
    #[API]
    case CallRejected = 'call_rejected';

    /**
     * A channel was archived
     *
     * @see https://docs.slack.dev/reference/events/channel_archive
     */
    #[API] #[RTM]
    case ChannelArchive = 'channel_archive';

    /**
     * A channel was created
     *
     * @see https://docs.slack.dev/reference/events/channel_created
     */
    #[API] #[RTM]
    case ChannelCreated = 'channel_created';

    /**
     * A channel was deleted
     *
     * @see https://docs.slack.dev/reference/events/channel_deleted
     */
    #[API] #[RTM]
    case ChannelDeleted = 'channel_deleted';

    /**
     * Bulk updates were made to a channel's history
     *
     * @see https://docs.slack.dev/reference/events/channel_history_changed
     */
    #[API] #[RTM]
    case ChannelHistoryChanged = 'channel_history_changed';

    /**
     * A channel ID changed
     *
     * @see https://docs.slack.dev/reference/events/channel_id_changed
     */
    #[API]
    case ChannelIdChanged = 'channel_id_changed';

    /**
     * You joined a channel
     *
     * @see https://docs.slack.dev/reference/events/channel_joined
     */
    #[RTM]
    case ChannelJoined = 'channel_joined';

    /**
     * You left a channel
     *
     * @see https://docs.slack.dev/reference/events/channel_left
     */
    #[API] #[RTM]
    case ChannelLeft = 'channel_left';

    /**
     * Your channel read marker was updated
     *
     * @see https://docs.slack.dev/reference/events/channel_marked
     */
    #[RTM]
    case ChannelMarked = 'channel_marked';

    /**
     * A channel was renamed
     *
     * @see https://docs.slack.dev/reference/events/channel_rename
     */
    #[API] #[RTM]
    case ChannelRename = 'channel_rename';

    /**
     * A channel has been shared with an external workspace
     *
     * @see https://docs.slack.dev/reference/events/channel_shared
     */
    #[API]
    case ChannelShared = 'channel_shared';

    /**
     * A channel was unarchived
     *
     * @see https://docs.slack.dev/reference/events/channel_unarchive
     */
    #[API] #[RTM]
    case ChannelUnarchive = 'channel_unarchive';

    /**
     * A channel has been unshared with an external workspace
     *
     * @see https://docs.slack.dev/reference/events/channel_unshared
     */
    #[API]
    case ChannelUnshared = 'channel_unshared';

    /**
     * A slash command has been added or changed
     *
     * @see https://docs.slack.dev/reference/events/commands_changed
     */
    #[RTM]
    case CommandsChanged = 'commands_changed';

    /**
     * Do not Disturb settings changed for the current user
     *
     * @see https://docs.slack.dev/reference/events/dnd_updated
     */
    #[API] #[RTM]
    case DndUpdated = 'dnd_updated';

    /**
     * Do not Disturb settings changed for a member
     *
     * @see https://docs.slack.dev/reference/events/dnd_updated_user
     */
    #[API] #[RTM]
    case DndUpdatedUser = 'dnd_updated_user';

    /**
     * The workspace email domain has changed
     *
     * @see https://docs.slack.dev/reference/events/email_domain_changed
     */
    #[API] #[RTM]
    case EmailDomainChanged = 'email_domain_changed';

    /**
     * A custom emoji has been added or changed
     *
     * @see https://docs.slack.dev/reference/events/emoji_changed
     */
    #[API] #[RTM]
    case EmojiChanged = 'emoji_changed';

    /**
     * User opened the comments tab of a Work Object flexpane, refreshed comments, or requested the next page of comments
     *
     * @see https://docs.slack.dev/reference/events/entity_comments_requested
     */
    #[API]
    case EntityCommentsRequested = 'entity_comments_requested';

    /**
     * User clicked on a Work Object unfurl or refreshed the flexpane
     *
     * @see https://docs.slack.dev/reference/events/entity_details_requested
     */
    #[API]
    case EntityDetailsRequested = 'entity_details_requested';

    /**
     * An enterprise grid migration has finished on an external workspace.
     *
     * @see https://docs.slack.dev/reference/events/external_org_migration_finished
     */
    #[RTM]
    case ExternalOrgMigrationFinished = 'external_org_migration_finished';

    /**
     * An enterprise grid migration has started on an external workspace.
     *
     * @see https://docs.slack.dev/reference/events/external_org_migration_started
     */
    #[RTM]
    case ExternalOrgMigrationStarted = 'external_org_migration_started';

    /**
     * A file was changed
     *
     * @see https://docs.slack.dev/reference/events/file_change
     */
    #[API] #[RTM]
    case FileChange = 'file_change';

    /**
     * A file comment was deleted
     *
     * @see https://docs.slack.dev/reference/events/file_comment_deleted
     */
    #[API] #[RTM]
    case FileCommentDeleted = 'file_comment_deleted';

    /**
     * A file was created
     *
     * @see https://docs.slack.dev/reference/events/file_created
     */
    #[API] #[RTM]
    case FileCreated = 'file_created';

    /**
     * A file was deleted
     *
     * @see https://docs.slack.dev/reference/events/file_deleted
     */
    #[API] #[RTM]
    case FileDeleted = 'file_deleted';

    /**
     * A file was made public
     *
     * @see https://docs.slack.dev/reference/events/file_public
     */
    #[API] #[RTM]
    case FilePublic = 'file_public';

    /**
     * A file was shared
     *
     * @see https://docs.slack.dev/reference/events/file_shared
     */
    #[API] #[RTM]
    case FileShared = 'file_shared';

    /**
     * A file was unshared
     *
     * @see https://docs.slack.dev/reference/events/file_unshared
     */
    #[API] #[RTM]
    case FileUnshared = 'file_unshared';

    /**
     * Your app function is executed as a step in a workflow
     *
     * @see https://docs.slack.dev/reference/events/function_executed
     */
    #[API]
    case FunctionExecuted = 'function_executed';

    /**
     * The server intends to close the connection soon.
     *
     * @see https://docs.slack.dev/reference/events/goodbye
     */
    #[RTM]
    case Goodbye = 'goodbye';

    /**
     * An enterprise grid migration has finished on this workspace.
     *
     * @see https://docs.slack.dev/reference/events/grid_migration_finished
     */
    #[API]
    case GridMigrationFinished = 'grid_migration_finished';

    /**
     * An enterprise grid migration has started on this workspace.
     *
     * @see https://docs.slack.dev/reference/events/grid_migration_started
     */
    #[API]
    case GridMigrationStarted = 'grid_migration_started';

    /**
     * A private channel was archived
     *
     * @see https://docs.slack.dev/reference/events/group_archive
     */
    #[API] #[RTM]
    case GroupArchive = 'group_archive';

    /**
     * You closed a private channel
     *
     * @see https://docs.slack.dev/reference/events/group_close
     */
    #[API] #[RTM]
    case GroupClose = 'group_close';

    /**
     * A private channel was deleted
     *
     * @see https://docs.slack.dev/reference/events/group_deleted
     */
    #[API] #[RTM]
    case GroupDeleted = 'group_deleted';

    /**
     * Bulk updates were made to a private channel's history
     *
     * @see https://docs.slack.dev/reference/events/group_history_changed
     */
    #[API] #[RTM]
    case GroupHistoryChanged = 'group_history_changed';

    /**
     * You joined a private channel
     *
     * @see https://docs.slack.dev/reference/events/group_joined
     */
    #[RTM]
    case GroupJoined = 'group_joined';

    /**
     * You left a private channel
     *
     * @see https://docs.slack.dev/reference/events/group_left
     */
    #[API] #[RTM]
    case GroupLeft = 'group_left';

    /**
     * A private channel read marker was updated
     *
     * @see https://docs.slack.dev/reference/events/group_marked
     */
    #[RTM]
    case GroupMarked = 'group_marked';

    /**
     * You created a group DM
     *
     * @see https://docs.slack.dev/reference/events/group_open
     */
    #[API] #[RTM]
    case GroupOpen = 'group_open';

    /**
     * A private channel was renamed
     *
     * @see https://docs.slack.dev/reference/events/group_rename
     */
    #[API] #[RTM]
    case GroupRename = 'group_rename';

    /**
     * A private channel was unarchived
     *
     * @see https://docs.slack.dev/reference/events/group_unarchive
     */
    #[API] #[RTM]
    case GroupUnarchive = 'group_unarchive';

    /**
     * The client has successfully connected to the server
     *
     * @see https://docs.slack.dev/reference/events/hello
     */
    #[RTM]
    case Hello = 'hello';

    /**
     * You closed a DM
     *
     * @see https://docs.slack.dev/reference/events/im_close
     */
    #[API] #[RTM]
    case ImClose = 'im_close';

    /**
     * A DM was created
     *
     * @see https://docs.slack.dev/reference/events/im_created
     */
    #[API] #[RTM]
    case ImCreated = 'im_created';

    /**
     * Bulk updates were made to a DM's history
     *
     * @see https://docs.slack.dev/reference/events/im_history_changed
     */
    #[API] #[RTM]
    case ImHistoryChanged = 'im_history_changed';

    /**
     * A direct message read marker was updated
     *
     * @see https://docs.slack.dev/reference/events/im_marked
     */
    #[RTM]
    case ImMarked = 'im_marked';

    /**
     * You opened a DM
     *
     * @see https://docs.slack.dev/reference/events/im_open
     */
    #[API] #[RTM]
    case ImOpen = 'im_open';

    /**
     * User requested an invite
     *
     * @see https://docs.slack.dev/reference/events/invite_requested
     */
    #[API]
    case InviteRequested = 'invite_requested';

    /**
     * A message was posted containing one or more links relevant to your application
     *
     * @see https://docs.slack.dev/reference/events/link_shared
     */
    #[API]
    case LinkShared = 'link_shared';

    /**
     * You manually updated your presence
     *
     * @see https://docs.slack.dev/reference/events/manual_presence_change
     */
    #[RTM]
    case ManualPresenceChange = 'manual_presence_change';

    /**
     * A user joined a public channel, private channel or MPDM.
     *
     * @see https://docs.slack.dev/reference/events/member_joined_channel
     */
    #[API] #[RTM]
    case MemberJoinedChannel = 'member_joined_channel';

    /**
     * A user left a public or private channel
     *
     * @see https://docs.slack.dev/reference/events/member_left_channel
     */
    #[API] #[RTM]
    case MemberLeftChannel = 'member_left_channel';

    /**
     * A message was sent to a channel
     *
     * @see https://docs.slack.dev/reference/events/message
     */
    #[API] #[RTM]
    case Message = 'message';

    /**
     * A user sent a message to your Slack app
     *
     * @see https://docs.slack.dev/reference/events/message.app_home
     */
    #[API]
    case MessageAppHome = 'message.app_home';

    /**
     * A message was posted to a channel
     *
     * @see https://docs.slack.dev/reference/events/message.channels
     */
    #[API]
    case MessageChannels = 'message.channels';

    /**
     * A message was posted to a private channel
     *
     * @see https://docs.slack.dev/reference/events/message.groups
     */
    #[API]
    case MessageGroups = 'message.groups';

    /**
     * A message was posted in a direct message channel
     *
     * @see https://docs.slack.dev/reference/events/message.im
     */
    #[API]
    case MessageIm = 'message.im';

    /**
     * A message was posted in a multiparty direct message channel
     *
     * @see https://docs.slack.dev/reference/events/message.mpim
     */
    #[API]
    case MessageMpim = 'message.mpim';

    /**
     * Message metadata was deleted
     *
     * @see https://docs.slack.dev/reference/events/message_metadata_deleted
     */
    #[API]
    case MessageMetadataDeleted = 'message_metadata_deleted';

    /**
     * Message metadata was posted
     *
     * @see https://docs.slack.dev/reference/events/message_metadata_posted
     */
    #[API]
    case MessageMetadataPosted = 'message_metadata_posted';

    /**
     * Message metadata was updated
     *
     * @see https://docs.slack.dev/reference/events/message_metadata_updated
     */
    #[API]
    case MessageMetadataUpdated = 'message_metadata_updated';

    /**
     * A pin was added to a channel
     *
     * @see https://docs.slack.dev/reference/events/pin_added
     */
    #[API] #[RTM]
    case PinAdded = 'pin_added';

    /**
     * A pin was removed from a channel
     *
     * @see https://docs.slack.dev/reference/events/pin_removed
     */
    #[API] #[RTM]
    case PinRemoved = 'pin_removed';

    /**
     * You have updated your preferences
     *
     * @see https://docs.slack.dev/reference/events/pref_change
     */
    #[RTM]
    case PrefChange = 'pref_change';

    /**
     * A member's presence changed
     *
     * @see https://docs.slack.dev/reference/events/presence_change
     */
    #[RTM]
    case PresenceChange = 'presence_change';

    /**
     * Determine the current presence status for a list of users
     *
     * @see https://docs.slack.dev/reference/events/presence_query
     */
    #[RTM]
    case PresenceQuery = 'presence_query';

    /**
     * Subscribe to presence events for the specified users
     *
     * @see https://docs.slack.dev/reference/events/presence_sub
     */
    #[RTM]
    case PresenceSub = 'presence_sub';

    /**
     * A member has added an emoji reaction to an item
     *
     * @see https://docs.slack.dev/reference/events/reaction_added
     */
    #[API] #[RTM]
    case ReactionAdded = 'reaction_added';

    /**
     * A member removed an emoji reaction
     *
     * @see https://docs.slack.dev/reference/events/reaction_removed
     */
    #[API] #[RTM]
    case ReactionRemoved = 'reaction_removed';

    /**
     * Experimental
     *
     * @see https://docs.slack.dev/reference/events/reconnect_url
     */
    #[RTM]
    case ReconnectUrl = 'reconnect_url';

    /**
     * A shared channel invite was accepted
     *
     * @see https://docs.slack.dev/reference/events/shared_channel_invite_accepted
     */
    #[API]
    case SharedChannelInviteAccepted = 'shared_channel_invite_accepted';

    /**
     * A shared channel invite was approved
     *
     * @see https://docs.slack.dev/reference/events/shared_channel_invite_approved
     */
    #[API]
    case SharedChannelInviteApproved = 'shared_channel_invite_approved';

    /**
     * A shared channel invite was declined
     *
     * @see https://docs.slack.dev/reference/events/shared_channel_invite_declined
     */
    #[API]
    case SharedChannelInviteDeclined = 'shared_channel_invite_declined';

    /**
     * A shared channel invite was sent to a Slack user
     *
     * @see https://docs.slack.dev/reference/events/shared_channel_invite_received
     */
    #[API] #[RTM]
    case SharedChannelInviteReceived = 'shared_channel_invite_received';

    /**
     * A shared channel invite was requested
     *
     * @see https://docs.slack.dev/reference/events/shared_channel_invite_requested
     */
    #[API]
    case SharedChannelInviteRequested = 'shared_channel_invite_requested';

    /**
     * A member has saved an item for later or starred an item
     *
     * @see https://docs.slack.dev/reference/events/star_added
     */
    #[API] #[RTM]
    case StarAdded = 'star_added';

    /**
     * A member has removed an item saved for later or starred an item
     *
     * @see https://docs.slack.dev/reference/events/star_removed
     */
    #[API] #[RTM]
    case StarRemoved = 'star_removed';

    /**
     * A User Group has been added to the workspace
     *
     * @see https://docs.slack.dev/reference/events/subteam_created
     */
    #[API] #[RTM]
    case SubteamCreated = 'subteam_created';

    /**
     * The membership of an existing User Group has changed
     *
     * @see https://docs.slack.dev/reference/events/subteam_members_changed
     */
    #[API] #[RTM]
    case SubteamMembersChanged = 'subteam_members_changed';

    /**
     * You have been added to a User Group
     *
     * @see https://docs.slack.dev/reference/events/subteam_self_added
     */
    #[API] #[RTM]
    case SubteamSelfAdded = 'subteam_self_added';

    /**
     * You have been removed from a User Group
     *
     * @see https://docs.slack.dev/reference/events/subteam_self_removed
     */
    #[API] #[RTM]
    case SubteamSelfRemoved = 'subteam_self_removed';

    /**
     * An existing User Group has been updated or its members changed
     *
     * @see https://docs.slack.dev/reference/events/subteam_updated
     */
    #[API] #[RTM]
    case SubteamUpdated = 'subteam_updated';

    /**
     * Access to a set of teams was granted to your org app
     *
     * @see https://docs.slack.dev/reference/events/team_access_granted
     */
    #[API]
    case TeamAccessGranted = 'team_access_granted';

    /**
     * Access to a set of teams was revoked from your org app
     *
     * @see https://docs.slack.dev/reference/events/team_access_revoked
     */
    #[API]
    case TeamAccessRevoked = 'team_access_revoked';

    /**
     * The workspace domain has changed
     *
     * @see https://docs.slack.dev/reference/events/team_domain_change
     */
    #[API] #[RTM]
    case TeamDomainChange = 'team_domain_change';

    /**
     * A new member has joined
     *
     * @see https://docs.slack.dev/reference/events/team_join
     */
    #[API] #[RTM]
    case TeamJoin = 'team_join';

    /**
     * The workspace is being migrated between servers
     *
     * @see https://docs.slack.dev/reference/events/team_migration_started
     */
    #[RTM]
    case TeamMigrationStarted = 'team_migration_started';

    /**
     * The account billing plan has changed
     *
     * @see https://docs.slack.dev/reference/events/team_plan_change
     */
    #[RTM]
    case TeamPlanChange = 'team_plan_change';

    /**
     * A preference has been updated
     *
     * @see https://docs.slack.dev/reference/events/team_pref_change
     */
    #[RTM]
    case TeamPrefChange = 'team_pref_change';

    /**
     * The workspace profile fields have been updated
     *
     * @see https://docs.slack.dev/reference/events/team_profile_change
     */
    #[RTM]
    case TeamProfileChange = 'team_profile_change';

    /**
     * The workspace profile fields have been deleted
     *
     * @see https://docs.slack.dev/reference/events/team_profile_delete
     */
    #[RTM]
    case TeamProfileDelete = 'team_profile_delete';

    /**
     * The workspace profile fields have been reordered
     *
     * @see https://docs.slack.dev/reference/events/team_profile_reorder
     */
    #[RTM]
    case TeamProfileReorder = 'team_profile_reorder';

    /**
     * The workspace name has changed
     *
     * @see https://docs.slack.dev/reference/events/team_rename
     */
    #[API] #[RTM]
    case TeamRename = 'team_rename';

    /**
     * API tokens for your app were revoked.
     *
     * @see https://docs.slack.dev/reference/events/tokens_revoked
     */
    #[API]
    case TokensRevoked = 'tokens_revoked';

    /**
     * Verifies ownership of an Events API Request URL
     *
     * @see https://docs.slack.dev/reference/events/url_verification
     */
    #[API]
    case UrlVerification = 'url_verification';

    /**
     * A member's data has changed
     *
     * @see https://docs.slack.dev/reference/events/user_change
     */
    #[API] #[RTM]
    case UserChange = 'user_change';

    /**
     * A member requested to connect with or disconnect from the app
     *
     * @see https://docs.slack.dev/reference/events/user_connection
     */
    #[API] #[RTM]
    case UserConnection = 'user_connection';

    /**
     * A user's huddle status has changed
     *
     * @see https://docs.slack.dev/reference/events/user_huddle_changed
     */
    #[API] #[RTM]
    case UserHuddleChanged = 'user_huddle_changed';

    /**
     * A user's profile has changed
     *
     * @see https://docs.slack.dev/reference/events/user_profile_changed
     */
    #[API] #[RTM]
    case UserProfileChanged = 'user_profile_changed';

    /**
     * A user's status has changed
     *
     * @see https://docs.slack.dev/reference/events/user_status_changed
     */
    #[API] #[RTM]
    case UserStatusChanged = 'user_status_changed';

    /**
     * A channel member is typing a message
     *
     * @see https://docs.slack.dev/reference/events/user_typing
     */
    #[RTM]
    case UserTyping = 'user_typing';

    /**
     * A workflow that contains a step supported by your app was deleted
     *
     * @see https://docs.slack.dev/reference/events/workflow_deleted
     */
    #[API]
    #[Deprecated(message: 'retired by Slack as part of the "Steps from Apps" deprecation; no longer fires', since: '1.2.0')]
    case WorkflowDeleted = 'workflow_deleted';

    /**
     * A workflow that contains a step supported by your app was published
     *
     * @see https://docs.slack.dev/reference/events/workflow_published
     */
    #[API]
    #[Deprecated(message: 'retired by Slack as part of the "Steps from Apps" deprecation; no longer fires', since: '1.2.0')]
    case WorkflowPublished = 'workflow_published';

    /**
     * A workflow step supported by your app was removed from a workflow
     *
     * @see https://docs.slack.dev/reference/events/workflow_step_deleted
     */
    #[API]
    #[Deprecated(message: 'retired by Slack as part of the "Steps from Apps" deprecation; no longer fires', since: '1.2.0')]
    case WorkflowStepDeleted = 'workflow_step_deleted';

    /**
     * A workflow step supported by your app should execute
     *
     * @see https://docs.slack.dev/reference/events/workflow_step_execute
     */
    #[API]
    #[Deprecated(message: 'retired by Slack as part of the "Steps from Apps" deprecation; no longer fires', since: '1.2.0')]
    case WorkflowStepExecute = 'workflow_step_execute';

    /**
     * A workflow that contains a step supported by your app was unpublished
     *
     * @see https://docs.slack.dev/reference/events/workflow_unpublished
     */
    #[API]
    #[Deprecated(message: 'retired by Slack as part of the "Steps from Apps" deprecation; no longer fires', since: '1.2.0')]
    case WorkflowUnpublished = 'workflow_unpublished';

    public function supportsEventsApi(): bool
    {
        return $this->hasAttribute(class: API::class);
    }

    public function supportsRtmApi(): bool
    {
        return $this->hasAttribute(class: RTM::class);
    }

    /**
     * @return Events[]
     */
    public static function eventsApi(): array
    {
        return array_filter(
            array: self::cases(),
            callback: static fn (Events $event): bool => $event->supportsEventsApi(),
        );
    }

    /**
     * @return Events[]
     */
    public static function rtmApi(): array
    {
        return array_filter(
            array: self::cases(),
            callback: static fn (Events $event): bool => $event->supportsRtmApi());
    }
}
