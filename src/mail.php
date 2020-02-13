<?php
$errors = array();      // array to hold validation errors
$data   = array();      // array to pass back data

// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array

if (empty($_POST['link']) && empty($_POST['email'])
    && empty($_POST['email-popup'])
    && empty($_POST['email-footer'])
    && empty($_POST['message-popup'])
    && empty($_POST['message-footer'])) {
    $errors['link'] = 'Field is required.';
}

// return a response ===========================================================

// if there are any errors in our errors array, return a success boolean of false
if (!empty($errors)) {

    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {

    // if there are no errors process our form, then return a message

    // DO ALL YOUR FORM PROCESSING HERE
    // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

    $link    = htmlspecialchars(trim($_POST['link']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $email_popup   = htmlspecialchars(trim($_POST['email-popup']));
    $email_footer   = htmlspecialchars(trim($_POST['email-footer']));
    $message_footer = htmlspecialchars(trim($_POST['message-footer']));
    $message_popup = htmlspecialchars(trim($_POST['message-popup']));

    $to      = 'nbstock1@gmail.com';
    $subject = "";
    if (isset($_GET['lang']) == 'ru') {
        $subject .= "car selection (запрос)";
    } elseif (isset($_GET['lan']) == 'lv') {
        $subject .= "car selection (pieprasijums)";
    } else {
        $subject .= "car selection (request)";
    }


    $message = '
        <p>Ссылка:<a href="' . $link . '">' . $link . '</a></p>
        <p>Сообщение:<span>' . $message_popup . ' '.$message_footer.'</span></p>
        <p>E-mail: <a href="mailto:" ' . $email . ' ' . $email_popup . '' . $email_footer . '>' . $email . '' . $email_popup . '' . $email_footer . '</a></p>
        ';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: ' . $email . $email_popup. $email_footer."\r\nReply-to: $email . $email_popup . $email_footer\r\n";


    if (mail($to, $subject, $message, $headers)) {
        // show a message of success and provide a true success variable
        $data['success'] = true;
        if (isset($_GET['lang']) == 'ru') {
            $data['message'] .= 'Спасибо за заявку .. мы свяжемся с вами!';
        } elseif (isset($_GET['lan']) == 'lv') {
            $data['message'] .= 'Paldies par Jūsu pieprasījumu. <br>Mēs sazināsimies ar Jums tuvākajā laikā!';
        } else {
            $data['message'] .= 'Thank you for your request. We will contact you soon!';
        }
    }
}


// return all our data to an AJAX call
echo json_encode($data);
