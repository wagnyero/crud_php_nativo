<?php

class Tickets
{
    public function getTickets() {
        $tickets = $this->getAllTickets();

        foreach ($tickets as $index => $ticket) {
            $tickets[$index]["id_status"] = $this->getStatus($ticket["id_status"]);
        }
        
        return $tickets;
    }

    public function getTicket($id) {
        $tickets = $this->getAllTickets();
        $tickets = $tickets[$id];
        
        $tickets["id_status"] = $this->getStatus($tickets["id_status"]);

        return $tickets;
    }

    private function getStatus($id)
    {
        $status = [
            1 => 'Novo',
            2 => 'Em tratamento',
            3 => 'Em Análise',
            4 => 'Fechado',
        ];
        
        return $status[$id];
    }

    private function getAllTickets()
    {
        return [
            ['id_ticket'=> '00001', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>1 ,'titulo'=>'Erro de configuração do roteador'],
            ['id_ticket'=> '00002', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>4 ,'titulo'=>'Queda de Circuito'],
            ['id_ticket'=> '00004', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>2 ,'titulo'=>'Troca de interface'],
            ['id_ticket'=> '00005', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>2 ,'titulo'=>'Erro de configuração do roteador'],
            ['id_ticket'=> '00006', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>3 ,'titulo'=>'Queda de Circuito'],
            ['id_ticket'=> '00007', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>3 ,'titulo'=>'Troca de interface'],
            ['id_ticket'=> '00008', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>3 ,'titulo'=>'Queda de Circuito'],
            ['id_ticket'=> '00009', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>2 ,'titulo'=>'Queda de Circuito'],
            ['id_ticket'=> '00010', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>2 ,'titulo'=>'Queda de Circuito'],	
            ['id_ticket'=> '00011', 'data'=>'12/05/2020 20:45:57' ,'id_status'=>2 ,'titulo'=>'Erro de configuração do roteador'],
        ];
    }
}