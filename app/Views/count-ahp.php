<?php
if (isset($_POST['submit'])) {
    // As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value

    $val1 = array(1, 3, 5, 7, 9, 2);
    $val2 = array(1, 1 / 3, 1 / 5, 1 / 7, 1 / 9, 1 / 2);
    $alter1 = array(1,);
    $alter2 = array();
    $alter3 = array();
    $alter4 = array();
    $alter5 = array();
    $alter6 = array();

    //HARGA - KUALITAS
    foreach ($_POST['harga1'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter1[1] = $val1[$i];
                $alter2[0] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter1[1] = $val2[$i + 1];
                $alter2[0] = $val1[$i + 1];
            }
        }
    }

    // HARGA - FITUR
    foreach ($_POST['harga2'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter1[2] = $val1[$i];
                $alter3[0] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter1[2] = $val2[$i + 1];
                $alter3[0] = $val1[$i + 1];
            }
        }
    }

    // HARGA - POPULER
    foreach ($_POST['harga3'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter1[3] = $val1[$i];
                $alter4[0] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter1[3] = $val2[$i + 1];
                $alter4[0] = $val1[$i + 1];
            }
        }
    }

    // HARGA - PURNA JUAL
    foreach ($_POST['harga4'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter1[4] = $val1[$i];
                $alter5[0] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter1[4] = $val2[$i + 1];
                $alter5[0] = $val1[$i + 1];
            }
        }
    }

    // HARGA - KEAWETAN
    foreach ($_POST['harga5'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter1[5] = $val1[$i];
                $alter6[0] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter1[5] = $val2[$i + 1];
                $alter6[0] = $val1[$i + 1];
            }
        }
    }

    //Perbandingan Kualitas-Kualitas
    $alter2[1] = 1;

    // KUALITAS - FITUR
    foreach ($_POST['kualitas1'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter2[2] = $val1[$i];
                $alter3[1] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter2[2] = $val2[$i + 1];
                $alter3[1] = $val1[$i + 1];
            }
        }
    }

    // KUALITAS - POPULER
    foreach ($_POST['kualitas2'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter2[3] = $val1[$i];
                $alter4[1] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter2[3] = $val2[$i + 1];
                $alter4[1] = $val1[$i + 1];
            }
        }
    }

    // KUALITAS - PURNA JUAL
    foreach ($_POST['kualitas3'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter2[4] = $val1[$i];
                $alter5[1] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter2[4] = $val2[$i + 1];
                $alter5[1] = $val1[$i + 1];
            }
        }
    }

    // KUALITAS - KEAWETAN
    foreach ($_POST['kualitas4'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter2[5] = $val1[$i];
                $alter6[1] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter2[5] = $val2[$i + 1];
                $alter6[1] = $val1[$i + 1];
            }
        }
    }

    //Perbandingan fitur-fitur
    $alter3[2] = 1;

    // FITUR - POPULER
    foreach ($_POST['fitur1'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter3[3] = $val1[$i];
                $alter4[2] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter3[3] = $val2[$i + 1];
                $alter4[2] = $val1[$i + 1];
            }
        }
    }

    // FITUR - PURNA JUAL
    foreach ($_POST['fitur2'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter3[4] = $val1[$i];
                $alter5[2] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter3[4] = $val2[$i + 1];
                $alter5[2] = $val1[$i + 1];
            }
        }
    }

    // FITUR - KEAWETAN
    foreach ($_POST['fitur3'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter3[5] = $val1[$i];
                $alter6[2] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter3[5] = $val2[$i + 1];
                $alter6[2] = $val1[$i + 1];
            }
        }
    }

    //Perbandingan populer-populer
    $alter4[3] = 1;

    // POPULER - PURNA JUAL
    foreach ($_POST['populer1'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter4[4] = $val1[$i];
                $alter5[3] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter4[4] = $val2[$i + 1];
                $alter5[3] = $val1[$i + 1];
            }
        }
    }

    // POPULER - KEAWETAN
    foreach ($_POST['populer2'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter4[5] = $val1[$i];
                $alter6[3] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter4[5] = $val2[$i + 1];
                $alter6[3] = $val1[$i + 1];
            }
        }
    }

    //Perbandingan purnajual-purnajual
    $alter5[4] = 1;

    // PURNA JUAL - KEAWETAN
    foreach ($_POST['purna1'] as $select) {
        // Displaying Selected Value
        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 1) {
                $alter5[5] = $val1[$i];
                $alter6[4] = $val2[$i];
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if ($select == $i + 7) {
                $alter5[5] = $val2[$i + 1];
                $alter6[4] = $val1[$i + 1];
            }
        }
    }

    //Perbandingan keawetan-keawetan
    $alter6[5] = 1;

    // for ($i=0; $i <6; $i++) { 
    //     echo $alter1[$i]. "<br>";
    // }
    // echo "<br>";
    // for ($i=0; $i <6; $i++) { 
    //     echo $alter2[$i]. "<br>";
    // }
    // echo "<br>";
    // for ($i=0; $i <6; $i++) { 
    //     echo $alter3[$i]. "<br>";
    // }
    // echo "<br>";
    // for ($i=0; $i <6; $i++) { 
    //     echo $alter4[$i]. "<br>";
    // }
    // echo "<br>";
    // for ($i=0; $i <6; $i++) { 
    //     echo $alter5[$i]. "<br>";
    // }
    // echo "<br>";
    // for ($i=0; $i <6; $i++) { 
    //     echo $alter6[$i]. "<br>";
    // }

}
