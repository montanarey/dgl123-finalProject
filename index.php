<!DOCTYPE html>
<html lang="en">
<!--
    DGL123 Introduction to PHP
    Final Project
    Author: Montana Pistell n0145744
    Last Modified: 
 -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simpsons Archives</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header id="masthead" class="site-header layout-container">
      <a href="/">
        <img class="site-header__logo" src="images/logo.svg" alt="Logo" />
      </a>
    </header>

    <div id="content" class="site-content">
      <div id="primary" class="content-area">
        <div id="main" class="site-main">

          <div class="form__container layout-container">
            <div class="form__row layout-row">
              <div class="form__itemsContainer">
                <div class="form__imageContainer">
                  <img
                    src="images/simpsons.jpg"
                    alt="Simpsons"
                    class="form__image"
                  />
                </div>

                <div class="form__card">
                  <h3 class="form__heading">Select characters to show</h3>

                  <form method="get">
                    <ul class="form__items">
                      <li class="form__item">
                        <label for="homer"> Homer Simpson </label>

                        <input id="homer" type="checkbox" name="homer"/>
                      </li>
                      <li class="form__item">
                        <label for="marge"> Marge Simpson </label>

                        <input id="marge" type="checkbox" name="marge"/>
                      </li>
                      <li class="form__item">
                        <label for="bart"> Bart Simpson </label>

                        <input id="bart" type="checkbox" name="bart" />
                      </li>
                      <li class="form__item">
                        <label for="lisa"> Lisa Simpson </label>

                        <input id="lisa" type="checkbox" name="lisa" />
                      </li>
                      <li class="form__item">
                        <label for="maggie"> Maggie Simpson </label>

                        <input id="maggie" type="checkbox" name="maggie" />
                      </li>
                      <li class="form__item">
                        <label for="moe"> Moe Szyslak </label>

                        <input id="moe" type="checkbox" name="moe" />
                      </li>
                    </ul>

                    <input
                      class="form__button"
                      type="submit"
                      value="Show Characters"
                    />
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="characters__container layout-container">
            <div class="characters__row layout-row">
              <ul class="characters__items">

                <?php 

                $db = mysqli_connect('localhost', 'root', '', 'simpsons'); // database connection
                require "handling.php";

                // Collect data from form and update database display value
                echo("testing here <br> <br>");
                    if(isset($GET['submit'])){

                        $characters = $_POST['']; // get all characters from the form

                        foreach ($characters as $key => $value){ 
                            if ($value == "on") { // if the character was selected, update display property in db to true (1)
                                $query = "UPDATE characters SET display=1 WHERE name=($value)";
                                mysqli_query($db, $query);
                            } else { // if the character was NOT selected, update display property in db to false (0)
                                $query = "UPDATE characters SET display=0 WHERE name=($value)";
                                mysqli_query($db, $query);
                            }
                        }
                    }

                // Display character information based on database display value
                
                $sql = "SELECT * FROM characters WHERE display = 1"; 
                $results = $db->query($sql);

                // For each character, display their information as an li
                while($row = $results->fetch_assoc()) { 
                    displayCharacters($row['image_url'], $row['first_name'], $row['last_name'], $row['age'], $row['occupation'], $row['voiced_by']);
                }

                ?>

              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
