<?php
// This class check for miss spelled words form a dictionry csv file
// there are some bug, find the bugs with the class below and fix them.
// The expected otuput is "the quick brown fox jumps over the lazy dog"
// There are a total of 4 issues.

class SpellCheck {

    private $dictionary;

    private $file;

    function __construct($file){
        $this->file = $file;
        // $this->file passed to load dictionary.
        $this->loadDictionary($this->file);
    }

    // File variable passed to function.
    private function loadDictionary($file){
        $handle = fopen($file, "r");
        $dictionary = [];
        if (!empty($handle)){
            while (($data = fgetcsv($handle, 6000, ",")) !== false) {
                    $wrong = $data[0];
                    $correct = $data[1];
                    $dictionary[$wrong] = $correct;
            }
            fclose($handle);
            $this->dictionary = $dictionary;
            return true;
        }else{
            return false;
        }
    }

    public function checkWord($word){
        if(array_key_exists($word, $this->dictionary)){
            return $this->dictionary[$word];
        }else{
            // echo changed to return. 
            return $word;
        }
    }

    public function checkSentence($sentence){
        $words = explode(" ", $sentence);
        $checkedSentence = "";
        $firstWord = true;
        foreach($words as $word){
            if($firstWord === true){
                $checkedSentence .= $this->checkWord($word);
                // $firstWord false added to if instead of end.
                $firstWord = false;            
            }else{
                $checkedSentence .= " " . $this->checkWord($word);
            }
        }
        // return taken outside of the foreach.
        return $checkedSentence;
    }
}

$checkMe = "the qick brown fpx jumps over the lazy dawg";

$spellCheck = new SpellCheck("dictionary.csv");

echo $spellCheck->checkSentence($checkMe);