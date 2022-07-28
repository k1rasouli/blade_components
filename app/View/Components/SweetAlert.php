<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SweetAlert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $message;
    public $type;
    public $errors;
    public $confirmButtonText;
    public $confirmButtonType;

    public function __construct()
    {
        $this->confirmButtonType = 'primary';
        $this->message = session('alert')['message'];
        $this->type = session('alert')['type'];
        if($this->type == 'error')
            $this->confirmButtonType = 'danger';
        if(count(session('alert')['errors']) > 0) {
            $this->errors = "<ol>";
            foreach (session('alert')['errors'] as $error) {
                foreach ($error as $errorDetail)
                    $this->errors .= "<li>" . $errorDetail . "</li>";
            }
            $this->errors .= "</ol>";
        }
        $this->confirmButtonText = "OK";
        session()->forget('alert');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sweet-alert');
    }
}
