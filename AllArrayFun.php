<?php

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

//----------------------------------------------------------------------------------------------------

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
//------------------------------------------------------------------------------------------------------------------

