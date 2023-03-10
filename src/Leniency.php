<?php

/*
 * Copyright (c) Devinow (https://devinow.xyz/)
 */

namespace Devinow\I18n;


final class Leniency {

	/** @var int full leniency during lookups and comparisons */
	const FULL = Affinity::NONE;
	/** @var int extremely high leniency during lookups and comparisons */
	const EXTREMELY_HIGH = Affinity::EXTREMELY_LOW;
	/** @var int very high leniency during lookups and comparisons */
	const VERY_HIGH = Affinity::VERY_LOW;
	/** @var int high leniency during lookups and comparisons */
	const HIGH = Affinity::LOW;
	/** @var int moderate leniency during lookups and comparisons */
	const MODERATE = Affinity::MODERATE;
	/** @var int low leniency during lookups and comparisons */
	const LOW = Affinity::HIGH;
	/** @var int very low leniency during lookups and comparisons */
	const VERY_LOW = Affinity::VERY_HIGH;
	/** @var int extremely low leniency during lookups and comparisons */
	const EXTREMELY_LOW = Affinity::EXTREMELY_HIGH;
	/** @var int no leniency during lookups and comparisons */
	const NONE = Affinity::FULL;

	private function __construct() {}

}

?>