<?php
$errors = [];
$fields = ['first_name', 'last_name',  'email', 'phone', 'address1', 'address2', 'town',  'county', 'country', 'des', 'cv', 'csrf'];
$optionalFields = ['phone', 'address2'];
$values = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    foreach ($fields as $field) {

        if (empty($_POST[$field]) && !in_array($field, $optionalFields)) {
            $errors[] = $field;
        } else {
            $values[$field] = $_POST[$field];
        }
    }
}
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![end if]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![end if]-->

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specifc Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Stylessheets -->
    <link rel="stylesheet" href="styles.css">

    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="row">
                <div class="col-50">
                    <label for="first_name">First name</label>
                    <div>
                        <input type="text" name="first_name" id="first_name">
                    </div>
                    <?php if (in_array('first_name', $errors)) : ?>
                        <span class="error">First name is required</span>
                    <?php endif; ?>

                </div>
                <div class="col-50">
                    <label for="last_name">Last name</label>

                    <input type="text" name="last_name" id="last_name">
                    <?php if (in_array('last_name', $errors)) : ?>
                        <span class="error">Last name is required</span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-50">
                    <label for="email">Email address</label>
                    <div>
                        <input type="text" name="email" id="email">
                    </div>

                    <?php if (in_array('email', $errors)) : ?>
                        <span class="error">Email address is reuiqred</span>
                    <?php endif; ?>

                </div>
                <div class="col-50">

                    <label for="phone">Phone</label>
                    <div>
                        <input type="text" name="phone" id="phone">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-50">
                    <label for="address1">Address 1</label>
                    <div>
                        <input type="text" name="address1" id="address1">
                    </div>

                    <?php if (in_array('address1', $errors)) : ?>
                        <span class="error">Address1 is required</span>
                    <?php endif; ?>
                </div>
                <div class="col-50">

                    <label for="address2">Address 2</label>
                    <div>
                        <input type="text" name="address2" id="address2">
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-50">

                    <label for="address2">Town</label>
                    <div>
                        <input type="text" name="town" id="town">
                    </div>
                    <?php if (in_array('town', $errors)) : ?>
                        <span class="error"> Town Missing</span>
                    <?php endif; ?>
                </div>
                <div class="col-50">
                    <label for="county">County</label>
                    <div>
                        <input type="text" name="county" id="county">
                    </div>
                    <?php if (in_array('county', $errors)) : ?>
                        <span class="error">County is required</span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-50">
                    <label for="postcode">Postcode</label>
                    <div>
                        <input type="text" name="postcode" id="postcode">
                    </div>

                    <?php if (in_array('address1', $errors)) : ?>
                        <span class="error">Postcode is required</span>
                    <?php endif; ?>
                </div>
                <div class="col-50">
                    <label for="country">Country</label>
                    <div>
                        <select name="country" id="country">
                            <option value="uk">United Kingdom</option>
                            <option value="spain">Spain</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <?php if (in_array('country', $errors)) : ?>
                        <span class="error">Country is required</span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <label for="des">Description</label>
                    <div>
                        <textarea type="text" name="des" id="des" rows="6"></textarea>
                    </div>
                    <?php if (in_array('des', $errors)) : ?>
                        <span class="error">Description is required</span>
                    <?php endif; ?>
                </div>

            </div>


            <div class="row">
                <div class="col-50">
                    Your C.V
                    <br />
                    Select a file
                    <input type="file" name="fileToUpload" id="fileToUpload">

                    <div>
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </div>
            </div>
            <input type="hidden" name="csrf" value="d4f3e48f-7ae3-4398-ba24-0dca81383e6c">

        </form>
    </div>

</body>

</html>