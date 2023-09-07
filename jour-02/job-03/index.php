<?php

    function insert_student(string $email, string $fullname, string $gender, DateTime $birthdate, int $gradeId) : array{
        try {
            $conn = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    
        $req = $conn->prepare("INSERT INTO student (grade_id, email, fullname, birthdate, gender) VALUES (:gradeId, :email, :fullname, :birthdate, :gender)");

        $birthdate = $birthdate->format('Y-m-d');
        
        $req->execute([
            ':gradeId' => $gradeId,
            ':email' => $email,
            ':fullname' => $fullname,
            ':birthdate' => $birthdate,
            ':gender' => $gender
        ]);

        $data = $req->fetchAll(\PDO::FETCH_ASSOC);
    
        return $data;
    }

    if(isset($_POST['submit'])){

        $email = $_POST['input-email'];
        $fullname = $_POST['input-fullname'];
        $gender = $_POST['input-gender'];
        $birthdate = new DateTime($_POST['input-birthdate']);
        $gradeId = $_POST['input-grade_id'];

        insert_student($email, $fullname, $gender, $birthdate, $gradeId);
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03</title>
</head>
<body>

    <form action="index.php" method="post">
        <label for="input-email" id="input-email">Email</label>
        <input type="email" name="input-email" id="email">

        <label for="input-fullname" id="input-fullname">Fullname</label>
        <input type="text" name="input-fullname" id="fullname">

        <label for="input-gender" id="input-gender">Gender</label>
        <select name="input-gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label for="input-birthdate">Birth Date</label>
        <input type="date" name="input-birthdate" id="birthdate">

        <label for="input-grade_id">Grade Id</label>
        <input type="number" name="input-grade_id" id="gradeId">

        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>