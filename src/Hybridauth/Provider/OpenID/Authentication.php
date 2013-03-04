<?php
/*!
* This file is part of the HybridAuth PHP Library(hybridauth.sourceforge.net | github.com/hybridauth/hybridauth)
*
* This branch contains work in progress toward the next HybridAuth 3 release and may be unstable.
*/

namespace Hybridauth\Provider\OpenID;

use Hybridauth\Adapter\Authentication\OpenID\Template;

class Authentication extends Template
{
	function initialize()
	{
		$identifier = $this->getAdapterConfig( 'openid_identifier' ) ? $this->getAdapterConfig( 'openid_identifier' ) 
			: $this->getAdapterParameters( 'openid_identifier' ) ? $this->getAdapterParameters( 'openid_identifier' ) 
			: null;

		$this->letOpenidIdentifier( $identifier );

		parent::initialize();
	}
}
