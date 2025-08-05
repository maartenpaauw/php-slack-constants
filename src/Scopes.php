<?php

declare(strict_types=1);

namespace Maartenpaauw\Slack\Constants;

use ReflectionAttribute;
use ReflectionEnumBackedCase;

enum Scopes: string
{
    /**
     * Administer a workspace
     *
     * @see https://api.slack.com/scopes/admin
     */
    #[User]
    case Admin = 'admin';

    /**
     * Access analytics data about the organization
     *
     * @see https://api.slack.com/scopes/admin.analytics:read
     */
    #[User]
    case AdminAnalyticsRead = 'admin.analytics:read';

    /**
     * View execution logs within an organization
     *
     * @see https://api.slack.com/scopes/admin.app_activities:read
     */
    #[User]
    case AdminAppActivitiesRead = 'admin.app_activities:read';

    /**
     * View apps and app requests in a workspace
     *
     * @see https://api.slack.com/scopes/admin.apps:read
     */
    #[User]
    case AdminAppsRead = 'admin.apps:read';

    /**
     * Manage apps in a workspace
     *
     * @see https://api.slack.com/scopes/admin.apps:write
     */
    #[User]
    case AdminAppsWrite = 'admin.apps:write';

    /**
     * Read information barriers in the organization
     *
     * @see https://api.slack.com/scopes/admin.barriers:read
     */
    #[User]
    case AdminBarriersRead = 'admin.barriers:read';

    /**
     * Manage information barriers in the organization
     *
     * @see https://api.slack.com/scopes/admin.barriers:write
     */
    #[User]
    case AdminBarriersWrite = 'admin.barriers:write';

    /**
     * Read messages in conversations
     *
     * @see https://api.slack.com/scopes/admin.chat:read
     */
    #[User]
    case AdminChatRead = 'admin.chat:read';

    /**
     * Delete, restore, and update messages in conversations
     *
     * @see https://api.slack.com/scopes/admin.chat:write
     */
    #[User]
    case AdminChatWrite = 'admin.chat:write';

    /**
     * Manage channel details and create conversations related to external connections, objects, and records
     *
     * @see https://api.slack.com/scopes/admin.conversations:manage_objects
     */
    #[User]
    case AdminConversationsManageObjects = 'admin.conversations:manage_objects';

    /**
     * View the channel's member list, topic, purpose and channel name
     *
     * @see https://api.slack.com/scopes/admin.conversations:read
     */
    #[User]
    case AdminConversationsRead = 'admin.conversations:read';

    /**
     * Start a new conversation, modify a conversation and modify channel details
     *
     * @see https://api.slack.com/scopes/admin.conversations:write
     */
    #[User]
    case AdminConversationsWrite = 'admin.conversations:write';

    /**
     * Gain information about invite requests in a Grid organization.
     *
     * @see https://api.slack.com/scopes/admin.invites:read
     */
    #[User]
    case AdminInvitesRead = 'admin.invites:read';

    /**
     * Approve or deny invite requests in a Grid organization.
     *
     * @see https://api.slack.com/scopes/admin.invites:write
     */
    #[User]
    case AdminInvitesWrite = 'admin.invites:write';

    /**
     * List role assignments for your workspace.
     *
     * @see https://api.slack.com/scopes/admin.roles:read
     */
    #[User]
    case AdminRolesRead = 'admin.roles:read';

    /**
     * Add and remove role assignments for your workspace.
     *
     * @see https://api.slack.com/scopes/admin.roles:write
     */
    #[User]
    case AdminRolesWrite = 'admin.roles:write';

    /**
     * Access information about a workspace
     *
     * @see https://api.slack.com/scopes/admin.teams:read
     */
    #[User]
    case AdminTeamsRead = 'admin.teams:read';

    /**
     * Make changes to a workspace
     *
     * @see https://api.slack.com/scopes/admin.teams:write
     */
    #[User]
    case AdminTeamsWrite = 'admin.teams:write';

    /**
     * Access information about user groups
     *
     * @see https://api.slack.com/scopes/admin.usergroups:read
     */
    #[User]
    case AdminUsergroupsRead = 'admin.usergroups:read';

    /**
     * Make changes to your usergroups
     *
     * @see https://api.slack.com/scopes/admin.usergroups:write
     */
    #[User]
    case AdminUsergroupsWrite = 'admin.usergroups:write';

    /**
     * Access a workspace's profile information
     *
     * @see https://api.slack.com/scopes/admin.users:read
     */
    #[User]
    case AdminUsersRead = 'admin.users:read';

