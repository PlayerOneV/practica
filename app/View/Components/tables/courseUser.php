<?php
namespace App\View\Components\tables;
use Illuminate\View\Component;

class courseUser extends Component
{
    public $users; //Creamos una variable
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($users) //Indicamos en el constructor que nuestro componente va a recibir información
    {
        $this->users = $users; //Con esto nuestro componente ya tiene acceso a la información que le pasamos por la vista
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.course-user');
    }
}
