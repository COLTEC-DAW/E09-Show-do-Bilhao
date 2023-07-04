<?php 

    $enunciados[] = "Lipossomas são vesículas nanométricas, formadas de bicamadas esféricas e concêntricas em torno de um compartimento aquoso, que podem ser utilizadas como carreadores de fármacos. Lipossomas com ligantes 
    sítio-específicos em sua superfície são capazes de distribuir o fármaco diretamente para a célula-alvo. A estrutura celular responsável pela especificidade no reconhecimento e adsorção dos lipossomas sítio-específicos é o:";
    $enunciados[] = "Tilacoides são formados por um complexo membranoso composto por pequenas bolsas discoidais achatadas, empilhadas e interligadas. O espaço entre essas membranas é preenchido pelo estroma, onde são encontrados DNA, RNA, ribossomos e enzimas.
    Essa estrutura descrita está presente no(a):";
    $enunciados[] = "Os ursos, por não apresentarem uma hibernação verdadeira, acordam por causa da presença de termogenina, uma proteína mitocondrial que impede a chegada dos prótons até a ATP sintetase, gerando calor. 
    Esse calor é importante para aquecer o organismo, permitindo seu despertar.";
    $enunciados[] = "A terapia antirretroviral (TARV) consiste na associação de fármacos utilizados para o tratamento de doenças infecciosas causadas por retrovírus, com o objetivo de melhorar a qualidade de vida do paciente, preservar o sistema imunológico, reduzir a carga viral e diminuir as taxas de morbidade e mortalidade. 
    Sabendo que muitos desses fármacos atuam como inibidores enzimáticos, a ação inicial da TARV contra o retrovírus impedirá a realização de síntese de:";
    $enunciados[] = "De acordo com o fixismo, é correto afirmar que ";

    $alternativas[0][] = "A - Citoplasma";
    $alternativas[0][] = "B - Ribossomo";
    $alternativas[0][] = "C - Glicocálix";
    $alternativas[0][] = "D - Nucléolo";

    $alternativas[1][] = "A - Retículo Endoplasmático Rugoso";
    $alternativas[1][] = "B - Réticulo Endoplasmático Liso";
    $alternativas[1][] = "C - Mitocôndria";
    $alternativas[1][] = "D - Cloroplasto";
    
    $alternativas[2][] = "A - Glicólise";
    $alternativas[2][] = "B - Fosforolação oxidativa";
    $alternativas[2][] = "C - Ciclo do ácido cítrico";
    $alternativas[2][] = "D - Oxidação do piruvato";

    $alternativas[3][] = "A - DNA viral";
    $alternativas[3][] = "B - RNA viral";
    $alternativas[3][] = "C - Proteínas virais";
    $alternativas[3][] = "D - Fosfolipídios virais";

    $alternativas[4][] = "A - as espécies permanecem mutáveis ao longo do tempo.";
    $alternativas[4][] = "B - as variações do meio ambiente levam o indivíduo a sentir necessidade de se adaptar.";
    $alternativas[4][] = "C - as espécies vivas atualmente são idênticas às do passado.";
    $alternativas[4][] = "D - os organismos mais bem adaptados ao meio têm maiores chances de sobrevivência. ";

    $respostas[] = 2;
    $respostas[] = 3;
    $respostas[] = 1;
    $respostas[] = 0;
    $respostas[] = 2;

    function carregaPergunta($id)
    {
        global $enunciados, $alternativas;
        $questao = [];
        
        $questao[] = $id + 1;
        $questao[] = $enunciados[$id];
        
        foreach ($alternativas[$id] as $alternativa) {
            $questao[] =  $alternativa;
        }
        return $questao;
    }


?>