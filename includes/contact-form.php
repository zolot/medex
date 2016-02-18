<?
// Field Name
$name = $_POST['name'];
if(iconv_strlen($name) < 2){echo '<div class="alert error fade in">Please enter your name.<a href="#" class="close-alert" data-dismiss="alert"></a></div>';exit();}
// Field Email
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {echo '<div class="alert error fade in">Please enter a valid email address.<a href="#" class="close-alert" data-dismiss="alert"></a></div>';exit();}
// Field Category
$category = $_POST['category'];
$subject = $_POST['subject'];
// Field Message
$message = $_POST['message'];
if(iconv_strlen($message) < 10){echo '<div class="alert error fade in">Please enter your message. It should have at least 10 characters.<a href="#" class="close-alert" data-dismiss="alert"></a></div>';exit();}

$headers = "From: $name <$email>\r\n";
mail('support@russian-themes.com', $subject, 'Name:'.$name."\n\nCategory: ".$category."\n\nMessage:".$message, $headers);
echo "1";
?>

