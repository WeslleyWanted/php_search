<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/>
        </head>
        <body>
            <p>Boletins<p>
            <form action="" method="POST">
                <input type="text" id="phrase" name="phrase" placeholder="Buscar boletim" >
                <input type="submit" value="Buscar boletim">
            </form>
            <br>
            <div id="lista" style="background-color: blue;">
                <?php
                    $boletins[0]['titulo'] = "Janeiro de 2020 teve fortes chuvas";
                    $boletins[0]['subtitulo'] = "Este é um subtitulo";
                    $boletins[1]['titulo'] = "Abril foi o mês com maior ocorrência de chuvas";
                    $boletins[1]['subtitulo'] = "Este é um subtitulo";
                    $boletins[2]['titulo'] = "Agosto de 2019 teve fortes chuvas";
                    $boletins[2]['subtitulo'] = "Este é um subtitulo";
                    $boletins[3]['titulo'] = "Maio teve fortes chuvas";
                    $boletins[3]['subtitulo'] = "Este é um subtitulo";
                    $boletins[4]['titulo'] = "Junho teve fortes chuvas";
                    $boletins[4]['subtitulo'] = "Este é um subtitulo";

                    if(isset($_POST['phrase']) && $_POST['phrase']!=""){
                        $count=0;
                        for($i=0;$i<=4;$i++){
                            if(strIpos($boletins[$i]['titulo'],$_POST['phrase'])>-1){
                                echo $boletins[$i]['titulo'];echo "<br>";
                                echo $boletins[$i]['subtitulo'];echo "<br>";
                                $count++;
                            }
                        }
                        if($count==0){
                            echo "Não foram encontrados bolentins.<br>";
                        }
                    }
                    else{
                        for($i=0;$i<=4;$i++){
                            echo $boletins[$i]['titulo'];echo "<br>";
                            echo $boletins[$i]['subtitulo'];echo "<br>";
                        }
                    }
                ?>
            </div>
        </body>
    </html>