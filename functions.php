<?php

require_once('config.php');

//Open Database Connection
function db_open()
{       
    try
    {
        $db = new PDO("mysql:dbname=".DB_DATABASE.";host=".DB_HOSTNAME.";port=".DB_PORT,DB_USERNAME,DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         return $db;
    }
    catch (PDOException $e)
    {
        echo("A fatal error has occurred.  Please contact support.");                
    }
    return null;
}

//Close Database Connection
function db_close($db)
{
    $db = null;
}

//Register User
function register_user($firstname, $lastname, $email, $username, $password, $company)
{
    $db = db_open();
    $stmt = $db->prepare("INSERT INTO fn_users (`first_name`, `last_name`, `email`, `username`, `password`, `company_name`) VALUES (:firstname, :lastname, :email, :username, :password, :company)");
    $stmt->bindParam(":firstname", $firstname, PDO::PARAM_STR, 45);
    $stmt->bindParam(":lastname", $lastname, PDO::PARAM_STR, 45);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR, 45);
    $stmt->bindParam(":username", $username, PDO::PARAM_STR, 45);
    $stmt->bindParam(":password", $password, PDO::PARAM_STR, 45);
    $stmt->bindParam(":company", $company, PDO::PARAM_STR, 45);
    $stmt->execute();
    db_close($db);    
    return true;
}

function create_country_dropdown()
{
    $db = db_open();
    $stmt = $db->prepare("SELECT * from countries");
    $stmt->execute();
    $array = $stmt->fetchAll();
    db_close($db);
    echo "<select name='country' id='country' class='form-control'>";
    echo "<option value=\"\">---Country---</option>\n";
    foreach($array as $country)
    {
        echo "<option value=\"".$country['idCountry']."\">".htmlspecialchars($country['countryName'])."</option>\n";
    }
    echo "</select>";
}

?>