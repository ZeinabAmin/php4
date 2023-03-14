<!DOCTYPE html>
<?Php 

print_r($_COOKIE); //Array ( [lang] => english [PHPSESSID] => 0ulkrrf2420partpiir6to2vo7 )

// if($_COOKIE['lang']=='english'){


// }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<script>

localStorage.setItem('language','arabic');

document.cookie = "lang = english"



</script>
</body>

</html>