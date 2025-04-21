<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class MyMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $details;
    public $names;
    
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $names)
    {
        $this->details = $details;
        $this->names = $names;
        
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject('Creación exitosa')->view('mails.user');

        foreach ($this->names as $rutaArchivo) {
            $email->attach(public_path('/files_email/'.$rutaArchivo['name']));
        }
        return $email;
    }
}