<?php

namespace Drupal\hook_event_dispatcher;

/**
 * Class HookEventDispatcherEvents.
 *
 * @package Drupal\hook_event_dispatcher
 */
final class HookEventDispatcherEvents {

  // ENTITY EVENTS.
  const ENTITY_INSERT = 'hook_event_dispatcher.entity.insert';
  const ENTITY_UPDATE = 'hook_event_dispatcher.entity.update';
  const ENTITY_PRE_DELETE = 'hook_event_dispatcher.entity.predelete';
  const ENTITY_DELETE = 'hook_event_dispatcher.entity.delete';
  const ENTITY_PRE_SAVE = 'hook_event_dispatcher.entity.presave';
  const ENTITY_VIEW = 'hook_event_dispatcher.entity.view';
  const ENTITY_ACCESS = 'hook_event_dispatcher.entity.access';
  const ENTITY_CREATE = 'hook_event_dispatcher.entity.create';
  const ENTITY_LOAD = 'hook_event_dispatcher.entity.load';

  // FORM EVENTS.
  const FORM_ALTER = 'hook_event_dispatcher.form.alter';
  const WIDGET_FORM_ALTER = 'hook_event_dispatcher.widget_form.alter';

  // BLOCK EVENTS.
  const BLOCK_BUILD_ALTER = 'hook_event_dispatcher.block_build.alter';

  // TOKEN EVENTS.
  const TOKEN_REPLACEMENT = 'hook_event_dispatcher.token.replacement';
  const TOKEN_INFO = 'hook_event_dispatcher.token.info';

}
