<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        if (isset($_REQUEST['digito'])) {
           $oportunidades = $_REQUEST['oportunidades'];
          
           if($oportunidades<4){
            $pega = $_REQUEST['pega'];
            $pega = $pega . $_REQUEST['digito'];

            echo $pega;
           }
        }
        ?>
        <table>
            <tr>
                <td><a href="index.php?digito=1&oportunidades=<?= $oportunidades=1; ?>&pega=<?= $pega ?>"><button>1</button></a></td>
                <td><a href="index.php?digito=2&oportunidades<?= $oportunidades=1;?>&pega=<?=$pega?>"><button>2</button></a></td>
                <td><a href="index.php?digito=3&oportunidades<?= $oportunidades=1; ?>&pega=<?=$pega?>"><button>3</button></a></td></tr>
            <tr>
                <td><a href="index.php?digito=4&oportunidades<?= $oportunidades=1; ?>&pega=<?=$pega?>"><button>4</button></a></td>
                <td><a href="index.php?digito=5&oportunidades<?= $oportunidades=1;?>&pega=<?=$pega?>"><button>5</button></a></td>
                <td><a href="index.php?digito=6&oportunidades<?= $oportunidades=1;?>&pega=<?=$pega?>"><button>6</button></a></td></tr>

            <tr>
                <td><a href="index.php?digito=7&oportunidades<?= $oportunidades=1; ?>&pega=<?=$pega?>"><button>7</button></a></td>
                <td><a href="index.php?digito=8&oportunidades<?= $oportunidades=1; ?>&pega=<?=$pega?>"><button>8</button></a></td>
                <td><a href="index.php?digito=9&oportunidades<?= $oportunidades=1;?>&pega=<?=$pega?>"><button>9</button></a></td></tr>
        </table>



    </body>
</html>
