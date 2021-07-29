<?php

/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/6/2019
 * Time: 01:21
 */
class listedDomainsController_index extends DomainController
{
    public function returnMe()
    {  //the block has to have sites data
        $dc= new DomainController();
        $blockContent="
        <div class=\"container\">    
            <div class=\"text-center mt-4 add-domain\">
            <style>
                 .add-domain{
                    padding: 10%;
                    margin: 5%;
                 }           
            </style>
                <h1>Welcome , view listed Domains</h1>
                <small><u>NB : these domains are currently available now in your local network only</u></small><br><br>
                    <table class='table'>
                        <thead>
                            <th>Domain Name </th>
                            <th> IP Address Hosted</th>
                        </thead>
                        <tbody>
                            ".$dc->getAllDomainsAndIp()."
                        </tbody>
                    </table>
            </div> 
        </div>";
        $array_from_me=['blockContent'=>$blockContent];
        return $array_from_me;
    }
}