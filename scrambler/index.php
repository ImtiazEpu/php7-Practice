<?php
require_once "functions.php";
$task = 'encode';
if ( isset( $_GET['task'] ) && $_GET['task'] != '' ) {
	$task = $_GET['task'];
}

$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if ( 'key' == $task ) {
	$key_original = str_split( $key );
	shuffle( $key_original );
	$key = join( '', $key_original );
} else if ( isset( $_POST['key'] ) && $_POST['key'] != '' ) {
	$key = $_POST['key'];
}
$scrambleData = '';
if ( 'encode' == $task ) {
	$data = $_POST['data'] ?? '';
	if ( $data != '' ) {
		$scrambleData = encodeData( strtolower( $data ), $key );
	}
}
if ( 'decode' == $task ) {
	$data = $_POST['data'] ?? '';
	if ( $data != '' ) {
		$scrambleData = decodeData( $data, $key );
	}
}


include_once "header.php" ?>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Data Scrambler</h2>
                <p>Use this application to scramble your data</p>
                <p>
                    <a href="?task=encode">Encode</a> |
                    <a href="?task=decode">Decode</a> |
                    <a href="?task=key">Generate Key</a>

                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" action="/scrambler<?php if ( 'decode' == $task ) {
					echo "?task=decode";
				} ?>">
                    <label for="key">Key</label>
                    <input type="text" name="key" id="key" <?php displayKey( $key ) ?>>
                    <label for="data">Data</label>
                    <textarea name="data" id="data"><?php if ( isset( $_POST['data'] ) ) {
							echo $_POST['data'];
						} ?></textarea>
                    <label for="result">Result</label>
                    <textarea id="result"><?php echo $scrambleData; ?></textarea>
                    <button type='submit'>Do It For Me</button>
                </form>
            </div>
        </div>
    </div>
<?php
require_once "footer.php"
?>