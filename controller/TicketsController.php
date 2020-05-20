<?php

require_once("../model/Tickets.php");

class TicketsController
{
    private $ticket;

    public function __construct()
    {
        $this->ticket = new Tickets();
    }

    public function index()
    {
        $data = $this->ticket->getTickets();
        $html = "";
        foreach ($data as $index => $d) {
            $html .= "<tr>" .
                        "<td><a href='controller/TicketsController?action=list&ticket=" . $index . "'>Visualizar</a></td>" .
                        "<td>" . $d["id_ticket"] . "</td>" .
                        "<td>" . $d["id_status"] . "</td>" .
                        "<td>" . $d["data"] . "</td>" .
                        "<td>" . $d["titulo"] . "</td>" .
                      "</tr>";
        }

        echo $html;
    }

    public function show()
    {
        $data = $this->ticket->getTickets();
        $html = "";
        foreach ($data as $index => $d) {
            $html .= "<tr>" .
                        "<td><a href='controller/TicketsController?action=list&ticket=" . $index . "'>Visualizar</a></td>" .
                        "<td>" . $d["id_ticket"] . "</td>" .
                        "<td>" . $d["id_status"] . "</td>" .
                        "<td>" . $d["data"] . "</td>" .
                        "<td>" . $d["titulo"] . "</td>" .
                      "</tr>";
        }

        echo $html;
    }
}

$ticketController = new TicketsController();

// if(isset($_GET['action'])) {
//     switch ($_GET['action']) {
//         case 'list-all':
//             $ticketController->index();
//             break;
        
//         default:
//             $ticketController->index();
//             break;
//     }
// }