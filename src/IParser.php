<?php

namespace MWStake\MediaWiki\Lib\Nodes;

use MediaWiki\Revision\RevisionRecord;

interface IParser {
	/**
	 * @return RevisionRecord
	 */
	public function getRevision(): RevisionRecord;
}
