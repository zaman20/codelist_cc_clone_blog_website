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
    // Create a section for logo
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
    // Create a section for facebook
    CSF::createSection( $prefix, array(
      'title'  => 'facebook',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'opt-fb',
          'type'  => 'text',
          'title' => 'Facebook URL',
        ),
  
      )
    ) );

     // Create a section for comments
     CSF::createSection( $prefix, array(
      'title'  => 'Recent Comments',
      'fields' => array(
  
        // For Comment-1
        array(
          'id'    => 'opt-name',
          'type'  => 'text',
          'title' => 'Name',
        ),
        array(
          'id'    => 'opt-comment',
          'type'  => 'textarea',
          'title' => 'Comment',
        ),
        // For Comment-2
        array(
          'id'    => 'opt-name1',
          'type'  => 'text',
          'title' => 'Name',
        ),
        array(
          'id'    => 'opt-comment1',
          'type'  => 'textarea',
          'title' => 'Comment',
        ),
        // For Comment-3
        array(
          'id'    => 'opt-name2',
          'type'  => 'text',
          'title' => 'Name',
        ),
        array(
          'id'    => 'opt-comment2',
          'type'  => 'textarea',
          'title' => 'Comment',
        ),
        // For Comment-4
        array(
          'id'    => 'opt-name3',
          'type'  => 'text',
          'title' => 'Name',
        ),
        array(
          'id'    => 'opt-comment3',
          'type'  => 'textarea',
          'title' => 'Comment',
        ),
        // For Comment-5
        array(
          'id'    => 'opt-name4',
          'type'  => 'text',
          'title' => 'Name',
        ),
        array(
          'id'    => 'opt-comment4',
          'type'  => 'textarea',
          'title' => 'Comment',
        ),

  
      )
    ) );

  
  
  }
  