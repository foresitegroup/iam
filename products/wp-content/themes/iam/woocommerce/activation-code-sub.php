<?php
function GetActCodes($UID) {
  // The last 2 digits of the previous year are used to select the four positions of the user ID number that are used in the activation code.
  $LastFour[13] = "3927";
  $LastFour[14] = "4063";
  $LastFour[15] = "5835";
  $LastFour[16] = "6207";
  $LastFour[17] = "7684";
  $LastFour[18] = "8045";
  $LastFour[19] = "9736";
  $LastFour[20] = "0914";


  // BEGIN ACTIVATION CODE
  // Get the positions
  $LastYear = date("y", strtotime("last year"));
  $Pos1 = ($LastFour[$LastYear][0] == "0") ? 9 : $LastFour[$LastYear][0] - 1;
  $Pos2 = ($LastFour[$LastYear][1] == "0") ? 9 : $LastFour[$LastYear][1] - 1;
  $Pos3 = ($LastFour[$LastYear][2] == "0") ? 9 : $LastFour[$LastYear][2] - 1;
  $Pos4 = ($LastFour[$LastYear][3] == "0") ? 9 : $LastFour[$LastYear][3] - 1;

  // Convert UID to letters;
  $numbers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
  $letters = array("B", "D", "F", "H", "J", "L", "N", "P", "R", "T");
  $UIDalpha = str_replace($numbers, $letters, $UID);
  
  // Construct the activation code
  $ActCode = $UID[$Pos1] .
             $LastFour[$LastYear][3] .
             $UID[$Pos2] .
             $UIDalpha[6] .
             $LastFour[$LastYear][2] .
             $UID[$Pos3] .
             $UIDalpha[3] .
             $LastFour[$LastYear][1] .
             $UID[$Pos4] .
             $LastFour[$LastYear][0];
  // END ACTIVATION CODE


  // BEGIN QM CODE (ACTIVATION)
  // Strip the letter from the Activation Code
  $ActCodeNums = preg_replace('/[^0-9.]+/', '', $ActCode);

  // Add all of the digits in the Activation Code
  $ACNsum = array_sum(str_split($ActCodeNums));

  // Multiply this number by (the last two digits of the Activation Code + 100)
  $QMact = $ACNsum * (substr($ActCodeNums, -2) + 100);
  // END QM CODE (ACTIVATION)


  // BEGIN RENEWAL CODE
  // Get the positions
  $ThisYear = date("y");
  $Pos1r = ($LastFour[$ThisYear][0] == "0") ? 9 : $LastFour[$ThisYear][0] - 1;
  $Pos2r = ($LastFour[$ThisYear][1] == "0") ? 9 : $LastFour[$ThisYear][1] - 1;
  $Pos3r = ($LastFour[$ThisYear][2] == "0") ? 9 : $LastFour[$ThisYear][2] - 1;
  $Pos4r = ($LastFour[$ThisYear][3] == "0") ? 9 : $LastFour[$ThisYear][3] - 1;

  // Construct the renewal code
  $RenCode = $UID[$Pos1r] . $UID[$Pos2r] . $UID[$Pos3r] . $UID[$Pos4r] . $LastFour[$ThisYear];
  // END RENEWAL CODE


  // BEGIN QM CODE (RENEWAL)
  // Add all of the digits in the Renewal Code
  $RCsum = array_sum(str_split($RenCode));

  // Multiply this number by (the last two digits of the Renewal Code + 100)
  $QMren = $RCsum * (substr($RenCode, -2) + 100);
  
  // If result is longer than 4 digits, just use last 4
  $QMren = substr($QMren, -4);
  // END QM CODE (RENEWAL)

  return array ($ActCode, $QMact, $RenCode, $QMren);
}
?>