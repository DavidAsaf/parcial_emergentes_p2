<html>
<head></head>
<body>
<h1>Probando html</h1>
<pre>
<?php echo print_r($lista) ?>
</pre>

<form action="<?php echo site_url('marcas/insertar');?>" method="get">
    <label>Marca:</label>
    <input type="text" name = "marca">
    <label>Fecha Fundación:</label>
    <input type="text" name = "fecha">
    <label>Propietario:</label>
    <input type="text" name = "propietario">
    <input type="submit">
</form>

</body>

</html>