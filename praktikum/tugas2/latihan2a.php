<?php
function gantiStyle($tulisan, $style1, $style2)
{
    echo "<div style='$style1'>";
    return "<div style='$style2'><i><strong>$tulisan</strong></i></div>";
    echo "</div>";
}
echo gantiStyle("Selamat datang di praktikum PW", "border: 1px solid;margin:20px 250px 20px 250px;border-radius:5px;box-shadow:1px 1px 10px ", "font:28px Arial;color: #8c782d;padding:20px");
