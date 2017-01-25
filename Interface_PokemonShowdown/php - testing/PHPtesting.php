<?php
class MySqlGuestbookTest extends PHPUnit_Extensions_Database_TestCase
{
    /**
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        $database = 'pokemon_user';
        $user = 'root';
        $password = '';
        $pdo = new PDO('mysql:...', $user, $password);
        return $this->createDefaultDBConnection($pdo, $database);
    }


    public function testAddEntry()
    {
        $user = new User();
        $user->addEntry("hey", "3","3","0.5","6");

        $this->assertEquals($this->getConnection()->getRowCount('wu'), "Inserting failed");
    }

}
?>