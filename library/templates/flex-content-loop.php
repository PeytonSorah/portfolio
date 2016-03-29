<?php

 // Flex Content Loop

?>
<?php

  if ( get_row_layout() == '1_col_txt' ) :
    get_template_part( 'library/templates/flexible-content/1-col-txt' );

  elseif ( get_row_layout() == '2_column' ) :
    get_template_part( 'library/templates/flexible-content/two', 'column' );

  endif;