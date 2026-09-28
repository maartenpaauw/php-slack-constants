<?php

declare(strict_types=1);

namespace Maartenpaauw\Slack\Constants;

use Deprecated;

enum Interactions: string
{
    /**
     * A button, select menu or other interactive element in a message, modal or App Home was interacted with
     *
     * @see https://docs.slack.dev/reference/interaction-payloads/block_actions-payload
     */
    case BlockActions = 'block_actions';

    /**
     * Options were requested for an external select menu
     *
     * @see https://docs.slack.dev/reference/interaction-payloads/block_suggestion-payload
     */
    case BlockSuggestion = 'block_suggestion';

    /**
     * A dialog was cancelled
     *
     * @see https://docs.slack.dev/legacy/legacy-dialogs
     */
    #[Deprecated(message: 'superseded by modals (view_submission and view_closed); dialogs are a legacy Slack surface', since: '1.3.0')]
    case DialogCancellation = 'dialog_cancellation';

    /**
     * A dialog was submitted
     *
     * @see https://docs.slack.dev/legacy/legacy-dialogs
     */
    #[Deprecated(message: 'superseded by modals (view_submission and view_closed); dialogs are a legacy Slack surface', since: '1.3.0')]
    case DialogSubmission = 'dialog_submission';

    /**
     * Options were requested for a dynamic select menu in a dialog
     *
     * @see https://docs.slack.dev/legacy/legacy-dialogs
     */
    #[Deprecated(message: 'superseded by modals (view_submission and view_closed); dialogs are a legacy Slack surface', since: '1.3.0')]
    case DialogSuggestion = 'dialog_suggestion';

    /**
     * An attachment button in a message was clicked
     *
     * @see https://docs.slack.dev/legacy/legacy-messaging/legacy-making-messages-interactive
     */
    #[Deprecated(message: 'superseded by block_actions; attachment buttons are a legacy Slack surface', since: '1.3.0')]
    case InteractiveMessage = 'interactive_message';

    /**
     * A message shortcut was used
     *
     * @see https://docs.slack.dev/reference/interaction-payloads/shortcuts-interaction-payload
     */
    case MessageAction = 'message_action';

    /**
     * A global shortcut was used
     *
     * @see https://docs.slack.dev/reference/interaction-payloads/shortcuts-interaction-payload
     */
    case Shortcut = 'shortcut';

    /**
     * A modal was closed
     *
     * @see https://docs.slack.dev/reference/interaction-payloads/view-interactions-payload
     */
    case ViewClosed = 'view_closed';

    /**
     * A modal was submitted
     *
     * @see https://docs.slack.dev/reference/interaction-payloads/view-interactions-payload
     */
    case ViewSubmission = 'view_submission';
}
