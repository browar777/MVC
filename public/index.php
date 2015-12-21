<?PHP
session_start();

define('ROOT','http://localhost/wwwv2.0/mvc/public/lib');
define('HOME','http://localhost/wwwv2.0/mvc/public');

require '../app/models/DB.php';
require '../app/models/Token.php';
require '../app/models/Shift.php';
require '../app/Controller.php';
require_once '../app/App.php';





new App;




?>

