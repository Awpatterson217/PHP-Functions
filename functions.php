
//Returns an array of keys instead of just one, as with array_search()
function array_search_better($needle, $array){
    $keys = array();
    foreach ($array as $key => $value) {
        if($value == $needle){
            array_push($keys, $key);
        }
    }
    return $keys;
}
// Takes a slice from an array, but you can pick any two keys you want
// The returned array includes the values associated with the two keys above
// This function only works with numeric keys
function array_slice_better($array, $first_place, $second_place){
    $sliced_array = array();
    foreach ($array as $key => $value) {
        if($key >= $first_place && $key <= $second_place){
            array_push($sliced_array, $value);
        }
    }
    return $sliced_array;
}
// Will remove from the array every instance of the provided string-
function clean($array, $string){
    while(true) {
        if(in_array($string, $array)){
            $place = array_search($string, $array);
            array_splice($array, $place, 1);
         }else{
            break;
        }
    }
    return $array;
}
