<?php
include_once 'DBConnection.php';
class DBQuery
{
	public static function IUD($query)
	{
		mysqli_query(DBConnection::getdbconnection(), $query);
	}
	public static  function SetDropdown($query, $selectedColumn)
	{
		$command = mysqli_query(DBConnection::getdbconnection(), $query);
		echo "<select>";
		while ($rows = $command->fetch_assoc()) {
			echo ("<option>" . $rows[$selectedColumn] . "</option>");
		}
		echo "</select>";
	}
	public static function SetDiv($query, $PHPFiles)
	{
		$command = mysqli_query(DBConnection::getdbconnection(), $query);
		if ($command->num_rows > 0) // Counting Row kapag may laman
		{
			while ($row = $command->fetch_assoc()) {
				include $PHPFiles;
			}
		}
	}

	public static function TotalUsers()
	{
		$count = 0;
		$sql = "SELECT * from user";
		if($command = mysqli_query(DBConnection::getdbconnection(), $sql)){
			$count = mysqli_num_rows($command);
		} else {
			$count = 0;
		}

		return $count;		
	}

	public static function TotalAdmin()
	{
		$count = 0;
		$sql = "SELECT * from admin";
		if ($command = mysqli_query(DBConnection::getdbconnection(), $sql)) {
			$count = mysqli_num_rows($command);
		} else {
			$count = 0;
		}

		return $count;
	}

	public static function TotalCareer()
	{
		$count = 0;
		$sql = "SELECT * from talent_network";
		if ($command = mysqli_query(DBConnection::getdbconnection(), $sql)) {
			$count = mysqli_num_rows($command);
		} else {
			$count = 0;
		}

		return $count;
	}
}
