<?php

require_once './vendor/autoload.php';

if(!$_POST) exit;

// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$first_name     = $_POST['first_name'];
$last_name     = $_POST['last_name'];
$email    = $_POST['email'];
$phone   = $_POST['phone'];
$current_occupation   = $_POST['current_occupation'];

if(trim($first_name) == '') {
	echo '<div class="error_message">Attention! You must enter your first name.</div>';
	exit();
} else if(trim($last_name) == '') {
    echo '<div class="error_message">Attention! You must enter your last name.</div>';
    exit();
} else if(trim($email) == '') {
	echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
	exit();
} else if(!isEmail($email)) {
	echo '<div class="error_message">Attention! You have enter an invalid e-mail address, try again.</div>';
	exit();
} else if(trim($phone) == '') {
    echo '<div class="error_message">Attention! Please enter a valid phone number.</div>';
    exit();
} else if(trim($current_occupation) == '') {
    echo '<div class="error_message">Attention! Please enter your current occupation.</div>';
    exit();
}

try {

    $transport = new \Swift_SmtpTransport('smtp.gmail.com', 587);
    $transport->setUsername('mikmar31592@gmail.com');
    $transport->setPassword('Avis1831');
    $transport->setEncryption('tls');
    if (php_sapi_name() == 'cli') {
        $transport->setLocalDomain('127.0.0.1');
    }

    $mailer = new \Swift_Mailer($transport);

    $message = new \Swift_Message();
    $message->setSubject('New request');
    $message->setFrom(['mikmar31592@gmail.com' => 'AIESEC']);

    $message->setTo('ishkhan.margaryan@gmail.com');

    $bodyView = 'New request from ' . $first_name . ' ' . $last_name . '<br>email: ' . $email . '<br>Current occupation: ' . $current_occupation;
    $message->setBody($bodyView, 'text/html');

    $result = $mailer->send($message);

    if ($result) {
        echo "<fieldset>";
        echo "<div id='success_page'>";
        echo "<h1>Registered Successfully.</h1>";
        echo "<p>Thank you <strong>$first_name</strong></p>";
        echo "</div>";
        echo "</fieldset>";
    } else {
        echo 'NOT SENT';
    }

} catch (\Exception $e) {

    echo 'ERROR! Please try again.';
}