    /**
     * Modify account information
     *
     * @see https://api.slack.com/scopes/admin.users:write
     */
    #[User]
    case AdminUsersWrite = 'admin.users:write';

    /**
     * View all workflows in a workspace
     *
     * @see https://api.slack.com/scopes/admin.workflows:read
     */
    #[User]
    case AdminWorkflowsRead = 'admin.workflows:read';

    /**
     * Manage workflows in a workspace
     *
     * @see https://api.slack.com/scopes/admin.workflows:write
     */
    #[User]
    case AdminWorkflowsWrite = 'admin.workflows:write';

    /**
     * Read app configuration info via App Manifest APIs
     *
     * @see https://api.slack.com/scopes/app_configurations:read
     */
    #[Bot] #[User] #[Configuration]
    case AppConfigurationsRead = 'app_configurations:read';

    /**
     * Write app configuration info and create apps via App Manifest APIs
     *
     * @see https://api.slack.com/scopes/app_configurations:write
     */
    #[Bot] #[User] #[Configuration]
    case AppConfigurationsWrite = 'app_configurations:write';

    /**
     * View messages that directly mention @your_slack_app in conversations that the app is in
     *
     * @see https://api.slack.com/scopes/app_mentions:read
     */
    #[Bot]
    case AppMentionsRead = 'app_mentions:read';

    /**
     * Create or cancel an App Approval request on user's behalf
     *
     * @see https://api.slack.com/scopes/apps.requests:write
     */
    #[User]
    case AppsRequestsWrite = 'apps.requests:write';

    /**
     * Allow your slack app to act as an AI Assistant
     *
     * @see https://api.slack.com/scopes/assistant:write
     */
    #[Bot]
    case AssistantWrite = 'assistant:write';

    /**
     * View events from all workspaces, channels and users (Enterprise Grid only)
     *
     * @see https://api.slack.com/scopes/auditlogs:read
     */
    #[User]
    case AuditlogsRead = 'auditlogs:read';

    /**
     * Grants permission to list authorizations associated with the Events API
     *
     * @see https://api.slack.com/scopes/authorizations:read
     */
    #[ApplicationLevel]
    case AuthorizationsRead = 'authorizations:read';

    /**
     * List bookmarks
     *
     * @see https://api.slack.com/scopes/bookmarks:read
     */
    #[Bot] #[User]
    case BookmarksRead = 'bookmarks:read';

    /**
     * Create, edit, and remove bookmarks
     *
     * @see https://api.slack.com/scopes/bookmarks:write
     */
    #[Bot] #[User]
    case BookmarksWrite = 'bookmarks:write';

    /**
     * View information about ongoing and past calls
     *
     * @see https://api.slack.com/scopes/calls:read
     */
    #[Bot] #[User]
    case CallsRead = 'calls:read';

    /**
     * Start and manage calls in a workspace
     *
     * @see https://api.slack.com/scopes/calls:write
     */
    #[Bot] #[User]
    case CallsWrite = 'calls:write';

    /**
     * your slack app will be able to access contents of canvases created inside Slack.
     *
     * @see https://api.slack.com/scopes/canvases:read
     */
    #[Bot] #[User]
    case CanvasesRead = 'canvases:read';

    /**
     * your slack app will be able to create, edit and remove canvases.
     *
     * @see https://api.slack.com/scopes/canvases:write
     */
    #[Bot] #[User]
    case CanvasesWrite = 'canvases:write';

    /**
     * View messages and other content in public channels that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/channels:history
     */
    #[Bot] #[User]
    case ChannelsHistory = 'channels:history';

    /**
     * Join public channels in a workspace
     *
     * @see https://api.slack.com/scopes/channels:join
     */
    #[Bot]
    case ChannelsJoin = 'channels:join';

    /**
     * Manage public channels that your slack app has been added to and create new ones
     *
     * @see https://api.slack.com/scopes/channels:manage
     */
    #[Bot]
    case ChannelsManage = 'channels:manage';

    /**
     * View basic information about public channels in a workspace
     *
     * @see https://api.slack.com/scopes/channels:read
     */
    #[Bot] #[User]
    case ChannelsRead = 'channels:read';

    /**
     * Manage a user's public channels and create new ones on a user's behalf
     *
     * @see https://api.slack.com/scopes/channels:write
     */
    #[User]
    case ChannelsWrite = 'channels:write';

