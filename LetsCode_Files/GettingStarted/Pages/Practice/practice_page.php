<!DOCTYPE html>

<html lang="en">

<head>
    <title>Practice</title>
    <meta charset="UTF-8">
    <meta name="description" content="page showing practice sites for python">
    <meta name="author" content="Gavin Wurm">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../CSS/introStyles.css">
    <link rel="icon" href="../../../brandDesign/logo_icon.PNG">
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>

<?php


    function thumbsup($which) {
        echo "<script>console.log('in');</script>";
        echo "<script>console.log('$which');</script>";

        /*
        if(isset($_COOKIE['first_visit']) && $_COOKIE['first_visit']== TRUE ) {
            echo "<script>console.log('first visit');</script>";

            setcookie ("first_visit", FALSE, time()+3600*24*365);
            return;
            }

        echo "<script>console.log('second+ visit');</script>";

        */

        ///////////////part 1 reading/////////////
        $allThumbsData = file('ratings.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($allThumbsData as $individualThumbs) {
            // version 1: access credentials directly
            list($thumbsup, $count) = explode(':', $individualThumbs);
            // version 2: or store them in a new array
            $newThumbs[] = explode(':', $individualThumbs);
        }
        
        // here's a way to output the new array
        //echo '<pre>';
        //print_r($newThumbs);
        //echo '</pre>';


        if ($which == 1) {
            if(isset($_COOKIE['already_up1']) && $_COOKIE['already_up1'] == TRUE ) {
                echo "<script>console.log('already up');</script>";
                $currentUp = $newThumbs[0][1];
                $currentDown = $newThumbs[1][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_down1", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already up');</script>";
                    setcookie("already_up1", TRUE, time()+3600*24*365);
                    
                }

            $updatedUp = $newThumbs[0][1] + 1;
            if (($newThumbs[1][1])>0) {
                $updatedDown = $newThumbs[1][1] - 1;
            } else {
                $updatedDown = 0;
            }
        }

        if ($which == 2) {
            if(isset($_COOKIE['already_up2']) && $_COOKIE['already_up2'] == TRUE ) {
                echo "<script>console.log('already up');</script>";
                $currentUp = $newThumbs[2][1];
                $currentDown = $newThumbs[3][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_down2", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already up');</script>";
                    setcookie("already_up2", TRUE, time()+3600*24*365);
                    
                }

            $temp1 = $newThumbs[2][1];
            $temp2 = $newThumbs[3][1];
            echo "<script>console.log('current up is $temp1');</script>";
            echo "<script>console.log('current down is $temp2');</script>";
            $updatedUp = $newThumbs[2][1] + 1;
            if (($newThumbs[3][1])>0) {
                $updatedDown = $newThumbs[3][1] - 1;
            } else {
                $updatedDown = 0;
            }
            echo "<script>console.log('up is now $updatedUp');</script>";
            echo "<script>console.log('down is now $updatedDown');</script>";
        }

        if ($which == 3) {
            if(isset($_COOKIE['already_up3']) && $_COOKIE['already_up3'] == TRUE ) {
                echo "<script>console.log('already up');</script>";
                $currentUp = $newThumbs[4][1];
                $currentDown = $newThumbs[5][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_down3", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already up');</script>";
                    setcookie("already_up3", TRUE, time()+3600*24*365);
                    
                }

            $updatedUp = $newThumbs[4][1] + 1;
            if (($newThumbs[5][1])>0) {
                $updatedDown = $newThumbs[5][1] - 1;
            } else {
                $updatedDown = 0;
            }
        }

        if ($which == 4) {

            if(isset($_COOKIE['already_up4']) && $_COOKIE['already_up4'] == TRUE ) {
                echo "<script>console.log('already up');</script>";
                $currentUp = $newThumbs[6][1];
                $currentDown = $newThumbs[7][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_down4", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already up');</script>";
                    setcookie("already_up4", TRUE, time()+3600*24*365);
                    
                }

            $updatedUp = $newThumbs[6][1] + 1;
            if (($newThumbs[7][1])>0) {
                $updatedDown = $newThumbs[7][1] - 1;
            } else {
                $updatedDown = 0;
            }
        }

        if ($which == 5) {
            if(isset($_COOKIE['already_up5']) && $_COOKIE['already_up5'] == TRUE ) {
                echo "<script>console.log('already up');</script>";
                $currentUp = $newThumbs[8][1];
                $currentDown = $newThumbs[9][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_down5", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already up');</script>";
                    setcookie("already_up5", TRUE, time()+3600*24*365);
                    
                }

            $updatedUp = $newThumbs[8][1] + 1;
            if (($newThumbs[9][1])>0) {
                $updatedDown = $newThumbs[9][1] - 1;
            } else {
                $updatedDown = 0;
            }
        }

        if ($which == 6) {
            if(isset($_COOKIE['already_up6']) && $_COOKIE['already_up6'] == TRUE ) {
                echo "<script>console.log('already up');</script>";
                $currentUp = $newThumbs[10][1];
                $currentDown = $newThumbs[11][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_down6", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already up');</script>";
                    setcookie("already_up6", TRUE, time()+3600*24*365);
                    
                }

            $updatedUp = $newThumbs[10][1] + 1;
            if (($newThumbs[11][1])>0) {
                $updatedDown = $newThumbs[11][1] - 1;
            } else {
                $updatedDown = 0;
            }
        }

        if ($which == 7) {
            if(isset($_COOKIE['already_up7']) && $_COOKIE['already_up7'] == TRUE ) {
                echo "<script>console.log('already up');</script>";
                $currentUp = $newThumbs[12][1];
                $currentDown = $newThumbs[13][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_down7", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already up');</script>";
                    setcookie("already_up7", TRUE, time()+3600*24*365);
                    
                }

            $updatedUp = $newThumbs[12][1] + 1;
            if (($newThumbs[13][1])>0) {
                $updatedDown = $newThumbs[13][1] - 1;
            } else {
                $updatedDown = 0;
            }
        }

        if ($which == 8) {
            if(isset($_COOKIE['already_up8']) && $_COOKIE['already_up8'] == TRUE ) {
                echo "<script>console.log('already up');</script>";
                $currentUp = $newThumbs[14][1];
                $currentDown = $newThumbs[15][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_down8", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already up');</script>";
                    setcookie("already_up8", TRUE, time()+3600*24*365);
                    
                } 

            $updatedUp = $newThumbs[14][1] + 1;
            if (($newThumbs[15][1])>0) {
                $updatedDown = $newThumbs[15][1] - 1;
            } else {
                $updatedDown = 0;
            }
        }

        if ($which == 9) {
            if(isset($_COOKIE['already_up9']) && $_COOKIE['already_up9'] == TRUE ) {
                echo "<script>console.log('already up');</script>";
                $currentUp = $newThumbs[16][1];
                $currentDown = $newThumbs[17][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_down9", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already up');</script>";
                    setcookie("already_up9", TRUE, time()+3600*24*365);
                    
                }
    
            $updatedUp = $newThumbs[16][1] + 1;
            if (($newThumbs[17][1])>0) {
                $updatedDown = $newThumbs[17][1] - 1;
            } else {
                $updatedDown = 0;
            }
        }

        
        //print($updatedUp);

        echo '<td>'. $updatedUp .'</td>';
        echo '<td>'. $updatedDown .'</td>';

        ///////////////part 2 editing/////////////

        $myFile = "ratings.txt";
        $lines = file($myFile, FILE_IGNORE_NEW_LINES);

        if ($which == 1) {
            $lines[0] = 'up:' . $updatedUp;
            $lines[1] = 'down:' . $updatedDown;
        } else if ($which == 2) {
            $lines[2] = 'up:' . $updatedUp;
            $lines[3] = 'down:' . $updatedDown;
        } else if ($which == 3) {
            $lines[4] = 'up:' . $updatedUp;
            $lines[5] = 'down:' . $updatedDown;
        } else if ($which == 4) {
            $lines[6] = 'up:' . $updatedUp;
            $lines[7] = 'down:' . $updatedDown;
        } else if ($which == 5) {
            $lines[8] = 'up:' . $updatedUp;
            $lines[9] = 'down:' . $updatedDown;
        } else if ($which == 6) {
            $lines[10] = 'up:' . $updatedUp;
            $lines[11] = 'down:' . $updatedDown;
        } else if ($which == 7) {
            $lines[12] = 'up:' . $updatedUp;
            $lines[13] = 'down:' . $updatedDown;
        } else if ($which == 8) {
            $lines[14] = 'up:' . $updatedUp;
            $lines[15] = 'down:' . $updatedDown;
        } else if ($which == 9) {
            $lines[16] = 'up:' . $updatedUp;
            $lines[17] = 'down:' . $updatedDown;
        }
        
        file_put_contents($myFile , implode("\n", $lines));

        }

    function thumbsdown($which) {

        /*
        if(isset($_COOKIE['first_visit']) && $_COOKIE['first_visit']== TRUE ) {
            echo "<script>console.log('first visit');</script>";

            setcookie ("first_visit", FALSE, time()+3600*24*365);
            return;
            }
        
        */
        
        ///////////////part 1 reading/////////////
        $allThumbsData = file('ratings.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($allThumbsData as $individualThumbs) {
            // version 1: access credentials directly
            list($thumbsup, $count) = explode(':', $individualThumbs);
            // version 2: or store them in a new array
            $newThumbs[] = explode(':', $individualThumbs);
        }
        
        // here's a way to output the new array
        //echo '<pre>';
        //print_r($newThumbs);
        //echo '</pre>';
            

        if ($which == 1) {
            if(isset($_COOKIE['already_down1']) && $_COOKIE['already_down1'] == TRUE ) {
                echo "<script>console.log('already down');</script>";
                $currentUp = $newThumbs[0][1];
                $currentDown = $newThumbs[1][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_up1", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already down');</script>";
                    setcookie("already_down1", TRUE, time()+3600*24*365);
                }

            $updatedDown = $newThumbs[1][1] + 1;
            if (($newThumbs[0][1])>0) {
                $updatedUp = $newThumbs[0][1] - 1;
            } else {
                $updatedUp = 0;
            }
        }

        if ($which == 2) {
            if(isset($_COOKIE['already_down2']) && $_COOKIE['already_down2'] == TRUE ) {
                echo "<script>console.log('already down');</script>";
                $currentUp = $newThumbs[2][1];
                $currentDown = $newThumbs[3][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_up2", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already down');</script>";
                    setcookie("already_down2", TRUE, time()+3600*24*365);
                }

                $temp1 = $newThumbs[2][1];
                $temp2 = $newThumbs[3][1];    
                echo "<script>console.log('current up is $temp1');</script>";
                echo "<script>console.log('current down is $temp2');</script>";
            $updatedDown = $newThumbs[3][1] + 1;
            if (($newThumbs[2][1])>0) {
                $updatedUp = $newThumbs[2][1] - 1;
            } else {
                $updatedUp = 0;
            }
            echo "<script>console.log('up is now $updatedUp');</script>";
            echo "<script>console.log('down is now $updatedDown');</script>";

        }

        if ($which == 3) {
            if(isset($_COOKIE['already_down3']) && $_COOKIE['already_down3'] == TRUE ) {
                echo "<script>console.log('already down');</script>";
                $currentUp = $newThumbs[4][1];
                $currentDown = $newThumbs[5][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_up3", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already down');</script>";
                    setcookie("already_down3", TRUE, time()+3600*24*365);
                }

            $updatedDown = $newThumbs[5][1] + 1;
            if (($newThumbs[4][1])>0) {
                $updatedUp = $newThumbs[4][1] - 1;
            } else {
                $updatedUp = 0;
            }
        }

        if ($which == 4) {
            if(isset($_COOKIE['already_down4']) && $_COOKIE['already_down4'] == TRUE ) {
                echo "<script>console.log('already down');</script>";
                $currentUp = $newThumbs[6][1];
                $currentDown = $newThumbs[7][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_up4", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already down');</script>";
                    setcookie("already_down4", TRUE, time()+3600*24*365);
                }

            $updatedDown = $newThumbs[7][1] + 1;
            if (($newThumbs[6][1])>0) {
                $updatedUp = $newThumbs[6][1] - 1;
            } else {
                $updatedUp = 0;
            }
        }

        if ($which == 5) {
            if(isset($_COOKIE['already_down5']) && $_COOKIE['already_down5'] == TRUE ) {
                echo "<script>console.log('already down');</script>";
                $currentUp = $newThumbs[8][1];
                $currentDown = $newThumbs[9][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_up5", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already down');</script>";
                    setcookie("already_down5", TRUE, time()+3600*24*365);
                }

            $updatedDown = $newThumbs[9][1] + 1;
            if (($newThumbs[8][1])>0) {
                $updatedUp = $newThumbs[8][1] - 1;
            } else {
                $updatedUp = 0;
            }
        }

        if ($which == 6) {
            if(isset($_COOKIE['already_down6']) && $_COOKIE['already_down6'] == TRUE ) {
                echo "<script>console.log('already down');</script>";
                $currentUp = $newThumbs[10][1];
                $currentDown = $newThumbs[11][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_up6", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already down');</script>";
                    setcookie("already_down6", TRUE, time()+3600*24*365);
                }

            $updatedDown = $newThumbs[11][1] + 1;
            if (($newThumbs[10][1])>0) {
                $updatedUp = $newThumbs[10][1] - 1;
            } else {
                $updatedUp = 0;
            }
        }

        if ($which == 7) {
            if(isset($_COOKIE['already_down7']) && $_COOKIE['already_down7'] == TRUE ) {
                echo "<script>console.log('already down');</script>";
                $currentUp = $newThumbs[12][1];
                $currentDown = $newThumbs[13][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_up7", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already down');</script>";
                    setcookie("already_down7", TRUE, time()+3600*24*365);
                }

            $updatedDown = $newThumbs[13][1] + 1;
            if (($newThumbs[12][1])>0) {
                $updatedUp = $newThumbs[12][1] - 1;
            } else {
                $updatedUp = 0;
            }
        }

        if ($which == 8) {
            if(isset($_COOKIE['already_down8']) && $_COOKIE['already_down8'] == TRUE ) {
                echo "<script>console.log('already down');</script>";
                $currentUp = $newThumbs[14][1];
                $currentDown = $newThumbs[15][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_up8", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already down');</script>";
                    setcookie("already_down8", TRUE, time()+3600*24*365);
                }

            $updatedDown = $newThumbs[15][1] + 1;
            if (($newThumbs[14][1])>0) {
                $updatedUp = $newThumbs[14][1] - 1;
            } else {
                $updatedUp = 0;
            }
        }

        if ($which == 9) {
            if(isset($_COOKIE['already_down9']) && $_COOKIE['already_down9'] == TRUE ) {
                echo "<script>console.log('already down');</script>";
                $currentUp = $newThumbs[16][1];
                $currentDown = $newThumbs[17][1];
                echo '<td>'. $currentUp .'</td>';
                echo '<td>'. $currentDown .'</td>';
                setcookie("already_up9", FALSE, time()+3600*24*365);
                return;
                } else {
                    echo "<script>console.log('not already down');</script>";
                    setcookie("already_down9", TRUE, time()+3600*24*365);
                }

            $updatedDown = $newThumbs[17][1] + 1;
            if (($newThumbs[16][1])>0) {
                $updatedUp = $newThumbs[16][1] - 1;
            } else {
                $updatedUp = 0;
            }
        }
            


        
        //print($updatedDown);

        echo '<td>'. $updatedUp .'</td>';
        echo '<td>'. $updatedDown .'</td>';

        ///////////////part 2 editing/////////////

        $myFile = "ratings.txt";
        $lines = file($myFile, FILE_IGNORE_NEW_LINES);
        if ($which == 1) {
            $lines[0] = 'up:' . $updatedUp;
            $lines[1] = 'down:' . $updatedDown;
        } else if ($which == 2) {
            $lines[2] = 'up:' . $updatedUp;
            $lines[3] = 'down:' . $updatedDown;
        } else if ($which == 3) {
            $lines[4] = 'up:' . $updatedUp;
            $lines[5] = 'down:' . $updatedDown;
        } else if ($which == 4) {
            $lines[6] = 'up:' . $updatedUp;
            $lines[7] = 'down:' . $updatedDown;
        } else if ($which == 5) {
            $lines[8] = 'up:' . $updatedUp;
            $lines[9] = 'down:' . $updatedDown;
        } else if ($which == 6) {
            $lines[10] = 'up:' . $updatedUp;
            $lines[11] = 'down:' . $updatedDown;
        } else if ($which == 7) {
            $lines[12] = 'up:' . $updatedUp;
            $lines[13] = 'down:' . $updatedDown;
        } else if ($which == 8) {
            $lines[14] = 'up:' . $updatedUp;
            $lines[15] = 'down:' . $updatedDown;
        } else if ($which == 9) {
            $lines[16] = 'up:' . $updatedUp;
            $lines[17] = 'down:' . $updatedDown;
        }
        file_put_contents($myFile , implode("\n", $lines));
    }
?>

<body>
    <!--navigation bar-->

    <header class="nav-bar">
        <div class="logo-bar">
            <a href="../../../Home/home.html">
                <img src="../../../brandDesign/logo_icon.PNG" width="40px">
            </a>
        </div>
        <nav id="navbuttons">
            <a href="../../g_start.html">STARTING OUT</a>
            <a href="../../../EntryForm/signup.html">SIGN UP</a>
            <a href="../../../About/contact.html">ABOUT US</a>
        </nav>
    </header>

    <!--end of navigation bar -->
    <br><br><br>

    <h1 style="text-align: center;">PRACTICE</h1>

    <div class="practice_box">
        <div>
            <h2 style="text-align: center;">Recommended Practice Websites</h2>
            <table class="practice_table">
    
                <tr>
                    <td>
                        <a href="https://www.hackerrank.com/domains/python" target="_blank">
                            <img src = "images_practice/hackerrank_logo.jpg"
                                alt = "(Picture of hackerrank_logo)" width = "150" height = "150"/>
                        </a>
                    </td>
    
                    <td>
                        <a href="https://codingbat.com/python" target="_blank">
                            <img src = "images_practice/codingbat_logo.png"
                                alt = "(Picture of codingbat_logo)" width = "400"/>
                        </a>
                    </td>
    
                    <td>
                        <a href="https://www.w3resource.com/python-exercises/" target="_blank">
                            <img src = "images_practice/w3resource_logo.jpg"
                                alt = "(Picture of w3resource_logo)" width = "150" height = "150"/>
                        </a>
                    </td>
    
                </tr>
    
                <tr>
                    <td>
                        <table class="thumbs">
                            <form method="post">
                                <td><input type="submit" name="up1" class="thumbsup" value="&#9650;" /></td>
                                <td><input type="submit" name="down1" class="thumbsdown" value="&#9660;" /></td>
            
                            </form>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <form method="post">
                                <td><input type="submit" name="up2" class="thumbsup" value="&#9650;" /></td>
                                <td><input type="submit" name="down2" class="thumbsdown" value="&#9660;" /></td>
            
                            </form>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <form method="post">
                                <td><input type="submit" name="up3" class="thumbsup" value="&#9650;" /></td>
                                <td><input type="submit" name="down3" class="thumbsdown" value="&#9660;" /></td>
            
                            </form>
                        </table>
                    </td>
    
                </tr>

                <tr>
                    <td>
                        <table class="thumbs">
                            <?php
                            /*
                                if(array_key_exists('up', $_POST)) {
                                    echo thumbsup();
                                } 

                                if(array_key_exists('down', $_POST)) {
                                    thumbsdown();
                                } 
                                */

                                if(array_key_exists('up1', $_POST)) {
                                    thumbsup(1);
                                } 

                                if(array_key_exists('down1', $_POST)) {
                                    thumbsdown(1);
                                } 

                            ?>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <?php
                                if(array_key_exists('up2', $_POST)) {
                                    thumbsup(2);
                                } 

                                if(array_key_exists('down2', $_POST)) {
                                    thumbsdown(2);
                                } 

                            ?>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <?php
                                if(array_key_exists('up3', $_POST)) {
                                    thumbsup(3);
                                } 

                                if(array_key_exists('down3', $_POST)) {
                                    thumbsdown(3);
                                } 

                            ?>
                        </table>
                    </td>
    
                </tr>
    
                <tr>
                    <td>
                        <a href="https://edabit.com/challenges/python3" target="_blank">
                            <img src = "images_practice/edabit_logo.png"
                                alt = "(Picture of edabit_logo)" width = "150"/>
                        </a>
                    </td>
    
                    <td>
                        <a href="https://coderbyte.com/challenges?newAccount=true" target="_blank">
                            <img src = "images_practice/coderbyte_logo.png"
                                alt = "(Picture of coderbyte_logo)" width = "400"/>
                        </a>
                    </td>
    
                    <td>
                        <a href="https://www.learnpython.org/" target="_blank">
                            <img src = "images_practice/learnpython_logo.png"
                                alt = "(Picture of learnpython_logo)" width = "150" />
                        </a>
                    </td>
    
                </tr>
    
                <tr>
                    <td>
                        <table class="thumbs">
                            <form method="post">
                                <td><input type="submit" name="up4" class="thumbsup" value="&#9650;" /></td>
                                <td><input type="submit" name="down4" class="thumbsdown" value="&#9660;" /></td>
            
                            </form>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <form method="post">
                                <td><input type="submit" name="up5" class="thumbsup" value="&#9650;" /></td>
                                <td><input type="submit" name="down5" class="thumbsdown" value="&#9660;" /></td>
            
                            </form>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <form method="post">
                                <td><input type="submit" name="up6" class="thumbsup" value="&#9650;" /></td>
                                <td><input type="submit" name="down6" class="thumbsdown" value="&#9660;" /></td>
            
                            </form>
                        </table>
                    </td>
    
                </tr>

                <tr>
                    <td>
                        <table class="thumbs">
                            <?php

                                if(array_key_exists('up4', $_POST)) {
                                    thumbsup(4);
                                } 

                                if(array_key_exists('down4', $_POST)) {
                                    thumbsdown(4);
                                } 

                            ?>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <?php
                                if(array_key_exists('up5', $_POST)) {
                                    thumbsup(5);
                                } 

                                if(array_key_exists('down5', $_POST)) {
                                    thumbsdown(5);
                                } 

                            ?>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <?php
                                if(array_key_exists('up6', $_POST)) {
                                    thumbsup(6);
                                } 

                                if(array_key_exists('down6', $_POST)) {
                                    thumbsdown(6);
                                } 

                            ?>
                        </table>
                    </td>
    
                </tr>
    
                <tr>
                    <td>
                        <a href="https://pythonprinciples.com/challenges/" target="_blank">
                            <img src = "images_practice/pythonprinciples_logo.jpg"
                                alt = "(Picture of pythonprinciples_logo)" width = "150"/>
                        </a>
                    </td>
    
                    <td>
                        <a href="https://pynative.com/python-exercises-with-solutions/" target="_blank">
                            <img src = "images_practice/pynative_logo.png"
                                alt = "(Picture of pynative_logo)" width = "400"/>
                        </a>
                    </td>
    
                    <td>
                        <a href="https://www.codewars.com/collections/basic-python" target="_blank">
                            <img src = "images_practice/codewars_logo.jpg"
                                alt = "(Picture of codewars_logo)" width = "150" />
                        </a>
                    </td>
    
                </tr>
    
                <tr>
                    <td>
                        <table class="thumbs">
                            <form method="post">
                                <td><input type="submit" name="up7" class="thumbsup" value="&#9650;" /></td>
                                <td><input type="submit" name="down7" class="thumbsdown" value="&#9660;" /></td>
            
                            </form>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <form method="post">
                                <td><input type="submit" name="up8" class="thumbsup" value="&#9650;" /></td>
                                <td><input type="submit" name="down8" class="thumbsdown" value="&#9660;" /></td>
            
                            </form>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <form method="post">
                                <td><input type="submit" name="up9" class="thumbsup" value="&#9650;" /></td>
                                <td><input type="submit" name="down9" class="thumbsdown" value="&#9660;" /></td>
            
                            </form>
                        </table>
                    </td>
    
                </tr>

                <tr>
                    <td>
                        <table class="thumbs">
                            <?php

                                if(array_key_exists('up7', $_POST)) {
                                    thumbsup(7);
                                } 

                                if(array_key_exists('down7', $_POST)) {
                                    thumbsdown(7);
                                } 

                            ?>
                        </table>
                    </td>

                    <td>
                    <table class="thumbs">
                            <?php
                                if(array_key_exists('up8', $_POST)) {
                                    thumbsup(8);
                                } 

                                if(array_key_exists('down8', $_POST)) {
                                    thumbsdown(8);
                                } 

                            ?>
                        </table>
                    </td>

                    <td>
                        <table class="thumbs">
                            <?php
                                if(array_key_exists('up9', $_POST)) {
                                    thumbsup(9);
                                } 

                                if(array_key_exists('down9', $_POST)) {
                                    thumbsdown(9);
                                } 

                            ?>
                        </table>
                    </td>
    
                </tr>
    
    
            </table>
        </div>
    
        <div>
            <h3>Beginner Classics</h3>
            <ul>
                <li>HackerRank: <a href="https://www.hackerrank.com/challenges/py-hello-world/problem">
                    Say "Hello, World!" With Python
                </a></li> 
    
                <li>w3resource: <a href="https://www.w3resource.com/python-exercises/python-basic-exercise-2.php">
                    Get the Python version
                </a></li> 
    
                <li>CodingBat: 
                    <a href="https://codingbat.com/python/Warmup-1">
                        Warmups-1
                </a></li> 
            </ul>
    
            <h3>Fundamentals Challenges</h3>
            <ul>
                <li>PYNative: <a href="https://pynative.com/python-string-exercise/">
                    Python String Exercise
                </a></li> 
    
                <li>Learnpython.org: <a href="https://www.learnpython.org/en/Loops">
                    Loops
                </a></li> 
    
                <li>CodeWars: 
                    <a href="https://www.codewars.com/kata/53dc54212259ed3d4f00071c">
                        Sum Arrays
                </a></li> 
            </ul>
    
            <h3>Skill Checks</h3>
            <ul>
                <li>HackerRank: <a href="https://www.hackerrank.com/challenges/compress-the-string/problem">
                    Compress the String!
                </a></li> 
    
                <li>Edabit: <a href="https://edabit.com/challenge/sLkTkfLgZYs5wejsg">
                    Correct the Mistakes
                </a></li> 
    
                <li>Python Priciples: 
                    <a href="https://pythonprinciples.com/challenges/Boolean-and/">
                        Boolean and
                </a></li> 
            </ul>
    
            <h3>Staff Favorites</h3>
            <ul>
                <li>w3resource: <a href="https://www.w3resource.com/python-exercises/data-structures-and-algorithms/">
                    Search and Sorting
                </a></li> 
    
                <li>CodingBat: 
                    <a href="https://codingbat.com/python/List-2">
                        List-2 
                </a></li> 
    
                <li>Python Principles: 
                    <a href="https://pythonprinciples.com/challenges/Tic-tac-toe-input/">
                        Tic Tac Toe Input
                </a></li> 
            </ul>
    
        </div>
    </div>

        <footer>

            <div id="leftfoot"> &#169; Haris Bhatti, Gavin Wurm, Yeonji Kim, Francesc Aguilar Lite</div>
            <div id="rightfoot">3/10/2021</div>
    
        </footer>
</body>

</html>