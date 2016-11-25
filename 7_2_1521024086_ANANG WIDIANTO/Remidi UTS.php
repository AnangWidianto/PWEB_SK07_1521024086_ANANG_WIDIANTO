<!DOCTYPE html>
<html>
<head>
     <title> AKN Bojonegoro </title>
</head>
<body>
<table border='1'>
  <tr>
      <th rowspan="2">INPUT</th>
      <th colspan="5">OUTPUT</th>
  </tr>
  <tr>
         <th>A</th>
         <th>E</th>
         <th>I</th>
         <th>U</th>
         <th>O</th>
  </tr>
  <tr>
     <td>
         <?php
          $kalimat1="ANANG WIDIANTO";
         echo $kalimat1;
          ?>
     </td>
     <td>
          <?php
         $hasil=substr_count($kalimat1, "A");
           echo "$hasil";
          ?>
     </td>
     <td>
          <?php
         $hasil=substr_count($kalimat1, "E");
           echo "$hasil";
          ?>
     </td>
     <td>
          <?php
         $hasil=substr_count($kalimat1, "I");
           echo "$hasil";
          ?>
     </td>
     <td>
          <?php
         $hasil=substr_count($kalimat1, "U");
           echo "$hasil";
          ?>
     </td>
     <td>
          <?php
         $hasil=substr_count($kalimat1, "O");
           echo "$hasil";
          ?>
     </td>
  </tr>
  </table>
  </body>
  </html>