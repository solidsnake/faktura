<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Widget class "Open invoices"
 *
 * @category    Widgets
 * @package     Faktura
 * @author      Leonard Fischer <post@leonardfischer.de>
 * @copyrights  2014 Leonard Fischer
 * @version     1.0
 * @since       1.2
 */
class Widgets_OpenInvoices extends Widgets_Base
{
	/**
	 * The widgets name.
	 */
	const NAME = 'Open invoices';

	/**
	 * The widgets template
	 */
	const TEMPLATE = 'widgets/open_invoices';

	/**
	 * Defines, if this widget is configurable.
	 */
	const CONFIGURABLE = false;

	/**
	 * Defines, how wide this widget is.
	 */
	const WIDTH = 1;

	/**
	 * Defines the widget color.
	 */
	const COLOR = '#f39c12';

	/**
	 * Defines the widget font-color.
	 */
	const FONTCOLOR = '#fff';


	/**
	 * Method for initializing the widget.
	 *
	 * @return  self
	 */
	public function init()
	{
		$this->template_data = array(
			'invoices' => ORM::factory('Invoice')->where('paid_on_date', '=', null)->order_by('id', 'DESC')->find_all()
		);

		return $this;
	} // function
} // class