    /**
     * Invite members to public channels
     *
     * @see https://api.slack.com/scopes/channels:write.invites
     */
    #[Bot] #[User]
    case ChannelsWriteInvites = 'channels:write.invites';

    /**
     * Set the description of public channels
     *
     * @see https://api.slack.com/scopes/channels:write.topic
     */
    #[Bot] #[User]
    case ChannelsWriteTopic = 'channels:write.topic';

    /**
     * Post messages in approved channels & conversations
     *
     * @see https://api.slack.com/scopes/chat:write
     */
    #[Bot] #[User]
    case ChatWrite = 'chat:write';

    /**
     * Send messages as @your_slack_app with a customized username and avatar
     *
     * @see https://api.slack.com/scopes/chat:write.customize
     */
    #[Bot]
    case ChatWriteCustomize = 'chat:write.customize';

    /**
     * Send messages to channels @your_slack_app isn't a member of
     *
     * @see https://api.slack.com/scopes/chat:write.public
     */
    #[Bot]
    case ChatWritePublic = 'chat:write.public';

    /**
     * Add shortcuts and/or slash commands that people can use
     *
     * @see https://api.slack.com/scopes/commands
     */
    #[Bot] #[User]
    case Commands = 'commands';

    /**
     * Grants permission to generate websocket URIs and connect to Socket Mode
     *
     * @see https://api.slack.com/scopes/connections:write
     */
    #[ApplicationLevel]
    case ConnectionsWrite = 'connections:write';

    /**
     * Allows your slack app to manage Slack Connect channels
     *
     * @see https://api.slack.com/scopes/conversations.connect:manage
     */
    #[Bot]
    case ConversationsConnectManage = 'conversations.connect:manage';

    /**
     * Receive Slack Connect invite events sent to the channels your slack app is in
     *
     * @see https://api.slack.com/scopes/conversations.connect:read
     */
    #[Bot]
    case ConversationsConnectRead = 'conversations.connect:read';

    /**
     * Create Slack Connect invitations for channels that your slack app has been added to, and accept invitations sent to your slack app
     *
     * @see https://api.slack.com/scopes/conversations.connect:write
     */
    #[Bot]
    case ConversationsConnectWrite = 'conversations.connect:write';

    /**
     * Invite members to conversations
     *
     * @see https://api.slack.com/scopes/conversations:write.invites
     */
    case ConversationsWriteInvites = 'conversations:write.invites';

    /**
     * Set the description of conversations
     *
     * @see https://api.slack.com/scopes/conversations:write.topic
     */
    case ConversationsWriteTopic = 'conversations:write.topic';

    /**
     * View and see data from Slack App Datastore
     *
     * @see https://api.slack.com/scopes/datastore:read
     */
    #[Bot]
    case DatastoreRead = 'datastore:read';

    /**
     * Write data to Slack App Datastore
     *
     * @see https://api.slack.com/scopes/datastore:write
     */
    #[Bot]
    case DatastoreWrite = 'datastore:write';

    /**
     * View Do Not Disturb settings for people in a workspace
     *
     * @see https://api.slack.com/scopes/dnd:read
     */
    #[Bot] #[User]
    case DndRead = 'dnd:read';

    /**
     * Edit a user's Do Not Disturb settings
     *
     * @see https://api.slack.com/scopes/dnd:write
     */
    #[User]
    case DndWrite = 'dnd:write';

    /**
     * View a user's email address
     *
     * @see https://api.slack.com/scopes/email
     */
    #[User]
    case Email = 'email';

    /**
     * View custom emoji in a workspace
     *
     * @see https://api.slack.com/scopes/emoji:read
     */
    #[Bot] #[User]
    case EmojiRead = 'emoji:read';

    /**
     * View files shared in channels and conversations that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/files:read
     */
    #[Bot] #[User]
    case FilesRead = 'files:read';

    /**
     * Upload, edit, and delete files as your slack app
     *
     * @see https://api.slack.com/scopes/files:write
     */
    #[Bot] #[User]
    case FilesWrite = 'files:write';

    /**
     * View messages and other content in private channels that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/groups:history
     */
    #[Bot] #[User]
    case GroupsHistory = 'groups:history';

    /**
     * View basic information about private channels that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/groups:read
     */
    #[Bot] #[User]
    case GroupsRead = 'groups:read';

    /**
     * Manage private channels that your slack app has been added to and create new ones
     *
     * @see https://api.slack.com/scopes/groups:write
     */
    #[Bot] #[User]
    case GroupsWrite = 'groups:write';

