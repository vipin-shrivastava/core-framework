<?php

namespace Webkul\UVDesk\CoreBundle\Templates\Email\Resources\Agent;

use Webkul\UVDesk\CoreBundle\Templates\Email\UVDeskEmailTemplateInterface;

abstract class TicketCreated implements UVDeskEmailTemplateInterface
{
    private static $type = "ticket";
    private static $name = 'Ticket generated by customer';
    private static $subject = 'A new ticket #{%ticket.id%} has been generated by {%ticket.customerName%}';
    private static $message = <<<MESSAGE
    <p></p>
    <p></p>
    <p style="text-align: center; ">{%global.companyLogo%}</p>
    <p style="text-align: center; ">
        <br />
    </p>
    <p style="text-align: center; ">
        <b>
            <span style="font-size: 18px;">Ticket generated!!</span>
        </b>
    </p>
    <br />Hello {%ticket.agentName%},
    <p></p>
    <p>
        <br />
    </p>
    <p>A new ticket {%ticket.id%} has been generated by {%ticket.customerName%} from the id {%ticket.customerEmail%}. Hit on the link provided so that you can have the access to the ticket {%ticket.agentLink%}.</p>
    <p>
        <br />
    </p>
    <p>Here goes the ticket message:</p>
    <p>{%ticket.message%}
        <br />
    </p>
    <p>
        <br />
    </p>
    <p>
        <br />
    </p> Thanks and Regards
    <p></p>
    <p>{%global.companyName%}
        <br />
    </p>
    <p></p>
    <p></p>
MESSAGE;

    public static function getName()
    {
        return self::$name;
    }

    public static function getTemplateType()
    {
        return self::$type;
    }

    public static function getSubject()
    {
        return self::$subject;
    }

    public static function getMessage()
    {
        return self::$message;
    }
}