<?php namespace Models;
    Class Question{
        var $header;
        var $options;
        private $correct_answer;
        static $optionsID = ['A','B','C','D','E'];

        function __construct($header, $options, $correct_answer)
        {
            $this->correct_answer = $correct_answer;
            $this->header = $header;
            $this->options = $options;
        }
        
        function verifyAnswer($answer){
            if(!is_numeric($answer)){
                return self::$optionsID[$this->correct_answer] == $answer;
            }
            else
            {
                return $this->correct_answer == $answer;
            }
        }

        function exibitionFormat($past, $next){
            $exibition_format = "<div class=question><p> $this->header </p></br>";
    
            for($i = 0; $i < count($this->options); $i++){
                
                if($i == $this->correct_answer){
                    $exibition_format = $exibition_format . '<div class="option" id="correct">' . self::$optionsID[$i] . ") ". $this->options[$i] . "</div></br>";
                }else{
                    $exibition_format = $exibition_format . '<div class="option">' . self::$optionsID[$i] . ") ". $this->options[$i] . "</div></br>";
                }
            }
            
            $exibition_format = $exibition_format . '<div class="horizontal-grid end">';

            if($past != 0){
                $exibition_format = $exibition_format . '<form action="admin.php?question=' . $past .  '" method="post" id="past"></form>
                <button type="submit" form="past" value="Submit" class="dark">&#60;</button>';
            }

            if($next != 0){
                $exibition_format = $exibition_format . '<form action="admin.php?question=' . $next . '" method="post" id="next"></form>
                <button type="submit" form="next" value="Submit" class="dark">&#62;</button>';
            }
            
            $exibition_format = $exibition_format . "</div></div>";
            return $exibition_format;
        }

        function formFormat($request){
            $form_format = '<form action="'. $request . '" method="post" id="qst">';
            $form_format = $form_format .'<div class="question"><p>' . $this->header . '</br>';
            
            for($i = 0; $i < count($this->options); $i++){
                $form_format = $form_format . '<div class="option"><input type="radio" name="option" value="' . self::$optionsID[$i] . '" form="qst" id="option_' . $i . '"><label for="option_' . $i . '" data-attr="' . self::$optionsID[$i] . '">' .$this->options[$i] . "</label></div></br>";
            }
            
            $form_format = $form_format . '<input type="submit" value="Submit" id="sub-answer"/></div></form>';
            return $form_format;
        }
    }
?>