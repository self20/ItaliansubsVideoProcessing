<?php

require_once( dirname(__FILE__).'/../_task/task.php' );
eval( getPluginConf( 'ItaliansubsVideoProcessing' ) );

if (isset($_REQUEST['hash']) && isset($_REQUEST['no']) && $_REQUEST['cmd']) {
  switch ($_REQUEST['cmd']) {
    case 'ItaliansubsVideoProcessing':
      # code...
      break;
  }
}
