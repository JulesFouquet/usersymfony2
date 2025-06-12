<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
public function sendEmailAction(Request $request, MailerInterface $mailer): Response
{

   $email = (new Email())
       ->from('didierdeschamps@example.com')
       ->to('zinedine@example.com')
       ->subject('Coupe du monde')
       ->text('vous êtes invité à la prochaine coupe du monde');

   $mailer->send($email);


return $this->redirectToRoute('homepage');
}
}