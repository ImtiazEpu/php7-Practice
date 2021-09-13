<?php
include_once "function.php";
$fruits = [ 'apple', 'banana', 'orange', 'plum', 'dates', 'mango', 'pineapple' ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- You should properly set the path from the main file. -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>Form Example</h1>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <p>
				<?php
				$fname   = '';
				$lname   = '';
				$checked = '';
				?>
				<?php
				if ( isset( $_POST['fname'] ) && ! empty( $_POST['fname'] ) ) {
					$fname = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_STRING );
				}
				if ( isset( $_POST['lname'] ) && ! empty( $_POST['lname'] ) ) {
					$lname = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_STRING );;
				}
				if ( isset( $_POST['cb1'] ) && $_POST['cb1'] == 1 ) {
					$checked = 'checked';
				}
				$selectedSingleFruits   = filter_input( INPUT_POST, 'sFruits', FILTER_SANITIZE_STRING );
				$selectedMultipleFruits = filter_input( INPUT_POST, 'mFruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY );

				$allowTypes = [ 'image/png', 'image/jpg', 'image/jpeg' ];
				if ( isset( $_FILES['photo'] ) ) {
					$totalFiles = count( $_FILES['photo']['name'] );
					for ( $i = 0; $i < $totalFiles; $i ++ ) {
						if ( in_array( $_FILES['photo']['type'][ $i ], $allowTypes ) !== false && $_FILES['photo']['type'][ $i ] < 5 * 1024 * 1024 ) {
							move_uploaded_file( $_FILES['photo']['tmp_name'][ $i ], "files/" . $_FILES['photo']['name'][ $i ] );
						}
					}

				}
				?>
            </p>
            <p>
                First Name: <?php echo htmlspecialchars( $fname ) ?><br/>
                LAst Name: <?php echo htmlspecialchars( $lname ) ?><br/>
                Check Data: <?php echo $checked ?><br/>
				<?php

				if ( ( $selectedMultipleFruits ) != array() && count( $selectedMultipleFruits ) > 0 ) {
					echo "You have selected: " . join( ', ', $selectedMultipleFruits );
				} else {
					echo "No Data Found";
				} ?>

            </p>
            <pre>
                <p>
                    <?php
                    print_r( $_POST );
                    print_r( $_FILES ); ?>
                </p>
            </pre>
            <form action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" value="<?php echo htmlspecialchars( $fname ) ?>">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" value="<?php echo htmlspecialchars( $lname ) ?>">
                    <div>
                        <input type="checkbox" id="confirmField" name="cb1" value="1" <?php echo $checked ?>>
                        <label class="label-inline" for="confirmField">Send a copy to yourself</label>
                    </div>
                    <label class="label">Select some fruits</label>

                    <input type="checkbox" name="fruits[]" value="orange" <?php isChecked( 'fruits', 'orange' ) ?>>
                    <label class="label-inline">Orange</label><br/>
                    <input type="checkbox" name="fruits[]" value="apple" <?php isChecked( 'fruits', 'apple' ) ?>>
                    <label class="label-inline">Apple</label><br/>
                    <input type="checkbox" name="fruits[]" value="banana" <?php isChecked( 'fruits', 'banana' ) ?>>
                    <label class="label-inline">Banana</label><br/>
                    <input type="checkbox" name="fruits[]" value="mango" <?php isChecked( 'fruits', 'mango' ) ?>>
                    <label class="label-inline">Mango</label><br/>
                    <input type="checkbox" name="fruits[]" value="pineapple" <?php isChecked( 'fruits', 'pineapple' ) ?>>
                    <label class="label-inline">Pineapple</label><br/>

                    <label for="ageRangeField">Fruits</label>
                    <select id="ageRangeField" name="sFruits">
                        <option value="" disabled selected>Select Some Fruits</option>
						<?php displayOption( $fruits, $selectedSingleFruits ); ?>
                    </select>
                    <select style="height: 200px" id="ageRangeField" name="mFruits[]" multiple>
                        <option value="" disabled selected>Select Some Fruits</option>
						<?php multipleDisplayOption( $fruits, $selectedMultipleFruits ); ?>
                    </select>
                    <div>
                        <label for="photo">Photo</label>
                        <input type="file" id="photo" name="photo[]"><br>
                        <input type="file" id="photo" name="photo[]"><br>
                        <input type="file" id="photo" name="photo[]"><br>
                    </div>
                    <Button class="button-primary" type="submit" value="">Submit</Button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>