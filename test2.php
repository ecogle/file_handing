<!DOCTYPE html>

<?php
    $servername = "localhost";

    try{
        $conn = new PDO("mysql:host=localhost:3307;dbname=test","ecogle","F22R@ptor");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection Failed";
    }
?>
<html>
    <head>
    </head>
    <body>
        <p><?php echo $_POST['test_name']; ?>, Hello there!</p>
        

        <div>
            <select>
                <option value="">
                <?php
                    $stmt = $conn->prepare("SELECT first_name, last_name FROM users;");
                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    $result = $stmt->fetchAll();

                    print_r($result);
                    
                ?>
                </option>
            </select>
        </div>
        

    </body>
</html>