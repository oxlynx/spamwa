<?php
// Limit 0x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";

}
echo "\033[1;35m\n\n";
echo "   ___       _ \n";
echo "  / _ \__  _| |   _   _ _ __ __  __  \n";
echo " | | | \ \/ / |  | | | | '_  \\ \/ /  \n";
echo " | |_| |>  <| |__| |_| | | | |>  <  \n";
echo "  \___//_/\_\_____\__, |_| |_/_/\_\ \n";
echo "                  |___/ \n\n";
echo "\033[1;32m\n";
echo "»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»";
echo "\033[1;36m\n";
echo "#  Whatsapp  : 085850252221  ##\n";
echo "#  Facebook  : Bagus P       ##\n";
echo "#  Instagram : bagusp073     ##";
echo "\033[1;32m\n";
echo "«««««««««««««««««««««««««««««««\n\n";
echo "\033[1;36m";
echo "××××××××××××××××××××××××\n";
echo "\033[1;33m";
echo "|| Nomor Target Cuk : ||\n";
echo "\033[1;36m";
echo "××××××××××××××××××××××××\n";
echo "\033[1;35m";
echo "[+] \033[1;32m";
$nomor = trim(fgets(STDIN));
echo "\033[1;31m";
$execute = send($nomor);
print $execute;
echo "\033[1;32m";
?>
