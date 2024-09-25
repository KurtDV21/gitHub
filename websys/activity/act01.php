<?php
$str = "The quick brown fox jumps over the lazy dog. if # @ - _ , ! + 0123456789";

$name = substr($str, 8, 1) .
        substr($str, 21, 1) .
        substr($str, 11, 1) .
        substr($str, 31, 1) .
        " " .
        substr($str, 40, 1) .
        substr($str, 36, 1) .
        substr($str, 11, 1) .
        substr($str, 38, 1) .
        substr($str, 35, 1) .
        " " .
        substr($str, 7, 1) .
        substr($str, 43, 1) .
        " " .
        substr($str, 27, 1) .
        substr($str, 28, 1) .
        substr($str, 11, 1) .
        substr($str, 42, 1) .
        substr($str, 36, 1) .
        substr($str, 11, 1) .
        substr($str, 36, 1);

$address = substr($str, 66, 1) .
           substr($str, 63, 1) .
           substr($str, 63, 1) .
           substr($str, 52, 1) .
           " " .
           strtoupper(substr($str, 40, 1)) .
           " " .
           strtoupper(substr($str, 40, 1)) .
           substr($str, 12, 1) .
           substr($str, 11, 1) .
           substr($str, 12, 1) .
           substr($str, 31, 1) .
           substr($str, 28, 1) .
           substr($str, 36, 1) .
           " " .
           substr($str, 11, 1) .
           substr($str, 40, 1) .
           " " .
           strtoupper(substr($str, 7, 1)) .
           substr($str, 36, 1) .
           substr($str, 35, 1) .
           substr($str, 12, 1) .
           substr($str, 12, 1) .
           substr($str, 7, 1) .
           substr($str, 36, 1) .
           substr($str, 14, 1) .
           " " .
           strtoupper(substr($str, 7, 1)) .
           substr($str, 45, 1) .
           substr($str, 31, 1) .
           substr($str, 38, 1);

           $email = "<i>" . substr($str, 27, 1) .
                    substr($str, 28, 1) .
                    substr($str, 11, 1) .
                    substr($str, 42, 1) .
                    substr($str, 36, 1) .
                    substr($str, 11, 1) .
                    substr($str, 36, 1) .
                    substr($str, 8, 1) .
                    substr($str, 21, 1) .
                    substr($str, 11, 1) .
                    substr($str, 31, 1) .
                    substr($str, 43, 1) .
                    substr($str, 10, 1) .
                    substr($str, 24, 1) .
                    substr($str, 45, 1) .
                    substr($str, 31, 1) .
                    substr($str, 50, 1) .
                    substr($str, 42, 1) .
                    substr($str, 22, 1) .
                    substr($str, 36, 1) .
                    substr($str, 45, 1) .
                    substr($str, 35, 1) .
                    substr($str, 43, 1) .
                    substr($str, 7, 1) .
                    substr($str, 12, 1) .
                    substr($str, 22, 1) . "</i>";

           $contact_no = "<i>" . substr($str, 62, 1) .
                         substr($str, 71, 1) .
                         substr($str, 68, 1) .
                         substr($str, 68, 1) .
                         substr($str, 69, 1) .
                         substr($str, 71, 1) .
                         substr($str, 68, 1) .
                         substr($str, 65, 1) .
                         substr($str, 66, 1) .
                         substr($str, 70, 1) .
                         substr($str, 68, 1) . "</i>";

           $student_no = "<i>" . substr($str, 64, 1) .
                         substr($str, 62, 1) .
                         substr($str, 64, 1) .
                         substr($str, 64, 1) .
                         substr($str, 62, 1) .
                         substr($str, 68, 1) .
                         substr($str, 62, 1) .
                         substr($str, 62, 1) .
                         substr($str, 52, 1) .
                         strtoupper(substr($str, 24, 1)) . "</i>";
echo "<b>" . strtoupper($name) . "</b> <br>";
echo ($address) . "<br>";
echo ($email) . "<br>";
echo ($contact_no) . "<br>";
echo ($student_no) . "<br>";
?>
