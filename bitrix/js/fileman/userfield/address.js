;(function()
{
	'use strict';

	BX.namespace('BX.Fileman.UserField');

	if(typeof BX.Fileman.UserField.TypeAddress !== 'undefined')
	{
		return;
	}

	/**
	 * Money type handler class. Will be initialized in Factory.
	 *
	 * @constructor
	 */
	BX.Fileman.UserField.TypeAddress = function()
	{
	};
	BX.extend(BX.Fileman.UserField.TypeAddress, BX.Main.UF.BaseType);

	BX.Fileman.UserField.TypeAddress.USER_TYPE_ID = 'address';

	BX.Fileman.UserField.TypeAddress.prototype.focus = function(field)
	{
		return;
	};

	BX.Main.UF.Factory.setTypeHandler(BX.Fileman.UserField.TypeAddress.USER_TYPE_ID, BX.Fileman.UserField.TypeAddress);

})();
