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
                        "<td><a href='/controller/TicketsController.php?action=detail&ticket_id=" . $index . "'>Visualizar</a></td>" .
                        "<td>" . $d["id_ticket"] . "</td>" .
                        "<td>" . $d["id_status"] . "</td>" .
                        "<td>" . $d["data"] . "</td>" .
                        "<td>" . $d["titulo"] . "</td>" .
                      "</tr>";
        }

        echo $html;
    }

    public function formList() {
        return header("Location: ../view/list.php");
    }

    public function formDetail($idTicket) {
        return header("Location: ../view/detail.php?ticket_id=$idTicket");
    }

    public function show($id)
    {
        $data = $this->ticket->getTicket($id);

        $html = "<tr>" .
                    "<td>" . $data["id_ticket"] . "</td>" .
                    "<td>" . $data["id_status"] . "</td>" .
                    "<td>" . $data["data"] . "</td>" .
                    "<td>" . $data["titulo"] . "</td>" .
                    "</tr>";

        echo $html;
    }
}

$ticketController = new TicketsController();

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'detail':
            $ticketController->formDetail($_GET['ticket_id']);
            break;
        case 'list':
            $ticketController->formList();
            break;
        
        default:
            $ticketController->formList();
            break;
    }
}