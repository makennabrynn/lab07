<?php

$num = readline("Enter a number: ")

echo "\nTable:\n"
for ($i = 1; $i <= $num; $i++)
{
  echo "\t" . $i;
}

echo "\n";

for ($i = 1; $i <= $num; $i++)
{
  echo "--------------"
}

echo "\n";

for ($i = 1; $i <= $num; $i++)
{
  ech $i . "\t|";
  for ($j = 1; $j <= $num; $j++)
  {
    echo "\t" . ($i * $j);
  }
  echo "\n";
}
