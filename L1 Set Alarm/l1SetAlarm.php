function setAlarm(bool $employed, bool $vacation): bool {
  if($employed && !$vacation) {
    return true;
  }
  
  return false;
}