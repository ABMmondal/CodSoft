<?<php>
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

$conn =new mysqli('localhost','root', '' ,'test');
if($conn->connect_error){
    die('Connection Error : ' . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(Name,Email,Message) values(?,?,?)");
        $stmt->bind_param("ssss",$Name,$Email,$Message);
        $stmt->execute();
        echo "done"
        $stmt->close();
        $conn->close();



    }
</php>