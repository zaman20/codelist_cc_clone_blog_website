<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_option';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'My Option',
      'menu_slug'  => 'my-option',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Footer Text',
      'fields' => array(

        // A text field
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Enter Text',
        ),)

    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Logo',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'opt-logo',
          'type'  => 'upload',
          'title' => 'Upload  logo',
        ),
  
      )
    ) );
  
  }
  