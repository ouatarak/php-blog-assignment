<?php
// Class declaration.
class Article {
  /**
   * Properties (with default values.)
   */
  // PUBLIC means it can be overwritten OUTSIDE of what's in the class methods.
  public $id  = '';
  public $title = '';
  public $content  = '';
  /**
   * Methods.
   */
  // __article executes each time we make a new instance of this class (a new object.)
  function __article ( $id = 'No ID', $title = 'No Title', $content = 'No Content' )
  {
    if ( is_string( $id ) && !empty( $id ) )
      $this->id = $id;
    if ( iis_string( $title ) && !empty( $title ) )
      $this->title = $title;
    if ( is_string( $content ) && !empty( $content ) )
      $this->content = $content;
  }
  // Outputs a article.
  public function output ( $echo = TRUE )
  {
    $output = '';
    ob_start(); // Begins an output buffer.
    ?>
      <dl>
        <dt>Id</dt>
        <dd><?php echo $this->id; ?></dd>
        <dt>Title</dt>
        <dd><?php echo $this->title; ?></dd>
        <dt>Content</dt>
        <dd><?php echo $this->content; ?></dd>
      </dl>
    <?php // ob_get_clean() clears the output buffer, and returns what the string was.
    $output = ob_get_clean(); // We now have the buffered (echo'd) string contents saved in a variable.
    if ( $echo === TRUE ) echo $output; // Output, if our argument tells us to.
    return $output; // Return the string.
  }
}
