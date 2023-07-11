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
/*
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
*/
//---------------------------------------------------------------------------------------
/*
    Array Functions

    --- Every Array Has An Internal Pointer To Its "Current" Element
    --- Which Is Initialized To The First Element.
    --- Functions Returns Value Of Array Element That's Currently Pointed By The Internal Pointer

    - current(Array[Required]) => Return The Current Element In An Array
    - next(Array[Required]) => Advance The Internal Pointer
    - prev(Array[Required]) => Rewind The Internal Pointer
    - reset(Array[Required]) => Put The Internal Pointer On First Element
    - end(Array[Required]) => Put The Internal Pointer On Last Element

  */
/*
  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman"];

  echo current($friends) . "<br>"; // "Osama"
  echo next($friends) . "<br>"; // "Ahmed"
  echo current($friends) . "<br>"; // "Ahmed"
  echo next($friends) . "<br>"; // "Sameh"
  echo current($friends) . "<br>"; // "Sameh"
  echo prev($friends) . "<br>"; // "Ahmed"
  echo reset($friends) . "<br>"; // "Osama"
  echo current($friends) . "<br>"; // "Osama"
  echo end($friends) . "<br>"; // "Eman"
  echo current($friends) . "<br>"; // "Eman"
*/
//------------------------------------------------------------------------------------------------------------------

/*
    Array Functions

    - array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In Fisrt Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array
  */

/*
  $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $merge_two = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_merge($merge_one, $merge_two));
  echo '</pre>';

  $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
  $merge_four = [40 => "Python", "10" => "Go"];

  echo '<pre>';
  print_r(array_merge($merge_three, $merge_four));
  echo '</pre>';

  $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $replace = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_replace($main, $replace));
  echo '</pre>';

  echo '<pre>';
  print_r(array_replace($merge_three, $merge_four));
  echo '</pre>';

  $nums = ["A", "B", "C", "D"];

  echo $nums[array_rand($nums)] . "<br>";

  echo '<pre>';
  print_r(array_rand($nums, 3));
  echo '</pre>';

  shuffle($nums);

  echo '<pre>';
  print_r($nums);
  echo '</pre>';
*/
//------------------------------------------------------------------------------------------------------------------

/*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element In The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
  */

/*
  $chars = ["A", "B", "C", "D"];

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $first = array_shift($chars);

  echo "$first<br>"; // "A"

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $last = array_pop($chars);

  echo "$last<br>"; // "D"

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_push($chars, "X", "Y", "Z");

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_push($chars, "1");

  $chars[] = "1";

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_unshift($chars, "One", "Two", "Three");

  echo '<pre>';
  print_r($chars);
  echo '</pre>';
*/
//------------------------------------------------------------------------------------------------------------------

/*
    Array Functions

    - array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Have String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position

  */

/*
  $chars = ["A", "B", "C", "D", "E", "F", "G"];
  $chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
  $chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

  echo '<pre>';
  print_r(array_slice($chars, 2));
  print_r(array_slice($chars, -4));
  print_r(array_slice($chars, 2, 3));
  print_r(array_slice($chars, 2, -2));
  echo '</pre>';

  echo '<pre>';
  print_r(array_slice($chars_with_string_keys, 0, 2));
  print_r(array_slice($chars_with_numeric_keys, 0, 2));
  print_r(array_slice($chars_with_numeric_keys, 0, 2, True));
  echo '</pre>';

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $nums = [10, 20, 30, 40, 50, 60, 70];

  echo '<pre>';
  print_r(array_splice($nums, 2, 1, ["One", "Two"]));
  print_r($nums);
  echo '</pre>';
*/
//------------------------------------------------------------------------------------------------------------------

/*
    Array Functions

    - sort(Array[Required], Flag[Optional])
    --- Sort An Indexed Array In Ascending Order

    - rsort(Array[Required], Flag[Optional])
    - Sort An Indexing Array In Descending Order

    - asort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required], Flag[Optional])
    --- Sorts An Array By Using A "Natural Order" Algorithm

    Practice
    -- Flags
    -- Our Own Sorting Function

  */
/*
  $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];

  sort($names);

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  rsort($names);

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  $countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

  asort($countries);

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  arsort($countries);

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  $codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];

  ksort($codes);

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  krsort($codes);

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  $files = ["Photo1.png", "Photo20.png", "Photo3.png"];

  sort($files);

  echo '<pre>';
  print_r($files);
  echo '</pre>';

  natsort($files);

  echo '<pre>';
  print_r($files);
  echo '</pre>';
*/
//------------------------------------------------------------------------------------------------------------------

/*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

  */
/*
  function add_title($fname, $lname) {
    return "Hello Mr $fname $lname";
  }

  // echo add_title("Osama");

  $first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];

  echo '<pre>';
  print_r(array_map("add_title", $first_names, $last_names));
  print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
  echo '</pre>';

  $nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ];

  function check_nums($n1, $n2) {
    return $n1 > 4 || $n2 > 4;
  }

  echo '<pre>';
  print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));
  echo '</pre>';
*/
//------------------------------------------------------------------------------------------------------------------

/*
    Array Functions

    - array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration

  */
/*
  function add($carry, $item) {
    echo "$carry<br>";
    echo "$item<br>";
    echo $carry + $item . "<br>";
    echo "###########<br>";
    return $carry + $item;
  }

  $nums = [10, 20, 50, 100, 10];

  echo array_reduce($nums, "add", 100);
*/
?>

