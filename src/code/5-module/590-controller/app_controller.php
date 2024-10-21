<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-10-21 jj5 - application controller...
//

if ( mud_is_cli() ) {

  class AppController extends MudControllerCli {


  }
}
else {

  class AppController extends MudControllerWeb {


  }
}
