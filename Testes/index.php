
<?php 

require('app/view/layout/head.phtml');
require('app/view/layout/header.phtml');
require('app/view/layout/menu.phtml');

$page = (isset($_GET['page'])) ? $_GET['page'] : 'index' ;

if( file_exists( 'app/view/pages/'.$page.'.phtml' ) ):
	require('app/view/pages/'.$page.'.phtml');
else:
	require('app/view/pages/404.phtml');
endif;


require('app/view/layout/footer.phtml');
