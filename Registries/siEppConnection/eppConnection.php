<?php
namespace Metaregistrar\EPP;
class siEppConnection extends eppConnection
{
    public function __construct($logging = false, $settingsfile = null)
    {
        parent::__construct($logging, $settingsfile);
        parent::setServices(array(
            'urn:ietf:params:xml:ns:domain-1.0' => 'domain',
            'urn:ietf:params:xml:ns:host-1.0' => 'host',
            'urn:ietf:params:xml:ns:contact-1.0' => 'contact'
        ));
        parent::setLanguage('en-US');
        parent::setVersion('1.0');
        parent::enableDnssec();

        parent::useExtension('dnssi-1.2');
        parent::useExtension('registrar-1.0');
        parent::useExtension('DNScheck-1.0');


    }
}
