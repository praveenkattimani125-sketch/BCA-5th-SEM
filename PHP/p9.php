   <?php
   $source = "Source.txt";
   $destination = "destination.txt";

   $sourceFile = fopen($source, "r");
   $destinationFile = fopen($destination, "w");

   while (!feof($sourceFile)) {
       $data = fgets($sourceFile);
       if ($data !== false) {
           fwrite($destinationFile, $data);
       }
   }

   fclose($sourceFile);
   fclose($destinationFile);
   echo "File copied successfully.";
   ?>