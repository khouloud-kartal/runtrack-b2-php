<?php 

function find_all_students() : array {

    try {
        $conn = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    } catch (PDOException $e) {
        var_dump($e);
    }

    $req = $conn->prepare("SELECT * FROM student");
    $req->execute();
    $data = $req->fetchAll(\PDO::FETCH_ASSOC);

    return $data;

}

$students = find_all_students();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Grade Id</th>
                <th>Email</th>
                <th>Full Name</th>
                <th>Birth Date</th>
                <th>Gender</th>
            </tr>
        </thead>
        
        <tbody>
        <?php 

        foreach ($students as $key => $value) {

        ?>

            <tr>
                <td><?= $value['grade_id']?></td>
                <td><?= $value['email']?></td>
                <td><?= $value['fullname']?></td>
                <td><?= $value['birthdate']?></td>
                <td><?= $value['gender']?></td>
            </tr> 
            
        <?php } ?>
        </tbody>
    </table>


    
</body>
</html>