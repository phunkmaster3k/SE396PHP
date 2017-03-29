<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './models/dbconnect.php';
        require_once './models/addressCRUD.php';
        require_once './models/util.php';
        require_once './models/validation.php';
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
        
        $errors = [];
        $states = getStates();
        

        if (isPostRequest()) {
            if ( empty($fullname)) {
                $errors[] = 'Fullname is Rquired.';
            }
            
            if ( filter_var($email, FILTER_VALIDATE_EMAIL) !== false ) {
                $errors[] = 'Invalid Email';
            }
            
            if ( empty($addressline1) {
                $errors[] = 'InValid Address';
            }
            
            if ( isDateValid($birthday) === false){
                $errors[] = 'Invalid Date';
            }
            
            
            if ( count($errors) === 0 ) {
                if ( createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday)) {
                    $message = 'Address Added';
                }
                else {
                    $errors[] = 'Could not add to DB';
                }
            }
            
        }
        
        include './templates/add-address.html.php';
        include './templates/errors.html.php';
        include './templates/messages.html.php';
        
        ?>
    </body>
</html>
