<?php 
namespace app\Core\config;

use Dotenv\Dotenv;
use PDO;
use PDOException;

class Database {
    private static $servername;
    private static $username;
    private static $password;
    private static $dbname;
    private static $port;
    private static $connexion;
    private static $instance;
    public static $counter = 0;

    public function __construct() {
        $dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../../../');
        $dotenv->load();

        self::$servername = $_ENV['DB_HOST'];
        self::$username = $_ENV['DB_USERNAME'];
        self::$password = $_ENV['DB_PASSWORD'];
        self::$dbname = $_ENV['DB_DATABASE'];
        self::$port = $_ENV['DB_PORT'];

        if (!self::$connexion) {
            try {
                self::$connexion = new PDO(
                    "pgsql:host=" . self::$servername . 
                    ";port=" . self::$port . 
                    ";dbname=" . self::$dbname,
                    self::$username,
                    self::$password
                );
                self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // echo "is succ";
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
    }

    public static function getInstance() {

        if (!self::$instance) {
            self::$instance = new Database();
            self::$counter++;
        }
        return self::$instance;
    }

    public function getConnection() {
     
        return self::$connexion;
    }
}


$db = Database::getInstance()->getConnection();

// if ($db) {
//     echo "<h1>Database </h1>";
// } else {
//     echo "<h1>No Connection </h1>";
// }
?>
