<?php 

// $my_file=fopen("text.txt","r"); //fopen(filename, mode, include_path, context)
// $file_len=filesize("text.txt");
// echo fread($my_file,$file_len);//hello from file
// echo fread($my_file,1); //h  fread(file, length)
// fclose($my_file); //src

///////////////////////////////////////

// $my_file=fopen("text.txt","w");

//$my_file=fopen("text.txt","a+");

$my_file=fopen("text2.txt","x+");

$file_len=filesize("text.txt"); //filesize(filename)

echo fwrite($my_file,"new data"); //fwrite(file, string, length)

fclose($my_file); //src

///////////////////////////////////

// "r" - Read only. Starts at the beginning of the file
// "r+" - Read/Write. Starts at the beginning of the file
// "w" - Write only. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
// "w+" - Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
// "a" - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist
// "a+" - Read/Write. Preserves file content by writing to the end of the file
// "x" - Write only. Creates a new file. Returns FALSE and an error if file already exists
// "x+" - Read/Write. Creates a new file. Returns FALSE and an error if file already exists
// "c" - Write only. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
// "c+" - Read/Write. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
// "e" - Only available in PHP compiled on POSIX.1-2008 conform systems.

?>