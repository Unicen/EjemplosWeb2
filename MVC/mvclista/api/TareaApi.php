<?php
require 'api.php';
require '../models/TareasModel.php';
require '../libs/phpmailer/PHPMailerAutoload.php';


class TareaApi extends Api
{
  private $model;
  private $mail;

  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new TareasModel();
    $this->setupMail();
  }

  protected function tarea($argumentos){
    switch ($this->method) {
      case 'GET':
          if(count($argumentos)>0){
            $tarea = $this->model->getTarea($argumentos[0]);
            $error['Error'] = "La tarea no existe";
            return ($tarea) ? $tarea : $error;
          }else{
            return $this->model->getTareas();
          }
        break;
      case 'DELETE':
          if(count($argumentos)>0){
            $error['Error'] = "La tarea no existe";
            $success['Success'] = "La tarea se borro";
            $filasAfectadas = $this->model->eliminarTarea($argumentos[0]);
            return ($filasAfectadas == 1) ? $success : $error;
          }
        break;
        case 'POST':
            if(count($argumentos)==0){
              $error['Error'] = "La tarea no se creo";
              $id_tarea = $this->model->crearTarea($_POST['tarea'],[]);
              return ($id_tarea > 0) ? $this->model->getTarea($id_tarea) : $error;
            }
          break;
      default:
           return "Only accepts GET";
        break;
    }
   }

   protected function setupMail(){
     //Create a new PHPMailer instance
     $this->mail = new PHPMailer;

     //Tell PHPMailer to use SMTP
     $this->mail->isSMTP();

     //Enable SMTP debugging
     // 0 = off (for production use)
     // 1 = client messages
     // 2 = client and server messages
     $this->mail->SMTPDebug = 2;

     //Ask for HTML-friendly debug output
     $this->mail->Debugoutput = 'html';

     //Set the hostname of the mail server
     $this->mail->Host = 'smtp.gmail.com';
     // use
     // $this->mail->Host = gethostbyname('smtp.gmail.com');
     // if your network does not support SMTP over IPv6

     //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
     $this->mail->Port = 587;

     //Set the encryption system to use - ssl (deprecated) or tls
     $this->mail->SMTPSecure = 'tls';

     //Whether to use SMTP authentication
     $this->mail->SMTPAuth = true;

     //Username to use for SMTP authentication - use full email address for gmail
     $this->mail->Username = "perezalejandrojulian@gmail.com";

     //Password to use for SMTP authentication
     $this->mail->Password = "web2tudai";

     //Set who the message is to be sent from
     //$this->mail->setFrom('pere@example.com', 'First Last');

   }
   protected function enviar_mail(){
          //AGREGAR SENDER

          //Set who the message is to be sent to
          $this->mail->addAddress($_POST['to'], 'Nombre de fantasia');

          //Set the subject line
          $this->mail->Subject = $_POST['subject'];

          //Read an HTML message body from an external file, convert referenced images to embedded,
          //convert HTML into a basic plain-text alternative body
          $this->mail->msgHTML($_POST['message']);

          //send the message, check for errors
          if (!$this->mail->send()) {
              return  "Mailer Error: " . $this->mail->ErrorInfo;
          } else {
              return  "Message sent!";
          }
   }

   protected function mail($argumentos){
     switch ($this->method) {
       case 'POST':
         return $this->enviar_mail();
         break;
       default:
            return "Only accepts GET";
         break;
     }
   }



}


 ?>
