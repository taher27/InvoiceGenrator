<!DOCTYPE html>
    <head>
        <title>Add Customer</title>
        <link rel="stylesheet" type="text/css" href="./css/registerpage.css" />
    </head>
    <body style="background: url('./images/bck4.jpg');">
        <div class="loginbox">
                <h1>Add Customer</h1>
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <p>Name</p>
                    <input type="text" name="name" placeholder="Username" />

                    <p>Address</p>
                    <input type="text" name="address" placeholder="Area" />
                    
                    <p>Number</p>
                    <input type="number" name="number" placeholder="+91 - " />
                    
                    <p>GST</p>
                    <input type="text" name="gst" placeholder="GST" />
                    
                    <input type="submit" name="submit1" value="Add Customer" /><br>
                   
                </form>

        </div>
    </body>
</html>

<?php
if(isset($_POST["submit1"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "saifeehardware";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $Name = $_POST['name'];
    $Add = $_POST['address'];
    $Num = $_POST['number'];
    $Gst = $_POST['gst'];

    $sql = "SELECT * FROM customers where gst = '$Gst'";
    if ($conn->query($sql) === TRUE) {
        echo "User with the same Registerd id exist";
    }
    else {
        $sql = "INSERT INTO customers VALUES('','$Name', '$Add', $Num, '$Gst')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        header("refresh:1; url=index.php");
    }
}
?>
