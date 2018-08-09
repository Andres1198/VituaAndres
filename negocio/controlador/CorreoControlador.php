<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\dao\ReservaPredeterminadoDAO;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
class CorreoControlador extends GenericoControlador {
     public function enviarCorreo() {


        require './PHPMailer-master/src/Exception.php';
        require './PHPMailer-master/src/PHPMailer.php';
        require './PHPMailer-master/src/SMTP.php';


        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'vituta.descubriendo@gmail.com';                 // SMTP username
            $mail->Password = 'proyectosena1';                       // SMTP username
            // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            //Recipients
            $mail->setFrom('vituta.descubriendo@gmail.com', 'vituta.descubriendo');
            $electronico=$_POST['usu_olvidoClave'];
            $mail->addAddress($electronico, '');     // Add a recipient
            $aleatorio=rand(1200,4500);
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body = $aleatorio;
            $mail->send();
                
        include_once CARPETA_PRINCIPAL . '/vista/CodigoRecuperacion.php';
    
        } catch (Exception $e) {
            print_r($e);
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
   
     public function confirmacionReserva($id) {


        require './PHPMailer-master/src/Exception.php';
        require './PHPMailer-master/src/PHPMailer.php';
        require './PHPMailer-master/src/SMTP.php';

        $usuario = $_SESSION['usuario'];
        $reservaDAO = new ReservaPredeterminadoDAO($this->cnn);
        $reserva =$reservaDAO->consultarReserva($id);
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'vituta.descubriendo@gmail.com';                 // SMTP username
            $mail->Password = 'proyectosena1';                       // SMTP username
            // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            //Recipients
            
            $mail->setFrom('vituta.descubriendo@gmail.com', 'vituta.descubriendo');
//            $electronico=$_POST['usu_olvidoClave'];
            $mail->addAddress('cajm026@gmail.com', 'camilo');     // Add a recipient
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body ='';
            $mail->send();
                        
        } catch (Exception $e) {
            print_r($e);
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}
