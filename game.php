<?php
echo "Welcome to my game\n";
while (true) {
    echo "======= Tebak Angka =======\n";
    echo "Tebak sebuah angka antara 0 sampai 100!\n";
    $computer = rand(0,100);
    echo "Masukkan Tebakanmu\n";
    $player = trim(fgets(STDIN));
    if ($player == $computer) {
        echo "Menang, angka $computer\n";
        exit;
    }else {
        echo "Kalah, angka $computer\n";
        }
}
