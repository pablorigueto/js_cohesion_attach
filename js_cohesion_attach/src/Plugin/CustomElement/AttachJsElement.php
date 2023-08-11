<?php

namespace Drupal\js_cohesion_attach\Plugin\CustomElement;
 
use Drupal\cohesion_elements\CustomElementPluginBase;
  
/**
 * Container HTML element plugin for Site Studio.
 *
 * @package Drupal\cohesion\Plugin\CustomElement
 *
 * @CustomElement(
 *   id = "attach_js_element",
 *   label = @Translation("Attach JS Element"),
 *   container = true
 * )
 */

class AttachJsElement extends CustomElementPluginBase {

 /**
  * Builds form you'll see on edit.
  *
  * @return array
  *   Created Form
  *
  * @codeCoverageIgnore
  */
  public function getFields() {
    return [
      'module_name' => [
        'htmlClass' => 'ssa-grid-col-xs-12',
        'type' => 'textfield',
        'title' => 'Your Module name',
        'nullOption' => FALSE,
        'placeholder' => 'Enter your module name for the theme.',
        'required' => TRUE,
        'validationMessage' => 'Your Module name is required.',
      ],
      'library_name' => [
        'htmlClass' => 'ssa-grid-col-xs-12',
        'type' => 'textfield',
        'title' => 'Library Name',
        'nullOption' => FALSE,
        'placeholder' => 'Enter your library name.',
        'required' => TRUE,
        'validationMessage' => 'Your Library name is required.',
      ],
    ];
  }

 /**
  * Renders the element, in my case it'll only be a twig to add JS.
  *
  * @return array
  *   Rendered element
  *
  * @codeCoverageIgnore
  */
  public function render($settings, $markup, $class) {
    return [
      '#theme' => 'attach_js_element_template',
      '#template' => 'attach-js-element-template',
      '#elementSettings' => $settings,
      '#elementMarkup' => $markup,
      '#elementClass' => $class,
    ];
  }

}
