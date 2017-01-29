<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 1</title>
    <meta charset="utf-8" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>

    <?php
        $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200348171', 'gc200348171', 'PASSWORD_GOES_HERE');
	
        $sql = "SELECT city, nickname, division FROM teams";
        $cmd = $conn->prepare($sql);
        $cmd->execute();
        $teams = $cmd->fetchAll();
    
        echo '<table class="table table-striped table-hover"><tr><th>City</th><th>Nickname</th><th>Division</th></tr>';
    
        foreach ($teams as $team){
            echo '<tr><td>' . $team['city'] . '</td><td>' . $team['nickname'] . '</td><td>' . $team['division'] . '</td></tr>';
        }
    
        echo '</table>';

        $conn = null;    
    ?>

        <!-- Latest   jQuery -->
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>