<?php


/*
 * This file is part of the Pho package.
 *
 * (c) Emre Sokullu <emre@phonetworks.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pho\Kernel\Services\Database\Adapters;

use Pho\Kernel\Services\Database\Adapters\Redis;

class EncryptedRedis extends Redis
{

	public function __construct(Kernel $kernel, string $uri = "") {
		parent::__construct($kernel, $uri);
		$public_key = getenv("");
	}

}
