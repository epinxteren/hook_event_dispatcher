<?php

namespace Drupal\hook_event_dispatcher\Event\Preprocess;

/**
 * Class ImagePreprocessEvent.
 */
final class ImagePreprocessEvent extends AbstractPreprocessEvent {

  /**
   * Get the hook name.
   *
   * @return string
   *   Hook name.
   */
  public static function getHook() {
    return 'image';
  }

}
