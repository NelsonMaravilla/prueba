// Include Medoo
require_once 'medoo.php';
 
// Initialize
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'name',
	'server' => 'localhost',
	'username' => 'your_username',
	'password' => 'your_password',
	'charset' => 'utf8'
]);
 
// Enjoy
$database->insert('account', [
	'user_name' => 'foo'
	'email' => 'foo@bar.com',
	'age' => 25,
	'lang' => ['en', 'fr', 'jp', 'cn']
]);
 
// Or configure the info from medoo.php, and then
$database = new medoo();