<?php

 $a = file_get_contents("http://forex.cbm.gov.mm/api/latest");
 echo $a;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<script>
    let rate = <?php echo $a; ?>;
</script>
</body>
</html>