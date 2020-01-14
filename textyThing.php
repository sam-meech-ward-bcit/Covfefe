<?php

function covfeferizer($input) {
  $words = explode(' ', $input);
  $index = array_rand($words);
  $words[$index] = 'Covfefe';
  $output = implode(' ', $words);
  return $output;
}

?>