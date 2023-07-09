<?php
/*
  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];
  
    echo '<pre>';
    print_r(array_chunk($friends, 2));
    echo '</pre>';
  
    $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
  
    echo '<pre>';
    print_r(array_chunk($countries, 2, True));
    echo '</pre>';
  
    echo '<pre>';
    print_r(array_change_key_case($countries, CASE_UPPER));
    echo '</pre>';
  
    $keys = ["A", "O", "K"];
    $values = ["Ahmed", "Osama", "Kamal"];
  
    echo '<pre>';
    print_r(array_combine($keys, $values));
    echo '</pre>';
  
    $counting = ["B", "A", "A", "B", "B", "B", "C"];
  
    echo '<pre>';
    print_r(array_count_values($counting));
    echo '</pre>';
*/
//----------------------------------------------------------------------------------------------------
/*
  $family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];
  
    echo '<pre>';
    print_r($family);
    print_r(array_reverse($family, True));
    echo '</pre>';
  
    $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
  
    echo '<pre>';
    print_r(array_flip($countries));
    echo '</pre>';
  
    $counting = [
      "A",
      "B",
      "C",
      [1, 2, 3]
    ];
  
    echo count($counting, 1);
  
    echo '<br>';
  
    $search = ["1", 2, 3, 4];
  
    if (in_array(1, $search, True)) {
      echo "The Element Is Found";
    }
  
    echo '<br>';
  
    $courses = [
      "Javascript" => 95,
      "PHP" => 100,
      "HTML" => 60,
      "CSS" => 65
    ];
  
    if (array_key_exists("PHP", $courses)) {
      echo "The Course Is Found And The Price Is: " . $courses["PHP"];
    }
*/
//------------------------------------------------------------------------------------------------------------------

 /*
    Array Functions

    - array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array

  */

  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Osama", "Eman", 1, "1"];

  echo '<pre>';
  print_r(array_keys($friends));
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, "Osama"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, 1, True));
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_values($countries));
  echo '</pre>';

  $pad = ["A", "B", "C", "D"];

  echo '<pre>';
  print_r(array_pad($pad, 10, "@"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, -10, "@"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, 2, "@"));
  echo '</pre>';

  $product = [10, 5, 2, 10];

  echo array_product($product) . "<br>";

  $sum = [10, 5, 2, 10];

  echo array_sum($sum);
?>

