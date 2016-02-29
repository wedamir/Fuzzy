<?php

namespace Wedamir;

class Fuzzy
{

   /**
   * @var string $term
   * @return array
   */
   public function generateTerms($term)
   {
      $fuzzyTwist = [];
			$fuzzyDelete = [];
			$fuzzySubstitution = [];
			$fuzzyInsertation = [];
      $fuzzyTerms = [];

      $splitWords = explode(' ', $term);
			$countWords = count($splitWords);
			foreach($splitWords as $key => $term)
			{
    			   $fuzzyTwist[$key] = [];
    			   $fuzzyDelete[$key] = [];
    			   $fuzzySubstitution[$key] = [];
    			   $fuzzyInsertation[$key] = [];
    			   for ($i = 0; $i < strlen($term)+1; $i++) {
      			  if ($i < strlen($term)-1 )
      			     array_push($fuzzyTwist[$key],substr($term,0,$i).substr($term, $i+1, 1).substr($term, $i, 1).substr($term, $i+2));
              if ($i < strlen($term)) {
                array_push($fuzzyDelete[$key], substr($term,0,$i)		.substr($term, $i+1));
      			    array_push($fuzzySubstitution[$key], substr($term,0,$i).'_'.substr($term, $i+1));
              }
    			    array_push($fuzzyInsertation[$key], substr($term,0,$i).'_'.substr($term, $i,1).substr($term, $i+1));
      			}
			}
      if ($countWords === 1)
						return array_merge($fuzzyTwist[0], $fuzzyDelete[0], $fuzzySubstitution[0], $fuzzyInsertation[0]);

      foreach ($fuzzyTwist[0] as $fuzzyWord) {
        $fuzzyTerms = array_merge($fuzzyTerms, $this->concatinate($fuzzyWord, $fuzzyTwist));
      }

      foreach ($fuzzyDelete[0] as $fuzzyWord) {
         $fuzzyTerms = array_merge($fuzzyTerms, $this->concatinate($fuzzyWord, $fuzzyDelete));
		  }
      foreach ($fuzzySubstitution[0] as $fuzzyWord){
         $fuzzyTerms = array_merge($fuzzyTerms, $this->concatinate($fuzzyWord, $fuzzySubstitution));
      }
      foreach ($fuzzyInsertation[0] as $fuzzyWord) {
         $fuzzyTerms = array_merge($fuzzyTerms, $this->concatinate($fuzzyWord, $fuzzyInsertation));
      }

      foreach($fuzzyTerms as $key => $fraze) {
		          if (str_word_count($fraze) < $countWords)
		              unset($fuzzyTerms[$key]);
      }

      return $fuzzyTerms;

   }

   /**
   * @param strting $word
   * @param array $words
   * @return array
   */
   function concatinate($word, $words)
   {
       $concatArray = [];
       for($i=1; $i < count($words); $i++ ) {
           if($i === 1) {
              foreach ($words[$i] as $wrd) {
                  $frase = $word . ' '. $wrd;
                  array_push ($concatArray, $frase);
               }
           } else {
               foreach ($concatArray as $concatinatedStr) {
                   foreach ($words[$i] as $wrd1) {
                      $frase = $concatinatedStr . ' '. $wrd1;
                      array_push ($concatArray, $frase);
                   }
               }
           }

       }
       return $concatArray;
   }

}
