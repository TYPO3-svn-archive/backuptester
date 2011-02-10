<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Backup
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Backuptester_Domain_Model_Backup extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * files
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Backuptester_Domain_Model_Files>
	 */
	protected $files;
	/**
	 * The constructor.
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}
	
	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 *
	 */
	protected function initStorageObjects(){
		/**
		* Do not modify this method!
		* It will be rewritten on each save in the kickstarter
		* You may modify the constructor of this class instead
		*/
		$this->files = new Tx_Extbase_Persistence_ObjectStorage();
	}
	/**
	 * Setter for files
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Backuptester_Domain_Model_Files> $files files
	 * @return void
	 */
	public function setFiles(Tx_Extbase_Persistence_ObjectStorage $files) {
		$this->files = $files;
	}

	/**
	 * Getter for files
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Backuptester_Domain_Model_Files> files
	 */
	public function getFiles() {
		return $this->files;
	}
	
	/**
	 * Adds a Files
	 *
	 * @param Tx_Backuptester_Domain_Model_Files the Files to be added
	 * @return void
	 */
	public function addFile(Tx_Backuptester_Domain_Model_Files $file) {
		$this->files->attach($file);
	}
	
	/**
	 * Removes a Files
	 *
	 * @param Tx_Backuptester_Domain_Model_Files the Files to be removed
	 * @return void
	 */
	public function removeFile(Tx_Backuptester_Domain_Model_Files $fileToRemove) {
		$this->files->detach($fileToRemove);
	}
	
}
?>