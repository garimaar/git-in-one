<?php
include "dog.php";
include "cat.php";

$cat = new cat\cat();
$cat->name = " sheela";

$dog = new dog\dog();
$dog->name= "tommy";
?>

<html>
<body>

<?php $cat->message(); ?>
<?php $dog->message(); ?>

</body>
</html>

