<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EnviarContacto extends Notification
{
    use Queueable;

    protected $request;
    /**
     * Create a new notification instance.
     */
    public function __construct($request)
    {
        $this->request=$request;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->line('El cliente. '.$this->request['name'])
        ->line('asunto. '.$this->request['subject'])
        ->line('email. '.$this->request['email'])
        ->line('detalle. '.$this->request['message'])
        ->line('telefono. '.$this->request['number']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