    /**
     * Invite members to private channels
     *
     * @see https://api.slack.com/scopes/groups:write.invites
     */
    #[Bot] #[User]
    case GroupsWriteInvites = 'groups:write.invites';

    /**
     * Set the description of private channels
     *
     * @see https://api.slack.com/scopes/groups:write.topic
     */
    #[Bot] #[User]
    case GroupsWriteTopic = 'groups:write.topic';

    /**
     * View and see information about Slack apps
     *
     * @see https://api.slack.com/scopes/hosting:read
     */
    #[User]
    case HostingRead = 'hosting:read';

    /**
     * Manage and deploy Slack apps
     *
     * @see https://api.slack.com/scopes/hosting:write
     */
    #[User]
    case HostingWrite = 'hosting:write';

    /**
     * View information about a user's identity
     *
     * @see https://api.slack.com/scopes/identify
     */
    case Identify = 'identify';

    /**
     * View messages and other content in direct messages that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/im:history
     */
    #[Bot] #[User]
    case ImHistory = 'im:history';

    /**
     * View basic information about direct messages that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/im:read
     */
    #[Bot] #[User]
    case ImRead = 'im:read';

    /**
     * Start direct messages with people
     *
     * @see https://api.slack.com/scopes/im:write
     */
    #[Bot] #[User]
    case ImWrite = 'im:write';

    /**
     * Set the description in direct messages
     *
     * @see https://api.slack.com/scopes/im:write.topic
     */
    #[Bot] #[User]
    case ImWriteTopic = 'im:write.topic';

    /**
     * Create one-way webhooks to post messages to a specific channel
     *
     * @see https://api.slack.com/scopes/incoming-webhook
     */
    #[Bot] #[User]
    case IncomingWebhook = 'incoming-webhook';

    /**
     * Embed video player URLs in messages and app surfaces
     *
     * @see https://api.slack.com/scopes/links.embed:write
     */
    #[Bot] #[User]
    case LinksEmbedWrite = 'links.embed:write';

    /**
     * View URLs in messages
     *
     * @see https://api.slack.com/scopes/links:read
     */
    #[Bot] #[User]
    case LinksRead = 'links:read';

    /**
     * Show previews of URLs in messages
     *
     * @see https://api.slack.com/scopes/links:write
     */
    #[Bot] #[User]
    case LinksWrite = 'links:write';

    /**
     * your slack app will be able to access contents of lists created inside Slack.
     *
     * @see https://api.slack.com/scopes/lists:read
     */
    #[Bot] #[User]
    case ListsRead = 'lists:read';

    /**
     * your slack app will be able to create, edit and remove lists.
     *
     * @see https://api.slack.com/scopes/lists:write
     */
    #[Bot] #[User]
    case ListsWrite = 'lists:write';

    /**
     * Allows your slack app to read message metadata in channels that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/metadata.message:read
     */
    #[Bot]
    case MetadataMessageRead = 'metadata.message:read';

    /**
     * View messages and other content in group direct messages that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/mpim:history
     */
    #[Bot] #[User]
    case MpimHistory = 'mpim:history';

    /**
     * View basic information about group direct messages that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/mpim:read
     */
    #[Bot] #[User]
    case MpimRead = 'mpim:read';

    /**
     * Start group direct messages with people
     *
     * @see https://api.slack.com/scopes/mpim:write
     */
    #[Bot] #[User]
    case MpimWrite = 'mpim:write';

    /**
     * Set the description in group direct messages
     *
     * @see https://api.slack.com/scopes/mpim:write.topic
     */
    #[Bot] #[User]
    case MpimWriteTopic = 'mpim:write.topic';

    /**
     * Execute methods without needing a scope
     *
     * @see https://api.slack.com/scopes/none
     */
    #[Bot]
    case None = 'none';

    /**
     * View information about a user's identity
     *
     * @see https://api.slack.com/scopes/openid
     */
    #[User]
    case Openid = 'openid';

    /**
     * View pinned content in channels and conversations that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/pins:read
     */
    #[Bot] #[User]
    case PinsRead = 'pins:read';

    /**
     * Add and remove pinned messages and files
     *
     * @see https://api.slack.com/scopes/pins:write
     */
    #[Bot] #[User]
    case PinsWrite = 'pins:write';

    /**
     * View a user's Slack avatar and Slack workspace's basic information
     *
     * @see https://api.slack.com/scopes/profile
     */
    #[User]
    case Profile = 'profile';

