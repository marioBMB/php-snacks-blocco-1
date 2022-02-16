<?php 

/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. */

$someText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quaerat magnam voluptatum cupiditate tempora. 
        Cupiditate nulla harum repellendus. 
        Quam iusto nihil accusantium voluptatum unde ipsam, nisi distinctio deserunt saepe ex fugiat rem officiis nulla error ullam laboriosam cum nemo sunt?
        Necessitatibus itaque, reiciendis et, dolorum porro, sed voluptatum totam molestias tenetur facilis mollitia doloribus commodi tempora in? 
        Alias sed numquam aperiam accusamus quibusdam asperiores eveniet, dignissimos reprehenderit odit debitis porro quod labore?
        Perspiciatis illum, aut animi unde voluptas ipsa ad repudiandae eum recusandae atque, repellat, similique voluptatum neque magni eius dolore adipisci praesentium ratione impedit deleniti earum!
        Eligendi cumque pariatur vero.";

$paragraphs = [];


    function findParagraphs($text){

        $html = "";
        $firstParIndex = 0;
        $lastParIndex = 0;
        $endingParChars = ['.', '!', '?'];
        $paragraphs = [];

        $paragraphsSize = substr_count($text, ".") + substr_count($text, "!") + substr_count($text, "?");

        while (sizeof($paragraphs) < $paragraphsSize){
            
            $lastParIndex = multi_strpos($text, $endingParChars);
            
            if ($lastParIndex !== false){
                $paragraph = substr($text, $firstParIndex, $lastParIndex + 1 - $firstParIndex);
                array_push($paragraphs, $paragraph);
                $text = substr($text, $firstParIndex, strlen($text) - $lastParIndex + 1);
                $firstParIndex = 0;
            }
        }
        if (empty($paragraph)){
            $paragraph.push($text);
        }

        return $paragraphs;
    }


    function multi_strpos($string, $check) {
        
        $check = (array) $check;
        $first_occurrence_pos = strlen($string) + 1; //oltre

        foreach ($check as $s) {
            
            $pos = strpos($string, $s);

            if ($pos !== false && $pos < $first_occurrence_pos ) {
                
                $first_occurrence_pos = $pos;
            }
        }
        return $first_occurrence_pos == strlen($string) + 1 ? false : $first_occurrence_pos;
    }
 


    function wrapParagraphsText(){


    }

?>