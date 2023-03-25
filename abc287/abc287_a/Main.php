<?php
// Your code here!
$yes = 0;
$no = 0;

while ($line = fgets(STDIN)) {
  $input = trim($line);
  if ($input === "For") {
    $yes++;
  } else if ($input === "Against") {
    $no++;
  }
}

if ($yes > $no) {
  echo "Yes\n";
} else {
  echo "No\n";
}

?>
