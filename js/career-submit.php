<?php

$captchaResult = $_POST["captchaResult"];
$firstNumber = $_POST["firstNumber"];
$secondNumber = $_POST["secondNumber"];

$checkTotal = $firstNumber + $secondNumber;

if ($captchaResult != $checkTotal) {
	echo "<script>alert('Incorrect value for CAPTCHA. Please try again.');</script>";
    if (headers_sent())
    {
      die('<script type="text/javascript">window.location.href="http://www.vmechatronics.com/career.php";</script>');
    }else{
      header('Location: http://www.vmechatronics.com/career.php');
      die();
    }
}

$to = "parthpanchal222@gmail.com"; // "kadbros699@gmail.com"; 

$subject = "Resume - Candidate for VMPL";

//Sanitize input data using PHP filter_var().
$fromEmail = filter_var($_POST['candidateMail'], FILTER_SANITIZE_STRING);
$fromName = filter_var($_POST['candidateName'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['candidateMsg'], FILTER_SANITIZE_STRING);

$message_body = "Name: ".$fromName."\nEmail: ".$fromEmail."\nMessage: ". $message;

$file_attached = false;
if(isset($_FILES['attachment'])) //check uploaded file
{
    //get file details we need
    $file_tmp_name    = $_FILES['attachment']['tmp_name'];
    $file_name        = $_FILES['attachment']['name'];
    $file_size        = $_FILES['attachment']['size'];
    $file_type        = $_FILES['attachment']['type'];
    $file_error       = $_FILES['attachment']['error'];

    //exit script and output error if we encounter any
    if($file_error>0)
    {
        echo "<script>alert('Error in sending résumé.');</script>";
        if (headers_sent())
        {
          die('<script type="text/javascript">window.location.href="http://www.vmechatronics.com/career.php";</script>');
        }else{
          header('Location: http://www.vmechatronics.com/career.php');
          die();
        }
    }

    $size_of_uploaded_file = $_FILES['attachment']['size']/1024;//size in KBs
    $name_of_uploaded_file = basename($_FILES['attachment']['name']);
    //get the file extension of the file
    $type_of_uploaded_file = substr($name_of_uploaded_file, strrpos($name_of_uploaded_file, '.') + 1);

    //Settings
    $max_allowed_file_size = 10240; // size in KB
    $allowed_extensions = array("doc", "docx", "pdf","txt");

    //Validations
    if($size_of_uploaded_file > $max_allowed_file_size )
    {
      echo "<script>alert('Size of the file should be less than 10mb.');</script>";
      if (headers_sent())
      {
        die('<script type="text/javascript">window.location.href="http://www.vmechatronics.com/career.php";</script>');
      }else{
        header('Location: http://www.vmechatronics.com/career.php');
        die();
      }
    }

    //------ Validate the file extension -----
    $allowed_ext = false;
    for($i=0; $i<sizeof($allowed_extensions); $i++)
    {
      if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
      {
        $allowed_ext = true;
      }
    }

    if(!$allowed_ext)
    {
      echo "<script>alert('The uploaded file is not a supported file type. Only the following file types are supported: doc, docx, pdf.');</script>";
      if (headers_sent())
      {
        die('<script type="text/javascript">window.location.href="http://www.vmechatronics.com/career.php";</script>');
      }else{
        header('Location: http://www.vmechatronics.com/career.php');
        die();
      }
    }


    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));
    //now we know we have the file for attachment, set $file_attached to true
    $file_attached = true;
}

if($file_attached) //continue if we have the file
{
    $boundary = md5("kadbros");
    //header
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$fromEmail."\r\n";
    $headers .= "Reply-To: ".$fromEmail."" . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message_body));

    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
    $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $encoded_content;
}else{
    //proceed with PHP email.
    $headers = 'From:'.$fromEmail.'\r\n'.
    'Reply-To: '.$fromEmail.'' . "\n" .
    'X-Mailer: PHP/' . phpversion();
    $body = $message_body;
}

$flgchk = mail ($to, $subject, $body, $headers);

if($flgchk){
  if (headers_sent())
  {
    die('<script type="text/javascript">window.location.href="http://www.vmechatronics.com/acknowledgement.html";</script>');
  }else{
    header('Location: http://www.vmechatronics.com/acknowledgement.html');
    die();
  }
  header("Location: http://www.vmechatronics.com/acknowledgement.html");
 }
else{
  echo "<script>alert('Error in sending résumé.');</script>";
  if (headers_sent())
  {
    die('<script type="text/javascript">window.location.href="http://www.vmechatronics.com/career.php";</script>');
  }else{
    header('Location: http://www.vmechatronics.com/career.php');
    die();
  }
}
?>