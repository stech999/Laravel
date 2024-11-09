<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingCompletedMailing extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Переменная для передачи данных в шаблон

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data; // Инициализация данных
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking Completed Mailing',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.booked', // Укажите правильный путь к вашему шаблону
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    /**
     * Передача данных в представление.
     */
    public function build(): Mailable
    {
        return $this->view('emails.booked')
            ->with(['data' => $this->data]); // Передаем данные в шаблон
    }
}
