<?php
ini_set("max_execution_time", 0);

$dir="/";//set path of folder where to save file
if(!(file_exists($dir))) {
    mkdir($dir, 0777);
}

$host = "localhost"; //host name
$username = "root"; //username
$password = ""; // your password
$dbname = "fleet"; // database name

backup_tables($host, $username, $password, $dbname);

function backup_tables($host,$user,$pass,$name,$tables = '*')
{
    $con = mysql_connect($host,$user,$pass);
    mysql_select_db($name,$con);

//get all of the tables
    if($tables == '*')
    {
        $tables = array();
        $result = mysql_query('SHOW TABLES');
        while($row = mysql_fetch_row($result))
        {
            $tables[] = $row[0];
        }
    }
    else
    {
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }
    $return = "";

//cycle through
    foreach($tables as $table)
    {
        $result = mysql_query('SELECT * FROM '.$table);
        $num_fields = mysql_num_fields($result);
//$return.= 'DROP TABLE '.$table.';';
        $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
        $return.= "\n".$row2[1].";\n";

        while($row = mysql_fetch_row($result))
        {
            $return.="\n";
            $return.= 'INSERT INTO '.$table.' VALUES(';
            for($j=0; $j<$num_fields; $j++)
            {
                $row[$j] = addslashes($row[$j]);
                $row[$j] = preg_replace("#n#","n",$row[$j]);
                if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                if ($j<($num_fields-1)) { $return.= ','; }
            }
            $return.= ");";
        }
        $return.="\n";
    }


    date_default_timezone_set('Africa/Nairobi');
//save file
    $way=$dir.'backup-'.date('Y-m-d H:i:s').'.sql';
    $handle = fopen($way,'w+');
    fwrite($handle,$return);
    fclose($handle);
    echo $way;
}

?>