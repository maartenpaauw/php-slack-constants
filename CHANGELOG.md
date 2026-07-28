# Changelog

All notable changes to `php-slack-constants` will be documented in this file.

## v1.2.0 - 2026-07-28

### Features

- Update all `Events` `@see` references from `api.slack.com` to `docs.slack.dev` to match Slack's current documentation site.
- Add 6 event cases missing from the `Events` enum: `AppContextChanged`, `EntityCommentsRequested`, `EntityDetailsRequested`, `UserConnection`, `UserProfileChanged`, `UserStatusChanged`.
- Mark the 5 retired "Steps from Apps" workflow events (`WorkflowDeleted`, `WorkflowPublished`, `WorkflowStepDeleted`, `WorkflowStepExecute`, `WorkflowUnpublished`) with the native `#[Deprecated]` attribute.

## v1.1.0 - 2025-08-05

### Added

- Support for Slack scopes.

## v1.0.1 - 2025-08-05

**Full Changelog**: https://github.com/maartenpaauw/php-slack-constants/compare/1.0.0...1.0.1

## v1.0.0 - 2025-08-03

Initial release
