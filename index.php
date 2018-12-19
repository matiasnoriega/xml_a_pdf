<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parser XML a PDF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="crear_pdf.php" method="POST" enctype="multipart/form-data">
        <label for="archivo">Archivo XML</label>
        <input type="file" name="archivo" accept="text/xml">
        <input type="submit" value="Cargar">
    </form>
</body>
</html>