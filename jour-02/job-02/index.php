<?php 

function find_one_student(string $email) : array{

    try {
        $conn = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $req = $conn->prepare("SELECT * FROM student WHERE email = :titre");
    $req->execute([':titre' => $email]);
    $data = $req->fetchAll(\PDO::FETCH_ASSOC);

    return $data;

}

$email = $_GET['input-email-student'];

if(isset($_GET['submit'])){
    $infos = find_one_student($email);
    // var_dump($infos);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 02</title>
</head>
<body>

    <form action="index.php" method="get">
        <label for="email" id="email">Email Student</label>
        <input type="text" name="input-email-student" id="email-student">
        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>