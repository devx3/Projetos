function DevXIII()
{
	/**
	 * Get the element ID
	 */
	this.getId = function( id )
	{
		return document.getElementById( id );
	}

	/**
	 * Get the element Class
	 */
	this.getClass = function( theClass )
	{
		return document.getElementsByClassName( theClass );
	}

	/**
	 * Get the element Tag
	 */
	this.getTag = function( tag )
	{
		return document.getElementsByTagName( tag );
	}

	/**
	 * Get the element Name (inputs)
	 */
	this.getName = function( name )
	{
		return document.getElementsByName( name );
	}
}

	