    /**
     * View emoji reactions and their associated content in channels and conversations that your slack app has been added to
     *
     * @see https://api.slack.com/scopes/reactions:read
     */
    #[Bot] #[User]
    case ReactionsRead = 'reactions:read';

    /**
     * Add and edit emoji reactions
     *
     * @see https://api.slack.com/scopes/reactions:write
     */
    #[Bot] #[User]
    case ReactionsWrite = 'reactions:write';

    /**
     * View reminders created by your slack app
     *
     * @see https://api.slack.com/scopes/reminders:read
     */
    #[Bot] #[User]
    case RemindersRead = 'reminders:read';

    /**
     * Add, remove, or mark reminders as complete
     *
     * @see https://api.slack.com/scopes/reminders:write
     */
    #[Bot] #[User]
    case RemindersWrite = 'reminders:write';

    /**
     * View remote files added by the app in a workspace
     *
     * @see https://api.slack.com/scopes/remote_files:read
     */
    #[Bot] #[User]
    case RemoteFilesRead = 'remote_files:read';

    /**
     * Share remote files on a user's behalf
     *
     * @see https://api.slack.com/scopes/remote_files:share
     */
    #[Bot] #[User]
    case RemoteFilesShare = 'remote_files:share';

    /**
     * Add, edit, and delete remote files on a user's behalf
     *
     * @see https://api.slack.com/scopes/remote_files:write
     */
    #[Bot]
    case RemoteFilesWrite = 'remote_files:write';

    /**
     * Search a workspace's content
     *
     * @see https://api.slack.com/scopes/search:read
     */
    #[User]
    case SearchRead = 'search:read';

    /**
     * Search content in your enterprise
     *
     * @see https://api.slack.com/scopes/search:read.enterprise
     */
    #[Bot]
    case SearchReadEnterprise = 'search:read.enterprise';

    /**
     * Search a workspace's content in files
     *
     * @see https://api.slack.com/scopes/search:read.files
     */
    #[Bot] #[User]
    case SearchReadFiles = 'search:read.files';

    /**
     * Search a workspace's content in direct messages
     *
     * @see https://api.slack.com/scopes/search:read.im
     */
    #[Bot] #[User]
    case SearchReadIm = 'search:read.im';

    /**
     * Search a workspace's content in group direct messages
     *
     * @see https://api.slack.com/scopes/search:read.mpim
     */
    #[Bot] #[User]
    case SearchReadMpim = 'search:read.mpim';

    /**
     * Search a workspace's content in private channels
     *
     * @see https://api.slack.com/scopes/search:read.private
     */
    #[Bot] #[User]
    case SearchReadPrivate = 'search:read.private';

    /**
     * Search a workspace's content in public channels
     *
     * @see https://api.slack.com/scopes/search:read.public
     */
    #[Bot] #[User]
    case SearchReadPublic = 'search:read.public';

    /**
     * View messages and files that your slack app has starred
     *
     * @see https://api.slack.com/scopes/stars:read
     */
    #[User]
    case StarsRead = 'stars:read';

    /**
     * Add or remove stars
     *
     * @see https://api.slack.com/scopes/stars:write
     */
    #[User]
    case StarsWrite = 'stars:write';

    /**
     * Allows your slack app to read the billing plan for workspaces your slack app has been installed to
     *
     * @see https://api.slack.com/scopes/team.billing:read
     */
    #[Bot] #[User]
    case TeamBillingRead = 'team.billing:read';

    /**
     * Allows your slack app to read the preferences for workspaces your slack app has been installed to
     *
     * @see https://api.slack.com/scopes/team.preferences:read
     */
    #[Bot] #[User]
    case TeamPreferencesRead = 'team.preferences:read';

    /**
     * View the name, email domain, and icon for workspaces your slack app is connected to
     *
     * @see https://api.slack.com/scopes/team:read
     */
    #[Bot] #[User]
    case TeamRead = 'team:read';

    /**
     * Execute methods without needing a scope
     *
     * @see https://api.slack.com/scopes/tokens.basic
     */
    #[Bot] #[User]
    case TokensBasic = 'tokens.basic';

    /**
     * Read new Platform triggers
     *
     * @see https://api.slack.com/scopes/triggers:read
     */
    #[Bot] #[User]
    case TriggersRead = 'triggers:read';

    /**
     * Create new Platform triggers
     *
     * @see https://api.slack.com/scopes/triggers:write
     */
    #[Bot] #[User]
    case TriggersWrite = 'triggers:write';

