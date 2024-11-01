<?php

namespace Nicojqn\Microsoftgraph;

use Nicojqn\Microsoftgraph\Traits\Authenticate;
use Nicojqn\Microsoftgraph\Traits\Connect;
use Microsoft\Graph\Model\Contact;

class Contacts
{
    private $model = Contact::class;

    use Connect,
        Authenticate;

    /**
     * Get all contacts
     */
    public function getContacts(): array
    {
        return self::get('/me/contacts', returns: Contact::class);
    }
}
