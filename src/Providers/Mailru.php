<?php

namespace SocialLinks\Providers;

/**
 * MailRu and Odnoklassniki are different social networks, but they share an owner and parts of API
 */
Class Mailru extends Odnoklassniki
{
	protected $countField = 'share_mm';

	/**
     * {@inheritDoc}
     */
	public function shareUrl()
	{
		return $this->buildUrl('http://connect.mail.ru/share',
			[
				'url',
				'title',
				'text' => 'description',
				'image' => 'imageurl',
			]
		);

	}

}