<?php

namespace MWStake\MediaWiki\Lib\Nodes;

use MWStake\MediaWiki\Lib\Nodes\INode;

abstract class Node implements INode {
	/** @var mixed */
	private $originalData;

	/**
	 * @param mixed $data
	 */
	public function __construct( $data ) {
		$this->originalData = $data;
	}

	/**
	 * @return mixed
	 */
	public function getOriginalData() {
		return $this->originalData;
	}
}
