
<?php
    $opcion="inicio";
    
    if(!isset($_GET["opcion"]))
    {
        include("vista/paginas/home.php");
    }

    //Menu
    if($_GET["opcion"]=="home")
    {
        include("vista/paginas/home.php");
    }

    if($_GET["opcion"]=="noso")
    {
        include("vista/paginas/nosotros.php");
    }

    //Header
    if($_GET["opcion"]=="servi")
    {
        include("vista/formularios/frm_servi.php");
    }

    if($_GET["opcion"]=="sesi")
    {
        include("vista/paginas/sesion.php");
    }

    if($_GET["opcion"]=="adm")
    {
        include("vista/paginas/admin.php");
    }
    
    if($_GET["opcion"]=="new")
    {
        include("vista/paginas/estilos_nue.php");
    }


    //Mujer
    if($_GET["opcion"]=="cam_mu")
    {
        include("vista/paginas/mujer/camisas.php");
    }

    if($_GET["opcion"]=="camt_mu")
    {
        include("vista/paginas/mujer/camisetas.php");
    }

    if($_GET["opcion"]=="bus_mu")
    {
        include("vista/paginas/mujer/busos.php");
    }

    if($_GET["opcion"]=="cha_mu")
    {
        include("vista/paginas/mujer/chaquetas.php");
    }

    if($_GET["opcion"]=="fal_mu")
    {
        include("vista/paginas/mujer/faldas.php");
    }

    if($_GET["opcion"]=="pan_mu")
    {
        include("vista/paginas/mujer/pantalones.php");
    }

    if($_GET["opcion"]=="ves_mu")
    {
        include("vista/paginas/mujer/vestidos.php");
    }

    //Hombre
    if($_GET["opcion"]=="cam_ho")
    {
        include("vista/paginas/hombre/camisas.php");
    }

    if($_GET["opcion"]=="camt_ho")
    {
        include("vista/paginas/hombre/camisetas.php");
    }

    if($_GET["opcion"]=="bus_ho")
    {
        include("vista/paginas/hombre/busos.php");
    }

    if($_GET["opcion"]=="cha_ho")
    {
        include("vista/paginas/hombre/chaquetas.php");
    }

    if($_GET["opcion"]=="pan_ho")
    {
        include("vista/paginas/hombre/pantalones.php");
    }

    //Niña
    if($_GET["opcion"]=="cam_nia")
    {
        include("vista/paginas/nina/camisas.php");
    }

    if($_GET["opcion"]=="camt_nia")
    {
        include("vista/paginas/nina/camisetas.php");
    }

    if($_GET["opcion"]=="bus_nia")
    {
        include("vista/paginas/nina/busos.php");
    }

    if($_GET["opcion"]=="cha_nia")
    {
        include("vista/paginas/nina/chaquetas.php");
    }

    if($_GET["opcion"]=="fal_nia")
    {
        include("vista/paginas/nina/faldas.php");
    }

    if($_GET["opcion"]=="pan_nia")
    {
        include("vista/paginas/nina/pantalones.php");
    }

    if($_GET["opcion"]=="ves_nia")
    {
        include("vista/paginas/nina/vestidos.php");
    }

    //Niño
    if($_GET["opcion"]=="cam_nio")
    {
        include("vista/paginas/nino/camisas.php");
    }

    if($_GET["opcion"]=="camt_nio")
    {
        include("vista/paginas/nino/camisetas.php");
    }

    if($_GET["opcion"]=="bus_nio")
    {
        include("vista/paginas/nino/busos.php");
    }

    if($_GET["opcion"]=="cha_nio")
    {
        include("vista/paginas/nino/chaquetas.php");
    }

    if($_GET["opcion"]=="pan_nio")
    {
        include("vista/paginas/nino/pantalones.php");
    }
    //Formularios
    if($_GET["opcion"]=="prod")
    {
        include("vista/formularios/frm_prod.php");
    }
    if($_GET["opcion"]=="cli2")
    {
        include("vista/formularios/frm_cli.php");
    }
    if($_GET["opcion"]=="pqr")
    {
        include("vista/formularios/frm_pqr.php");
    }
    //Descarga de Archivos
    if($_GET["opcion"]=="pdf")
    {
        include("vista/paginas/pdf.php");
    }
     if($_GET["opcion"]=="pdf2")
    {
        include("vista/paginas/pdf2.php");
    }
    if($_GET["opcion"]=="er")
    {
        include("vista/paginas/er.php");
    }
     if($_GET["opcion"]=="er2")
    {
        include("vista/paginas/er2.php");
    }
?>

  

