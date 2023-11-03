<h1>
    <?php
    #phpinfo();
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    $numero3=$_GET['numero3'];

    $mayor=max($numero1,$numero2,$numero3);
    echo "El Nº mayor es el $mayor";
    ?>
    </h1>