    /**
     * View user groups in a workspace
     *
     * @see https://api.slack.com/scopes/usergroups:read
     */
    #[Bot] #[User]
    case UsergroupsRead = 'usergroups:read';

    /**
     * Create and manage user groups
     *
     * @see https://api.slack.com/scopes/usergroups:write
     */
    #[Bot] #[User]
    case UsergroupsWrite = 'usergroups:write';

    /**
     * View profile details about people in a workspace
     *
     * @see https://api.slack.com/scopes/users.profile:read
     */
    #[Bot] #[User]
    case UsersProfileRead = 'users.profile:read';

    /**
     * Edit a user's profile information and status
     *
     * @see https://api.slack.com/scopes/users.profile:write
     */
    #[User]
    case UsersProfileWrite = 'users.profile:write';

    /**
     * View people in a workspace
     *
     * @see https://api.slack.com/scopes/users:read
     */
    #[Bot] #[User]
    case UsersRead = 'users:read';

    /**
     * View email addresses of people in a workspace
     *
     * @see https://api.slack.com/scopes/users:read.email
     */
    #[Bot] #[User]
    case UsersReadEmail = 'users:read.email';

    /**
     * Set presence for your slack app
     *
     * @see https://api.slack.com/scopes/users:write
     */
    #[Bot] #[User]
    case UsersWrite = 'users:write';

    /**
     * Add steps that people can use in Workflow Builder
     *
     * @see https://api.slack.com/scopes/workflow.steps:execute
     */
    #[Bot]
    case WorkflowStepsExecute = 'workflow.steps:execute';

    /**
     * Read a workflow template
     *
     * @see https://api.slack.com/scopes/workflows.templates:read
     */
    #[Bot] #[User]
    case WorkflowsTemplatesRead = 'workflows.templates:read';

    /**
     * Write a workflow template
     *
     * @see https://api.slack.com/scopes/workflows.templates:write
     */
    #[Bot] #[User]
    case WorkflowsTemplatesWrite = 'workflows.templates:write';

    public function supportsApplicationLevelTokens(): bool
    {
        $reflection = new ReflectionEnumBackedCase(class: self::class, constant: $this->name);
        $attributes = $reflection->getAttributes();

        return array_any(
            array: $attributes,
            callback: static fn (ReflectionAttribute $attribute): bool => $attribute->newInstance() instanceof ApplicationLevel,
        );
    }

    public function supportsBotTokens(): bool
    {
        $reflection = new ReflectionEnumBackedCase(class: self::class, constant: $this->name);
        $attributes = $reflection->getAttributes();

        return array_any(
            array: $attributes,
            callback: static fn (ReflectionAttribute $attribute): bool => $attribute->newInstance() instanceof Bot,
        );
    }

    public function supportsConfigurationTokens(): bool
    {
        $reflection = new ReflectionEnumBackedCase(class: self::class, constant: $this->name);
        $attributes = $reflection->getAttributes();

        return array_any(
            array: $attributes,
            callback: static fn (ReflectionAttribute $attribute): bool => $attribute->newInstance() instanceof Configuration,
        );
    }

    public function supportsUserTokens(): bool
    {
        $reflection = new ReflectionEnumBackedCase(class: self::class, constant: $this->name);
        $attributes = $reflection->getAttributes();

        return array_any(
            array: $attributes,
            callback: static fn (ReflectionAttribute $attribute): bool => $attribute->newInstance() instanceof User,
        );
    }

    /**
     * @return Scopes[]
     */
    public static function applicationLevelTokenScopes(): array
    {
        return array_filter(
            array: self::cases(),
            callback: static fn (Scopes $event): bool => $event->supportsApplicationLevelTokens(),
        );
    }

    /**
     * @return Scopes[]
     */
    public static function botTokenScopes(): array
    {
        return array_filter(
            array: self::cases(),
            callback: static fn (Scopes $event): bool => $event->supportsBotTokens(),
        );
    }

    /**
     * @return Scopes[]
     */
    public static function configurationTokenScopes(): array
    {
        return array_filter(
            array: self::cases(),
            callback: static fn (Scopes $event): bool => $event->supportsConfigurationTokens(),
        );
    }

    /**
     * @return Scopes[]
     */
    public static function userTokenScopes(): array
    {
        return array_filter(
            array: self::cases(),
            callback: static fn (Scopes $event): bool => $event->supportsUserTokens(),
        );
    }
}
