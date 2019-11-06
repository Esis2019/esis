<?php
class Conexion{

	public function conectar(){
        try {
            $conn = new PDO("sqlsrv:server = tcp:rsu.database.windows.net,1433; Database = rsu", "rsu", "131288Esis");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            print("Error connecting to SQL Server.");
            die(print_r($e));
        }

        // SQL Server Extension Sample Code:
        $connectionInfo = array("UID" => "rsu", "pwd" => "131288Esis", "Database" => "rsu", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:rsu.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        return $conn;

	}
}
