<?php

/**
 * @package     Joomla.Installation
 * @subpackage  View
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * The Installation Default Language View
 *
 * @since  3.1
 */
class InstallationViewDefaultlanguageHtml extends JViewHtml
{
	/**
	 * Container with all installed languages
	 *
	 * @var    array
	 * @since  3.1
	 */
	public $items;

	/**
	 * Redefine the model so the correct type hinting is available.
	 *
	 * @var     InstallationModelLanguages
	 * @since   3.1
	 */
	protected $model;

	/**
	 * Method to render the view.
	 *
	 * @return  string  The rendered view.
	 *
	 * @since   3.1
	 */
	public function render()
	{
		$this->items                = new stdClass;
		$this->items->administrator = $this->model->getInstalledlangsAdministrator();
		$this->items->frontend      = $this->model->getInstalledlangsFrontend();
		$this->form                 = $this->model->getForm();

		return parent::render();
	}
}
