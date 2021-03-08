<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>

<form action="validation_post.php" method="POST">
    Name          : <input type="text" name="name"></br>
    Email         : <input type="text" name="email"></br>
    Password      : <input type="text" name="pass"></br>
    Tgl Lahir     : <input type="date" name="date" required></br>
    Program Studi : <select name="dropdown">
                    <option value="Manajemen" selected>Manajemen</option>
                    <option value="Computer" selected>Computer</option>
                    <option value="Sisteminfo" selected>Sisteminfo</option>
                    </select></br>
    Alamat        :<br> <textarea name="inputan" cols="30" rows="10"></textarea></br>
    Handphone     : <input type="text" name="hp"></br>
    Jenis Kelamin : 

        <input type="radio"  name="rd" id="rd1"><label for="rd1">Laki-laki</label>
        <input type="radio" name="rd" id="rd2"><label for="rd2">Perempuan</label></br>
        <input name="btnSubmit" type="submit" > 
       <input type="button" value="cancel">
     </form>


</main>

</body>
</html>