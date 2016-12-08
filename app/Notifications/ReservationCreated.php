<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ReservationCreated extends Notification
{

    use Queueable;

    protected $reservation;

    /**
     * Create a new notification instance.
     *
     * @param Reservation $reservation
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hi!')
            ->line('This email message is to confirm a trip reservation with the following details:')
            ->line("Departure Date and time: {$this->reservation->reservation_date} {$this->reservation->schedule->departure}")
            ->line("From {$this->reservation->schedule->origin_name} To {$this->reservation->schedule->destination_name}")
            ->line("For {$this->reservation->quantity} Person(s) priced @ ₱{$this->reservation->fare}")
            ->line("Total: ₱{$this->reservation->total}")
            ->line('Please confirm the reservation by clicking the button below:')
            ->action('Confirm Reservation', route('client.reservations.confirm', ['reservation' => $this->reservation->id]))
            ->line("Only confirmed reservations are counted.")
            ->line("Please take note that we have the right to penalize or cancel your reservation depending on the circumstance.")
            ->line('Thank you for using our service!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
