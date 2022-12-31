function dnaToRna($str) {
  $str = strtoupper($str);
  $str = str_replace("T", "U", $str);
  return $str;
}