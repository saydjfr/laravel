<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>FORM DAFTAR</title>
</head>
<body>
    <h3>Buat Account Baru !</h3>
    <h5>Sign Up Form</h5>
    <form action="/welcome" method="GET">
        <label for="">First Name :</label><br>
        <input type="text" id="firstname" name="firstname"><br><br>
        <label for="">Last Name :</label><br>
        <input type="text" id="lastname" name="lastname"><br><br>
        <label for="">Gender :</label> <br>
        <input type="radio"name="Gender">male <br>
        <input type="radio"name="Gender">female <br>
        <input type="radio"name="Gender">Other <br><br>
        <label for="">Nationality :</label><br>
        <select name="natonality" id="">
            <option value="Indonesia">Indonesia</option>
            <option value="Maroko">Maroko</option>
            <option value="USA">USA</option>
            <option value="Philipines">Philipines</option>
        </select><br><br>
        <label for="">Language Spoken :</label><br>
        <input type="checkbox">Bahasa Indonesia <br>
        <input type="checkbox"> English <br>
        <input type="checkbox"> Other <br><br>
        <label for="">Bio :</label> <br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea>
        <br><br>
            {{-- <a href="/welcome" class="btn btn-success">daftar</a> --}}
        <input type="submit" value="kirim">
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>