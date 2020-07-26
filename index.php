<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/>
            <script type="text/javascript" src="js/main.js"></script>
        </head>
        <body>
            <form action="" method="POST">
                <input type="text" id="phrase" name="phrase" placeholder="Buscar boletim" >
                <input type="submit" value="Buscar boletim">
            </form>
            <form action="" method="POST">
                <input type="text" id="phrase" name="phrase" value="">
                <input type="submit" value="Todos Boletins">
            </form>
            <div id="lista" style="background-color: blue;">Lista de Boletins
                <?php
                    $boletins[0]['titulo'] = "Janeiro teve fortes chuvas";
                    $boletins[0]['subtitulo'] = "Este é um subtitulo";
                    $boletins[1]['titulo'] = "Abril foi o mês com maior ocorrência de chuvas";
                    $boletins[1]['subtitulo'] = "Este é um subtitulo";
                    $boletins[2]['titulo'] = "Agosto teve fortes chuvas";
                    $boletins[2]['subtitulo'] = "Este é um subtitulo";
                    $boletins[3]['titulo'] = "Maio teve fortes chuvas";
                    $boletins[3]['subtitulo'] = "Este é um subtitulo";
                    $boletins[4]['titulo'] = "Junho teve fortes chuvas";
                    $boletins[4]['subtitulo'] = "Este é um subtitulo";
                    
                    if($_POST['phrase']!=null && $_POST['phrase']!=""){
                        for($i=0;$i<=4;$i++){
                            if(strIpos($boletins[$i]['titulo'],$_POST['phrase'])>-1){
                                echo $boletins[$i]['titulo'];echo "<br>";
                                echo $boletins[$i]['subtitulo'];echo "<br>";

                            }
                        }
                    }else{
                        for($i=0;$i<=4;$i++){
                            echo $boletins[$i]['titulo'];echo "<br>";
                            echo $boletins[$i]['subtitulo'];echo "<br>";

                        }
                    }
                

                   

                ?>
                </div>
        </body>
    </html>