<?php
  date_default_timezone_set('America/Halifax');
  $_CONFIG['time'] = date('h:i:sA');
  $_CONFIG['datetime'] = date('d/m/Y - h:i:sA');
  $_CONFIG['year'] = date('Y');

  $_CONFIG['sitename'] = 'VaughansDev';
  $_CONFIG['description'] = '';
  $_CONFIG['logo'] = 'assets/img/logo.png';
  $_CONFIG['url'] = 'http://localhost';

  $_CONFIG['dbhost'] = 'localhost';
  $_CONFIG['dbuser'] = 'root';
  $_CONFIG['dbpass'] = '';
  $_CONFIG['dbname'] = 'vaughanhd';

  $dbcon = new mysqli($_CONFIG['dbhost'], $_CONFIG['dbuser'], $_CONFIG['dbpass'], $_CONFIG['dbname']);
  if ($dbcon->connect_errno) {
    die("Connect failed: ". $db->connect_error);
  }
