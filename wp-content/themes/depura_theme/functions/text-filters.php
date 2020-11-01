<?php
/**
 * Function for filter wyiwyg text
 *
 * @param [type] $elements
 * @return $elements
 */

function wpb_mceFilterText($elements)
{
    array_unshift($elements, 'styleselect');
    return $elements;
}
add_filter('mce_buttons_2', 'wpb_mceFilterText');

/**
 * Mce Before Init Insert formats
 *
 * @param [type] $init_array
 * @return $array
 */
function mceBeforeInitInsertformats( $init_array )
{
    $style_formats = array(

      array(
        'title' => 'Headline',
        'block' => 'span',
        'classes' => 'headline headline--1',
        'wrapper' => true,
      ),
      array(
        'title' => 'Headline 2',
        'block' => 'span',
        'classes' => 'headline headline--2',
        'wrapper' => true,
      ),
      array(
        'title' => 'Headline 3',
        'block' => 'span',
        'classes' => 'headline headline--3',
        'wrapper' => true,
      ),
      array(
        'title' => 'Headline 4',
        'block' => 'span',
        'classes' => 'headline headline--4',
        'wrapper' => true,
      ),
      array(
        'title' => 'Subtitle',
        'block' => 'span',
        'classes' => 'subtitle subtitle--1',
        'wrapper' => true,
      ),
      array(
        'title' => 'Subtitle 2',
        'block' => 'span',
        'classes' => 'subtitle subtitle--2',
        'wrapper' => true,
      ),
      array(
        'title' => 'Body 1',
        'block' => 'span',
        'classes' => 'body',
        'wrapper' => true,
      ),
      array(
        'title' => 'Body 2',
        'block' => 'span',
        'classes' => 'body body--2',
        'wrapper' => true,
      ),
      array(
        'title' => 'Light 1',
        'block' => 'span',
        'classes' => 'body body--1 body--lt',
        'wrapper' => true,
      ),
      array(
        'title' => 'Light 2',
        'block' => 'span',
        'classes' => 'body body--2 body--lt',
        'wrapper' => true,
      ),
      array(
        'title' => 'highlight',
        'block' => 'span',
        'classes' => 'highlight',
        'wrapper' => true,
      ),
    );

    $init_array['style_formats'] = json_encode($style_formats);
    return $init_array;

}
  // Attach callback to 'tiny_mce_before_init'
  add_filter('tiny_mce_before_init', 'mceBeforeInitInsertformats');
