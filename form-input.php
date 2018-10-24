<!DOCTYPE html>
<html>
    <head>
        <title>Ajax Jquery - inputan</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>id</td><td><input type="number" onkeyup="isi_otomatis()" name="id"></td></tr>
                <tr><td>username</td><td><input type="text" name="username"></td></tr>
                <tr><td>password</td><td><input type="text" name="password"></td></tr>
                <tr><td>level</td><td><input type="text" name="level"></td></tr>
                <tr><td>fullname</td><td><input type="text" name="fullname"></td></tr>
                    </td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>