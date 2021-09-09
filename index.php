<?php require_once 'includes/cabecera.php' ?>
 <?php require_once 'includes/conexion.php'; ?>  
<?php require_once 'includes/lateral.php'; ?>

    <!--MAIN-->
    <div id="principal">
        
        <center><h1>Principal</h1></center> 
        <br>
        <br>
        <h1><font color="BACK"><I>receta del chessecake de maracuyá</I></FONT></h1><br>

<p>
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Xt1I6XaByuc" 
              title="YouTube video player" frameborder="0" allow="accelerometer; 
              autoplay; clipboard-write; encrypted-media; gyroscope; 
              picture-in-picture" allowfullscreen></iframe>
</p>
    <?php 
        $entradas = conseguirEntradas($db, true);
        if(!empty($entradas)):
            while($entrada = mysqli_fetch_assoc($entradas)):
    ?>
                <article class="entrada">
                    <!--<?php var_dump($entrada); ?>-->
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?= $entrada['continente'].' | '.$entrada['fecha']?></span>
                        <p><?=substr($entrada['descripcion'], 0, 180). "..."?></p>
                    </a>
                </article>

    <?php
            endwhile;
        endif;
    ?>

        <div id="ver-todas">
            <a href="entradas.php">Ver todas las entradas</a>
        </div>

    </div> <!-- fin principal-->      

<?php require_once 'includes/pie.php';  ?>