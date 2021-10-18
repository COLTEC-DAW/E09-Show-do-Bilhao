<?php

class Pergunta
{
    public string $enunciado;
    public array $alternativas;
    public int $indexAlternativaCorreta;

    public function __construct(string $enunciado, array $alternativas, int $indexAlternativaCorreta)
    {
        $this->enunciado = $enunciado;
        $this->alternativas = $alternativas;
        $this->indexAlternativaCorreta = $indexAlternativaCorreta;
    }

    public function Responder($idAlternativa)
    {
        return ($idAlternativa == $this->indexAlternativaCorreta);
    }
}

class Perguntas
{
    private static array $questions;
    private static string $QUESTIONS_FILE = "perguntas.json";

    private static function SyncPerguntas()
    {
        if (file_exists(self::$QUESTIONS_FILE))
        {
            self::$questions = array();
            $questionsAssociativeArray = json_decode(file_get_contents(self::$QUESTIONS_FILE), true);
            if (isset($questionsAssociativeArray))
            {   
                for ($idQuestion = 0; $idQuestion < count($questionsAssociativeArray); $idQuestion++)
                {
                    self::$questions[$idQuestion] = new Pergunta($questionsAssociativeArray[$idQuestion]['enunciado'], $questionsAssociativeArray[$idQuestion]['alternativas'], $questionsAssociativeArray[$idQuestion]['indexAlternativaCorreta']);

                }
            }
        }
    }

    private static function SyncArquivo()
    {
        if (unlink(self::$QUESTIONS_FILE) or fopen(self::$QUESTIONS_FILE, "x"))
        {
            file_put_contents(self::$QUESTIONS_FILE, json_encode(self::$questions));
        }
    }

    public static function GetNumPerguntas()
    {
        self::SyncPerguntas();
        return count(self::$questions);
    }
    
    public static function GetNumAlternativas($id)
    {
        self::SyncPerguntas();
        return count(self::$questions[$id]->alternativas);
    }

    public static function GetEnunciado($id)
    {
        self::SyncPerguntas();
        return self::$questions[$id]->enunciado;
    }

    public static function GetAlternativas($id)
    {
        self::SyncPerguntas();
        return self::$questions[$id]->alternativas;
    }

    public static function GetAlternativa($idPergunta, $idAlternativa)
    {
        self::SyncPerguntas();
        return self::$questions[$idPergunta]->alternativas[$idAlternativa];
    }

    public static function CheckResposta($idPergunta, $idAlternativa)
    {
        self::SyncPerguntas();
        return self::$questions[$idPergunta]->Responder($idAlternativa);
    }
}

$GLOBALS["vetorEnunciados"] =
[
    "PERGUNTA 1",
    "PERGUNTA 2",
    "PERGUNTA 3"
];
$GLOBALS["matrizAlternativas"] =
[
    [
        "ALTERNATIVA 1",
        "ALTERNATIVA 2",
        "ALTERNATIVA 3",
        "ALTERNATIVA 4"
    ],
    [
        "ALTERNATIVA 1",
        "ALTERNATIVA 2",
        "ALTERNATIVA 3",
        "ALTERNATIVA 4"
    ],
    [
        "ALTERNATIVA 1",
        "ALTERNATIVA 2",
        "ALTERNATIVA 3",
        "ALTERNATIVA 4"
    ]
];
$GLOBALS["vetorAlternativasCorretas"] =
[
    1,
    0,
    3
];

define("NUM_ALTERNATIVAS", 4);
define("NUM_PERGUNTAS", 3);

function GetPergunta($id)
{
    return [GetPerguntaEnunciado($id), GetPerguntaAlternativas($id), GetPerguntaAlternativasCorretaId($id)];
}

function GetPerguntaEnunciado($id)
{
    return $GLOBALS["vetorEnunciados"][$id];
}

function GetPerguntaAlternativas($id)
{
    return $GLOBALS["matrizAlternativas"][$id];
}

function GetPerguntaAlternativasCorretaId($id)
{
    return $GLOBALS["vetorAlternativasCorretas"][$id];
}

?>  